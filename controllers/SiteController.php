<?php

namespace app\controllers;

use app\models\Callbacks;
use app\models\Subscribers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{

    public $form_callback;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $form_subscr = new Subscribers();
        $form_callback = new Callbacks();
        Yii::$app->view->params['form_callback'] = $form_callback ;
        return $this->render('index', [
            'form_subs' => $form_subscr,
            //'form_callback' => $form_callback,
        ]);
    }

    public function actionInsCallback()
    {

        if (Yii::$app->request->isAjax) {
            return json_encode(['status' => 'Pапрос принят']);
        }
        $model = new Callbacks();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            return json_encode([
                'status' => 'ok'
            ]);
        } else {
            return json_encode([
                'status' => 'error'
            ]);
        }

    }
    public function actionInsSubscribers()
    {
        $model = new Subscribers();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $exist = Subscribers::findOne(['email' => Yii::$app->request->post('email')]);
            if (!empty($exist)) {
                return json_encode([
                    'status' => 'ok'
                ]);
            } else {
                return json_encode([
                    'status' => 'email_exist'
                ]);
            }
        } else {
            return json_encode([
                'status' => 'error'
            ]);
        }
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}

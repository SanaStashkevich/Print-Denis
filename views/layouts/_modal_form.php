<?php
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$model = $this->params['form_callback'];

Modal::begin([
    'header' => "<h2>Замовити зворотній дзвінок</h2>",
    'closeButton' => ['label' => 'X'],
    'toggleButton' => [
        'tag' => 'button',
        'class' => 'btn callback',
        'label' =>'Замовити дзвінок',
    ],

]);
?>

<?php $form = ActiveForm::begin(
        [
            'id'=> 'callback-form-id',
            'enableClientValidation' => false,
        ]
); ?>

<?= $form->field($model,'name')->label('')->textInput(['autofocus'=> true,'placeholder' => 'Введіть Ваш ім\'я']); ?>
<?= $form->field($model,'phone')->label('')->widget(\yii\widgets\MaskedInput::className(),
    [
        'mask' => '+380(99)999-99-99',
        'options' => [
                'class' => 'phone-input',
                'placeholder' => 'Введіть Ваш телефон',
            ],
    ]); ?>

<div class="info">
    <p>
        <strong>Наші менеджери зв'яжуться з Вами найближчим часом.</strong>
    </p>
</div>
<div class="form-group text-center">
    <?= Html::button('Відправити', ['class' => 'btn btn-primary send-callback']); ?>

</div>
<?php ActiveForm::end(); ?>
<?php Modal::end(); ?>







<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$model = $this->params['form_subs'];
?>

<footer class="footer">
    <div class="container">
        <div class="col-md-7 contact">
            <div class="wrapper-contact">
                    <div class="col-lg-6 phone">
                        <p>
                            <a href="tel:+380508016609"><i class="fa fa-mobile" aria-hidden="true"></i> +38 (050) 801 66 09</a>
                        </p>
                        <p>
                            <a href="tel:+380953319441"><i class="fa fa-mobile" aria-hidden="true"></i> +38 (095) 331 94 41</a>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>
                            <a href="mailto:print@goodday.kiev.ua"><i class="fa fa-envelope-o" aria-hidden="true"></i> print@goodday.kiev.ua</a>
                        </p>
                        <p>
                            <a href="mailto:office@goodday.kiev.ua"><i class="fa fa-envelope-o" aria-hidden="true"></i> office@goodday.kiev.ua</a><br>
                        </p>
                    </div>
            </div>
        </div>
        <div class="col-md-5 form-subscribers">
            <p>Підпишіться на розсилку нових прайсів</p>
            <?php $form = ActiveForm::begin(
                    [
                        'id' => 'subscribe-form-id',
                        'class' => 'form-inline',
                        'enableClientValidation' => false,
                    ]
            ); ?>
            <?= $form->field($model,'email')->label('')->textInput(['placeholder' => 'Введіть Ваш Email']); ?>

            <?= Html::button('Підписатися', ['class' => 'btn btn-primary sign-describe']); ?>

            <?php ActiveForm::end(); ?>
        </div>

    </div>
    <noindex>
        <a style="" title="Наверх" id="toTop"></a>
    </noindex>
</footer>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$model = $this->params['form_subs'];
?>

<footer class="footer">
    <div class="container">
        <div class="col-md-6 contact">
            <div class="wrapper-contact">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <a href="tel:+380508016609"><i class="fa fa-mobile" aria-hidden="true"></i> +38 (050) 801 66 09</a>
                            <br><a href="tel:+380953319441"><i class="fa fa-mobile" aria-hidden="true"></i> +38 (095) 331 94 41</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <a href="mailto:print@goodday.kiev.ua"><i class="fa fa-envelope-o" aria-hidden="true"></i> print@goodday.kiev.ua</a>
                            <br><a href="mailto:office@goodday.kiev.ua"><i class="fa fa-envelope-o" aria-hidden="true"></i> office@goodday.kiev.ua</a><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 form-subscribers">
            <p>Подпишитесь на рассылку новых прайсов</p>
            <?php $form = ActiveForm::begin(['id'=> 'subscribe-form-id']); ?>

            <?= $form->field($model,'email')->label('')->textInput(['autofocus'=> true,'placeholder' => 'Ваш Email']); ?>

            <div class="form-group">
                <?= Html::button('Подписаться', ['class' => 'btn btn-primary sign-describe']); ?>

            </div>
            <?php ActiveForm::end(); ?>
        </div>

    </div>
    <noindex>
        <a style="" title="Наверх" id="toTop"></a>
    </noindex>
</footer>
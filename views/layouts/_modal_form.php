<?php
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$model = $this->params['form_callback'];

Modal::begin([
    'header' => "<h2>Заказать обратный звонок</h2>",
    'closeButton' => ['label' => 'X'],
    'toggleButton' => [
        'tag' => 'button',
        'class' => 'btn callback',
        'label' =>'Заказать звонок',
    ],

]);
?>

<?php $form = ActiveForm::begin(['id'=> 'callback-form-id']); ?>

<?= $form->field($model,'name')->label('')->textInput(['autofocus'=> true,'placeholder' => 'Имя']); ?>
<?= $form->field($model,'phone')->label('')->textInput(['class' => 'phone-input', 'placeholder' => 'Телефон']); ?>

<div class="form-group">
    <?= Html::button('Отправить', ['class' => 'btn btn-primary send-callback']); ?>

</div>
<?php ActiveForm::end(); ?>
<?php Modal::end(); ?>







<?php
use yii\helpers\Html;
?>

<div id="delivery" class="container">
    <div class="row">
        <h2 class="title"><strong>Оплата і доставка</strong></h2>
        <div>
            <div class="col-md-6 payment">
                <div class="wrapper">
                    <h3> <?= Html::img('@web/images/site/payment.png', ['class'=>'img-payment'])?> Способи оплати</h3>
                    <ul>
                        <li><?= Html::img('@web/images/site/nal.png', ['class'=>'img-nal'])?> Готівкою у Нас в офісі</li>
                        <li><?= Html::img('@web/images/site/beznal.png', ['class'=>'img-beznal'])?> Безготівковий. Ви можете оплатити його через касу будь-якого банку або з розрахункового рахунку вашої організації. </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6  delivery">
                <div class="wrapper">
                    <h3> <?= Html::img('@web/images/site/delivery.png', ['class'=>'img-delivery'])?> Доставка</h3>
                    <ul>
                        <li><?= Html::img('@web/images/site/taxi.jpeg', ['class'=>'img-taxi'])?> Доставка службами таксі по Києву (Оплату доставки оплачує одержувач за тарифами служби таксі).</li>
                        <li><?= Html::img('@web/images/site/novap.jpg', ['class'=>'img-novap'])?> По Україні ми доставляємо замовлення кур'єрською службою Нова пошта, Ви можете оплатити замовлення при отриманні (сплативши комісію Нової Пошти за пересилання грошей).</li>
                        <li><?= Html::img('@web/images/site/intime.png', ['class'=>'img-intime'])?> По Україні ми доставляємо замовлення кур'єрською службою Інтайм, Ви можете оплатити замовлення при отриманні (сплативши комісію Інтайм за пересилання грошей).</li>
                        <li><?= Html::img('@web/images/site/ukrposta.png', ['class'=>'img-ukrposta'])?> По Україні ми доставляємо замовлення кур'єрською службою Укрпоштою, Ви можете оплатити замовлення при отриманні (сплативши комісію Укрпошта за пересилання грошей).</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

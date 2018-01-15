<?php
use yii\helpers\Html;
?>

<div id="delivery" class="container">
    <div class="row">
        <h2 class="title"><strong>Оплата та доставка</strong></h2>
        <div>
            <div class="col-md-6 payment">
                <div class="wrapper">
                    <h3> <?= Html::img('@web/images/site/payment.png', ['class'=>'img-payment'])?> Способы оплаты</h3>
                    <ul>
                        <li><?= Html::img('@web/images/site/nal.png', ['class'=>'img-nal'])?> Наличными у Нас в офисе</li>
                        <li><?= Html::img('@web/images/site/beznal.png', ['class'=>'img-beznal'])?> Безналичный.  Вы можете оплатить его через кассу любого банка или с расчетного счета вашей организации. </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6  delivery">
                <div class="wrapper">
                    <h3> <?= Html::img('@web/images/site/delivery.png', ['class'=>'img-delivery'])?> Доставка</h3>
                    <ul>
                        <li><?= Html::img('@web/images/site/taxi.jpeg', ['class'=>'img-taxi'])?> Доставка службами такси по Киеву (Оплату доставки оплачивает получатель по тарифам службы такси).</li>
                        <li><?= Html::img('@web/images/site/novap.jpg', ['class'=>'img-novap'])?> По Украине мы доставляем заказы курьерской службой Новая почта, Вы можете оплатить заказ при получении (оплатив комиссию Новой Почты за пересылку денег).</li>
                        <li><?= Html::img('@web/images/site/intime.png', ['class'=>'img-intime'])?> По Украине мы доставляем заказы курьерской службой ИнТайм, Вы можете оплатить заказ при получении (оплатив комиссию ИнТайм за пересылку денег).</li>
                        <li><?= Html::img('@web/images/site/ukrposta.png', ['class'=>'img-ukrposta'])?> По Украине мы доставляем заказы курьерской службой УкрПочтой, Вы можете оплатить заказ при получении (оплатив комиссию УкрПочта за пересылку денег).</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
 use yii\helpers\Html;
?>

<div id="contacts" class="container">
    <div class="row">
        <h2 class="title"><strong>Контакти</strong></h2>
        <div class="col-md-4 schedule">
            <p>
                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Графік роботи:</span>
                <p>
                    Ми працюємо з понеділка по п'ятницю
                    <br> <strong>з 10 до 18 без перерви </strong>
                    <br> <strong>Вихідні: <span class="red">субота, неділя</span></strong>
                </p>
            </p>
        </div>
        <div class="col-md-4 contact">
            <p>
                <span><i class="fa fa-map-marker" aria-hidden="true"></i> Адреса:</span>
            <p>
                  м.Київ,<br>
                  вулиця Ольжича, 29
                <br> <span class="detail"><strong>(прилегла станція метро Дорогожичі, 230 метрів від кінцевої зупинки 22 тролейбуса)</strong></span>
            </p>
            </p>
        </div>
        <div class="col-md-4 phones-emails">
            <p>
                <span><i class="fa fa-phone" aria-hidden="true"></i> Телефони:</span>
                 <p>
                    <?= Html::a('+38 (050) 801 66 09','tel:+380508016609'); ?>
                    <br>
                    <?= Html::a('+38 (095) 331 94 41','tel:+380953319441'); ?>
                </p>
            </p>

            <p>
                <span><i class="fa fa-envelope-o" aria-hidden="true"></i> E-Mail:</span>
            <p>
                <?= Html::a('print@goodday.kiev.ua','mailto:print@goodday.kiev.ua'); ?>
                <br>
                <?= Html::a('office@goodday.kiev.ua','mailto:office@goodday.kiev.ua'); ?>
            </p>
            </p>
        </div>

        <div class="container wrapper-map">
            <hr>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title"><strong>наше місце розташування</strong></h2>
                    <div id="map"></div>
                    <script>
                        function initMap() {
                            var uluru = {lat: 50.4801897272513, lng: 30.4428744324461};
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 17,
                                center: uluru
                            });
                            var marker = new google.maps.Marker({
                                position: uluru,
                                map: map,
                                title: '«Друкарня Добрий День»'
                            });

                        }
                    </script>
                </div>
            </div>
        </div>

    </div>
</div>

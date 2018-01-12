<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

?>

<header>
    <div class="container nav-container">
        <div class="col-md-8 col-md-offset-2 text-center" ><div class="telephone">
                <a href="tel:+380508016609"><i class="fa fa-mobile" aria-hidden="true"></i>+38 (050) 801 66 09</a>
                <a href="tel:+380953319441"><i class="fa fa-mobile" aria-hidden="true"></i> +38 (095) 331 94 41</a>
                <a href="mailto:print@goodday.kiev.ua"><i class="fa fa-envelope-o" aria-hidden="true"></i> print@goodday.kiev.ua</a>
                <a href="mailto:office@goodday.kiev.ua"><i class="fa fa-envelope-o" aria-hidden="true"></i> office@goodday.kiev.ua</a>
            </div></div>

        <div class="clearfix"></div>
    <?php

    NavBar::begin([
        'brandLabel' => Html::img('@web/images/site/logo.png', ['class' =>'logo'] ),

        'options' => [
            'class' => 'navbar navbar-inverse navbar-fixed-top navigation',
        ],
    ]); ?>

    <?php
    echo Nav::widget([
        'items' => [
            ['label' => 'Главная', 'url' => ['#top']],
            ['label' => 'О нас', 'url' => ['#o-nas']],
            ['label' => 'Продукция', 'url' => ['#produts']],
            ['label' => 'Требования к макетам', 'url' => ['#need']],
            ['label' => 'Оплата и доставка', 'url' => ['#delivery']],
            ['label' => 'Контакты', 'url' => ['#contacts']],
            ],

    ]);
    NavBar::end();
    ?>
    </div>

</header>
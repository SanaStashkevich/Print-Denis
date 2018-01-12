<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

?>

<header>
    <div class="container nav-container">
        <div class="col-md-8 col-md-offset-2 text-center" ><div class="telephone">
                <a href="tel:+380508016609"><span class="glyphicon glyphicon-earphone"></span> +38 (050) 801 66 09</a>
                <a href="tel:+380953319441"><span class="glyphicon glyphicon-earphone"></span> +38 (095) 331 94 41</a>
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
            ['label' => 'Home', 'url' => ['#top']],
            ['label' => 'About', 'url' => ['#o-nas']],
            ['label' => 'Contact', 'url' => ['#contacts']],
            ],

    ]);
    NavBar::end();
    ?>
    </div>

</header>
<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>

<header class="masthead">
    <h3 class="text-muted">Project name</h3>

    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-light bg-light rounded mb-3',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav text-md-center nav-justified w-100'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index'], 'options' => ['class' => 'nav-item']],
            ['label' => 'About', 'url' => ['/site/about'], 'options' => ['class' => 'nav-item']],
            ['label' => 'Contact', 'url' => ['/site/contact'], 'options' => ['class' => 'nav-item']],
            ],
    ]);
    NavBar::end();
    ?>


</header>
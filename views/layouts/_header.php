<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>

<header class="masthead">
    <h3 class="text-muted">Project name</h3>

    <?php
    NavBar::begin([
       // 'brandLabel' => Yii::$app->name,
       // 'brandUrl' => Yii::$app->homeUrl,
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
    ]);
    NavBar::end();
    ?>

<!--    <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">-->
<!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarCollapse">-->
<!--            <ul class="navbar-nav text-md-center nav-justified w-100">-->
<!--                <li class="nav-item active">-->
<!--                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Projects</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Services</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Downloads</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">About</a>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="dropdown01">-->
<!--                        <a class="dropdown-item" href="#">Action</a>-->
<!--                        <a class="dropdown-item" href="#">Another action</a>-->
<!--                        <a class="dropdown-item" href="#">Something else here</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </nav>-->
</header>
<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="/web/images/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapds">

    <? include_once "_header.php" ?>
    <?= $content ?>
</div>

    <? include_once "_footer.php" ?>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR8v_DU-8-2oWgwvCnJVxUXDkRAMxGJ9g&callback=initMap">
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

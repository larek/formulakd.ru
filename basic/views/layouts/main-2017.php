<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset2017;

AppAsset2017::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="main-wrapper">
<div class="container mt-3">
        <div class="row">
            <div class="col-md-3 col-6 text-left">
                <a href="/"><img src="/images/logo-2017.svg" alt="" class='img-fluid'></a>
            </div>
            <div class="col-6 d-sm-none dark-blue-text small text-right mobile-header-phone">
                <a href="tel:+78312815898">8 (831) 281-58-98</a>
            </div>
            <div class="col-md-9 col-6 header-contact text-right dark-blue-text d-none d-sm-block">
                8 (831) 281-58-98, 281-58-78
                <br> г. Нижний Новгород,
                <br> пер. Мотальный, д.10
            </div>
        </div>
    </div>
    <div class="menu-wrap mt-3">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href='/callback-page' class='btn btn-secondary d-block d-md-none'>Заказать звонок</a>


                <div class="collapse navbar-collapse" id="navbarsExample09">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?= Yii::$app->controller->route == "site/2017" ? 'active-item' : ''; ?>"><a class="nav-link <?= Yii::$app->controller->route == "site/2017" ? 'active-item' : ''; ?>" href="/">Главная <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item <?= Yii::$app->controller->route == "site/services" ? 'active-item' : ''; ?>"><a class="nav-link" href="/services">Услуги</a></li>
                        <li class="nav-item <?= Yii::$app->controller->route == "site/about2" ? 'active-item' : ''; ?>"><a class="nav-link" href="/about">О компании</a></li>
                        <li class="nav-item <?= Yii::$app->controller->route == "site/projects" ? 'active-item' : ''; ?>"><a class="nav-link" href="/projects">Проекты</a></li>
                        <li class="nav-item <?= Yii::$app->controller->route == "site/contact2" ? 'active-item' : ''; ?>"><a class="nav-link" href="/contacts">Контакты</a></li>
                        <li class="nav-item dark-blue-item d-none d-md-block"><a class="nav-link" href="/callback-page">Заказать звонок</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <?= $content?>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    © ООО «Формула КД». Все права защищены. <?= date('Y')?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

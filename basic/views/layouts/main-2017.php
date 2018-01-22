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
<div class="container mt-3">
        <div class="row">
            <div class="col-md-3 col-6 text-left">
                <img src="/images/logo-2017.svg" alt="" class='img-fluid'>
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
                        <li class="nav-item"><a class="nav-link <?= Yii::$app->controller->route == "site/2017" ? 'active-item' : ''; ?>" href="/2017">Главная <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a class="nav-link <?= Yii::$app->controller->route == "site/services" ? 'active-item' : ''; ?>" href="/services">Услуги</a></li>
                        <li class="nav-item"><a class="nav-link <?= Yii::$app->controller->route == "site/about2" ? 'active-item' : ''; ?>" href="/about-2">О компании</a></li>
                        <li class="nav-item"><a class="nav-link <?= Yii::$app->controller->route == "site/projects" ? 'active-item' : ''; ?>" href="/projects">Проекты</a></li>
                        <li class="nav-item"><a class="nav-link <?= Yii::$app->controller->route == "site/contacts" ? 'active-item' : ''; ?>" href="/contacts">Контакты</a></li>
                        <li class="nav-item dark-blue-item d-none d-md-block"><a class="nav-link <?= Yii::$app->controller->route == "site/callback-page" ? 'active-item' : ''; ?>" href="/callback-page">Заказать звонок</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <?= $content?>

 <div class="map-wrapper">

        <div class="d-block d-md-none text-center mt-4">
            <a class='btn btn-secondary' data-fancybox="iframe" data-src="https://yandex.ru/map-widget/v1/?um=constructor%3AoFyOK4TT-dveXO0gw1jugftdQYfwy6Z6&amp;source=constructor" data-type="iframe" data-width='1000px' href="javascript:;">Посмотреть на карте</a>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-4 p-0">
                    <div class="contact-block">
                        <div class="row">
                            <div class="col-12 text-center d-none d-md-block">
                                <span class="contact-title">Наши контакты</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2"><img src="/demo/images/contact-icon-1.svg" class='img-fluid' alt=""></div>
                            <div class="col-10">
                                <b>Адрес КБ</b>
                                <br> г. Нижний Новгород
                                <br> пер. Мотальный, д. 10, пом. 8-9
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2"><img src="/demo/images/contact-icon-2.svg" class='img-fluid' alt=""></div>
                            <div class="col-10">
                                <b>Адрес производства</b>
                                <br> г. Нижний Новгород,
                                <br> Московское шоссе, д.105
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2"><img src="/demo/images/contact-icon-3.svg" class='img-fluid' alt=""></div>
                            <div class="col-10">
                                <b><a href="mailto:info@formulakd.ru" class='blue-link'>info@formulakd.ru</a></b>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2"><img src="/demo/images/contact-icon-4.svg" class='img-fluid' alt=""></div>
                            <div class="col-10">
                                <b><a href="tel:+78312815878" class='blue-link'>8 (831) 281-58-78</a></b>
                                <br>
                                <b><a href="tel:+78312815898" class='blue-link'>8 (831) 281-58-98</a></b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-none d-md-block mt-4">
         <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3AoFyOK4TT-dveXO0gw1jugftdQYfwy6Z6&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

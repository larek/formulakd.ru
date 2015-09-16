<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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


                <style>
                        
		.video-js {padding-top: 56.25%}
		.vjs-fullscreen {padding-top: 0px}
		.flash {width: 440px;}

    @media (min-width: 992px) {
      .tentholder {
        height: 281px;
      }
    }

    @media (max-width: 991px) and (min-width: 768px) {
      .latestnews p {
        font-size: 9px;
        margin: 0 0 5px;
        line-height: 9px;
      }
    }

	
                </style>
<div class="fullWrapAround container">
                        <div class="ask-mobile show-mobile">
                                <a href="http://www.roderhts.com/ask-us-question/" class="">Ask a Question?</a>
                        </div>
                        <div class="border-div">
                        </div>
                        <!--[if lt IE 8]>
                                <div class="alert alert-warning">
                                        You are using an
                                        <strong>
                                                outdated
                                        </strong>
                                        browser. Please
                                        <a href="http://browsehappy.com/">upgrade your browser</a>
                                        to improve your experience.
                                </div>
                        <![endif]-->
                        <header class="banner navbar navbar-default navbar-static-top" role="banner">
                                <div class="container">
                                        <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-8">
                                                        <div class="navbar-header">
                                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                                                        <span class="sr-only">
                                                                                Toggle navigation
                                                                        </span>
                                                                        <span class="icon-bar">
                                                                        </span>
                                                                        <span class="icon-bar">
                                                                        </span>
                                                                        <span class="icon-bar">
                                                                        </span>
                                                                </button>
                                                                <a id="logoen" class="navbar-brand" href="#">Формула КД</a>
                                                                <div class="flash">
                                                                        <h1>
                                                                                Разработка конструкторской документации<br>
                                                                               
                                                                        </h1>
                                                                        <span style="
                                                                                float: left;
                                                                                font-size: 18px;
                                                                                color: #01A2E0;
                                                                            "> Звоните - 8 (831) 555-55-55 </span>
                                                                        
                                                                        
                                                                </div>
                                                                
                                                                <a href="#" role="button" class="btn-contact mobile-contact show-mobile colorboxiframe cboxElement"><div class="bg"></div></a>
                                                        </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-4 hide-mobile">
                                                        <div class="row top-margin">
                                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                                        <a href="#" role="button" class="btn btn-roder btn-lg btn-block btn-request"><div class="bg"></div>Написать нам</a>
                                                                </div>
                                                                
                                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                                        <a href="#" role="button" class="btn btn-roder btn-lg btn-block btn-contact encontact">
                                                                        <div class="bg"></div>Заказать звонок        </a>
                                                                </div>
                                                        </div>
                                                        <div class="row top-margin">
                                                                <div class="col-sm-6 col-md-6 col-lg-6" style="display: none;">
                                                                        <a href="#" role="button" class="btn btn-roder btn-lg btn-block btn-request"><div class="bg"></div>Request a Brochure</a>
                                                                </div>
                                                                <div class="col-sm-6 col-md-6 col-lg-6" style="display: none;">
                                                                        <div class="btn btn-roder btn-lg btn-block btn-language" id="dropdownMenu1">
                                                                                <div class="bg">
                                                                                </div>
                                                                                Select your language
                                                                                <div class="Flags_list_con">
                                                                                        <div class="Padd">
                                                                                                <span class="please-select">
                                                                                                        Select your country
                                                                                                        <br>
                                                                                                        <span class="small_caps">
                                                                                                                click flag to select
                                                                                                        </span>
                                                                                                </span>
                                                                                                <div class="Big_flag_con">
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://www.roeder-hts.de/"><span class="Flag DE"></span>
                                                                                                                <span class="small_caps">DE</span><span class="flag_name"><span class="flag_name_inner">Deutschland</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://www.roderhts.com/"><span class="Flag GB"></span>
                                                                                                                <span class="small_caps">GB</span><span class="flag_name"><span class="flag_name_inner">Great Britain</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://www.roderhts.fr/"><span class="Flag FR"></span>
                                                                                                                <span class="small_caps">FR</span><span class="flag_name"><span class="flag_name_inner">Francais</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://www.roderhts.es/"><span class="Flag ES"></span>
                                                                                                                <span class="small_caps">ES</span><span class="flag_name"><span class="flag_name_inner">Espana</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://www.hts-australia.com.au/"><span class="Flag AU"></span>
                                                                                                                <span class="small_caps">AU</span><span class="flag_name"><span class="flag_name_inner">Australia</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="Divline">
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="flag_con">
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.ee/"><span class="Flag EE"></span>
                                                                                                                <span class="small_caps">EE</span><span class="flag_name"><span class="flag_name_inner">Estonia</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.co.id/"><span class="Flag ID"></span>
                                                                                                                <span class="small_caps">ID</span><span class="flag_name"><span class="flag_name_inner">Indonesia</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.dk/"><span class="Flag DK"></span>
                                                                                                                <span class="small_caps">DK</span><span class="flag_name"><span class="flag_name_inner">Denmark</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.se/"><span class="Flag SE"></span>
                                                                                                                <span class="small_caps">SE</span><span class="flag_name"><span class="flag_name_inner">Sweden</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://no.roderhts.com/"><span class="Flag NO"></span>
                                                                                                                <span class="small_caps">NO</span><span class="flag_name"><span class="flag_name_inner">Norway</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.jp/"><span class="Flag JP"></span>
                                                                                                                <span class="small_caps">JP</span><span class="flag_name"><span class="flag_name_inner">Japan</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="Divline">
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="flag_con">
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.my/"><span class="Flag MY"></span>
                                                                                                                <span class="small_caps">MY</span><span class="flag_name"><span class="flag_name_inner">Malaysia</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.com.vn/"><span class="Flag VN"></span>
                                                                                                                <span class="small_caps">VN</span><span class="flag_name"><span class="flag_name_inner">Vietnam</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.co.kr/"><span class="Flag KR"></span>
                                                                                                                <span class="small_caps">KR</span><span class="flag_name"><span class="flag_name_inner">South Korea</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.co.rs/"><span class="Flag RS"></span>
                                                                                                                <span class="small_caps">RS</span><span class="flag_name"><span class="flag_name_inner">Serbia</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://th.roderhts.com/"><span class="Flag TH"></span>
                                                                                                                <span class="small_caps">TH</span><span class="flag_name"><span class="flag_name_inner">Thailand</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roederhts.ro/"><span class="Flag RO"></span>
                                                                                                                <span class="small_caps">RO</span><span class="flag_name"><span class="flag_name_inner">Romania</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="Divline">
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="flag_con">
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.it/"><span class="Flag IT"></span>
                                                                                                                <span class="small_caps">IT</span><span class="flag_name"><span class="flag_name_inner">Italy</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.com.br/"><span class="Flag BR"></span>
                                                                                                                <span class="small_caps">BR</span><span class="flag_name"><span class="flag_name_inner">Brazil</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.al/"><span class="Flag AL"></span>
                                                                                                                <span class="small_caps">AL</span><span class="flag_name"><span class="flag_name_inner">Albania</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.si/"><span class="Flag SI"></span>
                                                                                                                <span class="small_caps">SI</span><span class="flag_name"><span class="flag_name_inner">Slovenia</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.mk/"><span class="Flag MK"></span>
                                                                                                                <span class="small_caps">MK</span><span class="flag_name"><span class="flag_name_inner">Macedonia</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.com.br/"><span class="Flag PT"></span>
                                                                                                                <span class="small_caps">PT</span><span class="flag_name"><span class="flag_name_inner">Portugal</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="Divline">
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="flag_con">
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.com.hr/"><span class="Flag HR"></span>
                                                                                                                <span class="small_caps">HR</span><span class="flag_name"><span class="flag_name_inner">Croatia</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.com.tr/"><span class="Flag TR"></span>
                                                                                                                <span class="small_caps">TR</span><span class="flag_name"><span class="flag_name_inner">Turkey</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://fi.roderhts.com/"><span class="Flag FI"></span>
                                                                                                                <span class="small_caps">FI</span><span class="flag_name"><span class="flag_name_inner">Finland</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://www.roderhts.com/"><span class="Flag SG"></span>
                                                                                                                <span class="small_caps">SG</span><span class="flag_name"><span class="flag_name_inner">Singapore</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://www.roderhts.com/"><span class="Flag PH"></span>
                                                                                                                <span class="small_caps">PH</span><span class="flag_name"><span class="flag_name_inner">Philippines</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.bg/"><span class="Flag BG"></span>
                                                                                                                <span class="small_caps">BG</span><span class="flag_name"><span class="flag_name_inner">Bulgaria</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box hide_box">
                                                                                                                <a href="#"><span class="Flag NZ"></span>
                                                                                                                <span class="small_caps">NZ</span><span class="flag_name"><span class="flag_name_inner">New Zealand</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box hide_box">
                                                                                                                <a href="#"><span class="Flag US"></span>
                                                                                                                <span class="small_caps">US</span><span class="flag_name"><span class="flag_name_inner">United States</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="Divline">
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="flag_con">
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.cn/"><span class="Flag CN"></span>
                                                                                                                <span class="small_caps">CN</span><span class="flag_name"><span class="flag_name_inner">China</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.cn/"><span class="Flag HK"></span>
                                                                                                                <span class="small_caps">HK</span><span class="flag_name"><span class="flag_name_inner">Hong Kong</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.cn/"><span class="Flag TW"></span>
                                                                                                                <span class="small_caps">TW</span><span class="flag_name"><span class="flag_name_inner">Taiwan</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box hide_box">
                                                                                                                <a href="#"><span class="Flag BA"></span>
                                                                                                                <span class="small_caps">BA</span><span class="flag_name"><span class="flag_name_inner">Bosnian</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box hide_box">
                                                                                                                <a href="#"><span class="Flag BG"></span>
                                                                                                                <span class="small_caps">BG</span><span class="flag_name"><span class="flag_name_inner">Bulgaria</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box hide_box">
                                                                                                                <a href="#"><span class="Flag ME"></span>
                                                                                                                <span class="small_caps">ME</span><span class="flag_name"><span class="flag_name_inner">Montenegro</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roederhts.pl/"><span class="Flag PL"></span>
                                                                                                                <span class="small_caps">PL</span><span class="flag_name"><span class="flag_name_inner">Poland</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roderhts.cz/"><span class="Flag CZ"></span>
                                                                                                                <span class="small_caps">CZ</span><span class="flag_name"><span class="flag_name_inner">Czech Republic</span></span></a>
                                                                                                        </div>
                                                                                                        <div class="flag_box">
                                                                                                                <a href="http://roeder-hts.ru/"><span class="Flag RU"></span>
                                                                                                                <span class="small_caps">RU</span><span class="flag_name"><span class="flag_name_inner">Russia</span></span></a>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                        <br class="clear">
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-sm-3">
                                                        &nbsp;
                                                </div>
                                                <div class="col-sm-9">
                                                        <nav class="mainnav collapse navbar-collapse" role="navigation">
                                                                <ul id="menu-primary-navigation" class="nav navbar-nav">
                                                                        <li class="active menu-home">
                                                                                <a href="#">Главая</a>
                                                                        </li>
                                                                        <li class="active menu-home">
                                                                                <a href="#">О компании</a>
                                                                        </li>
                                                                        <li class="dropdown menu-company">
                                                                                <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">Услуги <b class="caret"></b></a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li class="menu-about-roeder-hts-hoecker-gmbh">
                                                                                                <a href="#">РАЗРАБОТКА <br>ТЕХНИЧЕСКОГО ЗАДАНИЯ</a>
                                                                                        </li>
                                                                                        <li class="menu-why-use-roeder-hts-hoecker">
                                                                                                <a href="#">Проектирование изделия</a>
                                                                                        </li>
                                                                                        <li class="menu-roeder-family-history">
                                                                                                <a href="#">Разработка КД</a>
                                                                                        </li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="active menu-home">
                                                                                <a href="#">Контакты</a>
                                                                        </li>
                                                                </ul>
                                                        </nav>
                                                </div>
                                        </div>
                                </div>
                        </header>
                        <div class="wrap container" role="document">
                                <div class="content row">
                                        <aside class="sidebar col-sm-3" role="complementary">
                                                <div class="sidebarabs">
                                                        <section class="widget-1 widget-first widget-last widget-odd widget nav_menu-3 widget_nav_menu">
                                                                
                                                                <ul id="menu-side-menu" class="menu">
                                                                        <li class="menu-dummy-home cycle-pager-active">
                                                                                <a href="#">Dummy Home</a>
                                                                        <div class="coloured"></div><div class="coloured"></div></li>
                                                                        <li class="menu-pagoda-marquees">
                                                                                <a href="#">РАЗРАБОТКА <br>ТЕХНИЧЕСКОГО ЗАДАНИЯ</a>
                                                                        <div class="coloured"></div><div class="coloured"></div></li>
                                                                        <li class="menu-roeder-hts-pz-small-marquees">
                                                                                <a href="#">Проектирование изделия</a>
                                                                        <div class="coloured"></div><div class="coloured"></div></li>
                                                                        <li class="menu-roeder-hts-gz-large-marquees">
                                                                                <a href="#">Разработка КД</a>
                                                                        <div class="coloured"></div><div class="coloured"></div></li>
                                                                </ul>
                                                        </section>
                                                </div>
                                        </aside>
                                        <!-- /.sidebar -->
                                        <main class="main col-sm-9" role="main">
                                                <div class="row">
                                                        <div class="col-sm-12 pullitleft">
                                                                <div class="cycle-slideshow bigone" data-cycle-fx="fade" data-cycle-slides="> div" data-cycle-timeout="0" data-cycle-pager="#menu-side-menu" data-cycle-pager-event="mouseover" data-cycle-pager-template="" data-cycle-prev="#prev" data-cycle-next="#next" style="position: relative;"><div class="slidehome cycle-slide cycle-sentinel" data-cycle-slug="menu--home" data-cycle-title="" data-cycle-linkurl="" style="top: 0px; left: 0px; opacity: 1; z-index: 100; position: static; visibility: hidden; display: block;">
                                                                                <div class="text" style="visibility: hidden;">
                                                                                        <h2 style="visibility: hidden;">
                                                                                                ООО «Формула КД»
                                                                                                <br style="visibility: hidden;">
                                                                                                <strong style="visibility: hidden;">
                                                                                                        Разработка конструкторской документации
                                                                                                </strong>
                                                                                        </h2>
                                                                                        <p style="visibility: hidden;">
                                                                                                Текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                                                                                                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст  
                                                                                        </p>
                                                                                        <p style="visibility: hidden;">
                                                                                                Текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                                                                                                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст  
                                                                                        </p>
                                                                                </div>
                                                                                <img src="/images/slide.jpg" alt="roder hts hocker" style="visibility: hidden;">
                                                                        </div>
                                                                        
                                                                        
                                                                        
                                                                        
                                                                <div class="slidehome cycle-slide cycle-slide-active" data-cycle-slug="menu--home" data-cycle-title="" data-cycle-linkurl="" style="position: absolute; top: 0px; left: 0px; opacity: 1; display: block; visibility: visible; z-index: 100;">
                                                                                <div class="text">
                                                                                        <h2>
                                                                                                ООО «Формула КД»
                                                                                                <br>
                                                                                                <strong>
                                                                                                        Разработка конструкторской документации
                                                                                                </strong>
                                                                                        </h2>
                                                                                        <p>
                                                                                                Текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                                                                                                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст  
                                                                                        </p>
                                                                                        <p>
                                                                                                Текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                                                                                                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст  
                                                                                        </p>
                                                                                </div>
                                                                                <img src="/images/slide.jpg" alt="roder hts hocker">
                                                                        </div><div class="slidehome cycle-slide" data-cycle-slug="menu--home" data-cycle-title="" data-cycle-linkurl="" style="position: absolute; top: 0px; left: 0px; z-index: 99; visibility: hidden;">
                                                                                <div class="text">
                                                                                        <h2>
                                                                                                Разработка технического задания
                                                                                                <br>
                                                                                                
                                                                                        </h2>
                                                                                        <p>
                                                                                                Текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                                                                                                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст  
                                                                                        </p>
                                                                                        <p>
                                                                                                Текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                                                                                                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст  
                                                                                        </p>
                                                                                </div>
                                                                                <img src="/images/slide1.jpg" alt="marquee sales uk">
                                                                        </div><div class="slidehome cycle-slide" data-cycle-slug="menu--home" data-cycle-title="" data-cycle-linkurl="" style="position: absolute; top: 0px; left: 0px; z-index: 97; visibility: hidden;">
                                                                                <div class="text">
                                                                                        <h2>
                                                                                                Проектирование изделий
                                                                                                <br>
                                                                                                
                                                                                        </h2>
                                                                                        <p>
                                                                                                Текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                                                                                                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст  
                                                                                        </p>
                                                                                        <p>
                                                                                                Текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                                                                                                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст  
                                                                                        </p>
                                                                                </div>
                                                                                <img src="/images/slide2.jpg" alt="marquee manufacturer">
                                                                        </div><div class="slidehome cycle-slide" data-cycle-slug="menu--home" data-cycle-title="" data-cycle-linkurl="" style="position: absolute; top: 0px; left: 0px; z-index: 96; visibility: hidden;">
                                                                                <div class="text">
                                                                                        <h2>
                                                                                                Разработка конструкторской документации
                                                                                                <br>
                                                                                                
                                                                                        </h2>
                                                                                        <p>
                                                                                                Текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                                                                                                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст  
                                                                                        </p>
                                                                                        <p>
                                                                                                Текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст 
                                                                                                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст  
                                                                                        </p>
                                                                                </div>
                                                                                <img src="/images/slide3.jpg" alt="marquee manufacturer">
                                                                        </div></div>
                                                                <div id="prev">
                                                                        <i class="fa fa-arrow-left">
                                                                        </i>
                                                                </div>
                                                                <div id="next">
                                                                        <i class="fa fa-arrow-right">
                                                                        </i>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="show-mobile sidebar">
                                                        <section class="widget-2 widget-even widget nav_menu-3 widget_nav_menu">
                                                                <h3>
                                                                        Select a Structure
                                                                <span class="caret"></span><span class="caret"></span></h3>
                                                                <ul id="menu-side-menu-1" class="menu">
                                                                        <li class="menu-dummy-home">
                                                                                <a href="#">Dummy Home</a>
                                                                        </li>
                                                                        <li class="menu-pagoda-marquees">
                                                                                <a href="http://www.roderhts.com/products/pagoda-structures/">Разработка ТЗ</a>
                                                                        </li>
                                                                        <li class="menu-roeder-hts-pz-small-marquees">
                                                                                <a href="http://www.roderhts.com/products/roder-hts-pz-party-tents/">RODER HTS (PZ) Small Marquees</a>
                                                                        </li>
                                                                        <li class="menu-roeder-hts-gz-large-marquees">
                                                                                <a href="http://www.roderhts.com/products/roder-hts-gz-large-tents/">RODER HTS (GZ) Large Marquees</a>
                                                                        </li>
                                                                        <li class="menu-hoecker-p-series-small-marquees">
                                                                                <a href="http://www.roderhts.com/products/hocker-p-series-structures/">HOCKER P-Series Small Marquees</a>
                                                                        </li>
                                                                        <li class="menu-hoecker-f-series-large-marquees">
                                                                                <a href="http://www.roderhts.com/products/hocker-f-series-structures/">HOCKER F-Series Large Marquees</a>
                                                                        </li>
                                                                        <li class="menu-compatible-structure-systems">
                                                                                <a href="http://www.roderhts.com/products/compatible-structure-systems/">Compatible Structure Systems</a>
                                                                        </li>
                                                                        <li class="menu-multi-level-structures">
                                                                                <a href="http://www.roderhts.com/products/multi-level-structures/">Multi-Level Structures</a>
                                                                        </li>
                                                                        <li class="menu-business-industrial-buildings">
                                                                                <a href="http://www.roderhts.com/products/business-industrial-buildings/">Business &amp; Industrial Buildings</a>
                                                                        </li>
                                                                        <li class="menu-rapid-deployment-shelters">
                                                                                <a href="http://www.roderhts.com/products/rapid-deployment-shelters/">Rapid Deployment Shelters</a>
                                                                        </li>
                                                                        <li class="menu-sports-structures">
                                                                                <a href="http://www.roderhts.com/products/sports-structures/">Sports Structures</a>
                                                                        </li>
                                                                        <li class="menu-custom-designed-structures">
                                                                                <a href="http://www.roderhts.com/products/custom-designed-structures/">Custom Designed Structures</a>
                                                                        </li>
                                                                </ul>
                                                        </section>
                                                </div>
                                        </main>
                                        <!-- /.main -->
                                </div>
                                <!-- /.content -->
                        </div>
                        <!-- /.wrap -->
                        <div class="redborder hide-mobile">
                                <div class="container">
                                        <div class="row">
                                                <div class="col-sm-3">
                                                        <div class="latestnews">
                                                                <h2>
                                                                        Заголовок
                                                                </h2>
                                                                <div class="content">
                                                                        <div class="row">
                                                                                <div class="col-sm-12">
                                                                                        <a href="#" target="_blank" class="htsgroup"><strong><img src="https://placeholdit.imgix.net/~text?txtsize=10&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=90&amp;h=44" alt="HOCKER HTS">Ссылка на раздел <em>описание раздела</em></strong></a>
                                                                                </div>
                                                                        </div>
                                                                                                                                                <div class="row">
                                                                        <div class="col-sm-12">
                                                                                        <a href="#" target="_blank" class="htsgroup"><strong><img src="https://placeholdit.imgix.net/~text?txtsize=10&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=90&amp;h=44" alt="HOCKER HTS">Ссылка на раздел <em>описание раздела</em></strong></a>
                                                                                </div>
                                                                        </div>

                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-reverse="true" data-cycle-pause-on-hover="true" data-cycle-speed="300" data-cycle-slides="a" style="position: relative; overflow: hidden;"><a href="#" style="width: 100%; top: 0px; left: 0px; opacity: 1; z-index: 100; position: static; visibility: hidden; display: block;" class="cycle-slide cycle-sentinel"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195" alt="Business and Industrial Buildings" class="img-responsive" style="visibility: hidden;"></a>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                        <a href="#" style="width: 100%; position: absolute; top: 0px; opacity: 1; display: block; left: 0px; z-index: 96; visibility: hidden;" class="cycle-slide"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195" alt="Business and Industrial Buildings" class="img-responsive"></a><a href="#" style="width: 100%; position: absolute; top: 0px; opacity: 1; display: block; left: 0px; z-index: 97; visibility: hidden;" class="cycle-slide"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195" alt="Custom Structures" class="img-responsive"></a><a href="#" style="width: 100%; position: absolute; z-index: 99; top: 0px; opacity: 1; visibility: visible; display: block; left: 0px;" class="cycle-slide cycle-slide-active"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195" alt="Event Marquees" class="img-responsive"></a><a href="#" style="width: 100%; position: absolute; top: 0px; opacity: 1; display: block; z-index: 96; left: 0px; visibility: hidden;" class="cycle-slide"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195" alt="" class="img-responsive"></a><a href="#" style="width: 100%; position: absolute; top: 0px; opacity: 1; display: block; left: 0px; z-index: 94; visibility: hidden;" class="cycle-slide"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195" alt="marquee manufacturer" class="img-responsive"></a><a href="#" style="width: 100%; position: absolute; top: 0px; opacity: 1; display: block; left: 0px; z-index: 95; visibility: hidden;" class="cycle-slide"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195" alt="Sports Structures" class="img-responsive"></a></div>
                                                </div>
                                                <div class="col-sm-3">
                                                        <div class="latestnews">
                                                                <div class="content padmeup">
                                                                        <p style="text-align: center;">
                                                                                <strong>
                                                                                        <a href="#">Заголовок блока</a>
                                                                                </strong>
                                                                        </p>
                                                                        <p>
                                                                                <img class="aligncenter wp-image-78522" src="https://placeholdit.imgix.net/~text?txtsize=30&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=300&amp;h=107" alt="IFAI – 2013 Winner of Outstanding Achievement Award" width="140" height="50">
                                                                        </p>
                                                                        <p style="text-align: center;">
                                                                                <strong>
                                                                                        текст текст текст текст текст текст текст текст текст
                                                                                </strong>
                                                                        </p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="ask-mobile show-mobile request-brochure">
                                <a href="/contact/brochure-request/" class="">Request a Brochure</a>
                        </div>
                        <footer class="content-info footeren" role="contentinfo">
                                <div class="container">
                                        <div class="padding">

                                                <div class="row top-margin">
                                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                                                © ООО «Формула КД». Все права защиищены.
                                                                2015                                                                        </div>
                                                                        <div class="col-sm-6 col-md-6 col-lg-6 pull-right">
                                                                                <section class="widget-1 widget-first widget-last widget-odd pull-right widget nav_menu-2 widget_nav_menu">
                                                                                        <ul id="menu-footer" class="menu">
                                                                                                <li class="menu-legal">
                                                                                                        <a href="#">Контакты</a>
                                                                                                </li>
                                                                                                <li class="menu-privacy">
                                                                                                        <a href="#">О компании</a>
                                                                                                </li>
                                                                                                <li class="menu-site-map">
                                                                                                        <a href="#">Карта сайта</a>
                                                                                                </li>
                                                                                        </ul>
                                                                                </section>
                                                                        </div>
                                                                        </div>
                                                                        </div>
                                                                        </div>
                                                                        </footer>
                                                                        <script>
                                                                                var jquery_placeholder_url = 'http://www.roderhts.com/wp-content/plugins/gravity-forms-placeholder-support-add-on/jquery.placeholder-1.0.1.js';
                                                                        </script>
                                                                        <div id="wpcp-error-message" class="msgmsg-box-wpcp warning-wpcp hideme"><span>Alert: </span>Content is protected !!</div>
                                                                        <script>
                                                                                
	var timeout_result;
	function show_wpcp_message(smessage)
	{
		if (smessage !== "")
			{
			var smessage_text = '<span>Alert: </span>'+smessage;
			document.getElementById("wpcp-error-message").innerHTML = smessage_text;
			document.getElementById("wpcp-error-message").className = "msgmsg-box-wpcp warning-wpcp showme";
			clearTimeout(timeout_result);
			timeout_result = setTimeout(hide_message, 3000);
			}
	}
	function hide_message()
	{
		document.getElementById("wpcp-error-message").className = "msgmsg-box-wpcp warning-wpcp hideme";
	}
	
                                                                        </script>
                                                                        <style type="text/css">
                                                                                
	#wpcp-error-message {
	    direction: ltr;
	    text-align: center;
	    transition: opacity 900ms ease 0s;
	    z-index: 99999999;
	}
	.hideme {
    	opacity:0;
    	visibility: hidden;
	}
	.showme {
    	opacity:1;
    	visibility: visible;
	}
	.msgmsg-box-wpcp {
		border-radius: 10px;
		color: #555;
		font-family: Tahoma;
		font-size: 11px;
		margin: 10px;
		padding: 10px 36px;
		position: fixed;
		width: 255px;
		top: 50%;
  		left: 50%;
  		margin-top: -10px;
  		margin-left: -130px;
  		-webkit-box-shadow: 0px 0px 34px 2px rgba(242,191,191,1);
		-moz-box-shadow: 0px 0px 34px 2px rgba(242,191,191,1);
		box-shadow: 0px 0px 34px 2px rgba(242,191,191,1);
	}
	.msgmsg-box-wpcp span {
		font-weight:bold;
		text-transform:uppercase;
	}
	.error-wpcp {		background:#ffecec url('http://www.roderhts.com/wp-content/plugins/wp-content-copy-protector/images/error.png') no-repeat 10px 50%;
		border:1px solid #f5aca6;
	}
	.success {
		background:#e9ffd9 url('http://www.roderhts.com/wp-content/plugins/wp-content-copy-protector/images/success.png') no-repeat 10px 50%;
		border:1px solid #a6ca8a;
	}
	.warning-wpcp {
		background:#ffecec url('http://www.roderhts.com/wp-content/plugins/wp-content-copy-protector/images/warning.png') no-repeat 10px 50%;
		border:1px solid #f5aca6;
	}
	.notice {
		background:#e3f7fc url('http://www.roderhts.com/wp-content/plugins/wp-content-copy-protector/images/notice.png') no-repeat 10px 50%;
		border:1px solid #8ed9f6;
	}
    
                                                                        </style>
                                                                        <script type="text/javascript" src="http://www.roderhts.com/wp-content/themes/roots/assets/js/scripts.min.js?ver=xxx">
                                                                        </script>
                                                                        <script type="text/javascript">
                                                                                
/* <![CDATA[ */
var icl_vars = {"current_language":"en","icl_home":"http:\/\/www.roderhts.com\/"};
/* ]]> */

                                                                        </script>
                                                                        <script type="text/javascript" src="http://www.roderhts.com/wp-content/plugins/sitepress-multilingual-cms/res/js/sitepress.js?ver=4.1.1">
                                                                        </script>
                                                                        <script type="text/javascript" src="http://www.roderhts.com/wp-content/plugins/gravity-forms-placeholder-support-add-on/gfplaceholderaddon.js?ver=1.0">
                                                                        </script>
                                                                        </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

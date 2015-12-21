<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Pages;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=1024">
    <link rel="icon" href="/favicon.png" type="image/png">
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
<div class="fullWrapAround">


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
                                                <div class="col-sm-8 col-md-8">


                                                                <a id="logoen" class="navbar-brand" href="/">Формула КД</a>
                                                                <div class="header_title_wrap">
                                                                        <span class='header_title'>
                                                                                Разработка конструкторской<br> и технологической документации

                                                                        </span>
                                                                          <br>
                                                                        <span style="
                                                                                float: left;
                                                                                font-size: 18px;
                                                                                color: #01A2E0;
                                                                            "> Ваш проводник от эскиза до готового изделия </span>


                                                                </div>



                                                </div>
                                                <noindex>
                                                <div class="col-sm-4 col-md-4 text-right">




                                                                        <a href="#callback" role="button" class="btn btn-primary btn-feedback fancybox">Свяжитесь с нами</a>

                                                                        <div class='header_phone'>
                                                                        <span>8 (831) 281-58-98</span><br><span>8 (831) 281-58-78</span>
                                                                      </div>

                                                                        <div id='callback' style="display:none">
                                                                                <h2 class='text-center'>Обратная связь</h2>

                                                                                <div class='form-horizontal'>
                                                                                  <div class="form-group">
                                                                                    <label for="inputEmail3" class="col-sm-4 control-label">Как к Вам обращаться?*</label>
                                                                                    <div class="col-sm-6">
                                                                                      <input type="email" class="form-control userName userFormField require">
                                                                                    </div>
                                                                                  </div>

                                                                                  <div class="form-group">
                                                                                    <label for="inputPassword3" class="col-sm-4 control-label">Организация:</label>
                                                                                    <div class="col-sm-6">
                                                                                      <input type="text" class="form-control userCompany userFormField">
                                                                                    </div>
                                                                                  </div>

                                                                                  <div class="form-group">
                                                                                    <label for="inputPassword3" class="col-sm-4 control-label">Контактный телефон:</label>
                                                                                    <div class="col-sm-6">
                                                                                      <input type="text" class="form-control userPhone userFormField">
                                                                                    </div>
                                                                                  </div>

                                                                                  <div class="form-group">
                                                                                    <label for="inputPassword3" class="col-sm-4 control-label">E-mail:*</label>
                                                                                    <div class="col-sm-6">
                                                                                      <input type="text" class="form-control userEmail userFormField require">
                                                                                    </div>
                                                                                  </div>

                                                                                  <div class="form-group">
                                                                                    <label for="inputPassword3" class="col-sm-4 control-label">Тема сообщения:</label>
                                                                                    <div class="col-sm-6">
                                                                                      <input type="text" class="form-control userSubject userFormField">
                                                                                    </div>
                                                                                  </div>

                                                                                  <div class="form-group">
                                                                                    <label for="inputPassword3" class="col-sm-4 control-label">Текст сообщения:</label>
                                                                                    <div class="col-sm-6">
                                                                                      <textarea class="form-control userMessage userFormField"></textarea>
                                                                                    </div>
                                                                                  </div>

                                                                                  <div class="form-group">
                                                                                    <div class="col-sm-offset-4 col-sm-10">
                                                                                      <button  class="btn btn-primary btn-callback">Отправить</button>
                                                                                    </div>
                                                                                  </div>

                                                                                  <div class="col-md-12" style='margin-top:15px;'>
                                                                                  <div class='alert alert-info alert-callback' style='display:none;'>Заявка отправлена. <br>Благодарим Вас за интерес, проявленный к нашей компании. <br>Мы обязательно ответим Вам в самое ближайшее время</div>
                                                                                  </div>

                                                                                </div>

                                                                        </div>


                                                </div>
                                                </noindex>
                                        </div>

                                </div>
                                <br>

                                <div class='nav_wrap row'>


                                          <div class="container">
                                            <div class='col-md-12'>
                                                  <nav class="collapse navbar-collapse" role="navigation">
                                                          <ul id="menu-primary-navigation" class="nav navbar-nav">
                                                                  <?
                                                                  foreach(Pages::find()->andWhere(['parent_id' => 0])->all() as $item){
                                                                          echo "<li class='menu-home'>".Html::a($item->title,['site/view','guid' => $item->guid])."</li>";
                                                                  }

                                                                  echo "<li class='menu-home'>".Html::a('Новости',['site/news'])."</li>";
                                                                  ?>


                                                          </ul>
                                                  </nav>
                                              </div>
                                          </div>

                                </div>
                        </header>
                        <div role="document">

                                        <?= $content?>

                                <!-- /.content -->
                        </div>
                        <!-- /.wrap -->
                        <div class="redborder hide-mobile">
                                <div class="container" style='display:none;'>
                                        <div class="row">
                                                <div class="col-sm-3">
                                                        <div class="latestnews">
                                                                <h2>
                                                                        Проекты
                                                                </h2>
                                                                <div class="content">
                                                                        <div class="row">
                                                                                <div class="col-sm-12">
                                                                                        <a href="/simple-page"  class="htsgroup"><strong>Start-Up</strong></a>
                                                                                </div>
                                                                        </div>
                                                                        <div class="row">
                                                                                <div class="col-sm-12">
                                                                                        <a href="/simple-page"  class="htsgroup"><strong>Готовые проекты</strong></a>
                                                                                </div>
                                                                        </div>

                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-reverse="true" data-cycle-pause-on-hover="true" data-cycle-speed="300" data-cycle-slides="a" style="position: relative; overflow: hidden;">
                                                                <a href="#" style="width: 100%; top: 0px; left: 0px; opacity: 1; z-index: 100; position: static; visibility: hidden; display: block;" class="cycle-slide cycle-sentinel"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195"  class="img-responsive" style="visibility: ;"></a>
                                                                <a href="#" style="width: 100%; position: absolute; top: 0px; opacity: 1; display: block; left: 0px; z-index: 96; visibility: ;" class="cycle-slide"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195"  class="img-responsive"></a>
                                                                <a href="#" style="width: 100%; position: absolute; top: 0px; opacity: 1; display: block; left: 0px; z-index: 97; visibility: ;" class="cycle-slide"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195"  class="img-responsive"></a>
                                                                <a href="#" style="width: 100%; position: absolute; z-index: 99; top: 0px; opacity: 1; visibility: visible; display: block; left: 0px;" class="cycle-slide cycle-slide-active"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195"  class="img-responsive"></a>
                                                                <a href="#" style="width: 100%; position: absolute; top: 0px; opacity: 1; display: block; z-index: 96; left: 0px; visibility: hidden;" class="cycle-slide"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195"  class="img-responsive"></a>
                                                                <a href="#" style="width: 100%; position: absolute; top: 0px; opacity: 1; display: block; left: 0px; z-index: 94; visibility: hidden;" class="cycle-slide"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195"  class="img-responsive"></a>
                                                                <a href="#" style="width: 100%; position: absolute; top: 0px; opacity: 1; display: block; left: 0px; z-index: 95; visibility: hidden;" class="cycle-slide"><img src="https://placeholdit.imgix.net/~text?txtsize=49&amp;txt=%D0%B1%D0%B0%D0%BD%D0%BD%D0%B5%D1%80&amp;w=555&amp;h=195" class="img-responsive"></a>

                                                        </div>
                                                </div>
                                                <div class="col-sm-3">
                                                        <div class="latestnews">
                                                                <div class="content padmeup">
                                                                        <p style="text-align: center;">
                                                                                <img src='https://placeholdit.imgix.net/~text?txtsize=23&txt=%D0%BC%D0%B5%D1%81%D1%82%D0%BE%20%D0%BF%D0%BE%D0%B4%20%D1%80%D0%B5%D0%BA%D0%BB%D0%B0%D0%BC%D1%83&w=240&h=172'>
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
                        <footer class="content-info footeren" role="contentinfo" style='display:none;'>
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
                                                                                                        <?= Html::a("Контакты",['site/view','guid'=>'contacts'])?>
                                                                                                </li>
                                                                                                <li class="menu-privacy">
                                                                                                        <?= Html::a("О компании",['site/view','guid'=>'about'])?>
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


                                                                        </div>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'rAeO77zsbv';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

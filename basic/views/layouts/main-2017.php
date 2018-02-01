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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75143825-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

/* Accurate bounce rate by time */
if (!document.referrer ||
     document.referrer.split('/')[2].indexOf(location.hostname) != 0)
 setTimeout(function(){
 ga('send', 'event', 'Новый посетитель', location.pathname);
 }, 15000);

</script>

<!-- BEGIN JIVOSITE CODE -->
<script type='text/javascript'>
(function(){ var widget_id = 'rAeO77zsbv';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!--  END JIVOSITE CODE -->                                                                        

<link rel="stylesheet" href="//cdn.callbackhunter.com/widget2/tracker.css">
<script type="text/javascript"
src="//cdn.callbackhunter.com/widget2/tracker.js" charset="UTF-8"></script >
<script type="text/javascript">var hunter_code="929e99ad051da7948320d1b27f0b8a39";</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter33543458 = new Ya.Metrika({
                    id:33543458,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/33543458" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

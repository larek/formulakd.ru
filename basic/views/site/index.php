<?php
use app\components\SideMenu;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'ФормулаКД';

$this->registerJsFile('/fotorama/fotorama.js',['depends' => [\yii\web\JqueryAsset::className()]]);

$this->registerCssFile('/fotorama/fotorama.css');
$slides = [
  '/images/slide2-1.jpg',
  '/images/slide2-2.jpg',
  '/images/slide2-3.jpg',
  '/images/slide2-4.jpg',
  '/images/slide2-1.jpg',
  '/images/slide2-2.jpg',
  '/images/slide2-3.jpg',
  '/images/slide2-4.jpg',
  '/images/slide2-1.jpg',
  '/images/slide2-2.jpg',
  '/images/slide2-3.jpg',
  '/images/slide2-4.jpg',
  '/images/slide2-1.jpg',
  '/images/slide2-2.jpg',
  '/images/slide2-3.jpg',
  '/images/slide2-4.jpg',
];
?>
<!-- Fotorama -->
<div class="fotorama"  data-width="100%" data-fit="cover" data-ratio="3/1" data-max-width="100%" data-nav='false'>

  <?
  foreach($model_child as $item){
    $i++;
    $slide = $slides[$i];
    ?>
    <div data-img="<?= $slide?>">
      <div class="slider_back"></div>
      <div class='slider_text'>
        <div class='container'>
          <h2><?= $item->title?></h2>
          <?= $item->content?>
          <?= Html::a('Узнать больше',['site/view', 'guid' => $item->guid],['class' => 'btn-white'])?>
        </div>
      </div>
    </div>
    <?
  }
  ?>

</div>

<div class='frontPageDivWrap'>
  <div class='container'>
    <div class='col-md-4 text-center frontPageDiv'>
        <?= Html::a("О КОМПАНИИ",['site/view','guid'=>'about'],['class' => 'btn-frontPage'])?>
    </div>
    <div class='col-md-4 text-center frontPageDiv'>
        <?= Html::a("ПАРТНЕРЫ","",['class' => 'btn-frontPage'])?>
    </div>
    <div class='col-md-4 text-center frontPageDiv'>
        <?= Html::a("СОТРУДНИЧЕСТВО","",['class' => 'btn-frontPage'])?>
    </div>
  </div>
</div>
<br><br>
<div class='container'>

<div class='col-md-12 col-xs-12 text-center frontPageTitle'>
<h2> НАШИ ПРЕИМУЩЕСТВА </h2>
</div>

<div class="row">
        <div class="col-sm-4 col-md-4 text-center">
          <img class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97200&w=200&h=200" alt="Generic placeholder image" width="140" height="140">
          <h2>Заголовок</h2>
          <p>Описание преимущества перед другими фирмами. Короткий текст, который будет в общих чертах описывать выгоды вашей фирмы для клиента</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4 col-md-4 text-center">
          <img class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97200&w=200&h=200" alt="Generic placeholder image" width="140" height="140">
          <h2>Заголовок</h2>
          <p>Описание преимущества перед другими фирмами. Короткий текст, который будет в общих чертах описывать выгоды вашей фирмы для клиента</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4 col-md-4 text-center">
          <img class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97200&w=200&h=200" alt="Generic placeholder image" width="140" height="140">
          <h2>Заголовок</h2>
          <p>Описание преимущества перед другими фирмами. Короткий текст, который будет в общих чертах описывать выгоды вашей фирмы для клиента</p>

        </div><!-- /.col-lg-4 -->
  </div>

  <div class="row">
          <div class="col-sm-4 col-md-4 text-center">
            <img class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97200&w=200&h=200" alt="Generic placeholder image" width="140" height="140">
            <h2>Заголовок</h2>
            <p>Описание преимущества перед другими фирмами. Короткий текст, который будет в общих чертах описывать выгоды вашей фирмы для клиента</p>

          </div><!-- /.col-lg-4 -->
          <div class="col-sm-4 col-md-4 text-center">
            <img class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97200&w=200&h=200" alt="Generic placeholder image" width="140" height="140">
            <h2>Заголовок</h2>
            <p>Описание преимущества перед другими фирмами. Короткий текст, который будет в общих чертах описывать выгоды вашей фирмы для клиента</p>

          </div><!-- /.col-lg-4 -->
          <div class="col-sm-4 col-md-4 text-center">
            <img class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97200&w=200&h=200" alt="Generic placeholder image" width="140" height="140">
            <h2>Заголовок</h2>
            <p>Описание преимущества перед другими фирмами. Короткий текст, который будет в общих чертах описывать выгоды вашей фирмы для клиента</p>

          </div><!-- /.col-lg-4 -->
    </div>
</div>

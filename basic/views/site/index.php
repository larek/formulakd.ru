<?php
use app\components\SideMenu;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'ФормулаКД';

$this->registerJsFile('/fotorama/fotorama.js',['depends' => [\yii\web\JqueryAsset::className()]]);

$this->registerCssFile('/fotorama/fotorama.css');
$slides = [
  '/images/slider2/1.jpg',
  '/images/slider2/2.jpg',
  '/images/slider2/3.jpg',
  '/images/slider2/4.jpg',
  '/images/slider2/6.jpg',
  '/images/slider2/6.jpg'
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

      <div class='slider_text'>
        <div class='container'>
          <div class='slider_back'>
          <h2><?= $item->title?></h2>
          <?= $item->content?>
          <?= Html::a('Узнать больше',['site/view', 'guid' => $item->guid],['class' => 'btn-white'])?>
          </div>
        </div>
      </div>
    </div>
    <?
  }
  ?>

</div>

<div class='frontPageDivWrap'>
  <div class='container'>
    <div class='col-md-4 frontPageDiv'>
        <?= Html::a("О КОМПАНИИ",['site/view','guid'=>'about'],['class' => 'btn-frontPage'])?>
        <span class='separate'></span>
        <div class='frontPageText'>
          Конструкторское бюро "Формула КД" - это компания, которая образовалась в результате коллаборации опытных инженеров
        </div>
        <a href='#'>Подробнее</a>
    </div>
    <div class='col-md-4 frontPageDiv'>
        <?= Html::a("ПАРТНЕРЫ","",['class' => 'btn-frontPage'])?>
        <span class='separate'></span>
        <div class='frontPageText'>
          Конструкторское бюро "Формула КД" - это компания, которая образовалась в результате коллаборации опытных инженеров
        </div>
        <a href='#'>Подробнее</a>
    </div>
    <div class='col-md-4 frontPageDiv'>
        <?= Html::a("СОТРУДНИЧЕСТВО","",['class' => 'btn-frontPage'])?>
        <span class='separate'></span>
        <div class='frontPageText'>
          Конструкторское бюро "Формула КД" - это компания, которая образовалась в результате коллаборации опытных инженеров
        </div>
        <a href='#'>Подробнее</a>
    </div>
  </div>
</div>
<br><br>
<div class='container'>

<div class='col-md-12 col-xs-12 text-center frontPageTitle'>
<h2>ПРЕИМУЩЕСТВА РАБОТЫ С НАМИ</h2>
</div>

<div class="row mainPageProfit">
        <div class="col-sm-4 col-md-4 text-center">
          <img class="img-circle" src="/images/1.png" alt="Generic placeholder image" width="140" height="140">
          <h2>ВЫСОКОЕ КАЧЕСТВО</h2>
          <p>Команда профессиональных инженеров «Формула КД» гарантирует высокое качество оказанных инженерно-консультационных услуг в строгом соответствии с необходимыми нормами и стандартами.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4 col-md-4 text-center">
          <img class="img-circle" src="/images/2.png" alt="Generic placeholder image" width="140" height="140">
          <h2>ОБШИРНЫЙ ОПЫТ</h2>
          <p>Впечатляющий опыт работы наших инженеров в разных сферах и областях позволяет с легкостью решить даже самые сложные инженерно-технические задачи наиболее рациональным и оптимальным для Вас способом.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4 col-md-4 text-center">
          <img class="img-circle" src="/images/3.png" alt="Generic placeholder image" width="140" height="140">
          <h2>ЭКОНОМИЯ ДЕНЕГ</h2>
          <p>При работе с нами Вам не нужно оплачивать наши болезни, отпуска или отчисления в налоговые органы. Не нужно обеспечивать наши рабочие места. Вы оплачиваете только ту работу, которая принесет Вам конкретную пользу и выгоду</p>

        </div><!-- /.col-lg-4 -->
  </div>

  <div class="row mainPageProfit">
          <div class="col-sm-4 col-md-4 text-center">
            <img class="img-circle" src="/images/4.png" alt="Generic placeholder image" width="140" height="140">
            <h2>ЭКОНОМИЯ ВРЕМЕНИ</h2>
            <p>Мы искренне считаем, что каждый человек должен заниматься тем, что у него получается лучше всего. Получается хорошо управлять предприятием? Прекрасно! Инженерное решение технических тонкостей вашего производства - доверьте нам!</p>

          </div><!-- /.col-lg-4 -->
          <div class="col-sm-4 col-md-4 text-center">
            <img class="img-circle" src="/images/5.png" alt="Generic placeholder image" width="140" height="140">
            <h2>КОНФИДЕНЦИАЛЬНОСТЬ</h2>
            <p>Мы гарантируем абсолютную конфиденциальность информации, полученной от клиента в процессе работы. Все права на разработанные нами изделия и проекты полностью принадлежат Заказчику.</p>

          </div><!-- /.col-lg-4 -->
          <div class="col-sm-4 col-md-4 text-center">
            <img class="img-circle" src="/images/6.png" alt="Generic placeholder image" width="140" height="140">
            <h2>СЖАТЫЕ СРОКИ</h2>
            <p>Наш опыт и высокая квалификация позволяют нам быстро и качественно выполнять поставленные задачи, что позволяет Вам существенно сократить сроки производства продукции или реализации проекта.</p>

          </div><!-- /.col-lg-4 -->
    </div>
</div>

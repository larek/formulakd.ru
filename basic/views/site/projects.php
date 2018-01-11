<?
use yii\helpers\Html;
$this->title = "Выполненные проекты";
?>
<div class="container">
  <div class="row">
    <div class="col-md-12 title-wrap">
      <h1>Выполненные проекты</h1>
    </div>
  </div>
</div>

<div class="product-list">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>Конструкторское бюро «Формула КД» - это компания, которая образовалась в результате коллаборации опытных инженеров-кон-
        структоров, расчетчиков и инженеров-технологов с целью предоставления профессиональных интеллектуальных услуг по разра-
        ботке, сопровождению или реализации сложных инженерно-технических проектов.</p>
        <p>В нашем штате инженеры с опытом работы в разных сферах (гидравлика, электрика, термообработка, статика, кинематика), а
        также с опытом организации проектных и исследовательских работ и соавторства в патентах.</p>
        <p>Высокая квалификация наших специалистов позволяет успешно реализовать как комплексные проекты организации нового произ-
        водства или новой технологической линии, так и осуществлять разработку и проектирование отдельных элементов или изделий.
        Спектр оказываемых нами услуг включает в себя полный жизненный цикл изделия или проекта, который мы можем выполнить как
        комплексно, так и по отдельности, в зависимости от поставленной задачи.</p>
        <p>Основной деятельностью наших инженеров является разработка технического задания на изделие, проектирование, вычисление
        допустимых нагрузок, создание математической модели (3D) проектируемого изделия, выбор и расчет наиболее оптимальной</p> 
      </div>
    </div>
    <div class="row">
      <? 
      foreach($model as $item):
        if($item->big == 1){
          $itemCoverBig = $item->photo2 == "" ? "http://placehold.it/730x292" : "/uploads/730x292/".$item->photo2;
          $itemCoverSmall = $item->photo3 == "" ? "http://placehold.it/350x292" : "/uploads/350x292/".$item->photo3;
          echo Html::beginTag('div', ['class' => 'col-md-8 mt-4 project-item d-none d-md-block', 'onclick' => 'window.location="/projects/'. $item->id .'"']);
          echo Html::img($itemCoverBig, ['class' => 'img-fluid']);
          echo Html::endTag('div');

          echo Html::beginTag('div', ['class' => 'col-md-4 mt-4 project-item d-block d-md-none', 'onclick' => 'window.location="/projects/'. $item->id .'"']);
          echo Html::img($itemCoverSmall, ['class' => 'img-fluid']);
          echo Html::endTag('div');
        }else{
          $itemClass = 'col-md-4';
          $itemCover = $item->photo3 == "" ? "http://placehold.it/350x292" : "/uploads/350x292/".$item->photo3;
          echo Html::beginTag('div', ['class' => 'col-md-4 mt-4 project-item', 'onclick' => 'window.location="/projects/'. $item->id .'"']);
          echo Html::img($itemCover, ['class' => 'img-fluid']);
          echo Html::endTag('div');
        }
      ?>
      <? endforeach;?>
    </div>
  </div>
</div>

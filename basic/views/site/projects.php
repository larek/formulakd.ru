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
        <p>Наша компания уже сумела зарекомендовать себя как надежного партнера и&nbsp;решить ряд сложных инженерных задач для промышленных производств. Профессиональная компетенция и&nbsp;положительная деловая репутация конструкторского бюро &laquo;Формула&nbsp;КД&raquo; подтверждается списком успешно выполненных проектов и&nbsp;благодарственными письмами от&nbsp;наших клиентов. Обращение в&nbsp;нашу компанию&nbsp;&mdash; это исключительная возможность для производственных предприятий профессионально решить сложные инженерно-технические вопросы в&nbsp;строго ограниченные договором сроки и&nbsp;регламентированной гарантией ответственности за&nbsp;результат.</p>
      </div>
    </div>
    <div class="row">
      <? 
      foreach($model as $item):
        if($item->big == 1){
          $itemCoverBig = $item->photo2 == "" ? "http://placehold.it/730x292" : "/uploads/730x292/".$item->photo2;
          $itemCoverSmall = $item->photo3 == "" ? "http://placehold.it/350x292" : "/uploads/350x292/".$item->photo3;
          echo Html::beginTag('div', ['class' => 'col-md-8 mt-4 project-item text-center d-none d-md-block', 'onclick' => 'window.location="/projects/'. $item->id .'"']);
          echo Html::img($itemCoverBig, ['class' => 'img-fluid']);
          echo Html::endTag('div');

          echo Html::beginTag('div', ['class' => 'col-12 col-sm-6 col-md-4 mt-4 project-item text-center d-block d-md-none', 'onclick' => 'window.location="/projects/'. $item->id .'"']);
          echo Html::img($itemCoverSmall, ['class' => 'img-fluid']);
          echo Html::endTag('div');
        }else{
          $itemClass = 'col-md-4';
          $itemCover = $item->photo3 == "" ? "http://placehold.it/350x292" : "/uploads/350x292/".$item->photo3;
          echo Html::beginTag('div', ['class' => 'col-12 col-sm-6 col-md-4 mt-4 project-item text-center', 'onclick' => 'window.location="/projects/'. $item->id .'"']);
          echo Html::img($itemCover, ['class' => 'img-fluid']);
          echo Html::endTag('div');
        }
      ?>
      <? endforeach;?>
    </div>
  </div>
</div>

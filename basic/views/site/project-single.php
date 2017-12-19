<?
$this->title = $model->title
?>
<div class="container mt-3">
  <div class="row">
    <div class="col-md-12 title-wrap">
      <h1><?= $model->title?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 mt-4 project-description">
      <?= $model->description?>
    </div>
    <div class="col-md-4 mt-4 project-demensions">
      <div class="dm-caption">Габариты, ДхШхВ, мм:</div>
      <div class="dm-value"><?= $model->demensions?></div>
    </div>
    </div>
    <div class="row single-desctiption-row">
    <div class="col-md-8 mt-4">
      <div class="blue-back"></div>
      <div class="row">
        <div class="col-md-7">
          <div class="single-description">
            <div class="prop-container">
              <div class="prop-caption">
                <?= $model->paramtitle1?>
              </div>
              <div class="prop-value">
                <?= $model->paramvalue1?>
              </div>
            </div>
            <div class="prop-container">
              <div class="prop-caption">
                <?= $model->paramtitle2?>
              </div>
              <div class="prop-value">
                <?= $model->paramvalue2?>
              </div>
            </div>
            <ul class='single-description-list'>
              <li><?= $model->list1?></li>
              <li><?= $model->list2?></li>
              <li><?= $model->list3?></li>
            </ul>
            </div>
        </div>
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-8 project-image">
        <img src="/uploads/<?= $model->photo1?>" class='img-fluid' alt="">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4 mt-4"><a data-fancybox="group" href="/uploads/<?= $model->photo6?>"><img src="/uploads/300x200/<?= $model->photo6?>" class='img-fluid' alt=""></a></div>
      <div class="col-md-4 col-sm-4 mt-4"><a data-fancybox='group' href="/uploads/<?= $model->photo4?>"><img src="/uploads/300x200/<?= $model->photo4?>" class='img-fluid' alt=""></a></div>
      <div class="col-md-4 col-sm-4 mt-4"><a data-fancybox='group' href="/uploads/<?= $model->photo5?>"><img src="/uploads/300x200/<?= $model->photo5?>" class='img-fluid' alt=""></a></div>
    </div>
    <div class="row mt-4">
      <div class="col-md-6 col-6 text-center">
        <div class="btn-prev-bost">
          <div class="d-none d-sm-block"><i class='fa fa-long-arrow-left'></i> Предыдущий проект</div>
          <div class="d-sm-none"><i class='fa fa-long-arrow-left'></i></div>
        </div>
      </div>
      <div class="col-md-6 col-6 text-center">
        <div class="btn-prev-bost">
          <div class="d-none d-sm-block">Следующий проект <i class='fa fa-long-arrow-right'></i></div>
          <div class="d-sm-none"><i class='fa fa-long-arrow-right'></i></div>
        </div>
      </div>
    </div>
  </div>
</div>
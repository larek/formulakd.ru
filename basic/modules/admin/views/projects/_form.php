<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->registerJsFile('/js/single-project.js');
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Projects */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="projects-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'demensions')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'paramtitle1')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'paramvalue1')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'paramtitle2')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'paramvalue2')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'list1')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'list2')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'list3')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading"><?= $model->getAttributeLabel('photo1')?></div>
              <div class="panel-body">
                <div id='picture1'>
                    <?= !$model->isNewRecord && $model->photo1 !== "" ? Html::img('/uploads/300x200/'. $model->photo1) : ''?>
                </div>
                <input type="file" class='uploadBtn' for='picture1'>
                <div class="hide">
                    <?= $form->field($model, 'photo1')->textInput(['maxlength' => true, 'id' => 'input-picture1']) ?>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading"><?= $model->getAttributeLabel('photo2')?></div>
              <div class="panel-body">
                <div id='picture2'>
                    <?= !$model->isNewRecord && $model->photo2 !== "" ? Html::img('/uploads/300x200/'. $model->photo2) : ''?>
                </div>
                <input type="file" class='uploadBtn' for='picture2'>
                <div class="hide">
                    <?= $form->field($model, 'photo2')->textInput(['maxlength' => true, 'id' => 'input-picture2']) ?>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading"><?= $model->getAttributeLabel('photo3')?></div>
              <div class="panel-body">
                <div id='picture3'>
                    <?= !$model->isNewRecord && $model->photo3 !== "" ? Html::img('/uploads/300x200/'. $model->photo3) : ''?>
                </div>
                <input type="file" class='uploadBtn' for='picture3'>
                <div class="hide">
                    <?= $form->field($model, 'photo3')->textInput(['maxlength' => true, 'id' => 'input-picture3']) ?>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading"><?= $model->getAttributeLabel('photo4')?></div>
              <div class="panel-body">
                <div id='picture4'>
                    <?= !$model->isNewRecord && $model->photo4 !== "" ? Html::img('/uploads/300x200/'. $model->photo4) : ''?>
                </div>
                <input type="file" class='uploadBtn' for='picture4'>
                <div class="hide">
                    <?= $form->field($model, 'photo4')->textInput(['maxlength' => true, 'id' => 'input-picture4']) ?>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading"><?= $model->getAttributeLabel('photo5')?></div>
              <div class="panel-body">
                <div id='picture5'>
                    <?= !$model->isNewRecord && $model->photo5 !== "" ? Html::img('/uploads/300x200/'. $model->photo5) : ''?>
                </div>
                <input type="file" class='uploadBtn' for='picture5'>
                <div class="hide">
                    <?= $form->field($model, 'photo5')->textInput(['maxlength' => true, 'id' => 'input-picture5']) ?>
                </div>
              </div>
            </div>

            <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

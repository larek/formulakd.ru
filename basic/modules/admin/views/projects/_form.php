<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Projects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

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

    <?= $form->field($model, 'photo1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProjectsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'demensions') ?>

    <?= $form->field($model, 'paramtitle1') ?>

    <?php // echo $form->field($model, 'paramvalue1') ?>

    <?php // echo $form->field($model, 'paramtitle2') ?>

    <?php // echo $form->field($model, 'paramvalue2') ?>

    <?php // echo $form->field($model, 'list1') ?>

    <?php // echo $form->field($model, 'list2') ?>

    <?php // echo $form->field($model, 'list3') ?>

    <?php // echo $form->field($model, 'photo1') ?>

    <?php // echo $form->field($model, 'photo2') ?>

    <?php // echo $form->field($model, 'photo3') ?>

    <?php // echo $form->field($model, 'photo4') ?>

    <?php // echo $form->field($model, 'photo5') ?>

    <?php // echo $form->field($model, 'youtube') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

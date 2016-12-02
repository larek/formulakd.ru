<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_content')->widget(TinyMce::className(), [
'options' => ['rows' => 12],
'language' => 'ru',
'clientOptions' => [
    'plugins' => [
        "advlist autolink lists link charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste image responsivefilemanager filemanager"
    ],
    'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | responsivefilemanager link image",
    'external_filemanager_path' => '/responsive_filemanager/filemanager/',
    'filemanager_title' => 'Responsive Filemanager',
        'external_plugins' => [
            // Кнопка загрузки файла в диалоге вставки изображения.
            'filemanager' => '/responsive_filemanager/filemanager/plugin.min.js',
            // Кнопка загрузки файла в тулбаре.
            'responsivefilemanager' => '/responsive_filemanager/tinymce/plugins/responsivefilemanager/plugin.min.js',
         ],
]
]);?>

    <?= $form->field($model, 'content')->widget(TinyMce::className(), [
'options' => ['rows' => 12],
'language' => 'ru',
'clientOptions' => [
    'plugins' => [
        "advlist autolink lists link charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste image responsivefilemanager filemanager"
    ],
    'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | responsivefilemanager link image",
    'external_filemanager_path' => '/responsive_filemanager/filemanager/',
    'filemanager_title' => 'Responsive Filemanager',
        'external_plugins' => [
            // Кнопка загрузки файла в диалоге вставки изображения.
            'filemanager' => '/responsive_filemanager/filemanager/plugin.min.js',
            // Кнопка загрузки файла в тулбаре.
            'responsivefilemanager' => '/responsive_filemanager/tinymce/plugins/responsivefilemanager/plugin.min.js',
         ],
]
]);?>

    <?= $form->field($model, 'guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateCreated')->textInput(['value' => date("Y-m-d")]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

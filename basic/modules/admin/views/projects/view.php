<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Projects */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Проекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'demensions',
            'paramtitle1',
            'paramvalue1',
            'paramtitle2',
            'paramvalue2',
            'list1',
            'list2',
            'list3',
            [
                'attribute' => 'photo1',
                'format' => 'raw',
                'value' => $model->photo1 == "" ? "" : Html::img("/uploads/300x200/". $model->photo1)
            ],
            [
                'attribute' => 'photo2',
                'format' => 'raw',
                'value' => $model->photo1 == "" ? "" : Html::img("/uploads/300x200/". $model->photo1)
            ],
            [
                'attribute' => 'photo3',
                'format' => 'raw',
                'value' => $model->photo1 == "" ? "" : Html::img("/uploads/300x200/". $model->photo1)
            ],
            [
                'attribute' => 'photo4',
                'format' => 'raw',
                'value' => $model->photo1 == "" ? "" : Html::img("/uploads/300x200/". $model->photo1)
            ],
            [
                'attribute' => 'photo5',
                'format' => 'raw',
                'value' => $model->photo1 == "" ? "" : Html::img("/uploads/300x200/". $model->photo1)
            ],
            'youtube',
        ],
    ]) ?>

</div>

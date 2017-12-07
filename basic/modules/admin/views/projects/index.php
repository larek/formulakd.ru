<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Проекты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать проект', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            'demensions',
            'paramtitle1',
            // 'paramvalue1',
            // 'paramtitle2',
            // 'paramvalue2',
            // 'list1',
            // 'list2',
            // 'list3',
            // 'photo1',
            // 'photo2',
            // 'photo3',
            // 'photo4',
            // 'photo5',
            // 'youtube',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

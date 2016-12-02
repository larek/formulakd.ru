<!-- Panel -->
<?
use yii\helpers\Html;
?>
<article class="panel panel-primary">

    <!-- Icon -->
    <div class="panel-heading icon">
        <i class="glyphicon glyphicon-plus"></i>
    </div>
    <!-- /Icon -->

    <!-- Heading -->
    <div class="panel-heading">
        <h2 class="panel-title"><?= Html::a($model->title,['news/view', 'id' => $model->guid])?></h2>
    </div>
    <!-- /Heading -->

    <!-- Body -->
    <div class="panel-body">
        <?= $model->short_content?>
    </div>
    <!-- /Body -->

    <!-- Footer -->
    <div class="panel-footer">
        <? $dateCreated = explode("-", $model->dateCreated);?>
        <small><?= $dateCreated[2]."-".$dateCreated[1]."-".$dateCreated[0];?></small>
    </div>
    <!-- /Footer -->

</article>
<!-- /Panel -->

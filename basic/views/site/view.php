<?
use app\components\SideMenu;
use yii\helpers\Html;


$this->title = $title;

?>
<?= SideMenu::widget(['model' => $model_child,'guid' => $guid]); ?>

<main class="main <?= $divTemplate?>" role="main">                                       
<div class='page_header'>
<h1><?= $model->title;?></h1>
</div>

    <div class='col-md-12'>
        <?= $model->content?>
    </div>
</main>

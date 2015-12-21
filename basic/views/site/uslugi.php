<?
use app\components\SideMenu;
use yii\helpers\Html;

$this->title = $title;

?>
<?//= SideMenu::widget(['model' => $model_child,'guid' => $guid]); ?>
<div class='container'>
<h1><?= $model->title;?></h1>
</div>

<div class='srvWrap'>
  <div class='srvWrapInner'>
    <div class='srvItem srvItem1'><a href='/uslugi-razrabotka-tz'><span class='srvTitle srvTitle1'>РАЗРАБОТКА ТЗ</span><img src='/images/uslugi/1-2.png'></a></div>
    <div class='srvItem srvItem2'><a href='/uslugi-proectirovanie-izdeliya'><span class='srvTitle srvTitle2'>ПРОЕКТИРОВАНИЕ</span><img src='/images/uslugi/2-2.png'></a></div>
    <div class='srvItem srvItem3'><a href='/razrabotka-kd'><span class='srvTitle srvTitle3'>РАЗРАБОТКА КД</span><img src='/images/uslugi/3-2.png'></a></div>
    <div class='srvItem srvItem4'><a href='/razrabotka-td'><span class='srvTitle srvTitle4'>РАЗРАБОКА ТД</span><img src='/images/uslugi/4-2.png'></a></div>
    <div class='srvItem srvItem5'><a href='/uslugi-izgotovlenie-opitnogo-obrazca'><span class='srvTitle srvTitle5'>ИЗГОТОВЛЕНИЕ ОПЫТНОГО ОБРАЗЦА</span><img src='/images/uslugi/5-2.png'></a></div>
    <div class='srvItem srvItem6'><a href='/uslugi-provedenie-izitaniy'><span class='srvTitle srvTitle6'>ПРОВЕДЕНИЕ ИСПЫТАНИЙ</span><img src='/images/uslugi/6-2.png'></a></div>
    <div class='srvItem srvItem7'><a href='/uslugi-avtorskiy-nadzor'><span class='srvTitle srvTitle7'>АВТОРСКИЙ НАДЗОР</span><img src='/images/uslugi/7-2.png'></a></div>
  </div>
</div>

<?= $model->content?>

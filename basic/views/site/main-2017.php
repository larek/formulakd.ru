<?php
use app\components\SideMenu;
use app\components\Callback;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'ФормулаКД';

?>

<img src="/images/Glavny_banner.jpg" class='d-none d-md-block img-full' alt="">
<img src="/images/Glavny_banner_small.jpg" class='d-block d-md-none img-full' alt="">


    <div class="blue-panel">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    Наши возможности:
                </div>
            </div>
    </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3 col-6 text-center mt-4">
                <img src="/demo/images/service-image-1.jpg" class='img-fluid rounded-circle' alt="">
                <a href="#" class='potencial_item_link'>Проектирование <br>и расчеты</a>
            </div>
            <div class="col-md-3 col-6  text-center mt-4">
                <img src="/demo/images/service-image-2.jpg" class='img-fluid rounded-circle' alt="">
                <a href="#" class='potencial_item_link'>Разработка <br>документации</a>
            </div>
            <div class="col-md-3 col-6  text-center mt-4">
                <img src="/demo/images/service-image-3.jpg" class='img-fluid rounded-circle' alt="">
                <a href="#" class='potencial_item_link'>Изготовление <br>оборудования</a>
            </div>
            <div class="col-md-3 col-6 text-center mt-4">
                <img src="/demo/images/service-image-4.jpg" class='img-fluid rounded-circle' alt="">
                
                <a href="#" class='potencial_item_link'>Разработка <br>систем управления</a>
            </div>
        </div>
    </div>
    <div class="gray-panel mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="panel-title">Выполненные проекты:</div>
                </div>
            </div>
            <div class="row mt-4">
            <? 
              foreach($model as $item):
            ?>
            <div class="col-md-3 mt-2">
                <a href="/projects/<?= $item->id?>">
                <img src="<?= $item->photo7 == '' ? 'http://via.placeholder.com/350x292/ffffff/350x292' : '/uploads/350x292/'.$item->photo7?>" class='img-fluid project-list-item__img' alt="">
                </a>
            </div>
            <? endforeach;?>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 text-center ">
                    <a href="/projects" class="btn btn-link white-link">Более полный список здесь</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center blue-title">
                Немного о нас:
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt-4">
                <div class="row">
                    <div class="col-4 main-about_picture"><img src="/demo/images/about-image-1.jpg" class='img-fluid' alt=""></div>
                    <div class="col-8">
                        <div class="main-about__description">
                            <div class="main-about_description_row">ШИРОКИЙ ОПЫТ РАБОТЫ</div>
                            <div class="main-about_description_row">ПО ПРОЕКТИРОВАНИЮ</div>
                            <div class="main-about_description_row">И ИЗГОТОВЛЕНИЮ</div>
                            <div class="main-about_description_row">НЕСТАНДАРТНОГО</div>
                            <div class="main-about_description_row">И ИСПЫТАТЕЛЬНОГО</div>
                            <div class="main-about_description_row">ОБОРУДОВАНИЯ</div>
                        </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="row">
                    <div class="col-4 main-about_picture"><img src="/demo/images/about-image-2.jpg" class='img-fluid' alt=""></div>
                    <div class="col-8">
                        <div class="main-about__description">
                            <div class="main-about_description_row">КОМАНДА ТАЛАНТЛИВЫХ</div>
                            <div class="main-about_description_row">И КВАЛИФИЦИРОВАННЫХ</div>
                            <div class="main-about_description_row">ИНЖЕНЕРОВ С ОПЫТОМ</div>
                            <div class="main-about_description_row">С ОПЫТОМ РАБОТЫ </div>
                            <div class="main-about_description_row">В РАЗНЫХ СФЕРАХ</div>
                            <div class="main-about_description_row">ИНЖЕНЕРНОЙ ДЕЯТЕЛЬНОСТИ</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="row">
                    <div class="col-4 main-about_picture"><img src="/demo/images/about-image-3.jpg" class='img-fluid' alt=""></div>
                    <div class="col-8">
                        <div class="main-about__description">
                            <div class="main-about_description_row">СОБСТВЕННАЯ</div>
                            <div class="main-about_description_row">ПРОИЗВОДСТВЕННАЯ</div>
                            <div class="main-about_description_row">ПЛОЩАДКА,</div>
                            <div class="main-about_description_row">ОСНАЩЕННАЯ</div>
                            <div class="main-about_description_row">СОВРЕМЕННЫМ</div>
                            <div class="main-about_description_row">ОБОРУДОВАНИЕМ</div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>

<div class="dark-panel">
     <div class="container mt-5">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="steps-title">
                            И о том как это работает:
                        </div>
                    </div>
                </div>
                <div class="row steps-absolute">
                    <div class="col-md-3 text-center step-container">
                        <img src="/images/steps-lamp.svg"  class='img-fluid' alt="">
                        <img src="/images/Right_pointing_double_angle_quotation_mark.svg" class='right-double-angle' alt="">
                        <div class="step-description">
                            Вы обращаетесь к нам с собственной идеей или наработкой. Связаться с нами можно по телефону 8 (831) 281-58-78 или сразу отправив запрос на электронную почту: info@formulakd.ru
                        </div>

                    </div>
                    <div class="col-md-3 text-center step-container">
                        <img src="/demo/images/step-icon-2.svg"  class='img-fluid' alt="">
                        <img src="/images/Right_pointing_double_angle_quotation_mark.svg" class='right-double-angle' alt="">
                        <div class="step-description">
                            Мы гарантируем абсолютную конфеденциальность информации, полученной от клиента в процессе работы. Заключаем соглашение о конфеденциальности
                        </div>
                    </div>
                    <div class="col-md-3 text-center step-container">
                        <img src="/demo/images/step-icon-3.svg"  class='img-fluid' alt="">
                        <img src="/images/Right_pointing_double_angle_quotation_mark.svg" class='right-double-angle' alt="">
                        <div class="step-description">
                            Исходя из требований Заказчика проводим анализ возможных вариантов решения. Проектируем изделие и разрабатываем 3-D модель будущего продукта
                        </div>
                    </div>
                    <div class="col-md-3 text-center step-container">
                        <img src="/demo/images/step-icon-4.svg"  class='img-fluid' alt="">
                        <div class="step-description">
                            Изготовление продукта. При этом регулируется ход производства и, если необходимо, устраняются выявленные недостатки проектирования или подбора материала
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <img src="/images/lump-2.jpg" class='img-fluid' alt="">
                <div class="lump-description">
                     Вы получаете абсолютно рабочее изделие с проработанной технологией изготовления серийных партий и комплектом документации, полностью соответствующим изделиям
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 step-2-slogan">
                        <div class="step-2-slogan-border"></div>
                        <div class="step-slogan-description">
                        ЦЕЛЬ: не просто выполнить работу по ТЗ, а получить рабочее воплощение задуманного изделия!
                        </div>
                        <div class="step-2-slogan-border"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="/demo/images/map-icon-1.jpg" class='img-fluid small' alt="">
                        <p>Организация транспортных услуг по доставке оборудования</p>
                    </div>
                    <div class="col-md-12 text-center">
                        <img src="/demo/images/map-icon-2.svg" class='img-fluid small' alt="">
                        <p>Послепродажное обслуживание и гарантия качества оборудования</p>
                    </div>
                    <div class="col-md-12 text-center">
                        <img src="/demo/images/map-icon-3.svg" class='img-fluid small' alt="">
                        <p>Организация и проведение первичной аттестации оборудования</p>
                    </div>
                    <div class="col-md-12 text-center">
                        <img src="/demo/images/map-icon-4.svg" class='img-fluid small' alt="">
                        <p>Проведение монтажных и пуско-наладочных работ, инструктаж персонал</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <img src="/images/main-map.png" class='img-fluid' alt="">
            </div>
        </div>
    </div>
    <div class="dark-blue-panel">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    С нами уже работают:
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="partner-logo-wrap">
                    <img src="/demo/images/customer-logo-1.jpg" style='width: 80%' class='img-fluid' alt="">
                </div>
                <div class="partner-description-wrap">
                     <p>АО
                    <br>«Авиаагрегат»</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="partner-logo-wrap">
                    <img src="/demo/images/customer-logo-2.jpg" class='img-fluid' alt="">
                </div>
                <p>АО «Концерн ВКО
                    <br>«Алмаз-Антей»</p>
            </div>
            <div class="col-md-3 text-center">
                <div class="partner-logo-wrap">
                    <img src="/demo/images/customer-logo-3.jpg" style='width: 75%' class='img-fluid' alt="">
                </div>
                <p>АО
                    <br>«НИПТБ ОНЕГА»</p>
            </div>
            <div class="col-md-3 text-center">
                <div class="partner-logo-wrap">
                    <img src="/demo/images/customer-logo-4.jpg" class='img-fluid' alt="">
                </div>
                <p>АО «Саратовский
                    <br>агрегатный завод»</p>
            </div>
        </div>
        <div class="row">
            <div style="width: 12.499999995%"></div>
            <div class="col-md-3 text-center">
                <div class="partner-logo-wrap">
                    <img src="/demo/images/customer-logo-5.jpg" style='width: 80%' class='img-fluid' alt="">
                </div>
                <p>АО
                    <br>«СмартЭнергоТрейд»</p>
            </div>
            <div class="col-md-3 text-center">
                <div class="partner-logo-wrap">
                    <img src="/demo/images/customer-logo-6.jpg" style='width: 80%' class='img-fluid' alt="">
                </div>
                <p>ООО
                    <br>«Луидор Тюнинг»</p>
            </div>
            <div class="col-md-3 text-center">
                <div class="partner-logo-wrap">
                    <img src="/demo/images/customer-logo-7.jpg" style='width: 80%' class='img-fluid' alt="">
                </div>
                <p>АО «НПЦ газотурбостроения
                    <br> «Салют»</p>
            </div>
        </div>
    </div>
    <div class="gray-panel">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="panel-title">Как нас найти:</div>
                </div>
            </div>
        </div>
    </div>

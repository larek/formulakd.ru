<?php
use app\components\SideMenu;
use app\components\Callback;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'ФормулаКД';

?>
<div class="black-panel">
  <div class="container">
    <div class="row">
        <div class="col-md-4 text-right">
            <img src="/images/gear-left.jpg"  class='animated bounceInLeft img-fluid' alt="">
        </div>
        <div class="col-md-4 about-banner-container">
            <div class="row mt-5">
                <div class="col-md-12 text-center animated bounceInDown">
                    <h6>РАЗРАБОТКА И ИЗГОТОВЛЕНИЕ </h6>
                    <h4>НЕСТАНДАРТНОГО<br> И ИСПЫТАТЕЛЬНОГО</h4>
                    <h6>ОБОРУДОВАНИЯ</h6>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center animated bounceInUp">
                    <h4>Доверьтесь нам</h4>
                    <h2>МЫ - ИНЖЕНЕРЫ!</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-right">
            <img src="/images/gear-right.jpg"  class='animated bounceInRight img-fluid' alt="">
        </div>
    </div>
  </div>
</div>
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
            <div class="col-md-3 col-6 text-center">
                <img src="/demo/images/service-image-1.jpg" class='img-fluid rounded-circle' alt="">
                <a href="#" class=''>Проектирование <br>и расчеты</a>
            </div>
            <div class="col-md-3 col-6  text-center">
                <img src="/demo/images/service-image-2.jpg" class='img-fluid rounded-circle' alt="">
                <a href="#" class=''>Разработка <br>документации</a>
            </div>
            <div class="col-md-3 col-6  text-center">
                <img src="/demo/images/service-image-3.jpg" class='img-fluid rounded-circle' alt="">
                <a href="#" class=''>Изготовление <br>оборудования</a>
            </div>
            <div class="col-md-3 col-6 text-center">
                <img src="/demo/images/service-image-4.jpg" class='img-fluid rounded-circle' alt="">
                <a href="#" class=''>Разработка <br>систем управления</a>
            </div>
        </div>
    </div>
    <div class="gray-panel mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    Выполненные проекты:
                </div>
            </div>
            <div class="row">
                <? foreach($model as $item):?>
                    <div class="col-md-3 mt-3">
                        <img src="<?= $item->photo3 == "" ? "http://placehold.it/350x292" : "/uploads/350x292/".$item->photo3;?>" class='img-fluid' alt="">
                        <div class="project-item-title">
                            <?= $item->title?>
                        </div>
                    </div>
                <? endforeach;?>
                <div class="col-md-3 mt-3">
                    <img src="/demo/images/service-image-3.jpg" class='img-fluid' alt="">
                    <div class="project-item-title">
                        Аэродинамеческий испытательный стенд
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <img src="/demo/images/service-image-3.jpg" class='img-fluid' alt="">
                    <div class="project-item-title">
                        Аэродинамеческий испытательный стенд
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <img src="/demo/images/service-image-3.jpg" class='img-fluid' alt="">
                    <div class="project-item-title">
                        Аэродинамеческий испытательный стенд
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <img src="/demo/images/service-image-3.jpg" class='img-fluid' alt="">
                    <div class="project-item-title">
                        Аэродинамеческий испытательный стенд
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <img src="/demo/images/service-image-3.jpg" class='img-fluid' alt="">
                    <div class="project-item-title">
                        Аэродинамеческий испытательный стенд
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <img src="/demo/images/service-image-3.jpg" class='img-fluid' alt="">
                    <div class="project-item-title">
                        Аэродинамеческий испытательный стенд
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <img src="/demo/images/service-image-3.jpg" class='img-fluid' alt="">
                    <div class="project-item-title">
                        Аэродинамеческий испытательный стенд
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <img src="/demo/images/service-image-3.jpg" class='img-fluid' alt="">
                    <div class="project-item-title">
                        Аэродинамеческий испытательный стенд
                    </div>
                </div>

                
            </div>
            <div class="row">
                <div class="col-md-12 text-center ">
                    <a href="#" class="btn btn-link white-link">Более полный список здесь</a>
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
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-4"><img src="/demo/images/about-image-1.jpg" class='img-fluid' alt=""></div>
                    <div class="col-md-8">ШИРОКИЙ ОПЫТ РАБОТЫ ПО ПРОЕКТИРОВАНИЮ И ИЗГОТОВЛЕНИЮ НЕСТАНДАРТНОГО И ИСПЫТАТЕЛЬНОГО ОБОРУДОВАНИЯ</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-4"><img src="/demo/images/about-image-2.jpg" class='img-fluid' alt=""></div>
                    <div class="col-md-8">КОМАНДА ТАЛАНТЛИВЫХ И КВАЛИФИЦИРОВАННЫХ ИНЖЕНЕРОВ С ОПЫТОМ РАБОТЫ В РАЗНЫХ СФЕРАХ ИНЖЕНЕРНОЙ ДЕЯТЕЛЬНОСТИ</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-4"><img src="/demo/images/about-image-3.jpg" class='img-fluid' alt=""></div>
                    <div class="col-md-8">СОБСТВЕННАЯ ПРОИЗВОДСВЕННАЯ ПЛОЩАДКА, ОСНАЩЕННАЯ СОВРЕМЕННЫМ ОБОРУДОВАНИЕМ</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 text-center blue-title">
                И о том как это работает:
            </div>
        </div>
    </div>

    <div class="container see-blue-panel">
        <div class="row">
            <div class="col-md-1 text-center step-number-block">
                1
            </div>
            <div class="col-md-11">
                Вы обращаетесь к нам с собственной идеей или наработкой.
                <br> Связаться с нами можно по телефону 8 (831) 281-58-78 или сразу отправив запрос на электронную почту: info@formulakd.ru
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 text-center">
                <span class="fa fa-angle-double-down arrow"></span>
            </div>
        </div>
    </div>

     <div class="container dark-panel mt-3">
        <div class="row">
            <div class="col-md-2 text-center">
                <img src="/demo/images/step-icon-2.svg" style='height: 100px' class='img-fluid' alt="">
                <div class="step-description">
                    Мы гарантируем абсолютную конфеденциальность информации, полученной от клиента в процессе работы. Заключаем соглашение о конфеденциальности
                </div>
            </div>
            <div class="col-md-2 text-center">
                <img src="/demo/images/step-icon-2.svg" style='height: 100px' class='img-fluid' alt="">
                <div class="step-description">
                    Мы гарантируем абсолютную конфеденциальность информации, полученной от клиента в процессе работы. Заключаем соглашение о конфеденциальности
                </div>
            </div>
            <div class="col-md-2 text-center">
                <img src="/demo/images/step-icon-3.svg" style='height: 100px' class='img-fluid' alt="">
                <div class="step-description">
                    Исходя из требований Заказчика проводим анализ возможных вариантов решения. Проектируем изделие и разрабатываем 3-D модель будущего продукта
                </div>
            </div>
            <div class="col-md-2 text-center">
                <img src="/demo/images/step-icon-4.svg" style='height: 100px' class='img-fluid' alt="">
                <div class="step-description">
                    Изготовление продукта. При этом регулируется ход производства и, если необходимо, устраняются выявленные недостатки проектирования или подбора материала
                </div>
            </div>
            <div class="col-md-4 text-center">
                <img src="/demo/images/lump.jpg" class='img-fluid' alt="">
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 step-2-slogan">
                        <div class="step-2-slogan-border"></div>
                        ЦЕЛЬ: не просто выполнить работу по ТЗ, а получить рабочее воплощение задуманного изделия!
                        <div class="step-2-slogan-border"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 text-center">
                <span class="fa fa-angle-double-down arrow"></span>
            </div>
        </div>
    </div>

     <div class="container see-blue-panel mt-3">
        <div class="row">
            <div class="col-md-1 text-center step-number-block">
                3
            </div>
            <div class="col-md-11">
                На выходе Вы получаете абсолютно рабочее изделие с проработанной технологией изготовления серийных партий и комплектом документации, полностью соответствующим изделиям
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
                <div class="row">
                    <div class="col-md-12 text-center blue-block">Работаем на всей территори страны и предоставляем полный комплекс услуг</div>
                    <div class="col-md-12"><img src="/demo/images/map.jpg" class='img-fluid' alt=""></div>
                </div>
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
                    Как нас найти:
                </div>
            </div>
        </div>
    </div>

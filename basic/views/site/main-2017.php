<?php
use app\components\SideMenu;
use app\components\Callback;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = isset($modelSeo->title) && $modelSeo->title!='' ? $modelSeo->title : 'ФормулаКД';

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
                <a href="/services"><img src="/demo/images/service-image-1.jpg" class='img-fluid rounded-circle' alt=""></a>
                <a href="/services" class='potencial_item_link'>Проектирование <br>и расчеты</a>
            </div>
            <div class="col-md-3 col-6  text-center mt-4">
                <a href="/services"><img src="/demo/images/service-image-2.jpg" class='img-fluid rounded-circle' alt=""></a>
                <a href="/services" class='potencial_item_link'>Разработка <br>документации</a>
            </div>
            <div class="col-md-3 col-6  text-center mt-4">
                <a href="/services"><img src="/demo/images/service-image-3.jpg" class='img-fluid rounded-circle' alt=""></a>
                <a href="/services" class='potencial_item_link'>Изготовление <br>оборудования</a>
            </div>
            <div class="col-md-3 col-6 text-center mt-4">
                <a href="/services"><img src="/demo/images/service-image-4.jpg" class='img-fluid rounded-circle' alt=""></a>
                <a href="/services" class='potencial_item_link'>Разработка <br>систем управления</a>
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
            <div class="col-md-3 mt-4">
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
                    <div class="col-8 main-rows-wrapper">
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
                    <div class="col-8 main-rows-wrapper">
                        <div class="main-about__description">
                            <div class="main-about_description_row">КОМАНДА ТАЛАНТЛИВЫХ</div>
                            <div class="main-about_description_row">И КВАЛИФИЦИРОВАННЫХ</div>
                            <div class="main-about_description_row">ИНЖЕНЕРОВ</div>
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
                    <div class="col-8 main-rows-wrapper">
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
                <div class="row">
                    <div class="col-md-3 text-center step-container">
                        <img src="/images/lampochka.svg"  class='img-fluid' alt="">
                        <img src="/images/Right_pointing_double_angle_quotation_mark.svg" class='right-double-angle' alt="">
                        <div class="step-description">
                            <div class="step-description_row">Вы обращаетесь к нам</div>
                            <div class="step-description_row">с собственной идеей</div>
                            <div class="step-description_row">или наработкой.</div>
                            <div class="step-description_row">Связаться с нами можно</div>
                            <div class="step-description_row">по телефону 281-58-78</div>
                            <div class="step-description_row">или сразу отправив запрос</div>
                            <div class="step-description_row">на электронную почту</div>
                            <div class="step-description_row">info@formulakd.ru</div>
                        </div>

                    </div>
                    <div class="col-md-3 text-center step-container">
                        <img src="/images/top_sikret.svg"  class='img-fluid' alt="">
                        <img src="/images/Right_pointing_double_angle_quotation_mark.svg" class='right-double-angle' alt="">
                        <div class="step-description">
                            <div class="step-description_row">Мы гарантируем</div>
                            <div class="step-description_row">абсолютную</div>
                            <div class="step-description_row">конфеденциальность</div>
                            <div class="step-description_row">информации,</div>
                            <div class="step-description_row">полученной от клиента</div>
                            <div class="step-description_row">в процессе работы.</div>
                            <div class="step-description_row">Заключаем соглашение</div>
                            <div class="step-description_row">о конфеденциальности</div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center step-container">
                        <img src="/images/kompyuter.svg"  class='img-fluid' alt="">
                        <img src="/images/Right_pointing_double_angle_quotation_mark.svg" class='right-double-angle' alt="">
                        <div class="step-description">
                            <div class="step-description_row">Исходя из требований</div>
                            <div class="step-description_row">Заказчика проводим</div>
                            <div class="step-description_row">анализ возможных</div>
                            <div class="step-description_row">вариантов решения.</div>
                            <div class="step-description_row">Проектируем изделие</div>
                            <div class="step-description_row">и разрабатываем</div>
                            <div class="step-description_row">3D-модель</div>
                            <div class="step-description_row">будущего продукта</div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center step-container">
                        <img src="/images/kulak.svg"  class='img-fluid' alt="">
                        <div class="step-description">
                            <div class="step-description_row">Изготовление продукта.</div>
                            <div class="step-description_row">При этом регулируется</div>
                            <div class="step-description_row">ход производства</div>
                            <div class="step-description_row">и, если необходимо,</div>
                            <div class="step-description_row">устраняются выявленные</div>
                            <div class="step-description_row">недостатки</div>
                            <div class="step-description_row">проектирования</div>
                            <div class="step-description_row">или подбора материала</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center step-block_lump" id='step-block_lump'>
                <div class="step-block_lump_background">
                    <div class="lump-description">
                         <div class="step-description_row">Вы получаете абсолютно</div>
                         <div class="step-description_row">рабочее изделие</div>
                         <div class="step-description_row">с проработанной</div>
                         <div class="step-description_row">технологией изготовления</div>
                         <div class="step-description_row">серийных партий</div>
                         <div class="step-description_row">и комплектом документации,</div>
                         <div class="step-description_row">полностью соответствующим</div>
                         <div class="step-description_row">изделиям</div>
                    </div>
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


    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-6 col-md-12 text-center mt-3">
                        <img src="/images/mashinka.svg" class='img-fluid small' alt="">
                        <div class="workmap_row">Организация</div>
                        <div class="workmap_row">транспортных услуг</div>
                        <div class="workmap_row">по доставке</div>
                        <div class="workmap_row">оборудования</div>
                    </div>
                    <div class= "col-6  col-md-12 text-center mt-3">
                        <img src="/images/shesterenka.svg" class='img-fluid small' alt="">
                        <div class="workmap_row">Послепродажное</div>
                        <div class="workmap_row">обслуживание</div>
                        <div class="workmap_row">и гарантия качества</div>
                        <div class="workmap_row">оборудования</div>
                    </div>
                    <div class="col-6  col-md-12 text-center mt-3">
                        <img src="/images/dokument.svg" class='img-fluid small' alt="">
                        <div class="workmap_row">Организация</div>
                        <div class="workmap_row">и проведение</div>
                        <div class="workmap_row">первичной аттестации</div>
                        <div class="workmap_row">оборудования</div>
                    </div>
                    <div class="col-6 col-md-12 text-center mt-3">
                        <img src="/images/instrument.svg" class='img-fluid small' alt="">
                        <div class="workmap_row">Проведение монтажных</div>
                        <div class="workmap_row">и пуско-наладочных</div>
                        <div class="workmap_row">работ,</div>
                        <div class="workmap_row">инструктаж персонала</div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mt-3 workmap-shestermi-wrapper">
                <img src="/images/karta_shesterni_e.jpg" class='img-fluid' alt="">
            </div>
        </div>
    </div>
    <div class="dark-blue-panel mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    С нами уже работают:
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3 text-center mt-4">
                <div class="partner-logo-wrap">
                    <img src="/images/customer-logo-1-2.jpg" class='img-fluid' alt="">
                </div>
                <div class="partner-description-wrap">
                     <p>АО
                    <br>«Авиаагрегат»</p>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center mt-4">
                <div class="partner-logo-wrap">
                    <img src="/images/customer-logo-2-2.jpg" class='img-fluid' alt="">
                </div>
                <p>АО «Концерн ВКО
                    <br>«Алмаз-Антей»</p>
            </div>
            <div class="col-6 col-md-3 text-center mt-4">
                <div class="partner-logo-wrap">
                    <img src="/images/customer-logo-3-2.jpg" class='img-fluid' alt="">
                </div>
                <p>АО
                    <br>«НИПТБ ОНЕГА»</p>
            </div>
            <div class="col-6 col-md-3 text-center mt-4">
                <div class="partner-logo-wrap">
                    <img src="/images/customer-logo-4-2.jpg" class='img-fluid' alt="">
                </div>
                <p>АО «Саратовский
                    <br>агрегатный завод»</p>
            </div>
            <div class="col-6 col-md-3 text-center mt-4">
                <div class="partner-logo-wrap">
                    <img src="/images/customer-logo-5-2.jpg" class='img-fluid' alt="">
                </div>
                <p>АО
                    <br>«СмартЭнергоТрейд»</p>
            </div>
            <div class="col-6 col-md-3 text-center mt-4">
                <div class="partner-logo-wrap">
                    <img src="/images/customer-logo-6-2.jpg" class='img-fluid' alt="">
                </div>
                <p>ООО
                    <br>«Луидор Тюнинг»</p>
            </div>
            <div class="col-6 col-md-3 text-center mt-4">
                <div class="partner-logo-wrap">
                    <img src="/images/customer-logo-7-2.jpg" class='img-fluid' alt="">
                </div>
                <p>АО «НПЦ газотурбостроения
                    <br> «Салют»</p>
            </div>
            <div class="col-6 col-md-3 text-center mt-4">
                <div class="partner-logo-wrap">
                    <img src="/images/customer-logo-8-2.jpg" class='img-fluid' alt="">
                </div>
                <p>ПАО<br>«ОДК-УМПО»</p>
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
 <div class="map-wrapper">

        <div class="d-block d-md-none text-center mt-4">
            <a class='btn btn-secondary' data-fancybox="iframe" data-src="https://yandex.ru/map-widget/v1/?um=constructor%3AoFyOK4TT-dveXO0gw1jugftdQYfwy6Z6&amp;source=constructor" data-type="iframe" data-width='1000px' href="javascript:;">Посмотреть на карте</a>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-4 p-0">
                    <div class="contact-block">
                        <div class="row">
                            <div class="col-12 text-center d-none d-md-block">
                                <span class="contact-title">Наши контакты</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2"><img src="/demo/images/contact-icon-1.svg" class='img-fluid' alt=""></div>
                            <div class="col-10">
                                <b>Адрес КБ:</b>
                                <br> г. Нижний Новгород
                                <br> пер. Мотальный, д. 10, пом. 8-9
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2"><img src="/demo/images/contact-icon-2.svg" class='img-fluid' alt=""></div>
                            <div class="col-10">
                                <b>Адрес производства:</b>
                                <br> г. Нижний Новгород,
                                <br> Московское шоссе, д. 105
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2"><img src="/demo/images/contact-icon-3.svg" class='img-fluid' alt=""></div>
                            <div class="col-10">
                                <b><a href="mailto:info@formulakd.ru" class='blue-link'>info@formulakd.ru</a></b>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2"><img src="/demo/images/contact-icon-4.svg" class='img-fluid' alt=""></div>
                            <div class="col-10">
                                <b><a href="tel:+78312815878" class='blue-link'>8 (831) 281-58-78</a></b>
                                <br>
                                <b><a href="tel:+78312815898" class='blue-link'>8 (831) 281-58-98</a></b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-none d-md-block mt-4">
         <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3AoFyOK4TT-dveXO0gw1jugftdQYfwy6Z6&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>

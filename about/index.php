<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Ulitka");
$APPLICATION->SetPageProperty("inner", "О нас");
?>
<main>
    <div class="about">
        <div class="wrapper">
            <div class="page-top">
                <div class="breadcrumbs"><a class="breadcrumbs__item" href="#">Ulitka</a><a class="breadcrumbs__item"
                        href="#">О компании</a>
                </div>
                <h1 class="page-top__title">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/about/section_title.php",
                        ),
                        false
                    ); ?>
                </h1>
                <div class="page-top__author">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/about/author.php",
                        ),
                        false
                    ); ?>
                </div>
            </div>
            <div class="about__top">
                <div class="about__snail">
                    <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "template1",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/about/about_img.php",
                            ),
                            false
                        ); ?>
                </div>
                <div class="about__text">
                    <div class="about__text-author">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "template1",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/about/author.php",
                            ),
                            false
                        ); ?>
                    </div>
                    <div class="about__text-text">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "template1",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/about/about_text.php",
                            ),
                            false
                        ); ?>
                    </div>
                </div>
            </div>
            <div class="about__gallery">
                <div class="about__gallery-item"><img src="./img/about/gallery-1.jpg" alt="" loading="lazy"></div>
                <div class="about__gallery-item"><img src="./img/about/gallery-2.jpg" alt="" loading="lazy"></div>
                <div class="about__gallery-item"><img src="./img/about/gallery-3.jpg" alt="" loading="lazy"></div>
                <div class="about__gallery-item"><img src="./img/about/gallery-4.jpg" alt="" loading="lazy"></div>
            </div>
            <div class="about__stats">
                <div class="a-stats">
                    <div class="a-stats__item">
                        <div class="a-stats__item-title">2005</div>
                        <div class="a-stats__item-value">год основания компании</div>
                    </div>
                    <div class="a-stats__item">
                        <div class="a-stats__item-title">&gt;1000</div>
                        <div class="a-stats__item-value">клиентов по всей России</div>
                    </div>
                    <div class="a-stats__item">
                        <div class="a-stats__item-title">2593м2</div>
                        <div class="a-stats__item-value">площадь производства</div>
                    </div>
                    <div class="a-stats__item">
                        <div class="a-stats__item-title">100ед/день</div>
                        <div class="a-stats__item-value">производственная мощность</div>
                    </div>
                </div>
            </div>
            <div class="about__video" data-video>
                <div class="about__video-img"><img src="./img/about/video.jpg" alt="" loading="lazy"></div>
                <div class="about__video-item"><iframe src="https://www.youtube.com/embed/KPXmZ6bLo5w"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe></div>
            </div>
            <div class="about__direction">
                <div class="about__direction-title">4 направления нашей работы</div>
                <div class="a-direction"> <a class="a-direction__item" href="#">
                        <div class="a-direction__item-img"><img src="./img/about/direction-1.jpg" alt="" loading="lazy">
                        </div>
                        <div class="a-direction__item-title">Душевые ограждения </div>
                        <div class="a-direction__item-description">Наша компания уже более 20 лет присутствует на
                            российском рынке как крупный производитель мебели из металла, стекла и дерева.</div>
                    </a><a class="a-direction__item" href="#">
                        <div class="a-direction__item-img"><img src="./img/about/direction-2.jpg" alt="" loading="lazy">
                        </div>
                        <div class="a-direction__item-title">Поддоны </div>
                        <div class="a-direction__item-description">Наша компания уже более 20 лет присутствует на
                            российском рынке как крупный производитель мебели из металла, стекла и дерева.</div>
                    </a><a class="a-direction__item" href="#">
                        <div class="a-direction__item-img"><img src="./img/about/direction-3.jpg" alt="" loading="lazy">
                        </div>
                        <div class="a-direction__item-title">Мебель</div>
                        <div class="a-direction__item-description">Наша компания уже более 20 лет присутствует на
                            российском рынке как крупный производитель мебели из металла, стекла и дерева.</div>
                    </a><a class="a-direction__item" href="#">
                        <div class="a-direction__item-img"><img src="./img/about/direction-4.jpg" alt="" loading="lazy">
                        </div>
                        <div class="a-direction__item-title">Аксессуары</div>
                        <div class="a-direction__item-description">Наша компания уже более 20 лет присутствует на
                            российском рынке как крупный производитель мебели из металла, стекла и дерева.</div>
                    </a>
                </div>
            </div>
            <div class="about__slide">
                <div class="typical__slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="./img/typical/banner.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="./img/typical/banner.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="./img/typical/banner.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="./img/typical/banner.jpg" alt="" loading="lazy"></div>
                            <div class="swiper-slide"><img src="./img/typical/banner.jpg" alt="" loading="lazy"></div>
                        </div>
                        <div class="swiper-pagination"> </div>
                    </div>
                </div>
            </div>
            <div class="about__help">
                <div class="a-help">
                    <div class="a-help__title">Помогаем <br> в нестандартных <br> изделиях</div>
                    <div class="a-help__img"><img src="./img/about/help.jpg" alt="" loading="lazy"></div>
                    <div class="a-help__text">
                        <div class="a-help__text-title">Помогаем <br> в нестандартных <br> изделиях</div>
                        <div class="a-help__text-text">
                            <p>Наша компания уже более 20 лет присутствует на российском рынке как крупный производитель
                                мебели из металла, стекла и дерева. В рамках освоения новых горизонтов в 200_ году было
                                запущено производство душевых ограждений, мебели и аксессуаров для ванной комнаты,
                                которое преобразовалось в молодой и перспективный бренд Ulitka. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Главная страница");
$APPLICATION->SetPageProperty("main page", "ulitka | Главная");
?>
  <div class="frontpage">
                <section class="banner">
                    <div class="banner__slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="banner__slider-img"><img
                                            src="<?= SITE_TEMPLATE_PATH ?>/assets/img/frontpage/banner.jpg"
                                            loading="lazy" alt=""></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner__slider-img"><img
                                            src="<?= SITE_TEMPLATE_PATH ?>/assets/img/catalog/banner.jpg" loading="lazy"
                                            alt=""></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner__slider-img"><img
                                            src="<?= SITE_TEMPLATE_PATH ?>/assets/img/typical/banner.jpg" loading="lazy"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="banner__text">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="banner__title">Уют <br> может быть стильным</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner__title">Уют <br> может быть уютным 1</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner__title">Уют <br> может быть теплым 2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </section>
                <section class="about">
                    <div class="wrapper">
                        <div class="about__content">
                            <div class="about__title">Собственное производство в России с 2000 года</div>
                            <div class="about__slider">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="about__slider-item">
                                                <h2>Собственное производство и высокий контроль качества</h2>
                                                <p>Фабрика находится на территории России в Челябинской области, это
                                                    существенно облегчает коммуникацию с покупателем.</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="about__slider-item">Доставка в любой регион до 5 рабочих дней,
                                                ответы на любые вопросы в режиме реального времени, предоставление
                                                комплектующих для нашей продукции. </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="about__slider-item">Фабрика находится на территории России в
                                                Челябинской области, это существенно облегчает коммуникацию с
                                                покупателем. Доставка в любой регион до 5 рабочих дней, ответы на любые
                                                вопросы в режиме реального времени, предоставление комплектующих для
                                                нашей продукции. </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="about__slider-item">Фабрика находится на территории России в
                                                Челябинской области, это существенно облегчает коммуникацию с
                                                покупателем. Доставка в любой регион до 5 рабочих дней, ответы на любые
                                                вопросы в режиме реального времени, предоставление комплектующих для
                                                нашей продукции. Доставка в любой регион до 5 рабочих дней, ответы на
                                                любые вопросы в режиме реального времени, предоставление комплектующих
                                                для нашей продукции. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about__slider-img">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><a class="about__img" href="./about.html"><img
                                                src="<?= SITE_TEMPLATE_PATH ?>/assets/img/frontpage/about.jpg" alt=""
                                                loading="lazy"></a></div>
                                    <div class="swiper-slide"><a class="about__img" href="./about.html"><img
                                                src="<?= SITE_TEMPLATE_PATH ?>/assets/img/frontpage/about.jpg" alt=""
                                                loading="lazy"></a></div>
                                    <div class="swiper-slide"><a class="about__img" href="./about.html"><img
                                                src="<?= SITE_TEMPLATE_PATH ?>/assets/img/frontpage/about.jpg" alt=""
                                                loading="lazy"></a></div>
                                    <div class="swiper-slide"><a class="about__img" href="./about.html"><img
                                                src="<?= SITE_TEMPLATE_PATH ?>/assets/img/frontpage/about.jpg" alt=""
                                                loading="lazy"></a></div>
                                </div>
                                <div class="swiper-nav">
                                    <div class="swiper-nav__prev"></div>
                                    <div class="swiper-nav__pagination"></div>
                                    <div class="swiper-nav__next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
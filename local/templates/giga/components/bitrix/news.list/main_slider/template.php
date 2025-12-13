<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult["ITEMS"])): ?>

    <div class="banner__slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($arResult["ITEMS"] as $arItem): ?>      
                    <div class="swiper-slide">
                        <div class="banner__slider-img">
                            <?php if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" loading="lazy" alt="<?=$arItem["NAME"]?>">
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="banner__text">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                        <div class="swiper-slide">
                            <div class="banner__title">
                                <?=$arItem["PREVIEW_TEXT"]?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

<?php endif; ?>


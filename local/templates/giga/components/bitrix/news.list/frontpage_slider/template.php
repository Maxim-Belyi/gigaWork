<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="about__slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?php
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>

                    <div class="swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <div class="about__slider-item">
                            <?= $arItem["PREVIEW_TEXT"] ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </div>

    <div class="about__slider-img">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                    <div class="swiper-slide">
                        <?php if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
                            <a class="about__img" href="/about/">
                                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" loading="lazy"
                                    alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?: $arItem["NAME"] ?>">
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-nav">
                <div class="swiper-nav__prev"></div>
                <div class="swiper-nav__pagination"></div>
                <div class="swiper-nav__next"></div>
            </div>
        </div>
    </div>

<?php endif; ?>
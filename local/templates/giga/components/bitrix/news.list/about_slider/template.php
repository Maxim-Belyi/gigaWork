<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="typical__slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?php
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>

                    <div class="swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" loading="lazy"
                            alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?: $arItem["NAME"] ?>">

                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"> </div>
        </div>
    </div>
   
        

<?php endif; ?>
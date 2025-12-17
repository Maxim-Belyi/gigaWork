<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<?php if (!empty($arResult["ITEMS"])): ?>

    <div class="banner__slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($arResult["ITEMS"] as $arItem): ?>   
                    <?php
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="swiper-slide"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="banner__slider-img">
                            <?php if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"  alt="<?=$arItem["NAME"]?>" loading="lazy">
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
                         <?php
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
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


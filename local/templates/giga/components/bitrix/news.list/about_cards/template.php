<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult["ITEMS"])): ?>

    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        $link = !empty($arItem["PROPERTIES"]["CARD_LINK"]["VALUE"]) ? $arItem["PROPERTIES"]["CARD_LINK"]["VALUE"] : '#';
        ?>
        <a class="a-direction__item" href="<?=$link?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            
            <div class="a-direction__item-img">
                <?php if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" 
                         alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"] ?: $arItem["NAME"]?>" 
                         loading="lazy">
                <?php endif; ?>
            </div>

            <div class="a-direction__item-title">
                <?=$arItem["NAME"]?>
            </div>

            <?php if ($arItem["PREVIEW_TEXT"]): ?>
                <div class="a-direction__item-description">
                    <?=$arItem["PREVIEW_TEXT"]?>
                </div>
            <?php endif; ?>
        </a>
    <?php endforeach; ?>

<?php endif; ?>
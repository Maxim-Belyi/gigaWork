<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult["ITEMS"])): ?>
    
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="about__gallery-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <?php if (!empty($arItem["PREVIEW_TEXT"])): ?>
                <div class="a-stats__item">
                    <div class="a-stats__item-title"><?= $arItem["NAME"]?></div>
                    <div class="a-stats__item-value"><?= $arItem["PREVIEW_TEXT"]?></div>
                </div>
            <?php endif; ?>
        </div>

    <?php endforeach; ?>

<?php endif; ?>
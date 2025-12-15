<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <?php 

    $arItem = $arResult["ITEMS"][0];
    $videoLink = $arItem["PROPERTIES"]["VIDEO_LINK"]["VALUE"]; 
    $imgSrc = $arItem["PREVIEW_PICTURE"]["SRC"];
    
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div class="about__video" data-video="" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        
        <div class="about__video-img">
            <?php if ($imgSrc): ?>
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" loading="lazy">
            <?php endif; ?>
        </div>

        <div class="about__video-item">
      
            <iframe src="<?=$arItem["PROPERTIES"]["VIDEO_LINK"]["VALUE"]?>"
                    title="<?=$arItem["NAME"]?>"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
            </iframe>
        </div>

    </div>

<?php endif; ?>
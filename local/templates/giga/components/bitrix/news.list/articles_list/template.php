<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

$this->setFrameMode(true);
$articlesLimit = 6; 

$myOrder = [
    'Все',
    'Душевые ограждения',
    'Душевые поддоны',
    'Уход',
    'Тенденции',
    'Мебель/Аксессуары'
];

$arGroups = [];
$arGroups['Все'] = $arResult["ITEMS"];

foreach ($arResult["ITEMS"] as $arItem) {
    $tagName = $arItem["PROPERTIES"]["ARTICLE_TAG"]["VALUE"];
    if (is_array($tagName)) {
        $tagName = reset($tagName);
    }
    $tagName = trim($tagName);

    if (!empty($tagName)) {
        $arGroups[$tagName][] = $arItem;
    }
}

$sortedGroups = [];

foreach ($myOrder as $tabName) {
    if (isset($arGroups[$tabName])) {
        $sortedGroups[$tabName] = $arGroups[$tabName];
        unset($arGroups[$tabName]);
    } else {
        $sortedGroups[$tabName] = [];
    }
}

if (!empty($arGroups)) {
    foreach ($arGroups as $name => $items) {
        $sortedGroups[$name] = $items;
    }
}

$finalGroups = $sortedGroups;
?>

<div class="articles__tabs" data-tabs="articles__list">
    <?php
    $i = 0;
    foreach ($finalGroups as $groupName => $items):
        $isActive = ($i === 0) ? 'active' : '';
        ?>
        <div class="articles__tabs-item <?= $isActive ?>"><?= $groupName ?></div>
        <?php $i++; ?>
    <?php endforeach; ?>
</div>

<div class="articles__list">
    <?php
    $tabIndex = 0;
    foreach ($finalGroups as $groupName => $groupItems):
        $isActive = ($tabIndex === 0) ? 'active' : '';
        ?>
        <div class="articles__list-item <?= $isActive ?>">
            <div class="articles-items">

                <?php if (empty($groupItems)): ?>
                <?php else: ?>

                    <?php foreach ($groupItems as $arItem): ?>
                        <?php

                        $uniqueComponentId = $arItem['ID'] . '_' . $tabIndex;

                        $this->AddEditAction($uniqueComponentId, $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($uniqueComponentId, $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                        $isBig = ($arItem["PROPERTIES"]["IS_BIG"]["VALUE_XML_ID"] == "Y");
                        $imgAlt = $arItem["PREVIEW_PICTURE"]["ALT"] ?? '';
                        ?>

                        <a class="article-item <?php if ($isBig): ?>article-item--big<?php endif ?>"
                            href="<?= $arItem["DETAIL_PAGE_URL"] ?>" id="<?= $this->GetEditAreaId($uniqueComponentId); ?>">

                            <div class="article-item__img">
                                <?php if ($arItem["PREVIEW_PICTURE"]["SRC"]): ?>
                                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $imgAlt ?>" loading="lazy">
                                <?php endif ?>
                            </div>

                            <div class="article-item__title"><?= $arItem["PREVIEW_TEXT"] ?></div>

                            <div class="article-item__bottom">
                                <div class="article-item__bottom-section">
                                    <?php
                                    echo (is_array($arItem["PROPERTIES"]["ARTICLE_TAG"]["VALUE"]))
                                        ? reset($arItem["PROPERTIES"]["ARTICLE_TAG"]["VALUE"])
                                        : $arItem["PROPERTIES"]["ARTICLE_TAG"]["VALUE"];
                                    ?>
                                </div>

                                <?php if ($arItem["DISPLAY_ACTIVE_FROM"]): ?>
                                    <div class="article-item__bottom-date"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
                                <?php endif; ?>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

        </div>
        <?php $tabIndex++; ?>
    <?php endforeach; ?>
    <div class="articles-btn btn">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "template1",
            array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH . "/includes/article/button.php"
            )
        ); ?>
    </div>
</div>
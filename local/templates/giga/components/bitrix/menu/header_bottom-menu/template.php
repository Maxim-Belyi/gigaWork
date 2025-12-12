<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>

<?php if (!empty($arResult)): ?>
    <?php foreach ($arResult as $arItem): ?>
        <a class="header__menu-item" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
    <?php endforeach ?>
<?php endif ?>
<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
?>

<?php foreach ($arResult["ITEMS"] as $arItem): ?>
	<?php
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<a class="cl-item" href="#" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

		<?php if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
			<div class="cl-item__icon">
				<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
					title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" loading="lazy">
			</div>
		<?php endif; ?>

		<div class="cl-item__title"><?= $arItem["NAME"] ?></div>

		<div class="cl-item__text"><?= $arItem["PREVIEW_TEXT"] ?></div>

	</a>

<?php endforeach; ?>
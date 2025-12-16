<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
?>


<div class="review-list">
	<?php foreach ($arResult["ITEMS"] as $arItem): ?>

		<?php
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>


		<?php
		$adminReplyText = $arItem["PROPERTIES"]["admin_reply"]["VALUE"];
		if (is_array($adminReplyText) && isset($adminReplyText['TEXT'])) {
			$adminReplyText = $adminReplyText['TEXT'];
		}
		?>
		<div class="review-list__item">
			<div class="r-review" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<div class="r-review__top">
					<div class="r-review__top-name"><?php echo $arItem["PROPERTIES"]["user_name"]["VALUE"] ?></div>
					<div class="r-review__top-date"><?php echo $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
				</div>

				<div class="r-review__text">
					<p><?php echo $arItem["PREVIEW_TEXT"]; ?></p>
				</div>
			</div>
			<?php if (!empty($adminReplyText)): ?>
				<div class="r-answer">
					<div class="r-answer__top">
						<div class="r-answer__top-name">Администратор</div>
						<div class="r-review__top-date"><?php echo $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
					</div>
					<div class="r-answer__text">
						<?= $adminReplyText; ?>
					</div>
				</div>
				
			<?php endif; ?>

		</div>
	<?php endforeach; ?>
	  <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br />
        <?=$arResult["NAV_STRING"]?>
    <?endif;?>

	
</div>
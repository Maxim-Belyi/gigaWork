<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

?>

<?php if (!empty($arResult["PREVIEW_PICTURE"]["SRC"])): ?>
	<div class="typical__banner">
		<img src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arResult["PREVIEW_PICTURE"]["ALT"] ?>"
			title="<?= $arResult["PREVIEW_PICTURE"]["TITLE"] ?>" loading="lazy">
	</div>
<?php endif; ?>

<?php if ($arResult["PREVIEW_TEXT"]): ?>
	<div class="typical__content">
		<h1><?=$arResult["NAME"]; ?></h1>
		<?= $arResult["PREVIEW_TEXT"]; ?>
	</div>
<?php endif; ?>

<div class="typical__content">

	<?php if ($arResult["DETAIL_TEXT"]): ?>
		<?= $arResult["DETAIL_TEXT"]; ?>
	<?php endif; ?>

	<?php if (!empty($arResult["PROPERTIES"]["LINE"]["VALUE"])): ?>

		<ul class="line">
			<? foreach ($arResult["PROPERTIES"]["LINE"]["VALUE"] as $lineItem): ?>
				<li><?= $lineItem ?></li>
			<? endforeach; ?>
		</ul>
	<?php endif; ?>

	<?php if (!empty($arResult["PROPERTIES"]["DOTTED"]["VALUE"])): ?>
		<ul>
			<? foreach ($arResult["PROPERTIES"]["DOTTED"]["VALUE"] as $lineItem): ?>
				<li><?= $lineItem ?></li>
			<? endforeach; ?>
		</ul>
	<?php endif; ?>

	<?php if (!empty($arResult["PROPERTIES"]["NUMERIC"]["VALUE"])): ?>
		<ol>
			<?php foreach ($arResult["PROPERTIES"]["NUMERIC"]["VALUE"] as $lineItem): ?>
				<li><?= $lineItem ?></li>
			<?php endforeach; ?>
		</ol>
	<?php endif; ?>

	<?php if (!empty($arResult["PROPERTIES"]["IMPORTANT"]["VALUE"])): ?>

		<?php foreach ($arResult["PROPERTIES"]["IMPORTANT"]["VALUE"] as $lineItem): ?>
			<h2>Важно</h2>
			<p><?= $lineItem ?></p>
		<?php endforeach; ?>
	<?php endif; ?>

	<?php if (!empty($arResult["PROPERTIES"]["QUOTE"]["VALUE"])): ?>
		<h2>Цитаты</h2>
		<blockquote>
			<?= $arResult["PROPERTIES"]["QUOTE"]["VALUE"] ?>
		</blockquote>

		<?php if (!empty($arResult["PROPERTIES"]["FIGCAPTION"]["VALUE"])): ?>
			<figcaption>
				<?= $arResult["PROPERTIES"]["FIGCAPTION"]["VALUE"] ?>
			</figcaption>
		<?php endif; ?>
	<?php endif; ?>

</div>
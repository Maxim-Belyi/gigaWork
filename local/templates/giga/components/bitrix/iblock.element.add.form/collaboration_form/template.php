<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
?>
<div class="collaboration__form">
	<div class="collaboration__form-title">Оставьте свои контакты для связи</div>

	<form name="iblock_add" action="" method="post" enctype="multipart/form-data" class="form">
		<?= bitrix_sessid_post() ?>
		<div class="form__inputs">
			<div class="form__inputs">
				<div class="custom-input">

					<input class="custom-input__input" type="text" name="PROPERTY[NAME][0]" placeholder="Введите ФИО"
						name="PROPERTY[NAME][0]" value="<?= $arResult["ELEMENT"]["NAME"] ?>">

					<span class="custom-input__error">Текст ошибки</span>
					<label class="custom-input__label">ФИО </label>
				</div>

				<div class="custom-input">
					<input class="custom-input__input" type="text" placeholder="Введите Телефон" inputmode="numeric"
						data-mask-phone name="PROPERTY[15][0]"
						value="<?= $arResult["ELEMENT_PROPERTIES"][15][0]["VALUE"] ?>">
					<span class="custom-input__error">Текст ошибки</span>
					<label class="custom-input__label">Телефон</label>
				</div>

				<div class="custom-input">
					<input class="custom-input__input" type="text" placeholder="Введите E-mail" name="PROPERTY[16][0]"
						value="<?= $arResult["ELEMENT_PROPERTIES"][16][0]["VALUE"] ?>">

					<span class="custom-input__error">Текст ошибки</span>
					<label class="custom-input__label">E-mail</label>
				</div>

				<div class="custom-input">
					<input class="custom-input__input" type="text" placeholder="Введите Название компании"
						name="PROPERTY[17][0]" value="<?= $arResult["ELEMENT_PROPERTIES"][17][0]["VALUE"] ?>">
					<span class="custom-input__error">Текст ошибки</span>
					<label class="custom-input__label">Название компании</label>
				</div>

				<div class="custom-textarea">
					<textarea class="custom-textarea__textarea" type="text" placeholder="Оставьте свой комментарий"
						name="PROPERTY[PREVIEW_TEXT][0] ?>"><?= $arResult["ELEMENT"]["PREVIEW_TEXT"] ?></textarea>
					<label class="custom-textarea__label">Комментарии</label>
				</div>
			</div>

		</div>
		<div class="form__submit">
			<button class="btn btn--mini" value="Отправить" name="iblock_submit" type="submit">Отправить</button>
		</div>
	</form>
</div>
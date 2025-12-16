<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
?>

<form name="iblock_add" action="" method="post" enctype="multipart/form-data" class="form">
	<?= bitrix_sessid_post() ?>

	<div class="form__inputs">
		<div class="custom-input">
			<input class="custom-input__input" type="text" name="PROPERTY[NAME][0]" placeholder="Введите ФИО"
				value="<?= $arResult["ELEMENT"]["NAME"] ?>">

			<span class="custom-input__error">Пожалуйста, представьтесь</span>
			<label class="custom-input__label">ФИО *</label>
		</div>
		<div class="default-textarea">
			<textarea class="default-textarea__textarea" name="PROPERTY[PREVIEW_TEXT][0]"
				placeholder="Напишите отзыв"><?= $arResult["ELEMENT"]["PREVIEW_TEXT"] ?></textarea>
		</div>

	</div>

	<div class="form__politics">
		Нажимая кнопку, Вы даете информированное согласие <br>
		на <a href="#" target="_blank">обработку своих персональных данных</a>
	</div>

	<div class="form__submit">
		<button class="btn btn--mini" type="submit" name="iblock_submit" value="Отправить">Оставить отзыв</button>
	</div>

</form>
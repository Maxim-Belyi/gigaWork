<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ulitka");
?><p>
	 это ТЕСТ пхп в корне
	 <?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form", 
	".default", 
	array(
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "Имя пользователя",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "Напишите отзыв",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"ELEMENT_ASSOC_PROPERTY" => "14",
		"GROUPS" => array(
			0 => "1",
			1 => "5",
		),
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "Review",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
		),
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "N",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "",
		"USER_MESSAGE_EDIT" => "",
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
</p>
<p>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Ulitka");
$APPLICATION->SetPageProperty("inner", "Контаты");
use Bitrix\Main\Page\Asset;

?>
<div class="contacts">
	<div class="wrapper">
		<div class="page-top">
			<div class="breadcrumbs">
				<a class="breadcrumbs__item" href="#">Ulitka</a><a class="breadcrumbs__item" href="#">Контакты</a>
			</div>
			<h1 class="page-top__title">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"template1",
					array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH . "/includes/contacts/section-title.php"
					)
				); ?>
			</h1>
		</div>
		<div class="contacts__content">
			<div class="contacts__text">
				<div class="t-block">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"template1",
						array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/includes/contacts/adress.php"
						)
					); ?>
				</div>
				<div class="t-block">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"template1",
						array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/includes/contacts/work-time.php"
						)
					); ?>
				</div>
				<div class="t-block">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"template1",
						array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/includes/contacts/shop-phone.php"
						)
					); ?>
				</div>
				<div class="t-block">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"template1",
						array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/includes/contacts/shop-email.php"
						)
					); ?>
				</div>
			</div>
			<div class="contacts__map" id="map">
				<? $APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	"contacts_YaMap", 
	array(
		"API_KEY" => "",
		"COMPONENT_TEMPLATE" => "contacts_YaMap",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.050567006861655;s:10:\"yandex_lon\";d:61.594645704928986;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:61.592656789605;s:3:\"LAT\";d:55.051003993063;s:4:\"TEXT\";s:11:\"Мы тут\";}}}",
		"MAP_HEIGHT" => "412",
		"MAP_WIDTH" => "100%",
		"MAP_ID" => "",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DRAGGING",
		)
	),
	false
); ?>
			</div>
		</div>
	</div>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
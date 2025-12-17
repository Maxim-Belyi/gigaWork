<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
$this->setFrameMode(true);

if (($arParams['BX_EDITOR_RENDER_MODE'] ?? null) == 'Y'):
	?>
	<img src="/bitrix/components/bitrix/map.yandex.view/templates/.default/images/screenshot.png" 
		style="width: 100%;" />
	<?
	return;
endif;

$arData = $arResult['POSITION'];
$centerLat = $arData['yandex_lat'];
$centerLon = $arData['yandex_lon'];
$zoom = $arData['yandex_scale'];
$markLat = $arData['PLACEMARKS'][0]['LAT'] ?? $centerLat;
$markLon = $arData['PLACEMARKS'][0]['LON'] ?? $centerLon;
?>
<div id="yandex_map_custom" style="width: <?= $arParams['MAP_WIDTH'] ?>px; height: <?= $arParams['MAP_HEIGHT'] ?>px;"></div>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=<?= $arParams['API_KEY'] ?>"
	type="text/javascript"></script>

<script type="text/javascript">
	ymaps.ready(init);
	var customMap;

	function init() {
		customMap = new ymaps.Map("yandex_map_custom", {
			center: [<?= $centerLat ?>, <?= $centerLon ?>],
			zoom: <?= $zoom ?>,
			controls: []
		}, {
			suppressMapOpenBlock: true
		});

		customMap.behaviors.enable('scrollZoom');
		customMap.behaviors.enable('drag');


		var customPlacemark = new ymaps.Placemark([<?= $markLat ?>, <?= $markLon ?>], {}, {
			iconLayout: 'default#image',
			iconImageHref: '<?= SITE_TEMPLATE_PATH ?>/assets/img/balloon.svg',
			iconImageSize: [46, 56],
			iconImageOffset: [-36, -60],
			balloonImageOffset: [-10, -50],
			balloonShadow: false
		});

		customMap.geoObjects.add(customPlacemark);
	}   
</script>
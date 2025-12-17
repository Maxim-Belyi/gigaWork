<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Сотрудничество");
$APPLICATION->AddChainItem("Душевые ограждения", ""); 
?>
<div class="collaboration">
    <div class="wrapper">
        <div class="page-top">
             <?php if ($APPLICATION->GetCurPage(false) !== '/'): ?>
                <div class="breadcrumbs">
                    <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
                        "START_FROM" => "0",
                        "PATH" => "",
                        "SITE_ID" => SITE_ID
                    )); ?>
                </div>
            <?php endif; ?>
            <h1 class="page-top__title">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "template1",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/collaboration/title.php"
                    )
                ); ?>
            </h1>
        </div>
        <div class="collaboration__banner">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "template1",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH . "/includes/collaboration/image.php"
                )
            ); ?>
        </div>
        <div class="collaboration__content">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "template1",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH . "/includes/collaboration/content.php"
                )
            ); ?>
        </div>

        <? $APPLICATION->IncludeComponent(
            "bitrix:iblock.element.add.form",
            "collaboration_form",
            array(
                "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",	// * дата начала *
                "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",	// * дата завершения *
                "CUSTOM_TITLE_DETAIL_PICTURE" => "",	// * подробная картинка *
                "CUSTOM_TITLE_DETAIL_TEXT" => "",	// * подробный текст *
                "CUSTOM_TITLE_IBLOCK_SECTION" => "",	// * раздел инфоблока *
                "CUSTOM_TITLE_NAME" => "ФИО",	// * наименование *
                "CUSTOM_TITLE_PREVIEW_PICTURE" => "",	// * картинка анонса *
                "CUSTOM_TITLE_PREVIEW_TEXT" => "Комментарии",	// * текст анонса *
                "CUSTOM_TITLE_TAGS" => "",	// * теги *
                "DEFAULT_INPUT_SIZE" => "30",	// Размер полей ввода
                "DETAIL_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования подробного текста
                "ELEMENT_ASSOC" => "CREATED_BY",	// Привязка к пользователю
                "GROUPS" => array(	// Группы пользователей, имеющие право на добавление/редактирование
                    0 => "2",
                ),
                "IBLOCK_ID" => "15",	// Инфоблок
                "IBLOCK_TYPE" => "collaboration",	// Тип инфоблока
                "LEVEL_LAST" => "Y",	// Разрешить добавление только на последний уровень рубрикатора
                "LIST_URL" => "",	// Страница со списком своих элементов
                "MAX_FILE_SIZE" => "0",	// Максимальный размер загружаемых файлов, байт (0 - не ограничивать)
                "MAX_LEVELS" => "100000",	// Ограничить кол-во рубрик, в которые можно добавлять элемент
                "MAX_USER_ENTRIES" => "100000",	// Ограничить кол-во элементов для одного пользователя
                "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования текста анонса
                "PROPERTY_CODES" => array(	// Свойства, выводимые на редактирование
                    0 => "15",
                    1 => "16",
                    2 => "17",
                    3 => "NAME",
                    4 => "PREVIEW_TEXT",
                ),
                "PROPERTY_CODES_REQUIRED" => array(	// Свойства, обязательные для заполнения
                    0 => "15",
                    1 => "NAME",
                ),
                "RESIZE_IMAGES" => "N",	// Использовать настройки инфоблока для обработки изображений
                "SEF_MODE" => "N",	// Включить поддержку ЧПУ
                "STATUS" => "ANY",	// Редактирование возможно
                "STATUS_NEW" => "N",	// Деактивировать элемент
                "USER_MESSAGE_ADD" => "",	// Сообщение об успешном добавлении
                "USER_MESSAGE_EDIT" => "",	// Сообщение об успешном сохранении
                "USE_CAPTCHA" => "N",	// Использовать CAPTCHA
                "COMPONENT_TEMPLATE" => ".default"
            ),
            false
        ); ?>
    </div>
</div>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
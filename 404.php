<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>
      <div class="wrapper">               
          <div class="page-404">
              <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/404/description.php"
                        )
                    ); ?>
			<a class="page-404__btn btn btn--mini" href="./">
				   <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "template1",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/404/link-text.php"
                        )
                    ); ?>
			</a>
          </div>
        </div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
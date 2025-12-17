</main>
<footer class="footer">
  <div class="wrapper">
    <div class="footer__top">
      <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "template1",
        array(
          "AREA_FILE_SHOW" => "file",
          "PATH" => SITE_TEMPLATE_PATH . "/includes/logo-black.php",
        ),
        false
      ); ?>
      <div class="footer__menu">
        <? $APPLICATION->IncludeComponent(
          "bitrix:menu",
          "footer_left-menu",
          array(
            "ROOT_MENU_TYPE" => "top",
            "MAX_LEVEL" => "1",
            "CHILD_MENU_TYPE" => "",
            "USE_EXT" => "N",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "N",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => ""
          )
        ); ?>
      </div>
      <div class="footer__menu"><? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "footer_right-menu",
        array(
          "ROOT_MENU_TYPE" => "bottom",
          "MAX_LEVEL" => "1",
          "CHILD_MENU_TYPE" => "",
          "USE_EXT" => "N",
          "DELAY" => "N",
          "ALLOW_MULTI_SELECT" => "N",
          "MENU_CACHE_TYPE" => "A",
          "MENU_CACHE_TIME" => "3600",
          "MENU_CACHE_USE_GROUPS" => "Y",
          "MENU_CACHE_GET_VARS" => ""
        )
      ); ?>
      </div>
      <div class="footer__info"><? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "template1",
        array(
          "AREA_FILE_SHOW" => "file",
          "PATH" => SITE_TEMPLATE_PATH . "/includes/footer/footer_phone.php",
        ),
        false
      ); ?>
        <div class="footer__schedule"><?php $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "template1",
          array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_TEMPLATE_PATH . "/includes/footer/footer_work-time.php",
          ),
          false
        ); ?></div>
        <div class="footer__social"><a class="footer__social-item" href="#" target="blank"><? $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "template1",
          array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_TEMPLATE_PATH . "/includes/vk-logo.php",
          ),
          false
        ); ?></a></div>
      </div>
    </div>
    <div class="footer__bottom">
      <a class="footer__social mobile"><?php $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "template1",
        array(
          "AREA_FILE_SHOW" => "file",
          "PATH" => SITE_TEMPLATE_PATH . "/includes/vk-logo.php",
        ),
        false
      ); ?></a>
      </d>
      <div class="footer__text"><?php $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "template1",
        array(
          "AREA_FILE_SHOW" => "file",
          "PATH" => SITE_TEMPLATE_PATH . "/includes/footer/all-rights.php",
        ),
        false
      ); ?></div>
      <div class="footer__copyright">
        <?php $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "template1",
          array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_TEMPLATE_PATH . "/includes/footer/copyright.php",
          ),
          false
        ); ?>
      </div>
      <?php $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "template1",
        array(
          "AREA_FILE_SHOW" => "file",
          "PATH" => SITE_TEMPLATE_PATH . "/includes/footer/email.php",
        ),
        false
      ); ?>
      <a class="footer__developers" href="https://www.xpage.ru/" target="blank"></a>
    </div>
  </div>
</footer>
</div>
</body>
<div class="cookie">
  <div class="wrapper">
    <div class="cookie__content">
      <div class="cookie__title">
        <p>Мы иcпользуем cookie файлы!</p>
        <p>Просматривая этот сайт, вы соглашаетесь с нашей <a href="#">политикой конфиденциальности</a></p>
      </div>
      <div class="cookie__btn btn btn--middle">Принять</div>
      <div class="cookie__close"></div>
    </div>
  </div>
</div>

</html>
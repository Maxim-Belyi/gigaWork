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
        <div class="footer__schedule"><? $APPLICATION->IncludeComponent(
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
      <div class="footer__social mobile"><?php $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "template1",
        array(
          "AREA_FILE_SHOW" => "file",
          "PATH" => SITE_TEMPLATE_PATH . "/includes/vk-logo.php",
        ),
        false
      ); ?></a>
      </div>
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
<div class="popup popup--login" id="login">
  <div class="popup__close popup__close--back"></div>
  <div class="popup__block">
    <div class="popup__tab" data-tabs="popup__content--login">
      <div class="popup__tab-item active">Авторизация</div>
      <div class="popup__tab-item">Регистрация</div>
    </div>
    <div class="popup__content popup__content--login">
      <div class="popup__content-form active">
        <form class="form">
          <div class="form__inputs">
            <div class="default-input">
              <input class="default-input__input" type="tel" data-mask-phone required placeholder="Телефон*"><span
                class="default-input__error">Please fill out this fild</span>
            </div>
            <div class="default-input">
              <input class="default-input__input" type="password" required placeholder="Пароль*"><span
                class="default-input__error">Please fill out this fild</span>
            </div>
          </div>
          <div class="form__submit">
            <button class="form__submit-btn btn" type="submit">Войти</button>
            <div class="form__submit-text">Нажимая кнопку, Вы даете информированное согласие на <a href="#">обработку
                своих персональных данных</a></div>
            <div class="form__submit-link" data-popup="forgot">Забыли пароль?</div>
          </div>
        </form>
      </div>
      <div class="popup__content-form">
        <form class="form">
          <div class="form__inputs">
            <div class="default-input">
              <input class="default-input__input" type="text" required placeholder="ФИО*"><span
                class="default-input__error">Please fill out this fild</span>
            </div>
            <div class="default-input">
              <input class="default-input__input" type="text" required placeholder="E-mail*"><span
                class="default-input__error">Please fill out this fild</span>
            </div>
            <div class="default-input">
              <input class="default-input__input" type="tel" data-mask-phone required placeholder="Телефон*"><span
                class="default-input__error">Please fill out this fild</span>
            </div>
            <div class="default-input">
              <input class="default-input__input" type="password" required placeholder="Пароль*"><span
                class="default-input__error">Please fill out this fild</span>
            </div>
            <div class="default-input">
              <input class="default-input__input" type="password" required placeholder="Повторите пароль*"><span
                class="default-input__error">Please fill out this fild</span>
            </div>
          </div>
          <div class="form__submit">
            <button class="form__submit-btn btn" type="submit">Зарегистрироваться</button>
            <div class="form__submit-text">Нажимая кнопку, Вы даете информированное согласие на <a href="#">обработку
                своих персональных данных</a></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="popup popup--review" id="review">
  <div class="popup__block">
    <div class="popup__close popup__close--back"></div>
    <div class="popup__title">Ваш отзыв</div>
    <div class="popup-review">
      <form class="form">
        <div class="form__inputs">
          <div class="custom-input">
            <input class="custom-input__input" type="text" placeholder="Введите ФИО"><span
              class="custom-input__error">Текст ошибки</span>
            <label class="custom-input__label">ФИО</label>
          </div>
          <div class="default-textarea">
            <textarea class="default-textarea__textarea" type="text" placeholder="Напишите отзыв"></textarea>
          </div>
        </div>
        <div class="form__politics">Нажимая кнопку, Вы даете информированное согласие <br> на <a href="#"
            target="_blank">обработку своих персональных данных</a></div>
        <div class="form__submit">
          <button class="btn btn--mini" type="submit">Оставить отзыв</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="popup popup--order" id="order">
  <div class="popup__block">
    <div class="popup__close popup__close--back"></div>
    <div class="popup__title">Оформление заказа</div>
    <div class="popup__subtitle">Для оформления индивидуального заказа пожалуйста оставьте ФИО и номер телефона. Мы с
      вами свяжемся</div>
    <div class="popup-order">
      <form class="form">
        <div class="form__inputs">
          <div class="custom-input">
            <input class="custom-input__input" type="text" placeholder="Введите ФИО"><span
              class="custom-input__error">Текст ошибки</span>
            <label class="custom-input__label">ФИО</label>
          </div>
          <div class="custom-input">
            <input class="custom-input__input" type="tel" data-mask-phone placeholder="Введите номер телефона"><span
              class="custom-input__error">Текст ошибки</span>
            <label class="custom-input__label">Телефон</label>
          </div>
        </div>
        <div class="form__politics">Нажимая кнопку, Вы даете информированное согласие <br> на <a href="#"
            target="_blank">обработку своих персональных данных</a></div>
        <div class="form__submit">
          <button class="btn btn--mini" type="submit">Оформить заказ</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="popup popup--size" id="size">
  <div class="popup__block">
    <div class="popup__close popup__close--back"></div>
    <div class="popup__title">Таблица размеров</div>
    <div class="popup-size">
      <div class="p-size">
        <div class="p-size__top">B</div>
        <div class="p-size__line">
          <div class="p-size__line-left">A</div>
          <div class="p-size__line-table">
            <div class="p-table">
              <div class="p-table__block">
                <div class="p-table__block-item"></div>
                <div class="p-table__block-item">90</div>
                <div class="p-table__block-item">100</div>
                <div class="p-table__block-item">120</div>
              </div>
              <div class="p-table__block">
                <div class="p-table__block-item">80</div>
                <div class="p-table__block-item">-</div>
                <div class="p-table__block-item">-</div>
                <div class="p-table__block-item">25</div>
              </div>
              <div class="p-table__block">
                <div class="p-table__block-item">90</div>
                <div class="p-table__block-item">20</div>
                <div class="p-table__block-item">-</div>
                <div class="p-table__block-item">-</div>
              </div>
              <div class="p-table__block">
                <div class="p-table__block-item">100</div>
                <div class="p-table__block-item">-</div>
                <div class="p-table__block-item">20</div>
                <div class="p-table__block-item">-</div>
              </div>
            </div>
          </div>
          <div class="p-size__line-right">C</div>
        </div>
      </div>
      <div class="p-img"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/product/size.jpg" alt="" loading="lazy"></div>
    </div>
  </div>
</div>
<div class="popup popup--warning" id="warning">
  <div class="popup__block">
    <div class="popup__close popup__close--back"></div>
    <div class="popup__title">Отменить заказ</div>
    <div class="popup-warning">
      <div class="popup-warning__text">Вы действительно хотите отменить оформление заказа и вернуться в корзину?</div>
      <div class="popup-warning__buttons">
        <div class="btn--white">Отменить</div>
        <div class="btn custom-close">Подтвердить</div>
      </div>
    </div>
  </div>
</div>
<div class="popup popup--more" id="more">
  <div class="popup__block">
    <div class="popup__close popup__close--back"></div>
    <div class="popup__title">Информация о заказе</div>
    <div class="popup-more">
      <div class="basket__success">
        <div class="b-success">
          <div class="b-success__description">Мы свяжемся с вами по телефону, как только ваш заказ будет готов к выдаче
          </div>
          <div class="b-success__items">
            <div class="b-success__item">
              <div class="b-success__item-title">Доставка</div>
              <div class="b-success__item-value">Россия, Челябинск, СНТ Колющенец, 21-я улица, 12 квартира</div>
            </div>
            <div class="b-success__item">
              <div class="b-success__item-title">Тип оплаты</div>
              <div class="b-success__item-value">Наличный расчет</div>
            </div>
          </div>
          <div class="b-success__total">
            <div class="b-success__price">
              <div class="b-success__price-title">Итоговая стоимость</div>
              <div class="b-success__price-cost">93 391 руб.</div>
            </div>
            <div class="b-success__btns"><a class="b-success__btn btn--white custom-close" href="./">Закрыть</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="popup popup--info" id="info">
  <div class="popup__block">
    <div class="popup__close"></div>
    <div class="popup-info">
      <div class="popup-info__title">Произошла ошбика</div>
      <div class="popup-info__description">Некоторые поля не заполнены или заполнены не верно</div>
    </div>
  </div>
</div>


</html>
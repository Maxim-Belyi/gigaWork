</main>
<footer class="footer">
  <div class="wrapper">
    <div class="footer__top"><a class="footer__logo" href="/"><img
          src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo-black.svg" alt="" loading="lazy"></a>
      <div class="footer__menu"><a class="footer__menu-item" href="#">Сотрудничество</a><a class="footer__menu-item"
          href="#">Гарантия и сервис</a><a class="footer__menu-item" href="#">Полезные статьи</a>
      </div>
      <div class="footer__menu"><a class="footer__menu-item" href="#">О компании</a><a class="footer__menu-item"
          href="#">Контакты</a><a class="footer__menu-item" href="#">Отзывы</a>
      </div>
      <div class="footer__info"><a class="footer__phone" href="tel:+78003552225">+7 (800) 355-22-25</a>
        <div class="footer__schedule">с 7:00 до 16:00 по МСК</div>
        <div class="footer__social"><a class="footer__social-item" href="#" target="blank"><img
              src="<?= SITE_TEMPLATE_PATH ?>/assets/img/vk.svg" alt="" loading="lazy"></a></div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="footer__social mobile"><a class="footer__social-item" href="#" target="blank"><img
            src="<?= SITE_TEMPLATE_PATH ?>/assets/img/vk.svg" alt="" loading="lazy"></a></div>
      <div class="footer__text">Все права защищены</div>
      <div class="footer__copyright">© Ulitka, 2022</div><a class="footer__email"
        href="mailto:ulitkamarket@info.ru">ulitkamarket@info.ru</a><a class="footer__developers"
        href="https://www.xpage.ru/" target="blank"></a>
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
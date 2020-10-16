<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отлично! Вопрос успешно зарегистрирован | FINCONSULT - финансовый консалтинг</title>
    <meta name="description" content="FINCONSULT - команда, которая занимается консалтингом. Мы собрали огромное количество экспертов экономического рынка, которые готовы ответить на все ваши вопросы.">
    <link rel="icon" type="image/png" href="img/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mobile.css">
    <style>
      .footer {
        min-width: 100%;
        position: fixed;
        left: 0;
        bottom: 0;
      }

      @media screen and (max-width: 414px) {
        .footer {
          position: static;
        }
      }

      section {
        height: auto;
      }

      .section__header {
        margin-top: 50px;
        text-align: center;
        font-family: "Open Sans", sans-serif;
        font-size: 25px;
        line-height: 47px;
      }

      .section__header ~ p {
        font-family: "Open Sans", sans-serif;
        font-size: 20px;
        line-height: 47px;
        text-align: center;
      }
    </style>
</head>

<body>
<header class="header">
    <div class="container">
      <div class="row">
        <div class="col-6 header__col--logo">
          <img class="header__logo" src="img/logo-header.png" alt="logo">
        </div>
        <div class="col-6 header__col">
        <div class="header__contacts">
          <a href="tel: +7 495 009-04-67"><img src="img/phone-icon.png" alt="phone-icon"></a>
          <a href="tel: +7 495 009-04-67"><span>+7 495 009-04-67</span></a>
          <button data-toggle="modal" data-target="#modal">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>
        </div>
        </div>
      </div>
    </div>
  </header>

  <section>
      <div class="container">
          <div class="row">
              <div class="col-12">
              <h2 class="section__header wow fadeIn">Вы успешно оставили заявку!</h2>
                <p class="wow fadeIn" data-wow-delay="0.3">Вы успешно оставили заявку на бесплатную консультацию от аналитика. <br>Мы подбираем для Вас специалиста и в течении 10 минут он свяжеться с Вами!</p>
              </div>
          </div>
      </div>
  </section>


  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-6 footer__col">
          <img class="footer__logo" src="img/logo-header.png">
        </div>
        <div class="col-6 footer__col">
          <div class="footer__info">
            <p class="footer__text">Получите консультацию по телефону!</p>
            <a class="footer__tel" href="tel:+7 495 009-04-67">
              <img src="img/phone-icon-green.png">
              <div >
                <p>+7 495 009-04-67</p>
              </div>
            </a>
            <p class="footer__text">с 10:00 до 19:00 Пн-Пт</p>
          </div>
          
        </div>
      </div>
      <div class="row line" ></div>
      <div class="row">
        <div class="col-6 footer__rights">
          <p class="footer__text">© 2020. Все права защищены.</p>
        </div>
        <div class="col-6 footer__politics">
          <a href="conf.pdf">
            <p class="footer__text">Политика конфиденциальности</p>
          </a>
        </div>
      </div>
    </div>
   
  </footer>

  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <form id="form-3" class="form form-modal">
            <h4 class="modal__header">Заполните форму и получите консультацию от аналитика</h4>
            <div class="form-input">

                <input class="form-control form__input form__input--user-img" type="text" id="name-3" placeholder="Ваше имя" required>
                <span class="msg-help-3 name-span-3" style="display:none;">Укажите имя, что бы мы знали как обращаться к Вам</span>


                <input  class="form-control form__input form__input--email-img" type="email" id="mail-3" placeholder="Ваш Email" pattern="^[-._A-Za-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$" required>
                <span class="msg-help-3 mail-span-3" style="display:none;">Укажите Ваш реальный Email</span>


                <label for="phone-3" id="label-phone-3">
                    <input  class="form-control form__input form__input--phone-img" type="tel" placeholder="Телефон" id="phone-3" maxlength="16" required>
                    <span class="msg-help-3 tel-span-3" style="display:none;">Укажите номер в международном формате</span>
                    <!-- <span id="valid-msg-3" class="hide">✓ Отлично</span> -->
                    <span id="error-msg-3" class="hide"></span>
                </label>

              <input type="hidden" id="last_name-3" value=" ">
              <input type="hidden" id="ip-3" value="<?= $_SERVER['REMOTE_ADDR']; ?>">
              <input type="hidden" id="country-3" value="">
              <input type="hidden" id="prefix-3" value="">
              <input type="hidden" id="lang-3" value="RU">
              <input type="hidden" id="utm_source-3" value="<?= $_GET['utm_source']; ?>">
              <input type="hidden" id="utm_medium-3" value="<?=  $_GET['utm_medium']; ?>">
              <input type="hidden" id="utm_campaign-3" value="<?= $_GET['utm_campaign']; ?>">
              <input type="hidden" id="utm_term-3" value="<?= $_GET['utm_term'];?>">
              <input type="hidden" id="utm_content-3" value="<?= $_GET['utm_content']; ?>">
              <input type="hidden" id="description-3" value="">

            </div>
            <div class="form-button">
              <button type="submit" id="button-3" class="sub btn_yellow form__button">
                <span>Получить консультацию</span>
              </button>
              <p class="msg"></p>
            </div>

          </form>
        </div>

      </div>
    </div>
  </div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
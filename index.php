<?php
$packets = include('config.php');
if (isset($_COOKIE["bpa_packets"])) {
  if ($_COOKIE["bpa_packets"] == 'gameOver') $gameOver = true; else $gameOver = false;
} else $gameOver = false;

if (isset($_GET["tag"])) {
  $tag = $_GET["tag"];
} else $tag = null;
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Бизнес на краткосрочной аренде апартаментов</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1/dist/magnific-popup.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
<body>
<div class="wrapper">


  <section class="section section_dark" data-bg="assets/img/bg2.jpg" id="tar">
    <div class="container">
      <div class="section__title">
       <center> <h3>Выберите свой вариант участия<br> и нажмите кнопку заказать!</h3> </br>


      <style>
#timerValues{
font-family: sans-serif;
color: #000;
display: inline-block;
font-weight: 100;
text-align: center;
font-size: 30px;
}

#timerValues > div{
padding: 10px;
border-radius: 3px;
background: #FEEC1B;
display: inline-block;
}

#timerValues div > span{
padding: 15px;
border-radius: 3px;
background: rgb(195, 182, 31);
display: inline-block;
}

.smalltext{
padding-top: 5px;
font-size: 16px;
}
</style>

      </div>

      <div>

    <br>
    <div class="row">
      <div class="col m6">
        <form class="col" style="background-color: white; padding: 20px;" id="order-form" action="https://api.bpa.bz/api.client2crm/" method="POST">
          <h5 style="text-align:center; color: black;">Оставьте заявку на пакет</h5>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Иванов Иван Иванович" id="firstname" name="firstname" required type="text" class="validate">
            <label for="title">Введите ваше ФИО</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input placeholder="info@bpa.bz" id="email" name="email" required type="email" class="validate">
            <label for="title">Email</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="+38 (050) 000-00-00" id="phone" name="phone" required type="text" class="validate">
            <label for="title">Телефон</label>
          </div>
        </div>


        <div class="row">
          <div class="input-field col s12">
            <select class="packet-select" name="packet" required>
              <option value="Без пакета" disabled selected>Выберите пакет</option>
              <option selected value="<?php echo $packets[0]["crm_name"]?>">
                <?php echo $packets[0]["form_view_name"]?>
              </option>
              <option value="<?php echo $packets[1]["crm_name"]?>">
                <?php echo $packets[1]["form_view_name"]?>
              </option>
              <option value="<?php echo $packets[2]["crm_name"]?>">
                <?php echo $packets[2]["form_view_name"]?>
              </option>

            </select>
            <label>Выбранный Пакет:</label>
          </div>
        </div>

        <div class="row">
          <input type="hidden" name="c2cFormId" value="web_offer" />
          <input type="hidden" name="packet" class="form-packet" id="packet-all-form" value="Без пакета" />
          <input type="hidden" name="price" class="form-price" value="297" />
          <input type="hidden" name="convert_rub" class="form-price-rub" value="19700" />
          <?php if (!empty($tag)) echo '<input type="hidden" name="add_tag" value="' . $tag . '" />'?>
          <button class="btn waves-effect waves-light" type="submit" name="action">Отправить заявку</button>
        </div>

      </form>
      </div>
      <div class="col m6"><h4><span style="color:#FEEC1B;">ПРИ ОПЛАТЕ ПРЯМО СЕЙЧАС<br>СУПЕР БОНУС: <br><br> КУРС &quot;ДОХОДНЫЕ ДОМА&quot;<br>В ПОДАРОК!</span></h4></br></div>
      <h5>Специальная цена действует еще:</h5>
        <p id="timer"></p>

      <div id="timerValues">
  <div>
    <span class="days"></span>
    <div class="smalltext">Дни</div>
  </div>
  <div>
    <span class="hours"></span>
    <div class="smalltext">Часы</div>
  </div>
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Минуты</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Секунды</div>
  </div>
</div>
    </div>
  </div>

      </div></center>

      <div class="section__content">
        <div class="cols">
          <div class="cols__col-4@lg">
            <section class="tarif">
              <div class="tarif__icon">
                <img src="assets/img/i18.svg" alt="">
              </div>
              <h3>Тариф <?php echo $packets[0]["form_view_name"]?></h3>
			   <span class="full_price"><s><?php echo $packets[0]["price_high"]?>$</s></span>
			  <h3 class="actual_price_p1"><?php echo $packets[0]["price"]?> $</h3>
              <ul class="list2">
<li>Запись тренинга в видеоформате</li>
<li>Урок №1: Тест стратегии в Вашем городе и возможность заработка уже после первого урока</li>
<li>Урок №2: Ответы на часто задаваемые вопросы</li>
<li>Урок №3: Подбор квартиры (чек-лист "Идеальная квартира для субаренды", расчет финансовой стратегии, договоренности с хозяином, тактика съема)</li>
<li>Урок №4: Запуск квартиры (чек-лист готовой квартиры, требования к фото)</li>
<li>Экземпляры всех необходимых договоров (Договор с гостями, Договор с менеджером, Договор с хозяином квартиры)</li>
<li>Набор Чек-листов (чек-лист Горничной, чек-лист Что должно быть в квартире, Правила проживания в квартире, Должностные инструкции для менеджера)</li>



              </ul>

              <div class="tarif__price actual_price_p1"><?php echo $packets[0]["price"]?> $</div>
              <!-- <a href="https://madinadmitriyeva.e-autopay.com/buy/384076/38849" class="btn fancybox">Заказать</a> -->
              <a class="btn order-popup" href="#popup" id="popup_packet1" data-packet="<?php echo $packets[0]["crm_name"]?>"
            data-price="
            <?php if ($gameOver) echo $packets[0]["price_high"]; else echo $packets[0]["price"];?>" data-price-rub="
            <?php if ($gameOver) echo $packets[0]["price_rub_high"]; else echo $packets[0]["price_rub"];?>">Заказать</a>


            </section>
          </div>
          <div class="cols__col-4@lg">
            <section class="tarif">
              <div class="tarif__icon">
                <img src="assets/img/i19.svg" alt="">
              </div>
              <h3>Тариф <?php echo $packets[1]["form_view_name"]?></h3>
			   <span class="full_price"><s><?php echo $packets[1]["price_high"]?> $</s></span>
			   <h3 class="actual_price_p2"><?php echo $packets[1]["price"]?> $</h3>
              <ul class="list2">
<li>Запись тренинга в видеоформате</li>
<li>Закрытая группа ВКонтакте</li>
<li>Домашние задания и их проверка</li>
<li>Урок №1: Тест стратегии в Вашем городе и возможность заработка уже после первого урока</li>
<li>Урок №2: Ответы на часто задаваемые вопросы</li>
<li>Урок №3: Подбор квартиры (Чек-лист "Идеальная квартира для субаренды", расчет финансовой стратегии, договоренности с хозяином, тактика съема)</li>
<li>Урок №4: Запуск квартиры (Чек-лист готовой квартиры, требования к фото)</li>
<li>Урок №5: Маркетинг (Самые работающие методы привлечения клиентов)</li>
<li>Урок №6: Бухгалтерия и финансовая грамотность</li>
<li>Урок №7: Новые тенденциии в посуточной аренде квартир (Париж). Что выделит вас от конкурентов и сделает №1 в вашем городе</li>
<li>Экземпляры всех необходимых договоров (Договор с гостями, Договор с менеджером, Договор с хозяином квартиры)</li>
<li>Набор Чек-листов (Чек-лист Горничной, Чек-лист Что должно быть в квартире, Правила проживания в квартире, Должностные инструкции для менеджера)</li>
<li>Обучающее видео по работе с сайтом airbnb.com</li>
<li>Онлайн таблица зеселения и финансовой статистики ваших квартир</li>
<li>Урок по личной эффективности</li>
<li>Урок по Доходным домам</li>
<li>Урок по Инстаграму в посуточной аренде квартир</li>
<li>Воскресные онлайн встречи с Мадиной Дмитриевой</li>
<li>WhatsApp чат - сообщество всех наших учеников (возможность найти себе наставника, партнера, совместно взять горничную или/и менеджера на работу, сдавать квартиры друг друга)</li>

              </ul>

              <div class="tarif__price actual_price_p2"><?php echo $packets[1]["price"]?> $</div>
              <!-- <a href="https://madinadmitriyeva.e-autopay.com/buy/384082/38849" class="btn fancybox">Заказать</a> -->
              <a class="btn order-popup" href="#popup" id="popup_packet2" data-packet="<?php echo $packets[1]["crm_name"]?>"
            data-price="
            <?php if ($gameOver) echo $packets[1]["price_high"]; else echo $packets[1]["price"];?>" data-price-rub="
            <?php if ($gameOver) echo $packets[1]["price_rub_high"]; else echo $packets[1]["price_rub"];?>">Заказать</a>


            </section>
          </div>
          <div class="cols__col-4@lg">
            <section class="tarif">
              <div class="tarif__icon">
                <img src="assets/img/i20.svg" alt="">
              </div>
              <h3>Тариф <?php echo $packets[2]["form_view_name"]?></h3>
			   <span class="full_price"><s><?php echo $packets[2]["price_high"]?> $</s></span>
			    <h3 class="actual_price_p3"><?php echo $packets[2]["price"]?> $</h3>
              <ul class="list2">
  <li>Запись тренинга в видеоформате</li>
<li>Закрытая группа ВКонтакте</li>
<li>Домашние задания и их проверка</li>
<li>Урок №1: Тест стратегии в Вашем городе и возможность заработка уже после первого урока</li>
<li>Урок №2: Ответы на часто задаваемые вопросы</li>
<li>Урок №3: Подбор квартиры (Чек-лист "Идеальная квартира для субаренды", расчет финансовой стратегии, договоренности с хозяином, тактика съема)</li>
<li>Урок №4: Запуск квартиры (Чек-лист готовой квартиры, требования к фото)</li>
<li>Урок №5: Маркетинг (Самые работающие методы привлечения клиентов)</li>
<li>Урок №6: Бухгалтерия и финансовая грамотность</li>
<li>Урок №7: Новые тенденциии в посуточной аренде квартир (Париж). Что выделит вас от конкурентов и сделает №1 в вашем городе</li>
<li>Экземпляры всех необходимых договоров (Договор с гостями, Договор с менеджером, Договор с хозяином квартиры)</li>
<li>Набор Чек-листов (Чек-лист Горничной, Чек-лист Что должно быть в квартире, Правила проживания в квартире, Должностные инструкции для менеджера)</li>
<li>Обучающее видео по работе с сайтом airbnb.com</li>
<li>Онлайн таблица зеселения и финансовой статистики ваших квартир</li>
<li>Урок по личной эффективности</li>
<li>Урок по Доходным домам</li>
<li>Урок по Инстаграму в посуточной аренде квартир</li>
<li>Воскресные онлайн встречи с Мадиной Дмитриевой</li>
<li>WhatsApp чат - сообщество всех наших учеников (возможность найти себе наставника, партнера, совместно взять горничную или/и менеджера на работу, сдавать квартиры друг друга)</li>
<li>Ваш собственный сайт по посуточной аренде квартир</li>
<li>3 месяца личного коучинга с Мадиной и Рустамом Дмитриевыми.</li>
<li>Построение лично Вашего бизнеса</li>
<li>Масштабирование бизнеса</li>
<li>Личные контакты Мадины и Рустама</li>
<li>Возможность консультирования в круглосуточном режиме по всем вопросам</li>
              </ul>

              <div class="tarif__price actual_price_p3"><?php echo $packets[2]["price"]?> $</div>
              <!-- <a href="https://madinadmitriyeva.e-autopay.com/buy/384084/38849" class="btn fancybox">Заказать</a> -->
              <a class="btn order-popup" id="popup_packet3" href="#popup" data-packet="<?php echo $packets[2]["crm_name"]?>"
            data-price="
            <?php if ($gameOver) echo $packets[2]["price_high"]; else echo $packets[2]["price"];?>" data-price-rub="
            <?php if ($gameOver) echo $packets[2]["price_rub_high"]; else echo $packets[2]["price_rub"];?>">Заказать</a>


            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="cols cols_valign_middle">
        <div class="cols__col-4@md">
          <div class="footer__part">
            <p class="footer__lg-text">Мадина Дмитриева</p>
            <p>Посуточная аренда квартир</p>
            <p>Инвестирование в недвижимость</p>
          </div>
        </div>
        <div class="cols__col-4@md">
          <div class="footer__part center">
            <p>© 2015 "FLATBOOK" </p>
            <p>ТОО «FLATBOOK»  Дмитриева Мадина Викторовна</p>
            <p><a href="#polite" class="white fancybox">Политика конфиденциальности</a></p>
          </div>
        </div>
        <div class="cols__col-4@md">
          <div class="footer__part">
            <p> </p>
            <p class="footer__md-text">+7(777)358-33-48</p>
            <p><a href="#support" class="fancybox">Служба поддержки</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<div class="modal" id="support">
  <p class="modal__title">Обратный звонок</p>
  <form action="" class="form">
    <div class="form__group">
      <input type="text" class="form__input" placeholder="Имя">
    </div>
    <div class="form__group">
      <input type="text" class="form__input" placeholder="Телефон">
    </div>
    <div class="form__group">
      <button class="form__btn btn btn_block">Отправить</button>
    </div>
  </form>
</div>
<div class="modal" id="baza">
  <p class="modal__title">Тариф базовый</p>
  <form action="https://madinadmitriyeva.e-autopay.com/buy/384076" method="post" class="form">
    <div class="form__group">
      <input type="text" class="form__input" placeholder="Имя" name="name">
    </div>
    <div class="form__group">
      <input type="text" class="form__input" placeholder="Телефон" name="phone" required="">
    </div>
	<div class="form__group">
      <input type="text" class="form__input" placeholder="Введите e-mail" name="email">
    </div>
    <div class="form__group">
      <button class="form__btn btn btn_block">Отправить</button>
    </div>
	<input type="hidden" name="tovar_id" value="384076">
<input type="hidden" value="26" name="pay_mode"/>
<input type="hidden" name="order_page_referer" id="order_page_referer" value="" />
<input type="hidden" name="form_charset" id="form_charset" value="">
  </form>
</div>
<div class="modal" id="stand">
  <p class="modal__title">Тариф стандарт</p>
  <form action="https://madinadmitriyeva.e-autopay.com/buy/384082" method="post" class="form">
    <div class="form__group">
      <input type="text" class="form__input" placeholder="Имя" name="name">
    </div>
    <div class="form__group">
      <input type="text" class="form__input" placeholder="Телефон" name="phone" required="">
    </div>
	<div class="form__group">
      <input type="text" class="form__input" placeholder="Введите e-mail" name="email">
    </div>
    <div class="form__group">
      <button class="form__btn btn btn_block">Отправить</button>
    </div>
	<input type="hidden" name="tovar_id" value="384082">
<input type="hidden" value="26" name="pay_mode"/>
<input type="hidden" name="order_page_referer" id="order_page_referer" value="" />
<input type="hidden" name="form_charset" id="form_charset" value="">
  </form>
</div>
<div class="modal" id="vip">
  <p class="modal__title">Тариф VIP</p>
  <form action="https://madinadmitriyeva.e-autopay.com/buy/384084" method="post" class="form">
    <div class="form__group">
      <input type="text" class="form__input" placeholder="Имя" name="name">
    </div>
    <div class="form__group">
      <input type="text" class="form__input" placeholder="Телефон" name="phone" required="">
    </div>
	<div class="form__group">
      <input type="text" class="form__input" placeholder="Введите e-mail" name="email">
    </div>
    <div class="form__group">
      <button class="form__btn btn btn_block">Отправить</button>
    </div>
	<input type="hidden" name="tovar_id" value="384084">
<input type="hidden" value="26" name="pay_mode"/>
<input type="hidden" name="order_page_referer" id="order_page_referer" value="" />
<input type="hidden" name="form_charset" id="form_charset" value="">
  </form>
</div>

<div class="modal" id="reg">
  <p class="modal__title">Оформить заказ</p>
  <form action="http://madinadmitriyeva.e-autopay.com/checkout/save_order_data.php" method="post" class="form">
    <div class="form__group">
      <input type="text" class="form__input" placeholder="Имя" name="name">
    </div>
    <div class="form__group">
      <input type="text" class="form__input" placeholder="Телефон" name="phone" required="">
    </div>
	<div class="form__group">
      <input type="text" class="form__input" placeholder="Введите e-mail" name="email">
    </div>
	<div class="form__group">
     <select  name="tovar_id" class="form__input">
    <option disabled selected>Выберите тариф</option>
    <option value="384076">Тариф базовый</option>
    <option value="384082">Тариф стандарт</option>
    <option value="384084">Тариф VIP</option>

   </select>
    </div>
    <div class="form__group">
      <button class="form__btn btn btn_block">Отправить</button>
    </div>

<input type="hidden" value="26" name="pay_mode"/>
<input type="hidden" name="order_page_referer" id="order_page_referer" value="" />
<input type="hidden" name="form_charset" id="form_charset" value="">
  </form>
</div>


<div class="modal" id="thanks">
  <p class="modal__title">Письмо отправлено!</p>
  <div class="center">
    <p>Мы свяжемся в Вами в ближайшее время!</p>
  </div>
</div>
<div class="modal modal_md modal_white" id="polite">
  <h2 class="modal__title">Политика конфиденциальности</h2>
  <p>Подтверждая подписку на сайтах ресурса http://madinadmitriyeva.com , Вы тем самым
соглашаетесь с действующими принципами политики приватности, а именно:
любой желающий может подписаться на бесплатную обучающую рассылку.
Все собранные сведения при оформлении подписки (имя, адрес электронной
почты, технические данные) разглашению не подлежат. http://madinadmitriyeva.com
гарантирует конфиденциальность предоставленных пользователями сведений
и обязуется не передавать их третьим лицам. Исключением может быть
согласие пользователя, либо случай, предусмотренный действующим
законодательством.</p>
</div>
    <script src="assets/js/main.js"></script>
    <script>
      $('.form1').submit(function(){
        $.fancybox({
          padding:0,
          href:"#thanks"
        })
        return false;
      })
    </script>


<script src="https://cdn.jsdelivr.net/npm/magnific-popup@1/dist/jquery.magnific-popup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="//api.webds.net/client2crm/sdk/v1.7/Contact2Amo/js/master.jquery.dsClient2CrmServer.v1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/urijs@1/src/URI.min.js"></script>

    <style>

      .white-popup {
        position: relative;
        background: #FFF;
        padding: 20px;
        width: auto;
        max-width: 500px;
        margin: 20px auto;
      }

      .input-field>label {
          color: #000;
      }

    </style>

<div id="popup" class="white-popup mfp-hide">

    <h5>Оставьте заявку на пакет</h5>
    <br>
    <div class="row">
      <form class="col s12" id="order-form" action="https://api.bpa.bz/api.client2crm/" method="POST">

        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Иванов Иван Иванович" id="firstname" name="firstname" required type="text" class="validate">
            <label for="title">Введите ваше ФИО</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input placeholder="info@bpa.bz" id="email" name="email" required type="email" class="validate">
            <label for="title">Email</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="+38 (050) 000-00-00" id="phone" name="phone" required type="text" class="validate">
            <label for="title">Телефон</label>
          </div>
        </div>


        <div class="row">
          <div class="input-field col s12">
            <select class="packet-select" name="packet" required>
              <option value="Без пакета" disabled selected>Выберите пакет</option>
              <option selected value="<?php echo $packets[0]["crm_name"]?>">
                <?php echo $packets[0]["form_view_name"]?>
              </option>
              <option value="<?php echo $packets[1]["crm_name"]?>">
                <?php echo $packets[1]["form_view_name"]?>
              </option>
              <option value="<?php echo $packets[2]["crm_name"]?>">
                <?php echo $packets[2]["form_view_name"]?>
              </option>

            </select>
            <label>Выбранный Пакет:</label>
          </div>
        </div>

        <div class="row">
          <input type="hidden" name="c2cFormId" value="web_offer" />
          <input type="hidden" name="packet" class="form-packet" value="Без пакета" />
          <input type="hidden" name="price" class="form-price" value="1" />
          <input type="hidden" name="convert_rub" class="form-price-rub" value="1" />
          <?php if (!empty($tag)) echo '<input type="hidden" name="add_tag" value="' . $tag . '" />'?>
          <button class="btn waves-effect waves-light" type="submit" name="action">Отправить заявку</button>
        </div>

      </form>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/easytimer.js@3/dist/easytimer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2/min/moment-with-locales.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <!-- <script src="assets/js/main.js"></script> -->

  <script>

var timer = new easytimer.Timer();

/*timer.start({precision: 'secondTenths'});
timer.addEventListener('secondTenthsUpdated', function (e) {
$('#timer').html(timer.getTimeValues().toString(['hours', 'minutes', 'seconds', 'secondTenths']));
});
*/
moment.locale('ru');

var now = moment();
if (Cookies.get('oldPriceTill') == undefined) {
  var date = moment().add(2, 'days');
  // var date = moment().add(10, 'seconds');
  Cookies.set('oldPriceTill', date, { expires: 365 });
}
else {
  var date = Cookies.get('oldPriceTill');
}
//var date = "2019-02-22 11:00:00";
var until = moment(date);
// var timerTo = now.to(until, 's');
var timerTo = now.diff(until, 'seconds') * (-1);
console.log(timerTo);

if (timerTo>0) {
  timer.start({countdown: true, precision: 'seconds', startValues: {seconds: timerTo}});
  // $('#timer').html(timer.getTimeValues().toString());
  timer.addEventListener('secondsUpdated', function (e) {
    // $('#timer').html(timer.getTimeValues().toString(['days', 'hours', 'minutes', 'seconds']));

      $('#timerValues .days').html(timer.getTimeValues().days);
      $('#timerValues .hours').html(timer.getTimeValues().hours);
      $('#timerValues .minutes').html(timer.getTimeValues().minutes);
      $('#timerValues .seconds').html(timer.getTimeValues().seconds);

      // $('#gettingTotalValuesExample .days').html(timer.getTotalTimeValues().days);
      // $('#gettingTotalValuesExample .hours').html(timer.getTotalTimeValues().hours);
      // $('#gettingTotalValuesExample .minutes').html(timer.getTotalTimeValues().minutes);
      // $('#gettingTotalValuesExample .seconds').html(timer.getTotalTimeValues().seconds);
  });
} else gameOver();


timer.addEventListener('targetAchieved', function (e) {
  gameOver();
});

function gameOver() {
  Cookies.set('bpa_packets', 'gameOver', { expires: 365 });
  $('#timer').html('Время вышло :-(');
  $('.actual_price_p1').html('<?php echo $packets[0]["price_high"]?>$');
  $('.actual_price_p2').html('<?php echo $packets[1]["price_high"]?>$');
  $('.actual_price_p3').html('<?php echo $packets[2]["price_high"]?>$');
  $('#popup_packet1').data('price', '<?php echo $packets[0]["price_high"] ?>');
  $('#popup_packet1').data('price-rub', '<?php echo $packets[0]["price_rub_high"] ?>');
  $('#popup_packet2').data('price', '<?php echo $packets[1]["price_high"] ?>');
  $('#popup_packet2').data('price-rub', '<?php echo $packets[1]["price_rub_high"] ?>');
  $('#popup_packet3').data('price', '<?php echo $packets[2]["price_high"] ?>');
  $('#popup_packet3').data('price-rub', '<?php echo $packets[2]["price_rub_high"] ?>');
  $('.full_price').hide();
  $('#timerValues').hide();
  $('#timerValues .days').html("0");
  $('#timerValues .hours').html("0");
  $('#timerValues .minutes').html("0");
  $('#timerValues .seconds').html("0");
}


    $('.order-popup').magnificPopup({
      type: 'inline',
      midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });

    $('.order-popup').on('click', function () {
      msValue($(".packet-select"), $(this).data("packet"));
      $(".form-packet").val($(this).data("packet"));
      $(".form-price").val($(this).data("price"));
      $(".form-price-rub").val($(this).data("price-rub"));
    });

    $(document).ready(function () {
      $('select').formSelect();
      $.dsClient2CrmServer({
        "FormIDs": "order-form",
        "PreloadInit": true
      }).init();

      var url = new URI();
      if (url.query(true).format == "nopackets") {
        $('#packet-info').hide();
      }
    });

    $(".packet-select").on('change', function () {
      $(this).formSelect();
      value = $(this).formSelect('getSelectedValues')[0];
      console.log(value);
      if ( (moment().diff(until, 'seconds') * (-1)) >0) {
        axios.get('config.php', {
          params: {
            get_price: value
          }
        })
        .then(function (response, data) {
          data = response.data;
          console.log(data);
          $(".form-price").val(data.price);
          $(".form-price-rub").val(data.price_rub);
          msValue($("#packet-all-form"), value);
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        })
        .then(function () {
          // always executed
        });
      }
      else {
        axios.get('config.php', {
          params: {
            get_price_high: value
          }
        })
        .then(function (response, data) {
          data = response.data;
          console.log(data);
          $(".form-price").val(data.price);
          $(".form-price-rub").val(data.price_rub);
          msValue($("#packet-all-form"), value);
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        })
        .then(function () {
          // always executed
        });
      }

    });

    function msValue(selector, value) {
      selector.val(value).closest('.select-wrapper').find('li').removeClass("active").closest('.select-wrapper').find(
        '.select-dropdown').val(value).find('span:contains(' + value + ')').parent().addClass('selected active');
    }

  </script>

  </body>
</html>

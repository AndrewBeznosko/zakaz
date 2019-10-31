<?php
$packets = include('config.php');
if (isset($_COOKIE["bpa_packets"])) {
    if ($_COOKIE["bpa_packets"] == 'gameOver') $gameOver = true; else $gameOver = false;
} else $gameOver = false;


if (isset($_GET["tag"])) {
    $tag = $_GET["tag"];
} else $tag = null;

if ($gameOver) {
    $price0 = $packets[0]["price_high"]; 
    $price1 = $packets[1]["price_high"];
    $price2 = $packets[2]["price_high"];

    $priceRub0 = $packets[0]["price_rub_high"];
    $priceRub1 = $packets[1]["price_rub_high"];
    $priceRub2 = $packets[2]["price_rub_high"];
} else {
    $price0 = $packets[0]["price"];
    $price1 = $packets[1]["price"];
    $price2 = $packets[2]["price"];

    $priceRub0 = $packets[0]["price_rub"];
    $priceRub1 = $packets[1]["price_rub"];
    $priceRub2 = $packets[2]["price_rub"];
}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>Прибыльный бизнес на посуточной аренде</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="relative  <?php if ($gameOver) echo 'body-gameover';?>" data-spy="scroll" data-target=".navbar-landing">
    <header id="header">
        <div class="container">
            <h1>
                ВЫБЕРИТЕ СВОЙ ВАРИАНТ УЧАСТИЯ <br>
                И НАЖМИТЕ КНОПКУ ЗАКАЗАТЬ!
            </h1>
            <div class="header__content">
                <form id="main_form" action="https://api.bpa.bz/api.client2crm/" method="POST" novalidate="novalidate">
                    <input type="text" name="firstname" placeholder="Введите ваше имя" required minlength="3">
                    <input type="text" name="phone" placeholder="Введите ваш телефон" required minlength="10">
                    <input type="email" name="email" placeholder="введите ваш e-mail" required>

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1"> <span class="form_view_name"><?php echo $packets[0]["form_view_name"]?></span> <span class="old_price">$<?php echo $packets[0]["price_high"]?></span> &nbsp;<img src="img/btn_arr.png" alt="btn_arr">&nbsp; $<?php echo $price0?> <span class="discount">- 22%</span> <span class="discount_txt">скидка</span></label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" checked>
                        <label class="custom-control-label" for="customRadio2"> <span class="form_view_name"><?php echo $packets[1]["form_view_name"]?></span>  <span class="old_price">$<?php echo $packets[1]["price_high"]?></span> &nbsp;<img src="img/btn_arr.png" alt="btn_arr">&nbsp; $<?php echo $price1?> <span class="discount">- 22%</span> <span class="discount_txt">скидка</span></label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3"> <span class="form_view_name"><?php echo $packets[2]["form_view_name"]?></span> <span class="old_price">$<?php echo $packets[2]["price_high"]?></span> &nbsp;<img src="img/btn_arr.png" alt="btn_arr">&nbsp; $<?php echo $price2?> <span class="discount">- 33%</span> <span class="discount_txt">скидка</span></label>
                    </div>

                    <input type="hidden" name="c2cFormId" value="docsandchecklists" />
                    <input type="hidden" name="packet" class="form-packet" id="packet-all-form" value="<?php echo $packets[1]["crm_name"]?>" />
                    <input type="hidden" name="price" class="form-price" value="<?php echo $price1 ?>" />
                    <input type="hidden" name="convert_rub" class="form-price-rub" value="<?php echo $priceRub1 ?>" />
                    <?php if (!empty($tag)) echo '<input type="hidden" name="add_tag" value="' . $tag . '" />' ?>
                    <button class=" btn-hover color-4" type="submit">Заказать <img src="img/btn_arr.png" alt="btn_arr"></button>
                </form>
                <div class="desc">
                    <img src="img/pc.png" alt="PC">
                    <p>
                        ПРИ ОПЛАТЕ ПРЯМО СЕЙЧАС<br>СУПЕР БОНУСы:
                        <span class="text-left">
                            - Разработка сайта "Под ключ"<br>
                            - Курс "Доходные дома"<br>
                            - Тренинг "Личная эффективность"<br>
                        </span>
                    </p>
                </div>
            </div>
            <div class="header__condition">
                <h2>Специальная цена действует еще:</h2>
                <p id="timer"></p>

                <div id="timerValues">
                    <div>
                        <span class="days">00</span>
                        <div class="smalltext">Дни</div>
                    </div>
                    <div>
                        <span class="hours">00</span>
                        <div class="smalltext">Часы</div>
                    </div>
                    <div>
                        <span class="minutes">00</span>
                        <div class="smalltext">Минуты</div>
                    </div>
                    <div>
                        <span class="seconds">00</span>
                        <div class="smalltext">Секунды</div>
                    </div>
                </div>
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
                        min-width: 65px;
                    }

                    .smalltext{
                        padding-top: 5px;
                        font-size: 16px;
                    }
                </style>
            </div>
        </div>
    </header> <!-- section-header.// -->

    <!-- ========================= sec_1 ========================= -->
    <section class="sec_tarifs with_after" id="sec_1">
        <div class="container">
            <h2 class="sec_title">Что входит в каждый пакет: </h2>
            <div class="tarifs_wrapp">
                <div class="tarif">
                    <div class="head">
                        <h3>Тариф <?php echo $packets[0]["form_view_name"]?></h3>
                    </div>
                    <div class="list">
                        <p>Запись тренинга в видеоформате</p>
                        <p>Урок №1: Тест стратегии в Вашем городе и возможность заработка уже после первого урока</p>
                        <p>Урок №2: Ответы на часто задаваемые вопросы</p>
                        <p>Урок №3: Подбор квартиры (чек-лист "Идеальная квартира для субаренды", расчет финансовой стратегии, договоренности с хозяином, тактика съема)</p>
                        <p>Урок №4: Запуск квартиры (чек-лист готовой квартиры, требования к фото)</p>
                        <p>Экземпляры всех необходимых договоров (Договор с гостями, Договор с менеджером, Договор с хозяином квартиры)</p>
                        <p>Набор Чек-листов (чек-лист Горничной, чек-лист Что должно быть в квартире, Правила проживания в квартире, Должностные инструкции для менеджера)</p>
                    </div>
                    <div class="old_price_wrapp">
                        <span class="old_price">$ <?php echo $packets[0]["price_high"]?></span>
                        <span class="discount">-22%</span>
                    </div>
                    <div class="new_price">$ <?php echo $price0 ?></div>
                    <a href="#header" class="btn btn-hover color-4">КУПИТЬ <img src="img/btn_arr_2.png" alt="btn_arr"></a>
                </div>
                <div class="tarif">
                    <div class="head">
                        <h3>Тариф <?php echo $packets[1]["form_view_name"]?></h3>
                    </div>
                    <div class="list">
                        <p>Запись тренинга в видеоформате</p>
                        <p>Закрытая группа ВКонтакте</p>
                        <p>Домашние задания и их проверка</p>
                        <p>Урок №1: Тест стратегии в Вашем городе и возможность заработка уже после первого урока</p>
                        <p>Урок №2: Ответы на часто задаваемые вопросы</p>
                        <p>Урок №3: Подбор квартиры (Чек-лист "Идеальная квартира для субаренды", расчет финансовой стратегии, договоренности с хозяином, тактика съема)</p>
                        <p>Урок №4: Запуск квартиры (Чек-лист готовой квартиры, требования к фото)</p>
                        <p>Урок №5: Маркетинг (Самые работающие методы привлечения клиентов)</p>
                        <p>Урок №6: Бухгалтерия и финансовая грамотность</p>
                        <p>Урок №7: Новые тенденциии в посуточной аренде квартир (Париж). Что выделит вас от конкурентов и сделает №1 в вашем городе</p>
                        <p>Экземпляры всех необходимых договоров (Договор с гостями, Договор с менеджером, Договор с хозяином квартиры)</p>
                        <p>Набор Чек-листов (Чек-лист Горничной, Чек-лист Что должно быть в квартире, Правила проживания в квартире, Должностные инструкции для менеджера)</p>
                        <p>Обучающее видео по работе с сайтом airbnb.com</p>
                        <p>Онлайн таблица зеселения и финансовой статистики ваших квартир</p>
                        <p>Урок по личной эффективности</p>
                        <p>Урок по Доходным домам</p>
                        <p>Урок по Инстаграму в посуточной аренде квартир</p>
                        <p>Воскресные онлайн встречи с Мадиной Дмитриевой</p>
                        <p>WhatsApp чат - сообщество всех наших учеников (возможность найти себе наставника, партнера, совместно взять горничную или/и менеджера на работу, сдавать квартиры друг друга)</p>
                    </div>
                    <div class="old_price_wrapp">
                        <span class="old_price">$ <?php echo $packets[1]["price_high"]?></span>
                        <span class="discount">-22%</span>
                    </div>
                    <div class="new_price">$ <?php echo $price1 ?></div>
                    <a href="#header" class="btn btn-hover color-4">КУПИТЬ <img src="img/btn_arr_2.png" alt="btn_arr"></a>
                </div>
                <div class="tarif">
                    <div class="head">
                        <h3>Тариф <?php echo $packets[2]["form_view_name"]?></h3>
                    </div>
                    <div class="list">
                        <p>Запись тренинга в видеоформате</p>
                        <p>Закрытая группа ВКонтакте</p>
                        <p>Домашние задания и их проверка</p>
                        <p>Урок №1: Тест стратегии в Вашем городе и возможность заработка уже после первого урока</p>
                        <p>Урок №2: Ответы на часто задаваемые вопросы</p>
                        <p>Урок №3: Подбор квартиры (Чек-лист "Идеальная квартира для субаренды", расчет финансовой стратегии, договоренности с хозяином, тактика съема)</p>
                        <p>Урок №4: Запуск квартиры (Чек-лист готовой квартиры, требования к фото)</p>
                        <p>Урок №5: Маркетинг (Самые работающие методы привлечения клиентов)</p>
                        <p>Урок №6: Бухгалтерия и финансовая грамотность</p>
                        <p>Урок №7: Новые тенденциии в посуточной аренде квартир (Париж). Что выделит вас от конкурентов и сделает №1 в вашем городе</p>
                        <p>Экземпляры всех необходимых договоров (Договор с гостями, Договор с менеджером, Договор с хозяином квартиры)</p>
                        <p>Набор Чек-листов (Чек-лист Горничной, Чек-лист Что должно быть в квартире, Правила проживания в квартире, Должностные инструкции для менеджера)</p>
                        <p>Обучающее видео по работе с сайтом airbnb.com</p>
                        <p>Онлайн таблица зеселения и финансовой статистики ваших квартир</p>
                        <p>Урок по личной эффективности</p>
                        <p>Урок по Доходным домам</p>
                        <p>Урок по Инстаграму в посуточной аренде квартир</p>
                        <p>Воскресные онлайн встречи с Мадиной Дмитриевой</p>
                        <p>WhatsApp чат - сообщество всех наших учеников (возможность найти себе наставника, партнера, совместно взять горничную или/и менеджера на работу, сдавать квартиры друг друга)</p>
                        <p>Ваш собственный сайт по посуточной аренде квартир</p>
                        <p>3 месяца личного коучинга с Мадиной и Рустамом Дмитриевыми.</p>
                        <p>Построение лично Вашего бизнеса</p>
                        <p>Масштабирование бизнеса</p>
                        <p>Личные контакты Мадины и Рустама</p>
                        <p>Возможность консультирования в круглосуточном режиме по всем вопросам</p>
                    </div>
                    <div class="old_price_wrapp">
                        <span class="old_price">$ <?php echo $packets[2]["price_high"]?></span>
                        <span class="discount">-33%</span>
                    </div>
                    <div class="new_price">$ <?php echo $price2 ?></div>
                    <a href="#header" class="btn btn-hover color-4">КУПИТЬ <img src="img/btn_arr_2.png" alt="btn_arr"></a>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//api.webds.net/client2crm_v2/sdk/v2/Contact2Amo/js/jquery.dsClient2CrmServer.v1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="//chitau.api.webds.net/plgform/js/dsPhoneFormatInput_min.js"></script>
    <script src="//chitau.api.webds.net/plgform/js/userAgent.0.0.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/easytimer.js@3/dist/easytimer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2/min/moment-with-locales.min.js"></script>
    <script>
        var timer = new easytimer.Timer();
        moment.locale('ru');

        var now = moment();
        if (Cookies.get('oldPriceTill') == undefined) {
          var date = moment().add(2, 'days');
          // var date = moment().add(10, 'seconds');
          Cookies.set('oldPriceTill', date, {
            expires: 365
          });
        } else {
          var date = Cookies.get('oldPriceTill');
        }
        //var date = "2019-02-22 11:00:00";
        var until = moment(date);
        // var timerTo = now.to(until, 's');
        var timerTo = now.diff(until, 'seconds') * (-1);
        console.log(timerTo);

        if (timerTo > 0) {
          timer.start({
            countdown: true,
            precision: 'seconds',
            startValues: {
              seconds: timerTo
            }
          });
          timer.addEventListener('secondsUpdated', function (e) {
            $('#timerValues .days').html(timer.getTimeValues().days);
            $('#timerValues .hours').html(timer.getTimeValues().hours);
            $('#timerValues .minutes').html(timer.getTimeValues().minutes);
            $('#timerValues .seconds').html(timer.getTimeValues().seconds);
          });
        } else gameOver();


        timer.addEventListener('targetAchieved', function (e) {
          gameOver();
        });

        function gameOver() {
          Cookies.set('bpa_packets', 'gameOver', {
            expires: 365
          });
        }
    </script>
    <script>
    //Формы
    var FormIDs = "main_form";
    var UrlApi = "https://api.bpa.bz/api.client2crm/";

    $(document).ready(function() {

        //добавить тег referrer (если нужно)
        $("head").append('<meta name="referrer" content="origin">');

        //инициализация парсинга UTM (f00 ... f03 - id форм)
        $.dsClient2CrmServer({
            "FormIDs": FormIDs,
            "PreloadInit": true
        }).init();

        FormIDs_collection = FormIDs.split(',');
        $.each(FormIDs_collection, function(k, FormID) {
            //Иниц формата номер тел.
            $.dsPhoneFormatInput('form#' + FormID + ' input[name="phone"]').init();
            //Активная ссылка
            $("form#" + FormID).attr("action", UrlApi);
            //Обработчик тильда
            //$('[name="'+FormID+'"]').removeClass("js-form-proccess");
            //Переключательвалют и платежек
            //$("form#"+FormID+" div.t-form__submit").before('<div class="form-group"><div id="radioBtn" class="btn-gr currency-gr">' +
            //        '<a class="fll btn btn-pr btn-sm active" data-toggle="currency" data-title="UAH" data-payment="wayforpay">Гривна</a><a class="flr btn btn-pr btn-sm notActive" data-toggle="currency" data-title="RUB" data-payment="cloudpayments">Рубль</a><input type="hidden" name="currency" class="currency" value="UAH"><input type="hidden" name="payment" value="wayforpay"></div></div>');
            //Согласие
            //$("form#"+FormID+" div.t-form__submit").before('<div class="agree"><label class="container-checkbox"><input name="agree" type="checkbox" required=""><span class="checkmark"></span></label><div class="container-checkbox-text">Нажимая на кнопку, вы соглашаетесь с условиями на сайте. <a href="https://www.domain.com/dev/policy.html" target="_blank" class="politika"><span class="privacy_policy">Посмотреть политику</span></a></div></div>');

        });

        //Переключатель валют и платежек
        //$('div.currency-gr a').on('click', function() {
        //    var sel = $(this).data('title');
        //    var tog = $(this).data('toggle');
        //    $(this).closest('form').find('input.' + tog).prop('value', sel);
        //    $('a[data-toggle="' + tog + '"]').not('[data-title="' + sel + '"]').removeClass('active').addClass('notActive');
        //    $('a[data-toggle="' + tog + '"][data-title="' + sel + '"]').removeClass('notActive').addClass('active');
        //Select Payments
        //    var payment = $(this).data('payment');
        //    $('[name="payment"]').prop('value', payment);
        //});

    });
    </script>


    <script>
    $(document).ready(function() {

        FormIDs_collection = FormIDs.split(',');
        $.each(FormIDs_collection, function(k, FormID) {
            $("#" + FormID).validate({
                rules: {
                    firstname: {
                        required: true,
                        minlength: 2
                    },
                    phone: {
                        required: true,
                        minlength: 12
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    agree: {
                        required: true
                    },
                },
                messages: {
                    firstname: {
                        required: "",
                        minlength: ""
                    },
                    phone: {
                        required: "",
                        minlength: ""
                    },
                    email: "",
                    agree: ""
                },
                errorPlacement: function(error, element) {
                    $(element).closest('div').addClass('valid-error');
                }

            });
        });

    });
    </script>
    <script>
    $(document).ready(function() {

        $('#customRadio1').change(function() {
            // $('[name="c2cFormId"]').val('coursestndart');
            $('[name="packet"]').val('<?php echo $packets[0]["crm_name"] ?>');
            $('[name="price"]').val('<?php echo $price0 ?>');
            $('[name="convert_rub"]').val('<?php echo $priceRub0 ?>');
        });
        $('#customRadio2').change(function() {
            // $('[name="c2cFormId"]').val('coursevip');
            $('[name="packet"]').val('<?php echo $packets[1]["crm_name"] ?>');
            $('[name="price"]').val('<?php echo $price1 ?>');
            $('[name="convert_rub"]').val('<?php echo $priceRub1 ?>');
        });
        $('#customRadio3').change(function() {
            // $('[name="c2cFormId"]').val('coursevip');
            $('[name="packet"]').val('<?php echo $packets[2]["crm_name"] ?>');
            $('[name="price"]').val('<?php echo $price2 ?>');
            $('[name="convert_rub"]').val('<?php echo $priceRub2 ?>');
        });

    });
    </script>
</body>

</html>
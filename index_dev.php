<?php
$packets = include('config.php');
if (isset($_COOKIE["bpa_packets"])) {
  if ($_COOKIE["bpa_packets"] == 'gameOver') $gameOver = true; else $gameOver = false;
} else $gameOver = false;


if (isset($_GET["tag"])) {
  $tag = $_GET["tag"];
} else $tag = null;
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

<body class="relative" data-spy="scroll" data-target=".navbar-landing">
    <header>
        <div class="container">
            <h1>3-х месячный онлайн-курс
                <br><span>«Бизнес на посуточной аренде, как запустить прибыльный</span><br>
                бизнес на аренде и зарабатывать от $5'000»
            </h1>
            <div class="header__content">
                <form id="main_form" action="https://api.bpa.bz/api.client2crm/" method="POST" novalidate="novalidate">
                    <input type="text" name="firstname" placeholder="Введите ваше имя">
                    <input type="text" name="phone" placeholder="Введите ваш телефон" >
                    <input type="email" name="email" placeholder="введите ваш e-mail">

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                        <label class="custom-control-label" for="customRadio1"> Стандарт &nbsp;&nbsp;&nbsp;<span class="old_price">$597</span> &nbsp;<img src="img/btn_arr.png" alt="btn_arr">&nbsp; $477 - 20% <span style="font-size:18px">скидка</span></label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2"> VIP &nbsp;&nbsp;&nbsp;<span class="old_price">$1597</span> &nbsp;<img src="img/btn_arr.png" alt="btn_arr">&nbsp; $1'277 - 20%  <span style="font-size:18px">скидка</span></label>
                    </div>

                     <input type="hidden" name="c2cFormId" value="coursestndart" />
          <input type="hidden" name="packet" class="form-packet" id="packet-all-form" value="Стандарт" />
          <input type="hidden" name="price" class="form-price" value="477" />
          <input type="hidden" name="convert_rub" class="form-price-rub" value="32000" />
          <?php if (!empty($tag)) echo '<input type="hidden" name="add_tag" value="' . $tag . '" />'?>
                    <button type="submit">Заказать <img src="img/btn_arr.png" alt="btn_arr"></button>
                </form>
                <div class="desc">
                    <img src="img/pc.png" alt="PC">
                    <p>
                        Внесите оплату прямо СЕЙЧАС <br> и получите - сайт "под ключ"
                        <span>*предложение действует только во время эфира</span>
                    </p>
                </div>
            </div>
            <div class="header__condition">
                <h2>СПЕЦ УСЛОВИЯ ДЛЯ МАРАФОНА</h2>
                <div class="plan">
                    <div class="item">
                        <span>ДЕНЬ 3</span>
                        <p>20% от спец. <br> стоимости курса</p>
                    </div>
                    <img src="img/condition_arr.png" alt="condition_arr">
                    <div class="item">
                        <span>ДЕНЬ 4</span>
                        <p>15% от спец. <br> стоимости курса</p>
                    </div>
                    <img src="img/condition_arr.png" alt="condition_arr">
                    <div class="item">
                        <span>ДЕНЬ 5</span>
                        <p>10% от спец. <br> стоимости курса</p>
                    </div>
                </div>
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
                        <h3>Пакет "Стандарт"</h3>
                    </div>
                    <div class="list">
                        <p>Урок 1 - Первые деньги не выходя из дома (тест стратегии и перезаселение)</p>
                        <p>Урок 2 – Ответы на часто задаваемые вопросы</p>
                        <p>Урок 3 – Подбор выгодной для нас квартиры</p>
                        <p>Урок 4 – Запуск квартиры </p>
                        <p>Урок 5 – Убойный маркетинг и построению бизнес системы</p>
                        <p>Урок 6 - Бухгалтерия и финансовая грамотность</p>
                        <p>Урок 7 – Гостеприимство: новые тенденции в посуточной аренде (Париж)</p>
                        <p>Добавление в закрытую группу ВК, сообщество всех учеников</p>
                        <p>Фото и видео файлы в группе</p>
                        <p>Проверка всех домашних заданий кураторами</p>
                        <p>Онлайн-таблица заселения и финансовой статистики квартир</p>
                        <p>Создание WhatsApp и Viber чатов с коллегами в своем городе</p>
                        <p>4 групповые онлайн-встречи</p>
                        <p>Пожизненный доступ к урокам на платформе и в закрытую группу ВК</p>
                    </div>
                    <div class="old_price_wrapp">
                        <span class="old_price">$597</span>
                        <span class="discount">-20%</span>
                    </div>
                    <div class="new_price">$477</div>
                    <a href="#" class="btn">КУПИТЬ <img src="img/btn_arr_2.png" alt="btn_arr"></a>
                </div>
                <div class="tarif">
                    <div class="head">
                        <h3>Пакет "VIP"</h3>
                    </div>
                    <div class="list">
                        <p>Урок 1 - Первые деньги не выходя из дома (тест стратегии и перезаселение)</p>
                        <p>Урок 2 – Ответы на часто задаваемые вопросы</p>
                        <p>Урок 3 – Подбор выгодной для нас квартиры</p>
                        <p>Урок 4 – Запуск квартиры</p>
                        <p>Экземпляры всех Договоров и Чек-Листов</p>
                        <p>Урок 5 – Убойный маркетинг и построению бизнес системы</p>
                        <p>Урок 6 - Бухгалтерия и финансовая грамотность</p>
                        <p>Урок 7 – Гостеприимство: новые тенденции в посуточной аренде (Париж)</p>
                        <p>Добавление в закрытую группу ВК, сообщество всех учеников</p>
                        <p>Фото и видео файлы в группе</p>
                        <p>Проверка всех домашних заданий кураторами</p>
                        <p>Онлайн таблица заселения и финансовой статистики квартир</p>
                        <p>Создание WharsApp и Viber чатов с коллегами в своем городе</p>
                        <p>4 групповые онлайн-встречи</p>
                        <p>Пожизненный доступ к урокам на платформе и в закрытую группу ВК</p>
                        <p>3 месяца личного коучинга, построение лично Вашего бизнеса</p>
                        <p>Личные контакты Мадины и Рустама</p>
                        <p>Возможность круглосуточно консультироваться по любым вопросам</p>
                        <p>Ваш сайт по посуточной аренде квартир</p>
                        <p>Коммерческое предложение для крупных компаний «под ключ»</p>
                    </div>
                    <div class="old_price_wrapp">
                        <span class="old_price">$1'597</span>
                        <span class="discount">-20%</span>
                    </div>
                    <div class="new_price">$1'277</div>
                    <a href="#" class="btn">КУПИТЬ <img src="img/btn_arr_2.png" alt="btn_arr"></a>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript" src="//api.webds.net/client2crm_v2/sdk/v2/Contact2Amo/js/jquery.dsClient2CrmServer.v1.min.js"></script>
<script type="text/javascript" src = "//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="//chitau.api.webds.net/plgform/js/dsPhoneFormatInput_min.js"></script>
<script type="text/javascript" src="//chitau.api.webds.net/plgform/js/userAgent.0.0.1.min.js"></script>
<script>

    //Формы
    var FormIDs = "main_form";
    var UrlApi = "https://api.bpa.bz/api.client2crm/";

    $(document).ready(function () {

        //добавить тег referrer (если нужно)
        $( "head" ).append( '<meta name="referrer" content="origin">' );

        //инициализация парсинга UTM (f00 ... f03 - id форм)
        $.dsClient2CrmServer({"FormIDs"    : FormIDs,"PreloadInit": true}).init();

        FormIDs_collection = FormIDs.split(',');
        $.each(FormIDs_collection,function(k,FormID){
            //Иниц формата номер тел.
            $.dsPhoneFormatInput('form#'+FormID+' input[name="phone"]').init();
            //Активная ссылка
            $("form#"+FormID).attr("action",UrlApi);
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
    $(document).ready(function () {

        FormIDs_collection = FormIDs.split(',');
        $.each(FormIDs_collection,function(k,FormID){
            $("#"+FormID).validate({
                rules: {
                    firstname: {required: true, minlength: 2},
                    phone: { required: true,minlength: 12},
                    email: {required: true, email: true},
                    agree:{required: true},
                },
                messages: {
                    firstname: { required: "", minlength: ""},
                    phone: {required: "", minlength: ""},
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
$( document ).ready(function() {

    $('#customRadio1').change(function(){
       $('[name="c2cFormId"]').val('coursestndart');
       $('[name="packet"]').val('Стандарт');
       $('[name="price"]').val('477');
       $('[name="convert_rub"]').val('32000');
    });
    $('#customRadio2').change(function(){
       $('[name="c2cFormId"]').val('coursevip');
       $('[name="packet"]').val('VIP');
       $('[name="price"]').val('1277');
       $('[name="convert_rub"]').val('86000');
    });

});


</script>
</body>

</html>

<?php
$config = array (
    array(
          'crm_name' => 'Базовый',
          'form_view_name' => 'Базовый',
          'price' => 347,
          'price_rub' => 22900,
          'price_high' => 447,
          'price_rub_high' => 28600,
          ),
    array(
        'crm_name' => 'Стандартный',
        'form_view_name' => 'Стандарт',
        'price' => 697,
        'price_rub' => 44600,
        'price_high' => 897,
        'price_rub_high' => 54400,
        ),
    array(
        'crm_name' => 'VIP',
        'form_view_name' => 'VIP',
        'price' => 1997,
        'price_rub' => 127800,
        'price_high' => 2997,
        'price_rub_high' => 191800, 
        ),
    array(
        'crm_name' => 'Предоплата',
        'form_view_name' => 'Предоплата 5000р.',
        'price' => 75,
        'price_rub' => 5000,
        'price_high' => 75,
        'price_rub_high' => 5000, 
        ),
    );

if (isset($_GET["get_price"])) {
    foreach ($config as $packet) {
        if ($packet["crm_name"] == $_GET["get_price"]) {
            header('Content-type: application/json');
            echo json_encode(array("price" => $packet["price"], "price_rub" => $packet["price_rub"]));
            break;
        }
    }
}

if (isset($_GET["get_price_high"])) {
    foreach ($config as $packet) {
        if ($packet["crm_name"] == $_GET["get_price_high"]) {
            header('Content-type: application/json');
            echo json_encode(array("price" => $packet["price_high"], "price_rub" => $packet["price_rub_high"]));
            break;
        }
    }
}

    else return $config;

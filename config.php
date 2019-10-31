<?php
$config = array (
    array(
          'crm_name' => 'Базовый',
          'form_view_name' => 'Базовый',
          'price' => 49,
          'price_rub' => 3135,
        //   'price_high' => 397,
        //   'price_rub_high' => 26500,
          ),
    array(
        'crm_name' => 'Premium',
        'form_view_name' => 'Премиум',
        'price' => 99,
        'price_rub' => 6335,
        // 'price_high' => 797,
        // 'price_rub_high' => 53000,
        )
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

<?php

require 'php-binance-api.php';

// @see home_directory_config.php
// use config from ~/.confg/jaggedsoft/php-binance-api.json
$api = new Binance\API();

// Get latest price of all symbols
//$tickers = $api->prices();
//print_r($tickers); // List prices of all symbols

// Get latest price of a symbol
//$price = $api->price('BNBBTC');
//$price = $api->price('LUNABTC');
//echo "Price of BNB: {$price} BTC.\n";

$ticker = $api->prices();
echo "BTC: {$ticker['BTCUSDT']}"\n;
echo "LUNA: {$ticker['LUNABTC']}"\n;
// Now keep $ticker object updated:
// $api->miniTicker(function($api, $miniTicker) {
//     global $ticker;
//     foreach ( $miniTicker as $obj ) {
//         $ticker[$obj['symbol']] = $obj['close'];
//     }
//     echo "price of BTC: {$ticker['BTCUSDT']}\n";
// });
// // Now you can use $ticker[$symbol] anywhere in your program.

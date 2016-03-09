<?php

//bootstrap file


//change memory limit
ini_set('memory_limit', '-1');

//autoloader
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});

$curr = (new Currency())->getCurrency();

//render html
echo View::render('layout', [
    'curCurrency' => $curr,
    'currencyWidget' => new CurrencyWidget($curr),
    'priceWidget' => new PriceWidget($curr)

]);

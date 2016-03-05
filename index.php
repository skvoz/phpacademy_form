<?php
//bootstrap file

//include function
require 'functions.php';

$curr = getCurrency();
//render html
echo render('layout', [
    'curCurrency' => curCurrency(),
    'currencyWidget' => currencyWidget($curr),
    'priceWidget' => priceWidget($curr)

]);

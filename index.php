<?php
//bootstrap file

//include function
require 'functions.php';





//render html
echo render('template.php', [
    'curCurrency' => curCurrency(),
    'currencyWidget' => currencyWidget(),
    'priceWidget' => priceWidget()

]);

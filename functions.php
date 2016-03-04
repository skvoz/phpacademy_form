<?php

/**output template
 * @param $template
 * @param array $environment
 * @return string
 */
function render ($template, array $environment = array()) {
    extract($environment);
    ob_start();
    include $template;
    $contents = ob_get_clean();
    return $contents;
}

function curCurrency() {
    return @$_COOKIE['cur'] ? $_COOKIE['cur'] : 'grn';
}

function currencyWidget($cur = 'grn')
{
    return render('checkCur.php',[
        'cur' => $cur
    ]);
}

function priceWidget()
{
    return 'this must be price widget';
}
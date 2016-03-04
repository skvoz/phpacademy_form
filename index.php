<?php
require 'classes.php';
//
////Local or Prod only
//define('TYPE_SERVER', 'Local');
//
//
//$className = TYPE_SERVER . 'Config';
//
//$config = new $className;
//
///** @var Config $config */
//echo $config->getDbData();


$obj = new LocalConfig();

try {
    $obj->getDbData();
} catch (Exception $e) {
//    echo 'sory we have error';
//    Yii::lgo
    echo 'Caught exception: ', $e->getMessage(), "\n";
}


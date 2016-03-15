<?php

require_once 'bootstrap.php';
//этот файл будем иметь трешевый стиль , не кодьте так
// в файле будете использоватся генераторы , читать доку о них

$fileName = "./assets/price.csv";
$m = memory_get_peak_usage();

// не верный нынче классический метод
//
//$handle = fopen($fileName, "r");
//$data = [];
//try {
//    while (!feof($handle)) {
//        $data[] = fgets($handle, 4096);
//    }
//    fclose($handle);
//} catch (Exception $e) {
//    echo 'Caught exception: ', $e->getMessage(), "\n";
//}
//
//echo memory_get_peak_usage() - $m, "n"; //Выдает 493816n

//метод с итератором

function my_handler($fileName) {
    $f = fopen($fileName, 'r');
    try {
        while ($line = fgets($f)) {
            yield $line;
        }
    } finally {
        fclose($f);
    }
}

/**
 * @param $line string
 * @param $conn PDOStatement
 */
function saveToDb($line, $conn) {
    $arr = explode(';', $line);
    $firm = addslashes(iconv('CP1251', 'UTF-8', @$arr[3]));
    $name = addslashes(iconv('CP1251', 'UTF-8', @$arr[4]));
    $priceGrn = $arr[14];
    $priceRub = $arr[5];

    $sql = <<<SQL
    INSERT INTO product (firm, name, price_grn, price_rub)
    VALUES ('$firm', '$name', '$priceGrn', '$priceRub');
SQL;

    $statment = $conn->query($sql);
    /** @var PDOStatement $result */
    $statment->execute();
}


try {
    foreach (my_handler($fileName) as $n => $line) {
        saveToDb($line, $conn);
    }
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}

echo memory_get_peak_usage() - $m, "n"; //Выдает кол во оперативной
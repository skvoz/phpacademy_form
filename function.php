<?php

function setContact() {

    $fname = isset($_POST['fname']) ? $_POST['fname'] : null;
    $lname = isset($_POST['lname']) ? $_POST['lname'] : null;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;

    return saveData($fname, $lname, $phone);
}

/**todo
 * @return array
 */
function getContact() {
    if (is_file('contact.txt')) {
        $string = file_get_contents('contact.txt');

    } else {
        fopen('contact.txt', 'w+');
        $string = ';;';

    }
    $arr = explode(';', $string);

    if (count($arr) > 1 and $arr[0] != '') {
        return [
            'fname' => $arr[0],
            'lname' => $arr[1],
            'phone' => $arr[2],
        ];
    } else {
        return [
            'fname' => '',
            'lname' => '',
            'phone' => '',
        ];
    }


}

function saveData($fname, $lname, $phohne, $filename = 'contact.txt') {

    $string = "$fname;$lname;$phohne";
    return file_put_contents($filename, $string);
}


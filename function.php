<?php

function setImage() {
    $uploaddir = '/var/www/assets/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);

    return move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
}

/**todo
 * @return array
 */
function getImages() {
    $files = scandir('/var/www/assets');
    foreach($files as $file) {
        if ($file != '..' && $file != '.') {
            echo '<p><img src="/assets/'.$file.'"></p>';
        }
    }
}


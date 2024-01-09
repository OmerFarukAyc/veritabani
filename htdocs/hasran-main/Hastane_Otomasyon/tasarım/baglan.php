<?php

try {
    $db = new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charest=utf8", 'root', '');
    //echo 'veritabani baglantisi basarili';
} catch (Exception $e) {
    echo $e->getMessage();
}

<?php
require_once 'BackEnd/core/init.php';
Kurser::init();
Category::init();
$alle_kursus = kurser::getKurser();
$alle_kategorier = Category::getCategories();

var_dump($alle_kursus);  






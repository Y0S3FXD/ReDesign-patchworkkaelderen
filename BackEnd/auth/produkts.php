<?php
require_once 'BackEnd/core/init.php';
Category::init();
$alle_kategorier = Category::getCategories();

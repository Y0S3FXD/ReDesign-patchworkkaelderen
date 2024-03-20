<?php
require_once 'BackEnd/core/init.php';
Produkts::init();
$results = Produkts::getProductsWithCategories();
echo '<pre>';
print_r($results);
echo '</pre>';

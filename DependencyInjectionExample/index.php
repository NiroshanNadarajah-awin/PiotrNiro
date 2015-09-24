<?php

require 'classes/ShopProduct.php';


$product1 = new ShopProduct("Mr", "Willa", "Cather", 5.99);
$writer = new ShopProductWriter();
$writer->write($product1);
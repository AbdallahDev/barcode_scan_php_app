<?php

include_once '../BLL/product.php';

$product = new Product();
$product_array = array();

$product_result = $product->get_all_products();
while ($product_row = $product_result->fetch_assoc()) {
    array_push($product_array, $product_row);
}

echo json_encode($product_array);

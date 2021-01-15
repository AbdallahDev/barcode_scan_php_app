<?php

include_once '../BLL/product.php';

$productId = $_GET['productId'];
$product = new Product();
$product_array = array();

$product_result = $product->get_product_price($productId);

while ($product_row = $product_result->fetch_assoc()) {
    array_push($product_array, $product_row);
}

echo json_encode($product_array);

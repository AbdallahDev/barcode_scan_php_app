<?php

include_once '../BLL/barcode.php';

$barcode = $_GET['barcode'];
$product_id = $_GET['productId'];

$barcodeInstacne = new barcode();
$barcodeInstacne->save_barcode($barcode, $product_id);

<?php

include_once '../BLL/events.php';


$barcode = $_GET['barcode'];
$productName = $_GET['productName'];

$event = new events();

if ($barcode != "00000") {
    $event->insert_event($barcode, $productName);
}

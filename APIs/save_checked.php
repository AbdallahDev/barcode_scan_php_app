<?php

include_once '../BLL/location.php';
include_once '../BLL/checked.php';

$location_barcode = $_GET['locationBarcode'];
$user_id = $_GET['userId'];
$location_id = 1;
$transaction_type_id = 3;

$location = new location();
$result = $location->get_location_id($location_barcode);
$result = $result->fetch_assoc();
$location_id = $result["location_id"];

$checked = new checked();
$checked->save_checked($transaction_type_id, $user_id, $location_id);

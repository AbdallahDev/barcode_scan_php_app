<?php

include_once '../BLL/user.php';

$distributor = new user();
$distributor_array = array();

$distributor_result = $distributor->get_all_distributor();

while ($distributor_row = $distributor_result->fetch_assoc()) {
    array_push($distributor_array, $distributor_row);
}

echo json_encode($distributor_array);

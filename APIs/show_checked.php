<?php

include_once '../BLL/checked.php';

$user_id = $_GET['userId'];
$checked_array = array();
$checked = new checked();

$checked_result = $checked->get_user_checked($user_id);

while ($checked_row = $checked_result->fetch_assoc()) {
    array_push($checked_array, $checked_row);
}

echo json_encode($checked_array);

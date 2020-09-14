<?php

include_once '../BLL/user.php';
$user_id = $_POST['userId'];
$user_password = $_POST['userPassword'];
$user = new user();
$user_array = array();
$result = $user->user_login($user_id, sha1($user_password));
if ($result == 1) {
    $result = $user->get_user($user_id);
    $result = $result->fetch_assoc();
    array_push($user_array, $result);
    echo json_encode($user_array);
}
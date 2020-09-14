<?php

include_once '../BLL/user.php';
$user_id = $_POST['userId'];
$user_password = $_POST['userPassword'];
$user = new user();
$result = $user->user_login($user_id, sha1($user_password));
if ($result == 1) {
    $result = $user->get_user($user_id);
    $result = $result->fetch_assoc();
    echo json_encode($result);
}
<?php

include_once '../DAL/my_db.php';

class checked extends my_db {

    function save_checked($transaction_type_id, $user_id, $location_id) {
        $query = "INSERT INTO `transaction` (`transaction_type_id`, `user_id`, `location_id`) "
                . "VALUES (?, ?, ?)";
        $datatypes = "iii";
        $vars = array(&$transaction_type_id, &$user_id, &$location_id);
        $this->mod_data($query, $datatypes, $vars);
    }

    function get_user_checked($user_id) {
        $query = "SELECT user.user_name, location.location_name, transaction.transaction_date_time "
                . "FROM transaction "
                . "INNER JOIN user ON transaction.user_id = user.user_id "
                . "INNER JOIN location ON location.location_id = transaction.location_id "
                . "WHERE transaction.user_id = ?";
        $datatypes = "i";
        $vars = array(&$user_id);
        return $this->get_data($query, $datatypes, $vars);
    }

}

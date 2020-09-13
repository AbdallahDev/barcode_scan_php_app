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

}

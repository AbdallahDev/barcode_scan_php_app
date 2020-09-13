<?php

include_once '../DAL/my_db.php';

class checked extends my_db {

    function save_checked($user_id, $location_id) {
        $query = "INSERT INTO `transaction` (`transaction_type`, `user_id`, `location_id`) "
                . "VALUES (3, ?, ?)";
        $datatypes = "iii";
        $vars = array(&$user_id, &$location_id);
        $this->mod_data($query, $datatypes, $vars);
    }

}

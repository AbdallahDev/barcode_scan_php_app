<?php

include_once '../DAL/my_db.php';

class user extends my_db {

    function user_login($user_id, $user_password) {
        $rs = $this->get_data('SELECT user.user_id FROM user '
                . 'WHERE user.user_id = ? AND user.user_password = ?'
                , 'is', array(&$user_id, &$user_password));
        if ($rs->num_rows != 0) {
            return 1;
        }
    }

    function get_user($user_id) {
        $query = 'SELECT user.user_id, user.user_name, user.userType_id '
                . 'FROM `user` WHERE user.user_id = ?';
        $datatypes = "i";
        $vars = array(&$user_id);
        return $this->get_data($query, $datatypes, $vars);
    }

    function get_all_distributor() {
        $query = "SELECT user.user_id, user.user_name, user.userType_id "
                . "FROM `user` "
                . "WHERE user.userType_id = 2";
        return $this->get_all_data($query);
    }

}

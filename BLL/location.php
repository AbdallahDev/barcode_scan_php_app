<?php

include_once '../DAL/my_db.php';

class location extends my_db {

    function get_location_id($location_barcode) {
        $query = "SELECT `location_id` FROM `location` "
                . "WHERE location.location_barcode = ?";
        $datatypes = "s";
        $vars = array(&$location_barcode);
        $this->get_data($query, $datatypes, $vars);
    }

}

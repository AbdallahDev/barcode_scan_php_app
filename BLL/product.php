<?php

include_once '../DAL/my_db.php';

class Product extends my_db {

    function get_all_products() {
        $query = "SELECT * FROM `product`";
        return $this->get_all_data($query);
    }

}

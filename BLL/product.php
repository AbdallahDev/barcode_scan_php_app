<?php

include_once '../DAL/my_db.php';

class Product extends my_db {

    function get_all_products() {
        $query = "SELECT * FROM `product`";
        return $this->get_all_data($query);
    }

    function get_product_price($productId) {
        $query = "SELECT product.product_price FROM `product` "
                . "WHERE product.product_id = ?";
        $datatypes = "i";
        $vars = array(&$productId);
        return $this->get_data($query, $datatypes, $vars);
    }

}

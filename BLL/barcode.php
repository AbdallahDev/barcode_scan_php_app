<?php

include_once '../DAL/my_db.php';

class barcode extends my_db {

    function save_barcode($barcode, $product_id) {
        $query = "INSERT INTO `barcode` (`barcode`, `product_id`) VALUES (?, ?)";
        $datatypes = "si";
        $vars = array(&$barcode, &$product_id);
        $this->mod_data($query, $datatypes, $vars);
    }

}

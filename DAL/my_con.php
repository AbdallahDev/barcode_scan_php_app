<?php

class my_con {

    public function my_con() {
        $con = new mysqli('localhost', 'appDev', 'l0nmePaB98cnzSji', 'barcodescan');;
//        $con = new mysqli('sql12.freemysqlhosting.net', 'sql12365831', 'zQQUNfS1qF', 'sql12365831');
        mysqli_query($con, "SET NAMES 'utf8'");
        mysqli_query($con, 'SET CHARACTER SET utf8');
        return $con;
    }

}

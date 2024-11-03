<?php

class Koneksi {

    public function Koneksi() {
        $conn = new PDO("sqlsrv:server=LAPTOP-60DUFOCJ\SQLEXPRESS;database=BebasTanggunganTADB");
        return $conn;
    }

}

?>
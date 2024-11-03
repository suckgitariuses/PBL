<?php
require_once "../Config/koneksi.php";
session_start();
class User {
    private $koneksi;
    public function __construct(){
        $this->koneksi = new Koneksi();
    }

    public function validasi_nim($nim, $password) {
        $query = "select * from dbo.Users where username = '$nim' and password = '$password'";
        $data = $this->koneksi->Koneksi()->query($query);
        $result = $data->fetch();
        if(empty($result) == true) {
            $_SESSION['error'] = "Nim atau Password salah";
            return false;
        } else {
            $_SESSION['user'] = $result;
            return true;
        }
    }
}
<?php
require_once "../Model/user.php";

class AuthController {
    private $user;
    public function __construct(){
        $this->user = new User();
    }

    public function login() {
        header("location:../view/login.php");
    }

    public function proses_login() {
        $nim = $_POST['nim'];
        $password = $_POST['password'];
        $validasi = $this->user->validasi_nim($nim, $password);
        if($validasi == true) {
            header('location:../view/dashboard/index.php');
        } else {
            header('location:../view/login.php');
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        $_SESSION['logout'] = "Anda Berhasil Logout Silahkan Login Kembali";
        header('location:../view/login.php');
    }
}

?>
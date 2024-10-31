<?php

class AuthController {
    public function __construct(){

    }

    public function login() {
        header("location:../view/login.php");
    }
}

?>
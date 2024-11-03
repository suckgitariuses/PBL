<?php
require_once '../Controller/AuthController.php';
require_once './routeUser.php';
$auth = new AuthController();
$user = new RouteUser();
$page = isset($_GET['page']) ? $_GET['page'] : $_GET['page'] = 'login';
$basePath = "pbl";
if ($page == 'login') {
    $auth->login();
} elseif ($page == 'proses_login') {
    $auth->proses_login();
} elseif ($page == 'logout') {
    $auth->logout();
}

if (isset($_SESSION['user'])) {
    if ($page == 'user') {
        $user->route();
    }
} else {
    header('location:../view/login.php');
}

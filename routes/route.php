<?php
require_once '../Controller/AuthController.php';
require_once './routeUser.php';
$auth = new AuthController();
$user = new RouteUser();
$page = isset($_GET['page']) ? $_GET['page'] : $_GET['page'] = 'login';
$basePath = "pbl";
if($page == 'login') {
    $auth->login();
} elseif($page == 'user') {
    $user->route();
}

?>
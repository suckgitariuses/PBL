<?php
    class RouteUser {
        public function __construct(){
            
        }

        public function route() {  
            $page = isset($_GET['sub']) ? $_GET['sub'] : $_GET['sub'] = 'manageuser';
            if($page == 'manageuser') {
                header('location:../view/user/index.php');
            }
        }
    }
?>
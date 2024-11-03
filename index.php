<?php
    session_start();
    if(empty($_SESSION['user'])) {
        echo "<a href='routes/route.php?page=login'>Login</a>";
    } else {
        echo "<a href='routes/route.php?page=logout'>logout</a>";
    }
?>

<a href="routes/route.php?page=user&sub=manageuser">Manage User</a>
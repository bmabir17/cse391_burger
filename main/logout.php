<?php

session_start();
if (isset($_SESSION['login_admin']) && $_SESSION['login_admin']) {
    echo "Logging out Admin";
    session_destroy();
    header('refresh:1; url=start.php');
} elseif (isset($_SESSION['login_super_admin']) && $_SESSION['login_super_admin']) {
    echo "Logging out Super Admin";
    session_destroy();
    header('refresh:1; url=start.php');
}else{

}
?>
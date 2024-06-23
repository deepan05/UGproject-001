<?php
unset($_SESSION['login_user']);
   session_destroy();
   header('Location: costomer_login.php');
?>
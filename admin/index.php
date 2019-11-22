<?php
session_start();
if (!$_SESSION['admin_id']) {
    header('Location: login.php');
} else{
   header('location:pages/index.php');
}
?>




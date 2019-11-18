<?php
if (!$_SESSION['admin_id']) {
    header('Location: login.php');
} else{
   header('location:pages/index.php');
}
?>



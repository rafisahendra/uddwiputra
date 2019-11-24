<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<?php include "component/head.php"; ?>
<?php include '../model/M_Library.php'; $db = new M_Library; ?>
<?php session_start();
?>


<body>
<?php include 'member/header-top.php'; ?>
<?php include 'member/header.php'; ?>
<?php //include 'member/kategori.php'; ?>
<?php include 'contents.php'; ?>
<?php //include 'member/blog.php'; ?>
<?php //include 'member/instagram.php'; ?>
<?php include 'component/footer.php'; ?>
</body>



<?php include 'component/script.php' ?> 

</html>
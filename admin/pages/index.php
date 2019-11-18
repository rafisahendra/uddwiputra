<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

  <?php include 'asset/head.php'; ?>

<body id="page-top">
  <div id="wrapper">

  <?php include'asset/slidebar.php';?>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

  <?php include 'asset/navbar.php'; ?>
      
      <div class="container-fluid">
        <!-- <h6 class=" mb-2 text-gray-800">Welcome: <?= $_SESSION['username']; ?></h6> -->

  <?php include 'content.php'; ?>

      </div>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; KT-Misdianto 2019</span>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <?php
  include 'asset/modal.php';
  include 'asset/script.php';
  ?>
</body>

</html>

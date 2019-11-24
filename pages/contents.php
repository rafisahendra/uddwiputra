<?php
if(isset($_GET['page'])){
    include_once($_GET['page'].'.php');
}else{
    include 'member/slidebar.php';
    include 'member/produk.php'; 
}

?>
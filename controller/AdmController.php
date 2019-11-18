<?php
include '../model/M_admin.php';
$db = new M_admin();

$aksi = $_GET['aksi'];


    if($aksi == 'tambah'){
        $db->tambah_admin($_POST['nama']);
        header('location:../index.php');
    }elseif($aksi == 'hapus'){
        $db->hapus_admin($_GET['id']);
        header('location:../index.php');
    }elseif($aksi == 'update'){
        $db->update_admin($_POST['id'], $_POST['nama']);
        header('location:../index.php');
    }elseif($aksi == 'tambah_kategori'){
        $db->tambah_kategori($_POST['nama_k']);
        header('location:../admin/pages/index.php?module=kategori/view');
    }elseif($aksi == 'hapus_kategori'){
        $db->hapus_kategori($_GET['id']);
        header('location:../admin/pages/index.php?module=kategori/view');
    }elseif($aksi == 'update_kategori'){
        $db->update_kategori($_POST['id'], $_POST['nama_k']);
        header('location:../admin/pages/index.php?module=kategori/view');
        }

?>
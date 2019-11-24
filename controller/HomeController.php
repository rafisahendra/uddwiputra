<?php
include '../model/M_Library.php';
$db = new M_Library();
$aksi = $_GET['aksi'];
   

if($aksi == 'change'){
        if( $_POST['passbaru'] == $_POST['konfirmasi']){
        $db->update_admin($_POST['id'], $_POST['passbaru'],$_POST['konfirmasi']);
        echo"<script>alert('Password Telah Diperbaharui);</script>";
        echo"<script>window.location='../admin/pages/index.php';</script>";
    }else{
        echo"<script>alert('Password baru tidak Sama');</script>";
        echo"<script>window.location='../admin/pages/index.php?module=home/change-password';</script>";
    }
    }elseif($aksi == 'login'){
        
        $db->member_login($_POST['email'],$_POST['password']);
         header('location:../pages/indexs.php');
    }elseif($aksi == 'logout'){
       $db->member_logout();
        header('location:../pages/index.php?page=home/login');
    }elseif($aksi == 'registrasi'){
        $db->member_register($_POST['nama'],$_POST['email'],$_POST['password']);
         header('location:../pages/index.php?page=home/login');
     }elseif($aksi == 'tentang'){
        $db->ganti_tentang($_POST['judul_informasi'],$_POST['keterangan']);
        header('location:../admin/pages/index.php?module=tentang/view');
     }elseif($aksi == 'lengkapi_data'){
        $db->lengkapi_data($_POST['id'],$_POST['id_provinsi'],$_POST['id_kabkota'],$_POST['alamat'],$_POST['nohp'],$_POST['kode_pos']);
        header('location:../admin/pages/index.php?module=kategori/view');
    }elseif($aksi == 'hapus_kategori'){
        $db->hapus_kategori($_GET['id']);
        header('location:../admin/pages/index.php?module=kategori/view');
    }elseif($aksi == 'update_kategori'){
        $db->update_kategori($_POST['id'], $_POST['nama_k']);
        header('location:../admin/pages/index.php?module=kategori/view');
    }elseif($aksi == 'tambah_produk'){
        $db->tambah_produk($_POST['nama_p'],$_POST['id_kategori'],$_POST['harga_p'],$_POST['jumlah_stok'],$_POST['keterangan'],$_FILES['fupload']['name'],$_FILES['fupload']['tmp_name']);
        header('location:../admin/pages/index.php?module=produk/view');
    }elseif($aksi == 'hapus_produk'){
        $db->hapus_produk($_GET['id']);
        header('location:../admin/pages/index.php?module=produk/view');
    }elseif($aksi == 'update_produk'){
        $db->update_produk($_POST['id'], $_POST['nama_p'],$_POST['idk'],$_POST['harga_p'],$_POST['jumlah_stok'],$_POST['keterangan'],$_FILES['fupload']['name'],$_FILES['fupload']['tmp_name'],$_POST['fuploadlama']);
        header('location:../admin/pages/index.php?module=produk/view');
    }elseif($aksi == 'tambah_ongkir'){
        $db->tambah_ongkir($_POST['provinsi_id'],$_POST['kabkota_id'],$_POST['ongkos_k']);
        header('location:../admin/pages/index.php?module=ongkir/view');
    }elseif($aksi == 'hapus_ongkir'){
        $db->hapus_ongkir($_GET['id']);
        header('location:../admin/pages/index.php?module=ongkir/view');
    }elseif($aksi == 'update_ongkir'){
        $db->update_ongkir($_POST['id'], $_POST['p_id'],$_POST['k_id'],$_POST['ongkos_k']);
        header('location:../admin/pages/index.php?module=ongkir/view');
    }

?>
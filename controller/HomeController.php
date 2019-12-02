
<?php
include '../model/M_Library.php';
$db = new M_Library();

$aksi = $_GET['aksi'];
   

if($aksi == 'change'){
        if( $_POST['passbaru'] == $_POST['konfirmasi']){
        $db->update_admin($_POST['id'], $_POST['passbaru'],$_POST['konfirmasi']);
        echo"<script>alert('Password Telah Diperbaharui');</script>";
        echo"<script>window.location='../admin/pages/index.php';</script>";
    }else{
        echo"<script>alert('Password baru tidak Sama');</script>";
        echo"<script>window.location='../admin/pages/index.php?module=home/change-password';</script>";
    }
    }elseif($aksi == 'login'){
      $db->member_login($_POST['email'],$_POST['password']);
      if(@$_SESSION['member_nama']== TRUE){
          echo"<script>alert('Login berhasil $_SESSION[member_nama]');</script>";
          echo"<script>window.location='../pages/indexs.php';</script>";
      }else{
        echo"<script>alert('Username dan password tidak Valid!');</script>";
        echo"<script>window.location='../pages/index.php?page=home/login';</script>";
      }
    }elseif($aksi == 'logout'){
        $db->member_logout();
        header('location:../pages/index.php?page=home/login');
    }elseif($aksi == 'registrasi'){
        $db->member_register($_POST['nama'],$_POST['email'],$_POST['password']);
          echo"<script>alert('Registrasi berhasil ');</script>";
          echo"<script>window.location='../pages/index.php?page=home/login';</script>";
     }elseif($aksi == 'lengkapi_data'){
        $db->lengkapi_data($_POST['id'],$_POST['id_provinsi'],$_POST['id_kabkota'],$_POST['alamat'],$_POST['nohp'],$_POST['kode_pos']);
        header('location:../pages/indexs.php?page=member/profil');
    }elseif($aksi == 'edit_data'){
        $db->edit_data($_POST['id'],$_POST['id_provinsi'],$_POST['id_kabkota'],$_POST['alamat'],$_POST['nohp'],$_POST['kode_pos'],$_POST['nama'],$_POST['email']);
        header('location:../pages/indexs.php?page=member/profil');
    }elseif($aksi == 'tambah_keranjang'){
        if(isset($_POST['btn_beli']) ){
        $db->tambah_keranjang($_POST['id_member'],$_POST['id_produk'],$_POST['beli']);
        header('location:../pages/indexs.php?page=member/keranjang');
        }else{
        $db->tambah_keranjang($_POST['id_member'],$_POST['id_produk'],$_POST['beli']);
        header('location:../pages/indexs.php#produkcart');
        }
     }elseif($aksi == 'hapus_keranjang'){
        $db->hapus_keranjang($_GET['id']);
        header('location:../pages/indexs.php?page=member/keranjang');
    }elseif($aksi == 'tambah_transaksi'){
        if(isset($_POST['lengkapi'])){
            echo"<script>alert('Lengkapi data Anda');</script>";
            echo"<script>window.location='../pages/indexs.php?page=member/profil';</script>";
           
        }else{

        $db->tambah_transaksi($_POST['id_member'],$_POST['id_ongkir'],$_POST['jumlah_bayar'],$_POST['pesan']);
        header('location:../pages/indexs.php?page=member/pesanan');
        }
    }elseif($aksi == 'konfirmasi'){
        $db->tambah_konfirmasi($_POST['transaksi_id'],$_POST['nama'],$_POST['b_pengirim'],$_POST['b_penerima'],$_POST['j_kirim'],$_POST['tanggal'],$_FILES['bukti']['name'],$_FILES['bukti']['tmp_name']);
        header('location:../pages/indexs.php?page=member/pesanan');
    }elseif($aksi=='pesanan_diterima'){
        $db->pesanan_diterima($_POST['id'],$_POST['status']);
        header('location:../pages/indexs.php?page=member/konfirmasi-penerimaan');
    }
?>



<?php
    include "config/koneksi.php";

    $user = mysqli_real_escape_string($kon,$_POST['username']);
    $pass = mysqli_real_escape_string($kon,$_POST['password']);

    $sql  = mysqli_query($kon,"SELECT * FROM tb_admin WHERE username = '$user'");

    $data = mysqli_fetch_array($sql);
 // var_dump($data );exit;
    if(mysqli_num_rows($sql) > 0){
    if(password_verify($pass, $data["password"])){
            session_start();
            $_SESSION['id']			   = $data['admin_id'];
            $_SESSION['username']	   = $data['username'];
            $_SESSION['password']	   = $data['password'];
                
            echo "<script>
                alert('Selamat Datang $_SESSION[username]');
                window.location='pages/index.php';
                </script>";
        }else{
            echo "<script>
                    alert('Password atau username anda salah !');
                    window.location='login.php';
                  </script>";
          
        }  

    }
?>


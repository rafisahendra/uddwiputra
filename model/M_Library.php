
<?php
include 'Db.php';

class M_Library extends Db{

// ============================== Login ==============================
    function login($user, $pass){
        $stmt  = $this->db->prepare("SELECT * FROM tb_admin WHERE username = '$user'");
        $stmt->execute();
        
        $row  = $stmt->rowCount();
        $data = $stmt->fetchobject();
        if($row > 0){
           
        if(password_verify($pass, $data->password)){
                session_start();
                $_SESSION['admin_id']	 = $data->admin_id;
                $_SESSION['username']	   = $data->username;
                $_SESSION['level']	   = $data->level;
           
            }
    }
}  

    function logout(){
    session_start();
    session_destroy();

    }

// =======================Tampil Jumlah Form Di Admin===========================
    function jumlah_kategori(){
       $kategori = $this->jumlah_fetchColumn("SELECT count(*) FROM tb_kategori ");
       return $kategori;
      
    }

    function jumlah_produk(){
       $produk = $this->jumlah_fetchColumn("SELECT count(*) FROM tb_produk ");
       return $produk;
      
    }

    function jumlah_transaksi(){
        $transaksi = $this->jumlah_fetchColumn("SELECT count(*) FROM tb_transaksi");
        return $transaksi;
    }


    function jumlah_member(){
       $member = $this->jumlah_fetchColumn("SELECT count(*) FROM tb_member ");
       return $member;
      
    }

   

//=========================    Informasi  ============================
    function tentang_kami(){
      $tentang =  $this->tampil("SELECT * from tb_informasi where informasi_id=1");
      return $tentang ;
    }

    function informasi(){
      $informasi =  $this->tampil("SELECT * from tb_informasi where informasi_id=2");
      return $informasi;
    }
    
    function ganti_tentang($judul,$keterangan){
      $stmt = $this->db->prepare(" UPDATE tb_informasi SET judul_informasi=:jdl, keterangan=:ket WHERE `informasi_id`=1");
      $stmt->execute([':jdl'=> $judul,
                      ':ket' => $keterangan]); 
 
    }
    function ganti_informasi($judul,$keterangan){
        $stmt = $this->db->prepare(" UPDATE tb_informasi SET judul_informasi=:jdl, keterangan=:ket WHERE `informasi_id`=2");
        $stmt->execute([':jdl'=> $judul,
                        ':ket' => $keterangan]);
         
      }
       
     
// ======================== / Json Tampil   ambil_nilai ============================
    // function ambil_cari_order($id_js){
      

    // // buat query untuk ambil data dari database

    // $sql = $this->db->prepare("SELECT * FROM `tb_transaksi` JOIN `tb_member` USING (member_id) WHERE transaksi_id='$id_js'");

    // $result = array();
    // while($row = mysqli_fetch_array($query)){
    
    //     array_push($result, 
    //         array(
    //             'idorder'=>$row[1],
    //         'namaorder'=>$row[8],
    //         'tglorder'=>$row[2],  
    //         'totalbelanja'=>$row[3],
    //         'status' =>$row[4]    		
    //             ));
    // }
    // echo json_encode(array($result));

    // }

//========================= / Untuk kategori ============================
    function tampil_admin($id){
      
    $query =  $this->tampil("SELECT* from tb_admin where admin_id = $id");
    return $query;
    }

    function tampil_member(){
      
        $query =  $this->tampil("SELECT* from tb_member ");
        return $query;
        }
    
    function hapus_member($id){
    $this->universal("DELETE from tb_member where member_id = $id");
      
    }

    function update_admin($id, $pass, $konfirmasi){

        
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT) ;
        $stmt = $this->db->prepare("UPDATE tb_admin set `password`=:pass where admin_id=:id");
        $stmt->execute([':pass' => $pass_hash,
                        ':id'   => $id]);

      
         
     }



//========================= Untuk kategori ============================
   function tampil_kategori(){
      
    $query =  $this->tampil("SELECT* from tb_kategori");
    return $query;
    }
    function tambah_kategori($nama){
    $stmt = $this->db->prepare("INSERT into tb_kategori (kategori_nama)values('$nama')");
    $stmt->execute([':nma' => $nama]);
    $stmt = null;
  
    }
    function hapus_kategori($id){
    $this->universal("DELETE From tb_kategori where kategori_id='$id'");
    }

    function update_kategori($id, $nama){
    $stmt = $this->db->prepare("UPDATE tb_kategori set kategori_nama=:nma where kategori_id=:id");
    $stmt->execute([':nma'=>$nama,
                    ':id' =>$id ]);
    $stmt = null;
    } 
    
    //========================= Untuk produk ============================
   
    function tampil_produk(){
      
    $query =  $this->tampil("SELECT* from tb_produk a JOIN tb_kategori b ON a.kategori_id=b.kategori_id");
    return $query;
    }

    function tambah_produk($nama, $idk, $harga, $jmlstok, $ket, $foto,$lokasi){
        $tanggal =date('Y-m-d');
        $nama_baru = date('Ymdhis').$foto;
        if(!empty($lokasi)){
        move_uploaded_file($lokasi, "../images/produk/".$nama_baru); 
        }
    $stmt = $this->db->prepare("INSERT INTO tb_produk( `kategori_id`, `produk_nama`, `gambar_produk`, `produk_tgl`, `produk_harga`, `produk_stok`, `produk_keterangan`) VALUES(:idk, :nma, :foto, :tgl, :harga, :stok, :ket)");
    $stmt->execute([':nma'  => $nama,
                    ':idk'  => $idk,
                    ':harga'=> $harga,
                    ':stok' => $jmlstok,
                    ':ket'  => $ket,
                    ':foto' => $nama_baru,
                    ':tgl'  => $tanggal]);
    $stmt = null;
  
    }
    function hapus_produk($id){
    $this->universal("DELETE From tb_produk where produk_id='$id'");
    }

    function update_produk($id, $nama, $idk, $harga, $jmlstok, $ket, $foto,$lokasi,$foto_lama){
        $tanggal =date('Y-m-d');
        $nama_baru = date('Ymdhis').$foto;
        if(!empty($lokasi)){
        move_uploaded_file($lokasi, "../images/produk/".$nama_baru); 
        }else{
            $nama_baru = $foto_lama;
        }

    $stmt = $this->db->prepare("UPDATE `tb_produk` SET `kategori_id`=:idk,`produk_nama`=:nma,`gambar_produk`=:foto,`produk_tgl`=:tgl,`produk_harga`=:harga,`produk_stok`=:stok,`produk_keterangan`=:ket WHERE `produk_id`=:id");
    $stmt->execute([':nma'  => $nama,
                    ':idk'  => $idk,
                    ':harga'=> $harga,
                    ':stok' => $jmlstok,
                    ':ket'  => $ket,
                    ':tgl'  => $tanggal,
                    ':foto' => $nama_baru,
                    ':id'   => $id]);
    $stmt = null;
    } 



//========================= Untuk ongkir ============================
    function tampil_kabkota(){
      
    $query =  $this->tampil("SELECT* from tb_kabkota ORDER BY nama_kabkota");
    return $query;
    }

    function tampil_provinsi(){
      
    $query =  $this->tampil("SELECT* from tb_provinsi order by nama_provinsi");
    return $query;
    }

   function tampil_ongkir(){
      
    $query =  $this->tampil("SELECT* from tb_ongkir a JOIN tb_provinsi b ON a.provinsi_id=b.provinsi_id  JOIN tb_kabkota c WHERE a.kabkota_id=c.kabkota_id" );
    return $query;
    }
    function tambah_ongkir($provinsi, $kabkota, $ongkir){
    $stmt = $this->db->prepare("INSERT into tb_ongkir (kabkota_id, provinsi_id, ongkos_kirim)values(:kab, :prov, :ongkir)");
    $stmt->execute([':kab'    => $kabkota,
                    ':prov'   => $provinsi,
                    ':ongkir' => $ongkir]);
    $stmt = null;
  
    }
    function hapus_ongkir($id){
    $this->universal("DELETE From tb_ongkir where ongkir_id='$id'");
    }

    function update_ongkir($id, $provinsi,$kabkota,$ongkir){
        
    $stmt = $this->db->prepare("UPDATE tb_ongkir set kabkota_id=:kabkota, provinsi_id=:provinsi, ongkos_kirim=:ongkir where ongkir_id=:id");
    $stmt->execute([':ongkir'  =>$ongkir,
                    ':provinsi'=>$provinsi,
                    ':kabkota' =>$kabkota,
                    ':id'      =>$id ]);
    $stmt = null;
    } 

//========================= Untuk Transaksi ============================
    function tampil_transaksi(){
        $stmt = $this->tampil("SELECT * FROM tb_transaksi a JOIN tb_member b ON  a.member_id=b.member_id");
     
        return $stmt;
    }

    function hapus_transaksi($id){
        $query = $this->universal("DELETE From tb_transaksi where transaksi_id=$id");
        return $query;
    }

    function status_transaksi( $id, $status){

        // echo "   UPDATE `tb_transaksi` SET `status`='$status' WHERE `transaksi_id`='$id'";exit;
        $query = $this->universal("UPDATE `tb_transaksi` SET `status`='$status' WHERE `transaksi_id`='$id'");
        return $query;
    }
    function pesanan_diterima( $id, $status){

        // echo "   UPDATE `tb_transaksi` SET `status`='$status' WHERE `transaksi_id`='$id'";exit;
        $query = $this->universal("UPDATE `tb_transaksi` SET `status`='$status' WHERE `transaksi_id`='$id'");
        return $query;
    }
    
//////////////////////////////////====Library For Home====///////////////////////////

// ========================= Tampil jumlah Di Home ================================

    // public function jumlah_keranjang($id_member){
    // $row=[];
    // $query = $this->db->prepare("SELECT * FROM tb_keranjang where member_id='$id_member'");
    // $query ->execute(); 
    // $row = $query->rowcount();
  
    //  return $row;
    // }
    public function jumlah_keranjang($id_member){
        $query = $this->jumlah_rowCount("SELECT * FROM tb_keranjang where member_id='$id_member'");
        return $query;
       }

     


//autentification member login
    function member_register($nama,$email,$pass){
        $tanggal =date('Y-m-d');
        $md5 = md5($pass);
        $query = $this->db->prepare("INSERT INTO `tb_member`( `member_nama`, `member_email`, `member_nohp`, `tgl_daftar`, `provinsi_id`, `kabkota_id`, `kode_pos`, `password`, `member_alamat`) VALUES(:nma,:email,'-','$tanggal','0','0','-',:md5,'-')");

        $query->execute([':nma'  =>$nama,
                         ':email'=>$email,
                         ':md5'   =>$md5]);
        $query =null;
    }

    function member_login($email, $pass){
        $md5 = md5($pass);
        $stmt  = $this->db->prepare("SELECT * FROM tb_member WHERE `member_email` = :email and `password`=:md5");
        $stmt->execute(
            [':email'    =>$email,
             ':md5'     =>$md5]
        );
        
        $row  = $stmt->rowCount();
        $data = $stmt->fetchobject();
        if($row > 0){
            
     
                session_start();
                $_SESSION['member_id']	 = $data->member_id;
                $_SESSION['member_nama']	   = $data->member_nama;
                $_SESSION['member_email']	   = $data->member_email;
               
               
    }
    // var_dump($row);exit;
    }  
    function member_logout(){
    session_start();
    session_destroy();

    }

    // Tampil member
    function member_tampil($session){
        $query = $this->tampil("SELECT * FROM tb_member  where member_id='$session'");
        return $query;
    }

    // tampil member join kategori join produk
    function member_tampilpk($session){
        $query = $this->tampil("SELECT * FROM tb_member a JOIN tb_provinsi b ON a.provinsi_id=b.provinsi_id JOIN tb_kabkota c ON a.kabkota_id=c.kabkota_id  where member_id='$session'");
        return $query;
    }

    // lengkapi data member
    function lengkapi_data($id, $provinsi,$kabkota,$alamat,$nohp,$pos){
        $stmt = $this->db->prepare("UPDATE tb_member set kabkota_id=:kabkota, provinsi_id=:provinsi, kode_pos=:pos ,member_alamat=:alamat, member_nohp=:nohp where member_id=:id");
        $stmt->execute([':alamat'  =>$alamat,
                        ':nohp'  =>$nohp,
                        ':pos'  =>$pos,
                        ':provinsi'=>$provinsi,
                        ':kabkota' =>$kabkota,
                        ':id'      =>$id ]);
        $stmt = null;
    }


    function edit_data($id, $provinsi,$kabkota,$alamat,$nohp,$pos,$nama,$email){
        $stmt = $this->db->prepare("UPDATE tb_member set member_nama=:nama, member_email=:email, kabkota_id=:kabkota, provinsi_id=:provinsi, kode_pos=:pos ,member_alamat=:alamat, member_nohp=:nohp where member_id=:id");
        $stmt->execute([':alamat'  =>$alamat,
                        ':nohp'  =>$nohp,
                        ':pos'  =>$pos,
                        ':provinsi'=>$provinsi,
                        ':kabkota' =>$kabkota,
                        ':nama' =>$nama,
                        ':email' =>$email,
                        ':id'      =>$id ]);
        $stmt = null;
    }

     // tampil produk 8 di home
     function tampil_produk8(){
      
        $query =  $this->tampil("SELECT* from tb_produk a JOIN tb_kategori b ON a.kategori_id=b.kategori_id order By a.produk_id DESC limit 8");
        return $query;
        }
    
    // Untuk detail produk join kategori
    function produk_detail($id_produk){
      
        $query =  $this->tampil("SELECT* from tb_produk a JOIN tb_kategori b ON a.kategori_id=b.kategori_id where produk_id='$id_produk' ");
        return $query;
        }
// ================================ Di keranjang Belanja ==================== 

    // Untuk Input Keranjang
        function tambah_keranjang($id_member,$id_produk, $beli){
         $tanggal = date('Y-m-d');
         $stmt = $this->db->prepare("INSERT INTO `tb_keranjang`(`member_id`, `produk_id`, `jumlah_beli`, `tgl_keranjang`) VALUES(:member,:produk,:beli,:tgl)");
          $stmt->execute([':member'   => $id_member,
                          ':produk'   => $id_produk,
                          ':beli'     => $beli,
                          ':tgl'      => $tanggal]);
        }


    //tampil Keranjang 
    public function tampil_keranjang($id_member){
  
        $stmt = $this->tampil("SELECT * FROM tb_keranjang a JOIN tb_produk b ON a.produk_id=b.produk_id Where member_id='$id_member'");
        return $stmt;
    }
    //Hapus keranjang
    function hapus_keranjang($id){
        $this->universal("DELETE From tb_keranjang where keranjang_id='$id'");
    }

    //ongkos kirim 
    function ongkos_kirim($prov, $kabkota){
        $stmt = $this->tampil("SELECT * FROM tb_ongkir  Where provinsi_id='$prov' and kabkota_id='$kabkota'");
        return $stmt;
    }


    function tambah_transaksi($id_member,$id_ongkir, $jumlah_bayar,$pesan){

			$a = date('Y-m-d-h-i-s');
			$krr = explode('-',$a);
			$id_transaksi = implode("",$krr);
            $id_member = $_POST['id_member'];
            $id_ongkir =$_POST['id_ongkir'];
			$jumlah_bayar = $_POST['jumlah_bayar'];
			$tgl_sekarang = date('Y-m-d');
            $status = "Belum Konfirmasi";
            $pesan = $_POST['pesan'];
		
            $sqltambahorder = $this->db->prepare("INSERT INTO `tb_transaksi`(`transaksi_id`, `tgl_pesan`, `member_id`, `total_bayar`, `status`,ongkir_id,pesan_pemesanan) VALUES ('$id_transaksi','$tgl_sekarang','$id_member','$jumlah_bayar','$status','$id_ongkir','$pesan ')");
            $sqltambahorder->execute();

			//mengambil nilai no order
            $sqltampilorder = $this->db->prepare("SELECT `transaksi_id` FROM `tb_transaksi` WHERE `member_id`='$id_member' AND `total_bayar`='$jumlah_bayar' AND `status`='$status'  AND  `tgl_pesan`='$tgl_sekarang'");
            $sqltampilorder->execute();
			$zz_id = $sqltampilorder->fetch(PDO::FETCH_ASSOC);
			$idcartorder =  $zz_id['transaksi_id'];


			// ambil data cart
            $sqlkeranjang = $this->db->prepare("SELECT * FROM tb_keranjang a JOIN tb_produk b ON a.produk_id=b.produk_id  WHERE `member_id`='$id_member'");
            $sqlkeranjang->execute();
			while ($ambilnilai = $sqlkeranjang->fetch(PDO::FETCH_ASSOC)) {
				$subtotal = $ambilnilai['produk_harga']*$ambilnilai['jumlah_beli'];
                $sqltransaksi_detail = $this->db->prepare("INSERT INTO `tb_transaksi_detail`( `transaksi_id`, `produk_id`, `jumlah_beli`, `subtotal`) VALUES ('$idcartorder','$ambilnilai[produk_id]','$ambilnilai[jumlah_beli]','$subtotal')");
                $sqltransaksi_detail->execute();

				// $sqlp = mysqli_query($db, "SELECT idproduk,stokproduk FROM produk WHERE idproduk='$ambilnilai[jumlahbeli]' ");
				// $c_bl = mysqli_fetch_array($sqlp);
				// $stk= $c_bl['stokproduk'] - $ambilnilai['jumlahbeli'];
				// if ($stk < 0) {
				// 	// echo $stk;
				// }
				// else{
				// 	$aa = mysqli_query($db, "UPDATE produk SET stokproduk='$stk' WHERE idproduk='$ambilnilai[idproduk]'");
				// }
			}
			if ($sqltransaksi_detail) {
                $hapus_keranjang = $this->db->prepare("DELETE FROM `tb_keranjang` WHERE member_id='$id_member'");
                $hapus_keranjang->execute();
			}
			else{
				echo "<script>alert('Data Keranjang Kosong');</script>";	
			}
					

    }

    function daftar_pembelian($id_member){

        $stmt = $this->tampil("SELECT * FROM tb_transaksi a JOIN tb_member b ON a.member_id=b.member_id where a.member_id ='$id_member'");
        return $stmt;
    }


    function tambah_konfirmasi( $id, $nama, $b_pengirim, $b_penerima, $j_kirim, $tgl ,$upload, $lokasi){
    
        $status='Kofirmasi Pembayaran';
        $query = $this->db->prepare("UPDATE `tb_transaksi` SET `status`='$status' WHERE `transaksi_id`='$id'");
        $query->execute();

        $nama_baru = date('Ymdhis').$upload;
        move_uploaded_file($lokasi,"../images/konfirmasi/".$nama_baru);
    
        $stat = $this->universal("INSERT INTO `tb_konfirmasi`( `transaksi_id`, `bank_pengirim`, `bank_penerima`, `nama_pengirim`, `tgl_transfer`, `jumlah_transfer`, `bukti_transfer`) VALUES('$id','$b_pengirim','$b_penerima','$nama','$tgl','$j_kirim','$nama_baru')");
        return $stat;



    }


    function tampil_ord_member($id_order){
   
            // echo "SELECT * FROM tb_transaksi a  JOIN tb_member c ON a.member_id=c.member_id JOIN tb_ongkir d ON a.ongkir_id = d.ongkir_id  WHERE a.transaksi_id='$id_order'";exit;
        $query = $this->tampil("SELECT * FROM tb_transaksi a  JOIN tb_member c ON a.member_id=c.member_id JOIN tb_ongkir d ON a.ongkir_id = d.ongkir_id  WHERE a.transaksi_id='$id_order'");

        return $query;
    }

    function tampil_ord_detail($id_order){
      
        $query = $this->tampil("SELECT * FROM `tb_transaksi_detail` a JOIN `tb_produk` b ON a.produk_id = b.produk_id  WHERE transaksi_id = '$id_order'");

        return $query;
    
    }

    function tampil_ord_totalbayar($id_order){
        $jumlah = $this->tampil("SELECT SUM(subtotal) AS total FROM `tb_transaksi_detail` WHERE transaksi_id='$id_order'");
        return $jumlah;
    }

    function tampil_konfirmasi($id_order){
        $query = $this->tampil("SELECT * FROM `tb_konfirmasi` WHERE transaksi_id = '$id_order'");
        return $query;
    }

    } 
?>

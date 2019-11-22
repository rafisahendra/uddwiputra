
<?php
include 'Db.php';

class M_admin extends Db{

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
                $_SESSION['password']	   = $data->password;
            }
    }
}  

    function logout(){
    session_start();
    session_destroy();

    }

// =======================Tampil Jumlah Form===========================
    function jumlah_kategori(){
       $kategori = $this->jumlah("SELECT count(*) FROM tb_kategori ");
       return $kategori;
      
    }

    function jumlah_produk(){
       $produk = $this->jumlah("SELECT count(*) FROM tb_produk ");
       return $produk;
      
    }

    function jumlah_transaksi(){
        $transaksi = $this->jumlah("SELECT count(*) FROM tb_transaksi");
        return $transaksi;
    }


    function jumlah_member(){
       $member = $this->jumlah("SELECT count(*) FROM tb_member ");
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
      $stmt->execute(['jdl'=> $judul,
                      'ket' => $keterangan]); 
 
    }
    function ganti_informasi($judul,$keterangan){
        $stmt = $this->db->prepare(" UPDATE tb_informasi SET judul_informasi=:jdl, keterangan=:ket WHERE `informasi_id`=2");
        $stmt->execute(['jdl'=> $judul,
                        'ket' => $keterangan]);
         
      }
       
     
//========================= Untuk kategori ============================
    function tampil_admin(){
      
    $query =  $this->tampil("SELECT* from tb_admin");
    return $query;
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
    $stmt = $this->db->prepare("INSERT into tb_kategori (kategori_nama)values(:nma)");
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


    } 
?>

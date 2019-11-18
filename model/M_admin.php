
<?php
include 'Db.php';

class M_admin extends Db{
     
//========================= Untuk kategori ============================
    function tampil_admin(){
      
    $query =  $this->tampil("SELECT* from tb_admin");
    return $query;
    }

    function tambah_admin($nama){
        $this->db->prepare("INSERT into tb_admin (nama_admin)values('$nama')")->execute();
    }

    function hapus_admin($id){
        $this->universal("DELETE From tb_admin where id_admin='$id'");
    }

    function edit_admin($id){

        $query = $this->tampil("SELECT * from tb_admin where id_admin='$id'");
        return $query;
    }

    function update_admin($id, $nama){
            $this->universal("UPDATE tb_admin set nama_admin='$nama' where id_admin='$id'");
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
    $stmt->execute(['nma'=>$nama,
                    'id' =>$id ]);
    $stmt = null;
    } 
    
    } 
?>

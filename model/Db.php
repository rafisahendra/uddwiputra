<?php
class Db {

     function __construct()
    {

    try{
         $this->db = new PDO("mysql:host=localhost;port=3306;dbname=db_bibit",'root','');
        // echo "Koneksi Berhasil";
       }catch(PDOException $error) {
         echo "Koneksi Gagal".$error->getMessage();
    }
       
    }


    public function tampil($sql){
        $hasil=[];
        $query = $this->db->prepare($sql);
        $query->execute();
        while($data = $query->fetchObject()){
        $hasil[]=$data;
        }
        return $hasil;
    }

    public function universal($sql){
        $query = $this->db->prepare($sql);
        $query->execute();
       
    
    }

   public function jumlah_fetchColumn($sql){
        $hasil=[];
        $query  = $this->db->prepare($sql); 
        $query ->execute(); 
         while ($data = $query->fetchColumn()){
           $hasil[]=$data;  
         }; 
         return $hasil;
    }
   
    public function jumlah_rowCount($sql){
        $row=[];
        $query = $this->db->prepare($sql);
        $query ->execute(); 
        $row = $query->rowCount();  
         return $row;
        }


 
}

?>

<!-- test yo -->



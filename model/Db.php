<?php
class Db {

     function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=db_bibit','root','');
    }

    public function tampil($sql){
        $hasil=[];
        $query = $this->db->prepare($sql);
        $query->execute();
        while($data = $query->fetchobject()){
        $hasil[]=$data;
        }
        return $hasil;
    }

    public function universal($sql){
        $query = $this->db->prepare($sql);
        $query->execute();
       
    
    }

   
 
}

?>

<?php
class Db {

     function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=db_bibit",'root','');
    }

   

// ================================ Versi lain ===============================
        //https://websitebeaver.com/php-pdo-prepared-statements-to-prevent-sql-injection

        // Fetch Associative Array
        function fetch_assoc(){

        $stmt = $this->db->prepare("SELECT * FROM myTable WHERE id <= ?");
        $stmt->execute([5]);
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(!$arr) exit('No rows');
        var_export($arr);
        $stmt = null;
        }
        //==== Ada juga versi loop yang sedikit lebih lama, yang terkadang berguna untuk manipulasi.
        function fetch_assoc_while(){
        $arr = [];
        $stmt = $this->db->prepare("SELECT * FROM myTable WHERE id <= ?");
        $stmt->execute([5]);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $arr[] = $row;
        }
        if(!$arr) exit('No rows');
        var_export($arr);
        $stmt = null;
        }

        // outpt
        // [
        //     ['name' => 'Jerry', 'age' => 14, 'weight' => 129], 
        //     ['name' => 'Alexa', 'age' => 22, 'weight' => 108]
        //   ]
      
        // Fetch Numeric Array
        function fetch_numeric_array(){
        $stmt = $this->db->prepare("SELECT first_name, squat, bench_press FROM myTable WHERE weight > ?");
        $stmt->execute([200]);
        $arr = $stmt->fetchAll(PDO::FETCH_NUM);
        if(!$arr) exit('No rows');
        var_export($arr);
        $stmt = null;
        }

        // output
        // [
        //     ['Thad', 305, 250], 
        //     ['Larry', 225, 180]
        //   ]
          
          
}

?>





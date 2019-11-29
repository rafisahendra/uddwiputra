<?php


 $db = new PDO("mysql:host=localhost;dbname=db_bibit",'root','');
 $id = $_GET['id_js'];

// buat query untuk ambil data dari database

$sql = $db->prepare( "SELECT * FROM `tb_transaksi` JOIN `tb_member` USING (member_id) WHERE transaksi_id='$id'");
$sql->execute();

$result = [];
  while($row = $sql->fetchObject()){
//  var_dump($row);exit;
    array_push($result,[
    		'idorder'=>$row->transaksi_id,
        'namaorder'=>$row->member_nama,
        'tglorder'=>$row->tgl_pesan,  
        'totalbelanja'=>$row->total_bayar,
        'status' =>$row->status     ]);
  }
  echo json_encode(array($result));

  





  ?>
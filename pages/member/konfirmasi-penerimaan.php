// $data = [];
  // $cekdata = 'sql data';
  // foreach($cekdata as $key => $va)
  // {
  //   $data[] = $va;
  //   $data[$key]->kelas = 'sql kelas';
  //   foreach($data[$key]->kelas as $ke => $vv)
  //   {

  //   }
  // }

  <?php
include 'koneksi.php';

	$id = $_GET['id'];
	$sqlorder = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `order` JOIN kota USING (idkota) JOIN `anggota` USING (idanggota) WHERE idorder = '$id'"));



?>

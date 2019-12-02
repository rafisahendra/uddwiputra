<?php
	$db = new mysqli ('localhost','root','','db_bibit');
	if (isset($_POST['btn-cetak'])) {
    $tahun = $_POST['tahun'];
	}
	else {
    header("Location: homeadmin.php?halaman=laporanPenjualan");
	}
?>


<body onload="window.print()">
<center>UD Dwi Putra<br>LAPORAN PENJUALAN Tahunan<br>Tahun : <?= $tahun ?></center>
<br>

<table width="80%" border="1" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td width="5%">No</td>
    <td width="16%">No Oder</td>
    <td width="20%">Tanggal Order</td>
    <td width="15%">Nama Customer</td>
    <td width="19%">Total Belanja</td>
    <td width="15%">Ongkir</td>
    <td width="19%">Total Bayar</td>
  </tr>
  <?php
    $no = 1;
 
      $sqldetail = mysqli_query($db, "SELECT * FROM `tb_transaksi` JOIN `tb_member` USING (member_id) JOIN `tb_ongkir` USING (ongkir_id) WHERE YEAR(tgl_pesan)='$tahun' ");
      while ($trx = mysqli_fetch_array($sqldetail)) {
        
        ?>
         <tr>
      <td><?= $no++ ?></td>
      <td><?= $trx['transaksi_id']?></td>
      <td><?= $trx['tgl_pesan']?></td>
      <td><?= $trx['member_nama']?></td>
      <td><?php $jumlah = mysqli_fetch_array(mysqli_query($db, "SELECT SUM(subtotal) AS totalb FROM `tb_transaksi_detail` WHERE transaksi_id='$trx[transaksi_id]'"));  ?>
        <?= $jumlah['totalb']?></td>
      <td><?= $trx['ongkos_kirim']?></td>
      <td><?= $trx['total_bayar']?></td>
    </tr>
  <?php }  ?>
</table>
<table width=80% align="center">
  <tr>
    <td colspan="2"></td>
    <td width="286"></td>
  </tr>
  <tr>
    <td width="230" align="center"> <br> 
   </td>
    <td width="530"></td>
	
    <td align="center"><?php  
      $bulan = array(
                '01' => 'JANUARI',
                '02' => 'FEBRUARI',
                '03' => 'MARET',
                '04' => 'APRIL',
                '05' => 'MEI',
                '06' => 'JUNI',
                '07' => 'JULI',
                '08' => 'AGUSTUS',
                '09' => 'SEPTEMBER',
                '10' => 'OKTOBER',
                '11' => 'NOVEMBER',
                '12' => 'DESEMBER',
        );
    ?>

    Padang, <?php echo date('d').' '.(strtolower($bulan[date('m')])).' '.date('Y') ?></td>
  </tr>
  <tr>
    <td align="center"><br /><br /><br /><br /><br />
     <br /><br /><br /></td>
    <td>&nbsp;</td>
    <td align="center" valign="top"><br /><br /><br /><br /><br />
      ( ...................... )<br />
    </td>
  </tr>
  
  
</table>
</body>
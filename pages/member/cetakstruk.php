
<?php
include '../../model/M_Library.php';
$db = new M_Library();
?>


<body onLoad="window.print()">
<p align="center">UD. DWI PUTRA</p>
<center>Faktur Pembelian Bibit Sawit</center>


<hr>

</br>

<?php
$bayar =0;
foreach($db->tampil_ord_member($_GET['id']) as $mm): 
  $ongkir =  $mm->ongkos_kirim ;

?>
 
<table width="80%" border="0" align="center">
  <tr>
    <td width="19%">ID Order </td>
    <td width="41%">: <?= $mm->transaksi_id ?></td>
  </tr>
  <tr>
    <td width="19%">Tanggal mmer </td>
    <td width="41%">: <?= $mm->tgl_pesan ?></td>
  </tr>
  <tr>
    <td width="19%">Nama Customer</td>
    <td width="41%">: <?= $mm->member_nama  ?></td>
  </tr>
  <tr>
    <td width="19%">Alamat Customer</td>
    <td width="41%">: <?= $mm->member_alamat  ?></td>
  </tr>
  <tr>
    <td width="19%">No Telp/HP</td>
    <td width="41%">: <?= $mm->member_nohp  ?></td>
  </tr>
</table>

<?php  endforeach ?>
<table width="80%" border="1" align="center"  cellpadding="5" cellspacing="0">
  <tr>
    <td width="5%"><div align="center">No</div></td>
    <td width="16%"><div align="center">Nama Produk</div></td>
    <td width="26%"><div align="center">Harga</div></td>
    <td width="5%"><div align="center">Jumlah</div></td>
    <td width="19%"><div align="center">Sub Total</div></td>
  </tr>
  <?php

  foreach($db->tampil_ord_detail($_GET['id']) as $no=>$d): 
  
  ?>
 
  <tr>
    <td><?= $no+1  ?></td>
    <td><?= $d->produk_nama ?></td>
    <td>Rp. <?= $d->produk_harga?></td>
    <td><?= $d->jumlah_beli ?></td>
    <td>Rp. <?= $d->subtotal ?></td>
  </tr>

<?php endforeach  ?>
  <tr>
    <td colspan="4"><div align="right">Total Pembayaran </div></td>
    <?php
   foreach($db->tampil_ord_totalbayar($_GET['id']) as $total) :
    ?>
    <td>Rp. <?= $total->total ?></td>
    <?php $totalbayar = $total->total  + $ongkir  ?>
    <?php endforeach ?>
  </tr>
  <tr>
    <td colspan="4"><div align="right">Ongkir</div></td>
    <td>Rp. <?= $ongkir  ?></td>
  </tr>
  <tr>
    <td colspan="4"><div align="right">Jumlah Bayar </div></td>
    <td>Rp. <?= $totalbayar ?></td>
  </tr>
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

    Pasaman Barat, <?php echo date('d').' '.(strtolower($bulan[date('m')])).' '.date('Y') ?></td>
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
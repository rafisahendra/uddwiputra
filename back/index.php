
<?php
include 'model/M_admin.php';
$db = new M_admin();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3 align="center">Tampil Data</h3>

<a  href="admin.php"><h5 align="center">+ Tambah Data</h5> </a>

<table border="1" cellspacing="0" align="center">

<tr></tr>
    <th>No</th>
    <th>Nama Admin</th>
 
    <th>Aksi</th>
</tr>
<?php
$no=1;
foreach($db->tampil_admin() as $a ):?>

    <tr> <td><?= $no++ ?></td>
        <td><?= $a->nama_admin ?></td>
        
        <td>
            <a href="controller/AdmController.php?aksi=hapus&id=<?= $a->id_admin ?>">Hapus |</a>
            <a href="edit/v_admin.php?id=<?= $a->id_admin ?>""> Edit</a>
        </td>
    </tr>

    <?php endforeach ?>
</table>
    
</body>
</html>
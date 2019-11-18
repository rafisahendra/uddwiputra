<?php 
include '../model/M_admin.php';
$db = new M_admin();
?>
<?php foreach($db->edit_admin($_GET['id']) as $e) : ?>    
<form action="../controller/AdmController.php?aksi=update" method="POST">
    <div>
    nama admin <br>
     <input type="hidden" name="id" value="<?= $e->id_admin ?>">
    <input type="text" name="nama" value="<?= $e->nama_admin ?>">
    <button type="submit">Update</button>
    </div>
</form>
<?php endforeach ?>
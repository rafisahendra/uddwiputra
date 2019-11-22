<div class="card mb-4 py-2 border-left-info">
	<div class="card-body">
		<?php foreach($db->tampil_admin() as $i): 
		$pass = $i->password ;
		$result_pass =	substr($pass ,53);
			?>
		<form action="../../controller/AdmController.php?aksi=change" method="POST" >
			<div class="row">
				<div class="col-md-2"> </div>
				<div class="col-md-6">
					<div class="form-group ">
						<label>Password lama</label><br>
						<input type="hidden" name="id" value="<?= $_SESSION['id']; ?>">
						<input type="password"  class="form-control" name="passlama" value="<?= $result_pass ?>" readonly>
					</div>
					<div class="form-group ">
						<label>Password Baru</label><br>
						<input type="password" class="form-control" name="passbaru">
					</div>
					<div class="form-group ">
						<label>Konfirmasi Password Baru</label><br>
						<input type="password" class="form-control	" name="konfirmasi" placeholder="">
					</div>
					<div class="form-group">
						<button class="btn btn-info btn-sm " type="submit"><i class="fa fa-key"></i> Simpan</button>
						<a href="index.php" class="btn btn-warning btn-sm ">Batal</a>
					</div>
				</div>

			</div>
	</div>
	</form>
	<?php endforeach ?>
</div>
</div>
<div class="card mb-4 py-2 border-left-info">
	<div class="card-body">
		<h3>Tentang Kami</h3>
		<?php foreach($db->tentang_kami() as $i) :?>

		<form method="POST" action="../../controller/AdmController.php?aksi=tentang">
			<div class="row">
				<div class="col-md-1"> </div>
				<div class="col-md-8">
					<div class="form-group ">
						<label>Judul Informasi</label><br>
						<input type="text" class="form-control" name="judul_informasi"
							value="<?= $i->judul_informasi ?>">
					</div>
					<div class="form-group ">
						<label> Informasi</label><br>
						<textarea name="keterangan" class="note"><?= $i->keterangan ?></textarea>
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
<!DOCTYPE html>
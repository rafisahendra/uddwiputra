<div class="card shadow mb10">
  <div class="card-header py-3">
    <h6 class=" font-weight-bold text-right">Data: Laporan Tahuanan</h6>
  </div>
  <div class=" card-body">
    <div class="table">
      <form action="laporan/cetak_tahun.php" method="POST" target="_blank"> 
        <div class="row">
          <div class="col-md-1"> </div>
          <div class="col-md-4">
            <label for="">Masukan Tahun</label>
            <select name="tahun" class="form-control">
              <?php 
              $v = date('Y'); 
              for ($i=2015; $i <= $v; $i++) { 
                if ($i == $v) {?>
              <option value="<?= $i ?>" selected="selected"><?= $i ?></option>
              <?php }else{  ?>
              <option value="<?= $i ?>"><?= $i ?></option>
              <?php }} ?>
            </select>
          </div>
          <div class="col-md-1">
            <label for="">Aksi</label>
            <button type="submit" name="btn-cetak" class="btn btn-primary"> Cetak</button>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>
</div>
<div class="card shadow mb10">
  <div class="card-header py-3">
    <h6 class=" font-weight-bold text-right">Data: Laporan Bulanan</h6>
  </div>
  <div class=" card-body">
    <div class="table">
      <form action="laporan/cetak_bulan.php" method="POST" target="_blank">
        <div class="row">
          <div class="col-md-1"> </div>
          <div class="col-md-4">
            <label for="">Masukan Bulan</label>
            <select name="bulan" class="form-control">
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
            </select>
            
          </div>
          <div class="col-md-2">
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
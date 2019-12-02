<div class="card shadow mb10">
  <div class="card-header py-3">
    <h6 class=" font-weight-bold text-right">Data: Laporan Harian</h6>
  </div>
  <div class=" card-body">
    <div class="table">
      <form action="laporan/cetak_hari.php" method="POST" target="_Blank">
        <div class="row">
          <div class="col-md-1"> </div>
          <div class="col-md-4">
            <label for="">Masukan Tanggal</label>
            <input type="date" name="tannggal" class="form-control">
          </div>
          <div class="col-md-1">
            <label for="">Aksi</label>
            <input type="submit" name="btn-cetak" value="Cetak" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
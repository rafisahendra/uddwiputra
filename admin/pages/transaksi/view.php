
<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">

  <div class=" card-body">

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th width="10px;">No</th>
              <th>No Order</th>
              <th>Nama Produk</th>
              <th>Nama Pelangan</th>
              <th>Total Bayar</th>
              <th>Tanggal Beli </th>
              <th>Email</th>
              <th width="200px;">Aksi</th>

            </tr>
          </thead>

          <tbody>
            <?php
        $no=1;
        foreach($db->tampil_kategori() as $no=> $d ):?>
            <tr align="center">
              <td><?= $no+1 ?></td>
              <td><?= $d->kategori_nama ?></td>
              <td><?= $d->kategori_nama ?></td>
              <td><?= $d->kategori_nama ?></td>
              <td><?= $d->kategori_nama ?></td>
              <td><?= $d->kategori_nama ?></td>
              <td><?= $d->kategori_nama ?></td>
              <td>
                <button data-toggle="modal" data-target="#exampleModal3<?= $d->kategori_id ?>" class="btn btn-danger btn-sm">Detail</button>
                <button data-toggle="modal" data-target="#exampleModal4<?= $d->kategori_id ?>" class="btn btn-danger btn-sm">Konfirmasi</button>
                <a href="!#" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#exampleModal<?= $d->kategori_id ?>">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="!#" class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#exampleModal2<?= $d->kategori_id ?>">
                  <i class="fas fa-trash" ></i>
                </a>
              </td>
           
                <!-- Modal Hapus-->
             <div class="modal fade" id="exampleModal2<?= $d->kategori_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Hapus Data</h6>
                   
                  </div>
                  <form action="../../controller/AdmController.php?aksi=hapus_kategori&id=<?= $d->kategori_id ?>" method="POST">
                  <div class="modal-body">
                    <label for="">Data yang dihapus tidak dapat di kembalikan, Apakah anda Yakin?</label>
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

              
            <!-- Edit Data-->
            <div class="modal fade" id="exampleModal<?= $d->kategori_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="../../controller/AdmController.php?aksi=update_kategori" method="POST">
                  <div class="modal-body">
                    <label for="">Edit Kategori</label>
                    <input type="hidden" name="id" value="<?= $d->kategori_id ?>">
                  <input type="text" name="nama_k" class="form-control" value="<?php echo $d->kategori_nama ?>">
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info btn-sm">Ubah</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>


              <!-- Detail-->
              <div class="modal fade" id="exampleModal3<?= $d->kategori_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="../../controller/AdmController.php?aksi=update_kategori" method="POST">
                  <div class="modal-body">
                    <label for="">Detail Transaksi</label>
                    
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info btn-sm">Ubah</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>


           
              <!-- Konfirmasi-->
              <div class="modal fade" id="exampleModal4<?= $d->kategori_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="../../controller/AdmController.php?aksi=update_order" method="POST">
                  <div class="modal-body">
                    <label for="">Status Pembayaran: <b>KF</b></label><br>
                    <label for="">Konfirmasi </label>
                    <select name="konfirmasi" id="" class="form-control">
                      <option value="">Pembayaran Diterimaa</option>
                      <option value="">Proses Pengiriman</option>
                    
                    </select>
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm text-left" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info btn-sm text-left">Ganti Status</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>




            </tr>

            <?php endforeach ?>
          </tbody>
        </table>
      </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

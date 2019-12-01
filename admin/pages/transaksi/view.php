
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
              <th>Nama Pelangan</th>
              <th>Status Pesaanan</th>
              <th>Email</th>
              <th>Struk Pembayaran</th>
              <th width="200px;">Aksi</th>

            </tr>
          </thead>

          <tbody>
            <?php
        $no=1;
        foreach($db->tampil_transaksi() as $no=> $d ):?>
            <tr align="center">
              <td><?= $no+1 ?></td>
              <td><?= $d->transaksi_id ?></td>
              <td><?= $d->member_nama ?></td>
              <td><?= $d->status ?></td>
              <td><?= $d->member_email ?></td>
             <td>-</td>
             
              <td>
                <button data-toggle="modal" data-target="#exampleModal3<?= $d->transaksi_id ?>" class="btn btn-danger btn-sm">Detail</button>
                <button data-toggle="modal" data-target="#exampleModal4<?= $d->transaksi_id ?>" class="btn btn-danger btn-sm">Konfirmasi</button>
                </a>
                <a href="!#" class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#exampleModal2<?= $d->transaksi_id ?>">
                  <i class="fas fa-trash" ></i>
                </a>
              </td>
           
                <!-- Modal Hapus-->
             <div class="modal fade" id="exampleModal2<?= $d->transaksi_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Hapus Data</h6>
                   
                  </div>
                  <form action="../../controller/AdmController.php?aksi=hapus_transaksi&id=<?= $d->transaksi_id ?>" method="POST">
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

 

              <!-- Detail-->
              <div class="modal fade" id="exampleModal3<?= $d->transaksi_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <label for="">Detail Transaksi</label><span>: </span>


                    
                  </div>
                  
                
                  </form>
                </div>
              </div>
            </div>


           
              <!-- Konfirmasi-->
              <div class="modal fade" id="exampleModal4<?= $d->transaksi_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="../../controller/AdmController.php?aksi=status_transaksi&id=<?= $d->transaksi_id ?>" method="POST">
                  <div class="modal-body">
                  <label for="">Nama Pelanggan: <b><?= $d->member_nama; ?></b></label><br>
                  <label for="">Tanggal Pesan : <b><?= $d->tgl_pesan; ?></b></label><br>
                   <label for="">Status : <b><?= $d->status; ?></b></label><br>
                    <label for="">Konfirmasi </label>
                    <select name="status" id="" class="form-control">
                      <option value="Pembayaran Diterima">Pembayaran Diterima</option>
                      <option value="Proses Pengiriman">Proses Pengiriman</option>
                    
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

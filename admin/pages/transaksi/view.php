
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
              <?php if($d->status == 'Belum Konfirmasi'){?>
                <td>-</td>
              <?php }else{ ?>
             <td>
             <button data-toggle="modal" data-target="#exampleModal1<?= $d->transaksi_id ?>" class="btn btn-info btn-sm">Lihat Struk</button>
             </td>
              <?php } ?>
          
             
              <td>
              <a href="?module=transaksi/order_detail&id=<?= $d->transaksi_id ?>"class="btn btn-danger btn-sm">Detail</a>
                <?php if($d->status == 'Belum Konfirmasi'){?>
                
               <?php }else{ ?>
                <button data-toggle="modal" data-target="#exampleModal4<?= $d->transaksi_id ?>" class="btn btn-danger btn-sm">Konfirmasi</button>
                
                <?php } ?>
          
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

 
              <!-- Lihat Struk-->
              <div class="modal fade" id="exampleModal1<?= $d->transaksi_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lihat Struk </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="../../controller/AdmController.php?aksi=update_kategori" method="POST">
                 
                  <div  class="modal-body">
                    <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                      <label for="">Nama Pelanggan</label><br>
                      <label for="">Nomor Transaksi</label><br>
                      <hr>
                      <label for="">Bank Pengirim </label><br>
                      <label for="">Atas Nama</label><br>
                      <label for="">Bank Penerima</label><br>
                      <label for="">Tanggal Transfer</label><br>
                      <label for="">Jumlah Transfer</label><br> 
                      <hr>
                      <label for="">Bukti Transfer</label><br> 
                      
                    </div>
                    <div class="col-md-7">
                  
                    <label for=""> : <?= $d->member_nama ?></label><br>
                    <label for=""> : <?= $d->transaksi_id ?></label><br>
                    <hr>
                    <?php
                   foreach($db->tampil_konfirmasi($d->transaksi_id ) as $s):
                   ?>
                    <label for=""> : <?= $s->bank_pengirim ?></label><br>
                    <label for=""> : <?= $s->nama_pengirim ?></label><br>
                    <label for=""> : <?= $s->bank_penerima ?></label><br>
                    <label for=""> : <?= $s->tgl_transfer ?></label><br>
                    <label for=""> : <?= $s->jumlah_transfer ?></label><br>
                    <hr>
                    <img style="width:200px; height:200px;" src="../../images/konfirmasi/<?= $s->bukti_transfer ?>" alt="NO Foto"><br><br>
                    <?php endforeach ?>
                   
                </div>
                    
                  </div>
                  </div>        
                  </div>
                 
                  </form>
                </div>
              </div>
            </div>

              <!-- Detail-->
              <div class="modal fade" id="exampleModal3<?= $d->transaksi_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="../../controller/AdmController.php?aksi=update_kategori" method="POST">
                  <div  class="modal-body">
                  <div class="row">
                    <div class="col-md-1"></div>
                    <div>
                      <label for="">Nomor Transaksi</label><span>: <?= $d->transaksi_id ?></span> <br>
                      <label for="">Nama Pelanggan</label><span>: <?= $d->member_nama ?></span> <br>
                      <label for="">Tanggal Pesan</label><span>: <?= $d->tgl_pesan ?></span> <br>
                      <label for="">Nama Pelanggan</label><span>: <?= $d->member_nama ?></span> <br>
                      <label for="">Nama Pelanggan</label><span>: <?= $d->member_nama ?></span> <br>
                      
                    </div>
                    
                  </div>
                               
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

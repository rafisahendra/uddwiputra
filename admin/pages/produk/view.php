<?php
include '../../model/M_admin.php';
$db = new M_admin();

?>
<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <h6  class=" font-weight-bold text-right">Data: Produk</h6>
    <a href="#" class="btn btn-info btn-icon-split btn-sm">
      <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
      </span>
      <span class="text" data-toggle="modal" data-target="#exampleModal">Tambah</span>
    </a>
  
   
  </div>
  <div class=" card-body">

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th width="10px;">No</th>
              <th>Nama Produk</th>
              <th>Nama Kategori</th>
              <th>Stok Produk</th>
              <th>Keterangan/Detail</th>
              <th width="100px;">Aksi</th>

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
              <td>
                <a href="!#" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#exampleModal<?= $d->produk_id ?>">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="!#" class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#exampleModal2<?= $d->produk_id ?>">
                  <i class="fas fa-trash" ></i>
                </a>
              </td>
           
            <!-- Modal Edit-->
            <div class="modal fade" id="exampleModal<?= $d->kategori_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Edit Data</h6>
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

             <!-- Modal Hapus-->
             <div class="modal fade" id="exampleModal2<?= $d->kategori_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                   
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



            </tr>

            <?php endforeach ?>
          </tbody>
        </table>
      </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
<!-- Modal tambah-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../../controller/AdmController.php?aksi=tambah_kategori" method="POST">
      <div class="modal-body">
        <label for="">Nama Produk</label>
      <input type="text" name="nama_k" class="form-control" placeholder="Nama Kategori">
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-info btn-sm">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class=" font-weight-bold text-right">Data: Produk</h6>
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
            <th>Gambar Produk</th>
            <th>Nama Produk</th>
            <th>Nama Kategori</th>
            <th>Harga Produk</th>
            <th>Stok Produk</th>
            <th>Keterangan/Detail</th>
            <th width="100px;">Aksi</th>

          </tr>
        </thead>

        <tbody>
          <?php
        foreach($db->tampil_produk() as $no=> $d ):?>
          <tr align="center">
            <td><?= $no+1 ?></td>
            <td><img style="width:100px;height:100px;" src="../../images/produk/<?= $d->gambar_produk ?>" alt="No Gambar"></td>
            <td><?= $d->produk_nama ?></td>
            <td><?= $d->kategori_nama ?></td>
            <td>Rp <?= $d->produk_harga ?></td>
            <td><?= $d->produk_stok ?></td>
            
            <td><?= $d->produk_keterangan ?></td>
            <?php   $id_kategori = $d->kategori_id ?>
            <td>
              <a href="!#" class="btn btn-info btn-sm" data-toggle="modal"
                data-target="#exampleModal<?= $d->produk_id ?>">
                <i class="fas fa-edit"></i>
              </a>
              <a href="!#" class="btn btn-warning btn-sm" data-toggle="modal"
                data-target="#exampleModal2<?= $d->produk_id ?>">
                <i class="fas fa-trash"></i>
              </a>
            </td>
                   
             <!-- Modal Hapus-->
             <div class="modal fade" id="exampleModal2<?= $d->produk_id?>" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>

                  </div>
                  <form action="../../controller/AdmController.php?aksi=hapus_produk&id=<?= $d->produk_id ?>"
                    method="POST">
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
            
            <!-- Modal Edit-->
            <div class="modal fade" id="exampleModal<?= $d->produk_id ?>" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Edit Data</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form action="../../controller/AdmController.php?aksi=update_produk" method="POST" enctype="multipart/form-data">
                    
                      <label for="">Nama Produk</label>
                      <input type="text" name="nama_p" class="form-control" value="<?= $d->produk_nama ?>">
                      <input type="hidden" name="id" value="<?= $d->produk_id ?>">
                   
                      <label for="">Nama Kategori</label>
                     <select name="idk" class="form-control" id="">
                    <?php 
                    foreach($db->tampil_kategori() as $img ):?>
                           
                           
                    ?>
                        <option value="<?= $img->kategori_id ?>"><?= $img->kategori_nama?> </option>
                        
                  
                        <?php endforeach ?>
                      </select>

                      <script>     
                    
                    document.getElementsByName("idk")[<?=$no?>].value ="<?= $d->kategori_id ?>";
                  </script>
                    

                   
                      <label for="">Foto Produk: </label>
                      <input type="hidden" name="fuploadlama" value="<?= $d->gambar_produk ?>">
                      <img style="width:50px;height:50px;margin:25px;" src="../../images/produk/<?= $d->gambar_produk ?>" alt="No Foto">
                      <input type="file" name="fupload" class="form-control">
                   
                   <div class="row">
                    <div class="col-sm-5">
                      <label for="">Jumlah Stok </label>
                      <input type="number" name="jumlah_stok" class="form-control" value="<?= $d->produk_stok ?>">
                     
                      </div>
                      <div class="col-sm-5">
                     
                      <label for="">Harga Produk </label>
                      <input type="number" name="harga_p" class="form-control" value="<?= $d->produk_harga?>">
                     </div>
                     </div>
                     
            
                   
                      <label for="">Keterangan</label>
                      <textarea name="keterangan" id="" cols="45" rows="3"><?= $d->produk_keterangan?></textarea>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-info btn-sm">Ubah</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../../controller/AdmController.php?aksi=tambah_produk" method="POST" enctype="multipart/form-data">
          <label for="">Nama Produk</label>
          <input type="text" name="nama_p" class="form-control" placeholder="Nama Kategori" required>
          <label for="">Nama Kategori</label>
          <select name="id_kategori" id="" class="form-control" required>
            <?php      
            foreach($db->tampil_kategori() as $imge ):?>
          ?>
            <option value="<?= $imge->kategori_id ?>"><?= $imge->kategori_nama ?></option>
            <?php endforeach ?>
          </select>
          <label for="">Foto Produk </label>
          <input type="file" name="fupload" class="form-control" required>
          
          <div class="row">
            <div class="col-md-5">
              <label for="">Harga Produk </label>
              <input type="number" name="harga_p" class="form-control" placeholder="Harga Produk" required>
            </div>
            <div class="col-md-5">
              <label for="">Jumlah Stok </label>
              <input type="number" name="jumlah_stok" class="form-control" placeholder="Nama Kategori" required>
            </div>
          </div>
          <label for="">Keterangan</label>
          <textarea name="keterangan" id="" cols="45" rows="3" required ></textarea>
        

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info btn-sm">Simpan</button>
        </div>
      </form>
      </div>

    </div>
  </div>
</div>

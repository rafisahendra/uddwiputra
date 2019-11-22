
<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class=" font-weight-bold text-right">Data: Ongkos Kirim</h6>
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
            <th>Provinsi</th>
            <th>Kabupaten/Kota</th>
            <th>Biaya Kirim</th>
           
            <th width="120px;">Aksi</th>

          </tr>
        </thead>

        <tbody>
          <?php
        $no=1;
        foreach($db->tampil_ongkir() as $no=> $d ):?>
          <tr align="center">
            <td><?= $no+1 ?></td>
           
            <td><?= $d->nama_provinsi ?></td>
            <td><?= $d->nama_kabkota ?></td>
            <td><?= $d->ongkos_kirim ?></td>
            
            <td>
              <a href="!#" class="btn btn-info btn-sm" data-toggle="modal"
                data-target="#exampleModal<?= $d->ongkir_id ?>">
                <i class="fas fa-edit"></i>
              </a>
              <a href="!#" class="btn btn-warning btn-sm" data-toggle="modal"
                data-target="#exampleModal2<?= $d->ongkir_id ?>">
                <i class="fas fa-trash"></i>
              </a>
            </td>
                   
             <!-- Modal Hapus-->
             <div class="modal fade" id="exampleModal2<?= $d->ongkir_id?>" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>

                  </div>
                  <form action="../../controller/AdmController.php?aksi=hapus_ongkir&id=<?= $d->ongkir_id ?>"
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
            <div class="modal fade" id="exampleModal<?= $d->ongkir_id ?>" tabindex="-1" role="dialog"
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
                  <form action="../../controller/AdmController.php?aksi=update_ongkir" method="POST" enctype="multipart/form-data">
                    
                   
                   <label for="">Nama Provinsi</label>
                      <select name="p_id" id="" class="form-control" required>
                        <?php      
                        foreach($db->tampil_provinsi() as $ipro ):?>
                      ?>
                        <option value="<?= $ipro->provinsi_id ?>"><?= $ipro->nama_provinsi ?></option>
                        <?php endforeach ?>
                      </select>
                  
                       <label for="">Nama Kabupaten/Kota</label>
                      <select name="k_id" id="" class="form-control" required>
                        <?php      
                        foreach($db->tampil_kabkota() as $ikbk ):?>
                      ?>
                        <option value="<?= $ikbk->kabkota_id ?>"><?= $ikbk->nama_kabkota ?></option>
                        <?php endforeach ?>
                      </select> 


               

                   <script>      
                        document.getElementsByName("p_id")[<?=$no?>].value ="<?= $d->provinsi_id ?>";   
                        document.getElementsByName("k_id")[<?=$no?>].value ="<?= $d->kabkota_id ?>";
                  </script>


                      <label for="">Ongkos Kirim</label>
                      <input type="hidden" name="id" value="<?= $d->ongkir_id ?>">
                      <input type="number" name="ongkos_k" class="form-control" value="<?= $d->ongkos_kirim ?>" required>
                      
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
      <form action="../../controller/AdmController.php?aksi=tambah_ongkir" method="POST" enctype="multipart/form-data">
         
       <label for="">Nama Provinsi</label>
          <select name="provinsi_id" id="" class="form-control" required>
            <?php      
            foreach($db->tampil_provinsi() as $ipro ):?>
          ?>
            <option value="<?= $ipro->provinsi_id ?>"><?= $ipro->nama_provinsi ?></option>
            <?php endforeach ?>
          </select>
           <label for="">Nama Kabupaten/Kota</label>
          <select name="kabkota_id" id="" class="form-control" required>
            <?php      
            foreach($db->tampil_kabkota() as $ikbk ):?>
          ?>
            <option value="<?= $ikbk->kabkota_id ?>"><?= $ikbk->nama_kabkota ?></option>
            <?php endforeach ?>
          </select> 

          <label for="">Ongkos Kirim</label>
          <input type="number" name="ongkos_k" class="form-control" placeholder="Ongkos Kirim" required>
          

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info btn-sm">Simpan</button>
        </div>
      </form>
      </div>

    </div>
  </div>
</div>






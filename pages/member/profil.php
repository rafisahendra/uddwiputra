

<div class="cart-body">
 <!-- Start All Title Box -->
 <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>My Profile</h2>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <ul class="breadcrumb" style="margin-top:50px;">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Profil</li>
    </ul>
    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">

            <?php foreach($db->member_tampil($_SESSION['member_id']) as $d) : ?>
            <? $provinsi = $d->provinsi_id; endforeach ?>
            <?php if($provinsi == 0) {?>
            <div class="row">

                <div class="col-lg-6">

                    <h2 class="noo-sh-title"> <span>Profil:</h2>
                    <div class="from-group">
                        <label for="">Nama : <?= $d->member_nama ?></label>
                    </div>
                    <div class="from-group">
                        <label for="">Email : <?= $d->member_email   ?></label>
                    </div>
                    <div class="from-group">
                        <label for="">Tanggal Daftar : <?= $d->tgl_daftar ?></label>
                    </div>

                    <div class="from-group">
                        <label for="">Nohp : <?= $d->member_nohp ?></label>
                    </div>


                </div>

                <div class="col-lg-6">

                    <h2 class="noo-sh-title"> <span>Alamat:</h2>

                    <div class="from-group">
                        <label for="">Provonsi : -</label>
                    </div>
                    <div class="from-group">
                        <label for="">Kabupaten/Kota : -</label>
                    </div>


                    <div class="from-group">
                        <label for="">Alamat Lengkap : <?php echo $d->member_alamat ?></label>
                    </div>
                    <div class="from-group">
                        <label for="">Kode Pos : <?= $d->kode_pos ?></label>
                    </div>

                </div>

                <div class="col-lg-1">
                    <button type="button" style="color:#fff" class="btn btn-warning btn-sm" data-toggle="modal"
                        data-target="#exampleModal<?= $d->member_id ?>">
                        <span class="fa fa-plus"></span> Lengkapi Data
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?= $d->member_id ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lengkapi Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="../controller/HomeController.php?aksi=lengkapi_data" method="POST">
                        <div class="modal-body">

                            <label for="">Provinsi</label>
                            <input type="hidden" name="id" value="<?= $d->member_id ?>">
                            <select name="id_provinsi" class="form-control" id="" required>
                                <option value="">--Pilih Provinsi--</option>
                                <?php foreach($db->tampil_provinsi() as $prov) : ?>
                                <option value="<?= $prov->provinsi_id ?>"><?= $prov->nama_provinsi ?></option>
                                <?php endforeach ?>
                            </select>

                            <label for="">kabkota</label>
                            <select name="id_kabkota" class="form-control" id="" required>
                            <option value="">--Pilih kabupaten/Kota--</option>
                                <?php foreach($db->tampil_kabkota() as $kab) : ?>
                                <option value="<?= $kab->kabkota_id ?>"><?= $kab->nama_kabkota ?></option>
                                <?php endforeach ?>
                            </select>

                            <label for="">Alamat</label>
                            <textarea name="alamat" id="" cols="43" rows="3" required></textarea>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nohp</label>
                                    <input type="text" name="nohp" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Kode Pos</label>
                                    <input type="number" name="kode_pos" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
            <!--  2-->
            <?php foreach($db->member_tampilpk($_SESSION['member_id']) as $dpk) : ?>
            <div class="row">

                <div class="col-lg-6">

                    <h2 class="noo-sh-title"> <span>Profil:</h2>
                    <div class="from-group">
                        <label for="">Nama : <?= $dpk->member_nama ?></label>
                    </div>
                    <div class="from-group">
                        <label for="">Email : <?= $dpk->member_email   ?></label>
                    </div>
                    <div class="from-group">
                        <label for="">Tanggal Daftar : <?= $d->tgl_daftar ?></label>
                    </div>

                    <div class="from-group">
                        <label for="">Nohp : <?= $d->member_nohp ?></label>
                    </div>

                </div>

                <div class="col-lg-6">

                    <h2 class="noo-sh-title"> <span>Alamat:</h2>



                    <div class="from-group">
                        <label for="">Provonsi : <?= $dpk->nama_provinsi ?></label>
                    </div>
                    <div class="from-group">
                        <label for="">Kabupaten/Kota : <?= $dpk->nama_kabkota ?></label>
                    </div>

                    <div class="from-group">
                        <label for="">Alamat Lengkap : <?php echo $dpk->member_alamat ?></label>
                    </div>
                    <div class="from-group">
                        <label for="">Kode Pos : <?= $dpk->kode_pos ?></label>
                    </div>

                </div>

                <div class="col-lg-1">
                    <button type="button" style="color:#fff" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#exampleModal2">
                        <span class="fa fa-plus"></span> Edit Data
                    </button>
                </div>
            </div>


            <!-- Modal  2-->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            <?php } ?>
        </div>
    </div>
    <!-- End About Page -->
</div>
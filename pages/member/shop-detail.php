<?php // var_dump($_POST['id_produk']) ?>
<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Shop Detail</h2>

            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Shop</a></li>
    <li class="breadcrumb-item active">Shop Detail </li>
</ul>
<!-- Start Shop Detail  -->
<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <?php  foreach($db->produk_detail($_POST['id_produk']) as $detail): ?>
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"> <img class="d-block w-100"
                                src="../images/produk/<?= $detail->gambar_produk ?>" alt="First slide"> </div>

                    </div>


                </div>
            </div>


            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="single-product-details">
                    <h2><?= $detail->produk_nama ?></h2>
                    <h5> Rp <?= number_format($detail->produk_harga,2) ?></h5>
                    <!-- <h5> <del>$ 60.00</del>Rp.</h5> -->

                    <h4>Description:</h4>
                    <p><?= $detail->produk_keterangan ?> </p>
                    <ul>

                        <li>
                        <form method="POST" action="../controller/HomeController.php?aksi=tambah_keranjang">
                            <div class="form-group quantity-box">
                                <label class="control-label">Quantity</label>
                                <input class="form-control" name="beli" min="0" max="20" placeholder="hanya angka" type="number" required>
                                <span class="available-stock"> Jumlah Stok : 20 Tersedia <a href="#"> </a></span>

                            </div>


                </div>
                </li>
                </ul>

                <div class="price-box-bar">
                    <div class="cart-and-bay-btn">
                      
                            <input type="hidden" name="id_produk" value="<?= $detail->produk_id?>">
                            <input type="hidden" name="id_member" value="<?= $_SESSION['member_id']?>">
                            <a href="#!" class="cart">
                                <button style="color:white" type="submit" data-fancybox-close="" class="btn hvr-hover"
                                    name="btn_beli"><span class="fa fa-check"> </span> Beli Sekarang</button></a>

                            <a href="#!" class="cart">
                                <button style="color:white" type="submit" data-fancybox-close="" class="btn hvr-hover"
                                    name="btn_cart"><span class="fab fa-opencart"></span> Masukan Keranjang</button>
                        </form>

                        <form>

                            <a href="#!" class="cart">
                                <input type="hidden"></input>
                            </a>
                        </form>


                    </div>

                </div>
            </div>
            <?php endforeach ?>

        </div>

        <div class="row my-5">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Featured Produk</h1>
                    <p>Pembibitan sawit unggul UD. Dwi Putra</p>
                </div>
                <div class="featured-products-box owl-carousel owl-theme">
                    <?php foreach($db->tampil_produk8() as $no => $p):?>
                    <div class="item" style="margin-left:10px;">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img style="width:220px;height:250px;" src="../images/produk/<?= $p->gambar_produk ?>"
                                    class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i
                                                    class="fas fa-eye"></i></a></li>
                                    </ul>
                                    <!-- Button trigger modal -->
                                    <form method="POST" action="?page=member/shop-detail">
                                        <input type="hidden" name="id_produk" value="<?= $p->produk_id?>">
                                        <a href="#!" class="cart">
                                            <button type="submit" class="btn-sm"
                                                style="background-color:#d33b33; color:#fff" name="add"> Lihat
                                                Detail</button>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4><?= $p->produk_nama ?></h4>
                                <h5>Rp <?= number_format($p->produk_harga,2) ?></h5>
                            </div>
                        </div>
                    </div>

                    <?php endforeach ?>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Cart -->
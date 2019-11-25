   <!-- Start All Title Box -->
   <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Keranjang</h2>
                  
                </div>
            </div>
        </div>
    </div>
    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="indexs.php?page=member/produk">Shop</a></li>
                        <li class="breadcrumb-item active">Keranjang</li>
                    </ul>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
        <div class="row ">
                <div class="col-lg-6 col-sm-6">              
                <div><a  href="indexs.php?page=member/produk" style="margin-bottom:5px;color:white" class=" btn btn-sm hvr-hover"> <span class="fa fa-shopping-bag"></span> Tambah Belanja</a> </div>                             
                </div>
            
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="table-main table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Gambar Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Jumlah Beli</th>
                                    <th>Total</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                           <?php 
                           $hasil=0;
                           foreach($db->tampil_keranjang($_SESSION['member_id']) as $i=> $k): ?>
                            <? $subtotal = $k->produk_harga * $k->jumlah_beli ?>


                         
                            <?php $hasil = $hasil += $subtotal ; ?>
           
                           
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" style="height:70px;width:70px;" src="../images/produk/<?= $k->gambar_produk ?>" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
                                        <?= $k->produk_nama ?>
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p>Rp <?=number_format($k->produk_harga,2) ?></p>
                                    </td>
                                    </td>
                                    <td class="price-pr">
                                        <p><?= $k->jumlah_beli ?></p>
                                    </td>
                                    <!-- <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td> -->
                                    <td class="total-pr">
                                        <p>Rp <?= number_format($subtotal,2) ?></p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="../controller/HomeController.php?aksi=hapus_keranjang&id=<?= $k->keranjang_id ?>"> 
                                    
									<i class="fas fa-times"></i>
								</a>
                                    </td>
                                </tr>
                               
                            <?php endforeach ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-12" >
                    <div class="order-box" >
                        <h3>Order Detail</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold">Rp <?= $hasil ?> </div>
                        </div>
                        <div class="d-flex">

                        <?php foreach($db->member_tampil($_SESSION['member_id']) as $dpk) : ?>
                            <?php
                                $prov = $dpk->provinsi_id;
                                $kabkota = $dpk->kabkota_id;                   
                            ?>
                        <?php endforeach ?>
                            <h4>Ongkos Kirim</h4>
                            <?php foreach($db->ongkos_kirim($prov,$kabkota) as $o) :?>
                            <div class="ml-auto font-weight-bold">Rp <?= $o->ongkos_kirim ?></div>
                            <?php endforeach ?>
                        </div>
                        <hr class="my-1">
                       
                        <div class="d-flex">
                            <h4>Pesan</h4> <br>
                            <input type="text" class="form-group ml-auto font-weight-bold   ">
                           
                        </div>
                       
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Total keseluruhan</h5>
                            <div class="ml-auto h5">Rp <?= $hasil + $o->ongkos_kirim ?></div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">Checkout</a> </div>
        
            </div>

        

         

        </div>
    </div>
    <!-- End Cart -->

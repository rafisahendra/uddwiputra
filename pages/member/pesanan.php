   <!-- Start All Title Box -->
   <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Daftar Pembelian</h2>
                  
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
                <!-- <div class="col-lg-6 col-sm-6">               -->                          
                </div>
            
            </div>
            <div class="row">
    <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class=" table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nomor Pemesanan</th>
                                    <th>Nama pemesan</th>
                                    <th>Tanggal Order</th>
                                    <th>Total Belanja</th>
                                    <th>Status Pemesanan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                           <?php 
                           $hasil=0;
                           foreach($db->tampil_keranjang($_SESSION['member_id']) as $i=> $k): ?>
                            <? $subtotal = $k->produk_harga * $k->jumlah_beli ?>
                            <?php $hasil = $hasil += $subtotal ; 
                            
                            $krr = $db->jumlah_keranjang($_SESSION['member_id']);
                            if($krr == NULL ){
                                ?>
                               <tr>
                               <td><?= 'Keranjang Belanja Kosong, Silahkan Pilih Produk Dan belanja'?></td>
                               </tr>
                               <?php
                            }else{ ?>
           
                           
                                <tr>
                                    <td><?= $i+1; ?></td>
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
                                <?php } ?>
                            <?php endforeach ?>

                        
                            
                            </tbody>
                        </table>
                    </div>
                </div>
               </form>
        
            </div>

        

         

        </div>
    </div>
    <!-- End Cart -->

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
                           foreach($db->daftar_pembelian($_SESSION['member_id']) as $i=> $k): ?>
                        
                         
                                <tr>
                                    <td><?= $i+1; ?></td>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<?= $k->transaksi_id?>
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
                                        <?= $k->member_nama ?>
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p> <?= $k->tgl_pesan ?></p>
                                    </td>
                                    </td>
                                    <td class="price-pr">
                                        <p><?= $k->total_bayar ?></p>
                                    </td>
                                
                                    <td class="total-pr">
                                        <p><?= $k->status ?></p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="../controller/HomeController.php?aksi=hapus_keranjang&id=<?= $k->keranjang_id ?>"> 
                                    
									<i class="fas fa-print"> Cetak</i>
								</a>
                                    </td>
                                </tr>
                            
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

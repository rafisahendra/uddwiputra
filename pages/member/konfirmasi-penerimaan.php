

   <!-- Start All Title Box -->
   <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Konfimasi Diterima</h2>
                  
                </div>
            </div>
        </div>
    </div>
    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="indexs.php?page=member/produk">Shop</a></li>
                        <li class="breadcrumb-item active">Konfirmasi Penerimaan</li>
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
                  <h3 style="color:red;">* Tolong lakukan konfirmasi jika pesanan telah sampai dimpat</h3>
                    <div class=" table-responsive">
                        <table class="table " >
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
                        
                         <?php if($k->status == "Proses Pengiriman"){?>
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
                                      <form action="../controller/HomeController.php?aksi=pesanan_diterima" method="POST">
                                        <input type="hidden" name="id" value="<?= $k->transaksi_id ?>">
                                        <input type="hidden" name="status" value="Pesanan Diterima">
                                        <button type="submit" class="btn btn-info btn-sm">Konfirmasi <br> Pesanan Diterima</button>
                                      </form>
                                    </td>
                                </tr>
                         <?php }else{ ?>

                          <tr>
                           
                          <td colspan="7" align="center"> <i > <h3> "Belum ada Pesanan "</h3></i> </td>
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

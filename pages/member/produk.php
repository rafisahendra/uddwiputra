  <!-- Start Products  -->
  <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Featured Produk</h1>
                        <p>Pembibitan sawit unggul UD. Dwi Putra</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                          
                            <?php  
                             foreach($db->tampil_kategori() as $i => $k ):
                             
                             ?>
                              
                            <button data-filter=".<?= $k->kategori_id ?>"><?= $k->kategori_nama ?></button>
                            <?php endforeach ?>
                          
                           
                        </div>
                    </div>
                </div>
            </div>

           
            <div class="row special-list">
            <?php foreach($db->tampil_produk8() as $no => $p):?>
                
                <div class="col-lg-3 col-md-6 special-grid <?= $p->kategori_id  ?>">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img style="width:220px;height:250px;" src="../images/produk/<?= $p->gambar_produk ?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>

 

                                   <!-- Button trigger modal -->
                                <a href="#!" class="cart" data-toggle="modal" data-target="#exampleModal">
                                Add To Cart
                                </a>
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
    <!-- End Products  -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Warning !!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maaf anda harus Login Terlebih Dahulu.
      </div>
      <div class="modal-footer">
        <button type="button" a class="btn btn-info" data-dismiss="modal">Mengerti</button>
      </div>
    </div>
  </div>
</div>
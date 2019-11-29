   <!-- Start All Title Box -->
   <div class="all-title-box">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <h2>Konfirmasi Pembayaran</h2>

               </div>
           </div>
       </div>
   </div>
   <ul class="breadcrumb">
       <li class="breadcrumb-item"><a href="indexs.php?page=member/produk">Shop</a></li>
       <li class="breadcrumb-item active">Konfirmasi Pembayaran</li>
   </ul>
   <!-- End All Title Box -->

   <!-- Start Cart  -->
   <div class="contact-form-right">
       <div class="container">
           <div class="row">
               <div class="col-lg-4">

                   <div class="form-group">

                       <input type="text" class="form-control" placeholder="Cek Nomor Pesanan" id="noorder"
                           name="noorder">
                   </div>


               </div>
               <div class="col-lg-5">
                   <button onclick="cek_no_order()" class="btn btn-sm btn-danger "> <span class="fa fa-check"></span>
                       Cek
                       Order</button>
               </div>

           </div>


           <div class="row">
               <div class="col-lg-6">
                   <form action="../controller/HomeController.php?aksi=konfirmasi" method="POST" enctype="multipart/form-data">

                       <div class="form-group">
                           <label for="">Atas Nama <span id="namaorder"></span> </label>

                       </div>
                       <div class="form-group">
                           <label for="">Tanggal Order <span id="tglorder"></span> </label>

                       </div>
                       <div class="form-group">
                           <label for="">Total Pembayaran <span id="totalbelanja"></span> </label>

                       </div>
                       <div class="form-group">
                           <label for="">Status Pesanan <span id="status_ord"></span> </label>

                       </div>
                       <div class="form-group">
                           <button type="submit" class="btn btn-sm btn-info"><span class="fa fa-envelope"></span>
                               Konfirmasi Pembayaran</button>
                       </div>

               </div>
               <div class="col-lg-6">
                   <div class="form-group">
                       <label for="">Nama Pengirim</label>
                       <input type="hidden" id="transaksi_id" name="transaksi_id">
                       <input type="text" class="form-control" placeholder="Nama Pengirim" name="nama" required>
                   </div>
                   <div class="row">
                       <div class="col-sm-6">

                           <div class="form-group">
                               <label for="">Bank Pengirim</label>
                               <input type="text" class="form-control" placeholder="Bank Pengirim" name="b_pengirim" required>
                           </div>
                       </div>
                       <div class="col-sm-6">
                           <div class="form-group">
                               <label for="">Bank Penerima</label>
                               <input type="text" class="form-control" placeholder="Bank Penerima" name="b_penerima" required>
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-sm-6">
                           <div class="form-group">
                               <label for="">jumlah Kirim</label>
                               <input type="number" class="form-control" name="j_kirim" required>
                           </div>
                       </div>

                       <div class="col-sm-6">
                           <div class="form-group">
                               <label for="">Tanggal Transfer</label>
                               <input type="date" class="form-control" placeholder="" name="tanggal" required>

                           </div>

                       </div>


                   </div>
                   <div class="form-group">

                       <label for="">Bukti Transfer</label>
                       <input type="file" class="form-control" placeholder="" name="bukti" required>
                   </div>

                   </form>
               </div>


           </div>


       </div>
   </div>
   <!-- End Cart -->

   <script src="../asset/js/konfirmasi.js"></script>
 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon ">
          <img src="../../images/logo/mm.png" width="50px">
        </div>
        <div class="sidebar-brand-text mx-3">Administrator<sup></sup></div>
        
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-table"></i>
          <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu Data</h6>
            <a class="collapse-item" href="?module=kategori/view">Kategori</a>
            <a class="collapse-item" href="?module=produk/view">Produk</a>
            <a class="collapse-item" href="?module=ongkir/view">Ongos Kirim</a>
                      <a class="collapse-item" href="?module=transaksi/view">Transaksi</a>
          </div>
        </div>
      </li>

          <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="true" aria-controls="collapseTwo3">
          <i class="fas fa-fw fa-list"></i>
          <span>Informasi</span>
        </a>
        <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo3" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Informasi</h6>
            <a class="collapse-item" href="?module=tentang/view">Tentang Kami</a>
           <a class="collapse-item" href="?module=informasi/view">Cara Pemesanan</a>
          </div>
        </div>
      </li>



      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw  fa-calendar"></i>
          <span>Laporan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Laporan</h6>
           <!--  <a class="collapse-item" href="utilities-color.html">Laporan Produk</a> -->
            <a class="collapse-item" href="utilities-border.html">Laporan Harian</a>
            <a class="collapse-item" href="utilities-animation.html">Laporan Bulanan</a>
            <a class="collapse-item" href="utilities-other.html">Laporan Tahunan</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

    
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="?module=home/change-password">
          <i class="fas fa-fw fa-lock"></i>
          <span>Ubah Password</span></a>
      </li>

   

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-book"></i>
         </div>
         <div class="sidebar-brand-text mx-3">PERPUSTAKAAN</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">



     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Data Master
     </div>
     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="/dashboard">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-users"></i>
             <span>Anggota</span></a>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Menu Anggota</h6>
                 <a class="collapse-item" href="/members/add">Daftar Anggota</a>
                 <a class="collapse-item" href="/members/list">List Anggota</a>
                 <a class="collapse-item" href="/members/denda">Denda Anggota</a>
             </div>
         </div>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
             <i class="fas fa-fw fa-book"></i>
             <span>Buku</span>
         </a>
         <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Menu Buku</h6>
                 <a class="collapse-item" href="/katalog/list">Data Buku</a>
                 <a class="collapse-item" href="/katalog/daftar_pinjaman">Daftar Pinjaman</a>
                 <a class="collapse-item" href="/katalog/pinjam_buku">Pinjam Buku</a>
                 <a class="collapse-item" href="/katalog/kembali_buku">Kembalikan Buku</a>
             </div>
         </div>
     </li>


     <li class="nav-item">
         <a class="nav-link" href="#">
             <i class="fas fa-fw fa-user"></i>
             <span>Petugas</span></a>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Admin
     </div>

     <li class="nav-item">
         <a class="nav-link" href="#">
             <i class="fas fa-fw fa-chart-bar"></i>
             <span>Transaksi</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="#">
             <i class="fas fa-fw fa-bell"></i>
             <span>Notifikasi</span></a>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->
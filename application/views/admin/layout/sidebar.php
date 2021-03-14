<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand mt-2" align="pull left">
       <img src="../assets/stisla/assets/img/umk/android-chrome-192x192.png" height="65px" width="65px" alt="logo" >
            <h6>Portal Skripsi <br> Sistem Informasi</h6>
    </div>

    <div class="sidebar-brand sidebar-brand-sm" align="center">
      <a href="../assets/stisla/assets/stisla/pages/index.html">PS</a>
    </div>
    
    <hr>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>

      <li <?php echo $this->uri->segment(2) == 'dasbor' ? 'class="active"' : '' ?>>
        <a class="nav-link" href="<?php echo base_url('admin/dasbor') ?>"><i class="fas fa-fire"></i> 
          <span>Halaman Utama</span>
        </a>      
      </li>          
      <li class="menu-header">Master</li>
      <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'user' || $this->uri->segment(2) == 'add' ? 'active' : '' ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-users"></i>
          <span>Pengguna</span>
        </a>
        <ul class="dropdown-menu">
         <li <?php echo $this->uri->segment(2) == 'user' ? 'class="active"' : '' ?>>
          <a class="nav-link" href="<?php echo base_url('admin/user') ?>">
            <i class="fas fa-table"></i> 
            <span>Data Pengguna</span>
          </a>
        </li>
         <li <?php echo $this->uri->segment(2) == 'add' ? 'class="active"' : '' ?>>
          <a class="nav-link" href="<?php echo base_url('admin/admin/add') ?>">
            <i class="far fa-square"></i>
            <span>Tambah User</span>
          </a>
        </li>
       </ul>
     </li>
   </ul>       
 </aside>
</div>

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?php echo $title ?></h1>
    </div>
    <div class="section-body">
     <h2 class="section-title">Advanced Forms</h2>
     <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>
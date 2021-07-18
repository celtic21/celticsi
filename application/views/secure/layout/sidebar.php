<!-- ambil semua akses yg ada ditable -->
<?php 
$sql ="SELECT * FROM tauth where Iduser =  ".$this->session->userdata('UserId'); 
$auth = $this->db->query($sql);

// echo "<pre>";
// print_r ($query->result());
// exit();
?>

<!-- ambil level yang aktif -->
<?php 
$sql1 ="SELECT UserLevelAktif FROM tuser where UserId =  ".$this->session->userdata('UserId'); 
$level = $this->db->query($sql1)->row_array();

 ?>

<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand mt-2">
       <img src="<?php echo base_url() ?>assets/img/umk/android-chrome-192x192.png" height="65px" width="65px" alt="logo" >
            <h6>Portal Skripsi <br> Sistem Informasi</h6>
    </div>

    <div class="sidebar-brand sidebar-brand-sm" align="center">
      <a href="<?php echo base_url() ?>assets/stisla/pages/index.html">PS</a>
    </div>
    
    <hr>
    <ul class="sidebar-menu">
      <li <?php echo $this->uri->segment(2) == 'dasbor' ? 'class="active"' : '' ?>>
        <a class="nav-link" href="<?php echo base_url('secure/dasbor/'.$level['UserLevelAktif']) ?>"><i class="fas fa-fire"></i> 
          <span>Halaman Utama</span>
        </a>      
      </li>

   



<li class="menu-header">MENU <?php echo $level['UserLevelAktif'] ?></li>

<!-- Koordinator -->
<?php if ($level['UserLevelAktif'] == 'koordinator') { ?>
   

       <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'master' || $this->uri->segment(2) == 'add' ? 'active' : '' ?>">
        <a href="" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-database"></i>
          <span>Master</span>
        </a>
        <ul class="dropdown-menu">
         <li <?php echo $this->uri->segment(3) == 'dosen' ? 'class="active"' : '' ?>>
         <a class="nav-link" href="<?php echo base_url('secure/master/dosen') ?>"><i class="fas fa-user-tie"></i>
            <span>Dosen</span>
          </a>
        </li>
         <li <?php echo $this->uri->segment(3) == 'operator' ? 'class="active"' : '' ?>>
           <a class="nav-link" href="<?php echo base_url('secure/master/operator') ?>"><i class="fas fa-user-astronaut"></i> 
            <span>Operator</span>
          </a>
        </li>
          <li <?php echo $this->uri->segment(3) == 'mahasiswa' ? 'class="active"' : '' ?>>
           <a class="nav-link" href="<?php echo base_url('secure/master/mahasiswa') ?>"><i class="fas fa-user-graduate"></i> 
            <span>Mahasiswa</span>
          </a>
        </li>
        </ul>
        </li>

      <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'skripsi' || $this->uri->segment(2) == 'add' ? 'active' : '' ?>">
        <a href="" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-graduation-cap"></i>
          <span>Skripsi</span>
        </a>
        <ul class="dropdown-menu">
         <li <?php echo $this->uri->segment(3) == 'judul_skripsi' ? 'class="active"' : '' ?>>
         <a class="nav-link" href="<?php echo base_url('secure/skripsi/judul_skripsi') ?>"><i class="fas fa-font"></i>
            <span>Judul Skripsi</span>
          </a>
        </li>
         <li <?php echo $this->uri->segment(3) == 'pengajuan_judul' ? 'class="active"' : '' ?>>
           <a class="nav-link" href="<?php echo base_url('secure/skripsi/pengajuan_judul') ?>"><i class="fas fa-file-alt"></i> 
            <span>Daftar Judul Skripsi</span>
          </a>
        </li>
          <li <?php echo $this->uri->segment(3) == 'upload_manuskrip' ? 'class="active"' : '' ?>>
           <a class="nav-link" href="<?php echo base_url('secure/skripsi/pengajuan_judul') ?>"><i class="fas fa-file-upload"></i> 
            <span>Upload Manuskrip</span>
          </a>
        </li>
        </ul>
        </li>

        <li <?php echo $this->uri->segment(3) == 'bagi_dosen' ? 'class="active"' : '' ?>>
        <a class="nav-link" href="<?php echo base_url('secure/bimbingan/bagi_dosen') ?>"><i class="fas fa-user-tie"></i> 
          <span>Bagi Pembimbing</span>
        </a>      
      </li>

        <li <?php echo $this->uri->segment(2) == 'jadwal' ? 'class="active"' : '' ?>>
        <a class="nav-link" href="<?php echo base_url('secure/jadwal') ?>"><i class="fas fa-calendar-alt"></i> 
          <span>Jadwal seminar/sidang</span>
        </a>      
      </li>

        <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'skripsi' || $this->uri->segment(2) == 'add' ? 'active' : '' ?>">
        <a href="" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-star"></i>
          <span>Nilai Sidang</span>
        </a>
        <ul class="dropdown-menu">
         <li <?php echo $this->uri->segment(3) == 'seminar' ? 'class="active"' : '' ?>>
         <a class="nav-link" href="<?php echo base_url('secure/nilai/seminar') ?>"><i class="fas fa-font"></i>
            <span>Seminar Proposal</span>
          </a>
        </li>
         <li <?php echo $this->uri->segment(3) == 'sidang' ? 'class="active"' : '' ?>>
           <a class="nav-link" href="<?php echo base_url('secure/nilai/sidang') ?>"><i class="fas fa-file-alt"></i> 
            <span>Sidang Skripsi</span>
          </a>
        </li>
          <li <?php echo $this->uri->segment(3) == 'sidang_ulang' ? 'class="active"' : '' ?>>
           <a class="nav-link" href="<?php echo base_url('secure/nilai/sidang_ulang') ?>"><i class="fas fa-file-alt"></i> 
            <span>Sidang Ulang</span>
          </a>
        </li>
        </ul>
        </li>

        <li <?php echo $this->uri->segment(2) == 'laporan' ? 'class="active"' : '' ?>>
        <a class="nav-link" href="<?php echo base_url('secure/laporan') ?>"><i class="fas fa-chart-bar"></i> 
          <span>Laporan</span>
        </a>      
      </li>

       <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'profil' || $this->uri->segment(2) == 'add' ? 'active' : '' ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-user-circle"></i>
          <span>Profil</span>
        </a>
        <ul class="dropdown-menu">
         <li <?php echo $this->uri->segment(2) == 'profil' ? 'class="active"' : '' ?>>
         <a class="nav-link" href="<?php echo base_url('secure/profil') ?>"><i class="fas fa-id-card-alt"></i>
            <span>Data Diri</span>
          </a>
        </li>
         <li <?php echo $this->uri->segment(2) == 'add' ? 'class="active"' : '' ?>>
           <a class="nav-link" href="<?php echo base_url('secure/dasbor') ?>"><i class="fas fa-lock"></i> 
            <span>Ubah Password</span>
          </a>
        </li>
       </ul>
     </li>
      


<?php } ?>


<!-- Dosen -->
<?php if ($level['UserLevelAktif'] == 'dosen') { ?>
      <li <?php echo $this->uri->segment(3) == 'mhs' ? 'class="active"' : '' ?>>
        <a class="nav-link" href="<?php echo base_url('secure/bimbingan/mhs') ?>"><i class="fas fa-scroll"></i> 
          <span>Bimbingan</span>
        </a>      
      </li>
      <li <?php echo $this->uri->segment(3) == 'bimbingan' ? 'class="active"' : '' ?>>
        <a class="nav-link" href="<?php echo base_url('secure/bimbingan/dasbor') ?>"><i class="fas fa-scroll"></i> 
          <span>Mahasiswa Bimbingan</span>
        </a>      
      </li>

        <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'profil' || $this->uri->segment(2) == 'add' ? 'active' : '' ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-user-circle"></i>
          <span>Profil</span>
        </a>
        <ul class="dropdown-menu">
         <li <?php echo $this->uri->segment(2) == 'profil' ? 'class="active"' : '' ?>>
         <a class="nav-link" href="<?php echo base_url('secure/profil') ?>"><i class="fas fa-id-card-alt"></i>
            <span>Data Diri</span>
          </a>
        </li>
         <li <?php echo $this->uri->segment(2) == 'add' ? 'class="active"' : '' ?>>
           <a class="nav-link" href="<?php echo base_url('secure/dasbor') ?>"><i class="fas fa-lock"></i> 
            <span>Ubah Password</span>
          </a>
        </li>
       </ul>
     </li>

  <?php } ?>


<!-- Kaprodi -->
<?php if ($level['UserLevelAktif'] == 'kaprodi') { ?>


      <li <?php echo $this->uri->segment(2) == 'monitoring' ? 'class="active"' : '' ?>>
        <a class="nav-link" href="<?php echo base_url('secure/monitoring') ?>"><i class="fas fa-tv"></i> 
          <span>Monitoring</span>
        </a>      
      </li>

      <li <?php echo $this->uri->segment(2) == 'laporan' ? 'class="active"' : '' ?>>
        <a class="nav-link" href="<?php echo base_url('secure/laporan') ?>"><i class="fas fa-chart-bar"></i> 
          <span>Laporan</span>
        </a>      
      </li>

       <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'profil' || $this->uri->segment(2) == 'add' ? 'active' : '' ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-user-circle"></i>
          <span>Profil</span>
        </a>
        <ul class="dropdown-menu">
         <li <?php echo $this->uri->segment(2) == 'profil' ? 'class="active"' : '' ?>>
         <a class="nav-link" href="<?php echo base_url('secure/profil') ?>"><i class="fas fa-id-card-alt"></i>
            <span>Data Diri</span>
          </a>
        </li>
         <li <?php echo $this->uri->segment(2) == 'add' ? 'class="active"' : '' ?>>
           <a class="nav-link" href="<?php echo base_url('secure/dasbor') ?>"><i class="fas fa-lock"></i> 
            <span>Ubah Password</span>
          </a>
        </li>
       </ul>
     </li>

  <?php } ?>


<!-- Operator -->
  <?php if ($level['UserLevelAktif'] == 'operator') { ?>
 

      <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'berkas' || $this->uri->segment(2) == 'add' ? 'active' : '' ?>">
        <a href="" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-tasks"></i>
          <span>Cek Berkas</span>
        </a>
        <ul class="dropdown-menu">
         <li <?php echo $this->uri->segment(3) == 'pendaftaran' ? 'class="active"' : '' ?>>
         <a class="nav-link" href="<?php echo base_url('secure/berkas/pendaftaran') ?>"><i class="fas fa-file-alt"></i>
            <span>Pendaftaran</span>
          </a>
        </li>
         <li <?php echo $this->uri->segment(3) == 'seminar' ? 'class="active"' : '' ?>>
           <a class="nav-link" href="<?php echo base_url('secure/berkas/seminar') ?>"><i class="fas fa-file-alt"></i> 
            <span>Seminar Proposal</span>
          </a>
        </li>
          <li <?php echo $this->uri->segment(3) == 'sidang' ? 'class="active"' : '' ?>>
           <a class="nav-link" href="<?php echo base_url('secure/berkas/sidang') ?>"><i class="fas fa-file-alt"></i> 
            <span>Sidang Skripsi</span>
          </a>
        </li>
        </ul>
        </li>

        <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'profil' || $this->uri->segment(2) == 'add' ? 'active' : '' ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-user-circle"></i>
          <span>Profil</span>
        </a>
        <ul class="dropdown-menu">
         <li <?php echo $this->uri->segment(2) == 'profil' ? 'class="active"' : '' ?>>
         <a class="nav-link" href="<?php echo base_url('secure/profil') ?>"><i class="fas fa-id-card-alt"></i>
            <span>Data Diri</span>
          </a>
        </li>
         <li <?php echo $this->uri->segment(2) == 'add' ? 'class="active"' : '' ?>>
           <a class="nav-link" href="<?php echo base_url('secure/dasbor') ?>"><i class="fas fa-lock"></i> 
            <span>Ubah Password</span>
          </a>
        </li>
       </ul>
     </li>
  <?php } ?>     

 <?php 
  if(count($auth->result())>1){
?>
  <li class="menu-header">Hak Akses</li>

<?php
    foreach ($auth->result() as $key => $akses) {
      $active = $level['UserLevelAktif'] == $akses->Namalevel ? 'class="active"' : '';
   
?>
      <li <?php echo $active ?>>
        <a class="nav-link" href="<?php echo base_url('secure/akses/auth/'.$akses->Namalevel) ?>">

          <?php 
          if ($akses->Namalevel=='dosen') { ?>
            <i class="fas fa-user-tie"></i>
          <?php
          } elseif ($akses->Namalevel=='koordinator') { ?>
            <i class="fas fa-user-cog"></i>
          <?php
          }elseif ($akses->Namalevel=='kaprodi') { ?>
            <i class="fas fa-chalkboard-teacher"></i>
          <?php
          }elseif ($akses->Namalevel=='operator') { ?>
            <i class="fas fa-user-astronaut"></i>
          <?php
          }
           ?>

          <span><?php echo $akses->Namalevel ?></span>
        </a>      
      </li>
<?php
  }
      ?>
      
        </li>
 <?php } ?>
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
    
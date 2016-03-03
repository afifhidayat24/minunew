<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/img/userimage') ?>/<?php echo $gtuser->foto_profile ?>" class="img-circle">
      </div>
      <div class="pull-left info">
        <p><?php echo $gtuser->username ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $gtuser->sid ?></a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu Administrator MINU 2</li>
      <li class="treeview">
        <a href="<?php echo base_url('admin/cdashboard') ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url('admin/cpage/select_page') ?>">
          <i class="fa fa-files-o"></i>
          <span>Page</span>
        </a>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url('admin/cpage/select_kategori') ?>">
          <i class="fa fa-list-alt"></i>
          <span>Kategori</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i>
          <span>Artikel</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('admin/Cartikel/tambah_artikel') ?>"><i class="fa fa-circle-o"></i>Tambah Artikel</a></li>
          <li><a href="<?php echo base_url('admin/Cartikel/') ?>"><i class="fa fa-circle-o"></i>Semua Artikel</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-file-image-o"></i> <span>Galeri</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('admin/Cgaleri/tambah_galeri') ?>"><i class="fa fa-circle-o"></i>Tambah Galeri</a></li>
          <li><a href="<?php echo base_url('admin/Cgaleri/') ?>"><i class="fa fa-circle-o"></i>Semua Galeri</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-file-video-o"></i> <span>Video Pembelajaran</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('admin/Cvideo/add_video')?>"><i class="fa fa-circle-o"></i>Tambah Video</a></li>
          <li><a href="<?php echo base_url('admin/Cvideo/')?>"><i class="fa fa-circle-o"></i>Semua Video</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url('admin/Cuser') ?>">
          <i class="fa fa-user-plus"></i> <span>User</span>
        </a>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url('admin/Cdaftarguru/')?>">
          <i class="fa fa-user"></i> <span>Daftar Guru</span>
        </a>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url('admin/Cdaftarsiswa/')?>">
          <i class="fa fa-users"></i> <span>Daftar Siswa</span>
        </a>
      </li>
       <li class="treeview">
        <a href="">
          <i class="fa fa-book"></i> <span>Mata Pelajaran</span>
        </a>
      </li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-user"></i> <span>Ekstra kulikuler</span>
        </a>
      </li>
       <li class="treeview">
        <a href="<?php echo base_url('admin/Csoal/')?>">
          <i class="fa fa-user"></i> <span>Bank Soal</span>
        </a>
      </li>
      <li><a href="">
      <i class="fa fa-cog"></i> <span>Publikasi</span></a></li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-comments-o"></i> <span>Guru Menjawab</span>
        </a>
      </li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-user-plus"></i> <span>Pendaftaran</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

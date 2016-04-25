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
      <li class="header">Menu Guru MINU 2</li>
      <li class="treeview">
        <a href="<?php echo base_url('admin/Dashboardguru') ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i>
          <span>Blog</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('admin/Cartikel_g/tambah_artikel') ?>"><i class="fa fa-circle-o"></i>Tambah Artikel</a></li>
          <li><a href="<?php echo base_url('admin/Cartikel_g/') ?>"><i class="fa fa-circle-o"></i>Semua Artikel</a></li>
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
        <a href="">
          <i class="fa fa-comments-o"></i> <span>Inbox</span>
        </a>
      </li>
  </section>
  <!-- /.sidebar -->
</aside>

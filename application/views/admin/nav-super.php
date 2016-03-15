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
      <li class="header">Menu SuperAdministrator MINU 2</li>
      <li class="treeview">
        <a href="<?php echo base_url('admin/cdashboard') ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="treeview">
        <a href="<?php echo base_url('admin/Cmanuser') ?>">
          <i class="fa fa-user-plus"></i> <span>Manajemen Staff</span>
        </a>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url('admin/Cdaftarguru/')?>">
          <i class="fa fa-user"></i> <span>Daftar Guru</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

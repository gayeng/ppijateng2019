<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>template/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo ucwords($this->session->userdata('username')); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="<?php if($act=='dashboard'){echo 'active';} else{} ?>">
          <a href="<?php echo base_url('admin'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
         
        </li>
		  <li class="header">PENGATURAN HALAMAN BERANDA</li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-home"></i>
            <span>Beranda</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Banner</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Tentang</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sambutan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Testimoni</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sponsor</a></li>
            
          </ul>
        </li>
        
        
        
        <li class="header">PENGATURAN HALAMAN EVENT</li>
        
        <li class="treeview <?php if($act=='addevent'||$act=='event'){echo 'active';} else{} ?>">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Event</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($act=='event'){echo 'active';} else{} ?>"><a href="<?php echo base_url() ?>admin/event"><i class="fa fa-eye"></i> All Event</a></li>
            <li class="<?php if($act=='addevent'){echo 'active';} else{} ?>"><a href="<?php echo base_url() ?>admin/addEvent"><i class="fa fa-plus"></i> Tambah</a></li>
            
          </ul>
        </li>
        
        
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
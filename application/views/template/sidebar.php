<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('')?>">
                <div class="sidebar-brand-icon ">
                <i class="fas fa-store-alt"></i>

                </div>
                <div class="sidebar-brand-text mx-3">TOKO HP </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('index.php/welcome/index')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kategori
            </div>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/index.php/kategori/HandPhone')?>">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>HandPhone</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/index.php/kategori/aksesoris')?>">
                <i class="fas fa-headphones"></i>
                    <span>Aksesoris HandPhone</span></a>
            </li>
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                
<div class="navbar">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <?php
            $keranjang= 'keranjang Belanja ' .$this->cart->total_items(). 'items'
            ?>
            <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
        </li>
    </ul>
    <div class="topbar-divider d-one d-sm-block"></div>
    <ul class="na navbar-nav navbar-right">
    <?php if($this->session->userdata('username')) { ?>
    <li><div>Selamat Datang <?php echo $this->session->userdata('username')?></div></li>
    <li class="ml-2"><?php echo anchor('auth/logout','Logout')?></li>
    <?php }else{ ?>
        <li><?php echo anchor('auth/login', 'Login');?></li>
        <?php } ?>
    </ul>
</div>

</ul>
</nav>
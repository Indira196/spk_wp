<?php
// Data user
$admin_id       = $this->session->userdata('id');
$name_session   = $this->mAdmins->detailAdmin($admin_id);
?>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>" alt="" />
                    </a>
                    <h3>Selamat Datang</h3>
                    <p><?php echo $name_session['username'] ?></p>
                    <strong>AP+</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Beranda</span></a>
                        </li>

                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-cog"></i> <span class="mini-dn" >Setting</span><span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInx">
                            <a href="<?php echo base_url('admin/dashboard/config') ?>" class="dropdown-item">General Settings</a>
                            <a href="<?php echo base_url('admin/dashboard/logo') ?>"   class="dropdown-item">Logo</a>
                            <a href="<?php echo base_url('admin/dashboard/icon') ?>"   class="dropdown-item">Icon</a>
                            <a href="<?php echo base_url('admin/dashboard/locations') ?>" class="dropdown-item">Lokasi</a>
                            <a href="<?php echo base_url('admin/dashboard/social') ?>" class="dropdown-item">Social Campaign</a>
                            <a href="<?php echo base_url('admin/dashboard/video') ?>" class="dropdown-item">Video</a>
                        </div>
                        </li>

                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-book"></i> <span class="mini-dn" >Kelola A/K</span><span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInx">
                            <a href="<?php echo base_url()?>admin/alternatif" class="dropdown-item">Alternatif</a>
                            <a href="<?php echo base_url()?>admin/kriteria" class="dropdown-item">Kriteria</a>
                            <a href="<?php echo base_url()?>admin/subkriteria" class="dropdown-item">Sub-Kriteria</a>
                        </div>
                        </li>

                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-calculator"></i> <span class="mini-dn" >Perhitungan WP</span><span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInx">
                            <a href="<?php echo base_url()?>admin/perhitungan" class="dropdown-item">Perhitungan</a>
                            <a href="#" class="dropdown-item">Hasil Rekomendasi</a>
                        </div>
                        </li>

                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-asterisk"></i> <span class="mini-dn" >Kelola Anggrek</span><span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInx">
                            <a href="<?php echo base_url()?>admin/anggrek" class="dropdown-item">Jenis Anggrek</a>
                            <a href="<?php echo base_url()?>admin/gejala" class="dropdown-item">Gejala Penyakit</a>
                            <a href="#" class="dropdown-item">Penyakit Anggrek</a>
                        </div>
                        </li>

                         <li class="nav-item"><a href="<?php echo base_url()?>admin/tentang" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-question"></i> <span class="mini-dn" >Kelola Tentang</span></a>

                        </li>

                        <li class="nav-item"><a href="<?php echo base_url()?>admin/kontak" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn" >Kelola Pesan</span></a>

                        </li>

                        <li class="nav-item"><a href="<?php echo base_url()?>admin/users" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn" >Kelola Admin</span></a>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>

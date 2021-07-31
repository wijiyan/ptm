<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                <div class="brand-logo"></div>
                <h2 class="brand-text mb-0">PENJI PTM</h2>
            </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <?php if($userdata->level == 'sasaran') { ?>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if ($page == 'Dashboard-sasaran') {echo 'active';} ?> nav-item"><a href="<?php echo base_url();?>Dashboard/sasaran"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if ($page == 'Skrining') {echo 'active';} ?> nav-item"><a href="<?php echo base_url();?>Skrining"><i class="feather icon-activity"></i><span class="menu-title" data-i18n="Dashboard">Riwayat Skrining</span><span class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
                </li>
            </ul>
        </div>
    <?php } else if($userdata->level == 'admin') {?>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if ($page == 'Dashboard') {echo 'active';} ?> nav-item"><a href="<?php echo base_url();?>Dashboard"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if ($page == 'Sasaran') {echo 'active';} ?> nav-item"><a href="<?php echo base_url();?>Sasaran"><i class="feather icon-user-check"></i><span class="menu-title" data-i18n="Dashboard">Data Sasaran</span><span class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if ($page == 'Skrining') {echo 'active';} ?> nav-item"><a href="<?php echo base_url();?>Skrining"><i class="feather icon-activity"></i><span class="menu-title" data-i18n="Dashboard">Data Skrining</span><span class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if ($page == 'Laporan') {echo 'active';} ?> nav-item"><a href="<?php echo base_url();?>Laporan"><i class="fa fa-file-o"></i><span class="menu-title" data-i18n="Dashboard">Laporan</span><span class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
                </li>
            </ul>
        </div>
    <?php } ?>
</div>
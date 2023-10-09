<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengisian Agenda PKL - FERDI</title>
  <base href="<?php echo base_url('assets') ?>/">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/home/dashboard')?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Agenda PKL<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('/home/dashboard')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

<?php if(session()->get('level')== 1) { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-key "></i>
                    <span>Data Master</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href=<?= base_url('/home/perusahaan')?>>Perusahaan</a>

                        <a class="collapse-item" href="<?= base_url('/home/sekolah')?>">Sekolah</a>

                        <a class="collapse-item" href="<?= base_url('/home/pengguna_detail')?>">Pengguna</a>
                    </div>
                </div>
            </li>
<?php }else{} ?>

<?php if(session()->get('level')== 2 || session()->get('level')== 3 || session()->get('level')== 4) { ?>            
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users"></i>
                    <span>PKL</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
<?php if(session()->get('level')== 2 || session()->get('level')== 4) { ?>
                        <a class="collapse-item" href=<?= base_url('/home/absenpt')?>>Absensi Perusahaan</a>
<?php }else{} ?>
<?php if(session()->get('level')== 3 || session()->get('level')== 4) { ?>
                        <a class="collapse-item" href=<?= base_url('/home/absensklh')?>>Absensi Sekolah</a>
<?php }else{} ?>
<?php if(session()->get('level')== 4) { ?>
                        <a class="collapse-item" href=<?= base_url('/home/agenda')?>>Agenda</a>
<?php }else{} ?>
<?php if(session()->get('level')== 3) { ?>
                        <a class="collapse-item" href=<?= base_url('/home/agendasklh')?>>Agenda</a>
<?php }else{} ?>
<?php if(session()->get('level')== 2) { ?>
                        <a class="collapse-item" href=<?= base_url('/home/agendapt')?>>Agenda</a>
<?php }else{} ?>
                    </div>
                </div>
            </li>
<?php }else{} ?>

<?php if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) { ?>            
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Penilaian</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
<?php if(session()->get('level')== 1 || session()->get('level')== 2) { ?>            
                        <a class="collapse-item" href=<?= base_url('/home/nilai_pt')?>>Nilai Perusahaan</a>
<?php }else{} ?>
<?php if(session()->get('level')== 1 || session()->get('level')== 3 ) { ?>            
                        <a class="collapse-item" href=<?= base_url('/home/nilai_sklh')?>>Nilai Sekolah</a>
<?php }else{} ?>
                    </div>
                </div>
            </li>
<?php }else{} ?>

<?php if(session()->get('level')== 2 || session()->get('level')== 3 || session()->get('level')== 4) { ?>            
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
<?php if(session()->get('level')== 2 || session()->get('level')== 4) { ?>            
                        <a class="collapse-item" href=<?= base_url('/home/laporan_absensipt')?>>Laporan Absensi PT</a>
<?php }else{} ?>         
<?php if(session()->get('level')== 2 ||session()->get('level')== 3 || session()->get('level')== 4) { ?>            
                        <a class="collapse-item" href=<?= base_url('/home/laporan_nilaipt')?>>Laporan Nilai PT</a>
<?php }else{} ?>         
<?php if(session()->get('level')== 3 || session()->get('level')== 4) { ?>            
                        <a class="collapse-item" href=<?= base_url('/home/laporan_absensisklh')?>>Laporan Absensi Sekolah</a>
<?php }else{} ?>         
<?php if(session()->get('level')== 3 || session()->get('level')== 4) { ?>            
                        <a class="collapse-item" href=<?= base_url('/home/laporan_nilai')?>>Laporan Nilai Sekolah</a>
<?php }else{} ?>         
<?php if(session()->get('level')== 2 || session()->get('level')== 3 || session()->get('level')== 4) { ?>            
                        <a class="collapse-item" href=<?= base_url('/home/laporan_agenda')?>>Laporan Agenda</a>  
<?php }else{} ?>         
                    </div>
                </div>
            </li>
<?php }else{} ?>
            

            <!-- Nav Item - Charts -->
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
     
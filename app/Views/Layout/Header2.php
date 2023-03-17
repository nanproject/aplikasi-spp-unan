<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Spp</title>

    <!-- Custom fonts for this template-->
    <link href="/adminsb2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> -->


    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">

    <!-- bootstrap icon -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Custom styles for this template-->
    <link href="/adminsb2/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/fontawesome/css/all.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    @media (max-width: 768px) {
      .gambar{
        display: none;
      }

    }
    .gambarnone{
        display: none;
    }
    /* Custom page CSS
-------------------------------------------------- */
    /* Not required for template or sticky footer method. */

    main>.container {
      padding: 60px 15px 0;
    }

    .footer {
      background-color: #00818A;
    }

    .footer>.container {
      padding-right: 15px;
      padding-left: 15px;
    }

    code {
      font-size: 80%;
    }
    .sidebar{
        font-family: 'Ubuntu';
        background-color: #111827;
    }
  </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/petugas/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-school text-warning"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Aplikasi SPP</div>
            </a>
            <li>
                <div class="gambar text-center">
                    <img src="/iconAdminx.png" alt="" width="155" class="rounded">
                </div>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/petugas/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <?php if (session()->get('level') == 'admin') { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-database-down"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Master Data:</h6>
                        <a class="collapse-item" href="/petugas/tampil">Petugas</a>
                        <a class="collapse-item" href="/spp">Spp</a>
                        <a class="collapse-item" href="/kelas">Kelas</a>
                        <a class="collapse-item" href="/siswa">Siswa</a>
                    </div>
                </div>
            </li>
            <?php } ?>
            <!-- Nav Item - Pembayaran -->
            <li class="nav-item">
                <a class="nav-link" href="/bayar">
                    <i class="bi bi-cash-coin"></i>
                    <span>Pembayaran</span></a>
            </li>

            <!-- Nav Item - Histori Pembayaran -->
            <li class="nav-item">
                <a class="nav-link" href="/laporan/form-histori">
                    <i class="bi bi-clock-history"></i>
                    <span>Histori Pembayaran</span></a>
            </li>

            <!-- Nav Item - Laporan Penerimaan -->
            <?php if (session()->get('level') == 'admin') { ?>
            <li class="nav-item">
                <a class="nav-link" href="/laporan/penerimaan">
                    <i class="bi bi-envelope-paper-fill"></i>
                    <span>Laporan Penerimaan</span></a>
            </li>
            <?php }?>

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

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                        
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link" href="/petugas/logout" data-confirm="Anda yakin akan mengakhiri ?"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>

                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
<?php require '../../helper.php' ?>
<?php $pengaturan = getWhere("SELECT * FROM pengaturan WHERE id_pengaturan = 1 "); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin Template</title>
    <meta content="<?= $pengaturan['description']; ?>" name="description">
    <meta content="<?= $pengaturan['keyword']; ?>" name="keywords">
    <meta content="<?= $pengaturan['author']; ?>" name="author">

    <!-- Favicons -->
    <link href="<?= $base_url; ?>assets/img/<?= $pengaturan['logo']; ?>" rel="icon">
    <link href="<?= $base_url; ?>assets/img/<?= $pengaturan['logo']; ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- plugins CSS Files -->
    <link href="<?= $base_url; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $base_url; ?>assets/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= $base_url; ?>assets/plugins/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= $base_url; ?>assets/plugins/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= $base_url; ?>assets/plugins/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= $base_url; ?>assets/plugins/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= $base_url; ?>assets/plugins/simple-datatables/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">


    <!-- Template Main CSS File -->
    <link href="<?= $base_url; ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <div id="pesan-berhasil" data-pesan="<?= isset($_SESSION['berhasil']) ? $_SESSION['berhasil'] : ""; ?>"></div>
    <div id="pesan-gagal" data-pesan="<?= isset($_SESSION['gagal']) ? $_SESSION['gagal'] : ""; ?>"></div>

    <?php unset($_SESSION['berhasil']) ?>
    <?php unset($_SESSION['gagal']) ?>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?= $base_url; ?>admin/dashboard" class="logo d-flex align-items-center">
                <img src="<?= $base_url; ?>assets/img/<?= $pengaturan['logo']; ?>" alt="">
                <span class="d-none d-lg-block"><?= $pengaturan['appname']; ?></span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?= $base_url; ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= $base_url; ?>admin/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= $base_url; ?>admin/user">
                    <i class='bx bx-user'></i>
                    <span>User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= $base_url; ?>admin/pengaturan">
                    <i class='bx bx-cog'></i>
                    <span>Pengaturan</span>
                </a>
            </li>

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title ?></title>
    <!-- Favicons -->
    <link href="<?php echo base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?php echo base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span>Proyek 3.3</span>
            </a>
            <!-- Uri segment <a href="<?php echo site_url('patient/listpatient'); ?>" class="<?php if ($this->uri->uri_string() == 'patient/listpatient') {
                                                                                                    echo 'active';
                                                                                                } ?>"><i class="glyphicon glyphicon-list-alt fa-lg"></i> List Patients</a> -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="<?php if ($this->uri->uri_string() == 'C_home') {
                                        echo 'nav-link scrollto active';
                                    } ?>" href="<?php echo site_url('C_home') ?>">Beranda</a></li>

                    <li><a class="<?php if ($this->uri->uri_string() == 'C_home/ensiklopedia') {
                                        echo 'nav-link scrollto active';
                                    } ?>" href="<?php echo site_url('C_home/ensiklopedia') ?>">Ensiklopedia Kematangan Coklat</a></li>

                    <li><a class="<?php if ($this->uri->uri_string() == 'C_demo') {
                                        echo 'nav-link scrollto active';
                                    } ?>" href="<?php echo site_url('C_demo') ?>">Cek Kematangan</a></li>

                    <li><a class="<?php if ($this->uri->uri_string() == 'C_home/about') {
                                        echo 'nav-link scrollto active';
                                    } ?>" href="<?php echo site_url('C_home/about') ?>">Kelompok Kami</a></li>

                    <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
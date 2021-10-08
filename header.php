<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://www.instagram.com/naufal_sunandar/">
    <!-- <link rel="shortcut icon" href="images/logo.png"> -->
    <title><?php wp_title(); ?></title>

    <!-- Costom font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

    <!-- hook untuk semua CSS, Bootstrap, js dan Jquery -->
    <?php wp_head(); ?>
</head>

<body>

    <!-- tablet and desktop navbar -->
    <section class="kepala">
        <h2 class="tulisan-kepala">HAKLI Provinsi Papua Barat</h2>
    </section>
    <nav class="menubar">
        <div class="menubar-kanan">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <div class="dropdown">
                <a href="#">Keprofesian <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <div class="kotak-dropdown">
                    <section class="kiri">
                        <h3>Keanggotaaan</h3>
                        <a href="#">Registrasi Keanggotaan</a>
                        <a href="#">Daftar Keanggotaan</a>
                        <a href="#">STR</a>
                        <h3>Agenda</h3>
                        <a href="#">Agenda Akan Dilakukan</a>
                        <a href="#">Agenda Telah Dilakukan</a>
                        <h3>Dokumen</h3>
                        <a href="#">Arsip Dokumen</a>
                    </section>
                    <section class="kanan">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/unicef.png">
                    </section>

                </div>
            </div>
            <div class="dropdown">
                <a href="#">Kemitraan Unicef <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <div class="kotak-dropdown">
                    <section class="kiri">
                        <h3>Program</h3>
                        <a href="#">Imunisasi</a>
                        <a href="#">Malaria</a>
                        <a href="#">Wash</a>
                        <a href="#">Covid-19</a>
                    </section>
                    <section class="kanan">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/unicef.png">
                    </section>

                </div>
            </div>

            <a href="#">Berita</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="kiri">

        </div>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn cari" type="submit">Search</button>
        </form>

    </nav>
    <!-- mobile navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HAKLI Papua Barat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Keprofesian
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <h3>Keanggotaan</h3>
                            </li>
                            <li><a class="dropdown-item" href="#">Registrasi Keanggotaan</a></li>
                            <li><a class="dropdown-item" href="#">Daftar Keanggotaan</a></li>
                            <li><a class="dropdown-item" href="#">STR</a></li>
                            <li>
                                <h3>Agenda</h3>
                            </li>
                            <li><a class="dropdown-item" href="#">Agenda Akan Dilakukan</a></li>
                            <li><a class="dropdown-item" href="#">Agenda Telah Dilakukan</a></li>
                            <li><a class="dropdown-item" href="#">Arsip Dokumen</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kemitraan Unicef
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <h3>Program</h3>
                            </li>
                            <li><a class="dropdown-item" href="#">Imunisasi</a></li>
                            <li><a class="dropdown-item" href="#">Malaria</a></li>
                            <li><a class="dropdown-item" href="#">Wash</a></li>
                            <li><a class="dropdown-item" href="#">Covid-19</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn cari" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- ex -->
    <header class="container-fluid header">

    </header>
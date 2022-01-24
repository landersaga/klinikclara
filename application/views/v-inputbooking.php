<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Input Book</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url(); ?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Data Master</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><?php echo anchor('dokter',"Dokter") ?></li>
                                <li>
                                    <?php echo anchor('kasur','Kasur') ?>
                                </li>
                                <li>
                                    <?php echo anchor('obat',"Obat") ?>
                                </li>
                                <li>
                                    <?php echo anchor('pegawai',"Pegawai") ?>
                                </li>
                                <li>
                                    <?php echo anchor('pelanggan',"Pelanggan") ?>
                                </li>
                                <li>
                                    <?php echo anchor('perawat',"Perawat") ?>
                                </li>
                            </ul>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Transaksi</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <?php echo anchor('booking',"Booking Opname") ?>
                                </li>
                                <li>
                                    <?php echo anchor('daftar',"Daftar") ?>
                                </li>
                                <li>
                                    <?php echo anchor('pembelian_obat',"Pembelian Obat") ?>
                                </li>
                                <li>
                                    <?php echo anchor('pembayaran',"Pembayaran") ?>
                                </li>
                            </ul>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Report</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Report Data Transaksi</a>
                                </li>
                            </ul>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url(); ?>assets/images/icon/logo-mini.png" alt="Klinik Clara" />  Klinik Clara
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Data Master</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><?php echo anchor('dokter',"Dokter") ?></li>
                                <li>
                                    <?php echo anchor('kasur','Kasur') ?>
                                </li>
                                <li>
                                    <?php echo anchor('obat',"Obat") ?>
                                </li>
                                <li>
                                    <?php echo anchor('pegawai',"Pegawai") ?>
                                </li>
                                <li>
                                    <?php echo anchor('pelanggan',"Pelanggan") ?>
                                </li>
                                <li>
                                    <?php echo anchor('perawat',"Perawat") ?>
                                </li>
                            </ul>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Transaksi</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <?php echo anchor('booking',"Booking Opname") ?>
                                </li>
                                <li>
                                    <?php echo anchor('daftar',"Daftar") ?>
                                </li>
                                <li>
                                    <?php echo anchor('pembelian_obat',"Pembelian Obat") ?>
                                </li>
                                <li>
                                    <?php echo anchor('pembayaran',"Pembayaran") ?>
                                </li>
                            </ul>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Report</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Report Data Transaksi</a>
                                </li>
                            </ul>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url(); ?>assets/images/icon/daoko-kouhaku003.jpg" alt="Riani Clara" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Riani Clara</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo base_url(); ?>assets/images/icon/daoko-kouhaku003.jpg" alt="Riani Clara" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Riani Clara</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo base_url() ?>index.php/login/out">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->
            <form action="<?php echo base_url().'index.php/booking/tambah_aksi'; ?>" method="post">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Input Book</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">ID Book</label>
                                            <input value="<?php echo $kode; ?>" name="id" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Pegawai</label>
                                            <input value="<?php if(isset($_GET['id_pegawai'])) echo $_GET['id_pegawai'] ?>" name="idpeg" type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                            <button type="button" data-target="#modalpegawai" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Search Data</button>
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Pelanggan</label>
                                            <input name="idpel" type="text" id="fidpel" value="<?php if(isset($_GET['id_pelanggan'])) echo $_GET['id_pelanggan'] ?>" id="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                            <button id="#bidpel" type="button" data-target="#modalpelanggan"class="btn btn-primary"data-toggle="modal" href="#modalpegawai" namedata-target=".bs-example-modal-lg">Search Data</button>
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Kasur</label>
                                            <input value="<?php if(isset($_GET['id_kasur'])) echo $_GET['id_kasur'] ?>" name="idkas" type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                            <button type="button" data-target="#modalkasur" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Search Data</button>
                                        </div>
                                        <div class="col-8">
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">Tanggal</label>
                                                    <input  name="tanggal" type="date" id="city"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Submit</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                        <div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Kelompok 1 DPPL SK 41-06. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url(); ?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

    <div class="modal fade bs-example-modal-lg" id="modalpegawai" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Data Pegawai</h4>
                        </div>
                        <div class="modal-body">
                              <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Kontak</th>
                          <th>Umur</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
                          $id_pegawai = 1;
                          foreach ($pegawai as $u) {
                         ?>
                         <tr>
                           <td><?php echo $u->id_pegawai ?></td>
                           <td><?php echo $u->nama_pegawai ?></td>
                           <td><?php echo $u->alamat_pegawai ?></td>
                           <td><?php echo $u->kontak_pegawai ?></td>
                           <td><?php echo $u->umur_pegawai ?></td>
                           <td>
                             <a href="?id_pegawai=<?php echo $u->id_pegawai ?>" class="btn btn-primary" id="pilihsatu"><i class="fa fa-edit ">
                             </i>Get</a>
                           </td>
                         </tr>
                         <?php } ?>
                      </tbody>
                    </table>
                          </div>
                        <div class="modal-footer">
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="modal fade bs-example-modal-lg" id="modalpelanggan" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Data Pelanggan</h4>
                        </div>
                        <div class="modal-body">
                              <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Umur</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
                          $id_pelanggan = 1;
                          foreach ($pelanggan as $u) {
                         ?>
                         <tr>
                           <td><?php echo $u->id_pelanggan ?></td>
                           <td><?php echo $u->nik_pelanggan ?></td>
                           <td><?php echo $u->nama_pelanggan ?></td>
                           <td><?php echo $u->alamat_pelanggan ?></td>
                           <td><?php echo $u->umur_pelanggan ?></td>
                           <td>
                             <a href="?id_pegawai=<?php echo $_GET['id_pegawai'] ?> & id_pelanggan=<?php echo $u->id_pelanggan ?> " class="btn btn-primary" id="idpel"><i class="fa fa-edit ">
                             </i>Get</a>
                           </td>
                         </tr>
                         <?php } ?>
                      </tbody>
                    </table>
                          </div>
                        <div class="modal-footer">
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="modal fade bs-example-modal-lg" id="modalkasur" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Data Kasur</h4>
                        </div>
                        <div class="modal-body">
                              <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
                          $id_kasur = 1;
                          foreach ($kasur as $u) {
                         ?>
                         <tr>
                           <td><?php echo $u->id_kasur ?></td>
                           <td><?php echo $u->status ?></td>
                           <td>
                             <a href="?id_pegawai=<?php echo $_GET['id_pegawai'] ?> & id_pelanggan=<?php echo $_GET['id_pelanggan']?> & id_kasur=<?php echo $u->id_kasur ?>" class="btn btn-primary" id="idkas"><i class="fa fa-edit ">
                             </i>Get</a>
                           </td>
                         </tr>
                         <?php } ?>
                      </tbody>
                    </table>
                          </div>
                        <div class="modal-footer">
                        </div>

                      </div>
                    </div>
                  </div>

</body>

</html>
<!-- end document-->
<script type="text/javascript">
  $('#pilihsatu').click(function(){
    $('#fidpel').removeAttr('disabled');
    $('#bidpel').removeAttr('disabled');
  });
</script>
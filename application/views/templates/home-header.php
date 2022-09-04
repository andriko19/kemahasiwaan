<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Kemahasiswaan - UWP</title>
	<link rel="shortcut icon" type="image/jpg" href="<?= base_url(); ?>assets/img/favicon.png" />
	<meta charset="UTF-8">
	<meta name="description" content="kemahasiswaan universitas wijaya putra">
	<meta name="keywords" content="kemahasiswaan, uwp">
	<meta name="author" content="ICT UWP">
	<meta name="viewport" content="width=device-width">
	<!-- Icon link -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<!-- Style link -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.css">
	<!-- slick slider -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<!-- Stylesheet -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css"> </head>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/components.css">

  <!-- Template sweetalert2 CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/sweetalert2/sweetalert2.min.css">

  <!-- Animate CSS-->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/sweetalert2/animate.min.css">

<body>
	<div id="loading"> <img id="loading-image" src="<?= base_url(); ?>/assets/images/loader.svg" alt="Loading..." /> </div>

	<!-- top header start -->
	<div class="top-header  d-none d-lg-block">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-5 offset-xl-3 col-lg-6 col-md-7 col-12 col-sm-5">
					<div class="header-top-left"> 
						<span class="d-m-none">
								<i class="far fa-envelope"></i>
								<a href="#">kemahasiswaan@uwp.ac.id</a>
						</span> 
						<span class="d-m-none">
								<i class="fab fa-whatsapp"></i>
								<a title="Contact Persone" href="https:/wa.me/6283856761361" target="_blank" rel="noopener">0838-5676-1361</a>
						</span> 
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-12 col-12 col-sm-12">
					<div class="header-top-right">
						<div class="header-top-right-flag f_right">
							<ul>
								<li class="language-dropdown dropdown"> <a href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN
									<i class="fas fa-arrow-down"></i></a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">English</a> <a class="dropdown-item" href="#">Chinese</a> <a class="dropdown-item" href="#">Spanish</a> <a class="dropdown-item" href="#">Arabic</a> </div>
								</li>
							</ul>
						</div>
						<div class="header-top-right-social f_right d-md-block">
							<ul>
								<li>
									<a href="#"> <i class="fab fa-facebook-f"></i> </a>
								</li>
								<li>
									<a href="#"> <i class="fab fa-twitter"></i> </a>
								</li>
								<li>
									<a href="#"> <i class="fab fa-instagram"></i> </a>
								</li>
								<li>
									<a href="#"> <i class="fab fa-linkedin"></i> </a>
								</li>
								<li>
									<a href="#"> <i class="fab fa-youtube"></i> </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- top header end -->

	<!-- main header start -->
	<div class="penta__header header-menu">
		<div class="container-fluid  d-none d-lg-block">
			<div class="row">
				<div class="col-lg-3 col-8 col-md-5">
					<div class="header-logo">
						<a href="<?= base_url(); ?>home"> <img src="<?= base_url(); ?>assets/images/kemahasiswaan.png" alt="logo"> </a>
					</div>
				</div>
				<div class="col-lg-9 d-none d-lg-block">
					<div class="header-side-btn f-right d-none d-lg-block"> <a href="#" data-toggle="modal" data-target="#getquote">Login</a> </div>
					<div class="header-side-btn f-right d-none d-lg-block" style="margin-top: -5px; padding-right:5px;"> <a style="padding: 5px !important;" href="#"> <img style="width: 90px;" src="<?= base_url(); ?>assets/images/kampus-merdeka.png" alt="logo"> </a> </div>
					<div class="header-side-btn f-right d-none d-lg-block" style="margin-top: -5px; padding-right:5px;"> <a style="padding: 0px !important;" href="#"> <img style="width: 90px;" src="<?= base_url(); ?>assets/images/merdeka-belajar.png" alt="logo"> </a> </div>
					<div class="main-menu">
						<nav class="main-menu-nav">
							<ul>
								<li class="sub-menu-parent" > <a href="<?= base_url('home');?>">home</a> </li>
								<li class="sub-menu-parent" > <a href="<?= base_url(); ?>home/detail_profil">about</a> </li>
								<li class="sub-menu-parent" > <a href="#">kesejahteraan <i class = "material-icons">add</i></a>
									<ul class="sub-menu">
										<li><a href="<?= base_url(); ?>home/informasi_kesejahteraan">Informasi</a></li>
										<li><a href="#" data-toggle="modal" data-target="#pengajuan">Pengajuan</a></li>
									</ul>
								</li>
								<li class="sub-menu-parent" > <a href="#">Gallery<i class = "material-icons">add</i></a>
									<ul class="sub-menu">
										<li><a href="<?= base_url(); ?>home/foto_kegiatan">Kegiatan</a></li>
									</ul>
								</li>
								<li class="sub-menu-parent" > <a href="#">information <i class = "material-icons">add</i></a>
									<ul class="sub-menu">
										<li><a href="<?= base_url(); ?>home/informasi_umum">News Information</a></li>
									</ul>
								</li>
								<li class="sub-menu-parent" > <a href="<?= base_url(); ?>home/contact">contact</a> </li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- main header end -->

	<!-- mobile header start -->
	<div class="mobile-header-menu d-lg-none d-block">
		<div class="container-fluid">
			<div class="row">
				<div class="col-9">
					<div class="mobile-menu-logo">
						<a href="<?= base_url(); ?>home"> <img src="<?= base_url(); ?>assets/images/kemahasiswaan.png" alt="logo"> </a>
					</div>
				</div>
				<div class="col-3">
					<div class="mobile-menu-toggler">
						<a href="#" data-toggle="collapse" data-target="#navbar-main"> <i class="fal fa-bars"></i> </a>
					</div>
				</div>
				<div id="navbar-main" class="navbar-collapse mobile-collapse-menu collapse">
					<div class="mobile-menu-wrapper">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<div class="mobile-menu-header">
										<a href="#" data-toggle="collapse" data-target="#navbar-main"> <i class="material-icons">close</i> </a> <img src="<?= base_url(); ?>assets/images/kemahasiswaan.png" alt="img"> </div>
								</div>
								<div class="col-12">
									<ul class="nav navbar-nav navbar-right mobile-menu">
										<li> <a href="<?= base_url('home');?>" class="mobile-menu-link"> home </a> </li>
										<li> <a href="<?= base_url(); ?>home/detail_profil">about</a> </li>
										<li class="dropdown"> <a href="#" class="mobile-menu-link" data-toggle="dropdown">kesejahteraan <i class = "material-icons">add</i></a>
											<ul class="dropdown-menu">
												<li><a href="<?= base_url(); ?>home/informasi_kesejahteraan">Informasi</a></li>
												<li><a href="#" data-toggle="modal" data-target="#pengajuan">Pengajuan</a></li>
											</ul>
										</li>
										<li class="dropdown"> <a href="#" class="mobile-menu-link" data-toggle="dropdown">Gallery <i class = "material-icons">add</i></a>
											<ul class="dropdown-menu">
												<li><a href="<?= base_url(); ?>home/foto_kegiatan">Kegiatan</a></li>
											</ul>
										</li>
										<li class="dropdown"> <a href="#" class="mobile-menu-link" data-toggle="dropdown">information <i class = "material-icons">add</i></a>
											<ul class="dropdown-menu">
												<li><a href="<?= base_url(); ?>home/informasi_umum">News Information</a></li>
											</ul>
										</li>
										<li> <a href="<?= base_url(); ?>home/contact">contact</a> </li>
									</ul>
								</div>
								<div class="col-12">
									<div class="mobile-menu-contact">
										<h2 class="mobile-menu-heading">Contact Info</h2>
										<ul>
											<li>
												<a href="#"> <i class="material-icons">map</i> <span>Jl. Raya Benowo No. 1-3 Surabaya</span> </a>
											</li>
											<li>
												<a href="https:/wa.me/6283856761361"> <i class="material-icons">whatsapp</i> <span>083856761361</span> </a>
											</li>
											<li>
												<a href="#"> <i class="material-icons">email</i> <span>kemahasiswaa@uwp.ac.id</span> </a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-12"> <a href="#" class="quote-btn button" data-toggle="modal" data-target="#getquote">Login</a> </div>
								<div class="col-12">
									<div class="mobile-menu-social-wrapper">
										<ul>
											<li>
												<a href="#"> <i class="fab fa-facebook-f"></i> </a>
											</li>
											<li>
												<a href="#"> <i class="fab fa-twitter"></i> </a>
											</li>
											<li>
												<a href="#"> <i class="fab fa-instagram"></i> </a>
											</li>
											<li>
												<a href="#"> <i class="fab fa-linkedin"></i> </a>
											</li>
											<li>
												<a href="#"> <i class="fab fa-youtube"></i> </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- mobile header end -->

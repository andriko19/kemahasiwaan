<!-- content start -->
		<div class="main-content-wrapper">
			<section class="breadcrumb-section about">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-5">
							<div class="breadcrumb-wrapper">
								<h2>DETAIL PROFIL KEMAHASISWAAN</h2>
								<nav>
									<ul>
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item active"><a href="#">Profil</a></li>
                    <li class="breadcrumb-item active"><a href="#">Kemahasiswaan</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-12">
							<div class="detailed-project-wrapper">
								<img class="detail-project-main-img" src="<?= base_url(); ?>/assets/images/profil/<?= $getProfil['gambar']; ?>" alt="img">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-9 col-md-8">
							<div class="project-content-wrapper">
								<h3 class="sub-heading-small">DETAIL PROFIL KEMAHASISWAAN</h3>
								<h2 class="main-heading"><?= $getProfil['judul']; ?></h2>
								<p><?= $getProfil['isi'];?></p>
							</div>
						</div>
						<div class="col-12 col-lg-3 col-md-3">
							<div class="project-info-wrapper">
								<div class="project-info-inner">
									<div class="project-info-box">
										<h3>uploader</h3>
										<p>Admin Kemahasiswaan</p>
									</div>
									<div class="project-info-box">
										<h3>Category</h3>
										<p class="pinfo-color">Profil</p>
									</div>
								</div>
								<div class="project-info-inner">
									<div class="project-info-box">
										<h3>Date</h3>
										<p> <?= date('d-m-Y', $getProfil['create_at']); ?></p>
									</div>
									<div class="project-info-box">
										<h3>For</h3>
										<p>Pengunjung</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="related-project-wrapper">
								<h2 class="main-heading">foto kantor</h2>
								<!-- <a class="related-view-all" href="../pages/project.html">View All</a> -->
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-3 col-md-6 item">
							<div class="project-box-wrapper">
								<div class="project-box-body">
									<a href="#"> <img src="../assets/images/img/project-1.jpg" alt="img"> </a>
								</div>
								<div class="project-box-info"> <i class="flaticon-helmet"></i>
									<h3 class="mb-0"><a href="#">Foto<br>Tampak Depan</a></h3> 
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3 col-md-6 item">
							<div class="project-box-wrapper">
								<div class="project-box-body">
									<a href="#"> <img src="../assets/images/img/project-2.jpg" alt="img"> </a>
								</div>
								<div class="project-box-info"> <i class="flaticon-electric-tower"></i>
									<h3 class="mb-0"><a href="#">Foto<br>Tampak Samping</a></h3> </div>
							</div>
						</div>
						<div class="col-12 col-lg-3 col-md-6 item">
							<div class="project-box-wrapper">
								<div class="project-box-body">
									<a href="#"> <img src="../assets/images/img/project-3.jpg" alt="img"> </a>
								</div>
								<div class="project-box-info"> <i class="flaticon-file"></i>
									<h3 class="mb-0"><a href="#">Foto<br>Ruang Ormawa</a></h3> </div>
							</div>
						</div>
						<div class="col-12 col-lg-3 col-md-6 item">
							<div class="project-box-wrapper">
								<div class="project-box-body">
									<a href="#"> <img src="../assets/images/img/project-4.jpg" alt="img"> </a>
								</div>
								<div class="project-box-info"> <i class="flaticon-engineer-2"></i>
									<h3 class="mb-0"><a href="#">Foto<br>Ruang Staff</a></h3> </div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- content end -->
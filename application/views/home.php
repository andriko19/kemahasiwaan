	<!-- main content wrapper -->
	<div class="main-content-wrapper">
		<!-- content section -->
		<section class="slider-section">
			<div class="slider-container">
				<ul class="site-slider">
					<?php $no = 1 ?>
					<?php foreach($getBanner as $data): ?>
						<li>
							<div class="slider-img"><img src="<?= base_url(); ?>assets/images/banner/<?= $data['gambar_banner']; ?>" alt="Sldie<?= $no;?>" /></div>
								<div class="slider-text">
									<h3><?= $data['judul_banner']; ?></h3>
									<p><span><?= $data['deskripsi']; ?></span></p>
									<div class="banner-btns"> 
										<a href="#" class="banner-learn-btn">learn more</a> <a href="#" class="banner-quote-btn">get a quote</a> 
									</div>
							</div>
						</li>
					<?php $no++ ?>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
		<!-- content section end -->
		<!-- aboutus start -->
		<section class="home-aboutus">
			<div class="top-tab-block">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="nav-tab-block">
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="who-we-tab" data-toggle="tab" href="#who-we" role="tab" aria-controls="who-we" aria-selected="true">
										<div class="tab-info-block">
											<div class="tab-info-icon"> <img src="<?= base_url(); ?>/assets/images/who-we-are.png" alt="img"> </div>
											<div class="tab-info-text">
												<h2>who we are</h2>
												<p>Lorem Ipsum is dummy</p>
											</div>
										</div>
									</a>
									<a class="nav-item nav-link" id="our-mission-tab" data-toggle="tab" href="#our-mission" role="tab" aria-controls="our-mission" aria-selected="false">
										<div class="tab-info-block">
											<div class="tab-info-icon"> <img src="<?= base_url(); ?>/assets/images/our-mission.png" alt="img"> </div>
											<div class="tab-info-text">
												<h2>our mission</h2>
												<p>Lorem Ipsum is dummy</p>
											</div>
										</div>
									</a>
									<a class="nav-item nav-link" id="what-we-tab" data-toggle="tab" href="#what-we" role="tab" aria-controls="what-we" aria-selected="false">
										<div class="tab-info-block">
											<div class="tab-info-icon"> <img src="<?= base_url(); ?>/assets/images/what-we-have.png" alt="img"> </div>
											<div class="tab-info-text">
												<h2>what we have</h2>
												<p>Lorem Ipsum is dummy</p>
											</div>
										</div>
									</a>
									<a class="nav-item nav-link" id="safety-tab" data-toggle="tab" href="#safety" role="tab" aria-controls="safety" aria-selected="false">
										<div class="tab-info-block">
											<div class="tab-info-icon"> <img src="<?= base_url(); ?>assets/images/safety.png" alt="img"> </div>
											<div class="tab-info-text">
												<h2>safety first</h2>
												<p>Lorem Ipsum is dummy</p>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-content-block">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-6 col-md-6">
							<div class="about-info-left">
								<img src="<?= base_url(); ?>/assets/images/profil/<?= $getProfil['gambar']; ?>" alt="img">
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="who-we" role="tabpanel" aria-labelledby="who-we-tab">
										<div class="tab-content-wrapper"> <img src="<?= base_url(); ?>assets/images/who-we-are.png" alt="img">
											<h2><?= $getProfil['judul']; ?></h2> 
										</div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6 col-md-6">
							<div class="about-home-right-info">
								<h3 class="sub-heading-small">About Us</h3>
								<h2 class="main-heading"><?= $getProfil['judul']; ?></h2>
								<p><?= substr($getProfil['isi'] ,0 ,550); ?> </p> <a class="learn-more-btn" href="<?= base_url(); ?>home/detail_profil">Learn More</a> </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- aboutus end -->
		<!-- features start -->
		<section class="section">
			<div class="home-feature-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="home-feature-box-wrapper">
								<h3 class="sub-heading-small">core feature</h3>
								<h2 class="main-heading">Bidang - bidang<br> yang ada</h2>
								<div class="home-feature-list">
									<div class="home-feature-listitem">
										<div class="feature-list-icon"> <img src="<?= base_url(); ?>/assets/images/pound.png" alt="img"> </div>
										<div class="feature-list-info">
											<h2 class="sub-heading-medium">Alumni</h2>
											<p>Membangun relasi dengan alumni dan Melakukan penelusuran lulusan (tracer study).</p>
										</div>
									</div>
									<div class="home-feature-listitem">
										<div class="feature-list-icon"> <img src="<?= base_url(); ?>/assets/images/pound.png" alt="img"> </div>
										<div class="feature-list-info">
											<h2 class="sub-heading-medium">Kesejahteraan</h2>
											<p>Melakukan koordinasi dengan LLDIKTI Wil. VII berkaitan dengan pengusulan perolehan dan laporan beasiswa atau bantuan-bantuan baik internal maupun eksternal.</p>
										</div>
									</div>
									<div class="home-feature-listitem">
										<div class="feature-list-icon"> <img src="<?= base_url(); ?>/assets/images/pound.png" alt="img"> </div>
										<div class="feature-list-info">
											<h2 class="sub-heading-medium">Organisasi kemahasiswaan</h2>
											<p>Mengembangkan Potensi Mahasiswa Di Bidang Organisasi Kemahasiswaan, Minat Dan Bakat.</p>
										</div>
									</div>
								<!-- </div> <a href="#" class="learn-more-btn m-25px-t">learn more</a> </div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- feature end -->
		<!-- services start -->
		<section class="section">
			<div class="container">
				<div class="row row-eq-height">
					<div class="col-12">
						<div class="main-heading-block">
							<h2 class="main-heading">Visi dan Misi</h2> </div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="services-info-more-wrapper">
							<div class="services-info-more-inner">
								<div class="sinfo-more-icon"> <img src="<?= base_url(); ?>/assets/images/safety.png" alt="img"> </div>
								<div class="sinfo-more-content">
									<h2 class="sub-heading-medium-camel">MISI 1</h2>
									<p>Memiliki SDM yang memadai dan berkualitas dalam penguasaan bidang kerja.</p> <a href="#" class="services-more"><i class="material-icons">arrow_forward</i></a> </div>
							</div>
						</div>
						<div class="services-info-more-wrapper">
							<div class="services-info-more-inner">
								<div class="services-info-more-inner">
									<div class="sinfo-more-icon"> <img src="<?= base_url(); ?>/assets/images/safety.png" alt="img"> </div>
									<div class="sinfo-more-content">
										<h2 class="sub-heading-medium-camel">MISI 2</h2>
										<p>Meningkatkan kualitas organisasi mahasiswa dalam menjalankan tugas pokok dan fungsi.</p> <a href="#" class="services-more"><i class="material-icons">arrow_forward</i></a> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="services-info-wrapper">
							<div class="services-inner-box">
								<div class="services-inner-icon"> 
									<i class="material-icons">
										<span class="material-icons-outlined">
										miscellaneous_services
										</span>
									</i> 
								</div>
								<h3>VISI</h3>
								<h3>Biro Kemahasiswaan</h3>
								<div class="services-inner-discount">
									<p>Meningkatkan kualitas mahasiswa dan alumni unggul dalam berorganisasi dan bermartabat dalam pengembangan diri </p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="services-info-more-wrapper">
							<div class="services-info-more-inner">
								<div class="sinfo-more-icon"> <img src="<?= base_url(); ?>/assets/images/safety.png" alt="img"> </div>
								<div class="sinfo-more-content">
									<h2 class="sub-heading-medium-camel">MISI 3</h2>
									<p>Meningkatkan peluang beasiswa dari APBD/APBDN serta beasiswa internal.</p> <a href="#" class="services-more"><i class="material-icons">arrow_forward</i></a> </div>
							</div>
						</div>
						<div class="services-info-more-wrapper">
							<div class="services-info-more-inner">
								<div class="services-info-more-inner">
									<div class="sinfo-more-icon"> <img src="<?= base_url(); ?>/assets/images/safety.png" alt="img"> </div>
									<div class="sinfo-more-content">
										<h2 class="sub-heading-medium-camel">MISI 4</h2>
										<p>Menjalin networking dengan alumni dan organisasi kemahasiswaan dari Universitas yang berprestasi.</p> <a href="#" class="services-more"><i class="material-icons">arrow_forward</i></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- services end -->
		<!-- latest project start -->
		<section class="section latest-project-bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-7">
						<div class="main-heading-block">
							<h2 class="main-heading white-color">Organisasi Kemahasiswaan</h2>
							<p class="white-color">Berikut adalah kumpulan organisasi kemahasiswan <strong>(Ormawa)</strong> yang ada di Universitas Wijaya Putra.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-lg-12">
						<div class="latest-project-wrapper">
							<!-- Project Carousel -->
							<div class="latest-project">
								<!-- Project -->
								<div>
									<div class="box">
										<div class="content">
											<div class="content-overlay"></div> <img class="content-image" src="<?= base_url(); ?>/assets/images/img/banner-1.jpg" alt="project">
											<div class="content-details fadeIn-bottom">
												<h3 class="content-title">UKM Paduan Suara</h3>
												<p class="content-text">Organisasi ini berada dibawah naungan menteri sosial dan budaya di dunia tarik suara.</p> <a href="#" class="learn-more-project-btn">learn more</a> </div>
										</div>
									</div>
								</div>
								<!-- / Project -->
								<!-- Project -->
								<div>
									<div class="box">
										<div class="content">
											<div class="content-overlay"></div> <img class="content-image" src="<?= base_url(); ?>/assets/images/img/banner-2.jpg" alt="project">
											<div class="content-details fadeIn-bottom">
												<h3 class="content-title">BEM Fakultas Bahasa dan Sastra</h3>
												<p class="content-text">Organisasi ini berada di bawah naungan Menteri dalam negeri yang berada dalam satu program studi yang sama yakni Sastra Inggris.</p> <a href="#" class="learn-more-project-btn">learn more</a> </div>
										</div>
									</div>
								</div>
								<!-- / Project -->
								<!-- Project -->
								<div>
									<div class="box">
										<div class="content">
											<div class="content-overlay"></div> <img class="content-image" src="<?= base_url(); ?>/assets/images/img/banner-3.jpg" alt="project">
											<div class="content-details fadeIn-bottom">
												<h3 class="content-title">UKM UKKI</h3>
												<p class="content-text">Unit Kegiatan Kerohanian Islam. Organisasi ini berada dibawah naungan menteri sosial dan masyarakat.</p> <a href="#" class="learn-more-project-btn">learn more</a> </div>
										</div>
									</div>
								</div>
								<!-- / Project -->
								<!-- Project -->
								<div>
									<div class="box">
										<div class="content">
											<div class="content-overlay"></div> <img class="content-image" src="<?= base_url(); ?>/assets/images/img/banner-4.jpg" alt="project">
											<div class="content-details fadeIn-bottom">
												<h3 class="content-title">BEM FEB</h3>
												<p class="content-text">Organisasi ini berada di bawah naungan Menteri dalam negeri yang berada dalam satu fakultas yang sama.</p> <a href="#" class="learn-more-project-btn">learn more</a> </div>
										</div>
									</div>
								</div>
								<!-- / Project -->
								<!-- Project -->
								<div>
									<div class="box">
										<div class="content">
											<div class="content-overlay"></div> <img class="content-image" src="<?= base_url(); ?>/assets/images/img/banner-5.jpg" alt="project">
											<div class="content-details fadeIn-bottom">
												<h3 class="content-title">BEM FT</h3>
												<p class="content-text">Organisasi ini berada di bawah naungan Menteri dalam negeri yang berada dalam satu fakultas yang sama.</p> <a href="#" class="learn-more-project-btn">learn more</a> </div>
										</div>
									</div>
								</div>
								<!-- / Project -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- latest project end -->
		<!-- small contactus bar start -->
		<section class="contactus-bar">
			<div class="container">
				<div class="col-12 col-lg-12 align-item-center">
					<div class="contactus-bar-text text-center">
						<h2>Prestasi Terbaru</h2>
					</div>
				</div>
			</div>
		</section>
		<!-- small contactus bar end -->
		<!-- special project info start -->
		<?php foreach($getPrestasi as $data): ?>
				<section class="section">
				<div class="container">
					<div class="row row-eq-height">
						<div class="col-12 col-lg-6 col-md-6 item">
							<div class="special-project-info-img"> <img src="<?= base_url(); ?>/assets/images/prestasi/<?= $data['gambar_prestasi']?>" alt="img"> </div>
						</div>
						<div class="col-12 col-lg-6 col-md-6">
							<div class="special-project-info-wrapper">
								<h3>Tanggal Publikasi : <?= date('d-m-Y', $data['create_at']); ?></h3>
								<h2><?= $data['judul_prestasi'];?></h2>
								<hr>
								<p><?= substr($data['isi_prestasi'] ,0 ,150); ?></p> <a href="<?= base_url(); ?>home/detail_prestasi/<?= $data['id_prestasi']?>" class="special-project-know-btn">know more</a> </div>
						</div>
					</div>
				</div>
			</section>
		<?php endforeach; ?>
		<!-- special project info end -->
		<!-- counter start -->
		<section class="section counter-bg">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-3 col-md-6 item">
						<div class="company-counter-wrapper">
							<div class="count-number-box">
								<h3><?= $countUsers;?></h3> </div>
							<h2 class="count-info-name">Total Akun</h2> </div>
					</div>
					<div class="col-12 col-lg-3 col-md-6 item">
						<div class="company-counter-wrapper">
							<div class="count-number-box">
								<h3><?= $pengunjunghariini;?></h3> </div>
							<h2 class="count-info-name">Total Pengunjung Hari Ini</h2> </div>
					</div>
					<div class="col-12 col-lg-3 col-md-6 item">
						<div class="company-counter-wrapper">
							<div class="count-number-box">
								<h3><?= $totalpengunjung;?></h3> </div>
							<h2 class="count-info-name">Total Pengunjung</h2> </div>
					</div>
					<div class="col-12 col-lg-3 col-md-6 item">
						<div class="company-counter-wrapper">
							<div class="count-number-box">
								<h3><?= $pengunjungonline;?></h3> </div>
							<h2 class="count-info-name">Total Pengunjung Online</h2> </div>
					</div>
				</div>
			</div>
		</section>
		<!-- counterr end -->
		<!-- experts start -->
		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="main-heading-block">
							<h2 class="main-heading">Team biro kemahasiswaan dan alumni</h2> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-lg-3 col-md-6 item">
						<div class="experts-info-wrapper">
							<div class="content-experts">
								<div class="content-experts-overlay"></div> <img class="content-experts-image" src="<?= base_url(); ?>/assets/images/img/abah_mulus.jpg" alt="team">
								<div class="content-experts-details fadeIn-bottom">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="content-expert-info">
								<h2>Mulus Sugiharto,S.Sos.,M.Si</h2>
								<p>Kabiro Kemahasiswaan dan Alumni</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-3 col-md-6 item">
						<div class="experts-info-wrapper">
							<div class="content-experts">
								<div class="content-experts-overlay"></div> <img class="content-experts-image" src="<?= base_url(); ?>/assets/images/img/piah.jpg" alt="team">
								<div class="content-experts-details fadeIn-bottom">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="content-expert-info">
								<h2>Rafiah Ilmawati, S.S</h2>
								<p>Bidang Organisasi Kemahasiswaan, Minat dan Bkat</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-3 col-md-6 item">
						<div class="experts-info-wrapper">
							<div class="content-experts">
								<div class="content-experts-overlay"></div> <img class="content-experts-image" src="<?= base_url(); ?>/assets/images/img/sintia.jpg" alt="team">
								<div class="content-experts-details fadeIn-bottom">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="content-expert-info">
								<h2>Chintia Dwi Chandraini</h2>
								<p>Bidang Kesejahteraan dan Alumni</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-3 col-md-6 item">
						<div class="experts-info-wrapper">
							<div class="content-experts">
								<div class="content-experts-overlay"></div> <img class="content-experts-image" src="<?= base_url(); ?>/assets/images/img/presiden_mahasiswa.jpg" alt="team">
								<div class="content-experts-details fadeIn-bottom">
									<ul>
										<li><a href="https://www.facebook.com/11saifulsaprol"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="https://vt.tiktok.com/ZSepDB54V/"><i class="fab fa-twitter"></i></a></li>
										<li><a href="https://www.instagram.com/invites/contact/?i=dgb85t9fj175&utm_content=1g7rqqb"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="content-expert-info">
								<a href="<?= base_url(); ?>home/bem_u">
								<h2>Saiful</h2>
								<p>Presiden Mahasiswa</p></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- experts end -->
		<!-- latest news start -->
		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="main-heading-block">
							<h2 class="main-heading">Berita terbaru</h2> </div>
					</div>
				</div>
				<div class="row">
					<!-- singgel news -->
					<div class="col-12 col-lg-6 item">
						<div class="construction-news-wrapper">
							<div class="construction-news-img"> <img src="<?= base_url(); ?>/assets/images/berita/<?= $getOneBerita['gambar_berita'];?>" alt="img">
								<div class="date-box"> 
									<p><?= date('d', $getOneBerita['create_at']); ?></p>
									<p><?= date('M', $getOneBerita['create_at']); ?></p>
								</div>
							</div>
							<div class="construction-new-info">
								<h2><?= $getOneBerita['judul_berita'];?></h2>
								<p><?= substr($getOneBerita['isi_berita'] ,0 ,150); ?></p>
								<h2 class="text-center"><a class="learn-more-btn" href="<?= base_url(); ?>home/detail_berita/<?= $getOneBerita['id_berita']?>">Learn More</a></h2>
							</div>
							<div class="construction-news-action">
								<div class="connews-action-box"> <i class="fas fa-clock"></i> <span><?= date('d-m-Y', $getOneBerita['create_at']); ?></span> </div>
								<div class="connews-action-box"> <i class="material-icons">person</i> <span>Admin</span> </div>
							</div>
						</div>
					</div>
					<!-- double news -->
					<div class="col-12 col-lg-6 item">
						<?php foreach($getAllBerita as $data): ?>
								<div class="construction-news-wrapper">
								<div class="consnews-right-img">
									<div class="construction-news-img"> <img src="<?= base_url(); ?>/assets/images/berita/<?= $data['gambar_berita'];?>" alt="img">
										<div class="date-box">
											<p><?= date('d', $data['create_at']); ?></p>
											<p><?= date('M', $data['create_at']); ?></p>
										</div>
									</div>
								</div>
								<div class="consnews-right-info">
									<div class="construction-new-info">
										<h2><?= $data['judul_berita'];?></h2> </div>
									<div class="construction-news-action">
										<div class="connews-action-box"> <i class="fas fa-clock"></i> <span><?= date('d-m-Y', $data['create_at']); ?></span> </div>
										<div class="connews-action-box"> <i class="material-icons">person</i> <span>Admin</span> </div>
									</div>
									<div class="construction-new-info">
										<p><?= substr($data['isi_berita'] ,0 ,80); ?></p>
										<h2 class="text-center"><a class="learn-more-btn" href="<?= base_url(); ?>home/detail_berita/<?= $data['id_berita']?>">Learn More</a></h2>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</section>
		<!-- latest news end -->
		<!-- content section end -->
	</div>
	<!-- main content wrapper end -->

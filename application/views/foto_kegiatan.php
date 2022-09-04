<!-- content start -->
<div class="main-content-wrapper">
	<section class="breadcrumb-section about">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-5">
					<div class="breadcrumb-wrapper">
						<h2>Gallery Kegiatan</h2>
						<nav>
							<ul>
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Gallery</a></li>
								<li class="breadcrumb-item active"><a href="#">Kegiatan</a></li>
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
				<div class="col-12 col-lg-9">
					<div class="row">
						<?php foreach($getFotoKegiatan as $data): ?>
								<div class="col-12 col-lg-6 col-md-6 item">
								<div class="grid-news-wrapper">
									<div class="grid-news-item">
										<div class="grid-news-img"> <img src="<?= base_url(); ?>assets/images/foto_kegiatan/<?= $data['foto_kegiatan'];?>" alt="img"> </div>
										<div class="grid-news-info">
											<h2><?= $data['judul_kegiatan'];?></h2>
											<div class="grid-news-action-info">
												<div class="grid-news-action-list"> <span><i class="material-icons">calendar_today</i></span>
													<p><?= date('d-M-Y', $data['create_at']); ?></p>
												</div>
												<div class="grid-news-action-list"> <span><i class="material-icons">person</i></span>
													<p><?= $data['nama_ormawa'];?></p>
												</div>
											</div>
											<p><?= substr($data['deskripsi_kegiatan'] ,0 ,80); ?></p>
										</div>
										<div class="grid-news-button"> <a href="<?= base_url(); ?>home/detail_foto_kegiatan/<?= $data['id_foto_kegiatan']?>" class="news-read-more-btn">Read More</a> </div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>

						<div class="col-12">
							<div class="grid-news-paggination">
								<ul>
									<li><a href="#"><span>Prev</span></a></li>
									<li><a href="#"><span>1</span></a></li>
									<li><a href="#"><span>2</span></a></li>
									<li class="active"><a href="#"><span>3</span></a></li>
									<li><a href="#"><span>4</span></a></li>
									<li><a href="#"><span>5</span></a></li>
									<li><a href="#"><span>Next</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="blog-sidebar-wrapper">
						<div class="search-widget">
							<form>
								<div>
									<input type="text" class="search-widget-input" placeholder="Search....">
									<button type="submit" class="search-widget-btn"><i class="material-icons">search</i></button>
								</div>
							</form>
						</div>
						<div class="categories-widget">
							<h3 class="heading-widget">Categories</h3>
							<hr>
							<ul>
								<li><a href="#">Gallery</a></li>
								<li><a href="#">Kegiatan</a></li>
								<li><a href="#">Kemahasiswaaan</a></li>
								<li><a href="#">Badan Eksekutif Mahasiswa</a></li>
								<li><a href="#">Unit Kegiatan Mahasiswa</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- content end -->
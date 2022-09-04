<!-- content start -->
	<div class="main-content-wrapper">
		<section class="breadcrumb-section about">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-5">
						<div class="breadcrumb-wrapper">
							<h2>Detail Prestasi</h2>
							<nav>
								<ul>
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active"><a href="#">Prestasi</a></li>
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
						<div class="single-post-wrapper">
							<div class="post-content">
								<div class="post-image"> <img src="<?= base_url(); ?>/assets/images/prestasi/<?= $getDetailPrestasi['gambar_prestasi']?>" alt="img"> </div>
								<div class="post-body">
									<div class="post-meta"> 
										<span class="post-author">
												<i class="far fa-user"></i>
												<a href="#">Admin</a>
										</span> 
										<span class="post-cat">
												<i class="far fa-folder-open"></i>
												<a href="#">Prestasi</a>
										</span> 
										<span class="post-date">
												<i class="far fa-calendar"></i>
												<a href="#"><?= date('d-m-Y', $getDetailPrestasi['create_at']); ?></a>
										</span> 
									</div>
									<div class="post-title">
										<h2><?= $getDetailPrestasi['judul_prestasi'];?></h2> </div>
									<div class="post-entry-content">
										<p><?= $getDetailPrestasi['isi_prestasi']?></p>
									</div>
									<div class="tags-area d-flex align-item-center justify-content-between">
										<div class="post-tags"> <a href="#">Prestasi</a> <a href="#">Detail Prestasi</a> <a href="#">Kemahasiswaan</a> </div>
										<div class="share-item">
											<ul class="post-social-icons list-unstyled">
												<li>Share:</li>
												<li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
												<li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
												<li> <a href="#"><i class="fab fa-google-plus"></i></a> </li>
												<li> <a href="#"><i class="fab fa-linkedin"></i></a> </li>
											</ul>
										</div>
									</div>
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
									<li><a href="#">Prestasi</a></li>
									<li><a href="#">Detail Prestasi</a></li>
									<li><a href="#">Kemahasiswaan</a></li>
									<li><a href="#">Unit Kegiatan Kemahasiswaan</a></li>
								</ul>
							</div>
							<div class="recent-post-widget">
								<h3 class="heading-widget">Recent Posts</h3>
								<hr>
								<div class="post">
									<?php foreach($getPrestasi as $data): ?>
										<a href="<?= base_url(); ?>home/detail_prestasi/<?= $data['id_prestasi']?>"> <img src="<?= base_url(); ?>/assets/images/prestasi/<?= $data['gambar_prestasi']?>" alt="img"> </a>
										<h4>
											<a href="<?= base_url(); ?>home/detail_prestasi/<?= $data['id_prestasi']?>"> <?= $data['judul_prestasi']?></a>
										</h4>
										<span class="date">Tanggal Publikasi : <?= date('d-m-Y', $data['create_at']); ?></span> 
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- content end -->
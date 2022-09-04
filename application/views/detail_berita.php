<!-- content start -->
	<div class="main-content-wrapper">
		<section class="breadcrumb-section about">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-5">
						<div class="breadcrumb-wrapper">
							<h2>Detail Berita</h2>
							<nav>
								<ul>
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active"><a href="#">Berita</a></li>
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
								<div class="post-image"> <img src="<?= base_url(); ?>/assets/images/berita/<?= $getDetailBerita['gambar_berita']?>" alt="img"> </div>
								<div class="post-body">
									<div class="post-meta"> 
										<span class="post-author">
												<i class="far fa-user"></i>
												<a href="#">Admin</a>
										</span> 
										<span class="post-cat">
												<i class="far fa-folder-open"></i>
												<a href="#">Berita</a>
										</span> 
										<span class="post-date">
												<i class="far fa-calendar"></i>
												<a href="#"><?= date('d-m-Y', $getDetailBerita['create_at']); ?></a>
										</span> 
									</div>
									<div class="post-title">
										<h2><?= $getDetailBerita['judul_berita'];?></h2> </div>
									<div class="post-entry-content">
										<p><?= $getDetailBerita['isi_berita']?></p>
									</div>
									<div class="tags-area d-flex align-item-center justify-content-between">
										<div class="post-tags"> <a href="#">Berita</a> <a href="#">Detail Berita</a> <a href="#">Kemahasiswaan</a> </div>
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
									<li><a href="#">Berita</a></li>
									<li><a href="#">Detail Berita</a></li>
									<li><a href="#">Kemahasiswaan</a></li>
									<li><a href="#">Badan Eksekutif Mahasiswa</a></li>
									<li><a href="#">Unit Kegiatan Kemahasiswaan</a></li>
								</ul>
							</div>
							<div class="recent-post-widget">
								<h3 class="heading-widget">Recent Posts</h3>
								<hr>
								<div class="post">
									<?php foreach($getBerita as $data): ?>
										<a href="<?= base_url(); ?>home/detail_berita/<?= $data['id_berita']?>"> <img src="<?= base_url(); ?>/assets/images/berita/<?= $data['gambar_berita']?>" alt="img"> </a>
										<h4>
											<a href="<?= base_url(); ?>home/detail_berita/<?= $data['id_berita']?>"> <?= $data['judul_berita']?></a>
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
<!-- content start -->
		<div class="main-content-wrapper">
			<section class="breadcrumb-section about">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-5">
							<div class="breadcrumb-wrapper">
								<h2>Informasi Kesejahteraan</h2>
								<nav>
									<ul>
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item"><a href="#">Informasi</a></li>
										<li class="breadcrumb-item active"><a href="#">Kesejahteraan</a></li>
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
						<?php foreach($getInformasiKesejahteraan as $data): ?>
								<div class="col-12 col-lg-12">
								<div class="website-info-wrapper">
									<h2 class="main-heading"><?= $data['judul_informasi']; ?></h2>
									<p class="text-italic"><?= $data['isi_informasi']; ?></p>
									<a href="<?= base_url(); ?>admin/download_informasi/<?= $data['file_informasi']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png" title="<?= $data['file_informasi']; ?>"></a>
									<br><br>
									<p>Tanggal Publikasi : <?= date('d-m-Y', $data['create_at']); ?></p>
									<hr>
								</div>
							</div>
						<?php endforeach; ?>
						
					</div>
				</div>
			</section>
		</div>
		<!-- content end -->
<!-- footer start -->
<footer>
	<div class="footer-top">
		<div class="container-fluid">
			<div class="row align-item-center">
				<div class="col-lg-3 col-md-3">
					<div class="footer-logo">
						<a href="../construct/index.html"> <img src="<?= base_url(); ?>assets/images/kemahasiswaan.png" alt="footer-logo"> </a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<div class="row">
						<div class="col-lg-6 col-md-7">
							<div class="footer-top-right-info">
								<div class="footer-top-info-icon"> <span><i class="fas fa-envelope-open-text"></i></span> </div>
								<div class="footer-top-info-text">
									<h2>If you Like this, send your Feedback here</h2>
									<p>Stay in touch with us to get latest news.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-5 footer-form">
							<div class="footer-top-right-form">
								<?php echo form_open_multipart('home/feedback_here');?>
									<input id="txtEmail" class="subscribe-input" name="email" type="text" placeholder="Email" required>
									<button id="demo" type="submit" class="submit-btn-btn"><i class="fa fa-envelope"></i></button>
								<?php echo form_close();?>
							</div>
							<div class="error-msg" id="error">
								<p>Invalid email address</p>
							</div>
							<div class="success-msg" id="success">
								<p><span class="check-success-icon"><i class="fa fa-check"></i></span>Sent Successfully!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-middle">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-lg-3 col-md-6 item">
					<div class="footer-block-list">
						<h2 class="footer-middle-heading">About Us</h2>
						<p class="footer-middle-text"><?= substr($getProfil['isi'] ,0 ,200); ?></p>
						<h2 class="footer-middle-heading">Ulasan Singkat</h2>
						<p class="footer-middle-text"></p> <a href="#" class="footer-request-btn">Kemahasiswan</a> </div>
				</div>
				<div class="col-12 col-lg-3 col-md-6 item">
					<div class="footer-block-list">
						<h2 class="footer-middle-heading">Biro dan Program Sarjana</h2>
						<div class="footer-menu-list-wrapper">
							<ul class="footer-menu-list">
								<li> <a href="http://bpm.uwp.ac.id/" target="blank">BPM</a> </li>
								<li> <a href="http://lsp.uwp.ac.id/" target="blank">LSP</a> </li>
								<li> <a href="http://lib.uwp.ac.id/" target="blank">Perpus</a> </li>
								<li> <a href="http://ict.uwp.ac.id/" target="blank">TIK</a> </li>
								<li> <a href="http://cdc.uwp.ac.id/" target="blank">CDC</a> </li>
								<li> <a href="http://panorama.uwp.ac.id/" target="blank">Panorama</a> </li>
								<li> <a href="https://olp.uwp.ac.id/" target="blank">OLP</a> </li>
							</ul>
							<ul class="footer-menu-list">
								<li> <a href="http://feb.uwp.ac.id/" target="blank">Fakultas Ekonomi Bisnis</a> </li>
								<li> <a href="http://fp.uwp.ac.id/" target="blank">Fakultas Pertanian</a> </li>
								<li> <a href="http://fisip.uwp.ac.id/" target="blank">Fakultas Isip</a> </li>
								<li> <a href="http://fh.uwp.ac.id/" target="blank">Fakultas Hukum</a> </li>
								<li> <a href="http://ft.uwp.ac.id/" target="blank">Fakultas Teknik</a> </li>
								<li> <a href="http://fbs.uwp.ac.id/" target="blank">Fakultas Bahasa dan Sastra</a> </li>
								<li> <a href="http://fpsi.uwp.ac.id/" target="blank">Fakultas Psikologi</a> </li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3 col-md-6 item">
					<div class="footer-block-list">
						<h2 class="footer-middle-heading">Partners dan Quick Link</h2>
						<div class="footer-menu-list-wrapper">
							<ul class="footer-menu-list">
								<li> <a href="https://wijayaputra.sch.id/" target="blank">SWP</a> </li>
								<li> <a href="https://stkipbim.ac.id/main/" target="blank">TKIP BIM</a> </li>
								<li> <a href="https://asmisurabaya.ac.id/" target="blank">ASMI Surabaya</a> </li>
							</ul>
							<ul class="footer-menu-list">
								<li> <a href="https://forlap.kemdikbud.go.id/mahasiswa" target="blank">FORLAP UWP</a> </li>
								<li> <a href="https://www.banpt.or.id/" target="blank">BAN-PT</a> </li>
								<li> <a href="http://sister.uwp.ac.id/auth/login" target="blank">SISTER UWP</a> </li>
								<li> <a href="http://www.serdos.diktis.id/login" target="blank">Sertifikasi Dosen</a> </li>
								<li> <a href="http://www.kopertis7.go.id/materi_bkd.php" target="blank">Beban Kerja Dosen</a> </li>
								<li> <a href="https://garuda.kemdikbud.go.id/" target="blank">Portal Garuda</a> </li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3 col-md-6 item">
					<div class="footer-block-list">
						<h2 class="footer-middle-heading">Contact Us</h2>
						<div class="footercontact-list-item">
							<div class="footercontact-list-icon"> <i class="fas fa-map-marked-alt"></i> </div>
							<div class="footercontact-list-info">
								<h2>OFFICIAL ADDRESS</h2>
								<p>Jl. Raya Benowo
									<br> No. 1-3 
									<br> Surabaya</p>
							</div>
						</div>
						<div class="footercontact-list-item">
							<div class="footercontact-list-icon"> <i class="fas fa-phone-alt"></i> </div>
							<div class="footercontact-list-info">
								<h2>contact details</h2>
								<p><a title="Contact Persone" href="https:/wa.me/6283856761361" target="_blank" rel="noopener">0838-5676-1361</a>
									<br> <a href="#">kemahasiswaan@uwp.ac.id</a> </p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-lg-6 col-md-6">
					<p>Copyright © 2022 <a href="http://ict.uwp.ac.id/">TIK UWP</a>.</p>
				</div>
				<div class="col-12 col-lg-6 col-md-6">
					<div class="terms-policy">
						<span><a class="divide-icon" href="#">Universitas Wijaya Putra</a></span>
						<span><a href="#">Biro Kemahasiswaan</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	</footer>

	<!-- Modal -->
	<div class="modal fade quote" id="getquote" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
					<div class="modal-content">
							<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
							</div>
							<div class="modal-body">
									<?php echo form_open_multipart('auth');?>
											<div class="row">
													<div class="col-12">
															<h2 class="sub-heading-medium m-15px-b text-center">BIRO KEMAHASISWAAN</h2>
													</div>
													<div class="col-12">
															<div class="quote-form-wrapper">
																	<label class="form-label">Username</label>
																	<input type="text" class="form-input" name="username" placeholder="Username" required>
															</div>
													</div>
													<div class="col-12">
															<div class="quote-form-wrapper">
																	<label class="form-label">Password</label>
																	<input type="password" class="form-input" name="password" placeholder="Password" required>
															</div>
													</div>
													<div class="col-12">
															<button type="submit" class="request-quote-btn">login</button>
													</div>
											</div>
									<?php echo form_close();?>
							</div>
					</div>
			</div>
	</div>

	<!-- modal tambah -->
	<div class="modal fade" id="pengajuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title text-center" id="exampleModalLabel">Form Pengajuan Kesejahteraan</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo form_open_multipart('home/tambah_pengajuan_kesejahteraan_mahasiswa');?>
					<div class="form-group">
						<label>Nama Mahasiswa</label>
						<input type="text" name="nama" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>NPM</label>
						<input type="text" name="npm" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Prodi</label>
						<div class="input-group mb-3">
							<select name="prodi" class="custom-select" id="inputGroupSelect01" required="">
								<option value=" " selected>Choose...</option>
								<option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
								<option value="Manajemen">Manajemen</option>
								<option value="Akuntansi">Akuntansi</option>
								<option value="Agribisnis">Agribisnis</option>
								<option value="Administrasi Negara">Administrasi Negara</option>
								<option value="Ilmu Hukum">Ilmu Hukum</option>
								<option value="Teknik Mesin">Teknik Mesin</option>
								<option value="Teknik Industri">Teknik Industri</option>
								<option value="Teknik Informatika">Teknik Informatika</option>
								<option value="Sastra Inggris">Sastra Inggris</option>
								<option value="Psikologi">Psikologi</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label>Semester</label>
						<div class="input-group mb-3">
							<select name="semester" class="custom-select" id="inputGroupSelect01" required="">
								<option value=" " selected>Choose...</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label>Fakultas</label>
						<div class="input-group mb-3">
							<select name="fakultas" class="custom-select" id="inputGroupSelect01" required="">
								<option value=" " selected>Choose...</option>
								<option value="Fakultas Ekomoni dan Bisnis">Fakultas Ekomoni dan Bisnis</option>
								<option value="Fakultas Pertanian">Fakultas Pertanian</option>
								<option value="Fakultas Ilmu Sosial dan Politik">Fakultas Ilmu Sosial dan Politik</option>
								<option value="Fakultas Teknik">Fakultas Teknik</option>
								<option value="Fakultas Bahasa dan Sastra">Fakultas Bahasa dan Sastra</option>
								<option value="Fakultas Psikologi">Fakultas Psikologi</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label>KTM</label>
						<input type="file" name="ktm" class="form-control" size="30" required="">
						<small class="text-danger"> Disarankan ukuran file max 3MB. Format File <strong>Pdf</strong>.</small>
					</div>        
					<div class="form-group">
						<label>KTP</label>
						<input type="file" name="ktp" class="form-control" size="30" required="">
						<small class="text-danger"> Disarankan ukuran file max 3MB.Format File <strong>Pdf</strong>.</small>
					</div>
					<div class="form-group">
						<label>KHS</label>
						<input type="file" name="khs" class="form-control" size="30" required="">
						<small class="text-danger"> Disarankan ukuran file max 3MB.Format File <strong>Pdf</strong>.</small>
					</div>
					<div class="form-group">
						<label>Surat Aktif</label>
						<input type="file" name="surat_aktif" class="form-control" size="30" required="">
						<small class="text-danger"> Disarankan ukuran file max 3MB.Format File <strong>Pdf</strong>.</small>
					</div>
					<div class="form-group">
						<label>SKTM</label>
						<input type="file" name="sktm" class="form-control" size="30" required="">
						<small class="text-danger"> Disarankan ukuran file max 3MB.Format File <strong>Pdf</strong>.</small>
					</div>
					<div class="form-group">
						<label>Surat Pernyataan Terdampak Covid</label>
						<input type="file" name="surat_pernyataan_terdampak_covid" class="form-control" size="30" required="">
						<small class="text-danger"> Disarankan ukuran file max 3MB.Format File <strong>Pdf</strong>.</small>
					</div>
					<div class="form-group">
						<label>Bidang Kesejahteraan</label>
						<div class="input-group mb-3">
							<select name="bidang_kesejahteraan" class="custom-select" id="inputGroupSelect01" required="">
								<option value=" " selected>Choose...</option>
								<option value="LLDIKTI">LLDIKTI</option>
								<option value="Internal">Internal</option>
								<option value="Bank Jatim">Bank Jatim</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
					<button type="reset" class="btn btn-success">Reset</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
	<!-- and modal tambah -->
  
	<!-- footer end --><a href="#" class="back-to-top"><i class="material-icons">expand_less</i></a>
	<!-- Script tag -->
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/owl.carousel.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/main.js"></script>
	<!-- Page Specific JS File -->
  <!-- <script src="<?= base_url(); ?>assets/js/page/auth-register.js"></script> -->

  <!-- Template Sweetalert2 JS-->
  <script src="<?= base_url(); ?>assets/Sweetalert2/Sweetalert2.min.js"></script>

  <script type="text/javascript">
		function tambahData(){
			var email = $("[name:'email']").val();
			consol.log(email);

			$.ajax({
				type : 'POST',
				data: 'email='+email,
				url : '<?= base_url().'home/feedback_here'?>',
				dataType : 'json',
				success : function(hasil){

				}
			});
		}

    var flash = $('#flash').data('flash');
    if (flash) {
      Swal.fire({
        icon: 'success',
        title: 'Success',
        text: flash,
        showClass: {
          popup: 'animate__animated animate__swing'
        },
        hideClass: {
          popup: 'animate__animated animate__flipOutY'
        }
      })
    }
  </script>
</body>

</html>
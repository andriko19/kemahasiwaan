<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent:: __construct();
		
		$this->load->model('home_model');
		$this->load->model('admin_model');
	}

	public function index()
	{
		$ip    = $this->input->ip_address(); // Mendapatkan IP user
		$date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
		$waktu = time(); //
		$timeinsert = date("Y-m-d H:i:s");
			
		// Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
		$s = $this->db->query("SELECT * FROM visitor WHERE ip='".$ip."' AND date='".$date."'")->num_rows();
		$ss = isset($s)?($s):0;
			
		
		// Kalau belum ada, simpan data user tersebut ke database
		if($ss == 0){
		$this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
		}
		
		// Jika sudah ada, update
		else{
		$this->db->query("UPDATE visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
		}
		
			
		$pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='".$date."' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung
		
		$dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row(); 
		
		$totalpengunjung = isset($dbpengunjung->hits)?($dbpengunjung->hits):0; // hitung total pengunjung
		
		$bataswaktu = time() - 300;
		
		$pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '".$bataswaktu."'")->num_rows(); // hitung pengunjung online
			
		
		$data['pengunjunghariini']=$pengunjunghariini;
		$data['totalpengunjung']=$totalpengunjung;
		$data['pengunjungonline']=$pengunjungonline;

		$data['getBanner'] = $this->home_model->getBanner();
		$data['getProfil'] = $this->home_model->getProfil();
		$data['getPrestasi'] = $this->home_model->getPrestasi();
		$data['countUsers'] = $this->db->query("SELECT * FROM users")->num_rows();
		$data['getOneBerita'] = $this->home_model->getOneBerita();
		$data['getAllBerita'] = $this->home_model->getAllBerita();

		// var_dump($data['getAllBerita']);
		// die;

		$this->load->view('templates/home-header');
		$this->load->view('home', $data);
		$this->load->view('templates/home-footer', $data);
	}

	public function tambah_pengajuan_kesejahteraan_mahasiswa()
	{
		$config['upload_path']          = './assets/file_pengajuan/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 5048;
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('ktm') || ! $this->upload->do_upload('ktp') || ! $this->upload->do_upload('khs') || ! $this->upload->do_upload('surat_aktif') || ! $this->upload->do_upload('sktm') || ! $this->upload->do_upload('surat_pernyataan_terdampak_covid') )
		{
			$data = $this->upload->display_errors();
			?>
				<link rel="stylesheet" href="<?= base_url(); ?>assets/sweetalert2/sweetalert2.min.css">
				<link rel="stylesheet" href="<?= base_url(); ?>assets/sweetalert2/animate.min.css">
				<script src="<?= base_url(); ?>assets/Sweetalert2/Sweetalert2.min.js"></script>
				<style type="text/css">
					body {
						font-family: "Helvetice Neve", Helvetice, Arial, sans-serif;
						font-size : 1.124em;
						font-weight: normal;
					}
				</style>
				<body></body>

				<script type="text/javascript">
					Swal.fire({
						icon: 'error',
						title: 'Peringatan',
						text: 'File Yang Anda Upload Tidak Sesuai!'
					}).then((result) => {
						window.location='<?=site_url('home')?>';
					}) 
				</script>
			<?php

		} else
		{
			// ktm
			if (!empty($_FILES['ktm']['name']) ) {
				$this->upload->do_upload('ktm');
				$ktm = $this->upload->data();
				$fileKtm = $ktm['file_name'];
			}

			// ktp
			if (!empty($_FILES['ktp']['name']) ) {
				$this->upload->do_upload('ktp');
				$ktp = $this->upload->data();
				$fileKtp = $ktp['file_name'];
			}

			// khs
			if (!empty($_FILES['khs']['name']) ) {
				$this->upload->do_upload('khs');
				$khs = $this->upload->data();
				$fileKhs = $khs['file_name'];
			}

			// surat_aktif
			if (!empty($_FILES['surat_aktif']['name']) ) {
				$this->upload->do_upload('surat_aktif');
				$surat_aktif = $this->upload->data();
				$fileSuratAktif = $surat_aktif['file_name'];
			}

			// sktm
			if (!empty($_FILES['sktm']['name']) ) {
				$this->upload->do_upload('sktm');
				$sktm = $this->upload->data();
				$fileSktm = $sktm['file_name'];
			}

			// sptc
			if (!empty($_FILES['surat_pernyataan_terdampak_covid']['name']) ) {
				$this->upload->do_upload('surat_pernyataan_terdampak_covid');
				$sptc = $this->upload->data();
				$fileSptc = $sptc['file_name'];
			}

			$data['nama'] = $this->input->post('nama', TRUE);
			$data['npm'] = $this->input->post('npm', TRUE);
			$data['prodi'] = $this->input->post('prodi', TRUE);
			$data['semester'] = $this->input->post('semester', TRUE);
			$data['fakultas'] = $this->input->post('fakultas', TRUE);
			$data['ktm'] = $fileKtm;
			$data['ktp'] = $fileKtp;
			$data['khs'] = $fileKhs;
			$data['surat_aktif'] = $fileSuratAktif ;
			$data['sktm'] = $fileSktm;
			$data['surat_pernyataan_terdampak_covid'] = $fileSptc;
			$data['bidang_kesejahteraan'] = $this->input->post('bidang_kesejahteraan', TRUE);
			$data['create_at'] = time();

			$this->admin_model->tambah_pengajuan_kesejahteraan($data);
			?>
				<link rel="stylesheet" href="<?= base_url(); ?>assets/sweetalert2/sweetalert2.min.css">
				<link rel="stylesheet" href="<?= base_url(); ?>assets/sweetalert2/animate.min.css">
				<script src="<?= base_url(); ?>assets/Sweetalert2/Sweetalert2.min.js"></script>
				<style type="text/css">
					body {
						font-family: "Helvetice Neve", Helvetice, Arial, sans-serif;
						font-size : 1.124em;
						font-weight: normal;
					}
				</style>
				<body></body>

				<script type="text/javascript">
					Swal.fire({
						icon: 'success',
						title: 'Success',
						text: 'Pengajuan Kesejahteraan, Berhasil Tersimpan!'
					}).then((result) => {
						window.location='<?=site_url('home')?>';
					}) 
				</script>
			<?php
		}
	}

	public function detail_profil()
	{
		$data['getProfil'] = $this->home_model->getProfil();

		$this->load->view('templates/home-header');
		$this->load->view('detail_profil', $data);
		$this->load->view('templates/home-footer');
	}

	public function detail_prestasi($id_prestasi)
	{
		$data['getProfil'] = $this->home_model->getProfil();
		$data['getPrestasi'] = $this->home_model->getPrestasi();
		$data['getDetailPrestasi'] = $this->home_model->getDetailPrestasi($id_prestasi);

		$this->load->view('templates/home-header');
		$this->load->view('detail_prestasi', $data);
		$this->load->view('templates/home-footer');
	}

	public function detail_berita($id_berita)
	{
		$data['getProfil'] = $this->home_model->getProfil();
		$data['getBerita'] = $this->home_model->getAllBerita();
		$data['getDetailBerita'] = $this->home_model->getDetailBerita($id_berita);

		$this->load->view('templates/home-header');
		$this->load->view('detail_berita', $data);
		$this->load->view('templates/home-footer');
	}

	public function feedback_here()
	{
		$data['email'] = $this->input->post('email');
		$data['create_at'] = time();

		$this->home_model->tambah_feedback_here($data);
		redirect('home');
	}

	public function informasi_kesejahteraan()
	{
		$data['getProfil'] = $this->home_model->getProfil();
		$data['getInformasiKesejahteraan'] = $this->home_model->getInformasiKesejahteraan();

		$this->load->view('templates/home-header');
		$this->load->view('informasi_kesejahteraan', $data);
		$this->load->view('templates/home-footer', $data);
	}

	public function foto_kegiatan()
	{
		$data['getProfil'] = $this->home_model->getProfil();
		$data['getFotoKegiatan'] = $this->home_model->getFotoKegiatan();

		$this->load->view('templates/home-header');
		$this->load->view('foto_kegiatan', $data);
		$this->load->view('templates/home-footer', $data);
	}

	public function detail_foto_kegiatan($id_foto_kegiatan)
	{
		$data['getProfil'] = $this->home_model->getProfil();
		$data['getDetailFotoKegiatan'] = $this->home_model->getDetailFotoKegiatan($id_foto_kegiatan);

		$this->load->view('templates/home-header');
		$this->load->view('detail_foto_kegiatan', $data);
		$this->load->view('templates/home-footer', $data);
	}

	public function informasi_umum()
	{
		$data['getProfil'] = $this->home_model->getProfil();
		$data['getInformasiUmum'] = $this->home_model->getInformasiUmum();

		$this->load->view('templates/home-header');
		$this->load->view('informasi_umum', $data);
		$this->load->view('templates/home-footer', $data);
	}

	public function bem_u()
	{
		$data['getProfil'] = $this->home_model->getProfil();
		// $data['getInformasiUmum'] = $this->home_model->getInformasiUmum();

		$this->load->view('templates/home-header');
		$this->load->view('bem_u');
		$this->load->view('templates/home-footer', $data);
	}


	public function contact()
	{
		$data['getProfil'] = $this->home_model->getProfil();

		$this->load->view('templates/home-header');
		$this->load->view('contact');
		$this->load->view('templates/home-footer', $data);
	}

}
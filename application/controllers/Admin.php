<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function __construct()
	{
		parent:: __construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->library('form_validation');
		$this->load->model('admin_model');
	}

	public function index()
	{
		// total banner
		$data['totalBanner'] = $this->db->query("SELECT * FROM banner")->num_rows(); 

		// total berita
		$data['totalBerita'] = $this->db->query("SELECT * FROM berita")->num_rows(); 

		// total berkas
		$data['totalBerkas'] = $this->db->query("SELECT * FROM berkas")->num_rows(); 

		// total foto kegiatan
		$data['totalFotoKegiatan'] = $this->db->query("SELECT * FROM foto_kegiatan")->num_rows(); 

		// total informasi
		$data['totalInformasi'] = $this->db->query("SELECT * FROM informasi")->num_rows(); 

		// total informasi kesejahteraan
		$data['totalInformasiKesejahteraan'] = $this->db->query("SELECT * FROM informasi_kesejahteraan")->num_rows(); 

		// total pengajuan kesejahteraan
		$data['totalPengajuanKesejahteraan'] = $this->db->query("SELECT * FROM pengajuan_kesejahteraan")->num_rows(); 

		// total prestasi
		$data['totalPrestasi'] = $this->db->query("SELECT * FROM prestasi")->num_rows(); 

		// total akun
		$data['totalAkun'] = $this->db->query("SELECT * FROM users")->num_rows(); 

		// total pengunjung
		$date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
		$data['pengunjunghariini']  = $this->db->query("SELECT * FROM visitor WHERE date='".$date."' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung
		$dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row(); 
		$data['totalpengunjung'] = isset($dbpengunjung->hits)?($dbpengunjung->hits):0; // hitung total pengunjung
		$bataswaktu = time() - 300;
		$data['pengunjungonline']  = $this->db->query("SELECT * FROM visitor WHERE online > '".$bataswaktu."'")->num_rows(); // hitung pengunjung online

		// tampil view
		$user = $this->session->userdata('username');
		$data['user'] 		= $this->admin_model->user($user);
		$data['title'] 		= 'Dashboard';
		
		$this->load->view('templates/admin-header', $data);
		$this->load->view('templates/admin-navbar', $data);
		$this->load->view('templates/admin-sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates/admin-footer');
	}

	// dashboard informasi
	public function dashboard_informasi()
	{
		$user = $this->session->userdata('username');
		$data['user'] 		= $this->admin_model->user($user);

		$role = $data['user']['role'];

		// var_dump($role);
		// die;

		if ($role == "bem") {
			$data['informasi'] = $this->admin_model->getInformasiBem($role);
		} else if ($role == "ormawa") {
			$data['informasi'] = $this->admin_model->getInformasiOrmawa($role);
		} 

		
		$data['title'] 		= 'Dashboard';
		
		$this->load->view('templates/admin-header', $data);
		$this->load->view('templates/admin-navbar', $data);
		$this->load->view('templates/admin-sidebar');
		$this->load->view('admin/dashboard_informasi', $data);
		$this->load->view('templates/admin-footer');
	}

	// banner
	public function banner()
	{
		$user = $this->session->userdata('username');
		$data['user'] 	= $this->admin_model->user($user);
		$data['banner'] = $this->admin_model->getBanner();
		$data['title'] 	= 'Banner';
		
		$this->load->view('templates/admin-header', $data);
		$this->load->view('templates/admin-navbar', $data);
		$this->load->view('templates/admin-sidebar');
		$this->load->view('admin/banner', $data);
		$this->load->view('templates/admin-footer');
	}

	public function tambah_banner()
	{
		$config['upload_path']          = './assets/images/banner/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;
		// $config['max_width']            = 1280;
		// $config['max_height']           = 570;
		// $config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar_banner'))
		{
			$data = $this->upload->display_errors();
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
   			. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/banner');
		} else
		{
			$data['judul_banner'] = $this->input->post('judul_banner', TRUE);
			$data['deskripsi'] = $this->input->post('deskripsi_banner', TRUE);
			$data['gambar_banner'] = $this->upload->data('file_name');
			$data['create_at'] = time();

			$this->admin_model->tambah_banner($data);
			$this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  		Banner Berhasil <strong> DiTambahkan!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/banner');
		}	
	}

	public function ubah_banner()
	{
		$id_banner = $this->input->post('id_banner');
		$file = $this->db->get_where('banner',['id_banner' => $id_banner])->row_array();

		$data = [
			'judul_banner' => $this->input->post('judul_banner', TRUE),
			'deskripsi' => $this->input->post('deskripsi', TRUE),
			'create_at' => time(),
		];

		// jika ada gambar yang diupload
		$upload_file = $_FILES['gambar_banner']['name'];
		
		if ($upload_file) {
			$config['upload_path']          = './assets/images/banner/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			// $config['max_width']            = 1280;
			// $config['max_height']           = 570;
			// $config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar_banner'))	{
				$file_lama = $file['gambar_banner'];
					if($file_lama != 'default.jpg') {
						unlink(FCPATH . 'assets/images/banner/' . $file_lama);
					}
				$file_baru = $this->upload->data('file_name');
				$this->db->set('gambar_banner', $file_baru);
			} else
			{
				$data = $this->upload->display_errors();
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
					. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
				redirect('admin/banner');
			}	
		}
		$this->db->where('id_banner',$id_banner);
    $this->db->update('banner', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  		Banner Berhasil<strong> Diubah!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		redirect('admin/banner');
	}

	public function hapus_banner($id_banner)
	{
		$data = $this->admin_model->getDataByIdBanner($id_banner)->row();
		$gambar_banner ='./assets/images/banner/' . $data->gambar_banner;

		if (is_readable($gambar_banner) && unlink($gambar_banner)) {
			$this->admin_model->hapusBanner($id_banner);
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  		Banner Berhasil<strong> Dihapus!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
			redirect('admin/banner');
		} else {
			echo "Gagal";
		}
	}

	// profil
	public function profil()
	{
		$user = $this->session->userdata('username');
		$data['user'] 	= $this->admin_model->user($user);
		$data['profil'] = $this->admin_model->getProfil();
		$data['title'] 	= 'Profil';
		
		$this->load->view('templates/admin-header', $data);
		$this->load->view('templates/admin-navbar', $data);
		$this->load->view('templates/admin-sidebar');
		$this->load->view('admin/profil', $data);
		$this->load->view('templates/admin-footer');
	}

	public function tambah_profil()
	{
		$config['upload_path']          = './assets/images/profil/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;
		// $config['max_width']            = 1280;
		// $config['max_height']           = 570;
		// $config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar_profil'))
		{
			$data = $this->upload->display_errors();
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
   			. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/profil');
		} else
		{
			$data['judul'] = $this->input->post('judul_profil', TRUE);
			$data['isi'] = $this->input->post('deskripsi_profil', TRUE);
			$data['gambar'] = $this->upload->data('file_name');
			$data['create_at'] = time();

			$this->admin_model->tambah_profil($data);
			$this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  		Profil Berhasil <strong> DiTambahkan!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/profil');
		}	
	}

	public function ubah_profil()
	{
		$id_profil = $this->input->post('id_tentang_kemahasiswaan');
		$file = $this->db->get_where('tentang_kemahasiswaan',['id_tentang_kemahasiswaan' => $id_profil])->row_array();

		$data = [
			'judul' => $this->input->post('judul_profil', TRUE),
			'isi' => $this->input->post('deskripsi_profil', TRUE),
			'create_at' => time(),
		];

		// jika ada gambar yang diupload
		$upload_file = $_FILES['gambar_profil']['name'];
		
		if ($upload_file) {
			$config['upload_path']          = './assets/images/profil/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			// $config['max_width']            = 1280;
			// $config['max_height']           = 570;
			// $config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar_profil'))	{
				$file_lama = $file['gambar'];
					if($file_lama != 'default.jpg') {
						unlink(FCPATH . 'assets/images/profil/' . $file_lama);
					}
				$file_baru = $this->upload->data('file_name');
				$this->db->set('gambar', $file_baru);
			} else
			{
				$data = $this->upload->display_errors();
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
					. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
				redirect('admin/profil');
			}	
		}
		$this->db->where('id_tentang_kemahasiswaan',$id_profil);
    $this->db->update('tentang_kemahasiswaan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  		Profil Berhasil<strong> Diubah!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		redirect('admin/profil');
	}

	// berita
	public function berita()
	{
		$user = $this->session->userdata('username');
		$data['user'] 	= $this->admin_model->user($user);
		$data['berita'] = $this->admin_model->getBerita();
		$data['title'] 	= 'Berita';
		
		$this->load->view('templates/admin-header', $data);
		$this->load->view('templates/admin-navbar', $data);
		$this->load->view('templates/admin-sidebar');
		$this->load->view('admin/berita', $data);
		$this->load->view('templates/admin-footer');
	}

	public function tambah_berita()
	{
		$config['upload_path']          = './assets/images/berita/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;
		// $config['max_width']            = 1280;
		// $config['max_height']           = 570;
		// $config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar_berita'))
		{
			$data = $this->upload->display_errors();
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
   			. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/berita');
		} else
		{
			$data['judul_berita'] = $this->input->post('judul_berita', TRUE);
			$data['isi_berita'] = $this->input->post('isi_berita', TRUE);
			$data['gambar_berita'] = $this->upload->data('file_name');
			$data['create_at'] = time();

			$this->admin_model->tambah_berita($data);
			$this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  		Berita Berhasil <strong> DiTambahkan!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/berita');
		}	
	}

	public function ubah_berita()
	{
		$id_berita = $this->input->post('id_berita');
		$file = $this->db->get_where('berita',['id_berita' => $id_berita])->row_array();

		$data = [
			'judul_berita' => $this->input->post('judul_berita', TRUE),
			'isi_berita' => $this->input->post('isi_berita', TRUE),
			'create_at' => time(),
		];

		// jika ada gambar yang diupload
		$upload_file = $_FILES['gambar_berita']['name'];
		
		if ($upload_file) {
			$config['upload_path']          = './assets/images/berita/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			// $config['max_width']            = 1280;
			// $config['max_height']           = 570;
			// $config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar_berita'))	{
				$file_lama = $file['gambar_berita'];
					if($file_lama != 'default.jpg') {
						unlink(FCPATH . 'assets/images/berita/' . $file_lama);
					}
				$file_baru = $this->upload->data('file_name');
				$this->db->set('gambar_berita', $file_baru);
			} else
			{
				$data = $this->upload->display_errors();
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
					. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
				redirect('admin/berita');
			}	
		}
		$this->db->where('id_berita',$id_berita);
    $this->db->update('berita', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  		Berita Berhasil<strong> Diubah!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		redirect('admin/berita');
	}

	public function hapus_berita($id_berita)
	{
		$data = $this->admin_model->getDataByIdBerita($id_berita)->row();
		$gambar_berita ='./assets/images/berita/' . $data->gambar_berita;

		if (is_readable($gambar_berita) && unlink($gambar_berita)) {
			$this->admin_model->hapusBerita($id_berita);
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  		Berita Berhasil<strong> Dihapus!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
			redirect('admin/berita');
		} else {
			echo "Gagal";
		}
	}

	// berkas
	public function berkas()
	{
		$user = $this->session->userdata('username');

		$data['user'] 	= $this->admin_model->user($user);
		$nama_belakang = $data['user']['nama_belakang'];

		if ($nama_belakang == "kemahasiswaan") {
			$data['berkas'] = $this->admin_model->getBerkasAll();
		} else {
			$data['berkas'] = $this->admin_model->getBerkas($nama_belakang);
		}
		
		$data['title'] 	= 'Berkas';
		
		$this->load->view('templates/admin-header', $data);
		$this->load->view('templates/admin-navbar', $data);
		$this->load->view('templates/admin-sidebar');
		$this->load->view('admin/berkas', $data);
		$this->load->view('templates/admin-footer');
	}

	public function tambah_berkas()
	{
		$config['upload_path']          = './assets/berkas/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 5048;
		// $config['max_width']            = 1280;
		// $config['max_height']           = 570;
		// $config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('berkas'))
		{
			$data = $this->upload->display_errors();
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
   			. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/berkas');
		} else
		{
			$data['judul_berkas'] = $this->input->post('judul_berkas', TRUE);
			$data['nama_ormawa'] = $this->input->post('nama_ormawa', TRUE);
			$data['jenis_berkas'] = $this->input->post('jenis_berkas', TRUE);
			$data['berkas'] = $this->upload->data('file_name');
			$data['create_at'] = time();

			$this->admin_model->tambah_berkas($data);
			$this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  		Berkas Berhasil <strong> DiTambahkan!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/berkas');
		}	
	}

	public function download_berkas($berkas)
	{
		force_download('assets/berkas/'.$berkas, NULL);
	}

	public function ubah_berkas()
	{
		$id_berkas = $this->input->post('id_berkas');
		$file = $this->db->get_where('berkas',['id_berkas' => $id_berkas])->row_array();

		$data = [
			'judul_berkas' => $this->input->post('judul_berkas', TRUE),
			'nama_ormawa' => $this->input->post('nama_ormawa', TRUE),
			'jenis_berkas' => $this->input->post('jenis_berkas', TRUE),
			'create_at' => time(),
		];

		// jika ada gambar yang diupload
		$upload_file = $_FILES['berkas']['name'];
		
		if ($upload_file) {
			$config['upload_path']          = './assets/berkas/';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 5048;
			// $config['max_width']            = 1280;
			// $config['max_height']           = 570;
			// $config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('berkas'))	{
				$file_lama = $file['berkas'];
					if($file_lama != 'default.jpg') {
						unlink(FCPATH . 'assets/berkas/' . $file_lama);
					}
				$file_baru = $this->upload->data('file_name');
				$this->db->set('berkas', $file_baru);
			} else
			{
				$data = $this->upload->display_errors();
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
					. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
				redirect('admin/berkas');
			}	
		}
		$this->db->where('id_berkas',$id_berkas);
    $this->db->update('berkas', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  		Berkas Berhasil<strong> Diubah!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		redirect('admin/berkas');
	}

	public function hapus_berkas($id_berkas)
	{
		$data = $this->admin_model->getDataByIdBerkas($id_berkas)->row();
		$berkas ='./assets/berkas/' . $data->berkas;

		if (is_readable($berkas) && unlink($berkas)) {
			$this->admin_model->hapusBerkas($id_berkas);
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  		Berkas Berhasil<strong> Dihapus!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
			redirect('admin/berkas');
		} else {
			echo "Gagal";
		}
	}

	// foto_kegiatan
	public function foto_kegiatan()
	{
		$user = $this->session->userdata('username');
		$data['user'] 	= $this->admin_model->user($user);

		$nama_belakang = $data['user']['nama_belakang'];

		if ($nama_belakang == "kemahasiswaan") {
			$data['foto_kegiatan'] = $this->admin_model->getFotoKegiatanAll();
			$data['aproval'] = "ada";
		} else {
			$data['foto_kegiatan'] = $this->admin_model->getFotoKegiatan($nama_belakang);
			$data['aproval'] = "tidak ada";
		}

		$data['title'] 	= 'Foto Kegiatan';
		
		$this->load->view('templates/admin-header', $data);
		$this->load->view('templates/admin-navbar', $data);
		$this->load->view('templates/admin-sidebar');
		$this->load->view('admin/foto_kegiatan', $data);
		$this->load->view('templates/admin-footer');
	}

	public function aproval_foto_kegiatan()
	{
		$id_foto_kegiatan = $this->input->post('id_foto_kegiatan');

		// $data['id_foto_kegiatan'] = $id_foto_kegiatan;

		// $result = $this->db->get_where('foto_kegiatan', $data)->row_array();
		$result = $this->db->get_where('foto_kegiatan',['id_foto_kegiatan' => $id_foto_kegiatan])->row_array();

		if ($result['status_acc'] == 1) {
			$data = 0;
		} else if ($result['status_acc'] == 0) {
			$data = 1;
		}

		$this->db->set('status_acc', $data);
		$this->db->where('id_foto_kegiatan',$id_foto_kegiatan);
    $this->db->update('foto_kegiatan');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  		Foto Kegiatan Berhasil<strong> DiAproval!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');

	}

	public function tambah_foto_kegiatan()
	{
		$config['upload_path']          = './assets/images/foto_kegiatan/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;
		// $config['max_width']            = 1280;
		// $config['max_height']           = 570;
		// $config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto_kegiatan'))
		{
			$data = $this->upload->display_errors();
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
   			. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/foto_kegiatan');
		} else
		{
			$data['judul_kegiatan'] = $this->input->post('judul_kegiatan', TRUE);
			$data['nama_ormawa'] = $this->input->post('nama_ormawa', TRUE);
			$data['deskripsi_kegiatan'] = $this->input->post('deskripsi_kegiatan', TRUE);
			$data['foto_kegiatan'] = $this->upload->data('file_name');
			$data['status_acc'] = 0;
			$data['create_at'] = time();

			$this->admin_model->tambah_foto_kegiatan($data);
			$this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  		Foto Kegiatan Berhasil <strong> DiTambahkan!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/foto_kegiatan');
		}	
	}

	public function ubah_foto_kegiatan()
	{
		$id_foto_kegiatan = $this->input->post('id_foto_kegiatan');
		$file = $this->db->get_where('foto_kegiatan',['id_foto_kegiatan' => $id_foto_kegiatan])->row_array();

		$data = [
			'judul_kegiatan' => $this->input->post('judul_kegiatan', TRUE),
			'nama_ormawa' => $this->input->post('nama_ormawa', TRUE),
			'deskripsi_kegiatan' => $this->input->post('deskripsi_kegiatan', TRUE),
			'status_acc' => $this->input->post('status_acc', TRUE),
			'create_at' => time(),
		];

		// jika ada gambar yang diupload
		$upload_file = $_FILES['foto_kegiatan']['name'];
		
		if ($upload_file) {
			$config['upload_path']          = './assets/images/foto_kegiatan/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			// $config['max_width']            = 1280;
			// $config['max_height']           = 570;
			// $config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto_kegiatan'))	{
				$file_lama = $file['foto_kegiatan'];
					if($file_lama != 'default.jpg') {
						unlink(FCPATH . 'assets/images/foto_kegiatan/' . $file_lama);
					}
				$file_baru = $this->upload->data('file_name');
				$this->db->set('foto_kegiatan', $file_baru);
			} else
			{
				$data = $this->upload->display_errors();
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
					. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
				redirect('admin/foto_kegiatan');
			}	
		}
		$this->db->where('id_foto_kegiatan',$id_foto_kegiatan);
    $this->db->update('foto_kegiatan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  		Foto Kegiatan Berhasil<strong> Diubah!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		redirect('admin/foto_kegiatan');
	}

	public function hapus_foto_kegiatan($id_foto_kegiatan)
	{
		$data = $this->admin_model->getDataByIdFotoKegiatan($id_foto_kegiatan)->row();
		$foto_kegiatan ='./assets/images/foto_kegiatan/' . $data->foto_kegiatan;

		if (is_readable($foto_kegiatan) && unlink($foto_kegiatan)) {
			$this->admin_model->hapusFotoKegiatan($id_foto_kegiatan);
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  		Foto Kegiatan Berhasil<strong> Dihapus!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
			redirect('admin/foto_kegiatan');
		} else {
			echo "Gagal";
		}
	}

	// informasi
	public function informasi()
	{
		$user = $this->session->userdata('username');
		$data['user'] 	= $this->admin_model->user($user);
		$data['informasi'] = $this->admin_model->getInformasi();
		$data['title'] 	= 'Informasi';
		
		$this->load->view('templates/admin-header', $data);
		$this->load->view('templates/admin-navbar', $data);
		$this->load->view('templates/admin-sidebar');
		$this->load->view('admin/informasi', $data);
		$this->load->view('templates/admin-footer');
	}

	public function tambah_informasi()
	{
		$config['upload_path']          = './assets/file_informasi/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 5048;
		// $config['max_width']            = 1280;
		// $config['max_height']           = 570;
		// $config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('file_informasi'))
		{
			$data = $this->upload->display_errors();
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
   			. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/informasi_kesejahteraan');
		} else
		{
			$data['judul_informasi'] = $this->input->post('judul_informasi', TRUE);
			$data['isi_informasi'] = $this->input->post('isi_informasi', TRUE);
			$data['file'] = $this->upload->data('file_name');
			$data['status_publik'] = $this->input->post('status_publik', TRUE);
			$data['create_at'] = time();

			$this->admin_model->tambah_informasi($data);
			$this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  		Informasi Berhasil <strong> DiTambahkan!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/informasi');
		}	
	}

	public function ubah_informasi()
	{
		$id_informasi = $this->input->post('id_informasi');
		$file = $this->db->get_where('informasi',['id_informasi' => $id_informasi])->row_array();

		$data = [
			'judul_informasi' => $this->input->post('judul_informasi', TRUE),
			'isi_informasi' => $this->input->post('isi_informasi', TRUE),
			'status_publik' => $this->input->post('status_publik', TRUE),
			'create_at' => time(),
		];

		// jika ada gambar yang diupload
		$upload_file = $_FILES['file']['name'];
		
		if ($upload_file) {
			$config['upload_path']          = './assets/file_informasi/';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 5048;
			// $config['max_width']            = 1280;
			// $config['max_height']           = 570;
			// $config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file'))	{
				$file_lama = $file['file'];
					if($file_lama != 'default.jpg') {
						unlink(FCPATH . 'assets/file_informasi/' . $file_lama);
					}
				$file_baru = $this->upload->data('file_name');
				$this->db->set('file', $file_baru);
			} else
			{
				$data = $this->upload->display_errors();
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
					. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
				redirect('admin/informasi');
			}	
		}
		$this->db->where('id_informasi',$id_informasi);
    $this->db->update('informasi', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  		Informasi Berhasil<strong> Diubah!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		redirect('admin/informasi');
	}

	public function hapus_informasi($id_informasi)
	{
		$data = $this->admin_model->getDataByIdInformasi($id_informasi)->row();
		$informasi ='./assets/file_informasi/' . $data->file;

		if (is_readable($informasi) && unlink($informasi)) {
			$this->admin_model->hapusInformasi($id_informasi);
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  		Informasi Berhasil<strong> Dihapus!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
			redirect('admin/informasi');
		} else {
			echo "Gagal";
		}
	}

	// informasi_kesejahteraan
	public function informasi_kesejahteraan()
	{
		$user = $this->session->userdata('username');
		$data['user'] 	= $this->admin_model->user($user);
		$data['informasi_kesejahteraan'] = $this->admin_model->getInformasiKesejahteraan();
		$data['title'] 	= 'Informasi Kesejahteraan';
		
		$this->load->view('templates/admin-header', $data);
		$this->load->view('templates/admin-navbar', $data);
		$this->load->view('templates/admin-sidebar');
		$this->load->view('admin/informasi_kesejahteraan', $data);
		$this->load->view('templates/admin-footer');
	}

	public function tambah_informasi_kesejahteraan()
	{
		$config['upload_path']          = './assets/file_informasi/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 5048;
		// $config['max_width']            = 1280;
		// $config['max_height']           = 570;
		// $config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('file_informasi'))
		{
			$data = $this->upload->display_errors();
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
   			. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/informasi_kesejahteraan');
		} else
		{
			$data['judul_informasi'] = $this->input->post('judul_informasi', TRUE);
			$data['isi_informasi'] = $this->input->post('isi_informasi', TRUE);
			$data['file_informasi'] = $this->upload->data('file_name');
			$data['create_at'] = time();

			$this->admin_model->tambah_informasi_kesejahteraan($data);
			$this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  		Informasi Kesejahteraan Berhasil <strong> DiTambahkan!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/informasi_kesejahteraan');
		}	
	}

	public function download_informasi($file_informasi)
	{
		force_download('assets/file_informasi/'.$file_informasi, NULL);
	}

	public function ubah_informasi_kesejahteraan()
	{
		$id_informasi_kesejahteraan = $this->input->post('id_informasi_kesejahteraan');
		$file = $this->db->get_where('informasi_kesejahteraan',['id_informasi_kesejahteraan' => $id_informasi_kesejahteraan])->row_array();

		$data = [
			'judul_informasi' => $this->input->post('judul_informasi', TRUE),
			'isi_informasi' => $this->input->post('isi_informasi', TRUE),
			'create_at' => time(),
		];

		// jika ada gambar yang diupload
		$upload_file = $_FILES['file_informasi']['name'];
		
		if ($upload_file) {
			$config['upload_path']          = './assets/file_informasi/';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 5048;
			// $config['max_width']            = 1280;
			// $config['max_height']           = 570;
			// $config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('file_informasi'))	{
				$file_lama = $file['file_informasi'];
					if($file_lama != 'default.jpg') {
						unlink(FCPATH . 'assets/file_informasi/' . $file_lama);
					}
				$file_baru = $this->upload->data('file_name');
				$this->db->set('file_informasi', $file_baru);
			} else
			{
				$data = $this->upload->display_errors();
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
					. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
				redirect('admin/informasi_kesejahteraan');
			}	
		}
		$this->db->where('id_informasi_kesejahteraan',$id_informasi_kesejahteraan);
    $this->db->update('informasi_kesejahteraan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  		Informasi Kesejahteraan Berhasil<strong> Diubah!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		redirect('admin/informasi_kesejahteraan');
	}

	public function hapus_informasi_kesejahteraan($id_informasi_kesejahteraan)
	{
		$data = $this->admin_model->getDataByIdInformasiKesejahteraan($id_informasi_kesejahteraan)->row();
		$informasi_kesejahteraan ='./assets/file_informasi/' . $data->file_informasi;

		if (is_readable($informasi_kesejahteraan) && unlink($informasi_kesejahteraan)) {
			$this->admin_model->hapusInformasiKesejahteraan($id_informasi_kesejahteraan);
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  		Informasi Kesejahteraan Berhasil<strong> Dihapus!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
			redirect('admin/informasi_kesejahteraan');
		} else {
			echo "Gagal";
		}
	}
  
	// informasi prestasi
	public function prestasi()
	{
		$user = $this->session->userdata('username');
		$data['user'] 	= $this->admin_model->user($user);
		$data['prestasi'] = $this->admin_model->getPrestasi();
		$data['title'] 	= 'Prestasi';
		
		$this->load->view('templates/admin-header', $data);
		$this->load->view('templates/admin-navbar', $data);
		$this->load->view('templates/admin-sidebar');
		$this->load->view('admin/prestasi', $data);
		$this->load->view('templates/admin-footer');
	}

	public function tambah_prestasi()
	{
		$config['upload_path']          = './assets/images/prestasi/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;
		// $config['max_width']            = 1280;
		// $config['max_height']           = 570;
		// $config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar_prestasi'))
		{
			$data = $this->upload->display_errors();
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
   			. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/prestasi');
		} else
		{
			$data['judul_prestasi'] = $this->input->post('judul_prestasi', TRUE);
			$data['isi_prestasi'] = $this->input->post('isi_prestasi', TRUE);
			$data['gambar_prestasi'] = $this->upload->data('file_name');
			$data['create_at'] = time();

			$this->admin_model->tambah_prestasi($data);
			$this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  		Prestasi Berhasil <strong> DiTambahkan!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/prestasi');
		}	
	}

	public function ubah_prestasi()
	{
		$id_prestasi = $this->input->post('id_prestasi');
		$file = $this->db->get_where('prestasi',['id_prestasi' => $id_prestasi])->row_array();

		$data = [
			'judul_prestasi' => $this->input->post('judul_prestasi', TRUE),
			'isi_prestasi' => $this->input->post('isi_prestasi', TRUE),
			'create_at' => time(),
		];

		// jika ada gambar yang diupload
		$upload_file = $_FILES['gambar_prestasi']['name'];
		
		if ($upload_file) {
			$config['upload_path']          = './assets/images/prestasi/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar_prestasi'))	{
				$file_lama = $file['gambar_prestasi'];
					if($file_lama != 'default.jpg') {
						unlink(FCPATH . 'assets/images/prestasi/' . $file_lama);
					}
				$file_baru = $this->upload->data('file_name');
				$this->db->set('gambar_prestasi', $file_baru);
			} else
			{
				$data = $this->upload->display_errors();
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
					. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
				redirect('admin/prestasi');
			}	
		}
		$this->db->where('id_prestasi',$id_prestasi);
    $this->db->update('prestasi', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  		Prestasi Berhasil<strong> Diubah!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		redirect('admin/prestasi');
	}

	public function hapus_prestasi($id_prestasi)
	{
		$data = $this->admin_model->getDataByIdPrestasi($id_prestasi)->row();
		$gambar_prestasi ='./assets/images/prestasi/' . $data->gambar_prestasi;

		if (is_readable($gambar_prestasi) && unlink($gambar_prestasi)) {
			$this->admin_model->hapusPrestasi($id_prestasi);
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  		Prestasi Berhasil<strong> Dihapus!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
			redirect('admin/prestasi');
		} else {
			echo "Gagal";
		}
	}

	// pengajuan_kesejahteraan
	public function pengajuan_kesejahteraan()
	{
		$user = $this->session->userdata('username');
		$data['user'] 	= $this->admin_model->user($user);
		$data['pengajuan_kesejahteraan'] = $this->admin_model->getPengajuanKesejahteraan();
		$data['title'] 	= 'Pengajuan Kesejahteraan';
		
		$this->load->view('templates/admin-header', $data);
		$this->load->view('templates/admin-navbar', $data);
		$this->load->view('templates/admin-sidebar');
		$this->load->view('admin/pengajuan_kesejahteraan', $data);
		$this->load->view('templates/admin-footer');
	}

	public function tambah_pengajuan_kesejahteraan()
	{
		$config['upload_path']          = './assets/file_pengajuan/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 5048;
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('ktm') || ! $this->upload->do_upload('ktp') || ! $this->upload->do_upload('khs') || ! $this->upload->do_upload('surat_aktif') || ! $this->upload->do_upload('sktm') || ! $this->upload->do_upload('surat_pernyataan_terdampak_covid') )
		{
			$data = $this->upload->display_errors();
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
   			. $data . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
		 	redirect('admin/pengajuan_kesejahteraan');
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
			$this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
			Pengajuan Kesejahteraan Berhasil <strong> DiTambahkan!.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>');
			redirect('admin/pengajuan_kesejahteraan');
		}
	}

	public function download_ktm($ktm)
	{
		force_download('assets/file_pengajuan/'.$ktm, NULL);
	}

	public function download_ktp($ktp)
	{
		force_download('assets/file_pengajuan/'.$ktp, NULL);
	}

	public function download_khs($khs)
	{
		force_download('assets/file_pengajuan/'.$khs, NULL);
	}

	public function download_surat_aktif($surat_aktif)
	{
		force_download('assets/file_pengajuan/'.$surat_aktif, NULL);
	}

	public function download_sktm($sktm)
	{
		force_download('assets/file_pengajuan/'.$sktm, NULL);
	}

	public function download_surat_pernyataan_terdampak_covid($surat_pernyataan_terdampak_covid)
	{
		force_download('assets/file_pengajuan/'.$surat_pernyataan_terdampak_covid, NULL);
	}

	public function hapus_pengajuan_kesejahteraan($id_pengajuan_kesejahteraan)
	{
		$data = $this->admin_model->getDataByIdPengajuanKesejahteraan($id_pengajuan_kesejahteraan)->row();
		$ktm ='./assets/file_pengajuan/' . $data->ktm;
		$ktp ='./assets/file_pengajuan/' . $data->ktp;
		$khs ='./assets/file_pengajuan/' . $data->khs;
		$surat_aktif ='./assets/file_pengajuan/' . $data->surat_aktif;
		$sktm ='./assets/file_pengajuan/' . $data->sktm;
		$surat_pernyataan_terdampak_covid ='./assets/file_pengajuan/' . $data->surat_pernyataan_terdampak_covid;

		if (is_readable($ktm) && unlink($ktm) && is_readable($ktp) && unlink($ktp) && is_readable($khs) && unlink($khs) && is_readable($surat_aktif) && unlink($surat_aktif) && is_readable($sktm) && unlink($sktm) && is_readable($surat_pernyataan_terdampak_covid) && unlink($surat_pernyataan_terdampak_covid) ) {
			$this->admin_model->hapusPengajuanKesejahteraan($id_pengajuan_kesejahteraan);
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  		Pengajuan Kesejahteraan Berhasil<strong> Dihapus!.</strong>
   			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
     			<span aria-hidden="true">&times;</span>
   			</button>
		 	</div>');
			redirect('admin/pengajuan_kesejahteraan');
		} else {
			echo "Gagal";
		}
	}

	// akun ormawa
	public function akun_ormawa()
	{
		$user = $this->session->userdata('username');
		$data['user'] 	= $this->admin_model->user($user);
		$data['akun_ormawa'] = $this->admin_model->getAkunOrmawa();
		$data['title'] 	= 'Akun Ormawa';
		
		$this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required|trim', [
			'required' => 'Tidak Boleh Kosong!'
		]);
		$this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required|trim', [
			'required' => 'Tidak Boleh Kosong!'
		]);
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]', [
			'is_unique' => 'Username sudah digunakan!',
			'required' => 'Tidak Boleh Kosong!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]',[
			'matches' => 'Password harus sama!',
			'min_length' => 'Password harus 6 karakter!',
			'required' => 'Tidak Boleh Kosong!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run()==false) {
			$this->load->view('templates/admin-header', $data);
			$this->load->view('templates/admin-navbar', $data);
			$this->load->view('templates/admin-sidebar');
			$this->load->view('admin/akun_ormawa', $data);
			$this->load->view('templates/admin-footer');
		} else {
			$data = [
				'nama_depan'   => htmlspecialchars($this->input->post('nama_depan', 'true')),
				'nama_belakang'=> htmlspecialchars($this->input->post('nama_belakang', 'true')),
				'username'     => htmlspecialchars($this->input->post('username', 'true')),
				'password'     => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role' 			=> htmlspecialchars($this->input->post('role', 'true')),
				'foto' 		   	 => 'default.jpg',
				'created_at'   => date('Y-m-d')
			];
			$this->admin_model->tambah_ormawa_baru($data);
			$this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
			Akun Baru Berhasil <strong> DiTambahkan!.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>');
			redirect('admin/akun_ormawa');
		}
	}

	public function hapus_users($id_users)
	{
		$this->admin_model->hapusUsers($id_users);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Foto Kegiatan Berhasil<strong> Dihapus!.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
		redirect('admin/akun_ormawa');
	}


}

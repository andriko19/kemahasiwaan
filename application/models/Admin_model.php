<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	// user
	public function user($user)
	{
		return $this->db->get_where('users', ['username' => $user])->row_array();
	}

	// dashboar informasi
	public function getInformasiBem($role)
	{
		$query = $this->db->select('*')
                ->where('status_publik', $role)
                ->order_by('id_informasi', 'DESC')
                ->get('informasi');

		return  $query->row_array();
	}

	public function getInformasiOrmawa($role)
	{
		$query = $this->db->select('*')
                ->where('status_publik', $role)
                ->order_by('id_informasi', 'DESC')
                ->get('informasi');

		return  $query->row_array();
	}

	// banner
	public function getBanner()
	{
		return  $this->db->order_by('id_banner', 'DESC')->get('banner')->result_array();
	}

	public function tambah_banner($data)
	{
		$this->db->insert('banner', $data);
	}

	public function getDataByIdBanner($id_banner)
	{
		$this->db->where('id_banner', $id_banner);
		return $this->db->get('banner');
	}

	public function hapusBanner($id_banner)
	{
		$this->db->where('id_banner', $id_banner);
		return $this->db->delete('banner');
	}

	// profi
	public function getProfil()
	{
		return  $this->db->order_by('id_tentang_kemahasiswaan', 'DESC')->get('tentang_kemahasiswaan')->result_array();
	}

	public function tambah_profil($data)
	{
		$this->db->insert('tentang_kemahasiswaan', $data);
	}

	// berita
	public function getBerita()
	{
		return  $this->db->order_by('id_berita', 'DESC')->get('berita')->result_array();
	}

	public function tambah_berita($data)
	{
		$this->db->insert('berita', $data);
	}

	public function getDataByIdBerita($id_berita)
	{
		$this->db->where('id_berita', $id_berita);
		return $this->db->get('berita');
	}

	public function hapusBerita($id_berita)
	{
		$this->db->where('id_berita', $id_berita);
		return $this->db->delete('berita');
	}

	// berkas
	public function getBerkasAll()
	{
		return  $this->db->order_by('id_berkas', 'DESC')->get('berkas')->result_array();
	}

	public function getBerkas($nama_belakang)
	{
		$query = $this->db->select('*')
                ->where('nama_ormawa', $nama_belakang)
                ->order_by('id_berkas', 'DESC')
                ->get('berkas');

		return  $query->result_array();
	}

	public function tambah_berkas($data)
	{
		$this->db->insert('berkas', $data);
	}

	public function getDataByIdBerkas($id_berkas)
	{
		$this->db->where('id_berkas', $id_berkas);
		return $this->db->get('berkas');
	}

	public function hapusBerkas($id_berkas)
	{
		$this->db->where('id_berkas', $id_berkas);
		return $this->db->delete('berkas');
	}

	// foto kegiatan
	public function getFotoKegiatanAll()
	{
		return  $this->db->order_by('id_foto_kegiatan', 'DESC')->get('foto_kegiatan')->result_array();
	}

	public function getFotoKegiatan($nama_belakang)
	{
		$query = $this->db->select('*')
                ->where('nama_ormawa', $nama_belakang)
                ->order_by('id_foto_kegiatan', 'DESC')
                ->get('foto_kegiatan');

		return  $query->result_array();
	}

	public function tambah_foto_kegiatan($data)
	{
		$this->db->insert('foto_kegiatan', $data);
	}

	public function getDataByIdFotoKegiatan($id_foto_kegiatan)
	{
		$this->db->where('id_foto_kegiatan', $id_foto_kegiatan);
		return $this->db->get('foto_kegiatan');
	}

	public function hapusFotoKegiatan($id_foto_kegiatan)
	{
		$this->db->where('id_foto_kegiatan', $id_foto_kegiatan);
		return $this->db->delete('foto_kegiatan');
	}

	// informasi
	public function getInformasi()
	{
		return  $this->db->order_by('id_informasi', 'DESC')->get('informasi')->result_array();
	}

	public function tambah_informasi($data)
	{
		$this->db->insert('informasi', $data);
	}

	public function getDataByIdInformasi($id_informasi)
	{
		$this->db->where('id_informasi', $id_informasi);
		return $this->db->get('informasi');
	}

	public function hapusInformasi($id_informasi)
	{
		$this->db->where('id_informasi', $id_informasi);
		return $this->db->delete('informasi');
	}

	// informasi kesejahteraan
	public function getInformasiKesejahteraan()
	{
		return  $this->db->order_by('id_informasi_kesejahteraan', 'DESC')->get('informasi_kesejahteraan')->result_array();
	}

	public function tambah_informasi_kesejahteraan($data)
	{
		$this->db->insert('informasi_kesejahteraan', $data);
	}

	public function getDataByIdInformasiKesejahteraan($id_informasi_kesejahteraan)
	{
		$this->db->where('id_informasi_kesejahteraan', $id_informasi_kesejahteraan);
		return $this->db->get('informasi_kesejahteraan');
	}

	public function hapusInformasiKesejahteraan($id_informasi_kesejahteraan)
	{
		$this->db->where('id_informasi_kesejahteraan', $id_informasi_kesejahteraan);
		return $this->db->delete('informasi_kesejahteraan');
	}

	// prestasi
	public function getPrestasi()
	{
		return $this->db->order_by('id_prestasi', 'DESC')->get('prestasi')->result_array();
	}

	public function tambah_prestasi($data)
	{
		$this->db->insert('prestasi', $data);
	}

	public function getDataByIdPrestasi($id_prestasi)
	{
		$this->db->where('id_prestasi', $id_prestasi);
		return $this->db->get('prestasi');
	}

	public function hapusPrestasi($id_prestasi)
	{
		$this->db->where('id_prestasi', $id_prestasi);
		return $this->db->delete('prestasi');
	}

	// pengajuan kesejahteraan
	public function getPengajuanKesejahteraan()
	{
		return $this->db->order_by('id_pengajuan_kesejahteraan', 'DESC')->get('pengajuan_kesejahteraan')->result_array();
	}

	public function tambah_pengajuan_kesejahteraan($data)
	{
		$this->db->insert('pengajuan_kesejahteraan', $data);
	}

	public function getDataByIdPengajuanKesejahteraan($id_pengajuan_kesejahteraan)
	{
		$this->db->where('id_pengajuan_kesejahteraan', $id_pengajuan_kesejahteraan);
		return $this->db->get('pengajuan_kesejahteraan');
	}

	public function hapusPengajuanKesejahteraan($id_pengajuan_kesejahteraan)
	{
		$this->db->where('id_pengajuan_kesejahteraan', $id_pengajuan_kesejahteraan);
		return $this->db->delete('pengajuan_kesejahteraan');
	}

	// akun baru
	public function getAkunOrmawa()
	{
		return $this->db->order_by('id_users', 'DESC')->get('users')->result_array();
	}

	public function tambah_ormawa_baru($data)
	{
		$this->db->insert('users', $data);
	}

	public function hapusUsers($id_users)
	{
		$this->db->where('id_users', $id_users);
		return $this->db->delete('users');
	}

}
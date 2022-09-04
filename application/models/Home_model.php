<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	// banner
	public function getBanner()
	{
		return  $this->db->order_by('id_banner', 'DESC')->get('banner')->result_array();
	}

  // profil
	public function getProfil()
	{
		$query = $this->db->select('*')
                ->order_by('id_tentang_kemahasiswaan', 'DESC')
                ->get('tentang_kemahasiswaan');

		return  $query->row_array();
	}

	// prestasi
	public function getPrestasi()
	{
		$this->db->select('*');
		$this->db->from('prestasi');
		$this->db->limit(2); 
		$this->db->order_by('id_prestasi', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getDetailPrestasi($id_prestasi)
	{
		$this->db->select('*');
		$query = $this->db->get_where('prestasi', array('id_prestasi'=>$id_prestasi));
		return $query->row_array();
	}

	// berita
	public function getOneBerita()
	{
		$query = $this->db->select('*')
                ->order_by('id_berita', 'DESC')
                ->get('berita');

		return  $query->row_array();
	}

	public function getAllBerita()
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->limit(2, 1); 
		$this->db->order_by('id_berita', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getDetailBerita($id_berita)
	{
		$this->db->select('*');
		$query = $this->db->get_where('berita', array('id_berita'=>$id_berita));
		return $query->row_array();
	}

	// informasi kesejahteraan
	public function getInformasiKesejahteraan()
	{
		return $this->db->order_by('id_informasi_kesejahteraan', 'DESC')->get('informasi_kesejahteraan')->result_array();
	}

	// foto kegiatan
	public function getFotoKegiatan()
	{
		$this->db->select('*');
		$this->db->order_by('id_foto_kegiatan', 'DESC');
		$query = $this->db->get_where('foto_kegiatan', array('status_acc' => 1));
		return $query->result_array();
	}

	public function getDetailFotoKegiatan($id_foto_kegiatan)
	{
		$this->db->select('*');
		$query = $this->db->get_where('foto_kegiatan', array('id_foto_kegiatan'=>$id_foto_kegiatan));
		return $query->row_array();
	}

	// informasi umum
	public function getInformasiUmum()
	{
		$this->db->select('*');
		$this->db->order_by('id_informasi', 'DESC');
		$query = $this->db->get_where('informasi', array('status_publik' => "umum"));
		return $query->result_array();
	}

	// feedback_here
	public function tambah_feedback_here($data)
	{
		$this->db->insert('feedback_here', $data);
	}

}
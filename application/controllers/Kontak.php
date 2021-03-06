<?php
class Kontak extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->load->model('m_kontak');
		$this->m_pengunjung->count_visitor();
	}

	function index()
	{

		$this->load->view('v_kontak');
	}

	function kirim_pesan()
	{
		$nama = htmlspecialchars($this->input->post('nama', TRUE), ENT_QUOTES);
		$email = htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
		$pesan = htmlspecialchars(trim($this->input->post('pesan', TRUE)), ENT_QUOTES);
		$this->m_kontak->kirim_pesan($nama, $email, $pesan);
		echo $this->session->set_flashdata('msg', "<div class='alert alert-info'>Terima kasih telah menghubungi kami.</div>");
		redirect('kontak');
	}
}

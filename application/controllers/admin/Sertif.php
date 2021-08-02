<?php
class Sertif extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['logged_in'])) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_sertifikasi');
        $this->load->library('upload');
    }


    function index()
    {
        $x['data'] = $this->m_sertifikasi->get_all_kategori();
        $this->load->view('admin/v_sertif', $x);
    }

    function simpan_kategori()
    {
        $Id_sertifikasi = strip_tags($this->input->post('id_sertif'));
        $nama = strip_tags($this->input->post('nama'));
        $tgl_diserahkan = strip_tags($this->input->post('tgl_diserahkan'));
        $this->m_sertifikasi->simpan_kategori($Id_sertifikasi, $nama, $tgl_diserahkan);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('admin/sertif');
    }

    function update_kategori()
    {
        $Id_sertifikasi = strip_tags($this->input->post('id_sertif'));
        $nama = strip_tags($this->input->post('nama'));
        $tgl_diserahkan = strip_tags($this->input->post('tgl_diserahkan'));
        $this->m_sertifikasi->update_kategori($Id_sertifikasi, $nama, $tgl_diserahkan);
        echo $this->session->set_flashdata('msg', 'info');
        redirect('admin/sertif');
    }
    function hapus_kategori()
    {
        $kode = strip_tags($this->input->post('kode'));
        $this->m_sertifikasi->hapus_kategori($kode);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/sertif');
    }
}

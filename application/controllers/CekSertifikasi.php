<?php
class CekSertifikasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_sertifikasi');
    }
    function index()
    {
        $this->load->view('v_about');
    }

    function auth()
    {
        $sertif = $this->input->post('sertif');
        $where = array(
            'sertif' => $sertif
        );
        $cek = $this->m_sertifikasi->ceksertif($sertif)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'sertif' => $sertif
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("CekSertifikasi/valid"));
        } else {
            redirect(base_url("CekSertifikasi/tidakvalid"));
        }
    }


    function valid()
    {
        $url = base_url('CekSertifikasi');
        echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>Nomor terdaftar didatabase</div>');

        redirect($url);
    }
    function tidakvalid()
    {
        $url = base_url('CekSertifikasi');
        echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>Nomor tidak ditemukan didatabase</div>');
        redirect($url);
    }
}

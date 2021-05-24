<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Baak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_baak');
    }
    public function index()
    {
        $data['title'] = 'Beranda';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];
        // Untuk data grafik
        $data['hasil'] = $this->m_baak->Jum_mahasiswa_perjurusan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('baak/index', $data);
        $this->load->view('templates/footer');
    }
    public function v_baak()
    {
        $data['title'] = 'BAAK';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];
        // $data['kegiatan'] = $this->session->userdata('email')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('baak/v_baak', $data);
        $this->load->view('templates/footer');
    }
}

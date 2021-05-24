<?php
defined('BASEPATH') or exit('No direct script access allowed');

class big extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_big');
    }
    public function index()
    {
        $data['title'] = 'Beranda';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];
        // Untuk data grafik
        $data['hasil'] = $this->m_big->Jum_mahasiswa_perjurusan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('big/index', $data);
        $this->load->view('templates/footer');
    }
    public function v_skp()
    {
        $data['title'] = 'SKP';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];
        // $data['kegiatan'] = $this->session->userdata('email')->result_array();
        $data['kegiatan'] = $this->db->get_where('tb_kegiatan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('big/v_skp', $data);
        $this->load->view('templates/footer');
    }
}

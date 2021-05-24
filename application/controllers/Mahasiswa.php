<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_mhs');
    }
    public function index()
    {
        $data['title'] = 'Beranda';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];

        // Untuk data grafik
        $data['hasil'] = $this->m_mhs->Jum_mahasiswa_perjurusan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function v_riwayat()
    {
        $data['title'] = 'Riwayat Kegiatan';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];
        // $data['kegiatan'] = $this->session->userdata('email')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/v_riwayat', $data);
        $this->load->view('templates/footer');
    }
    public function v_list()
    {
        $data['title'] = 'Daftar Kegiatan';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];

        // $data['kegiatan'] = $this->db->get_where('tb_kegiatan', ['status' => 1])->result_array();
        $data['kegiatan'] = $this->db->get('tb_kegiatan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/v_list', $data);
        $this->load->view('templates/footer');
    }
    public function v_ikuti()
    {
        $data['title'] = 'Detail Kegiatan';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];
        $data['kegiatan'] = $this->db->get_where('tb_kegiatan', ['accountCreated' => $this->session->userdata('email')])->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/v_ikuti', $data);
        $this->load->view('templates/footer');
    }
}

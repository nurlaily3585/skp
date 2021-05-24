<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_menu');
    }
    public function index()
    {
        $data['title'] = 'Menu Manajemen';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];
        $data['menu'] = $this->db->get('tb_user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');
    }
    public function v_pengaturan()
    {
        $data['title'] = 'Pengaturan Kegiatan';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];
        $data['kategori'] = $this->m_menu->fetch_kategori();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/v_pengaturan', $data);
        $this->load->view('templates/footer');
    }
    function fetch_kat_detail()
    {
        if ($this->input->post('id_kategori')) {
            echo $this->m_menu->fetch_kat_detail($this->input->post('id_kategori'));
        }
    }
}

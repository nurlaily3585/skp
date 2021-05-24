<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        #Rules
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required'      => 'Email harus diisi !',
            'valid_email'   => 'Email harus valid !'
        ]);
        $this->form_validation->set_rules('password', 'Paswword', 'trim|required', [
            'required'      => 'Password harus diisi !'
        ]);
        #Validasi
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            # Ketika Validasinya sukses, maka jalankan method private login
            $this->_login();
        }
    }

    private function _login()
    {
        $email       = $this->input->post('email');
        $password    = $this->input->post('password');
        #Query Cek database
        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
        // var_dump($user);
        // die;
        # code Apabila usernya ada
        if ($user) {
            # code Apabila usernya aktif
            if ($user['is_active'] == 1) {
                #Cek Password
                // if (password_verify($password, $user['password'])) {
                if ($user['password']) {
                    # Menyiapkan data
                    $data = [
                        'email'     => $user['email'],
                        'role_id'   => $user['role_id'],
                        'kd_jurusan' => $user['kd_jurusan']
                    ];
                    #Simpan ke dalam session
                    $this->session->set_userdata($data);
                    # Arahkan ke kontroller yang kita mau
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else if ($user['role_id'] == 2) {
                        redirect('mahasiswa');
                    } else if ($user['role_id'] == 3) {
                        redirect('rektor');
                    } else if ($user['role_id'] == 4) {
                        redirect('dosen');
                    } else if ($user['role_id'] == 5) {
                        redirect('hmj');
                    } else if ($user['role_id'] == 6) {
                        redirect('kaprodi');
                    } else if ($user['role_id'] == 7) {
                        redirect('big');
                    } else if ($user['role_id'] == 8) {
                        redirect('baak');
                    } else {
                        redirect('fakultas');
                    }
                    // End of kontroller
                } else {
                    # code...
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Password salah!</div>');
                    redirect('auth');
                }
            } else {
                # code...
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Username belum diaktivasi. Silahkan periksa email Anda!</div>');
                redirect('auth');
            }
        } else {
            # code Tidak ada user dengan email tersebut
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar!</div>');
            redirect('auth');
        }
    }
    public function registration()
    {
        #Rules Aturan Form Validation
        $this->form_validation->set_rules('firstname', 'Nama Depan', 'required|trim', [
            'required'  => 'Nama Depan harus diisi!'
        ]);
        $this->form_validation->set_rules('lastname', 'Nama Belakang', 'required|trim', [
            'required'  => 'Nama Belakang harus diisi!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required'  => 'Username harus diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
            'required'      => 'Email harus diisi!',
            'valid_email'   => 'Email harus valid!',
            'is_unique'     => 'Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[7]|matches[password2]', [
            'required'      => 'Password harus diisi!',
            'matches'       => 'Password tidak sama!',
            'min_length'    => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            #Siapkan data sebelum insert ke database
            $data = [
                'firstname' => htmlspecialchars($this->input->post('firstname', true)),
                'lastname'  => htmlspecialchars($this->input->post('lastname', true)),
                'username'  => htmlspecialchars($this->input->post('username', true)),
                'email'     => htmlspecialchars($this->input->post('email', true)),
                'image'     => 'default.jpg',
                'password'  => htmlspecialchars($this->input->post('password1')),
                // 'password'=>password_hash($this->input->post('password1',PASSWORD_DEFAULT)),
                'role_id'   => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            #Seharusnya pakai model
            $this->db->insert('tb_user', $data);
            #Membuat Flash data
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Selamat! Akun berhasil terdaftar. Silahkan Login!</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        #Membuat Flash data
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
          Selamat, Anda berhasil logout!</div>');
        redirect('auth');
    }
}

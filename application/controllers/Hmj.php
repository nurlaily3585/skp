<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hmj extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_hmj');
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];

        // $data['hasil'] = $this->M_Hmj->Jum_mahasiswa_perjurusan();
        // $data['total_kegiatan'] = $this->M_Hmj->hitungJumlahKegiatan();
        // $data['total_kegiatan_baru'] = $this->M_Hmj->hitungJumlahKegiatanBaru();

        // Untuk data grafik
        $data['hasil'] = $this->m_hmj->Jum_mahasiswa_perjurusan();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('hmj/index', $data);
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
        $this->load->view('hmj/v_riwayat', $data);
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
        $this->load->view('hmj/v_list', $data);
        $this->load->view('templates/footer');
    }
    public function v_add()
    {
        $data['title'] = 'Kegiatan Saya';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];
        $data['kegiatan'] = $this->db->get_where('tb_kegiatan', ['accountCreated' => $this->session->userdata('email')])->result_array();






        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('hmj/v_add', $data);
        $this->load->view('templates/footer');
    }
    public function v_ikuti()
    {
        $data['title'] = 'Detail Kegiatan';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];
        $data['kegiatan'] = $this->db->get_where('tb_kegiatan', ['accountCreated' => $this->session->userdata('email')])->result_array();
        // $this->load->model('m_hmj');
        // $detail = $this->m_hmj->detail_data($id_kegiatan);
        // $data['detail'] = $detail;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('hmj/v_ikuti', $data);
        $this->load->view('templates/footer');
    }
    public function v_baru()
    {
        $data['title'] = 'Kegiatan Baru';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat Datang ' . $data['user']['firstname'] . ' ' . $data['user']['lastname'];
        // $data['kegiatan'] = $this->m_hmj->tampil_data->result();
        // Load model
        $this->load->model('m_hmj');
        $data['penyelenggara'] = $this->m_hmj->tampil_data();
        $data['kategori'] = $this->m_hmj->tampil_kategori();
        $data['kategori_detail'] = $this->m_hmj->tampil_kategori_detail();

        #Rules Aturan Form Validation
        $this->form_validation->set_rules('judul', 'Judul Kegiatan', 'required|trim', [
            'required'  => 'Judul kegiatan harus diisi !'
        ]);
        $this->form_validation->set_rules('detail', 'Detail Kegiatan', 'required|trim', [
            'required'  => 'Detail kegiatan harus diisi !'
        ]);
        // $this->form_validation->set_rules('pilih', 'Penyelenggara Kegiatan', 'required|trim', [
        //     'required'  => 'Penyelenggara kegiatan harus diisi !'
        // ]);
        $this->form_validation->set_rules('kebutuhanDana', 'Kebutuhan Dana Kegiatan', 'required|trim', [
            'required'  => 'Kebutuhan dana kegiatan harus diisi !'
        ]);
        $this->form_validation->set_rules('danaPeserta', 'Dana Peserta Kegiatan', 'required|trim', [
            'required'  => 'Dana yang diperoleh dari Peserta kegiatan harus diisi !'
        ]);
        $this->form_validation->set_rules('danaSponsor', 'Dana Sponsor Kegiatan', 'required|trim', [
            'required'  => 'Dana yang diperoleh dari Sponsor kegiatan harus diisi !'
        ]);
        $this->form_validation->set_rules('danaInstitusi', 'Dana Institusi', 'required|trim', [
            'required'  => 'Dana yang diperoleh dari institusi (ITN Malang) harus diisi !'
        ]);
        $this->form_validation->set_rules('danaLain', 'Dana Lain-lain', 'required|trim', [
            'required'  => 'Dana yang diperoleh dari lain-lain harus diisi !'
        ]);
        $this->form_validation->set_rules('proposal', 'Proposal Kegiatan', 'required|trim', [
            'required'  => 'Proposal kegiatan harus diisi !'
        ]);
        $this->form_validation->set_rules('brosur', 'Brosur atau Pamflet Kegiatan', 'required|trim', [
            'required'  => 'Brosur atau Pamflet kegiatan harus diisi !'
        ]);
        $this->form_validation->set_rules('sertifikat', 'Sertifikat Kegiatan', 'required|trim', [
            'required'  => 'Sertifikat kegiatan harus diisi !'
        ]);
        // $this->form_validation->set_rules('laporan', 'Laporan Pertanggungan Jawab Kegiatan', 'required|trim', [
        //     'required'  => 'Laporan Pertanggungan Jawab kegiatan harus diisi !'
        // ]);
        // $this->form_validation->set_rules('penanggungjawab', 'Penanggung Jawab Kegiatan', 'required|trim', [
        //     'required'  => 'Penanggung Jawab kegiatan harus diisi !'
        // ]);
        // $this->form_validation->set_rules('email', 'Email', 'required|trim', [
        //     'required'  => 'Email harus diisi !'
        // ]);
        // $this->form_validation->set_rules('tglDaftar', 'Tanggal Kegiatan Didaftarkan', 'required|trim', [
        //     'required'  => 'Tanggal Kegiatan Di Daftakan harus diisi !'
        // ]);
        $this->form_validation->set_rules('cp', 'Contact Person', 'required|trim', [
            'required'  => 'Contact Person harus diisi !'
        ]);
        if ($this->form_validation->run() == false) {
            #Jika form validasi gagal tampilkan halaman ini
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('hmj/v_baru', $data);
            $this->load->view('templates/footer');
        } else {
            echo 'Data berhasil ditambahkan';
            #Siapkan data sebelum insert ke database
            $data = [
                'namakegiatan'   => htmlspecialchars($this->input->post('judul', true)),
                'tahun'          => date('Y'),
                'detail'         => htmlspecialchars($this->input->post('detail', true)),
                'tgl_kegiatan'   => htmlspecialchars($this->input->post('', true)),
                'validasi'       => htmlspecialchars($this->input->post('', true)),
                'penyelenggara'  => htmlspecialchars($this->input->post('pilih', true)),
                'point'          => htmlspecialchars($this->input->post('', true)),
                'kategori'       => htmlspecialchars($this->input->post('', true)),
                'date_created'   => time(),
                'accountCreated' => htmlspecialchars($this->input->post('email')),
                'brosur'         => htmlspecialchars($this->input->post('brosur', true)),
                'proposal'       => htmlspecialchars($this->input->post('proposal', true)),
                'kebutuhanDana'  => htmlspecialchars($this->input->post('kebutuhanDana', true)),
                'dana_1'         => htmlspecialchars($this->input->post('danaPeserta', true)),
                'dana_2'         => htmlspecialchars($this->input->post('danaSponsor', true)),
                'dana_3'         => htmlspecialchars($this->input->post('danaInstitusi', true)),
                'dana_4'         => htmlspecialchars($this->input->post('danaLain', true)),
                // 'dana_5'         => htmlspecialchars($this->input->post('tgl_kegiatan', true)),
                'pendaftaranPeserta' => htmlspecialchars($this->input->post('pendaftaranPeserta', true)),
                'batasPeserta'       => htmlspecialchars($this->input->post('batasPeserta', true)),
                'tgl_buka'           => htmlspecialchars($this->input->post('tgl_buka', true)),
                'tgl_tutup'          => htmlspecialchars($this->input->post('tgl_tutup', true)),
                'sertifikat'         => htmlspecialchars($this->input->post('sertifikat', true)),
                'status'             => 0,
                'cp'                 => htmlspecialchars($this->input->post('kontak', true)),
                'email'              => htmlspecialchars($this->input->post('email'))
            ];
            #Seharusnya pakai model
            $this->db->insert('tb_kegiatan', $data);
            #Membuat Flash data
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Selamat. Kegiatan Anda berhasil didaftarkan !</div>');
            redirect('Hmj/v_add');
        }
    }
    function detail_kategori()
    {
        // $id=$this->input->post('id_kategori');
        // $data=$this->m_hmj->tampil_kategori_detail($id);
        // $this->load->view
    }
    public function tambah_aksi()
    {






        #Menangkap inputan dari view
        $judul = $this->input->post('judul');
        $detail = $this->input->post('detail');

        #Tangkapan dari inputan akan diubah ke dalam array
        $data = array(
            'judul'     => $judul,
            'detail'    => $detail
        );
        #Input data array ke dalam database
        $this->m_hmj->input_data($data, 'tb_kegiatan');
        redirect('hmj/v_add');
    }


    // ini contoh
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
}

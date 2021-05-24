<?php
class m_big extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_kegiatan');
    }
    function Jum_mahasiswa_perjurusan()
    {
        $this->db->group_by('jurusan');
        $this->db->select('jurusan');
        $this->db->select("count(*) as total");
        $this->db->from('tb_peserta');
        // $this->db->join('tb_jurusan', 'tb_jurusan.kd_jurusan=tb_peserta.jurusan');
        // $this->db->join('tb_user', 'tb_user.email=tb_peserta.email_peserta');
        // $this->db->where('fakultas', 1);
        // $this->db->where('tb_user', ['jurusan' => $this->session->userdata('jurusan')]);
        return $this->db->get()
            ->result();
    }
}

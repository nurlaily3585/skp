<?php
class m_mhs extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_kegiatan');
    }

    function Jum_mahasiswa_perjurusan()
    {
        $this->db->group_by('angkatan');
        $this->db->select('angkatan');
        $this->db->select("count(*) as total");
        $this->db->from('tb_peserta');
        $this->db->join('tb_user', 'tb_user.email=tb_peserta.email_peserta');
        $this->db->where('jurusan', 18);
        // $this->db->where('tb_user', ['jurusan' => $this->session->userdata('jurusan')]);
        return $this->db->get()
            ->result();
    }
}

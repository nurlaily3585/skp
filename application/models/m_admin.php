<?php
class m_admin extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_kegiatan');
    }
}

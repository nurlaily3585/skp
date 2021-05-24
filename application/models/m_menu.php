<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_menu extends CI_Model
{
    function fetch_kategori()
    {
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('tb_kategori');
        return $query->result();
    }
    function fecth_kat_detail($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->order_by('kat_detail', "ASC");
        $query = $this->db->get('tb_kategori_detail');
        $output = '<option value="">Pilih Detail</option>';
        foreach ($query->result() as $kat_detail) {
            $output .= '<option value="' . $kat_detail->id_kategori_detail . '">' . $kat_detail->name . '</option>';
        }
        return $output;
    }
}

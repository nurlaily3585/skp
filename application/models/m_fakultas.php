<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_fakultas extends CI_Model
{
    public function tampil_data()
    {
        // return $this->db->get('tb_kegiatan');
        //return $this->db->get('tb_penyelenggara');
        $query = "SELECT *
                    FROM `tb_penyelenggara`";
        return $this->db->query($query)->result_array();
    }


    // function Jum_mahasiswa_perjurusan()
    // {
    //     $this->db->group_by('jurusan');
    //     $this->db->select('jurusan');
    //     $this->db->select("count(*) as total");
    //     return $this->db->from('mahasiswa')
    //         ->get()
    //         ->result();
    // }

    function Jum_mahasiswa_perjurusan()
    {
        $this->db->group_by('jurusan');
        $this->db->select('jurusan');
        $this->db->select("count(*) as total");
        $this->db->from('tb_peserta');
        $this->db->join('tb_user', 'tb_user.email=tb_peserta.email_peserta');
        $this->db->where('fakultas', 1);
        // $this->db->where('tb_user', ['jurusan' => $this->session->userdata('jurusan')]);
        return $this->db->get()
            ->result();
    }

    // function Jum_angkatan_perjurusan()
    // {
    //     $this->db->group_by('angkatan');
    //     $this->db->select('angkatan');
    //     $this->db->select("count(*) as total");
    //     return $this->db->from('tb_peserta')
    //         ->get()
    //         ->result();
    // }







    public function hitungJumlahKegiatan()
    {
        $query = $this->db->get_where('tb_kegiatan', ['tahun' => date('Y')]);
        // $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hitungJumlahKegiatanBaru()
    {
        $query = $this->db->get_where('tb_kegiatan', ['tahun' => date('Y')], ['status' => 1]);
        // $query = $this->db->get_where('tb_kegiatan', ['status' => 1]);

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hitungTotalDana()
    {
        // $i = 0;
        // $sql = mysql_query("SELECT * FROM barang ORDER BY id");
        // while ($data = mysql_fetch_array($sql)) {
        //     $i++;
        //     $hargatotal[$i] = $data['harga'];
        //     echo $data['nama'] . " = " . $data['harga'] . "<br />";
        // }
        // echo "Total: " . array_sum($hargatotal);
    }
    public function tampilKategori()
    {
        return $this->db->get('tb_skp')->result_array();
    }
    public function hapusKategori($id_skp)
    {
        $this->db->where('id_skp', $id_skp);
        $this->db->delete('tb_skp');
    }
    public function editKategori($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function getKategoriById($id_skp)
    {
        return $this->db->get_where('tb_skp', ['id_skp' => $id_skp])->row_array();
    }
    public function get_category()
    {
        return $this->db->get('tb_skp')->result();
    }
}

<?php

class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
    public function tambahDataMahasiswa()
    {
        do {
            $nim = mt_rand(100000000, 999999999);
            $nim_exist = $this->db->get_where('mahasiswa', ['NIM' => $nim])->row_array();
        } while ($nim_exist);
        $data = [
            "NIM" => $nim,
            "nama" => $this->input->post('nama', true),
            "jurusan" => $this->input->post('jurusan', true),
            "email" => $this->input->post('email', true),
            "nomor_telepon" => $this->input->post('notelp', true)
        ];
        $this->db->insert('mahasiswa', $data);
    }
    public function hapusDataMahasiswa($nim)
    {
        $this->db->delete('mahasiswa', ['NIM' => $nim]);
    }
    public function getMahasiswaByNim($nim)
    {
        return $this->db->get_where('mahasiswa', ['NIM' => $nim])->row_array();
    }
    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jurusan" => $this->input->post('jurusan', true),
            "email" => $this->input->post('email', true),
            "nomor_telepon" => $this->input->post('notelp', true)
        ];
        $this->db->where('NIM', $this->input->post('nim'));
        $this->db->update('mahasiswa', $data);
    }
}


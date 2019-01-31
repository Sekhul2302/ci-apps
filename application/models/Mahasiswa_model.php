<?php
class Mahasiswa_model extends CI_model{
    public function getAllMahasiswa(){
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    public function tambahDataMahasiswa(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "nrp" => $this->input->post('nrp',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan'),
        ];
        $this->db->insert('mahasiswa', $data);
    }
}
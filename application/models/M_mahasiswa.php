<?php 

class M_mahasiswa extends CI_model{

    public function lihat_mahasiswa(){
        $query = $this->db->query("SELECT *FROM tbl_mahasiswa");
        return $query->result();
    }
    public function detail_mahasiswa($nim){
        $query = $this->db->query("SELECT *FROM tbl_mahasiswa WHERE nim ='$nim'");
        return $query->result();
    }
    public function detail_nilai($nim){
        $query = $this->db->query("SELECT *FROM tbl_nilai, tbl_matakuliah, tbl_mahasiswa
        WHERE tbl_matakuliah.id_mk = tbl_nilai.idmatkul AND tbl_mahasiswa.nim = tbl_nilai.nim AND tbl_nilai.nim = '$nim'");
        return $query->result();    
    }

    public function hashing_data($nim){
        $query = $this->db->query("SELECT *FROM tbl_mahasiswa WHERE nim ='$nim'");
        return $query->row();
    }

    public function hashing_data1($nim){
        $query = $this->db->query("SELECT *FROM tbl_nilai, tbl_mahasiswa
        WHERE tbl_mahasiswa.nim = tbl_nilai.nim AND tbl_nilai.nim = '$nim'");
        return $query->result();
    }

    
}
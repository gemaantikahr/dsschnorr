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
    
    public function ds_stored($nim){
        $query = $this->db->query("SELECT dsstored FROM tbl_mahasiswa WHERE nim='$nim'");
        return $query->row()->dsstored;
    }

    public function update_dsstored($nim, $dsstored){
        $query = $this->db->query("UPDATE tbl_mahasiswa SET dsstored='$dsstored' WHERE nim='$nim'");
        return $query;
    }

    public function nilai_hash($nim){
        $query = $this->db->query("SELECT dsstored FROM tbl_mahasiswa WHERE nim='$nim'");
        return $query->row()->dsstored;
    }
    function nama_mhs($nim){
        $query = $this->db->query("SELECT nama FROM tbl_mahasiswa WHERE nim='$nim'");
        return $query->row()->nama;
    }

    function kunci_public(){
        $query = $this->db->query("SELECT tbl_perhitungan.bil_v, tbl_mahasiswa.nim, tbl_mahasiswa.nama FROM tbl_mahasiswa, tbl_perhitungan WHERE 
        tbl_perhitungan.nim = tbl_mahasiswa.nim");
        return $query->result();
    }

    
}
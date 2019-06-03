<?php 

class M_perhitungan extends CI_model{

    function simpan_pertama($bilp,$bilq, $bils, $bila, $bilv){
        $query = $this->db->query("INSERT INTO tbl_perhitungan(bil_p,bil_q,bil_s,bil_a,bil_v)
        VALUES ('$bilp', '$bilq','$bils','$bila', '$bilv')");
        return $query;
    }

    function tambah_r($bilr){
        $query = $this->db->query("UPDATE tbl_perhitungan set bil_r='$bilr'");
        return $query;
    }

    public function tambah_x($bilx){
        $query = $this->db->query("UPDATE tbl_perhitungan set bil_x='$bilx'");
        return $query;
    }

    public function tambah_e($bile){
        $query = $this->db->query("UPDATE tbl_perhitungan set bil_e='$bile'");
        return $query;
    }
    public function tambah_y($bily){
        $query = $this->db->query("UPDATE tbl_perhitungan set bil_y='$bily'");
        return $query;
    }
    function lihat_a($nim){
        $query = $this->db->query("SELECT bil_a FROM tbl_perhitungan WHERE nim='$nim' LIMIT 1");
        return $query->row()->bil_a;
    }
    function lihat_r($nim){
        $query = $this->db->query("SELECT bil_r FROM tbl_perhitungan WHERE nim='$nim' LIMIT 1");
        return $query->row()->bil_r;
    }
    function lihat_p($nim){
        $query = $this->db->query("SELECT bil_p FROM tbl_perhitungan WHERE nim='$nim' LIMIT 1");
        return $query->row()->bil_p;
    }
    function lihat_s($nim){
        $query = $this->db->query("SELECT bil_s FROM tbl_perhitungan WHERE nim='$nim' LIMIT 1");
        return $query->row()->bil_s;
    }
    function lihat_e($nim){
        $query = $this->db->query("SELECT bil_e FROM tbl_perhitungan WHERE nim='$nim' LIMIT 1");
        return $query->row()->bil_e;
    }
    function lihat_q($nim){
        $query = $this->db->query("SELECT bil_q FROM tbl_perhitungan WHERE nim='$nim' LIMIT 1");
        return $query->row()->bil_q;
    }
    function lihat_v($nim){
        $query = $this->db->query("SELECT bil_v FROM tbl_perhitungan WHERE nim='$nim' LIMIT 1");
        return $query->row()->bil_v;
    }
    function lihat_y($nim){
        $query = $this->db->query("SELECT bil_y FROM tbl_perhitungan WHERE nim='$nim' LIMIT 1");
        return $query->row()->bil_y;
    }
    function lihat_x($nim){
        $query = $this->db->query("SELECT bil_x FROM tbl_perhitungan WHERE nim='$nim' LIMIT 1");
        return $query->row()->bil_x;
    }

    function nilai_e($nim){
        $query = $this->db->query("SELECT bil_e FROM tbl_perhitungan WHERE nim='$nim' LIMIT 1");
        return $query->row()->bil_e;
    }

    function nilai_y($nim){
        $query = $this->db->query("SELECT bil_y FROM tbl_perhitungan WHERE nim='$nim' LIMIT 1");
        return $query->row()->bil_y;
    }

    function simpan_kunci($nim,$nilai_p,$nilai_q,$nilai_a,$nilai_s,$nilai_v, $nilai_x, $nilai_r){
        $query = $this->db->query("INSERT INTO tbl_perhitungan(nim,bil_p,bil_q,bil_a,bil_s,bil_v,bil_x, bil_r) VALUE ('$nim','$nilai_p','$nilai_q','$nilai_a','$nilai_s','$nilai_v','$nilai_x','$nilai_r')");
        return $query;
    }
    function simpan_implode_e($implodenilaie, $nim){
        $query = $this->db->query("UPDATE tbl_perhitungan set bil_e='$implodenilaie' WHERE nim='$nim'");
        return $query;
    }
    function simpan_implode_y($implodenilaiy, $nim){
        $query = $this->db->query("UPDATE tbl_perhitungan set bil_y='$implodenilaiy' WHERE nim='$nim'");
        return $query;
    }

    function delete_kunci($nim){
        $query = $this->db->query("DELETE FROM tbl_perhitungan WHERE nim ='$nim'");
        return $query;
    }
    function hapus_sampah(){
        $query = $this->db->query("DELETE from tbl_perhitungan where bil_p = '0'");
        return $query;
    }

}
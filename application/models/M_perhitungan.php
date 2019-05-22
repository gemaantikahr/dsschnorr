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
    function lihat_a(){
        $query = $this->db->query("SELECT bil_a FROM tbl_perhitungan LIMIT 1");
        return $query->row()->bil_a;
    }
    function lihat_r(){
        $query = $this->db->query("SELECT bil_r FROM tbl_perhitungan LIMIT 1");
        return $query->row()->bil_r;
    }
    function lihat_p(){
        $query = $this->db->query("SELECT bil_p FROM tbl_perhitungan LIMIT 1");
        return $query->row()->bil_p;
    }
    function lihat_s(){
        $query = $this->db->query("SELECT bil_s FROM tbl_perhitungan LIMIT 1");
        return $query->row()->bil_s;
    }
    function lihat_e(){
        $query = $this->db->query("SELECT bil_e FROM tbl_perhitungan LIMIT 1");
        return $query->row()->bil_e;
    }
    function lihat_q(){
        $query = $this->db->query("SELECT bil_q FROM tbl_perhitungan LIMIT 1");
        return $query->row()->bil_q;
    }

}
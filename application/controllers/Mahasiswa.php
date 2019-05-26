<?php
class Mahasiswa extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_mahasiswa');
        $this->load->model('m_perhitungan');
	}

	function index(){
        $data['mahasiswa'] = $this->m_mahasiswa->lihat_mahasiswa();
        $this->load->view("schnorr/v_tampil_mahasiswa", $data);
    }

    function detail($nim){
        $data['mahasiswa'] = $this->m_mahasiswa->detail_mahasiswa($nim);
        $data['nilai'] = $this->m_mahasiswa->detail_nilai($nim);
        $data['hashdata'] = $this->m_mahasiswa->hashing_data($nim);
        $data['hashdata1'] = $this->m_mahasiswa->hashing_data1($nim);
        $data['dsstored'] = $this->m_mahasiswa->ds_stored($nim);
        $data['nim'] = $nim;
        $this->load->view("schnorr/v_detail_mahasiswa", $data);
    }

    function verifikasi(){
        $data['mahasiswa'] = $this->m_mahasiswa->lihat_mahasiswa();
        $this->load->view('schnorr/v_verifikasi_mahasiswa', $data);
    }

    function proses_verif($nim){
        $data['mahasiswa'] = $this->m_mahasiswa->detail_mahasiswa($nim);
        $data['nilai'] = $this->m_mahasiswa->detail_nilai($nim);
        $data['hashdata'] = $this->m_mahasiswa->hashing_data($nim);
        $data['hashdata1'] = $this->m_mahasiswa->hashing_data1($nim);
        $data['dsstored'] = $this->m_mahasiswa->ds_stored($nim);
        $data['nim'] = $nim;
        $this->load->view('schnorr/v_proses_verifikasi', $data);
    }

    function simpan_dsstored($nim){
        $dsstored = $this->input->post('xkode');
        $this->m_mahasiswa->update_dsstored($nim, $dsstored);
        redirect('mahasiswa/detail/'.$nim);
    }

    function schnorr($nim){
        $data['bil_r']=$this->m_perhitungan->lihat_r();
        $data['bil_s']=$this->m_perhitungan->lihat_s();
        $data['bil_e']=$this->m_perhitungan->lihat_e();
        $data['bil_q']=$this->m_perhitungan->lihat_q();
        $data['nilaihash'] = $this->m_mahasiswa->nilai_hash($nim);
        $data['namamhs'] = $this->m_mahasiswa->nama_mhs($nim);
        $this->load->view('schnorr/v_schnorr_e',$data);
    }



}   
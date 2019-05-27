<?php
class Home extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('m_perhitungan');
	}

	function index(){
        $this->load->view("home");
    }
    
    public function cek_bilangan(){
        $bilp = $this->input->post("xbilp");
        $bilq = $this->input->post("xbilq");
        $bils = $this->input->post("xbils");
        $bila = $this->input->post("xbila");
        $bilv = $this->input->post("xbilv");
        $this->m_perhitungan->simpan_pertama($bilp,$bilq, $bils, $bila, $bilv);
        $bilgcd = $bilp-1;
        $data = array('bilp'=> $bilp, 'bilq'=> $bilq, 'bilgcd'=>$bilgcd, 'bils'=>$bils, 'bila'=>$bila, 'bilv'=>$bilv);
        $this->load->view("v_proses", $data);
    }

    public function cek_bilangan_1(){
        $bilp = $this->input->post("xbilp");
        $bilq = $this->input->post("xbilq");
        $bils = $this->input->post("xbils");
        $bila = $this->input->post("xbila");
        $bilv = $this->input->post("xbilv");
        // $this->m_perhitungan->simpan_pertama($bilp,$bilq, $bils, $bila, $bilv);
        $bilgcd = $bilp-1;
        $data = array('bilp'=> $bilp, 'bilq'=> $bilq, 'bilgcd'=>$bilgcd, 'bils'=>$bils, 'bila'=>$bila, 'bilv'=>$bilv);
        $this->load->view("schnorr/v_proses", $data);
    }

    public function bilangan_r(){
        $bilr = $this->input->post('xbilr');
        $this->m_perhitungan->tambah_r($bilr);
        $data['bil_a']=$this->m_perhitungan->lihat_a();
        $data['bil_r']=$this->m_perhitungan->lihat_r();
        $data['bil_p']=$this->m_perhitungan->lihat_p();
        $this->load->view("schnorr/v_nilai_x", $data);
    }
    public function key_generation(){
        $this->load->view("schnorr/v_key_generation");
    }

    public function bilangan_x(){
        $bilx = $this->input->post('xbilx');
        $this->m_perhitungan->tambah_x($bilx);
        $this->load->view("schnorr/v_nilai_e");
    }

    public function bilangan_e(){
        $bile = $this->input->post('xbile');
        $this->m_perhitungan->tambah_e($bile);
        $data['bil_r']=$this->m_perhitungan->lihat_r();
        $data['bil_s']=$this->m_perhitungan->lihat_s();
        $data['bil_e']=$this->m_perhitungan->lihat_e();
        $data['bil_q']=$this->m_perhitungan->lihat_q();
        $this->load->view("schnorr/v_nilai_y", $data);
    }

    public function bilangan_y(){
        $bily = $this->input->post('xbily');
        $this->m_perhitungan->tambah_y($bily);
        $data['bil_a']=$this->m_perhitungan->lihat_a();
        $data['bil_y']=$this->m_perhitungan->lihat_y();
        $data['bil_v']=$this->m_perhitungan->lihat_v();
        $data['bil_p']=$this->m_perhitungan->lihat_p();
        $data['bil_e']=$this->m_perhitungan->lihat_e();
        $data['bil_x']=$this->m_perhitungan->lihat_x();
        $this->load->view("schnorr/v_proses_cocok", $data);
    }


}
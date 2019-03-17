<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
        $this->load->view("home");
    }
    
    public function cek_bilangan(){
        $bilp = $this->input->post("xbilp");
        $bilq = $this->input->post("xbilq");
        $bils = $this->input->post("xbils");
        $bilgcd = $bilp-1;
        $data = array('bilp'=> $bilp, 'bilq'=> $bilq, 'bilgcd'=>$bilgcd, 'bils'=>$bils);
        $this->load->view("home", $data);
    }

}
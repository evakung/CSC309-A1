
<?php
class Site extends CI_Controller{
	
	function __contstruct(){
		parent::Controller();
		$this->is_logged_in();
	}
	
	function is_logged_in(){
		$auth = $this->session->userdata('is_logged_in');
		if ($auth != 1){
			$this->load->view('template/fail.php');
		}
	}
	
	function member_only(){
		$this->load->view('template/member_only.php');
	}
}
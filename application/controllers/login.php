<?php
class Login extends CI_Controller{
	function index(){
		$data['main_content'] = "template/login_form";
		$this->load->view('template/template.php', $data);
	}
	
	function validate_credentials(){
		$this->load->model('customer_model');
		$password = $this->input->get_post("password");
		if($this->customer_model->validate($password)){ //if the user has valid user
			$data = array(
						'login' =>$this->input->post('login'),
						'is_logged_in' => true,
						'cart' => array(),
						'to_be_ordered' => null
					);
			
			$this->session->set_userdata($data);
			redirect('site/member_only');
		}
		else{
			$this->load->view('template/fail.php');
			
		}
		
	}
	
	function signup(){
		$this->load->view('customer/newForm');
	}
	
	function logout(){
		$this->session->sess_destroy();
		$this->index();
	}
}
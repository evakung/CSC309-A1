
<?php 

	if ($this->session->userdata('is_logged_in')){
			redirect('candystore/index', 'refresh');
	}else{
		$this->load->view("template/login_form.php");
	}

?>
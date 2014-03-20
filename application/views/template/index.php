
<?php 

if ($this->session->userdata('is_logged_in')){
	redirect(candystore/index);
}else{
	$this->load->view("template/login_form.php");
}

?>
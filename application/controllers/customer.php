<?php
class Customer extends CI_Controller{
	function index(){
		$this->load->model('customer_model');
		$customers = $this->customer_model->getAll();
		$data['customers'] = $customers;
		$this->load->view('customer/index.php', $data);
	}
	
	function newForm(){
		$this->load->view('customer/newForm.php');
	}
	
	function create(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first', 'First Name', 'required|is_unique[customer.login]'); //Non overlapping usernames
		$this->form_validation->set_rules('last', 'Last Name', 'required');
		$this->form_validation->set_rules('login', 'Login', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|matches[passwordconf]'); //Added here, ->len(password) > 6, matches confirmation
		$this->form_validation->set_rules('passwordconf', 'Confirm Password', 'required|min_length[6]'); //Added new password confirmation for register  same requirments 
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		//Check email validity 
		if ($this->form_validation->run() == true ){
			$this->load->model('customer_model');
	
			$customer = new Customer();
			$customer->first = $this->input->get_post('first');
			$customer->last = $this->input->get_post('last');
			$customer->login = $this->input->get_post('login');
			$customer->password = $this->input->get_post('password');
			$customer->email = $this->input->get_post('email');
			
			$this->customer_model->insert($customer);
			$this->load->view('customer/successCustomer.php');
		}else{
			$this->load->view('customer/newForm.php');
		}
	}
	
	function update($id){

		$this->load->library('form_validation');

		//$this->form_validation->set_rules('first', 'First Name', 'required|is_unique[customers.login]'); //Non overlapping usernames

		$this->form_validation->set_rules('first', 'First Name', 'required|is_unique[customer.login]'); //Non overlapping usernames


		$this->form_validation->set_rules('last', 'Last Name', 'required');
		$this->form_validation->set_rules('login', 'Login', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]'); //Added here, ->len(password) > 6,
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		//Check email validity 

		//$this->load->library('form_validation');
		//$this->form_validation->set_rules('first', 'First', 'required');
		//$this->form_validation->set_rules('last', 'Last', 'required');
		//$this->form_validation->set_rules('login', 'Login', 'required');
		//$this->form_validation->set_rules('password', 'Password', 'required');
		//$this->form_validation->set_rules('email', 'Email', 'required');
		
		if ($this->form_validation->run() == true){
				
			$customer = new Customer();
			$customer->id = $id;
			$customer->first = $this->input->get_post('first');
			$customer->last = $this->input->get_post('last');
			$customer->login = $this->input->get_post('login');
			$customer->password = $this->input->get_post('password');
			$customer->email = $this->input->get_post('email');
			
			$this->load->model('customer_model');	
			$this->customer_model->update($customer);
			redirect('customer/index', 'refresh');
		}else{
			$customer = new Customer();
			$customer->id = $id;
			$customer->first = set_value('first');
			$customer->last = set_value('last');
			$customer->login = set_value('login');
			$customer->password = set_value('password');
			$customer->email = set_value('email');
			$data['customer'] = $customer;
			$this->load->view('customer/editForm.php', $data);
		}
		
	}
	
	function read($id){
		$this->load->model('customer_model');
		$customer = $this->customer_model->get($id);
		$data['customer']=$customer;
		$this->load->view('customer/read.php',$data);
	}
	
	function editForm($id){
		$this->load->model('customer_model');
		$customer = $this->customer_model->get($id);
		$data['customer']=$customer;
		$this->load->view('customer/editForm.php',$data);
	}
	
	function delete($id){
		$this->load->model('customer_model');
		
		if (isset($id))
			$this->customer_model->delete($id);
		
		//Then we redirect to the index page again
		redirect('customer/index', 'refresh');
	}
}

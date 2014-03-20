<?php
class Customer_model extends CI_Model{
	
	//--------------------------------- DB Functionality -----------------------
	
	function getAll(){
		$query = $this->db->select('*')->from('customer')->get();
		return $query->result();
	}
	
	function insert($customer){
		return $this->db->insert("customer", array('first' => $customer->first, 'last' => $customer->last,
				'login'=> $customer->login, 'password'=>$customer->password, "email" => $customer->email));
	}
	
	function get($id){
		$q = $this->db->get_where('customer', array('id'=>$id));
		return $q->row(0,'Customer');
	}
	
	function delete($id){
		return $this->db->delete("customer", array('id'=>$id));
	}
	
	function update($customer){
		$this->db->where('id', $customer->id);
		return $this->db->update("customer", array('first' => $customer->first, 'last' => $customer->last,
				'login'=> $customer->login, 'password'=>$customer->password, "email" => $customer->email));
	}
	
	
	//-------------------------------- Other functionalities -------------------------
	
	function validate($password){
		//$q = $this->db->get_where('login', array('login'=>$this->input->get_post("login"), 'password'=>md5($this->input->get_post("password"))));
		
		$this->db->where('login', $this->input->get_post("login"));
		$this->db->where('password', $password);
		$q = $this->db->get('customer');
		
		if($q->num_rows() == 1){
			return true;
		}
	}

	
	
}
?>
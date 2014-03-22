<?php
class Order extends CI_Controller{
	function index(){
		
		$this->load->model('order_model');
		$orders = $this->order_model->getAll();
		$data['orders']=$orders;
	
		//view all orders
		$this->load->view('order.php', $data);
	}
	
	function create(){
		
		$cart = $this->session->userdata('cart');
		$this->get_total();
	
		$this->load->model('customer_model');
		$customer_id = $this->customer_model->getID($this->session->userdata('login'));
		$cid=0;
		foreach ($customer_id as $row){
			$cid= $row->id;
		}
	
		// NEED TO CREATE NEW ORDER AND INSERT INTO DB
		$this->load->model('order_model');
		$order = new Order();
		$order->cid = $cid;
		$order->date = date('Y-m-d');
		$order->time = time();
		/*date('Y-m-d'), 'order_time' => time(),*/
		$order->total = $this->get_total();
		$order->credit_num = $this->input->get_post('creditcard_number');
		$order->credit_month = $this->input->get_post('creditcard_month');
		$order->credit_year = $this->input->get_post('creditcard_year');
	
		
		$this->order_model->insert($order);
		$result = $this->db->insert_id();
		$this->session->set_userdata('order_id', $result);
		$data['order_info'] = $order;
		$this->load->view('cart/confirm_purchase.php', $data);
		
	}
	
	function get_total(){
		$cart = $this->session->userdata('cart');
		$total = 0;
		foreach($cart as $order){
			$total = $total + $order['subtotal'];
		}
		return $total;
	}
	
	
	function read($id) {
		$this->load->model('order_model');
		$order = $this->order_model->get($id);
		$data['order']=$order;
		$this->load->view('readOrder.php',$data);
	}
	
	function delete($id) {
		$this->load->model('order_model');
		if (isset($id)){
			$this->delete_item($id); //deletes the order_items that are associated with the order
			$this->order_model->delete($id);
		}			
		//Then we redirect to the index page again
		redirect('order/index', 'refresh');
	}
	
	
	function delete_item($oid){
		$this->load->model('item_model');
		$items = $this->item_model->getAll();
		$customerOrderId = Array();
		foreach ($items as $item){
			if( $item->order_id == $oid){
				$this->item_model->delete($item->id);
			}
		}
			
	
	}
	
	
}

<?php

class Item extends CI_Controller{
	function index(){
	}

	function create(){
		$cart = $this->session->userdata('cart');
		foreach($cart as $item){
			$this->load->model(array('product_model','item_model'));
			$product_id = $this->product_model->getName($item['name']);
			
			$order_item = new Item();
			$order_item->order_id = $this->session->userdata('order_id');;
			$order_item->product_id = $product_id->id;
			$order_item->quantity = $item['quantity'];
			
			$this->item_model->insert($order_item);
		}
		
		//empty the cart
		$empty_cart = array();
		$this->session->set_userdata('cart', $empty_cart);
		
		$this->load->view("cart/receipt.php");
	}
	
	
}
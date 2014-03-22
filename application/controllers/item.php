
<?php

class Item extends CI_Controller{
	function index(){
	}

	function create(){
		$cart = $this->session->userdata('cart');
		$this->load->model(array('product_model','item_model', 'order_model'));
		if(empty($cart) === true){
			$this->load->view('cart/empty_cart.php');
		}else{
			$count = 0;
			foreach($cart as $item){
				if($item['quantity'] > 0){
					
					$product_id = $this->product_model->getName($item['name']);
						
					$order_item = new Item();
					$order_item->order_id = $this->session->userdata('order_id');
					$order_item->product_id = $product_id->id;
					$order_item->quantity = $item['quantity'];
						
					$this->item_model->insert($order_item);
				
				}else{
					$count++;
				}
			}
			if ($count == count($cart)){
				$this->load->view('cart/empty_cart.php');
			}else{
	
				//empty the cart
				
				$order_id = $this->session->userdata('order_id');
				$order = $this->order_model->get($order_id);
				$order_value = $order[0];
				$data = array('cart'=>$cart,'order_info'=>$order_value);
				$empty_cart = array();
				//$this->session->set_userdata('cart', $empty_cart);
				$this->load->view('cart/receipt.php', $data);
				
				
				
			}
		}
	}
	
	
	

	
}
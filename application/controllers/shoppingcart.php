<?php
class ShoppingCart extends CI_Controller{
	function __contstruct(){
		parent::Controller();
	}
	
	
	function get_customer(){
		$current_customer = $this->session->userdata('login');
	}
	
	function view_shopping_cart(){
			$cart = $this->session->userdata('cart');
			$data = array(
					'cart'=>$cart,
					'total'=>$this->get_total()
			);
			$this->load->view("cart/main_cart.php", $data);
	}
	
	function update_cart(){
		$this->load->model('product_model');
		$pid = $this->session->userdata('to_be_ordered');
		if($pid == null || $this->session->userdata('login') != true){
			redirect('candystore/index');
		}
		
		$product = $this->product_model->get($pid);
		$name = $product->name;
		$qty = $this->input->get_post('quantity');
		$price=$product->price;
		
		$cart = $this->session->userdata('cart');
		
		$dup = false;
		$index=0;
		foreach ($cart as $items){
			if($items['name'] == $product->name){
				$dup = true;
				$order = array(
						'name'=>$name,
						'price'=>$price,
						'quantity'=>$qty,
						'subtotal'=>$price*$qty
				);
				$replace = array_replace($items, $order);
				$mainReplace = array($index => $replace);
				$newCart = array_replace($cart, $mainReplace);
				$this->session->set_userdata('cart', $newCart);
				break;
			}
			$index++;
		}
		//if not, create new array_order
		if (!$dup){
			$order = array(
					'name'=>$name,
					'price'=>$price,
					'quantity'=>$qty,
					'subtotal'=>$price*$qty
			);
			//adding new order onto cart
			array_push($cart, $order);
			$this->session->set_userdata('cart', $cart);
		}
		$this->session->set_userdata('to_be_ordered', null);
		
		$cart = $this->session->userdata('cart');
		$data = array(
				'cart'=>$cart,
				'total'=>$this->get_total()
		);
		$this->load->view("cart/items.php", $data);
		
		
	}
	
	function order_form($id, $fromcart){
		$this->load->model('product_model');
		$product = $this->product_model->get($id);
		$data=array(
						'product' => $product,
						'fromcart' => $fromcart,
						'quantity' => 5
					);
		$this->session->set_userdata('to_be_ordered',$product->id);
		$this->load->view('cart/order_item.php',$data);
	}
	
	function add_to_cart(){
		
		$this->load->model('product_model');
		$pid = $this->session->userdata('to_be_ordered');
		if($pid == null || $this->session->userdata('login') != true){
			redirect('candystore/index');
		}
		$product = $this->product_model->get($pid);
		$name = $product->name;
		$qty = $this->input->get_post('quantity');
		$price=$product->price;
		
		$cart = $this->session->userdata('cart');
		
		//need to check cart if there is an order already
		
		//loop through cart to check for same name==name
			//if same
			//add quantity with get_post(quantity)+$qty
			//let $order == new order
		$dup = false;
		$index=0;
		foreach ($cart as $items){
			if($items['name'] == $product->name){
				$dup = true;
				$newQty = $items['quantity'] + $qty;
				$order = array(
						'name'=>$name,
						'price'=>$price,
						'quantity'=>$newQty,
						'subtotal'=>$price*$newQty
						);
				$replace = array_replace($items, $order);
				$mainReplace = array($index => $replace);
				$newCart = array_replace($cart, $mainReplace);
				$this->session->set_userdata('cart', $newCart);
				break;
			}
			$index++;
		}
		//if not, create new array_order
		if (!$dup){ 
			$order = array(
					'name'=>$name,
					'price'=>$price,
					'quantity'=>$qty,
					'subtotal'=>$price*$qty
			);
			//adding new order onto cart
			array_push($cart, $order);
			$this->session->set_userdata('cart', $cart);
		}	
		$this->session->set_userdata('to_be_ordered', null);
		
		$cart = $this->session->userdata('cart');
		$data = array(
					'cart'=>$cart,
					'total'=>$this->get_total()
				);
		$this->load->view("cart/items.php", $data);
				
	}
	
	function purchase(){
		$this->load->view('cart/get_info.php');
	}
	
	function get_total(){
		$cart = $this->session->userdata('cart');
		$total = 0;
		foreach($cart as $order){
			$total = $total + $order['subtotal'];
		}
		return $total;
	}
	
	
	function delete(){
		
	}

	function edit_form($order){
		$this->load->model('product_model');
		$result = $this->product_model->getName($order);
		$product_id = $result->id;
		$this->order_form($product_id, true);
	}
	
	
	

	
	


}
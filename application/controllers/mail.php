<?php
class Mail extends CI_Controller{

	
	function index(){
		
		$this->load->helper('url');
		
		$config = Array(
					'protocal' => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_port' => 465,
					'smtp_user' => 'mevacandyshop@gmail.com',
					'smpt_pass' => 'candyshop',
					'charset' => 'utf-8',
        			'wordwrap' => TRUE,
					'mailtype' =>'html'
				);
		
		$userInfo = $this->getUserInfo();
		
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
			
		$this->email->from("mevacandyshop@gmail.com", "Meva CandyShop");
		$this->email->to($userInfo->email);
		$this->email->subject("Meva CandyShop Order Receipt");
		
		$this->email->message($this->getMessage());
		
		if($this->email->send()){
			redirect('mail/succes', 'refresh');
		}else{
			redirect('mail/fail', 'refresh');
			show_error($this->email->print_debugger());
		}

	}
	function getMessage(){
		$title ='Your Order from Meva Candyshop                              ';
		$orderInformation = $this->getOrderInfo();
		$orderedItems = $this->getItemInfo($orderInformation->id);
		
		$Orderinfo = "Order ID : " . $orderInformation->id ."\n" . "Order Date : " . $orderInformation->order_date. "\n"."Order Time :" . $orderInformation->order_time;
		$items = $this->getItemInfo($orderInformation->id);
		$itemList = "";
		$total = 0;
		
		foreach($items as $item){ // check for q = 0
			$this->load->model("product_model");
			$product = $this->product_model->get($item->product_id);
			if ($item->quantity > 0){
				$quant = "Quantity : " . $item->quantity . "\t";
				$name = "Name : " . $product->name . "\t";
				$item_price = "Price : " . $product->price . "\t";
				$sub = "Sub-Total : " . $product->price * $item->quantity . "\t";
				$total += $product->price*$item->quantity;
				$itemList .= $quant . $name . $item_price . $sub . "\n";
			}
		}
		return "\n" . $title."\n" . "\n" . $Orderinfo . "\n" . "\n" . $itemList . "\n" . "\n Total : " . $total;		
	}
		

	function getUserInfo(){
		$this->load->model('customer_model');
		$customers = $this->customer_model->getAll();
		foreach ($customers as $customer){
			if( $customer->login == $this->session->userdata('login')){
				return $customer;
			}
		}
	}
	
	function getOrderInfo(){
		$customer = $this->getUserInfo();
		$cid = $customer->id;
		
		$this->load->model('order_model');
		$orders = $this->order_model->getAll();
		$allOrders = Array();
		foreach ($orders as $order){
			if( $order->customer_id == $cid){
				array_push($allOrders,$order);
			}
		}
		return array_pop($allOrders);
	
	}
	
	function getItemInfo($oid){
		$this->load->model('item_model');
		$items = $this->item_model->getAll();
		$customerItems = Array();
		foreach ($items as $item){
			if( $item->order_id == $oid){
				array_push($customerItems, $item);
			}
		}
		return $customerItems;
			
	}
	
	function succes(){
		$this->load->view('cart/sucessEmail.php');
	}
	
	function fail(){
		$this->load->view('cart/failEmail.php');
	}
}
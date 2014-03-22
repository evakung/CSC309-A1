<?php
class Order_model extends CI_Model{

	//--------------------------------- DB Functionality -----------------------

	function getAll(){
		$query = $this->db->select('*')->from('order')->get();
		return $query->result();
	}

	function insert($order){
		//echo "here";
		
		//$this->db->query('YOUR QUERY HERE');
		
		return $this->db->insert("order", array('customer_id' => $order->cid, 'order_date' => $order->date,
				'order_time'=> $order->time, 'total'=>$order->total, "creditcard_number" => $order->credit_num,
				"creditcard_month" => $order->credit_month,"creditcard_year" => $order->credit_year));
	}

	function get($id){
		$q = $this->db->get_where('order', array('id'=>$id));
		return  $q->result();
	}

	
	
	function delete($id){
		return $this->db->delete("order", array('id'=>$id));
	}

	function update($order){
		$this->db->where('id', $order->id);
		return $this->db->update("order", array('customer_id' => $order->cid, 'order_date' => $order->date,
				'order_time'=> $order->ime, 'total'=>$order->total, "creditcard_number" => $order->credit_num,
				"creditcard_month" => $order->credit_month,"creditcard_year" => $order->credit_year));
	}
	
	
}
?>
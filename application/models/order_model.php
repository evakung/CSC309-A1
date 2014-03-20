<?php
class Order_model extends CI_Model{

	//--------------------------------- DB Functionality -----------------------

	function getAll(){
		$query = $this->db->select('*')->from('order')->get();
		return $query->result();
	}

	function insert($order){
		return $this->db->update("order", array('customer_id' => $order->customer_id, 'order_date' => $order->order_date,
				'order_time'=> $order->order_time, 'total'=>$order->total, "creditcard_number" => $order->creditcard_number,
				"creditcard_month" => $order->creditcard_month,"creditcard_year" => $order->creditcard_year));
	}

	function get($id){
		$q = $this->db->get_where('order', array('id'=>$id));
		return $q->row(0,'Order');
	}

	function delete($id){
		return $this->db->delete("order", array('id'=>$id));
	}

	function update($order){
		$this->db->where('id', $order->id);
		return $this->db->update("order", array('customer_id' => $order->customer_id, 'order_date' => $order->order_date,
				'order_time'=> $order->order_time, 'total'=>$order->total, "creditcard_number" => $order->creditcard_number,
				"creditcard_month" => $order->creditcard_month,"creditcard_year" => $order->creditcard_year));
	}
	
	
}
?>
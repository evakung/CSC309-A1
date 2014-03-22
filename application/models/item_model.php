<?php
class Item_model extends CI_Model{
	
	//--------------------------------- DB Functionality -----------------------
	
	function getAll(){
		$query = $this->db->select('*')->from('order_item')->get();
		return $query->result();
	}

	function insert($order_item){
		return $this->db->insert("order_item", array('order_id' => $order_item->order_id, 'product_id' => $order_item->product_id,
				'quantity'=> $order_item->quantity));
	}

	function get($id){
		$q = $this->db->get_where('order_item', array('id'=>$id));
		return $q->row(0,'Item');
	}



	
	
	function delete($id){
		return $this->db->delete("order_item", array('id'=>$id));
	}

	function update($order_item){
		$this->db->where('id', $order_item->id);
		return $this->db->update("order_item", array('order_id' => $order_item->order_id, 'product_id' => $order_item->product_id,
				'quantity'=> $order_item->quantity));
	}
}
?>
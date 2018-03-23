<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model
{
	public $table_name = 'tbl_orders';

	public function __construct()
    {
        parent::__construct();
    }

	public function getMyOrders(){
		$query = $this->db->get($this->table_name);

		$orders = $query->result_array();
		if(!empty($orders)){
            return $orders;
        } else {
        	return array();
        }
	}


}
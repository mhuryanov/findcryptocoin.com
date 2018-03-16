<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Coinlist_model extends CI_Model
{
	public $table_name = 'tbl_coin_list';

	public function __construct()
    {
        parent::__construct();
    }

	public function getAllCoinList(){
		$this->db->where('coin_status', 'active');
		$query = $this->db->get($this->table_name);
		return $query->result_array();
	}
}
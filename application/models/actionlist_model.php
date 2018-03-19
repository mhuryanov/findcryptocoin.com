<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Actionlist_model extends CI_Model
{
	public $table_name = 'tbl_actions_list';
	public $table_coin = 'tbl_coin_list';
	public $table_users = 'tbl_users';

	public function __construct()
    {
        parent::__construct();
    }

	public function getAllActionList(){
		// $query = $this->db->get($this->table_name);
		// return $query->result_array();

		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->join($this->table_coin, $this->table_coin . '.coin_id = ' . $this->table_name . '.action_coin_id');
		$this->db->join($this->table_users, $this->table_users . '.userId = ' . $this->table_name . '.action_user_id');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getActionById($action_id){
		$this->db->where('action_id', $action_id);

		$query = $this->db->get($this->table_name);
		return $query->result();
	}

	public function updateActionById($action_id, $data){
		$this->db->where('action_id', $action_id);
		$this->db->update($this->table_name, $data);
	}
}
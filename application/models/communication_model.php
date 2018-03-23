<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Communication_model extends CI_Model
{
	public $table_name = 'tbl_communications';

	public function __construct()
    {
        parent::__construct();
    }

	public function getMyCommunications(){
		$this->db->or_where('com_from', $this->session->userdata('user-id'));
		$this->db->or_where('com_to', $this->session->userdata('user-id'));	
		$query = $this->db->get($this->table_name);

		$coms = $query->result_array();
		if(!empty($coms)){
            return $coms;
        } else {
        	return array();
        }
	}


}
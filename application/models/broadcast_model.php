<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Broadcast_model extends CI_Model
{
	public $table_name = 'tbl_broadcast';

	public function __construct()
    {
        parent::__construct();
        // $this->getCurrentBroadcast();
    }

	public function getCurrentBroadcast(){
		$this->db->where('bro_status', 'active');
		$query = $this->db->get($this->table_name);
		$broadcasts = $query->result();
		return $broadcasts;

		// if(!empty($broadcasts)){            
  //           $this->session->set_userdata('broadcasts', $broadcasts);
  //       } else {
  //       	$this->session->set_userdata('broadcasts', null);
  //       }
	}
}
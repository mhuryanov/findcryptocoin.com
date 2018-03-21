<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Footer_model extends CI_Model
{
	public $table_name = 'tbl_footer';

	public function __construct()
    {
        parent::__construct();
      
    }

	public function getCurrentFooter(){
		$this->db->where('footer_status', 'active');
		$this->db->limit(1);
		$query = $this->db->get($this->table_name);
		$menus = $query->result_array()[0];

		if(!empty($menus)){
            return $menus;
            
        } else {
        }
	}

	
}
<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Social_model extends CI_Model
{
	public $table_name = 'tbl_social';

	public function __construct()
    {
        parent::__construct();
    }

	public function getSocials(){
		$this->db->where('social_status', 'active');
		$query = $this->db->get($this->table_name);
		$socials = $query->result_array();

		if(!empty($socials)){
            return $socials;
            
        } else {
        }
	}
}
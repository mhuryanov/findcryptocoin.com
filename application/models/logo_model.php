<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Logo_model extends CI_Model
{
	public $table_name = 'tbl_logo';

	public function __construct()
    {
        parent::__construct();
        $this->getCurrentLogo();
    }

	public function getCurrentLogo(){
		$this->db->where('logo_status', 'active');
		$this->db->limit(1);
		$query = $this->db->get($this->table_name);
		$logos = $query->result();

		if(!empty($logos)){
            $sessionArray = $logos[0];                        
            $this->session->set_userdata($sessionArray);
        } else {
        }
	}
}
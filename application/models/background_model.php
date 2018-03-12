<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Background_model extends CI_Model
{
	public $table_name = 'tbl_background';

	public function __construct()
    {
        parent::__construct();
        $this->getCurrentBackground();
    }

	public function getCurrentBackground(){
		$this->db->where('bg_status', 'active');
		$this->db->limit(1);
		$query = $this->db->get($this->table_name);
		$backgrounds = $query->result();

		if(!empty($backgrounds)){
            $sessionArray = $backgrounds[0];                        
            $this->session->set_userdata($sessionArray);
        } else {
        }
	}
}
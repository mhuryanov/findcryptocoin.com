<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model
{
	public $table_name = 'tbl_captcha';

	public function __construct()
    {
        parent::__construct();
    }

	public function addNewCaptcha() {
		$data['captcha_ip_address'] = $this->input->ip_address();
		$data['captcha_browser'] = 	$this->input->user_agent();
		$this->db->insert($this->table_name, $data);
		$insert_id = $this->db->insert_id();
	}
}
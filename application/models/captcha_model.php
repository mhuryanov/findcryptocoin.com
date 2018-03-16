<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Captcha_model extends CI_Model
{
	public $table_name = 'tbl_captcha';

	public function __construct()
    {
        parent::__construct();
    }

	public function addNewCaptcha() {
		$data['captcha_ip_address'] = $_SERVER['REMOTE_ADDR'];
		$data['captcha_browser'] = 	$this->input->user_agent();
		$data['captcha_os'] = 	$this->input->user_agent();

		$getloc = json_decode(file_get_contents("http://ipinfo.io/".$data['captcha_ip_address']."/json"));
		$data['captcha_location'] = "";
		if ($getloc->city != "") {
			$data['captcha_location'] .= $getloc->city;
		}
		if($getloc->region != "") {
			$data['captcha_location'] .= $getloc->region;	
		}

		if ($getloc->country != "") {
			$data['captcha_location'] .= $getloc->country;
		}
 		$data['captcha_location'] = $getloc->city . ', ' . $getloc->region. ', ' . $getloc->country;
		$this->db->insert($this->table_name, $data);
		$insert_id = $this->db->insert_id();
	}
}
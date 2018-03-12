<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model
{
	// public $table_name = 'tbl_logo';

	public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }

	public function sendEmail(){
				//SMTP & mail configuration
		$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'ssl://findcryptocoin.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'info@findcryptocoin.com',
		    'smtp_pass' => 'kRJBmOnl$BJq',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");

		//Email content
		$htmlContent = '<h1>Sending email via SMTP server</h1>';
		$htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

		$this->email->to('rubby.star@hotmail.com');
		$this->email->from('info@findcryptocoin.com','MyWebsite');
		$this->email->subject('How to send email via SMTP server in CodeIgniter');
		$this->email->message($htmlContent);

		//Send email
		$this->email->send();
	}
}

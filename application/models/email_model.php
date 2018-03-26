<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email_model extends CI_Model
{
	public $table_name = 'tbl_email_tpl';

	public function __construct()
    {
        parent::__construct();
    }

	public function sendEmail($email, $tpl){
		$this->db->where('email_tpl', $tpl);
		$this->db->where('email_status', 'active');
		$query = $this->db->get($this->table_name);
		$result = $query->result_array()[0];

		$mail = new PHPMailer(true);                              // Passing `true` enables 
		try {
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'sg2plcpnl0054.prod.sin2.secureserver.net';  // Specify main and 
		    $mail->SMTPAuth = true;                               // Enable SMTP 
		    $mail->Username = 'info@findcryptocoin.com';                 // SMTP username
		    $mail->Password = 'kRJBmOnl$BJq';                           // SMTP password
		    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, 
		    $mail->Port = 465;                                    // TCP port to connect to

		    $mail->setFrom('info@findcryptocoin.com', 'Mailer');
		    $mail->addAddress($email, 'Joe User');     // Add a recipient
		  
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = $result['email_subject'];
		    $mail->Body    = $result['email_body'];

		    $mail->send();
		    return "Message has been sent";
		} catch (Exception $e) {
		   return 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
		}
	}
}

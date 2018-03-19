<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email_model extends CI_Model
{
	// public $table_name = 'tbl_logo';

	public function __construct()
    {
        parent::__construct();
        // $this->load->library('email');
    }

	public function sendEmail($email){

		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
		    //Server settings
		    // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'sg2plcpnl0054.prod.sin2.secureserver.net';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'info@findcryptocoin.com';                 // SMTP username
		    $mail->Password = 'kRJBmOnl$BJq';                           // SMTP password
		    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 465;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('info@findcryptocoin.com', 'Mailer');
		    $mail->addAddress($email, 'Joe User');     // Add a recipient
		  
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Here is the subject';
		    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    $mail->send();
		    // echo 'Message has been sent';
		    return "Message has been sent";
		} catch (Exception $e) {
		   return 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
		    // return false;
		}
	}
}

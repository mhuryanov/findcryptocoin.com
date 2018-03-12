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

	public function sendEmail(){
				//SMTP & mail configuration
		// $config = array(
		//     'protocol'  => 'smtp',
		//     'smtp_host' => 'ssl://smtp.findcryptocoin.com',
		//     'smtp_port' => 465,
		//     'smtp_user' => 'info@findcryptocoin.com',
		//     'smtp_pass' => 'kRJBmOnl$BJq',
		//     'mailtype'  => 'html',
		//     'charset'   => 'utf-8'
		// );
		// $this->email->initialize($config);
		// $this->email->set_mailtype("html");
		// $this->email->set_newline("\r\n");

		// //Email content
		// $htmlContent = '<h1>Sending email via SMTP server</h1>';
		// $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

		// $this->email->to('rubby.star@hotmail.com');
		// $this->email->from('info@findcryptocoin.com','MyWebsite');
		// $this->email->subject('How to send email via SMTP server in CodeIgniter');
		// $this->email->message($htmlContent);

		// //Send email
		// $this->email->send();

		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
		    //Server settings
		    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'findcryptocoin.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'info@findcryptocoin.com';                 // SMTP username
		    $mail->Password = 'kRJBmOnl$BJq';                           // SMTP password
		    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 465;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('info@findcryptocoin.com', 'Mailer');
		    $mail->addAddress('rubby.star@hotmail.com', 'Joe User');     // Add a recipient
		    // $mail->addAddress('ellen@example.com');               // Name is optional
		    // $mail->addReplyTo('info@example.com', 'Information');
		    // $mail->addCC('cc@example.com');
		    // $mail->addBCC('bcc@example.com');

		    //Attachments
		    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Here is the subject';
		    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
	}
}

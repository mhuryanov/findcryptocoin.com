<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class UserLogin extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index(){
    	$data['page_title'] = 'FCC | Login';

    	$this->load->view('user/header', $data);
    	$this->load->view('user/login');
    	$this->load->view('user/footer');
    }

    public function forgotpassword(){
    	$data['page_title'] = 'FCC | ForgotPassword';

    	$this->load->view('user/header', $data);
    	$this->load->view('user/forgotpassword');
    	$this->load->view('user/footer');
    }

    public function signup(){
    	$data['page_title'] = 'FCC | Signup';

    	$this->load->view('user/header', $data);
    	$this->load->view('user/signup');
    	$this->load->view('user/footer');
    }

}
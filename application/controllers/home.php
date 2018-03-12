<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $isLoggedIn = $this->session->userdata('user-login');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            redirect('/');
        }
        
    }

    public function index() {
        $data['title'] = "FCC | Home";
        $this->load->model('background_model');
        $this->load->view('home/header', $data);
        $this->load->view('home/homepage', $data);
        $this->load->view('home/footer', $data);
    }

    public function myaccount() {
        $data['title'] = 'FCC | MY Account';

        $this->load->view('home/header', $data);
        $this->load->view('home/myaccount', $data);
        $this->load->view('home/footer', $data);
    }

}

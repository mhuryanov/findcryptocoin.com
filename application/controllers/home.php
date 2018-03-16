<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    public $currentMenus;
    public function __construct()
    {
        parent::__construct();
        $isLoggedIn = $this->session->userdata('user-login');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            redirect('/');
        }
        $this->load->model('menu_model');
        $this->currentMenus = $this->menu_model->getCurrentMenus();

        $this->load->model('coinlist_model');
        $this->load->model('actionlist_model');
    }

    public function index() {
        $data['title'] = "FCC | Home";
        $data['menus'] = $this->currentMenus;
        $data['coin_list'] = $this->coinlist_model->getAllCoinList();
        $this->load->model('background_model');
        $this->load->view('home/header', $data);
        $this->load->view('home/homepage', $data);
        $this->load->view('home/footer', $data);
    }

    public function myaccount() {
        $data['title'] = 'FCC | MY Account';
        $data['menus'] = $this->currentMenus;
        $this->load->view('home/header', $data);
        $this->load->view('home/myaccount', $data);
        $this->load->view('home/footer', $data);
    }

    public function seeactions() {
        $data['title'] = 'FCC | See Actions';
        $data['menus'] = $this->currentMenus;
        $data['action_list'] = $this->actionlist_model->getAllActionList();

        $this->load->view('home/header', $data);
        $this->load->view('home/seeactions', $data);
        $this->load->view('home/footer', $data);

        // $this->load->model('email_model');
        // $this->email_model->sendEmail();
    }

}

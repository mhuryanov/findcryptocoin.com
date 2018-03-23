<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    public $currentMenus;
    public $socials;
    public $footer;
    public function __construct()
    {
        parent::__construct();
        // $isLoggedIn = $this->session->userdata('user-login');
        
        // if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        // {
        //     redirect('/');
        // }
        $this->load->model('menu_model');
        $this->currentMenus = $this->menu_model->getCurrentMenus();

        $this->load->model('social_model');
        $this->socials = $this->social_model->getSocials();

        $this->load->model('coinlist_model');
        $this->load->model('actionlist_model');
        $this->load->model("broadcast_model");
        $this->load->model("contactus_model");
        $this->load->model('email_model'); 
        $this->load->model('footer_model');     
        $this->footer = $this->footer_model->getCurrentFooter();
        $this->load->model("order_model");
        $this->load->model("communication_model");
        $this->load->model('user_model');
    }

    public function index() {
        $data['title'] = "FCC | Home";
        $data['menus'] = $this->currentMenus;
        $data['socials'] = $this->socials;
        $data['broadcasts'] = $this->broadcast_model->getCurrentBroadcast();

        $data['coin_list'] = $this->coinlist_model->getAllCoinList();
        $data['seehowtobuy_label'] = $this->menu_model->getSeeHowToBuy()['menu_label'];
        $data['seehowtobuy_target'] = $this->menu_model->getSeeHowToBuy()['menu_target'];
        $data['footer'] = $this->footer;

        $this->load->model('background_model');
        $this->load->view('home/header', $data);
        $this->load->view('home/homepage', $data);
        $this->load->view('home/footer', $data);
    }

    public function myaccount() {
         $isLoggedIn = $this->session->userdata('user-login');
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            redirect('/user');
        }
        $data['title'] = 'FCC | MY Account';
        $data['menus'] = $this->currentMenus;
        $data['socials'] = $this->socials;
        $data['broadcasts'] = $this->broadcast_model->getCurrentBroadcast();
        $data['footer'] = $this->footer;
        $data['myorders'] = $this->order_model->getMyOrders();
        $coms = $this->communication_model->getMyCommunications();

        foreach ($coms as $comitem) {
            $comitem['com_user_from'] = $this->user_model->getUserInfoById($comitem['com_from'])[0];
            $comitem['com_user_to'] = $this->user_model->getUserInfoById($comitem['com_to'])[0];
            $data['mycoms'][] = $comitem;
        }

        $data['myaccount'] = $this->user_model->getUserInfoById($this->session->userdata('user-id'))[0];

        $this->load->view('home/header', $data);
        $this->load->view('home/myaccount', $data);
        $this->load->view('home/footer', $data);
    }

    public function seeauctions() {
        //  $isLoggedIn = $this->session->userdata('user-login');
        // if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        // {
        //     redirect('/user');
        // }
        $data['title'] = 'FCC | See Actions';
        $data['menus'] = $this->currentMenus;
        $data['socials'] = $this->socials;
        $data['action_list'] = $this->actionlist_model->getAllActionList();
        $data['broadcasts'] = $this->broadcast_model->getCurrentBroadcast();
        $data['footer'] = $this->footer;

        $this->load->view('home/header', $data);
        $this->load->view('home/seeactions', $data);
        $this->load->view('home/footer', $data);

       
        
    }

    public function logout(){
        $isLoggedIn = $this->session->userdata('user-login');
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            redirect('/user');
        }
        $this->session->unset_userdata('user-login');
        redirect('/');
    }

    public function contact_us(){
        $this->load->library('form_validation');    
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean|max_length[128]');
        $this->form_validation->set_rules('subject','Subject','required|max_length[50]');
        $this->form_validation->set_rules('message','Message','required|max_length[5000]');
        if($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('flushdata_error', 'Contact Us form validataion is not valied');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data['contact_email'] = $this->input->post('email');
            $data['contact_subject'] = $this->input->post('subject');
            $data['contact_msg'] = $this->input->post('message');
            $insert_id = $this->contactus_model->addNewContact($data);
            if($insert_id){
                $emailStatus = $this->email_model->sendEmail($data['contact_email']);
                
                $this->session->set_flashdata('flushdata_success', 'We will let you know shortly. '. $emailStatus);  
               
            } else {
                $this->session->set_flashdata('flushdata_error', 'Database Error! Please try again');
            }
            
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function b_action_add() {
        $action_id = $this->input->post('action_id');
        $action = $this->actionlist_model->getActionById($action_id);
        $action_counter = $action[0]->action_counter;
        $data['action_counter'] = 1 + $action_counter;
        $this->actionlist_model->updateActionById($action_id, $data);
        $return_data['action_counter'] = $data['action_counter'];
        echo json_encode($return_data);  
    }

    public function b_action_down() {
        $action_id = $this->input->post('action_id');
        $action = $this->actionlist_model->getActionById($action_id);
        $action_counter = $action[0]->action_counter;
        $data['action_counter'] = -1 + $action_counter;
        $this->actionlist_model->updateActionById($action_id, $data);
        $return_data['action_counter'] = $data['action_counter'];
        echo json_encode($return_data);  
    }

    public function b_save_firstname(){
        $data['first_name'] = $this->input->post('firstname');
        $this->user_model->updateCurrentUser($data);
    }

    public function b_save_lastname(){
        $data['last_name'] = $this->input->post('lastname');
        $this->user_model->updateCurrentUser($data);
    }

    public function b_save_email(){
        $data['email'] = $this->input->post('email');
        $this->user_model->updateCurrentUser($data);
    }

    public function b_save_username(){
        $data['name'] = $this->input->post('username');
        $this->user_model->updateCurrentUser($data);
    }

    public function b_save_phone(){
        $data['mobile'] = $this->input->post('phone');
        $this->user_model->updateCurrentUser($data);
    }
}

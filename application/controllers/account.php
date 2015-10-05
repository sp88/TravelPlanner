<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->model('model_account');
            $this->load->model('model_upload');
	}
    
    //load all available travel styles into modal window
//    public function load_travel_styles(){
//        $data['travelStyles'] = $this->model_account->load_travel_styles();
//        $this->load->view("travel_style_modal",$this->$data);
//    }
    
    public function load_left_navbar(){
    
        
    }

	public function myProfile() {
        $this->data['title'] = "My Profile";
        
        $profile_info = $this->model_account->load_profile_info();
        
	$this->data['fname'] = $profile_info->fname;
        $this->data['lname'] = $profile_info->lname;
        $this->data['country'] = $profile_info->country;
        $this->data['email'] = $profile_info->email;
        $this->data['about_me'] = $profile_info->about_me;
        $this->data['mobile'] = $profile_info->mobile;
        $this->data['prof_pic'] = $profile_info->profile_pic;
        
        
        $this->data['travelStyles'] = json_encode($this->model_account->load_travel_styles(),true); //for add more travel styles
        
        $this->data['selected_travelStyles'] = json_encode($this->model_account->load_selected_travel_styles(),true); 
        
		$this->load->view('view_profile',$this->data);
	}

	public function messages() {
		$this->data['title'] = "Message";
		$this->load->view('view_messages',$this->data);
	}
	
	public function calendar() {
		$this->data['title'] = "Calendar";
		$this->data['css'] = array('plugins/iCheck/custom.css','plugins/fullcalendar.css','plugins/fullcalendar.print.css');
		$this->load->view('view_calendar',$this->data);
	}
	
	public function myPlans() {
		$this->data['title'] = "My Plans";
		$this->load->view('view_myPlans',$this->data);
	}
    
    public function store_travel_styles(){
        $result =  $this->model_account->store_travel_styles();
        if($result){
            redirect('user/login','location');
        }
        else{
            echo "can not store data in db";
        }
        
        
    }
    
    public function upload_profile_pic(){
       $this->data['prof_pic_filename'] = $this->model_upload->do_upload();
//        $this->load->view('view_profile',$this->data);
    }
    
    

}
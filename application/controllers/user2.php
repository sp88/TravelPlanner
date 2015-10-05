<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('model_user');
        $this->load->model('model_account');
    }

    public function index() {
        
    }
    
    public function register(){
     	$this->data['title'] = "Register";
     	$this->data['css'] = array('awesome-bootstrap-checkbox.css');
        $this->data['travelStyles'] = json_encode($this->model_account->load_travel_styles(),true);
    	$this->load->view('view_register',$this->data);
    }
    
    public function register_user(){
    	
    	$result =  $this->model_user->register_user(); //call register_user() inside tha model
    	
    	if($result){
            echo "OK";
        }
        else{
            echo "NO";
        }
    	
    }
    
    public function email_exists(){
        $result =  $this->model_user->email_exists();
        if($result){
            echo "OK";
        }
        else{
            echo "NO";
        }
    }
    
    public function login(){
    	$this->data['title'] = "Login";
        $this -> load -> view('view_login',$this->data);
    }
    
    
    public function login_user(){
    	
    	$result =  $this->model_user->login_user(); //call login_user() inside tha model
    	
    	if($result){
//    		redirect('account/myprofile','location');
            echo "OK";
    	}
    	else{
//    		echo "Invalid Username or Password";
            echo "NO";
    	}
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('user/login','location');
    }
    

}
?>
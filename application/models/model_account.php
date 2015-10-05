<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Model_Account extends CI_Model {
    
    function __construct() {
        parent::__construct ();
        
    }
    
    //load the all available travel styles to the modal window
    public function load_travel_styles(){
        $result = $this->db->get("travel_styles");
        if($result->num_rows()>0){
            return $result->result();
        }
        return array();
    }
    
    //Store user selected travel styles from modal to the database
    public function store_travel_styles(){
//        session_start();
//        $registered_email = "lakinfu93@gmail.com";
        
        if($this->session->userdata('registered_email')!== false){
            $registered_email = $this->session->userdata('logged_user_email');  //take current loggedin use
        }
        else{
            $registered_email = $this->session->userdata('registered_email');  //take newly registerd use
        }
        
        $result =  $this->db->query("SELECT user_id FROM users WHERE email = '{$registered_email}'");
        
        $user_id = $result->row()->user_id;
        
        $selectedItems = array();
        
        if(isset($_POST['submit'])){
            if(!empty($_POST['check_list'])) {
                
                foreach($_POST['check_list'] as $selected) {
                    $this->db->query("INSERT INTO users_travel_styles VALUES('".$user_id."','".$selected."')");
                }
                
                unset($_SESSION['reg_email']); //discard the session
                return true;
            }
            else{
                return false;
            }
        }
    }
    
    
    //Load user selected travel styles to the profile
    public function load_selected_travel_styles(){
        $user_id = $this->session->userdata('user_id');
        
        $result =  $this->db->query("SELECT travel_styles.travel_style FROM users_travel_styles INNER JOIN travel_styles ON users_travel_styles.travel_style_id=travel_styles.travel_style_id WHERE users_travel_styles.user_id='{$user_id}'");
        
        if($result->num_rows()>0){
            return $result->result();
        }
        return array();
        
        //return $result->row();
        
    }
    
    //Load the user's profile info
    public function load_profile_info(){
    
        $user_id = $this->session->userdata('logged_user_id');
        
        $result =  $this->db->query("SELECT users.fname, users.lname, users.country, users.email, profile.profile_pic, profile.about_me, profile.mobile FROM users INNER JOIN profile ON users.user_id=profile.user_id WHERE users.user_id = '{$user_id}'");
        
        return $result->row();
    }
    
   

}
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
        
        if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['gender']) && !empty($_POST['country']) && !empty($_POST['email']) && !empty($_POST['password'])){
            
//            $user_id = uniqid(time().'_');
            $user_id = time();

            $fname = $this->db->escape($this->input->post('firstname'));
            $lname = $this->db->escape($this->input->post('lastname'));
            $gender = $this->db->escape($this->input->post('gender'));
            $country = $this->db->escape($this->input->post('country'));
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $sha_password = sha1($this->config->item('salt') . $password);

            $newUser_dataArray = array( 'user_id' => $user_id,
                                        'fname' => $fname,
                                        'lname' => $lname,
                                        'gender' => $gender,
                                        'country' => $country,
                                        'email' => $email,
                                        'password' => $sha_password );

            $result =  $this->model_user->register_user($user_id, $email, $newUser_dataArray);
            if($result){
                echo "true";
            }
            else{
                echo "false";
            }
            
        }
        else{
            echo "false";
        }
    }
    
    public function email_exists(){
        if(!empty($_POST['newUser_email'])){
            $user_email = $this->input->post('newUser_email');
            $result =  $this->model_user->email_exists($user_email); 
            if($result){
                echo "true";
            }
            else{
                echo "false";
            }
        }else{
            echo "false";
        }
    }
    
    public function login(){
    	$this->data['title'] = "Login";
        $this->load->view('view_login',$this->data);
    }
    
    public function login_user(){
        
        if(!empty($_POST['user_email']) && !empty($_POST['user_password'])){
            
            $user_email = $this->input->post('user_email');
            $user_password = $this->input->post('user_password');
            $hash_password = sha1( $this->config->item('salt') . $user_password );

            $loginUser_dataArray = array('email' => $user_email, 'password' => $hash_password);

            $result =  $this->model_user->login_user($loginUser_dataArray); 

            if(!empty($result)){
                $logged_user_session_data = array(
                                'logged_user_id' => $result->user_id,
                                'logged_user_fname' => $result->fname,
                                'logged_user_lname' => $result->lname,
                                'logged_user_email' => $result->email,
                                'logged_user_country' => $result->country,
                                'logged_in' => 1
                );
                $this->session->set_userdata($logged_user_session_data);
                echo "true";
            }
            else{
                echo "false";
            }
        }
        else{
            echo "false";
        }
        
    }
    
    //login_redirect_url created in destination controller
    public function chk_loginRedirectUrl(){
        session_start();
        if(isset($_SESSION["login_redirect_url"])){
            echo $_SESSION["login_redirect_url"];
            unset($_SESSION["login_redirect_url"]);

        }
        else{
            echo "false";
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
//        $this->session->unset_userdata('logged_user_email');
//        $this->session->unset_userdata('logged_in');
        redirect('user/login','location');
    }

}
?>
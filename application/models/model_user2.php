<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Model_User extends CI_Model {
    
    function __construct() {
            parent::__construct ();
    }
    
    public function register_user() {
        $user_id = uniqid(time().'_');

        $fname = $this->input->post('firstname');
        $lname = $this->input->post('lastname');
        $gender = $this->input->post('gender');
        $country = $this->input->post('country');
        $email = $this->input->post('email');
        $password = sha1($this->config->item('salt') . $this->input->post('password'));

        $sql_for_users = "INSERT INTO users (user_id,fname,lname,gender,country,email,password) VALUES ('".$user_id."',".$this->db->escape($fname).",".$this->db->escape($lname).",".$this->db->escape($gender).",".$this->db->escape($country).",'".$email."','".$password."')";
        $result = $this->db->query($sql_for_users);

        if($this->db->affected_rows() == 1) {
            $sql_for_profile = "INSERT INTO profile (user_id) VALUES ('".$user_id."')";
            $result = $this->db->query($sql_for_profile);

            if($this->db->affected_rows() == 1){
                session_start();
                $_SESSION['reg_email'] = $email; //get the registered email
                return true;
            }
            return false;
        } 
    }
    
    public function email_exists(){
        $this->db->where('email',$_POST['email']);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function login_user() {
        $email = $this->input->post('email');
        // $password = $this->input->post('password');

        $password = sha1( $this->config->item('salt') . $this->input->post('password') );
        $sql = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
        $result = $this->db->query($sql);
        $row = $result->row();

        if ($result->num_rows() === 1) {
            $session_data = array(
                            'user_id' => $row->user_id,
                            'fname' => $row->fname,
                            'lname' => $row->lname,
                            'email' => $row->email,
                            'country' => $row->country
            );
            $this->set_session($session_data);
            return true;
        }
        else{
            return false;
        }
    }
	
    private function set_session($session_data){
        $sess_data = array (
        'user_id' => $session_data['user_id'],
                        'fname' => $session_data['fname'],
                        'lname' => $session_data['lname'],
                        'email' => $session_data['email'],
                        'country' => $session_data['country'],
                        'logged_in' => 1
        );
        $this->session->set_userdata($sess_data);
    }
}

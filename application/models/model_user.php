<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Model_User extends CI_Model {
    
    function __construct() {
        parent::__construct ();
    }
    
    public function register_user($newUser_id, $newUser_email, $newUser_DataArray) {
        $this->db->insert('users', $newUser_DataArray);
        
        if($this->db->affected_rows() > 0) {
            $this->db->insert('profile', array('user_id' => $newUser_id));

            if($this->db->affected_rows() > 0){
                $this->session->set_userdata(array('registered_email' => $newUser_email));
                return true;
            }else{
                return false;
            }
            
        }else{
            return false;
        }
    }
    
    public function email_exists($user_email){
        $this->db->where('email',$user_email);
        $query = $this->db->get('users');
        return ($query->num_rows() > 0) ? true : false;
    }
    
    public function login_user($where_array) {
        $this->db->where($where_array);
        $query = $this->db->get('users');
        return ($query->num_rows() > 0) ? $query->row() : false;     
    }
	
    
}

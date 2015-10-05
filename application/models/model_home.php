<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Model_Home extends CI_Model {
    
	function __construct() {
		parent::__construct ();    
	}
    
    public function get_homeLocation(){
        
        
        $markerId = $_GET['markerId'];
//        $markerId = $this->input->post('markerId');
//        $markerId = "M01";
        
        $result =  $this->db->query("SELECT * FROM home_locations WHERE marker_id='{$markerId}'");
        
        if($result->num_rows()>0){
            return $result->result();
        }
        return array();
        
    }
    
}
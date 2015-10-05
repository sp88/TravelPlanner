<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Transport extends CI_Controller {
    
    public function __construct() {
		parent::__construct();
	}
    
    public function index(){
        $this->data['title'] = "Transport";
        
        $this->load->view('view_transport',$this->data);
    }
    
  
    
}
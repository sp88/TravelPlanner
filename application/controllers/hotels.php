<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Hotels extends CI_Controller {
    
    public function __construct() {
		parent::__construct();
	}
    
    public function index(){
        $this->data['title'] = "Hotels";
        
        $this->load->view('view_hotels',$this->data);
    }
    
  
    
}
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Plan_Summary extends CI_Controller {
    
    public function __construct() {
		parent::__construct();
	}
    
    public function index(){
        $this->data['title'] = "Plan Summary";
        
        $this->load->view('view_planSummary',$this->data);
    }
    
  
    
}
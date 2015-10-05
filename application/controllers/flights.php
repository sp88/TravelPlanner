<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Flights extends CI_Controller {
    
    public function __construct() {
		parent::__construct();
	}
    
    public function index(){
        $this->data['title'] = "Flights";
        
        $this->load->view('view_flights',$this->data);
    }
    
  
    
}
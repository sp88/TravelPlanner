<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tour_Packages extends CI_Controller {
    
    public function __construct() {
		parent::__construct();
	}
    
    public function index(){
        $this->data['title'] = "Tour Packages";
        $this->load->view('view_tour_packages',$this->data);
    }
    
    public function culture_heritage(){
        $this->data['title'] = "Sri Lankan Culture & Heritage Tour Package";
        $this->load->view('packages/view_culture_heritage',$this->data);
    }
    
    public function classic_sri_lanka(){
        $this->data['title'] = "Classic Sri Lanka Tour Package";
        $this->load->view('packages/view_classic_srilanka',$this->data);
    }
    
    public function ceylon_tea_trails(){
        $this->data['title'] = "Ceylon Tea Trails Tour Package";
        $this->load->view('packages/view_ceylon_tea_trails',$this->data);
    }
    
    public function explore_srilanka(){
        $this->data['title'] = "Explore Sri Lanka Tour Package";
        $this->load->view('packages/view_explore_srilanka',$this->data);
    }
    
}
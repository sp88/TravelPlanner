<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('model_user');
        $this->load->model('model_account');
        $this->load->model('model_home');
    }

    public function index() {
        $this->data['title'] = "Home";
        $this->data['travelStyles'] = json_encode($this->model_account->load_travel_styles(), true);
        $this->load->view('view_home', $this->data);
    }

    //[WORKING]
    //Collecting user preference to session
    public function collect_user_pref() {
        session_start();

        $_SESSION["from_date"] = $this->input->get('sel_from_date');
        $_SESSION["to_date"] = $this->input->get('sel_to_date');
        $from = date_create($_SESSION["from_date"]);
        $to = date_create($_SESSION["to_date"]);
        $diff = date_diff($to, $from);
        $_SESSION["no_of_days"] = $diff->format('%a');
        
        $destTypes = $this->input->get('sel_destTypes');
        $destActivities = $this->input->get('sel_destActivities');
        
        $destPreference = array('destinations' => $destTypes, 'activities' => $destActivities);

        $_SESSION['destPreferences'] = json_encode($destPreference);

//        unset($_SESSION['from_date']);
//        $_SESSION["from_date"] = $_GET['from_date'];
//        $_SESSION["to_date"] = $_GET['to_date'];
//        $_SESSION["no_of_adults"] = $_GET['no_of_adults'];
//        $_SESSION["no_of_children"] = $_GET['no_of_children'];
//        $_SESSION["from_date"] = "adow";
//        return true;
    }

    public function readSession(){
        
        session_start();
        
        $destPreference = array('destinations' => array('Waterfall','Beach','Historical Site','Religious Site','Mountain','Forest','Restaurants','Parks','Gardens'),
				'activities' => array('Shopping','Nature & Wildlife Tours','Dolphin & Whale Watching','Surfing','Diving','Windsurfing','Windsurfing','Kite surfing','Boat Rides','Hiking','Camping Tour','Balloon ride','Spa','Climbing','Plane Rides','Swimming','Bird Watching'));

        print_r($_SESSION['destPreferences']);	                                
        
        
        
    }

}

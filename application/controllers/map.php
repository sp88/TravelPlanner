<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Map extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['title'] = "Map View";

        $this->load->view('view_mapView', $this->data);
    }

    //get First and Last attractions from the attraction wishlist
    public function get_FirstLastAttr() {
        session_start();
        if (!empty($_GET['sess_id'])) {
            $sess_id = $this->input->get('sess_id');
            if (!empty($_SESSION[$sess_id])) {

                $arr = $_SESSION[$sess_id];

                $count = 0;
                $ret = array('first' => '', 'last' => '');
                foreach ($arr as $key) {
                    if ($count == 0) {
                        $ret['first'] = $key;
                    }
                    if ($count == count($arr) - 1) {
                        $ret['last'] = $key;
                    }
                    $count++;
                }
                echo json_encode($ret);
            } else {
                echo "No Session Data";
            }
        } else {
            echo "false";
        }
    }

    //get middle elements in attraction wishlist
    public function get_middleElements() {
        session_start();
        if (!empty($_GET['sess_id'])) {
            $sess_id = $this->input->get('sess_id');
            if (!empty($_SESSION[$sess_id])) {

                $arr = $_SESSION[$sess_id];

                $count = 0;
                $ret = array('first' => '', 'last' => '');
                foreach ($arr as $key) {
                    if ($count == 0) {
                        $ret['first'] = $key;
                    }
                    if ($count == count($arr) - 1) {
                        $ret['last'] = $key;
                    }
                    $count++;
                }
                $firstElement = $ret['first']['attr_id'];
                $lastElement = $ret['last']['attr_id'];

                $tempArray = $_SESSION[$sess_id];

                unset($tempArray[$firstElement]);
                unset($tempArray[$lastElement]);
                echo json_encode($tempArray);
            } else {
                echo "No Session Data";
            }
        } else {
            echo "false";
        }
    }

}

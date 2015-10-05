<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ratings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('model_ratings');
    }
    
    public function set_rating(){
        if(!empty($_POST['selected_attr_id']) && !empty($_POST['user_rating'])){
            if($this->session->userdata('logged_user_email') && $this->session->userdata('logged_in')){ //or check facebook session
            
                $user_id =$this->session->userdata('logged_user_id');    
                $rating_id = 'R'.time();
                $selected_attr_id = $this->input->post('selected_attr_id');
                $user_ip = $this->get_userIPAddress();
                $user_rating = $this->input->post('user_rating');

                if($this->model_ratings->check_user_rated($user_id) && $this->model_ratings->attrId_exist($selected_attr_id, $user_id)){ //update existing Rating
                    $toUpdate_array = array('rating' => $user_rating, 'user_ip' => $user_ip);
                    $res = $this->model_ratings->update_rating($selected_attr_id, $user_id, $toUpdate_array);
                    echo "UPDATED ".$res;
                }
                else{ //insert new Rating
                    $rating_data_array = array('attr_rating_id' => $rating_id,
                                           'fk_attr_id' => $selected_attr_id,
                                           'fk_user_id' => $user_id,
                                           'user_ip' => $user_ip,
                                           'rating' => $user_rating);

                    $result = $this->model_ratings->set_rating($rating_data_array);
                    echo "INSERTED ".$result;
                }
            }
            else{
                echo "NO_SESSION";
            }
        }
        else{
            echo "false";
        }
    }

    public function get_userSpecificRating(){
        if(!empty($_GET['attr_id'])){
            if($this->session->userdata('logged_user_id') && $this->session->userdata('logged_in')){
                $attrId = $this->input->get('attr_id');
                $userId = $this->session->userdata('logged_user_id');
                $where_array = array('fk_attr_id' => $attrId, 'fk_user_id' => $userId);
                $result = $this->model_ratings->get_userSpecificRating($where_array);
                if($result){
                    echo $result;
                }
                else{
                    echo 0.0;
                }
            }
        }
        else{
            echo "false";
        }
    }
    
    
    public function get_totalAvgRating(){
        if(!empty($_GET['attr_id'])){
            $attrId = $this->input->get('attr_id');
            $result = $this->model_ratings->get_totalAvgRating($attrId);
            if($result){
                echo number_format($result->totalAvgRating, 1).':'.$result->totalHits;
            }
            else{
                echo 0.0;
            }
        }else{
            echo "false";
        }
    }
    
    
    public function get_ratingAsPercentage(){
        if(!empty($_GET['attr_id'])){
           $attrId = $this->input->get('attr_id');
            $result = $this->model_ratings->get_percentage($attrId);
            if($result){
                echo json_encode($result);
            }
            else{
                echo "false";
            }
        }
        else{
            echo "false";
        }
    }
    
    
    public function check_loggedinUserId(){
        if($this->session->userdata('logged_user_id') && $this->session->userdata('logged_in')){
            echo $this->session->userdata('logged_user_id');
        }
        else{
            echo "false";
        }
    } 
    
    private function get_userIPAddress() {  
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP')) {
            $ipaddress = getenv('HTTP_CLIENT_IP');
        } else if (getenv('HTTP_X_FORWARDED_FOR')) {
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        } else if (getenv('HTTP_X_FORWARDED')) {
            $ipaddress = getenv('HTTP_X_FORWARDED');
        } else if (getenv('HTTP_FORWARDED_FOR')) {
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        } else if (getenv('HTTP_FORWARDED')) {
            $ipaddress = getenv('HTTP_FORWARDED');
        } else if (getenv('REMOTE_ADDR')) {
            $ipaddress = getenv('REMOTE_ADDR');
        } else {
            $ipaddress = 'UNKNOWN';
        }
        return $ipaddress;
    }
    
}
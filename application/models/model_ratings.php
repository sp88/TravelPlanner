<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_Ratings extends CI_Model {

    public function __construct() {
        parent::__construct();           
    }
    
    //Get Total Number of Ratings for Specified Attractions
    public function get_allAttrRatingsCount($attraction_id){
        return $this->db->where('fk_attr_id',$attraction_id)->count_all_results('attraction_ratings');
    }
    
    //Check User Already Rated or not
    public function check_user_rated($user_id){
        $this->db->where('fk_user_id',$user_id);
        $query = $this->db->get('attraction_ratings');
        return ($query->num_rows() > 0) ? true : false;
    }
    
    //Check attr Id already exist
    public function attrId_exist($selected_attrId, $userId){
        $where_array = array('fk_attr_id' => $selected_attrId, 'fk_user_id' => $userId);
        $this->db->where($where_array);
        $query = $this->db->get('attraction_ratings');
        return ($query->num_rows() > 0) ? true : false;
    }
    
    //Insert Ratings
    public function set_rating($tbl_data_array){
        $this->db->insert('attraction_ratings', $tbl_data_array);
        return ($this->db->affected_rows() > 0) ? true : false;
    }
    
    //Update Ratings
    public function update_rating($attraction_id, $user_id, $toUpdate_array){
        $where_array = array('fk_attr_id' => $attraction_id, 'fk_user_id' => $user_id);
        
        $this->db->where($where_array);
        $this->db->update('attraction_ratings', $toUpdate_array);
        return ($this->db->affected_rows() > 0) ? true : false;
    }
    
    //get user_id by email
//    public function get_userId($user_email){
//        $this->db->select('user_id');
//        $this->db->from('users');
//        $this->db->where('email', $user_email);
//        return $this->db->get()->row()->user_id;
//    }
    
    //get Average Ratings and Total Hits for Specific Attraction 
    public function get_totalAvgRating($attraction_id){
        $this->db->select('AVG(rating) AS totalAvgRating, COUNT(*) AS totalHits');
        $this->db->from('attraction_ratings');
        $this->db->where('fk_attr_id', $attraction_id);
        $result = $this->db->get()->row();
        return ($this->db->affected_rows() > 0) ? $result : false;
    }
    
    //get Ratings for specific Attraction by Specific User
    public function get_userSpecificRating($where_dataArray){
        $this->db->where($where_dataArray);
        $result = $this->db->get('attraction_ratings')->row()->rating;
        return ($this->db->affected_rows() > 0) ? $result : false;
    }
    
    //Get Percentage value for each Rating in Specific Attraction
    public function  get_percentage($attr_id){
        $sql_query = "SELECT rating, COUNT(fk_attr_id) AS hitsByRating, concat(round(COUNT(fk_attr_id)*100/(SELECT COUNT(*) FROM attraction_ratings WHERE fk_attr_id = '{$attr_id}'),2),'%') AS percentage FROM `attraction_ratings` WHERE fk_attr_id = '{$attr_id}' GROUP BY rating";
        $result = $this->db->query($sql_query);
        return ($result->num_rows() > 0) ? $result->result() : false;
    } 
    
}
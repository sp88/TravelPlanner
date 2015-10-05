<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Destinations extends CI_Model {

    //following two variables for pagination
    public $limit;
    public $offset;

    function __construct() {
        parent::__construct();
    }

    //Get all destinations from destinations table
    public function get_allDestinations() {
        $query = $this->db->limit($this->limit, $this->offset)
                ->get('destinations');
        return $query->result_array();
    }

    //get all destinations from destinations table by name
    public function get_allDestinationsByName($destname_array) {

        $result = $this->db->query("SELECT * FROM destinations WHERE dest_name IN ({$destname_array}) ORDER BY FIELD(dest_name, {$destname_array}) LIMIT {$this->limit} OFFSET 0 ");
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

    public function loadMoreDestinations($query) {
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

    //get specific destination according to given keyword (for search)
    public function get_specificDestination($destname) {
        $query = $this->db->select('*')
                ->from('destinations')
                ->like('dest_name', $destname)
                ->get('', $this->limit, $this->offset);
        return $query->result_array();
    }

    //Get the total number of destinations
    public function totalDestCount() {
        $result = $this->db->from('destinations');
        return $result->count_all_results();
    }

    //get the record count with mached description
    public function searchedDestCount($destname) {
        $result = $this->db->like('dest_name', $destname)
                ->from('destinations')
                ->count_all_results();
        return $result;
    }

    //Get Destination info By dest_id
    public function get_destinationInfo($dest_Id) {
        $result = $this->db->query("SELECT * FROM destinations WHERE dest_id='{$dest_Id}'");
        if ($result->num_rows() > 0) {
            return $result->result();
        }
        return array();
    }

    //Get Destination info By wiki_name 
    public function get_destinationInfoBy_WikiName($wiki_name) {
        $result = $this->db->query("SELECT dest_id,dest_name,province,dest_lat,dest_lng FROM destinations WHERE wiki_name='{$wiki_name}'");
        if ($result->num_rows() > 0) {
            return $result->result();
        }
        return array();
    }

    public function get_randomAttrInfo($dest_Id, $limit) {
        $result = $this->db->query("SELECT * FROM attractions WHERE fk_dest_id = '{$dest_Id}' ORDER BY RAND() LIMIT {$limit}");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function get_thingsToDo() {
        $result = $this->db->query("SELECT things_todo FROM things_todo");
        if ($result->num_rows() > 0) {
            return $result->result();
        }
    }

    public function get_RecommendedAttr($rec_attrList) {
        $result = $this->db->query("SELECT attr_id, attr_name, attr_image, province, ROUND(AVG(rating)) AS avg_rating FROM attractions attr INNER JOIN destinations dest ON dest.dest_id=attr.fk_dest_id INNER JOIN attraction_ratings attr_r ON attr.attr_id=attr_r.fk_attr_id WHERE attr_id IN ({$rec_attrList}) GROUP BY (attr_r.fk_attr_id) ORDER BY FIELD(attr_id, {$rec_attrList})");
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

    public function get_popularAttr($dest_wiki_name) {
        $result = $this->db->query("SELECT attr_id, attr_name, attr_image, province, ROUND(AVG(rating)) AS avg_rating FROM attractions attr INNER JOIN destinations dest ON dest.dest_id=attr.fk_dest_id INNER JOIN attraction_ratings attr_r ON attr.attr_id=attr_r.fk_attr_id WHERE dest.wiki_name = '{$dest_wiki_name}' GROUP BY (attr_r.fk_attr_id) ORDER BY avg_rating DESC LIMIT 6");
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

    //insert destination reviews
    public function insert_destReviews($review_dataArray) {
        $this->db->insert('destination_reviews', $review_dataArray);
        return ($this->db->affected_rows() > 0) ? true : false;
    }
    
    //update destination reviews
    public function update_destReview($where_array, $toUpdate_array){
        $this->db->where($where_array);
        $this->db->update('destination_reviews', $toUpdate_array);
        return ($this->db->affected_rows() > 0) ? true : false;
    }
    
    //check user already reviewed or not a particular destination
    public function check_destReviews($dest_id, $user_id){
        $where_array = array('fk_dest_id' => $dest_id, 'fk_user_id' => $user_id);
        $this->db->where($where_array);
        $query = $this->db->get('destination_reviews');
        return ($query->num_rows() > 0) ? true : false;
    }
    
    //get reviews in particular destination
    public function get_destReviews($dest_id){
        $result = $this->db->query("SELECT name, review, ratings, profile_pic FROM destination_reviews dest_r INNER JOIN profile prof ON prof.user_id=dest_r.fk_user_id WHERE fk_dest_id = '{$dest_id}'");
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
        else{
            return false;
        }
    }

}

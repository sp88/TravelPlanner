<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Model_Attractions extends CI_Model {

    function __construct() {
	parent::__construct();
    }
    
    //Get all attractions in a specific Destination
    public function get_attrInSpesificDest($destId){
        $this->db->where('fk_dest_id',$destId);
        $query = $this->db->get('attractions');
        return ($query->num_rows() > 0) ? $query->result_array() : false;
    }
    
    //Filter attractions in a specific Destination according to givent type
    public function filter_attrInSpesificDest($destId, $attr_type){
        $result =  $this->db->query("SELECT DISTINCT attr.attr_id, attr.attr_name, attr.attr_image FROM `attractions` attr INNER JOIN attraction_intypes intypes ON attr.attr_id = intypes.fk_attr_id INNER JOIN attraction_types_cat cat ON cat.fk_attr_type_id = intypes.fk_attr_type_id WHERE attr.fk_dest_id = '{$destId}' AND cat.category = '{$attr_type}'");
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }
    
    //Get Specific Attraction Info 
    public function get_attractionInfo($attrId){
        $this->db->where('attr_id',$attrId);
        $query = $this->db->get('attractions');
        return ($query->num_rows() > 0) ? $query->result() : false;
    }
    
    //Get wiki name for given attraction id 
    public function get_attrWikiName($attrId){
        $this->db->where('attr_id',$attrId);
        $query = $this->db->get('attractions');
        return ($query->num_rows() > 0) ? $query->row()->wiki_name : false;
    }
    
    
    //Get Resturants in specific destination
    public function get_restInSpecificDest($destId){
        $this->db->where('fk_dest_id',$destId);
        $query = $this->db->get('restaurants');
        return ($query->num_rows() > 0) ? $query->result_array() : false;
    }
    
    
    
}
<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Model_Upload extends CI_Model {
    
    function __construct() {
		parent::__construct ();
        
	}

    /*Check image extention*/
    public function getExtension($str){

        $i = strrpos($str,".");
        if(!$i) { return ""; }

        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
    }
    
    
    public function do_upload(){
        
        $user_id = $this->session->userdata['user_id'];
        $second_part_of_uid = explode("_", $user_id);
        
        $valid_formats = array(
            "jpg",
            "png",
            "gif",
            "bmp",
            "jpeg",
            "PNG",
            "JPG",
            "JPEG",
            "GIF",
            "BMP" 
        );
        
        if(isset($_POST)){
            
	       $name = $_FILES['photoimg']['name'];
	       $size = $_FILES['photoimg']['size'];
	
            if(strlen($name)){
                $ext = $this->getExtension($name);
                if(in_array($ext, $valid_formats)){
                    if ($size < (1024 * 1024)) {

                        $actual_image_name = time() ."_".$second_part_of_uid[1]."_p". "." . $ext;
                        $tmp = $_FILES['photoimg']['tmp_name'];


                        if (move_uploaded_file( $tmp, "./img/uploads/" . $actual_image_name )) {
                            //echo "Sucessfully moved";
                            $res = $this->update_profile_pic($user_id, $actual_image_name );
                            if ($res){
                                //echo "Sucessfully update db";
                                echo '<img src="http://localhost/TravelPlanner/img/uploads/'.$actual_image_name.'" />';
//                                return $actual_image_name;
                            }
                                    
                        } else
                            echo "Fail upload folder with read access.";
                    } else
                        echo "Image file size max 1 MB";
                } else
                    echo "Invalid file format.";
            } else
                echo "Please select image..!";

            
        }
    }
    
    
    /* Background Image Update */
    public function update_profile_pic($user_id, $actual_image_name) {
        $query = $this->db->query("UPDATE profile SET profile_pic ='$actual_image_name' WHERE user_id='$user_id'");
//        $query = mysqli_query( $this->db, "UPDATE profile SET profile_pic ='$actual_image_name' WHERE user_id='$user_id'" ) or die ( mysqli_error ( $this->db ) );
        return $query;
    }
    
    public function upload_profile_pic(){
        
        $path = $_SERVER['DOCUMENT_ROOT']."/TravelPlanner/img/uploads/" ;
        
        $valid_formats = array(
            "jpg",
            "png",
            "gif",
            "bmp",
            "jpeg",
            "PNG",
            "JPG",
            "JPEG",
            "GIF",
            "BMP" 
        );
        
//        session_start();
        
        
        
//        $user_id = $_SESSION['user_id'];
        $user_id = $this->session->userdata['logged_in']['user_id'];
        $second_part_of_uid = explode("_", $user_id);
        
        if(isset($_POST)){
            
	       $name = $_FILES['photoimg']['name'];
	       $size = $_FILES['photoimg']['size'];
	
            if(strlen($name)){
                $ext = $this->getExtension($name);
                if(in_array($ext, $valid_formats)){
                    if ($size < (1024 * 1024)) {

                        $actual_image_name = time() ."_"."5529585b89b13"."_p". "." . $ext;
                        $tmp = $_FILES['photoimg']['tmp_name'];

                        $bgSave = '<div id="uX' . "5529585b89b13" . '" class="bgSave wallbutton blackButton">Save Cover</div>';

                        if (move_uploaded_file( $tmp, $path . $actual_image_name )) {
                            $data = $this->update_profile_pic($user_id, $actual_image_name );
                            if ($data){
                                echo $bgSave . '<img src="' . $path . $actual_image_name . '"  id="timelineBGload" class="headerimage ui-corner-all" style="top:0px"/>';
                            }
                                
                        } else
                            echo "Fail upload folder with read access.";
                    } else
                        echo "Image file size max 1 MB";
                } else
                    echo "Invalid file format.";
            } else
                echo "Please select image..!";

            exit ();
        }
        
    }
}
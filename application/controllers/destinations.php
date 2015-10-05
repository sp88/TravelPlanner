<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Destinations extends CI_Controller {

    private $pagesize = 6;

    public function __construct() {
        parent::__construct();
        $this->load->model('model_destinations');
        $this->load->model('model_attractions');
    }

    //[WORKING]
    public function index() {

        $this->model_destinations->limit = 5;
        $this->model_destinations->offset = $this->uri->segment(3);

        $this->data['title'] = "Destinations";
        $this->load->view('view_destinations', $this->data);
    }

    //[WORKING]
    //Get Recommended Attractions
    public function get_recommendedAttr() {

        if (!empty($_GET['dest_id'])) {

            if ($this->session->userdata('logged_user_id') && $this->session->userdata('logged_in')) {

                $dest_id = $this->input->get('dest_id');
                $user_id = $this->session->userdata('logged_user_id');

                //set up the curl resource
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "http://52.26.228.148:8080/Mahout_WebService/webresources/service/rec_attractions?user_id=$user_id&dest_id=$dest_id");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HEADER, false);

                // execute the request
                $output = curl_exec($ch);
                // output the profile information
                $rec_attrList = $output;
                // close curl resource to free up system resources
                curl_close($ch);

                if ($rec_attrList == "No Recommendations") {
                    echo "No Recommendations";
                } else {
                    $result = $this->model_destinations->get_RecommendedAttr($rec_attrList);

                    foreach ($result as $row) {

                        echo '<div class="item">
                                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                                    <div class="thumbnail-img">
                                        <div class="overflow-hidden">
                                            <img class="img-responsive" src="' . base_url('img/attractions') . '/' . $row["attr_image"] . '" alt="">
                                        </div>
                                        <a class="btn-more hover-effect" href="#">+ Add to Map</a>					
                                    </div>
                                    <div class="caption">
                                        <h3><a class="hover-effect" href="#">' . $row["attr_name"] . '</a></h3>
                                        <i><i class="fa fa-map-marker"></i> ' . $row["province"] . '</i>
                                        <div class="recAttr_stars" data-rating="' . $row["avg_rating"] . '"></div>
                                    </div>
                                </div>
                            </div>';
                    }

//                    print_r($result);
                }
            } else {
                echo "NO USER";
            }
        }
    }

    //[WORKING]
    //User Login button click (Login redirection)
    public function loginRedirection() {
        session_start();
        $_SESSION["login_redirect_url"] = $_SERVER['HTTP_REFERER'];
    }

    //[WORKING]
    //Get most popular 6 attractions according to ratings
    public function get_popularAttr() {

        if (!empty($_GET['dest_wiki_name'])) {
            $dest_wiki_name = $this->input->get('dest_wiki_name');

            $result = $this->model_destinations->get_popularAttr($dest_wiki_name);

            foreach ($result as $row) {

                echo '<li class="post-item">
                        <div class="place-wrapper">

                            <a href="#" class="img-place">
                                <img src="' . base_url('img/attractions') . '/' . $row["attr_image"] . '" alt="">
                            </a>
                            <div class="place-detail-wrapper">
                                <h2 class="title-place" title="' . $row["attr_name"] . '"><a href="#">' . $row["attr_name"] . '</a></h2>
                                <span class="address-place"><i class="fa fa-map-marker"></i> ' . $row["province"] . '</span>
                                <div class="rate-tDest" data-score="">
                                    <div class="popularAttr_stars" data-rating="' . $row["avg_rating"] . '"></div>
                                </div>
                            </div>
                        </div>
                    </li>';
            }
        }
    }

    //[WORKING]
    public function get_nearbyRest() {
        if (!empty($_GET['dest_id'])) {
            $dest_id = $this->input->get('dest_id');

            $result = $this->model_attractions->get_restInSpecificDest($dest_id);

            foreach ($result as $row) {

                echo '<div class="item">
                        <a href="#">
                            <em class="overflow-hidden">
                                <img class="img-responsive" src="' . base_url('img/restaurants') . '/' . $row["res_image"] . '" alt="">
                            </em>
                            <span>
                                <strong>' . $row["res_name"] . '</strong>
                                <i><i class="fa fa-map-marker"></i> ' . $row["res_address"] . '</i>
                                <div class="readOnly"></div>
                            </span>
                        </a>
                    </div>';
            }
        }
    }

    //[WORKING]
    public function checkUserAvailability() {
//        session_start();
        if ($this->session->userdata('logged_user_id') && $this->session->userdata('logged_in')) {
            echo "true";
        } else {
            echo "false";
        }
    }

    //[WORKING]
    public function submitReview() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $review = $this->input->post('review');
        $ratings = $this->input->post('ratings');
        $dest_id = $this->input->post('dest_id');
        $user_id = $this->session->userdata('logged_user_id');

        $review_dataArray = array('fk_dest_id' => $dest_id,
            'fk_user_id' => $user_id,
            'name' => $name,
            'email' => $email,
            'review' => $review,
            'ratings' => $ratings);

        if ($this->model_destinations->check_destReviews($dest_id, $user_id)) {
            $toUpdate_array = array('review' => $review, 'ratings' => $ratings);
            $where_array = array('fk_dest_id' => $dest_id, 'fk_user_id' => $user_id);
            $result = $this->model_destinations->update_destReview($where_array, $toUpdate_array);
        } else {
            $result = $this->model_destinations->insert_destReviews($review_dataArray);
        }

        if ($result) {
            echo "true";
        } else {
            echo "false";
        }
    }

    //[WORKING]
    public function load_destReviews() {

        if (!empty($_GET['dest_id'])) {
            $dest_id = $this->input->get('dest_id');

            $result = $this->model_destinations->get_destReviews($dest_id);

            if ($result) {
                foreach ($result as $row) {

                    echo '<div class="item">
                        <p>' . $row["review"] . '</p>
                        <div class="testimonial-info">
                            <img class="testimonials_user_img" alt="" src="' . base_url('img/uploads') . '/' . $row["profile_pic"] . '">
                            <span class="testimonial-author">
                                ' . $row["name"] . ' 
                                <div class="user_stars" data-rating="' . $row["ratings"] . '"></div>
                            </span>
                        </div>
                    </div>';
                }
            }
            else{
                echo "NO Reviews";
            }
        }
    }

    //[WORKING]
    //Get wikipedia abctract for destinations
    public function get_wikiAbstract() {

        if (!empty($_GET['dest_wikiName'])) {

            $dest_wikiName = $this->input->get('dest_wikiName');

            $format = 'json';

            $query = "PREFIX dbr: <http://dbpedia.org/resource/>
            PREFIX dbo: <http://dbpedia.org/ontology/>
            SELECT ?abstract
            WHERE {
               dbr:" . $dest_wikiName . " dbo:abstract ?abstract . 
               FILTER langMatches(lang(?abstract), 'en')
            }";

            $searchUrl = 'http://dbpedia.org/sparql?'
                    . 'query=' . urlencode($query)
                    . '&format=' . $format;

            if (!function_exists('curl_init')) {
                die('CURL is not installed!');
            }
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $searchUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $responseArray = json_decode(curl_exec($ch), TRUE);
            curl_close($ch);

            echo $responseArray["results"]["bindings"][0]["abstract"]["value"];
        } else {
            echo "false";
        }
    }

    //[WORKING]
    public function destination_info() {
        $this->data['title'] = "Destinations Info";
        $this->load->view('view_destination_info', $this->data);
    }

    //[WORKING]
    public function search_destinations() {
        if (isset($_POST['destName']) && $_POST['destName'] != NULL) {
            $destname = $_POST['destName'];
        } else {
            $destname = '';
        }
        if (isset($_POST['pageNumber']) && $_POST['pageNumber'] != NULL) {
            $idoffset = $_POST['pageNumber'] - 1;
        } else {
            $idoffset = 0;
        }

        //Temporory create user preference array
//        $userPreference = array('destinations' => array('Waterfall', 'Beach', 'Historical Site', 'Religious Site', 'Mountain', 'Forest', 'Restaurants', 'Parks', 'Gardens'),
//            'activities' => array('Shopping', 'Nature & Wildlife Tours', 'Dolphin & Whale Watching', 'Surfing', 'Diving', 'Windsurfing', 'Windsurfing', 'Kite surfing', 'Boat Rides', 'Hiking', 'Camping Tour', 'Balloon ride', 'Spa', 'Climbing', 'Plane Rides', 'Swimming', 'Bird Watching'));
//        $userPref_jsonArray = json_encode($userPreference);
        session_start();

        $userPref_jsonArray = $_SESSION['destPreferences'];

        // set up the curl resource
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://52.26.228.148:8080/S-Match-Web-Application/webresources/service");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $userPref_jsonArray);
        curl_setopt($ch, CURLOPT_HEADER, false); //remove header content from body output
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($userPref_jsonArray)
        ));

        // execute the request
        $output = curl_exec($ch);
        // output the profile information - includes the header
        //echo($output) . PHP_EOL;
        // close curl resource to free up system resources
        curl_close($ch);


        //Set Smatch response array into session
        $send_response_array = array('response_array' => $output);
        $this->session->set_userdata($send_response_array);

        $this->model_destinations->limit = $this->pagesize;
        $this->model_destinations->offset = $idoffset * $this->pagesize;



        $result['offset'] = $this->model_destinations->offset;
        $result['rec'] = $this->model_destinations->totalDestCount();
        $result['query'] = $this->model_destinations->get_allDestinationsByName($output);

        $this->load->view('view_destinations_page', $result);
    }

    //[WORKING]
    public function loadMoreDestinations() {

        //Access Smatch response array from session
        $response_array = $this->session->userdata('response_array');

        $resultsPerPage = 6;

        if (isset($_POST['page'])) {

            $paged = $_POST['page'];
            $main_sql = "SELECT * FROM destinations ORDER BY FIELD(dest_name, {$response_array})";
            if ($paged > 0) {
                $page_limit = $resultsPerPage * ($paged - 1);
                $pagination_sql = " LIMIT  $page_limit, $resultsPerPage";
            } else {
                $pagination_sql = " LIMIT 0 , $resultsPerPage";
            }

            $total_sql = $main_sql . $pagination_sql;
//            echo $total_sql;
            $result = $this->model_destinations->loadMoreDestinations($total_sql);
//            echo print_r($result);
            foreach ($result as $row) {

                echo '<div class="col-md-4 dest_block" style="margin-bottom:10px; ">
                        <div class="package-box movin movedin">
                            <div class="package-box-img">
                                <div class="mask">
                                    <div class="wrapmask">
                                        <span>
                                            <a data-destId="' . $row["dest_id"] . '" class="addTo_dest_wishlist_btn"  title="Add to Wishlist"><i class="fa fa-plus maskicons"></i></a>
                                            <a href="#" title="Like"><i class="fa fa-heart-o maskicons"></i></a>
                                            <a id="' . $row["wiki_name"] . '" target="_blank" class="dest_moreInfo_btn" title="More Info"><i class="fa fa-link maskicons"></i></a>
                                        </span>
                                    </div>
                                </div>

                                <img alt="img1" src="' . base_url('img/destinations') . '/' . $row["dest_image"] . '">
                            </div>
                            <div class="package-box-info">
                                <div class="package-box-common">
                                    <div class="package-box-details">
                                        <div class="package-box-name">' . $row["dest_name"] . '
                                            <span class="stars" style="float:right;">

                                                <p><span class="stars">' . $row["dest_ratings"] . '</span></p>

                                            </span>
                                        </div>
                                        <div class="package-box-type">' . $row["province"] . '</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>';
            }
        } else {
            echo "No post data";
        }
    }

    //[WORKING]
    public function load_destInfoPage() {
        if (!empty($_GET['dest_wikiName'])) {
            $dest_wikiName = $this->input->get('dest_wikiName');
            $json_result = json_encode($this->model_destinations->get_destinationInfoBy_WikiName($dest_wikiName), true);
            echo $json_result;
        } else {
            echo "false";
        }
    }

    public function load_mainImageSlider() {
        if (!empty($_GET['dest_Id'])) {
            $dest_id = $this->input->get('dest_Id');
            $json_result = json_encode($this->model_destinations->get_randomAttrInfo($dest_id, 5), true);
            echo $json_result;
        } else {
            echo "false";
        }
    }

    public function load_map() {
        if (!empty($_GET['dest_Id'])) {
            $dest_id = $this->input->get('dest_Id');
            $json_result = json_encode($this->model_destinations->get_randomAttrInfo($dest_id, 5), true);
            echo $json_result;
        } else {
            echo "false";
        }
    }

    public function load_things_todo_menu() {
        $json_result = json_encode($this->model_destinations->get_thingsToDo(), true);
        echo $json_result;
    }

//    function load_attractions_modalWindow(){
//        $json_result = json_encode($this->model_destinations->get_allAttractions(),true);
//        echo $json_result;
//    }
//    
//    
//    function load_specificAttraction(){
//        if(!empty($_GET['destId']) && !empty($_GET['attrId'])){
//            $destId = $this->input->get('destId');
//            $attrId = $this->input->get('attrId');
//
//            $json_result = json_encode($this->model_destinations->get_specificAttraction($destId, $attrId),true);
//            echo $json_result;
//        }
//        else{
//            echo "false";
//        }
//    }
//    
//    
//    function searchAttractrions(){      
//        $keyword =  $this->input->post('searchedWord');
//        $dest_id =  $this->input->post('dest_id');
//        
//        $json_result = $this->model_destinations->getAttrSearchResult($dest_id,$keyword);
//        $result = json_decode($json_result);
//        
//        foreach($result as $item) {
//            $img_baseUrl =  base_url()."img/attractions/";
//            echo'
//            <div class="display_box" align="left">    
//                <img src="'.$img_baseUrl.''.$item->attr_image.'" style="width:50px; height:41px; float:left; margin-right:6px;" />
//                <span class="name">'.$item->attr_name.'</span>&nbsp;<br/>'.$item->province.', Sri Lanka<br/>
//            </div>
//            ';
//        }
//    }
    //[WORKING]
    function destinationWishlist() {
        if (!empty($_GET['action']) && !empty($_GET['dest_id'])) {
            $action = $this->input->get('action');
            $dest_id = $this->input->get('dest_id');

            session_start();

            if ($action == "ADD") {

                $result = $this->model_destinations->get_destinationInfo($dest_id);

                foreach ($result as $item) {
                    $dest_WishlistItemArray = array($item->dest_id => array('dest_id' => $item->dest_id, 'dest_name' => $item->dest_name, 'province' => $item->province, 'dest_image' => $item->dest_image));

                    if (!empty($_SESSION["dest_wishlist_items"])) {
                        if (in_array($item->dest_id, $_SESSION["dest_wishlist_items"])) {
                            //do nothing
                        } else {
                            $_SESSION["dest_wishlist_items"] = array_merge($_SESSION["dest_wishlist_items"], $dest_WishlistItemArray);
                        }
                    } else {
                        $_SESSION["dest_wishlist_items"] = $dest_WishlistItemArray;
                    }
                }
                //print_r($_SESSION["dest_wishlist_items"]);
                $this->update_destWishlist_html();
            } else if ($action == "REM") {
                if (!empty($_SESSION["dest_wishlist_items"])) {
                    foreach ($_SESSION["dest_wishlist_items"] as $k => $v) {
                        if ($dest_id == $k) {
                            unset($_SESSION["dest_wishlist_items"][$k]);
                        }
                        if (empty($_SESSION["dest_wishlist_items"])) {
                            unset($_SESSION["dest_wishlist_items"]);
                        }
                    }
                    $this->update_destWishlist_html();
//                    print_r($_SESSION["dest_wishlist_items"]);
                }
            }
        } else {
            echo "false";
        }
    }

    //[WORKING]
    public function update_destWishlist_html() {
        if (isset($_SESSION["dest_wishlist_items"])) {
            foreach ($_SESSION["dest_wishlist_items"] as $item) {
                echo '
                <div class="feed-element">
                    <a href="#" class="pull-left">
                        <img alt="image" class="img-circle" src="' . base_url('img/destinations') . '/' . $item["dest_image"] . '">
                    </a>
                    <div class="media-body" style="width:150px;">
                        <strong data-wishlistAttrId="' . $item["dest_id"] . '">' . $item["dest_name"] . '</strong>
                        <br>' . $item["province"] . '<br>
                    </div>
                    <div style="margin-top:-20px;">
                        <a class="wishlistItemRemove_btn" data-wishlistAttrId="' . $item["dest_id"] . '" ><i class="fa fa-close pull-right"></i></a>
                    </div>
                </div>
                ';
            }
        }
    }

    public function check_dest_wishlist_items() {
        session_start();
        if (!empty($_SESSION['dest_wishlist_items'])) {
            echo print_r($_SESSION['dest_wishlist_items']);
        } else {
            echo "false";
        }
    }

    public function attrCoordinates() {
        if (!empty($_GET['destId']) && !empty($_GET['attrId'])) {
            $destId = $this->input->get('destId');
            $attrId = $this->input->get('attrId');

            $json_result = json_encode($this->model_destinations->get_specificAttraction($destId, $attrId), true);
            echo $json_result;
        } else {
            echo "false";
        }
    }

}

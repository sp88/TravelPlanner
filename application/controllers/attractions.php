<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Attractions extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('model_attractions');
        session_start();
    }

    public function index() {

        $this->data['title'] = "Attractions";
        $this->load->view('view_attractions', $this->data);
        
    }

    //[WORKING]
    //Get wikipedia abstract for attractions
    public function get_wikiAbstract() {

        if (!empty($_GET['attr_id'])) {

            $attr_id = $this->input->get('attr_id');
            $attr_wikiName = $this->model_attractions->get_attrWikiName($attr_id);

            $format = 'json';

            $query = "PREFIX dbr: <http://dbpedia.org/resource/>
            PREFIX dbo: <http://dbpedia.org/ontology/>
            SELECT ?abstract
            WHERE {
               dbr:" . $attr_wikiName . " dbo:abstract ?abstract . 
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
    public function check_loggedinUserId() {
        if ($this->session->userdata('logged_user_id') && $this->session->userdata('logged_in')) {
            echo $this->session->userdata('logged_user_id');
        } else {
            echo "false";
        }
    }

    //[WORKING]
    public function load_attrImgSlider() {
        if (!empty($_GET['destId'])) {
            $destId = $this->input->get('destId');
            $json_result = json_encode($this->model_attractions->get_attrInSpesificDest($destId), true);
            if ($json_result) {
                echo $json_result;
            } else {
                echo "false";
            }
        } else {
            echo "false";
        }
    }

    //[WORKING]
    public function filter_attrImgSlider() {
        if (!empty($_GET['destId']) && !empty($_GET['attr_type'])) {
            $destId = $this->input->get('destId');
            $attr_type = $this->input->get('attr_type');
            $json_result = json_encode($this->model_attractions->filter_attrInSpesificDest($destId, $attr_type), true);
            if ($json_result) {
                echo $json_result;
            } else {
                echo "false";
            }
        } else {
            echo "false";
        }
    }

    //[WORKING]
    //Resturant Image slider
    public function load_resImgSlider() {
        if (!empty($_GET['destId'])) {
            $destId = $this->input->get('destId');
            $json_result = json_encode($this->model_attractions->get_restInSpecificDest($destId), true);
            if ($json_result) {
                echo $json_result;
            } else {
                echo "false";
            }
        } else {
            echo "false2";
        }
    }

    //[WORKING]
    public function load_attrInfo() {
        if (!empty($_GET['attrId'])) {
            $attrId = $this->input->get('attrId');
            $json_result = json_encode($this->model_attractions->get_attractionInfo($attrId), true);
            if ($json_result) {
                echo $json_result;
            } else {
                echo "false";
            }
        } else {
            echo "false";
        }
    }

    //[WORKING]
    public function attractionWishlist() {
        $action = $this->input->get('action');
        $attr_id = $this->input->get('attr_id');
        $active_day = $this->input->get('active_day'); //for session name

        

        if ($action == "ADD") {
            $result = $this->model_attractions->get_attractionInfo($attr_id);

            foreach ($result as $item) {
                $wishlistItemArray = array($item->attr_id => array('attr_id' => $item->attr_id, 'attr_name' => $item->attr_name, 'attr_lat' => $item->attr_lat, 'attr_lng' => $item->attr_lng, 'attr_image' => $item->attr_image));

                if (!empty($_SESSION["attr_wishlist_items_" . $active_day])) {
                    if (in_array($item->attr_id, $_SESSION["attr_wishlist_items_" . $active_day])) {
                        //do nothing
                    } else {
                        $_SESSION["attr_wishlist_items_" . $active_day] = array_merge($_SESSION["attr_wishlist_items_" . $active_day], $wishlistItemArray);
                    }
                } else {
                    $_SESSION["attr_wishlist_items_" . $active_day] = $wishlistItemArray;
                }
            }
//            echo print_r($_SESSION["attr_wishlist_items_" . $active_day]);
            $this->update_attrWishlist_html($active_day);
            
        } else if ($action == "REM") {
            if (!empty($_SESSION["attr_wishlist_items_" . $active_day])) {
                foreach ($_SESSION["attr_wishlist_items_" . $active_day] as $k => $v) {
                    if ($_GET["attr_id"] == $k)
                        unset($_SESSION["attr_wishlist_items_" . $active_day][$k]);
                    if (empty($_SESSION["attr_wishlist_items_" . $active_day]))
                        unset($_SESSION["attr_wishlist_items_" . $active_day]);
                }
                $this->update_attrWishlist_html($active_day);
            }
        }
    }

    public function update_attrWishlist_html($active_day) {
        
        if (isset($_SESSION["attr_wishlist_items_" . $active_day])) {
            foreach ($_SESSION["attr_wishlist_items_" . $active_day] as $item) {
                echo '
                <div class="col-sm-2">
                    <div class="col-item">
                        <div class="photo">
                            <a class="wishlistItemRemove_btn" data-wishlistAttrId="'.$item["attr_id"].'" ></a>
                            <img src="' . base_url('img/attractions') . '/' . $item["attr_image"] . '" class="img-responsive" alt="a" />
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="price col-md-12 text-center">
                                    <div class="form-group">
                                        <label for="sel1">Spending Time</label>
                                        <select style="width: 100px;" id="sel1">
                                            <option>00:15 min</option>
                                            <option>00:30 min</option>
                                            <option>00:45 min</option>
                                            <option>01:00 hrs</option>
                                            <option>01:30 hrs</option>
                                            <option>02:00 hrs</option>
                                            <option>02:30 hrs</option>
                                            <option>03:00 hrs</option>
                                        </select>
                                    </div>

                                    <i class="price-text-color fa fa-star"></i>
                                    <i class="price-text-color fa fa-star"></i>
                                    <i class="price-text-color fa fa-star"></i>
                                    <i class="price-text-color fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                    <div class="separator"></div>

                                    <p style="margin-bottom: 5px;"><i class="fa fa-list"></i><a href="#" class="hidden-sm"> More details</a></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
        }
        else{
          echo "<h4 style='margin-left:10px;'>No attractions are selected</h4>";
        }
    }

}

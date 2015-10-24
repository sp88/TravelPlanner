<?php

$q = intval($_GET['q']);

//class HotelsController extends CI_Controller{
//
//    public function __construct() {
//        parent::__construct();
////        $this->load->model('model_attractions');
//        session_start();


//$hotelsArray = Array();
//
//class Hotel{
//    public $id;
//    public $name;
//    public $destination;
//    public $description;
//    public $rating;
//    public $price;
//    public $type;
//    public $imageUrl;
//    public $amenitiesArray;
//}



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_planner1";

$con = mysqli_connect($servername,$username,$password,$dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,$dbname);
$sql="SELECT * FROM accomodation";
$result = mysqli_query($con,$sql);

//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "SELECT * FROM accomodation"; //id, name, destination, description, rating, price, type, imageUrl
//$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "hello";
//        echo"
//                <article class='box'>
//                    <figure class='col-sm-5 col-md-4'>
//                        <a title='' href='#' class='hover-effect '><img width='270' height='160' alt='' src=". $row["imageUrl"] ."></a> <!-- popup-gallery -->
//                    </figure>
//                    <div class='details col-sm-7 col-md-8'>
//                        <div>
//                            <div>
//                                <h4 class='box-title'>". $row["name"] ."<small><i class='soap-icon-departure yellow-color'></i>". $row["destination"] ."</small></h4>
//                                <div class='amenities'>
//                                    <i class='soap-icon-wifi circle'></i>
//                                    <i class='soap-icon-fitnessfacility circle'></i>
//                                    <i class='soap-icon-swimming circle'></i>
//                                </div>
//                            </div>
//                            <div>
//                                <div class='five-stars-container'>
//                                    <span class='five-stars' style='width: 100%;'></span>
//                                </div>
//                                <span class='review'>Star Rating</span>
//                            </div>
//                        </div>
//                        <div>
//                            <p>". $row["description"] ."</p>
//                            <div>
//                                <span class='price'><small>AVG/NIGHT</small>". $row["price"] ."</span>
//                                <a class='button btn-small full-width text-center' title='' href='#'>SELECT</a>
//                            </div>
//                        </div>
//                    </div>
//                </article>
//        ";
    }

} else {
    echo "0 results";
}
$con->close();
//    }

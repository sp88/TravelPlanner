<!--Head-->
<?php include_once( 'templates/head.php'); ?>
<!--End of Head-->


<body>

    <div id="wrapper">

        <!--Left Navbar-->
        <?php include_once('templates/mainWiz_left_navbar.php'); ?>
        <!--End of Left Navbar-->

        <div id="page-wrapper" class="gray-bg" style="background-color: #FFF;">
            <div class="row border-bottom">

                <!--Top Navbar-->
                <?php include_once('templates/mainWiz_top_navbar.php'); ?>
                <!--End of Top Navbar-->

            </div>

            <!--Title Header-->
            <div class="row  border-bottom white-bg dashboard-header">
                <div class="col-sm-12">
                    <h2>A Smart Trip Planner for Your Vacation</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li class="active"><strong>Map</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <!--End of the Title Header-->

            <div class="wrapper wrapper-content  animated fadeInRight" style="margin: 0px; padding: 0px;">

                <!--<div class="row" >-->
                <!--<div class="col-md-12">-->
                <!--                        <div class="ibox ">
                                            <div class="ibox-title">
                                                <h5>Selected Destinations & Hotels</h5>
                                            </div>
                                            <div class="ibox-content">-->
                <div id="map-canvas" style="width:100%;height:500px;"></div>
                <!--</div>-->
                <!--</div>-->
                <!--</div>-->

                <!--</div>-->


            </div>

            <!--Footer-->
            <?php include_once( 'templates/footer.php'); ?>
            <!--End of Footer-->

        </div>
    </div>



    <!-- Mainly scripts -->
    <script src="<?php echo base_url() . 'js/jquery-1.11.2.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'js/jquery-ui.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'js/plugins/jquery.metisMenu.js' ?>"></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>

    <script type="text/javascript">

        $('document').ready(function () {
            
            var start = "";
            var end = "";
            var waypointArray = [];
            
            get_MapPoints();


            function get_MapPoints() {

                $.ajax({
                    type: "GET",
                    url: '<?php echo base_url('map/get_FirstLastAttr'); ?>',
                    data: {
                        'sess_id': 'attr_wishlist_items'
                    },
                    success: function (data) {
                        var json = JSON.parse(data);
                        start = json.first.attr_lat+','+json.first.attr_lng;
                        end = json.last.attr_lat+','+json.last.attr_lng;
                    }
                }); //end of the ajax request
                
//                var locArr = [];
                $.ajax({
                    type: "GET",
                    url: '<?php echo base_url('map/get_middleElements'); ?>',
                    data: {
                        'sess_id': 'attr_wishlist_items'
                    },
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (data) {
                        $.each(data, function (key, value) {
                            waypointArray.push(value.attr_lat.toString()+', '+value.attr_lng.toString());
                        });
                    }
                }); //end of the ajax request

            }



            var directionsDisplay;
            var directionsService = new google.maps.DirectionsService();
            var map;

            function initialize() {
                directionsDisplay = new google.maps.DirectionsRenderer();
                var mapCenter = new google.maps.LatLng(7.294125, 80.641293);
                var mapOptions = {
                    zoom: 10,
                    center: mapCenter
                }
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                directionsDisplay.setMap(map);
            }

            function calcRoute() {

//                var start = "7.294125, 80.641293";
//                var end = "7.180437, 79.884241";
                var waypts = [];
//                var waypointArray = ["7.218256, 80.567714", "7.271828, 80.595159"];
                for (var i = 0; i < waypointArray.length; i++) {
                    waypts.push({
                        location: waypointArray[i],
                        stopover: true
                    });
                }

                var request = {
                    origin: start,
                    destination: end,
                    waypoints: waypts,
                    optimizeWaypoints: true,
                    travelMode: google.maps.TravelMode.DRIVING
                };


                directionsService.route(request, function (response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
//                    var route = response.routes[0];
//                    var summaryPanel = document.getElementById('directions_panel');
//                    summaryPanel.innerHTML = '';
//                    // For each route, display summary information.
//                    for (var i = 0; i < route.legs.length; i++) {
//                        var routeSegment = i + 1;
//                        summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment + '</b><br>';
//                        summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
//                        summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
//                        summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
//                    }
                    }
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
            google.maps.event.addDomListener(window, 'load', calcRoute);



        });

    </script>



    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url() . 'js/inspinia.js' ?>"></script>

</body>

</html>
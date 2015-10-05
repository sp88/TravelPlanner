<!--Head-->
<?php include_once('templates/head.php'); ?>
<!--End of Head-->

<!--must include this css file inside the header file through controller-->
<link href="<?php echo base_url() . 'css/style_home.css' ?>" rel="stylesheet">

<!-- Google Font -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'css/plugins/flipCard.css' ?>">

<script type="text/javascript"></script>

<body style="background-color: rgba(0, 0, 0, 0.9);">


    <section>
        <!--Top Navbar-->
        <?php include_once('templates/default_top_navbar.php'); ?>
        <!--End of Top Navbar-->
    </section>


    <section style="margin-top: 40px;">
        <div class="row" style="width: 100%;">
            <div class="col-md-8" style="height: 100%;">
                <div id="map_canvas" style="width: 100%; height: 674px;"></div>
            </div>
            <div class="col-md-4" style="text-align: center;">

                <div class="row">
                    <div class="col-md-12">
                        <h1 style="margin-top: 20px;font-size: 30px;font-weight: 200; color: white;">Splendid Sri Lanka</h1>
                        <p style="font-size: 105%; color: white;">Come visit Sri Lanka. A nation like no other. If endless golden beaches, timeless ruins, warm and welcoming people, oodles of elephants, rolling surf, cheap prices, fun trains, famous tea and flavorful food could sum up a country, that would be Sri Lanka. Sri Lanka awaits you. See it! Feel it! We are sure, you’ll Love it! There is nothing like Sri Lanka.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="z-index: 1;">

                        <div id="flip_cover_mask" style="padding: 10px 0px 10px 0px;">

                            <!--Flip Card #1-->
                            <div class='fc_card-container' style='float:left;margin:0px 8px 8px 0px;width:100px;height:100px;color:white;'>
                                <div class='fc_card fc_auto' data-direction='right' style='border:0;border-radius:0px;' data-autoflip='9000' data-start='1000'>
                                    <div class='fc_front' style='background: rgba(0, 0, 0, 0.4); padding:0px; text-align:center;'>
                                        <img id="img_card2" src="<?php echo base_url('img/flip_covers/Lighthouse.jpg'); ?>" style="margin:0;border-radius:0;" />
                                    </div>
                                    <div class='fc_back' style='background: rgba(0, 0, 0, 0.4); text-align:center;'>
                                        <!--<h3 id="txt_card2"></h3>-->
                                        <img id="img_card5" src="<?php echo base_url('img/flip_covers/NDevale.jpg'); ?>" style="margin:-20px;border-radius:0;" />
                                    </div>
                                </div>
                            </div>

                            <!--Flip Card #2-->
                            <div class='fc_card-container' style='float:left;margin:0px 8px 8px 0px;width:200px;height:100px;color:white;'>
                                <div class='fc_card fc_auto' data-direction='left' style='border:0;border-radius:0px;' data-autoflip='9000' data-start='4000'>
                                    <div class='fc_front' style='background: rgba(0, 0, 0, 0.4); text-align:center;'>
                                        <!--<h3 id="txt_card1"></h3>-->
                                        <img id="img_card5" src="<?php echo base_url('img/flip_covers/HakgalaBotanicalGarden.jpg'); ?>" style="margin:-20px;border-radius:0;" />
                                    </div>
                                    <div class='fc_back' style='background: rgba(0, 0, 0, 0.4); padding:0px; text-align:center;'>
                                        <img id="img_card1" src="<?php echo base_url('img/flip_covers/GangaramayaTemple.jpg'); ?>" style="margin:0;border-radius:0;" />
                                    </div>
                                </div>
                            </div>

                            <!--Flip Card #3-->
                            <div class='fc_card-container' style='float:left;margin:0px 0px 8px 0px;width:100px;height:100px;color:white;'>
                                <div class='fc_card fc_auto' data-direction='top' style='border:0;border-radius:0px;' data-autoflip='9000' data-start='2000'>
                                    <div class='fc_front' style='background: rgba(0, 0, 0, 0.4); padding:0px; text-align:center;'>
                                        <img id="img_card3" src="<?php echo base_url('img/flip_covers/MinneriyaPark.jpg'); ?>" style="margin:0;border-radius:0;" />
                                    </div>
                                    <div class='fc_back' style='background: rgba(0, 0, 0, 0.4); text-align:center;'>
                                        <!--<h3 id="txt_card3"></h3>-->
                                        <img id="img_card5" src="<?php echo base_url('img/flip_covers/AmbewelaFarms.jpg'); ?>" style="margin:-20px;border-radius:0;" />
                                    </div>
                                </div>
                            </div>

                            <!--Flip Card #4-->
                            <div class='fc_card-container' style='float:left;margin:0px 8px 0px 0px;width:100px;height:100px;color:white;'>
                                <div class='fc_card fc_auto' data-direction='bottom' style='border:0;border-radius:0px;' data-autoflip='9000' data-start='5000'>
                                    <div class='fc_front' style='background: rgba(0, 0, 0, 0.4); padding:0px; text-align:center;'>
                                        <img id="img_card4" src="<?php echo base_url('img/flip_covers/HotWater.jpg'); ?>" style="margin:0;border-radius:0;" />
                                    </div>
                                    <div class='fc_back' style='background: rgba(0, 0, 0, 0.4); text-align:center;'>
                                        <!--<h3 id="txt_card4"></h3>-->
                                        <img id="img_card5" src="<?php echo base_url('img/flip_covers/DutchHospital.jpg'); ?>" style="margin:-20px;border-radius:0;" />
                                    </div>
                                </div>
                            </div>

                            <!--Flip Card #5-->
                            <div class='fc_card-container' style='float:left;margin:0px 8px 0px 0px;width:100px;height:100px;color:white;'>
                                <div class='fc_card fc_auto' data-direction='right' style='border:0;border-radius:0px;' data-autoflip='9000' data-start='3000'>
                                    <div class='fc_front' style='background: rgba(0, 0, 0, 0.4); padding:0px; text-align:center;'>
                                        <img id="img_card6" src="<?php echo base_url('img/flip_covers/RumassalaMountain.jpg'); ?>" style="margin:0;border-radius:0;" />
                                    </div>
                                    <div class='fc_back' style='background: rgba(0, 0, 0, 0.4); text-align:center;'>
                                        <!--<h3 id="txt_card6"></h3>-->
                                        <img id="img_card5" src="<?php echo base_url('img/flip_covers/FortFredrick.JPG'); ?>" style="margin:-20px;border-radius:0;" />
                                    </div>
                                </div>
                            </div>

                            <!--Flip Card #6-->
                            <div class='fc_card-container' style='float:left;margin:0px 0px 0px 0px;width:200px;height:100px;color:white;'>
                                <div class='fc_card fc_auto' data-direction='left' style='border:0;border-radius:0px;' data-autoflip='9000' data-start='7000'>
                                    <div class='fc_front' style='background: rgba(0, 0, 0, 0.4); text-align:center;'>
                                        <!--<h3 id="txt_card5"></h3>-->
                                        <img id="img_card5" src="<?php echo base_url('img/flip_covers/ToothRelic.jpg'); ?>" style="margin:-20px;border-radius:0;" />
                                    </div>
                                    <div class='fc_back' style='background: rgba(0, 0, 0, 0.4); padding:0px; text-align:center;'>
                                        <img id="img_card5" src="<?php echo base_url('img/flip_covers/St.Clair\'sFalls.jpg'); ?>" style="margin:0;border-radius:0;" />
                                    </div>
                                </div>
                            </div>

                        </div><!--end of the flip cover mask-->

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Be your own travel guide</h2>
                        <p style="font-size: medium; color: white;">Get a stunning itinerary for your next trip in seconds. Try it now, it's free!</p>
                        <div class="button-cta-holder no-print">
                            <a data-type="Upper"  data-toggle="modal" data-target="#planType_modal" class="button button-cta">Create your trip now <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- Plan Type Selection Modal-->
    <?php include_once( 'templates/plan_type_modal.php'); ?>
    <!-- End of the Plan Type Selection Modal-->







    <!-- Mainly scripts -->
    <!-- Google CDN jQuery with fallback to local -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url() . 'js/jquery-1.11.2.min.js' ?>"><\/script>')</script>

    <script src="<?php echo base_url() . 'js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'js/jquery-ui.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'js/plugins/flipCard.js' ?>"></script>



    <script src="http://maps.google.com/maps/api/js?sensor=false&.js"></script>
    <script src="data.json"></script>

    <script src="<?php echo base_url() . 'js/markerclusterer.js' ?>"></script>

    <script type="text/javascript">

        var map = null;
        var infoWindow = null;
        var markerArray = []; //create a global array to store markers
        var markers = [];
        var markerClusterer = null;

        function initialize() {
            var myOptions = {
                zoom: 7,
                center: new google.maps.LatLng(7.6564, 80.6350),
                mapTypeControl: true,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                },
                navigationControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

//            google.maps.event.addListener(markerCluster, "click", function (mCluster) {
//                var clusterSize = mCluster.getSize();
//
//                if (mCluster.getCenter() == '(6.930542, 79.85410000000002)') {
////                    alert('Colombo');
//                }
//                else if (mCluster.getCenter() == '(7.29135, 80.63505499999997)') {
////                    alert('Kandy');
//                }
//                else if (mCluster.getCenter() == '(6.808822, 80.79487399999994)') {
////                    alert('Nuwara Eliya');
//                }
//                else if (mCluster.getCenter() == '(8.008, 80.83882100000005)') {
////                    alert('Polonnaruwa');
//                }
//                else if (mCluster.getCenter() == '(8.338108, 80.38985100000002)') {
////                    alert('Anuradhapura');
//                }
//                else if (mCluster.getCenter() == '(6.030375, 80.21693600000003)') {
////                    alert('Galle');
//                }
//                else if (mCluster.getCenter() == '(6.175198, 81.19676400000003)') {
////                    alert('Hambantota');
//                }
//                else if (mCluster.getCenter() == '(7.669898, 80.64606600000002)') {
////                    alert('Mathale');
//                }
//                else if (mCluster.getCenter() == '(7.712466, 81.70242200000007)') {
////                    alert('Baticalo');
//                }
//                else if (mCluster.getCenter() == '(8.577304, 81.24325699999997)') {
////                    alert('Trincomalee');
//                }
//                else if (mCluster.getCenter() == '(8.792661, 79.92959900000005)') {
////                    alert('Mannar');
//                }
//                else if (mCluster.getCenter() == '(9.662025, 80.00840399999993)') {
////                    alert('Jaffna');
//                }
//
//
//            });

            infoWindow = new google.maps.InfoWindow();
            showMarkers();
        }

        google.maps.event.addDomListener(window, 'load', initialize);

        function showMarkers() {

            if (markerClusterer) {
                markerClusterer.clearMarkers();
            }

            var numMarkers = 125;

            for (var i = 0; i < numMarkers; i++) {

                var dataPhoto = data.attractions[i];
                var latLng = new google.maps.LatLng(dataPhoto.latitude, dataPhoto.longitude);
                var marker = new google.maps.Marker({
                    position: latLng
                });

//                var imageUrl = '<?php echo base_url('img/map-marker.png'); ?>';
//                var markerImage = new google.maps.MarkerImage(imageUrl,new google.maps.Size(24, 32));
//
//                var marker = new google.maps.Marker({
//                    'position': latLng,
//                    'icon': imageUrl
//                });

                var fn = markerClickFunction(dataPhoto, latLng);
                google.maps.event.addListener(marker, 'click', fn);
                markers.push(marker);
            }

            markerClusterer = new MarkerClusterer(map, markers);

        }
        ;

        function markerClickFunction(data, latlng) {
            return function (e) {
                e.cancelBubble = true;
                e.returnValue = false;
                if (e.stopPropagation) {
                    e.stopPropagation();
                    e.preventDefault();
                }
//                var title = pic.photo_title;
//                var url = pic.photo_url;
//                var fileurl = pic.photo_file_url;

                var infoHtml = '<div style="width:260px;"><div style="float:left;"><img src="<?php echo base_url(); ?>img/attractions/' + data.image + '" width="80px" height="80px" /></div><div style="float:left; margin-left:5px;"><div><strong>' + data.attr_name + '</strong></div><div><i class="fa fa-map-marker"></i> ' + data.province + '</div><div></div><div></div></div></div>';
//                var infoHtml = '<div style="width:260px;"><div style="float:left;"><img src="<?php echo base_url(); ?>img/attractions/'+data.image+'" width="80px" height="80px" /></div><div style="float:left; margin-left:5px;"><div><strong>'+data.attr_name+'</strong></div><div>Western Province, Sri Lanka</div><div>Ratings</div><div>col1 col2</div></div></div>';

                infoWindow.setContent(infoHtml);
                infoWindow.setPosition(latlng);
                infoWindow.open(map);
            };
        }
        ;


    </script>



</body>

</html>
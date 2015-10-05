<?php session_start();?>


<!--Head-->
<?php include_once( 'templates/head.php'); ?>
<!--End of Head-->



    <!--destinations models styles-->
    <link rel="stylesheet" href="<?php echo base_url().'css/styles-models.css' ?>">

    <!--Search box styles-->
    <link href="css/search-box-styles.css" rel="stylesheet">


<body>
   
<?php 
    

    if (isset($_SESSION['no_of_adults']) || isset($_SESSION['no_of_children'])) {
        echo $_SESSION["no_of_adults"];
        echo $_SESSION["no_of_children"];
//        echo print_r($_SESSION["travel_styles"]);
    }    
    else{
        echo "assssssss";
    }

?>
   
    <div id="wrapper">
        
        <!--Left Navbar2-->
        <?php include_once('templates/left_navbar2.php'); ?>
        <!--End of Left Navbar2-->

        <div id="page-wrapper" class="gray-bg dashbard-1" style="margin-top:20px;">
            <div class="row border-bottom">
                
                <!--Top Navbar-->
                <?php include_once('templates/top_navbar.php'); ?>
                <!--End of Top Navbar-->
                
            </div>
            <!--
            <div class="row  border-bottom white-bg dashboard-header">
                <div class="col-sm-4">
                    <h2>Popular Destinations</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li class="active"><strong>Popular Destinations</strong>
                        </li>
                    </ol>
                </div>
            </div>
-->

            <div class="row">
                <div class="col-lg-12" style="padding:5px 1px;">
                    <div class="wrapper wrapper-content">
                        <div class="row">

                            <div class="col-lg-9" style="padding-right:0px;">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Popular Destinations</h5>
                                        <div class="ibox-tools">
                                            <div class="input-group" style="width:250px; margin-top:-9px;">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <div class="row"  style="padding: 0px 10px;">

                                            <div class="row" style="margin-bottom:15px;">

                                                <div class="col-md-4">
                                                    <div class="package-box movin movedin">
                                                        <div class="package-box-img">
                                                            <div class="mask">
                                                                <div class="wrapmask">
                                                                    <span>
<!--                                                                    <a href="#" title="Add to Map"><i class="fa fa-plus maskicons"></i></a>-->
<!--                                                                    <a href="#" title="Like"><i class="fa fa-heart-o maskicons"></i></a>-->
                                                                    <a href="#destInfo" data-toggle="modal" title="More Info"><i class="fa fa-link maskicons"></i></a>
                                                                </span>
                                                                </div>
                                                            </div>

                                                            <img alt="img1" src="img/Colombo1.jpg">
                                                        </div>
                                                        <div class="package-box-info">
                                                            <div class="package-box-common">
                                                                <div class="package-box-details">
                                                                    <div class="package-box-name">Colombo
                                                                        <span class="stars" style="float:right;">
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                </span>
                                                                    </div>
                                                                    <div class="package-box-type">Western Province, Sri Lanka</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--One destination block-->

                                                <div class="col-md-4">
                                                    <div class="package-box movin movedin">
                                                        <div class="package-box-img">
                                                            <div class="mask">
                                                                <div class="wrapmask">
                                                                    <span>
<!--                                                                    <a href="#" title="Add to Map"><i class="fa fa-plus maskicons"></i></a>-->
<!--                                                                    <a href="#" title="Like"><i class="fa fa-heart-o maskicons"></i></a>-->
                                                                    <a href="#" title="More Info"><i class="fa fa-link maskicons"></i></a>
                                                                </span>
                                                                </div>
                                                            </div>

                                                            <img alt="img1" src="img/Kandy.jpg">
                                                        </div>
                                                        <div class="package-box-info">
                                                            <div class="package-box-common">
                                                                <div class="package-box-details">
                                                                    <div class="package-box-name">Kandy
                                                                        <span class="stars" style="float:right;">
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                </span>
                                                                    </div>
                                                                    <div class="package-box-type">Central Province, Sri Lanka</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--One destination block-->

                                                <div class="col-md-4">
                                                    <div class="package-box movin movedin">
                                                        <div class="package-box-img">
                                                            <div class="mask">
                                                                <div class="wrapmask">
                                                                    <span>
<!--                                                                    <a href="#" title="Add to Map"><i class="fa fa-plus maskicons"></i></a>-->
<!--                                                                    <a href="#" title="Like"><i class="fa fa-heart-o maskicons"></i></a>-->
                                                                    <a href="#" title="More Info"><i class="fa fa-link maskicons"></i></a>
                                                                </span>
                                                                </div>
                                                            </div>

                                                            <img alt="img1" src="img/Nuwara_Eliya.jpg">
                                                        </div>
                                                        <div class="package-box-info">
                                                            <div class="package-box-common">
                                                                <div class="package-box-details">
                                                                    <div class="package-box-name">Nuwara Eliya
                                                                        <span class="stars" style="float:right;">
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                </span>
                                                                    </div>
                                                                    <div class="package-box-type">Central Province, Sri Lanka</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--One destination block-->

                                            </div>
                                            <!--END of destinations first row-->




                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="package-box movin movedin">
                                                        <div class="package-box-img">
                                                            <div class="mask">
                                                                <div class="wrapmask">
                                                                    <span>
<!--                                                                    <a href="#" title="Add to Map"><i class="fa fa-plus maskicons"></i></a>-->
<!--                                                                    <a href="#" title="Like"><i class="fa fa-heart-o maskicons"></i></a>-->
                                                                    <a href="#" title="More Info"><i class="fa fa-link maskicons"></i></a>
                                                                </span>
                                                                </div>
                                                            </div>

                                                            <img alt="img1" src="img/Anuradhapura.jpg">
                                                        </div>
                                                        <div class="package-box-info">
                                                            <div class="package-box-common">
                                                                <div class="package-box-details">
                                                                    <div class="package-box-name">Anuradhapura
                                                                        <span class="stars" style="float:right;">
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                </span>
                                                                    </div>
                                                                    <div class="package-box-type">North Central Province, Sri Lanka</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--One destination block-->

                                                <div class="col-md-4">
                                                    <div class="package-box movin movedin">
                                                        <div class="package-box-img">
                                                            <div class="mask">
                                                                <div class="wrapmask">
                                                                    <span>
<!--                                                                    <a href="#" title="Add to Map"><i class="fa fa-plus maskicons"></i></a>-->
<!--                                                                    <a href="#" title="Like"><i class="fa fa-heart-o maskicons"></i></a>-->
                                                                    <a href="#" title="More Info"><i class="fa fa-link maskicons"></i></a>
                                                                </span>
                                                                </div>
                                                            </div>

                                                            <img alt="img1" src="img/Polonnaruwa.jpg">
                                                        </div>
                                                        <div class="package-box-info">
                                                            <div class="package-box-common">
                                                                <div class="package-box-details">
                                                                    <div class="package-box-name">Polonnaruwa
                                                                        <span class="stars" style="float:right;">
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                </span>
                                                                    </div>
                                                                    <div class="package-box-type">North Central Province, Sri Lanka</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--One destination block-->

                                                <div class="col-md-4">
                                                    <div class="package-box movin movedin">
                                                        <div class="package-box-img">
                                                            <div class="mask">
                                                                <div class="wrapmask">
                                                                    <span>
<!--                                                                    <a href="#" title="Add to Map"><i class="fa fa-plus maskicons"></i></a>-->
<!--                                                                    <a href="#" title="Like"><i class="fa fa-heart-o maskicons"></i></a>-->
                                                                    <a href="#" title="More Info"><i class="fa fa-link maskicons"></i></a>
                                                                </span>
                                                                </div>
                                                            </div>

                                                            <img alt="img1" src="img/Jaffna.jpg">
                                                        </div>
                                                        <div class="package-box-info">
                                                            <div class="package-box-common">
                                                                <div class="package-box-details">
                                                                    <div class="package-box-name">Jaffna
                                                                        <span class="stars" style="float:right;">
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                    <img src="img/star.png" alt="" />
                                                                </span>
                                                                    </div>
                                                                    <div class="package-box-type">North Province, Sri Lanka</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--One destination block-->

                                            </div>
                                            <!--END of destinations second row-->


                                        </div>
                                    </div>



                                </div>
                            </div>
                            <!--End Destination column-->


                            <div class="col-lg-3">
                                <!--destination wishlist column-->


                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Destination Wishlist</h5>
                                        <div class="ibox-tools">
                                            <span class="label label-warning-light">4 </span>
                                        </div>
                                    </div>
                                    <div class="ibox-content">

                                        <div>
                                            <div class="feed-activity-list">

                                                <div class="feed-element">
                                                    <a href="profile.html" class="pull-left">
                                                        <img alt="image" class="img-circle" src="img/Colombo1.jpg">
                                                    </a>
                                                    <div class="media-body" style="width:150px;">
                                                        <strong>Colombo</strong>
                                                        <br> Western Province
                                                        <br>
                                                    </div>
                                                    <div style="margin-top:-20px;">
                                                        <i class="fa fa-close pull-right"></i>
                                                    </div>

                                                </div>

                                                <div class="feed-element">
                                                    <a href="profile.html" class="pull-left">
                                                        <img alt="image" class="img-circle" src="img/Kandy.jpg">
                                                    </a>
                                                    <div class="media-body" style="width:150px;">
                                                        <strong>Kandy</strong>
                                                        <br> Central Province
                                                        <br>
                                                    </div>
                                                    <div style="margin-top:-20px;">
                                                        <i class="fa fa-close pull-right"></i>
                                                    </div>
                                                </div>

                                                <div class="feed-element">
                                                    <a href="profile.html" class="pull-left">
                                                        <img alt="image" class="img-circle" src="img/Anuradhapura.jpg">
                                                    </a>
                                                    <div class="media-body" style="width:150px;">
                                                        <strong>Anuradhapura</strong>
                                                        <br>North Central Province
                                                        <br>
                                                    </div>
                                                    <div style="margin-top:-20px;">
                                                        <i class="fa fa-close pull-right"></i>
                                                    </div>
                                                </div>

                                                <div class="feed-element">
                                                    <a href="profile.html" class="pull-left">
                                                        <img alt="image" class="img-circle" src="img/Polonnaruwa.jpg">
                                                    </a>
                                                    <div class="media-body" style="width:150px;">
                                                        <strong>Polonnaruwa</strong>
                                                        <br>North Central Province
                                                        <br>
                                                    </div>
                                                    <div style="margin-top:-20px;">
                                                        <i class="fa fa-close pull-right"></i>
                                                    </div>
                                                </div>

                                            </div>

                                            <button class="btn btn-primary btn-block m-t"><i class="fa fa-arrow-down"></i> Show More</button>

                                        </div>

                                    </div>
                                </div>


                            </div>
                            <!--End of destination wishlist olumn-->

                        </div>
                    </div>




                </div>
            </div>

            <!--Footer-->
            <?php include_once( 'templates/footer.php'); ?>
            <!--End of Footer-->


        </div>
        <!--END of the Page-wrapper-->
    </div>
    <!--END of the Wrapper-->
    
    <!--Head-->
    <?php include_once( 'templates/tmpl_dest_modal.php'); ?>
    <!--End of Head-->

    <!-- Mainly scripts -->
    <script src="<?php echo base_url().'js/jquery-1.11.2.min.js'?>"></script>
    <script src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'js/jquery-ui.min.js'?>"></script>
    
    <!--for image gallery-->
    <script src="<?php echo base_url().'js/plugins/jquery.blueimp-gallery.min.js'?>"></script>
    
    <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"></script>
    
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <script src="<?php echo base_url().'js/plugins/star-rating.js'?>"></script>

    

    <!-- destination jquery function -->
    <script type="text/javascript">
        
        
     //ROLL ON HOVER
    $(function() {
        $(".mask").css("opacity","0");
        $(".mask").hover(function () {
        $(this).stop().animate({
            opacity: .7
        }, "slow");
        },
        function () {
        $(this).stop().animate({
            opacity: 0
        }, "slow");
        });

    });

 
    </script>
    
    
    
<!-- ================================================================================================================= -->
 <!-- Destination Modal window scripts --> 
<!-- ================================================================================================================= -->

   
   <!--Star rating like google play-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('.bar span').hide();
            $('#bar-five').animate({
                width: '75%'
            }, 1000);
            $('#bar-four').animate({
                width: '35%'
            }, 1000);
            $('#bar-three').animate({
                width: '20%'
            }, 1000);
            $('#bar-two').animate({
                width: '15%'
            }, 1000);
            $('#bar-one').animate({
                width: '30%'
            }, 1000);

            setTimeout(function () {
                $('.bar span').fadeIn('slow');
            }, 1000);

        });
    </script>



    <!--For the weather-->
    <script type="text/javascript">
        $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'line'
                },
                title: {
                    text: null
                },
                xAxis: {
                    categories: ['Day1', 'Day2', 'Day3', 'Day4', 'Day5', 'Day6', 'Day7']
                },
                yAxis: {
                    title: {
                        text: 'Temperature (°C)'
                    }
                },
                plotOptions: {
                    line: {
                        dataLabels: {
                            enabled: true
                        },
                        enableMouseTracking: false
                    }
                },
                series: [{
                    name: 'Temp',
                    data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2]
        }]
            });
        });
    </script>



    <!--for the google maps -->
    <script type="text/javascript">
        var map = null;
        var myLatlng = new google.maps.LatLng(6.9100, 79.8608);

        function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: myLatlng,
                zoom: 15,
                //scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            map = new google.maps.Map(mapCanvas, mapOptions);

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Colombo National Museum' //change this
            });

        }
        google.maps.event.addDomListener(window, 'load', initialize);


        //when some one click location tab refresh  the map
        $(document).ready(function () {
            $(document).on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
                var pattern = /#.+/ //set a regex pattern (all the things after "#").
                var tabID = e.target.toString().match(pattern)[0]; //find pattern
                //alert(contentID); // activated tab
                if (tabID == "#locationMap") {
                    google.maps.event.trigger(map, 'resize');
                    //var center = new google.maps.LatLng(6.9100, 79.8608);
                    map.setCenter(myLatlng);
                }

            })
        });
    </script>
    
    
<!-- ================================================================================================================= -->
    
    
    
    
    
    
    
    



</body>
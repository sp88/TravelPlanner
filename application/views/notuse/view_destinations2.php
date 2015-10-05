<?php session_start();?>


<!--Head-->
<?php include_once('templates/head.php'); ?>
<!--End of Head-->

    <!--destinations models styles-->
    <link rel="stylesheet" href="<?php echo base_url('css/styles-models.css') ?>">

    <!--Pagination styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/easyui/easyui.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/easyui/icon.css') ?>"/>
    
    <!--Login modal social button styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-social.css') ?>"/>
    
    <style type="text/css">
        #pp {
            background:#efefef;
            border:1px solid #ccc;
            width:100%;
            padding:5px;
            margin-top:0px;
        }
    </style>

    <!--destination Star rating styles-->
    <style type="text/css">
		span.stars, span.stars span {
			display: block;
			background: url(<?php echo base_url('img/stars.png') ?>) 0 -16px repeat-x;
			width: 80px;
			height: 16px;
		}
	
		span.stars span {
			background-position: 0 0;
            text-indent: 100%;
            overflow: hidden;
		}
    </style>
    
    <!--Attraction search-box dropdown styles-->
    <style type="text/css">
        
/*        #inputSearch {
            width: 350px;
            border: solid 1px #000;
            padding: 3px;
        }*/
        
        #divResult {
            position: absolute;
            width: 93.3%;
            display: none;
            margin-top: 15px;
            border: solid 1px #dedede;
            border-top: 0px;
            overflow: hidden;
/*
            border-bottom-right-radius: 6px;
            border-bottom-left-radius: 6px;
            -moz-border-bottom-right-radius: 6px;
            -moz-border-bottom-left-radius: 6px;
            box-shadow: 0px 0px 5px #999;
            border-width: 3px 1px 1px;
            border-style: solid;
            border-color: #333 #DEDEDE #DEDEDE;
*/
            background-color: white;
            left: 0px;
            z-index: 99;
        }
        
        .display_box {
            padding: 4px;
            border-top: solid 1px #dedede;
            font-size: 12px;
            height: 50px;
        }
        
        .display_box:hover {
            background: #3bb998;
            color: #FFFFFF;
            cursor: pointer;
        }
    </style>

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


            <div class="row">
                <div class="col-lg-12" style="padding:5px 1px;">
                    <div class="wrapper wrapper-content">
                        <div class="row">

                            <div class="col-lg-9" style="padding-right:0px;">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Search Most Popular Destinations in Sri Lanka</h5>
                                        <div class="ibox-tools">
                                            <div class="input-group" style="width:250px; margin-top:-9px;">
                                                <input name="search" id="search" type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ibox-content" style="padding-bottom:0px;">
                                        <div class="row"  style="padding: 0px 10px;">

                                            <div class="row" style="margin-bottom:15px;">

                                                <!--Most popular 6 destinations goes here-->
                                                <div id="content_destinations"></div>

                                            </div>
                                            <!--END of destinations second row-->
                                              
                                            <!--Pagination Bar-->
                                            <div id="pp"></div>

                                        </div>
                                    </div>



                                </div>
                            </div>
                            <!--End Destination column-->


                            <div class="col-lg-3">
                                <!--destination wishlist column-->


                                <div id="attrWishlist" class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Attractions Wishlist</h5>
                                        <div class="ibox-tools">
                                            <span class="label label-warning-light">
                                            <?php  
                                                if(empty($_SESSION["wishlist_item"])){
                                                    echo "0";
                                                }
                                                else{
                                                    echo count($_SESSION["wishlist_item"]);
                                                }
                                            ?> </span>
                                        </div>
                                    </div>
                                    <div class="ibox-content" style="height:450px;">

                                        <div class="feed-activity-list">
                                            
                                        <?php if(isset($_SESSION["wishlist_item"])){ ?>
                                            
                                                <?php foreach ($_SESSION["wishlist_item"] as $item){ ?>
                                            
                                                    <div class="feed-element">
                                                        <a href="#" class="pull-left">
                                                            <img alt="image" class="img-circle" src="<?php echo base_url()?>img/attractions/<?php echo $item["attr_image"]; ?>">
                                                        </a>
                                                        <div class="media-body" style="width:150px;">
                                                            <strong data-wishlistAttrId="<?php echo $item["attr_id"]; ?>"><?php echo $item["attr_name"]; ?></strong>
                                                            <br><?php echo $item["province"]; ?><br>
                                                        </div>
                                                        <div style="margin-top:-20px;">
                                                            <a class="wishlistItemRemove_btn" data-wishlistAttrId="<?php echo $item["attr_id"]; ?>" ><i class="fa fa-close pull-right"></i></a>
                                                        </div>
                                                    </div>
                                                    
                                                <?php } ?>

                                            <?php } else {?>
                                                <h4>No Attractions are selected</h4>
                                            <?php } ?>    
                                        
                                        </div> <!--End of the feed activity list-->

                                        <button class="btn btn-primary btn-block m-t"><i class="fa fa-arrow-down"></i> Show More</button>
                                    </div>
                                </div>


                            </div>
                            <!--End of destination wishlist column-->

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
    
    
    <!--Destination Info Modal-->
    <?php include_once('templates/dest_info_modal.php'); ?>
    <!--End of the Destination Info Modal-->

    <!--Login Modal Window-->
    <?php include_once('templates/login_modal.php'); ?>
    <!--End of the Login Modal Window-->
    
    
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
    
    <script type='text/javascript' src='http://localhost:8080/easyrec-web/api-js/easyrec.js'></script>
    
    <script type='text/javascript'>
        var apiKey      = "48e0a2e8784d08dcc18383ffdf64b82b";
        var tenantId    = "ATTR";
    </script>
    

    <!--this is for pagination-->
    <script type="text/javascript" src="<?php echo base_url('js/plugins/jquery.easyui.min.js') ?>"></script>
    
    
<!-- ======================================================================================================= -->
 <!-- Destination Modal window scripts --> 
<!-- ======================================================================================================= -->
 
<script type="text/javascript">
            
    $('document').ready(function(){

        var clicked_dest_id = "";
        var active_attr_id = "";
        var attr_name = "";
        var destLat = "";
        var destLng = "";
        var attrLat = "";
        var attrLng = "";

        var baseUrl = '<?= base_url() ?>';

        //Star Rating Code for Destinations
        $.fn.stars = function() {
            return $(this).each(function() {
                $(this).width(Math.max(0, (Math.min(5, parseFloat($(this).html())))) * 16);
            });
        }

        //Destinations Search
        $('input#search').on("keyup",function() {
            var destName = $('#search').val();
            //ajax request
            $.post(baseUrl+'destinations/search_destinations', {destName: destName}, function(data) {
               $("#content_destinations").html(data);

               $('span.stars').stars(); //for ratings

                //Destination block hoverover & click
                //------------------------------------
                dest_hover();
                dest_click();
                //------------------------------------

                $('#pp').pagination({
                    pageNumber:1,
                    total:$('#recNum').val(),
                    pageList:[6],
                    showPageList:false
                });

            });

        }).keyup();

        //Destination Pagination
        $(function(){
            $('#pp').pagination({
                total:$('#recNum').val(),
                pageList:[6],
                showPageList:true,
                onSelectPage:function(pageNumber, pageSize){
                    $('#pp').pagination({loading:true});
                    var destName = $('#search').val();
                    $.post(baseUrl+'destinations/search_destinations/ #content_destinations', {destName: destName,pageNumber:pageNumber}, function(data) {
                        $("#content_destinations").html(data);

                        $('span.stars').stars(); //for ratings

                        //Destination block hoverover & click
                        //------------------------------------
                        dest_hover();
                        dest_click();
                        //------------------------------------                    

                    });
                    $('#pp').pagination({loading:false});
                }
            });
        });

        function dest_hover(){
            $(".mask").css("opacity","0");
            $(".mask").hover(function() {
                $(this).stop().animate({
                    opacity: .7
                }, "slow");
            },
            function() {
                $(this).stop().animate({
                    opacity: 0
                }, "slow");
            });
        }

        function dest_click(){

            $(".dest-link").click(function(){
                var loggedinUserId = "NO_USER";
                <?php if($this->session->userdata('logged_user_id')){?>
                        loggedinUserId = "<?php echo $this->session->userdata('logged_user_id');?>";
                <?php } ?>
//                     
                              
                clicked_dest_id = $(this).attr('id');

                $.ajax({
                    url: '<?php echo base_url('destinations/load_destInfo_modalWindow'); ?>',
                    type: "GET",
                    data: {
                        'destId': clicked_dest_id
                    },
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    cache: true,

                    success: function (data) {
                        if (data == "") {
                            alert("Unable to fetch Information");
                            return false;
                        } else {
                            $('#destInfo').modal('show');

                            $.each(data, function (key, value) {
                                destLat = value.dest_lat;
                                destLng = value.dest_lng;
                                $("#dest-name").attr('data-destId',value.dest_id);
                                $("#dest-name").text(value.dest_name);

                                $("#dest-province").text(value.province+", Sri Lanka");

                                var imgUrl = "<?php echo base_url()?>img/destinations/" + value.dest_image;
                                $('#modalHeader_img').css("background-image", "url("+imgUrl+")"); 
                                
                                alert(loggedinUserId);
                                easyrec_sendAction("view",{userId:loggedinUserId,
                                                           itemId:value.dest_id,
                                                           itemUrl:"<?php echo base_url()?>img/destinations/",
                                                           itemDescription:value.dest_name,
                                                           itemImageUrl:imgUrl});
                                               
                                               
                               var xxx = easyrec_getRecommendations("otherusersalsoviewed",{userId:loggedinUserId,
                                       itemId:value.dest_id,
                                       drawingCallback:"drawRecommendationList"});
                                   alert(xxx);
                                
                            });

                        }
                    }
                }); //end of the ajax request

            });

        }// end of the dest_click function

//------------------------------------------------------------------------------------------
        //Destination Info Modal On Load Event
        $('#destInfo').on('show.bs.modal', function () {

            $.ajax({
                url: '<?php echo base_url('destinations/load_attractions_modalWindow'); ?>',
                type: "GET",
                data: {
                    'destId': clicked_dest_id
                },
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                cache: true,

                success: function (data) {
                    if (data == "") {
                        alert("Unable to fetch Information");
                        return false;
                    } else {
                        $.each(data, function (key, value) {
                            $('<div class="item" data-attrId="'+value.attr_id+'"><img src="<?php echo base_url()?>img/attractions/'+value.attr_image+'" style="width:100%;"><div class="carousel-caption package-box-caption"><h4>'+value.attr_name+'</h4></div></div>').appendTo('.carousel-inner');            
                        });

                        $('.item').first().addClass('active');
                        var firstAttrId = $('.item').first().attr('data-attrId');
                        clearRatingValues();
                        getAttrInDest(clicked_dest_id,firstAttrId);
                    }
                }
            }); //end of the ajax request

        });


        //Dest info Modal hidden Event
        $('#destInfo').on('hidden.bs.modal', function () {
            //remove the html element inside '.carousel-inner'
            $('.carousel-inner').empty();
            $('#attrWishlist').load(document.URL + ' #attrWishlist');
        });

        //Carousel Prev & Next Button Click Envent
        $('#myCarousel').bind('slide.bs.carousel', function(e) {
            var first = $('.item').first().attr('data-attrId');
            var last = $('.item').last().attr('data-attrId');
            var next = "";
            var prev = "";
            //click right arrow
            if(e.direction=="left"){
                next = $(this).find('.active').next().attr('data-attrId');
                if(typeof next === 'undefined'){
                    next=first;
                }
                clearRatingValues();
                getAttrInDest(clicked_dest_id,next);
            }
            //click left arrow
            else if(e.direction=="right"){
                prev = $(this).find('.active').prev().attr('data-attrId');
                if(typeof prev === 'undefined'){
                    prev=last;
                }
                clearRatingValues();
                getAttrInDest(clicked_dest_id,prev);
            }
            
        });

        //Clear Ratings Values
        function clearRatingValues(){
//            $('#user_rating').rating('update', 0.0);
//            $('.rating-num').text('0.0');
//            $('.icon-user').text(" 0 total");
            $('#bar-five-value,#bar-four-value,#bar-three-value,#bar-two-value,#bar-one-value').text("0");
            $('#bar-five,#bar-four,#bar-three,#bar-two,#bar-one').css('width','0%');
        }


        //Get Specific Attractions in One Destination
        function getAttrInDest(clicked_dest_id, currentAttrId){
            
            //Load Attraction details like title, description and attr_ID
            $.ajax({
                url: '<?php echo base_url('destinations/load_specificAttraction'); ?>',
                type: "GET",
                data: {
                    'destId': clicked_dest_id,
                    'attrId': currentAttrId
                },
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                cache: true,

                success: function (data) {
                    if (data == "") {
                        alert("Unable to fetch Information");
                        return false;
                    } else {
//                        alert("data ok");
                        $.each(data, function (key, value) {
                            $('#attr_title').text("About "+value.attr_name);
                            $('#attr_desc').text(value.attr_description);
                            $('#addtoPlan_Btn,#user_rating').attr('data-selected_attr_id',value.attr_id);
                            attrLat = value.attr_lat;
                            attrLng = value.attr_lng;
                            attr_name = value.attr_name;
                        });
                    }
                }
            }); //end of the ajax request

            //Check If User is Logged or not bcz to show user's ratings
            $.ajax({
                url: '<?php echo base_url('ratings/check_loggedinUserId'); ?>',
                type: "GET",
                success: function (data) {
                    if(data!=="false"){
                        //get the user ratings
                        get_userRatings();
                    }else{
                        //set rating value to 0
                        $('#user_rating').rating('update', 0.0);
                    }
                }
            }); //end of the ajax request

            //Get user ratings by attractions
            function get_userRatings(){
                $.ajax({
                    url: '<?php echo base_url('ratings/get_userSpecificRating'); ?>',
                    type: "GET",
                    data: {
                        'attr_id': currentAttrId
                    },
                    success: function (data) {
                        $('#user_rating').rating('update', data);
                    }
                }); //end of the ajax request
            }

            //set data to google play like rating
            $.ajax({
                url: '<?php echo base_url('ratings/get_totalAvgRating'); ?>',
                type: "GET",
                data: {
                    'attr_id': currentAttrId
                },
                success: function (data) {
                    var dataArray = data.split(':');
                    $('.rating-num').text(dataArray[0]);
                    $('.icon-user').text(" "+dataArray[1]+" total");
                }
            }); //end of the ajax request

            //Get Ratings as Percentage
            $.ajax({
                url: '<?php echo base_url('ratings/get_ratingAsPercentage'); ?>',
                type: "GET",
                data: {
                    'attr_id': currentAttrId
                },
                success: function (data) {
                    var json_result = JSON.parse(data);
                    for(var i=0;json_result.length;i++){
                        if(json_result[i].rating=='5.0'){
                            $('#bar-five-value').text(json_result[i].hitsByRating);
                            $('#bar-five').animate({
                                width: json_result[i].percentage
                            }, 1000);
                        }
                        if(json_result[i].rating=='4.0'){
                            $('#bar-four-value').text(json_result[i].hitsByRating);
                            $('#bar-four').animate({
                                width: json_result[i].percentage
                            }, 1000);
                        }
                        if(json_result[i].rating=='3.0'){
                            $('#bar-three-value').text(json_result[i].hitsByRating);
                            $('#bar-three').animate({
                                width: json_result[i].percentage
                            }, 1000);
                        }
                        if(json_result[i].rating=='2.0'){
                            $('#bar-two-value').text(json_result[i].hitsByRating);
                            $('#bar-two').animate({
                                width: json_result[i].percentage
                            }, 1000);
                        }
                        if(json_result[i].rating=='1.0'){
                            $('#bar-one-value').text(json_result[i].hitsByRating);
                            $('#bar-one').animate({
                                width: json_result[i].percentage
                            }, 1000);
                        }
                    }
                }
            }); //end of the ajax request

        }


        //Add to Trip Plan Button Click Event
        $('#addtoPlan_Btn').on("click",function(){
            var selectedAttr_id = $(this).attr('data-selected_attr_id');

            $.ajax({
                type: "GET",
                url: '<?php echo base_url('destinations/destinationWishlist'); ?>',
                data: {
                    'action': "ADD",
                    'dest_id': clicked_dest_id,
                    'attr_id': selectedAttr_id
                },
                success: function (data) {
//                    alert(data);
                    //$(".feed-activity-list").html(data).show();
//                    if (data == "") {
//                        alert("Unable to fetch Information");
//                        return false;
//                    } else {
//                        alert("data ok");
//                    }
                }
            }); //end of the ajax request  

        });

        //Wishlist items remove click event
        $('.wishlistItemRemove_btn').on("click",function(){

            $remv_attrId = $(this).attr('data-wishlistAttrId');
//            alert($remv_attrId);
            $.ajax({
                type: "GET",
                url: '<?php echo base_url('destinations/destinationWishlist'); ?>',
                data: {
                    'action': "REM",
                    'attr_id': $remv_attrId
                },
                success: function (data) {
//                    $('#attrWishlist').load(document.URL + ' #attrWishlist');
//                    alert(data);
//                    if (data == "") {
//                        alert("Unable to fetch Information");
//                        return false;
//                    } else {
//                        alert("data ok");
//                    }
                }
            }); //end of the ajax request 

        });


        $('#user_rating').on('rating.change', function(event, rating_value) {
            var selectedAttr_id = "";
            selectedAttr_id = $(this).attr('data-selected_attr_id');
            $.ajax({
                type: "POST",
                url: '<?php echo base_url('ratings/set_rrating'); ?>',
                data: {
                    'selected_attr_id': selectedAttr_id,
                    'user_rating': rating_value
                },
                success: function(data) {
                    if(data=="NO_SESSION"){
                        $('#login-modal').modal('show');
                    }
                }
            }); //end of the ajax request
        });


        $('.loginmodal-submit').on("click",function(){
            $user_email = $('#loginModal_email').val();
            $user_password = $('#loginModal_password').val();

            $.ajax({
                type: "POST",
                url: '<?php echo base_url('user/login_user'); ?>',
                data: {
                    'user_email': $user_email,
                    'user_password': $user_password
                },
                success: function(data) {
                    if(data=="true"){
                        $('#login-modal').modal('hide');
                    }
                }
            }); //end of the ajax request   
        });

        //login modal hidden event
        $('#login-modal').on('hidden.bs.modal', function () {
            $('#user_rating').rating('update', 0.0);
        });


        //Destination Info Modal Tabs Click Event
        $(document).on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
//          active_attr_id = $('#myCarousel').find('.active').attr('data-attrId');
            var target = $(e.target).attr("aria-controls");
            
            if (target == "locationMap") {
                $('#mapTabAttrName').text("Location of "+attr_name);
                var latLng = attrLat+","+attrLng;
                initialize(latLng);
                
                function initialize(latLng) {
                    latLng = latLng.split(",");
                    var mapOptions = {
                        center: new google.maps.LatLng(latLng[0],latLng[1]),
                        zoom: 15,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    
                    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
                    
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(latLng[0],latLng[1]),
                        map: map,
                        title: attr_name 
                    });
                }
            }
            else if(target == "weather"){
                
                var owmUrl = "http://api.openweathermap.org/data/2.5/weather?lat="+destLat+"&lon="+destLng+"&units=metric";

                $.getJSON(owmUrl).then(function(data) {
                    $('#owm_name').text(data.name+" "+data.sys.country)
                    $('#owm_temp').text(" "+data.main.temp+" °C")
                    $('#owm_image').attr("src","http://openweathermap.org/img/w/"+data.weather[0].icon+".png")
                    var dt = new Date();
                    dateTime = dt.toString().split('GMT');
                    $('#owm_dateTime').text("get at "+dateTime[0]);
                    $('#owm_wind').text(data.wind.speed+" m/s");
                    $('#owm_cloud').text(data.weather[0].description);
                    $('#owm_pressure').text(data.main.pressure+" hpa");
                    $('#owm_humidity').text(data.main.humidity+"%");
                    $('#sunrise').text(convertUnixtime(data.sys.sunrise));
                    $('#sunset').text(convertUnixtime(data.sys.sunset));
                    $('#coord').text("[ "+data.coord.lat+", "+data.coord.lon+" ]");
                    
                });
                
            }
            
            //convert unixtime to human readable time
            function convertUnixtime(unixtime){
                var d = new Date(0);
                d.setUTCSeconds(unixtime);
                var hours = d.getHours();
                var minutes = d.getMinutes();
                return (hours + ':' + minutes + ' GMT');
            }
            
        });
        




    });//END OF THE DOCCUMENT.READY

</script>

    <!--For the weather-->
    <script type="text/javascript">
        $(function () {
            $('#forcastGraph').highcharts({
                chart: {
                    type: 'spline'
                },
                title: {
                    text: 'Next 5 Days Weather Forcast'
                },
                subtitle: {
                    text: 'Source: <a href="http://openweathermap.org/">openweathermap.org</a>'
                },
                xAxis: {
                    categories: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5']
                },
                yAxis: {
                    title: {
                        text: 'Temperature(°C) & Rain(mm)'
                    },
//                    labels: {
//                        formatter: function () {
//                            return this.value + '°';
//                        }
//                    } 
                },
                tooltip: {
                    crosshairs: true,
                    shared: true
                },
                plotOptions: {
                    spline: {
                        marker: {
                            radius: 4,
                            lineColor: '#666666',
                            lineWidth: 1
                        }
                    }
                },
                series: [{
                    name: 'Temerature',
                    marker: {
                        symbol: 'square'
                    },
                    data: [26.97, 25.48, {
                        y: 26.53,
                        marker: {
                            symbol: 'url(http://www.highcharts.com/demo/gfx/sun.png)'
                        }
                    }, 26.35, 26.14]

                }, {
                    name: 'Rain',
                    marker: {
                        symbol: 'diamond'
                    },
                    data: [{
                        y: 0.005,
                        marker: {
                            symbol: 'url(http://www.highcharts.com/demo/gfx/snow.png)'
                        }
                    }, 0.015, 0.0, 0.0, 0.015]
                }]
            });
        });
    </script>

    
    
    <!--Attraction search JS code-->
    <script type="text/javascript">

        $(function () {
            
            $(".search").keyup(function () {
                
                var clicked_dest_id =  clicked_dest_id;
                
                var inputSearch = $(this).val();
                if (inputSearch != '') {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url('destinations/searchAttractrions'); ?>",
                        data: {
                            'dest_id': clicked_dest_id,
                            'searchedWord': inputSearch
                        },
                        cache: false,
                        success: function (html) {
                            $("#divResult").html(html).show();
                        }
                    });
                }
                return false;
            });

            jQuery("#divResult").on("click", function (e) {
                var $clicked = $(e.target);
                var $name = $clicked.find('.name').html();
                var decoded = $("<div/>").html($name).text();
                $('#inputSearch').val(decoded);
            });
            jQuery(document).on("click", function (e) {
                var $clicked = $(e.target);
                if (!$clicked.hasClass("search")) {
                    jQuery("#divResult").fadeOut();
                }
            });
            $('#inputSearch').click(function () {
                jQuery("#divResult").fadeIn();
            });
        });
    </script>
    


</body>

<!--Head-->
<?php include_once('templates/head.php'); ?>
<!--End of Head-->

<!--destinations models styles-->
<link rel="stylesheet" href="<?php echo base_url('css/styles-models.css') ?>">

<!--Pagination styles-->
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/easyui/easyui.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/easyui/icon.css') ?>"/>-->

<!--Login modal social button styles-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-social.css') ?>"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/jquery.mThumbnailScroller.css') ?>"/>


<!--<style type="text/css">
    #pp {
        background:#efefef;
        border:1px solid #ccc;
        width:100%;
        padding:5px;
        margin:0px;
    }
</style>-->

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

<body>
    <div id="wrapper">

        <!--Left Navbar-->
        <?php include_once('templates/mainWiz_left_navbar.php'); ?>
        <!--End of Left Navbar-->

        <div id="page-wrapper" class="gray-bg dashbard-1">

            <!--Top Navigation Bar-->
            <div class="row border-bottom">
                <!--Top Navbar-->
                <?php include_once('templates/mainWiz_top_navbar.php'); ?>
                <!--End of Top Navbar-->
            </div>
            <!--End of the Top Navigation Bar-->

            <!--Title Header-->
            <div class="row  border-bottom white-bg dashboard-header">
                <div class="col-sm-12">
                    <h2>A Smart Trip Planner for Your Vacation</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li class="active"><strong>Popular Attractions</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <!--End of the Title Header-->

            <!--Middle Main Content Row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Select Attractions in selected destinations</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="ibox-content" style="padding-top: 0px;"
                                    <?php if (isset($_SESSION["dest_wishlist_items"])) { ?>

                                             <div class="panel blank-panel">
                                                <div class="panel-heading">
                                                    <div class="panel-options">
                                                        <ul class="nav nav-tabs" id="dest_tabs" role="tablist">
                                                            <?php foreach ($_SESSION["dest_wishlist_items"] as $item) { ?>
                                                                <li data-tab-destid="<?php echo $item["dest_id"]; ?>"><a data-toggle="tab" href="#<?php echo $item["dest_id"]; ?>"><?php echo $item["dest_name"]; ?></a></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="panel-body">
                                                    <div class="tab-content" id="tab_content">
                                                        <?php foreach ($_SESSION["dest_wishlist_items"] as $item) { ?>
                                                            <div id="<?php echo $item["dest_id"]; ?>" class="tab-pane">

                                                                <div class="row">

                                                                    <div class="col-sm-6">
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-primary"><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Attraction Type</button>
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <span class="caret"></span>
                                                                                <span class="sr-only">Toggle Dropdown</span>
                                                                            </button>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a href="#">All</a></li>
                                                                                <li><a href="#">Sights & Landmarks</a></li>
                                                                                <li><a href="#">Heritage Sites</a></li>
                                                                                <li><a href="#">Nature & Wildlife Areas</a></li>
                                                                                <li><a href="#">Leisure</a></li>
                                                                            </ul>
                                                                        </div>

                                                                        <button  class="btn btn-primary restaurants_btn" type="button"><i class="fa fa-cutlery"></i>&nbsp;&nbsp;Restaurants</button>
                                                                        <button id="map" class="btn btn-default " type="button"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Find on Map</button>
                                                                    </div>

                                                                    <style type="text/css">
                                                                        .stylish-input-group .input-group-addon{
                                                                            background: white !important; 
                                                                        }
                                                                        .stylish-input-group .form-control{
                                                                            border-right:0; 
                                                                            box-shadow:0 0 0; 
                                                                            border-color:#ccc;
                                                                        }
                                                                        .stylish-input-group button{
                                                                            border:0;
                                                                            background:transparent;
                                                                        }
                                                                    </style>


                                                                    <div class="col-sm-6">
                                                                        <div id="imaginary_container"> 
                                                                            <div class="input-group stylish-input-group">
                                                                                <input type="text" class="form-control"  placeholder="Search Attractions" >
                                                                                <span class="input-group-addon">
                                                                                    <button type="submit">
                                                                                        <span class="glyphicon glyphicon-search"></span>
                                                                                    </button>  
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">

                                                                    <style>
                                                                        .content{
                                                                            position: relative;
                                                                            padding: 10px;
                                                                            margin: 10px auto;
                                                                            width: 100%;
                                                                            border: 1px solid #ddd;
                                                                            border-radius: 10px;
                                                                            box-shadow: 0 1px 7px #ccc;
                                                                        }
                                                                        .content li{ 
                                                                            margin: 0 4px;
                                                                            background: #2f2e2e none repeat scroll 0 0;
                                                                            border-radius: 5px;
                                                                            height: 152px; 
                                                                            width: 252px;
                                                                        }

                                                                        .content li a img{
                                                                            border-radius: 5px 5px 0 0;
                                                                        }
                                                                        .content ul{ 
                                                                            opacity: 0;
                                                                            -webkit-transition: opacity 1s ease-out;
                                                                            -moz-transition: opacity 1s ease-out;
                                                                            -ms-transition: opacity 1s ease-out;
                                                                            -o-transition: opacity 1s ease-out;
                                                                            transition: opacity 1s ease-out;
                                                                        }
                                                                        .content.scroller-ready ul{ opacity: 1; }
                                                                        /* CSS loading spinner (optional) */
                                                                        @keyframes spinner{ to {transform: rotate(360deg);} }
                                                                        @-webkit-keyframes spinner{ to {-webkit-transform: rotate(360deg);} }
                                                                        .spinner{
                                                                            min-width: 24px;
                                                                            min-height: 24px;
                                                                            position: absolute;
                                                                            left: 0;
                                                                            top: 0;
                                                                            height: 100%;
                                                                            width: 100%;
                                                                        }
                                                                        .spinner:before{
                                                                            content: 'Loading…';
                                                                            position: absolute;
                                                                            top: 50%;
                                                                            left: 50%;
                                                                            width: 32px;
                                                                            height: 32px;
                                                                            margin-top: -16px;
                                                                            margin-left: -16px;
                                                                        }
                                                                        .spinner:not(:required):before{
                                                                            content: '';
                                                                            border-radius: 50%;
                                                                            border-top: 5px solid #f18e34;
                                                                            border-right: 5px solid transparent;
                                                                            animation: spinner .6s linear infinite;
                                                                            -webkit-animation: spinner .6s linear infinite;
                                                                        }
                                                                        .content.scroller-ready .spinner{ display: none; }
                                                                        .title_mask{
                                                                            position: absolute; 
                                                                            bottom: 0px; 
                                                                            background-color: rgba(0, 0, 0, 0.5); 
                                                                            height: 30px; 
                                                                            width: 252px;
                                                                            border-radius: 5px; 
                                                                            padding: 5px 10px; 
                                                                            color: #FFF;
                                                                        }
                                                                        .add_remTo_attr_wishlist_btn, .attr_image_click{
                                                                            cursor: pointer;
                                                                        }

                                                                    </style>

                                                                    <div  class="content">
                                                                        <ul class="attrImgSlider_content">
                                                                            <!--Attraction image Slider GEnerated by Script-->
                                                                        </ul>

                                                                        <!-- loading spinner (optional) -->
                                                                        <div class="spinner"></div>
                                                                    </div>

                                                                </div>
                                                                <!--<div class="row"><br><br><br><br><br></div>-->


                                                            </div>
                                                        <?php } ?>
                                                    </div>

                                                    <!--------------------------------------------------------------------------------------------------->
                                                    <!--Start Attraction cart-->
                                                    <div class="row">

                                                        <?php if (isset($_SESSION["no_of_days"])) { ?>

                                                            <!-- Nav tabs -->
                                                            <ul class="nav nav-tabs" id="days_tabs" role="tablist">
                                                                <?php for ($x = 1; $x <= $_SESSION["no_of_days"]; $x++) { ?>
                                                                    <li data-tab-day="day<?php echo $x; ?>" role="presentation"><a href="#day<?php echo $x; ?>" aria-controls="day<?php echo $x; ?>" role="tab" data-toggle="tab">Day <?php echo $x; ?></a></li>
                                                                <?php } ?>
                                                            </ul>

                                                            <style type="text/css">

                                                                @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
                                                                .col-item
                                                                {
                                                                    border: 1px solid #E1E1E1;
                                                                    border-radius: 5px;
                                                                    background: #FFF;
                                                                }
                                                                .col-item .photo img
                                                                {
                                                                    margin: 0 auto;
                                                                    width: 100%;
                                                                    height: 110px;
                                                                }

                                                                .col-item .info
                                                                {
                                                                    padding: 5px;
                                                                    border-radius: 0 0 5px 5px;
                                                                    margin-top: 1px;
                                                                }

                                                                .col-item:hover .info {
                                                                    background-color: #F5F5DC;
                                                                }
                                                                .col-item .price
                                                                {
                                                                    /*width: 50%;*/
                                                                    float: left;
                                                                    margin-top: 5px;
                                                                }

                                                                .col-item .price h5
                                                                {
                                                                    line-height: 20px;
                                                                    margin: 0;
                                                                }

                                                                .price-text-color
                                                                {
                                                                    color: #219FD1;
                                                                }

                                                                .col-item .info .rating
                                                                {
                                                                    color: #777;
                                                                }

                                                                .col-item .rating
                                                                {
                                                                    /*width: 50%;*/
                                                                    float: left;
                                                                    font-size: 17px;
                                                                    text-align: right;
                                                                    line-height: 52px;
                                                                    margin-bottom: 10px;
                                                                    height: 52px;
                                                                }

                                                                .col-item .separator
                                                                {
                                                                    margin: 5px 0px;
                                                                    border-top: 1px solid #E1E1E1;
                                                                }

                                                                .col-item .separator p
                                                                {
                                                                    line-height: 20px;
                                                                    margin-bottom: 0;
                                                                    margin-top: 10px;
                                                                    text-align: center;
                                                                }

                                                                .col-item .separator p i
                                                                {
                                                                    margin-right: 5px;
                                                                }
                                                                a.wishlistItemRemove_btn{
                                                                    position: absolute;
                                                                    width:20px;
                                                                    height:20px;
                                                                    background:transparent url('<?php echo base_url('img/cancel.png'); ?>') repeat top left;
                                                                    margin-top:-10px;
                                                                    left: 150px;
                                                                    cursor:pointer;
                                                                }

                                                            </style>

                                                            <!-- Tab panes -->
                                                            <div class="tab-content" id="days_tab_content">
                                                                <?php for ($x = 1; $x <= $_SESSION["no_of_days"]; $x++) { ?>
                                                                    <div role="tabpanel" class="tab-pane" id="day<?php echo $x; ?>">

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        &nbsp;
                                                                                    </div>
                                                                                </div>
                                                                                <div id="carousel-example" class="carousel slide hidden-xs">
                                                                                    <!-- Wrapper for slides -->
                                                                                    <div class="carousel-inner">
                                                                                        <div class="item active">
                                                                                            <div class="well" style="padding: 10px;">
                                                                                                <div class="row">

                                                                                                    <!--Selected Attractions Goes Here-->
                                                                                                    <?php if (isset($_SESSION["attr_wishlist_items_day1"])) { ?>

                                                                                                        <?php foreach ($_SESSION["attr_wishlist_items_day1"] as $item) { ?>

                                                                                                            <div class="col-sm-2">
                                                                                                                <div class="col-item">
                                                                                                                    <div class="photo">
                                                                                                                        <a class="wishlistItemRemove_btn" data-wishlistAttrId="<?php echo $item["attr_id"]; ?>" ></a>
                                                                                                                        <img src="<?php echo base_url() ?>img/attractions/<?php echo $item["attr_image"]; ?>" class="img-responsive" alt="a" />
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

                                                                                                        <?php } ?>

                                                                                                    <?php } else { ?>
                                                                                                        <h4 style="padding-left: 10px;">No Attractions are selected</h4>
                                                                                                    <?php } ?>  

                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                <?php } ?>
                                                            </div>


                                                        <?php } else { ?>
                                                            <h4>Not select the trip duration</h4>
                                                        <?php } ?>

                                                    </div>
                                                    <!--End of the Attraction cart-->
                                                    <!--------------------------------------------------------------------------------------------------->

                                                    <div class="tab-content" id="tab_content_else">
                                                        <?php foreach ($_SESSION["dest_wishlist_items"] as $item) { ?>
                                                            <div id="'<?php echo $item["dest_id"]; ?>_else'" class="tab-pane">

                                                                <div class="row"><h5 id="second_pane_h5">Recomended Atteactions</h5></div>

                                                            </div>
                                                        <?php } ?>
                                                    </div>


                                                </div>
                                            </div>

                                        <?php } else { ?>
                                            <h4>No Destinations are selected</h4>
                                        <?php } ?>




                                    </div>
                                </div>
                            </div>     


                        </div>
                    </div>

                </div>

                <!--Footer-->
                <?php include_once( 'templates/footer.php'); ?>
                <!--End of Footer-->

            </div>
            <!--End of the Middle Main Content Row-->



        </div> <!--End of th Page Wrapper-->

        <!--Destination Info Modal-->
        <?php include_once('templates/attr_info_modal.php'); ?>
        <!--End of the Destination Info Modal-->

        <!--Login Modal Window-->
        <?php include_once('templates/login_modal.php'); ?>
        <!--End of the Login Modal Window-->


        <!-- Mainly scripts -->
        <script src="<?php echo base_url() . 'js/jquery-1.11.2.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'js/bootstrap.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'js/jquery-ui.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'js/plugins/jquery.metisMenu.js' ?>"></script>
        <!--<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>-->

        <!--this is for pagination-->
        <script type="text/javascript" src="<?php echo base_url('js/plugins/jquery.easyui.min.js') ?>"></script>   

        <!--Google Map Script File-->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

        <script src="<?php echo base_url() . 'js/plugins/star-rating.js' ?>"></script>

        <script src="<?php echo base_url() . 'js/plugins/jquery.mThumbnailScroller.js' ?>"></script>


        <script type="text/javascript">

            $('document').ready(function () {


                var active_dest_tab_id = ""; //Destination ID
                var clicked_attr_id = ""; //Attraction ID
                var active_day = "";
                var attr_name = "";
                var attrLat = "";
                var attrLng = "";

                //Active First tab and tab content in attractions image slider section
                $('#dest_tabs').children().first().addClass('active');
                $('#tab_content').children().first().addClass('active');
                $('#tab_content_else').children().first().addClass('active');

                //Active First tab and tab content in attractions Cart section
                $('#days_tabs').children().first().addClass('active');
                $('#days_tab_content').children().first().addClass('active');

                //Get initial the Active tab ID (Dest ID)
                active_dest_tab_id = $('#dest_tabs').children().first().attr("data-tab-destid");

                //Get initial the Active day
                active_day = $('#days_tabs').children().first().attr("data-tab-day");

                //Load Attraction image Slider on Page Load
                load_attrImgSlider(active_dest_tab_id);

                //Google Map Initialize method
                var map;
                function initialize(myCenter) {
                    var marker = new google.maps.Marker({
                        position: myCenter
                    });
                    var mapProp = {
                        center: myCenter,
                        zoom: 15,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    map = new google.maps.Map(document.getElementById("map-canvas"), mapProp);
                    marker.setMap(map);
                }

                //load attractions to image slider
                function load_attrImgSlider(destId) {

                    //Clear Image Slider content
                    $('.attrImgSlider_content').empty();

                    //Load the attraction image slider
                    $.ajax({
                        url: '<?php echo base_url('attractions/load_attrImgSlider'); ?>',
                        type: "GET",
                        data: {
                            'destId': destId
                        },
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        success: function (data) {
                            $.each(data, function (key, value) {
                                $('<li><div class="title_mask">' + value.attr_name + '<img data-attrId="' + value.attr_id + '"  title="Click to Add" class="add_remTo_attr_wishlist_btn pull-right" width="20px" height="20px" src="<?php echo base_url(); ?>img/add.png" /></div><img class="attr_image_click" data-attrId="' + value.attr_id + '"  title="Click to View More Info" src="<?php echo base_url(); ?>img/attractions/' + value.attr_image + '" width="250px" height="150px" /></li>').appendTo('.attrImgSlider_content');
                            });
                            attraction_click();
                        }
                    }); //end of the ajax request
                }

                //load resturents to image slider
                function load_resImgSlider(destId) {

                    //Clear Image Slider content
                    $('.attrImgSlider_content').empty();

                    //Load the attraction image slider
                    $.ajax({
                        url: '<?php echo base_url('attractions/load_resImgSlider'); ?>',
                        type: "GET",
                        data: {
                            'destId': destId
                        },
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        success: function (data) {
                            $.each(data, function (key, value) {
                                $('<li><div class="title_mask">' + value.res_name + '<img data-resId="' + value.res_id + '"  title="Click to Add" class="pull-right" width="20px" height="20px" src="<?php echo base_url(); ?>img/add.png" /></div><img class="res_image_click" data-resId="' + value.res_id + '"  title="Click to View More Info" src="<?php echo base_url(); ?>img/restaurants/' + value.res_image + '" width="250px" height="150px" /></li>').appendTo('.attrImgSlider_content');
                            });
                            attraction_click();
                        }
                    }); //end of the ajax request
                }

                //Load filtered attractions to imageslider
                function filter_attrImgSlider(destId, attr_type) {

                    //Clear Image Slider content
                    $('.attrImgSlider_content').empty();

                    //Load the filtered attraction image slider
                    $.ajax({
                        url: '<?php echo base_url('attractions/filter_attrImgSlider'); ?>',
                        type: "GET",
                        data: {
                            'destId': destId,
                            'attr_type': attr_type
                        },
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        success: function (data) {
                            if (data == "") {
                                $('<h4>No Attractions are Found</h4>').appendTo('.attrImgSlider_content');
                            }
                            else {
                                $.each(data, function (key, value) {
                                    $('<li><div class="title_mask">' + value.attr_name + '<img data-attrId="' + value.attr_id + '"  title="Click to Add" class="add_remTo_attr_wishlist_btn pull-right" width="20px" height="20px" src="<?php echo base_url(); ?>img/add.png" /></div><img class="attr_image_click" data-attrId="' + value.attr_id + '"  title="Click to View More Info" src="<?php echo base_url(); ?>img/attractions/' + value.attr_image + '" width="250px" height="150px" /></li>').appendTo('.attrImgSlider_content');
                                });
                                attraction_click();
                            }

                        }
                    }); //end of the ajax request

                }



                function attraction_click() {
                    $('.attr_image_click').click(function () {
                        clicked_attr_id = $(this).attr('data-attrId');

                        //clear attraction description
                        $(".attr_description").text("");

                        //Load Destination abstract from Wiki
                        $.ajax({
                            url: '<?php echo base_url('attractions/get_wikiAbstract'); ?>',
                            type: "GET",
                            data: {
                                'attr_id': clicked_attr_id
                            },
                            success: function (data) {
                                if (data != "false") {
                                    $(".attr_description").text(data);
                                } else {
                                    $('.dest_description').text("Unable to Fetch Information...");
                                }
                            }
                        }); //end of the ajax request


                        $.ajax({
                            url: '<?php echo base_url('attractions/load_attrInfo'); ?>',
                            type: "GET",
                            data: {
                                'attrId': clicked_attr_id
                            },
                            contentType: "application/json; charset=utf-8",
                            dataType: "json",
                            success: function (data) {
                                if (data != "false") {

                                    $.each(data, function (key, value) {
                                        $(".modal-title").text(value.attr_name);

                                        var imgUrl = "<?php echo base_url() ?>img/attractions/" + value.attr_image;
                                        $('.attraction_img').attr('src', imgUrl);

                                        $('#attr_info_modal').attr('data-latLng', value.attr_lat + ',' + value.attr_lng);
                                        attr_name = value.attr_name;

                                        $('#user_rating').attr('data-selected_attr_id', value.attr_id);
                                    });

                                    $('#attr_info_modal').modal('show');
                                } else {
                                    alert("Unable to Fetch Information");
                                    return false;
                                }
                            }
                        }); //end of the ajax request
                    });

                    $('.add_remTo_attr_wishlist_btn').on("click", function () {
                        var attr_id = $(this).attr('data-attrId');

                        $.ajax({
                            url: '<?php echo base_url('attractions/attractionWishlist'); ?>',
                            type: "GET",
                            data: {
                                'action': "ADD",
                                'attr_id': attr_id,
                                'active_day': active_day //for session name
                            },
                            success: function (data) {
//                                alert(data);
                                $('.tab-content #' + active_day + ' .well .row').html(data);

                            }
                        }); //end of the ajax request

                    });


                    //Wishlist items remove click event
                    $(document).on('click', '.wishlistItemRemove_btn', function () {

                        $remv_attrId = $(this).attr('data-wishlistAttrId');
                        $.ajax({
                            type: "GET",
                            url: '<?php echo base_url('attractions/attractionWishlist'); ?>',
                            data: {
                                'action': "REM",
                                'attr_id': $remv_attrId,
                                'active_day': active_day
                            },
                            success: function (data) {
                                $('.tab-content #' + active_day + ' .well .row').html(data);
                            }
                        }); //end of the ajax request 
                    });




                }// End of the attraction click method






                //Insert User Ratings and Check user session
                $('#user_rating').on('rating.change', function (event, rating_value) {

                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url('ratings/set_rating'); ?>',
                        data: {
                            'selected_attr_id': clicked_attr_id,
                            'user_rating': rating_value
                        },
                        success: function (data) {
//                            alert(data);
                            if (data == "NO_SESSION") {
                                $('#login-modal').modal('show');
                            }
                        }
                    }); //end of the ajax request
                });


                $('.loginmodal-submit').on("click", function () {
                    $user_email = $('#loginModal_email').val();
                    $user_password = $('#loginModal_password').val();

                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url('user/login_user'); ?>',
                        data: {
                            'user_email': $user_email,
                            'user_password': $user_password
                        },
                        success: function (data) {
                            if (data == "true") {
                                $('#login-modal').modal('hide');
                            }
                            else {
                                $('.login_modal_err').html("Error: Invalid Username or Password");
                            }
                        }
                    }); //end of the ajax request   
                });
                $("#loginModal_email, #loginModal_password").focus(function () {
                    $('.login_modal_err').html("");
                });

                //login modal hidden event
                $('#login-modal').on('hidden.bs.modal', function () {
                    $('#user_rating').rating('update', 0.0);
                });


                $('#attr_info_modal').on('shown.bs.modal', function (e) {
                    var data = $(this).attr("data-latLng").split(',')
                    initialize(new google.maps.LatLng(data[0], data[1]));
                    clearRatingValues();
                    attr_info_modal_load();
                });


                function attr_info_modal_load() {

                    //Check If User is Logged or not bcz to show user's ratings
                    $.ajax({
                        url: '<?php echo base_url('ratings/check_loggedinUserId'); ?>',
                        type: "GET",
                        success: function (data) {
                            if (data !== "false") {
                                //get the user ratings
                                get_userRatings();
                            } else {
                                //set rating value to 0
                                $('#user_rating').rating('update', 0.0);
                            }
                        }
                    }); //end of the ajax request

                    //Get user ratings by attractions
                    function get_userRatings() {
                        $.ajax({
                            url: '<?php echo base_url('ratings/get_userSpecificRating'); ?>',
                            type: "GET",
                            data: {
                                'attr_id': clicked_attr_id
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
                            'attr_id': clicked_attr_id
                        },
                        success: function (data) {
                            var dataArray = data.split(':');
                            $('.rating-num').text(dataArray[0]);
                            $('.icon-user').text(" " + dataArray[1] + " total");
                        }
                    }); //end of the ajax request

                    //Get Ratings as Percentage
                    $.ajax({
                        url: '<?php echo base_url('ratings/get_ratingAsPercentage'); ?>',
                        type: "GET",
                        data: {
                            'attr_id': clicked_attr_id
                        },
                        success: function (data) {
                            var json_result = JSON.parse(data);
                            for (var i = 0; json_result.length; i++) {
                                if (json_result[i].rating == '5.0') {
                                    $('#bar-five-value').text(json_result[i].hitsByRating);
                                    $('#bar-five').animate({
                                        width: json_result[i].percentage
                                    }, 1000);
                                }
                                if (json_result[i].rating == '4.0') {
                                    $('#bar-four-value').text(json_result[i].hitsByRating);
                                    $('#bar-four').animate({
                                        width: json_result[i].percentage
                                    }, 1000);
                                }
                                if (json_result[i].rating == '3.0') {
                                    $('#bar-three-value').text(json_result[i].hitsByRating);
                                    $('#bar-three').animate({
                                        width: json_result[i].percentage
                                    }, 1000);
                                }
                                if (json_result[i].rating == '2.0') {
                                    $('#bar-two-value').text(json_result[i].hitsByRating);
                                    $('#bar-two').animate({
                                        width: json_result[i].percentage
                                    }, 1000);
                                }
                                if (json_result[i].rating == '1.0') {
                                    $('#bar-one-value').text(json_result[i].hitsByRating);
                                    $('#bar-one').animate({
                                        width: json_result[i].percentage
                                    }, 1000);
                                }
                            }
                        }
                    }); //end of the ajax request

                }


                //Clear Ratings Values
                function clearRatingValues() {
                    //            $('#user_rating').rating('update', 0.0);
                    //            $('.rating-num').text('0.0');
                    //            $('.icon-user').text(" 0 total");
                    $('#bar-five-value,#bar-four-value,#bar-three-value,#bar-two-value,#bar-one-value').text("0");
                    $('#bar-five,#bar-four,#bar-three,#bar-two,#bar-one').css('width', '0%');
                }


                //Destinations Tab Click event
                $('#dest_tabs').on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
                    var tab_destid = $(e.target).attr("href");
//                    if (tab_destid.charAt(0) === '#') {
                    active_dest_tab_id = tab_destid.slice(1);
//                    }
                    load_attrImgSlider(active_dest_tab_id);
                    $('#second_pane_h5').text(active_dest_tab_id.toString() + " Rec");
//                    alert(tab_destid.slice(1));
                });

                //Day Tab Click event
                $('#days_tabs').on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
                    var day = $(e.target).attr("href");
                    active_day = day.slice(1);
//                    alert(active_day);
                    //update tab content
                    $.ajax({
                        url: '<?php echo base_url(); ?>' + 'attractions/update_attrWishlist_html/' + active_day,
                        type: "GET",
                        success: function (data) {
                            $('.tab-content #' + active_day + ' .well .row').html(data);
//                            alert(data);
                        }
                    }); //end of the ajax request

                });


                $('.restaurants_btn').on("click", function () {
//                    alert(active_dest_tab_id);
                    load_resImgSlider(active_dest_tab_id);
                });


                $('.dropdown-menu a').click(function () {
//                    alert(active_dest_tab_id);
//                    alert($(this).text());
                    var attr_type = $(this).text();

                    if (attr_type == "All") {
                        load_attrImgSlider(active_dest_tab_id);
                    }
                    else {
                        filter_attrImgSlider(active_dest_tab_id, attr_type);
                    }

                });





            });//end of the doccument ready


        </script>


<!--        <script type="text/javascript">
    var map;        
    var myCenter=new google.maps.LatLng(53, -1.33);
    var marker=new google.maps.Marker({
        position:myCenter
    });

    function initialize() {
      var mapProp = {
          center:myCenter,
          zoom: 14,
          draggable: false,
          scrollwheel: false,
          mapTypeId:google.maps.MapTypeId.ROADMAP
      };

      map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);
      marker.setMap(map);

      google.maps.event.addListener(marker, 'click', function() {

        infowindow.setContent(contentString);
        infowindow.open(map, marker);

      }); 
    };
    google.maps.event.addDomListener(window, 'load', initialize);

    google.maps.event.addDomListener(window, "resize", resizingMap());

    $('#attr_info_modal').on('show.bs.modal', function() {
       //Must wait until the render of the modal appear, thats why we use the resizeMap and NOT resizingMap!! ;-)
       resizeMap();
    });

    function resizeMap() {
       if(typeof map =="undefined") return;
       setTimeout( function(){resizingMap();} , 400);
    }

    function resizingMap() {
       if(typeof map =="undefined") return;
       var center = map.getCenter();
       google.maps.event.trigger(map, "resize");
       map.setCenter(center); 
    }
</script>-->


        <script>
            (function ($) {
                $(window).load(function () {

                    $(".content").mThumbnailScroller({
                        callbacks: {
                            onInit: function () {
                                var $this = $(this);
                                $("#si").text("true");
                                setTimeout(function () {
                                    $this.addClass("scroller-ready");
                                }, 300); //optional timeout
                            }
                        }
                    });

                });
            })(jQuery);
        </script>


        <!-- Custom and plugin javascript -->
        <script src="<?php echo base_url() . 'js/inspinia.js' ?>"></script>


</body>

</html>

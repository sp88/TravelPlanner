<!--Head-->
<?php include_once('templates/head.php'); ?>
<!--End of Head-->

<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/style4189.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/responsive4189.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/images4189.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/color4189.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/custom3cf4.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/jquery.raty.css') ?>"/>

<style type="text/css">
    body {
        padding-top: 40px;
    }

    .gray-bg{
        /*background-color: #FFF;*/
    }

    /* Footer Styles */
    footer {
        margin: 50px 0;
    }
    /* Responsive Styles */
    @media(max-width:991px) {
    }
    @media(max-width:767px) {
    }

    .glyphicon { margin-right:10px; }
    .panel-body { padding:0px; }
    .panel-body table tr td { padding-left: 15px }
    .panel-body .table {margin-bottom: 0px; }

</style>


<body class="gray-bg">

    <!--Top Navbar-->
    <?php include_once('templates/default_top_navbar.php'); ?>
    <!--End of Top Navbar-->


    <!--Page Title-->
    <div class="row">
        <div class="container">
            <h1 class="page-header" style="margin-top: 20px; margin-bottom: 0px;"><!--DestinationName, Province, Country--></h1>
        </div>
    </div>
    <!--End of the Page Title-->

    <section class="no-rtl">
        <!-- Map Wrapper -->
        <div class="row" id="map-wrapper">
            <div class="col-md-12">
                <div id="map_canvas" style="width: 100%; height: 500px;"></div>
            </div>
        </div>
        <!-- /Map Wrapper -->



        <!-- Industries Tabs -->
        <div class="row" id="industries-tabs">

            <div class="container" >

                <div class="col-md-4" style="text-align: center;">
                    <span class="ttd_label">Near by places In Colombo</span>
                </div>

                <div class="col-md-8">

                    <ul class="industries-tabs box-container">
                        <!--<li class=""><a id="all" title="All" style="border: 1px solid #f25022; background-color: #f25022;"><i class="fa fa-flag-checkered"></i></a></li>-->
                        <li class=""><a id="shopping_mall" title="Shopping Malls" style="border: 1px solid #00bcf2; background-color: #00bcf2;"><i class="fa fa-star"></i></a></li>
                        <li class=""><a id="grocery_or_supermarket" title="Groceries & Supermarkets" style="border: 1px solid #ea3e23; background-color: #ea3e23;"><i class="fa fa-plane"></i></a></li>
                        <li class=""><a id="restaurant" title="Restaurants" style="border: 1px solid #68217a; background-color: #68217a;"><i class="fa fa-tachometer"></i></a></li>
                        <li class=""><a id="cafe" title="Cafes" style="border: 1px solid #0f7b0f; background-color: #0f7b0f;"><i class="fa fa-users"></i></a></li>
                        <li class=""><a id="bar" title="Bars" style="border: 1px solid #1570a6; background-color: #1570a6;"><i class="fa fa-magic"></i></a></li>
                        <li class=""><a id="clothing_store" title="Clothing Stores" style="border: 1px solid #39a65b; background-color: #39a65b;"><i class="fa fa-leaf"></i></a></li>
                        <li class=""><a id="jewelry_store" title="Jewelry Stores" style="border: 1px solid #f25022; background-color: #f25022;"><i class="fa fa-cogs"></i></a></li>
                        <li class=""><a id="movie_theater" title="Movie Theaters" style="border: 1px solid #7fba00; background-color: #7fba00;"><i class="fa fa-book"></i></a></li>
                        <li class=""><a id="night_club" title="Night Clubs" style="border: 1px solid #2338a1; background-color: #2338a1;"><i class="fa fa-wrench"></i></a></li>
                        <li class=""><a id="art_gallery" title="Art Galleries" style="border: 1px solid #ea3e23; background-color: #ea3e23;"><i class="fa fa-briefcase"></i></a></li>
                        <!--<li class=""><a id="park" title="Parks" style="border: 1px solid #68217a; background-color: #68217a;"><i class="fa fa-envelope"></i></a></li>-->
                        <li class=""><a id="spa" title="Spa" style="border: 1px solid #750000; background-color: #750000;"><i class="fa fa-home"></i></a></li>
                        <li class=""><a id="train_station" title="Train Stations" style="border: 1px solid #1570a6; background-color: #1570a6;"><i class="fa fa-coffee"></i></a></li>
                        <li class=""><a id="travel_agency" title="Travel Agencies" style="border: 1px solid #ffb802; background-color: #ffb802;"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>

                </div>


            </div>

        </div>
        <!-- /Industries Tabs -->



    </section>
    <!-- /Section Wrapper -->




    <!-- Page Content -->
    <div class="container">

        <!--Destination Information Section-->
        <div class="row" style="margin-top: 20px;">

            <!--Left Side Navigation-->
            <div class="col-md-3">

                <div class="row">

                    <div class="col-md-12">

                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                                            </span>Overview of Colombo</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-thumb-tack text-primary"></span><a href="#">About Destination</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-flash text-success"></span><a href="#">Recommended  Places</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-file text-info"></span><a href="#">Nearby Restaurants</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-comment text-success"></span><a href="#">Reviews</a>
                                                    <span class="badge">42</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                                            </span>Related Tours & Activities</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr><td><a href="#">Water Activities</a></td></tr>
                                            <tr><td><a href="#">Outdoor Activity</a></td></tr>
                                            <tr><td><a href="#">Shopping</a></td></tr>
                                            <tr><td><a href="#">Theater & Concerts</a></td></tr>
                                            <tr><td><a href="#">Spas & Wellness</a></td></tr>
                                            <tr><td><a href="#">Night Life</a></td></tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
<!--                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                                            </span>Nearby Cities</a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr><td><a href="#">Kalutara</a></td></tr>
                                            <tr><td><a href="#">Negombo</a></td></tr>
                                            <tr><td><a href="#">Dehiwala-Mount Lavinia</a></td></tr>
                                        </table>
                                    </div>
                                </div>
                            </div>-->

                        </div>

                    </div>

                </div>

                <div class="row">



                    <!--Weather Widget-->
                    <div class="col-md-12">

                        <style type="text/css" >
                            .vk_c{
                                display: block;
                                height: 300px;
                                padding: 15px;
                                background-color: #fff;
                                position: relative;
                                -webkit-box-shadow: 0px 1px 4px 0px rgba(0,0,0,0.2);
                                box-shadow: 0px 1px 4px 0px rgba(0,0,0,0.2);
                            }
                            .vk_h{
                                display: block;
                                font-family: arial,sans-serif-light,sans-serif;
                                font-size: x-large !important;
                                font-weight: lighter !important;
                                color: #878787 !important;
                            }
                            .vk_sh{
                                display: block;
                                font-family: arial,sans-serif-light,sans-serif;
                                font-size: medium !important;
                                font-weight: lighter !important;
                                color: #878787 !important;
                            }
                            .vk_bk {
                                color: #212121 !important;
                            }
                            .vk_gy {
                                color: #878787 !important;
                            }
                        </style>

                        <div class="vk_c" id="wob_wc">

                            <!--Current Weather Conditions-->
                            <div class="row">
                                <div class="col-md-7" style="padding-right: 10px;">
                                    <div class="vk_h" id="owm_name">N/A</div>
                                    <div class="vk_sh" id="owm_dateTime">Sunday 12:00 PM</div>
                                    <div id="wob_dcp"><span class="vk_gy vk_sh" id="owm_cloud">N/A</span></div>
                                    <div>Humidity: <span id="owm_humidity">0 %</span></div>
                                    <div>Wind: <span><span class="wob_t" id="owm_wind">0 m/s</span></span></div>
                                </div>
                                <div class="col-md-5">
                                    <img style="float:left;height:64px;width:64px;" alt="Img" id="owm_image" >
                                    <div class="vk_bk sol-tmp" style="float:left;margin-top:-3px; margin-left: 10px;">
                                        <span class="wob_t" id="owm_temp" style="display:inline;font-size:50px;">0</span>
                                        <div class="vk_bk wob-unit" style="font-size:16px;margin-top:-70px; margin-left: 55px; height: 10px;">
                                            <span class="wob_t" style="display:inline" aria-label="°Celsius">°C</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of the Current Weather Conditions-->
                            <hr>
                            <!--Forecast Weather-->
                            <div class="row" style="text-align: center;">

                                <div class="wob_df wob_ds" style="display:inline-block;line-height:1;text-align:center;-webkit-transition-duration:200ms,200ms,200ms;-webkit-transition-property:background-image,border,font-weight;font-weight:13px;height:90px;width:61px">
                                    <div class="vk_lgy" style="padding-top:7px;line-height:15px" aria-label="Sunday">Sat</div>
                                    <div style="display:inline-block">
                                        <img style="margin:1px 4px 0;height:48px;width:48px" alt="Thunderstorm" src="//ssl.gstatic.com/onebox/weather/48/thunderstorms.png">
                                    </div>
                                    <div style="font-weight:normal;line-height:15px;font-size:13px">
                                        <div class="vk_gy" style="display:inline-block;padding-right:5px">
                                            <span class="wob_t" style="display:inline">26 °C</span>
                                        </div>
                                    </div>
                                    <div style="font-weight:normal;line-height:15px;font-size:13px">
                                        <div class="vk_gy" style="display:inline-block;padding-right:5px">
                                            <span class="wob_t" style="display:inline">68 %</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="wob_df wob_ds" style="display:inline-block;line-height:1;text-align:center;-webkit-transition-duration:200ms,200ms,200ms;-webkit-transition-property:background-image,border,font-weight;font-weight:13px;height:90px;width:61px">
                                    <div class="vk_lgy" style="padding-top:7px;line-height:15px" aria-label="Sunday">Sun</div>
                                    <div style="display:inline-block">
                                        <img style="margin:1px 4px 0;height:48px;width:48px" alt="Thunderstorm" src="//ssl.gstatic.com/onebox/weather/48/thunderstorms.png">
                                    </div>
                                    <div style="font-weight:normal;line-height:15px;font-size:13px">
                                        <div class="vk_gy" style="display:inline-block;padding-right:5px">
                                            <span class="wob_t" style="display:inline">27 °C</span>
                                        </div>
                                    </div>
                                    <div style="font-weight:normal;line-height:15px;font-size:13px">
                                        <div class="vk_gy" style="display:inline-block;padding-right:5px">
                                            <span class="wob_t" style="display:inline">65 %</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="wob_df wob_ds" style="display:inline-block;line-height:1;text-align:center;-webkit-transition-duration:200ms,200ms,200ms;-webkit-transition-property:background-image,border,font-weight;font-weight:13px;height:90px;width:61px">
                                    <div class="vk_lgy" style="padding-top:7px;line-height:15px" aria-label="Sunday">Mon</div>
                                    <div style="display:inline-block">
                                        <img style="margin:1px 4px 0;height:48px;width:48px" alt="Thunderstorm" src="//ssl.gstatic.com/onebox/weather/48/thunderstorms.png">
                                    </div>
                                    <div style="font-weight:normal;line-height:15px;font-size:13px">
                                        <div class="vk_gy" style="display:inline-block;padding-right:5px">
                                            <span class="wob_t" style="display:inline">29 °C</span>
                                        </div>
                                    </div>
                                    <div style="font-weight:normal;line-height:15px;font-size:13px">
                                        <div class="vk_gy" style="display:inline-block;padding-right:5px">
                                            <span class="wob_t" style="display:inline">64 %</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="wob_df wob_ds" style="display:inline-block;line-height:1;text-align:center;-webkit-transition-duration:200ms,200ms,200ms;-webkit-transition-property:background-image,border,font-weight;font-weight:13px;height:90px;width:61px">
                                    <div class="vk_lgy" style="padding-top:7px;line-height:15px" aria-label="Sunday">Tue</div>
                                    <div style="display:inline-block">
                                        <img style="margin:1px 4px 0;height:48px;width:48px" alt="Thunderstorm" src="//ssl.gstatic.com/onebox/weather/48/thunderstorms.png">
                                    </div>
                                    <div style="font-weight:normal;line-height:15px;font-size:13px">
                                        <div class="vk_gy" style="display:inline-block;padding-right:5px">
                                            <span class="wob_t" style="display:inline">25 °C</span>
                                        </div>
                                    </div>
                                    <div style="font-weight:normal;line-height:15px;font-size:13px">
                                        <div class="vk_gy" style="display:inline-block;padding-right:5px">
                                            <span class="wob_t" style="display:inline">63 %</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--End of the Forecast Weather-->

                        </div>
                    </div>
                    <!--End of the Weather Widget-->



                </div>


                <div class="row">

                    <style type="text/css">

                        .list-places{
                            display: -webkit-flex;
                            display: -ms-flexbox;
                            display: flex;

                            -webkit-flex-wrap: wrap;
                            -ms-flex-wrap: wrap;
                            flex-wrap: wrap;
                        }
                        .list-places .place-wrapper .img-place img {
                            width: 100%;
                            -webkit-transition: all 2.75s cubic-bezier(0, 0.83, 0.17, 1);
                            -moz-transition: all 2.75s cubic-bezier(0, 0.83, 0.17, 1);
                            -o-transition: all 2.75s cubic-bezier(0, 0.83, 0.17, 1);
                            transition: all 2.75s cubic-bezier(0, 0.83, 0.17, 1);
                        }
                        .list-places .place-wrapper:hover .img-place img {
                            opacity: .2;
                            -webkit-transform: scale(1.4, 1.4);
                            -moz-transform: scale(1.4, 1.4);
                            -ms-transform: scale(1.4, 1.4);
                            -o-transform: scale(1.4, 1.4);
                            transform: scale(1.4, 1.4);
                        }
                        .widget-features-wrapper .place-wrapper .img-place img {
                            height: 70px;
                        }

                        .list-places .place-wrapper .place-detail-wrapper {
                            padding: 15px;
                            display: block;
                            background-color: #fff;
                        }
                        .list-places .place-wrapper .place-detail-wrapper h2.title-place {
                            margin: 0 0 5px;
                            color: #434b63;
                            font-size: 16px;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            -o-text-overflow: ellipsis;
                            white-space: nowrap;
                            line-height: 1.3;
                        }
                        .list-places .place-wrapper .place-detail-wrapper span.address-place {
                            color: #6f7d95;
                            font-size: 12px;
                            display: block;
                            margin-bottom: 10px;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            -o-text-overflow: ellipsis;
                            white-space: nowrap;
                        }
                        .list-places .place-wrapper .place-detail-wrapper span.address-place i {
                            display: inline-block;
                            margin-right: 5px;
                        }
                        .list-places.fullwidth .place-wrapper .img-place {
                            width: 200px;
                            max-height: 150px;
                            float: left;
                            overflow: hidden;
                        }
                        .list-places.fullwidth .place-wrapper .place-detail-wrapper {
                            overflow: hidden;
                            height: 150px;
                            padding: 25px 20px;
                            position: relative;
                        }
                        .list-places.fullwidth .place-wrapper .place-detail-wrapper h2.title-place {
                            width: 75%;
                        }
                        .widget-features-wrapper .list-places.fullwidth .place-wrapper .img-place {
                            width: 70px;
                            overflow: inherit;
                            overflow:hidden;
                        }
                        .widget-features-wrapper .list-places.fullwidth .place-wrapper .place-detail-wrapper h2.title-place a {
                            font-size: 14px;
                            font-weight: 400;
                        }
                        .widget-features-wrapper .list-places.fullwidth .place-wrapper .place-detail-wrapper {
                            height: 70px;
                            padding: 5px 10px;
                        }
                        .widget-features-wrapper .list-places.fullwidth > li {
                            min-height: inherit;
                            margin-bottom: 5px;
                            width: 100%;
                        }
                        .rate-tDest{
                            margin-top: -10px;
                        }

                    </style>

                    <div class="col-md-12">

                        <h2>Popular Attractions</h2>
                        <hr style="margin: 0px;">

                        <div data-thumb="small_post_thumbnail" class="widget-features-wrapper">
                            <ul data-thumb="small_post_thumbnail" class=" list-places fullwidth" data-list="event">
                                <li class="post-item">
                                    <div class="place-wrapper">

                                        <a href="#" class="img-place" title="Bertrand at Mister A&#8217;s">
                                            <img src="<?php echo base_url(); ?>img/83-70x65.jpg" alt="Bertrand at Mister A&#8217;s" title="Bertrand at Mister A&#8217;s">
                                        </a>
                                        <div class="place-detail-wrapper">
                                            <h2 class="title-place"><a href="#">Bertrand at Mister A&#8217;s</a></h2>
                                            <span class="address-place"><i class="fa fa-map-marker"></i>2550 Fifth Avenue </span>
                                            <div class="rate-tDest" data-score="">
                                                <div class="readOnly"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post-item">
                                    <div class="place-wrapper">

                                        <a href="#" class="img-place" title="Acquerello">
                                            <img src="<?php echo base_url(); ?>img/72-70x65.jpg" alt="Acquerello" title="Acquerello">
                                        </a>
                                        <div class="place-detail-wrapper">
                                            <h2 class="title-place"><a href="#">Acquerello</a></h2>
                                            <span class="address-place"><i class="fa fa-map-marker"></i>1722 Sacramento St. </span>
                                            <div class="rate-tDest" data-score="">
                                                <div class="readOnly"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post-item">
                                    <div class="place-wrapper">

                                        <a href="#" class="img-place" title="Akasaka Kikunoi">
                                            <img src="<?php echo base_url(); ?>img/31-70x65.jpg" alt="Akasaka Kikunoi" title="Akasaka Kikunoi">
                                        </a>
                                        <div class="place-detail-wrapper">
                                            <h2 class="title-place"><a href="#">Akasaka Kikunoi</a></h2>
                                            <span class="address-place"><i class="fa fa-map-marker"></i>6-13-8 Akasaka, Minato-ku </span>
                                            <div class="rate-tDest" data-score="">
                                                <div class="readOnly"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post-item">
                                    <div class="place-wrapper">

                                        <a href="#" class="img-place" title="Nihon Ryori Ryugin">
                                            <img src="<?php echo base_url(); ?>img/42-70x65.jpg" alt="Nihon Ryori Ryugin" title="Nihon Ryori Ryugin">
                                        </a>
                                        <div class="place-detail-wrapper">
                                            <h2 class="title-place"><a href="#">Nihon Ryori Ryugin</a></h2>
                                            <span class="address-place"><i class="fa fa-map-marker"></i>7-17-24 Roppongi </span>
                                            <div class="rate-tDest" data-score="">
                                                <div class="readOnly"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post-item">
                                    <div class="place-wrapper">

                                        <a href="#" class="img-place" title="Kozue">
                                            <img src="<?php echo base_url(); ?>img/38-70x65.jpg" alt="Kozue" title="Kozue">
                                        </a>
                                        <div class="place-detail-wrapper">
                                            <h2 class="title-place"><a href="#">Kozue</a></h2>
                                            <span class="address-place"><i class="fa fa-map-marker"></i>3-7-1-2 Nishi-Shinjuku </span>
                                            <div class="rate-tDest" data-score="">
                                                <div class="readOnly"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post-item">
                                    <div class="place-wrapper">

                                        <a href="#" class="img-place" title="Pierre Gagnaire">
                                            <img src="<?php echo base_url(); ?>img/26-70x65.png" alt="Pierre Gagnaire" title="Pierre Gagnaire">
                                        </a>
                                        <div class="place-detail-wrapper">
                                            <h2 class="title-place"><a href="#">Pierre Gagnaire</a></h2>
                                            <span class="address-place"><i class="fa fa-map-marker"></i>6, rue Balzac </span>
                                            <div class="rate-tDest" data-score="">
                                                <div class="readOnly"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                            </ul>

                        </div>

                    </div>


                </div>

            </div>
            <!--End of the Left Side Navigation-->

            <!--Right Side Info Content-->
            <div class="col-md-9">

                <div class="row" style="padding-right: 15px;">

                    <div class="ibox-title">
                        <h5>Overview of Colombo</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>

                        </div>
                    </div>
                    <div class="ibox-content" style="padding: 40px; padding-top: 10px;"> 
                        <div class="row" >
                            <h3 class="desc_title"><!--Description Title--></h3>
                            <!--<hr style="margin-top: 0px;">-->
                            <p class="dest_description" style="text-indent: 50px; text-align: justify;"><!--About Destination--></p>
                        </div>


                        <div class="row">
                            <h3>Recommended Attractions in Colombo</h3>
                            <hr style="margin-top: 0px; margin-bottom: 5px;">

                            <style type="text/css">

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
                                }

                                .col-item .info
                                {
                                    padding: 5px 10px 10px 10px;
                                    border-radius: 0 0 5px 5px;
                                    margin-top: 1px;
                                }

                                .col-item:hover .info {
                                    background-color: #f4f5f6;
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
                                    margin-top: 5px;
                                    border-top: 1px solid #E1E1E1;
                                }

                                .clear-left
                                {
                                    clear: left;
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
                                .col-item .btn-add
                                {
                                    width: 50%;
                                    float: left;
                                }

                                .col-item .btn-add
                                {
                                    border-right: 1px solid #E1E1E1;
                                }

                                .col-item .btn-details
                                {
                                    width: 50%;
                                    float: left;
                                    padding-left: 10px;
                                }
                                .controls
                                {
                                    margin-bottom: 5px;
                                }
                                [data-slide="prev"]
                                {
                                    margin-right: 10px;
                                }



                            </style>

                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Controls -->
                                    <div class="controls pull-right">
                                        <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                                           data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                                           data-slide="next"></a>
                                    </div>
                                </div>
                            </div>

                            <div id="carousel-example" class="carousel slide" >
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="col-item">
                                                    <div class="photo">
                                                        <img src="<?php echo base_url(); ?>img/attractions/colombo_Gangaramaya Buddhist Temple.jpg" class="img-responsive" alt="a" />
                                                    </div>
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-12">
                                                                <h5>Gangaramaya Buddhist Temple</h5>
                                                                <span class="address-place"><i class="fa fa-map-marker"></i> Sri Jinarathana Rd, Colombo </span>
                                                                <div class="readOnly"></div>
                                                            </div>
                                                        </div>
                                                        <div class="separator clear-left">
                                                            <p class="btn-add">
                                                                <a href="#" title="Add to Map"><i class="fa fa-thumb-tack"></i> Add to Map</a></p>
                                                            <p class="btn-details">
                                                                <a href="#" title="More Info"><i class="fa fa-external-link"></i> More Info</a></p>
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="col-item">
                                                    <div class="photo">
                                                        <img src="<?php echo base_url(); ?>img/attractions/colombo_Kelaniya Raja Maha Vihara.jpg" class="img-responsive" alt="a" />
                                                    </div>
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-12">
                                                                <h5>Kelaniya Raja Maha Vihara</h5>
                                                                <span class="address-place"><i class="fa fa-map-marker"></i> Kelaniya, Colombo </span>
                                                                <div class="readOnly"></div>
                                                            </div>
                                                        </div>
                                                        <div class="separator clear-left">
                                                            <p class="btn-add">
                                                                <a href="#" title="Add to Map"><i class="fa fa-thumb-tack"></i> Add to Map</a></p>
                                                            <p class="btn-details">
                                                                <a href="#" title="More Info"><i class="fa fa-external-link"></i> More Info</a></p>
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="col-item">
                                                    <div class="photo">
                                                        <img src="<?php echo base_url(); ?>img/attractions/colombo_Mount Lavinia.jpg" class="img-responsive" alt="a" />
                                                    </div>
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-12">
                                                                <h5>Mount Lavinia</h5>
                                                                <span class="address-place"><i class="fa fa-map-marker"></i> Dehiwala-Mount Lavinia </span>
                                                                <div class="readOnly"></div>
                                                            </div>
                                                        </div>
                                                        <div class="separator clear-left">
                                                            <p class="btn-add">
                                                                <a href="#" title="Add to Map"><i class="fa fa-thumb-tack"></i> Add to Map</a></p>
                                                            <p class="btn-details">
                                                                <a href="#" title="More Info"><i class="fa fa-external-link"></i> More Info</a></p>
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--                                            <div class="col-sm-3">
                                                                                            <div class="col-item">
                                                                                                <div class="photo">
                                                                                                    <img src="<?php echo base_url(); ?>img/attractions/colombo_National Museum.jpg" class="img-responsive" alt="a" />
                                                                                                </div>
                                                                                                <div class="info">
                                                                                                    <div class="row">
                                                                                                        <div class="price col-md-12">
                                                                                                            <h5>National Museum of Colombo</h5>
                                                                                                            <div class="readOnly"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="separator clear-left">
                                                                                                        <p class="btn-add">
                                                                                                            <a href="#" title="Add to Map"><i class="fa fa-thumb-tack fa-lg"></i></a></p>
                                                                                                        <p class="btn-details">
                                                                                                            <a href="#" title="More Info"><i class="fa fa-external-link fa-lg"></i></a></p>
                                                                                                    </div>
                                                                                                    <div class="clearfix">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>-->



                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="col-item">
                                                    <div class="photo">
                                                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                                    </div>
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-12">
                                                                <h5>National Museum of Colombo</h5>
                                                                <div class="readOnly"></div>
                                                            </div>
                                                        </div>
                                                        <div class="separator clear-left">
                                                            <p class="btn-add">
                                                                <a href="#" title="Add to Map"><i class="fa fa-thumb-tack fa-lg"></i></a></p>
                                                            <p class="btn-details">
                                                                <a href="#" title="More Info"><i class="fa fa-external-link fa-lg"></i></a></p>
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="col-item">
                                                    <div class="photo">
                                                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                                    </div>
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-12">
                                                                <h5>National Museum of Colombo</h5>
                                                                <div class="readOnly"></div>
                                                            </div>
                                                        </div>
                                                        <div class="separator clear-left">
                                                            <p class="btn-add">
                                                                <a href="#" title="Add to Map"><i class="fa fa-thumb-tack fa-lg"></i></a></p>
                                                            <p class="btn-details">
                                                                <a href="#" title="More Info"><i class="fa fa-external-link fa-lg"></i></a></p>
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="col-item">
                                                    <div class="photo">
                                                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                                    </div>
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-12">
                                                                <h5>National Museum of Colombo</h5>
                                                                <div class="readOnly"></div>
                                                            </div>
                                                        </div>
                                                        <div class="separator clear-left">
                                                            <p class="btn-add">
                                                                <a href="#" title="Add to Map"><i class="fa fa-thumb-tack fa-lg"></i></a></p>
                                                            <p class="btn-details">
                                                                <a href="#" title="More Info"><i class="fa fa-external-link fa-lg"></i></a></p>
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="col-item">
                                                    <div class="photo">
                                                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                                    </div>
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-12">
                                                                <h5>National Museum of Colombo</h5>
                                                                <div class="readOnly"></div>
                                                            </div>
                                                        </div>
                                                        <div class="separator clear-left">
                                                            <p class="btn-add">
                                                                <a href="#" title="Add to Map"><i class="fa fa-thumb-tack fa-lg"></i></a></p>
                                                            <p class="btn-details">
                                                                <a href="#" title="More Info"><i class="fa fa-external-link fa-lg"></i></a></p>
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!--End of the Recomendation -->


                        <div class="row">&nbsp;</div>

                        <div class="row">
                            <h3>Nearby Restaurants</h3>
                            <hr style="margin-top: 0px;">


                            <div data-thumb="big_post_thumbnail" class="row list-wrapper  ">
                                <ul data-thumb="big_post_thumbnail" class=" list-places " data-list="event">
                                    <li id="post-348" class="col-md-3 col-xs-6 place-item post-348 place type-place status-publish has-post-thumbnail hentry review_criteria-comfotable review_criteria-food review_criteria-location review_criteria-view place_category-family-style location-usa">
                                        <div class="place-wrapper">
                                            <!-- button event for admin control  -->
                                            <ol class="edit-place-option">
                                                <li style="display:inline-block"><a href="#edit_place" class="action edit" data-target="#" data-action="edit"><i class="fa fa-thumb-tack"></i></a>
                                                </li>
                                                <li style="display:inline-block"><a href="#" class="action archive" data-action="archive"><i class="fa fa-external-link"></i></a>
                                                </li>

                                            </ol>
                                            <!--// button event for admin control  -->

                                            <a href="#" class="img-place" title="Bertrand at Mister A&#8217;s">
                                                <img src="<?php echo base_url(); ?>img/83-270x280.jpg" alt="Bertrand at Mister A&#8217;s" title="Bertrand at Mister A&#8217;s">
                                                <div class="cat-58">
                                                    <div class="ribbon">
                                                        <span class="ribbon-content" title="Discount 5%">Discount 5%</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="place-detail-wrapper">
                                                <h2 class="title-place">
                                                    <a href="#" title="Bertrand at Mister A&#8217;s">Bertrand at Mister A&#8217;s</a>
                                                </h2>
                                                <span class="address-place"><i class="fa fa-map-marker"></i> 2550 Fifth Avenue </span>
                                                <div class="readOnly"></div>

                                            </div>
                                        </div>
                                    </li>
                                    <li id="post-333" class="col-md-3 col-xs-6 place-item post-333 place type-place status-publish has-post-thumbnail hentry review_criteria-comfotable review_criteria-food review_criteria-view place_category-pop-up-restaurant location-usa">
                                        <div class="place-wrapper">
                                            <!-- button event for admin control  -->
                                            <ol class="edit-place-option">
                                                <li style="display:inline-block"><a href="#edit_place" class="action edit" data-target="#" data-action="edit"><i class="fa fa-thumb-tack"></i></a>
                                                </li>
                                                <li style="display:inline-block"><a href="#" class="action archive" data-action="archive"><i class="fa fa-external-link"></i></a>
                                                </li>

                                            </ol>
                                            <!--// button event for admin control  -->

                                            <a href="#" class="img-place" title="Acquerello">
                                                <img src="<?php echo base_url(); ?>img/72-270x280.jpg" alt="Acquerello" title="Acquerello">
                                                <div class="cat-64">
                                                    <div class="ribbon">
                                                        <span class="ribbon-content" title="Discount 20%">Discount 20%</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="place-detail-wrapper">
                                                <h2 class="title-place">
                                                    <a href="#" title="Acquerello">Acquerello</a>
                                                </h2>
                                                <span class="address-place"><i class="fa fa-map-marker"></i> 1722 Sacramento St. </span>
                                                <div class="readOnly"></div>

                                            </div>
                                        </div>
                                    </li>
                                    <li id="post-207" class="col-md-3 col-xs-6 place-item post-207 place type-place status-publish has-post-thumbnail hentry review_criteria-ambiance review_criteria-comfotable review_criteria-food place_category-fine-dining location-japan">
                                        <div class="place-wrapper">
                                            <!-- button event for admin control  -->
                                            <ol class="edit-place-option">
                                                <li style="display:inline-block"><a href="#edit_place" class="action edit" data-target="#" data-action="edit"><i class="fa fa-thumb-tack"></i></a>
                                                </li>
                                                <li style="display:inline-block"><a href="#" class="action archive" data-action="archive"><i class="fa fa-external-link"></i></a>
                                                </li>

                                            </ol>
                                            <!--// button event for admin control  -->

                                            <a href="#" class="img-place" title="Akasaka Kikunoi">
                                                <img src="<?php echo base_url(); ?>img/67-270x280.jpg" alt="Akasaka Kikunoi" title="Akasaka Kikunoi">
                                                <div class="cat-59">
                                                    <div class="ribbon">
                                                        <span class="ribbon-content" title="Discount 10%">Discount 10%</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="place-detail-wrapper">
                                                <h2 class="title-place">
                                                    <a href="#" title="Akasaka Kikunoi">Akasaka Kikunoi</a>
                                                </h2>
                                                <span class="address-place"><i class="fa fa-map-marker"></i> 6-13-8 Akasaka, Minato-ku </span>
                                                <div class="readOnly"></div>

                                            </div>
                                        </div>
                                    </li>
                                    <li id="post-163" class="col-md-3 col-xs-6 place-item post-163 place type-place status-publish has-post-thumbnail hentry review_criteria-authenticity review_criteria-comfotable review_criteria-food place_category-bakery-cafes location-japan">
                                        <div class="place-wrapper">
                                            <!-- button event for admin control  -->
                                            <ol class="edit-place-option">
                                                <li style="display:inline-block"><a href="#edit_place" class="action edit" data-target="#" data-action="edit"><i class="fa fa-thumb-tack"></i></a>
                                                </li>
                                                <li style="display:inline-block"><a href="#" class="action archive" data-action="archive"><i class="fa fa-external-link"></i></a>
                                                </li>

                                            </ol>
                                            <!--// button event for admin control  -->

                                            <a href="#" class="img-place" title="Nihon Ryori Ryugin">
                                                <img src="<?php echo base_url(); ?>img/42-270x280.jpg" alt="Nihon Ryori Ryugin" title="Nihon Ryori Ryugin">
                                                <div class="cat-57">
                                                    <div class="ribbon">
                                                        <span class="ribbon-content" title="Discount 5%">Discount 5%</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="place-detail-wrapper">
                                                <h2 class="title-place">
                                                    <a href="#" title="Nihon Ryori Ryugin">Nihon Ryori Ryugin</a>
                                                </h2>
                                                <span class="address-place"><i class="fa fa-map-marker"></i> 7-17-24 Roppongi </span>
                                                <div class="readOnly"></div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                        </div>






                        <div class="row">

                            <h3>Reviews</h3>
                            <hr style="margin-top: 0px;">


                            <div class="row comment-block">
                                <ul class="list-place-review">
                                    <li class="col-md-4 col-sm-6 review-item" id="review-50">
                                        <div class="place-review">
                                            <div class="place-review-top-wrapper">
                                                <div class="place-review-top">
                                                    <h2>
                                                        <a href="blog/place/lastrance/index.html#comment-50">L'Astrance</a>
                                                    </h2>
                                                    <span class="address-place">
                                                        <i class="fa fa-map-marker"></i> 4, rue Beethoven                 </span>
                                                    <span class="number-comment"><i class="fa fa-comments"></i>&nbsp;1</span>
                                                </div>
                                            </div>
                                            <div class="place-image-wrapper">
                                                <!-- button event for admin control  -->
                                                <img src="<?php echo base_url(); ?>img/31-255x160.jpg" alt="L'Astrance" title="L'Astrance">
                                            </div>
                                            <div class="place-review-bottom-wrapper">
                                                <div class="place-review-bottom">

                                                    <a href="author/scara/index.html" title="Vic Scara" class="name-author">Vic Scara</a>
                                                    <span class="quote">
                                                        <img src="<?php echo base_url(); ?>img/quote.png" alt="quote">
                                                        One of our prime directives here at Weekend Mission Control has long been to find and review a Proper French Restaurant or PFR                </span>
                                                    <div class="time">
                                                        <span style="display:inline-block;">
                                                            <i class="fa fa-clock-o"></i> on January 16, 2015                    </span>
                                                        <!-- rating -->
                                                        <div class="rate-it" style="display: inline-block; margin-left: 5px;" data-score="5"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-sm-6 review-item" id="review-49">
                                        <div class="place-review">
                                            <div class="place-review-top-wrapper">
                                                <div class="place-review-top">
                                                    <h2>
                                                        <a href="blog/place/bertrand-at-mister-as/index.html#comment-49">Bertrand at Mister A's</a>
                                                    </h2>
                                                    <span class="address-place">
                                                        <i class="fa fa-map-marker"></i> 2550 Fifth Avenue                 </span>
                                                    <span class="number-comment"><i class="fa fa-comments"></i>&nbsp;1</span>
                                                </div>
                                            </div>
                                            <div class="place-image-wrapper">
                                                <!-- button event for admin control  -->
                                                <img src="<?php echo base_url(); ?>img/83-255x160.jpg" alt="Bertrand at Mister A's" title="Bertrand at Mister A's">
                                            </div>
                                            <div class="place-review-bottom-wrapper">
                                                <div class="place-review-bottom">

                                                    <a href="author/scara/index.html" title="Vic Scara" class="name-author">Vic Scara</a>
                                                    <span class="quote">
                                                        <img src="<?php echo base_url(); ?>img/quote.png" alt="quote">
                                                        I pick up the menu and try not to look at the spectral form of the man who broke my heart, framed against a blackened chimney straight out of Great Expectations. “Let me guess,” he says. “You couldn’t find anyone to go all the way to East Sussex with you so you had to resort to the rotter you used to go out with?”                </span>
                                                    <div class="time">
                                                        <span style="display:inline-block;">
                                                            <i class="fa fa-clock-o"></i> on January 16, 2015                    </span>
                                                        <!-- rating -->
                                                        <div class="rate-it" style="display: inline-block; margin-left: 5px;" data-score="4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-sm-6 review-item" id="review-48">
                                        <div class="place-review">
                                            <div class="place-review-top-wrapper">
                                                <div class="place-review-top">
                                                    <h2>
                                                        <a href="blog/place/nihon-ryori-ryugin/index.html#comment-48">Nihon Ryori Ryugin</a>
                                                    </h2>
                                                    <span class="address-place">
                                                        <i class="fa fa-map-marker"></i> 7-17-24 Roppongi                 </span>
                                                    <span class="number-comment"><i class="fa fa-comments"></i>&nbsp;1</span>
                                                </div>
                                            </div>
                                            <div class="place-image-wrapper">
                                                <!-- button event for admin control  -->
                                                <img src="<?php echo base_url(); ?>img/42-255x160.jpg" alt="Nihon Ryori Ryugin" title="Nihon Ryori Ryugin">
                                            </div>
                                            <div class="place-review-bottom-wrapper">
                                                <div class="place-review-bottom">
                                                    <a href="#" title="Demi Rossi" class="name-author">Demi Rossi</a>
                                                    <span class="quote">
                                                        <img src="<?php echo base_url(); ?>img/quote.png" alt="quote">
                                                        It's not just meat at Crib de Rib. The restaurant also does cocktails. Serious cocktails. They’ve hired mixologist Bastien Dupuy, who has created a jam-packed menu of classics with a twist.                </span>
                                                    <div class="time">
                                                        <span style="display:inline-block;">
                                                            <i class="fa fa-clock-o"></i> on January 16, 2015                    </span>
                                                        <!-- rating -->
                                                        <div class="rate-it" style="display: inline-block; margin-left: 5px;" data-score="5"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>



                                </ul>


                            </div>





                        </div>



                    </div>
                </div>

            </div>
            <!--End of the Right Side Info Content-->
        </div>
        <!-- End of the Destination Information Section-->


        <!-- Features Section -->
        <div class="row">



        </div>
        <!-- /.row -->

        <hr>




        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->






    <!-- Mainly scripts -->
    <script src="<?php echo base_url() . 'js/jquery-1.11.2.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'js/bootstrap.min.js' ?>"></script>

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>

    <script src="<?php echo base_url() . 'js/plugins/jquery-migrate.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'js/plugins/jquery-ui-1.10.4.custom.min.js' ?>"></script>



    <script src="<?php echo base_url() . 'js/plugins/jquery.raty.js' ?>"></script>


    <!-- Custom and plugin javascript -->
    <!--<script src="<?php // echo base_url() . 'js/inspinia.js'    ?>"></script>-->


    <script type="text/javascript">

        $('document').ready(function () {
            var dest_lat = "";
            var dest_lng = "";

            //Get Destination Name From URL Parameter
            var dest_wikiName = getParameterByName('dest_name');

            //Load Destination name, lat, lng & province
            $.ajax({
                url: '<?php echo base_url('destinations/load_destInfoPage'); ?>',
                type: "GET",
                data: {
                    'dest_wikiName': dest_wikiName
                },
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    if (data != "false") {
                        $.each(data, function (key, value) {
                            $('.page-header').text(value.dest_name + ', ' + value.province + ', Sri Lanka');
                            dest_lat = value.dest_lat;
                            dest_lng = value.dest_lng;
                        });
                        get_weatherData();
                        loadNearByPlacesMap();
                    }
                }
            }); //end of the ajax request

            //Load Destination abstract from Wiki
            $.ajax({
                url: '<?php echo base_url('destinations/get_wikiAbstract'); ?>',
                type: "GET",
                data: {
                    'dest_wikiName': dest_wikiName
                },
                success: function (data) {
                    if (data != "false") {
                        $('.dest_description').text(data);
                    } else {
                        $('.dest_description').text("Unable to Fetch Information...");
                    }
                }
            }); //end of the ajax request

            function get_weatherData() {

                //Load data for weather widget
                var owmUrl = "http://api.openweathermap.org/data/2.5/weather?lat=" + dest_lat + "&lon=" + dest_lng + "&units=metric";

                $.getJSON(owmUrl).then(function (data) {
                    $('#owm_name').text(data.name)
                    $('#owm_temp').text(data.main.temp)
                    $('#owm_image').attr("src", "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png")
                    var dt = new Date();
                    dateTime = dt.toString().split('GMT');
                    $('#owm_dateTime').text(dateTime[0]);
                    $('#owm_wind').text(data.wind.speed + " m/s");
                    $('#owm_cloud').text(data.weather[0].description);
                    $('#owm_humidity').text(data.main.humidity + "%");
                });

            }

            function loadNearByPlacesMap() {

                var map;
                var infowindow;
                var markersArray = [];
                var pyrmont = new google.maps.LatLng(dest_lat, dest_lng);
                var marker;

                var infowindow = new google.maps.InfoWindow();

                function initialize() {
                    map = new google.maps.Map(document.getElementById('map_canvas'), {
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        center: pyrmont,
                        zoom: 14
                    });
                    infowindow = new google.maps.InfoWindow();
                    //search_types();

                    var marker = new google.maps.Marker({
                        position: pyrmont,
                        map: map,
                        title: dest_wikiName
                    });

                }

                function createMarker(place, icon) {
                    var placeLoc = place.geometry.location;
                    var marker = new google.maps.Marker({
                        map: map,
                        position: place.geometry.location,
                        icon: icon,
                        visible: true

                    });

                    markersArray.push(marker);
                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.setContent("<b>Name:</b>" + place.name + "<br><b>Address:</b>" + place.vicinity + "<br><b>Type:</b>" + place.type + "<br><b>Rating:</b>" + place.rating + "<br><b>Id:</b>" + place.id);
                        infowindow.open(map, this);
                    });

                }

                function search_types(clickedType, latLng) {
                    clearOverlays();

                    var type = clickedType;
                    var icon = "<?php echo base_url(); ?>img/mapMarkers/" + type + ".png";

                    var request = {
                        location: latLng,
                        radius: 5000,
                        types: [type] //e.g. school, restaurant,bank,bar,city_hall,gym,night_club,park,zoo
                    };

                    var service = new google.maps.places.PlacesService(map);
                    service.search(request, function (results, status) {
                        map.setZoom(14);
                        if (status == google.maps.places.PlacesServiceStatus.OK) {
                            for (var i = 0; i < results.length; i++) {
                                results[i].html_attributions = '';
                                createMarker(results[i], icon);
                            }
                        }
                    });

                }


                // Deletes all markers in the array by removing references to them
                function clearOverlays() {
                    if (markersArray) {
                        for (i in markersArray) {
                            markersArray[i].setVisible(false)
                        }
                    }
                }
                google.maps.event.addDomListener(window, 'load', initialize);


                function showMap(nbType) {

//                    var imageUrl = 'http://chart.apis.google.com/chart?cht=mm&chs=24x32&chco=FFFFFF,008CFF,000000&ext=.png';
//                    var markerImage = new google.maps.MarkerImage(imageUrl, new google.maps.Size(24, 32));

                    var latlng = new google.maps.LatLng(dest_lat, dest_lng);
                    map.setZoom(14);
                    map.setCenter(latlng);
//                    marker = new google.maps.Marker({
//                        position: latlng,
//                        map: map,
//                        icon: markerImage,
//                        draggable: true
//
//                    });

//                    infowindow.open(map, marker);
                    search_types(nbType, latlng);
//                    google.maps.event.addListener(marker, 'click', function () {
//                        infowindow.open(map, marker);
//
//                    });

                }

                $('.industries-tabs li a').on("click", function () {
//                    alert(this.id);
                    showMap(this.id);
                });

            }// end of the load near by place map

            //Recomendation Ratings
            $('.readOnly').raty({readOnly: true, score: 3.5});

        }); //Endo of the documnet ready

        //Get Value form QueryString
        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                    results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

    </script>







</body>

</html>
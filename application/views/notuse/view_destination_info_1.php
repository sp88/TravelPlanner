<!--Head-->
<?php include_once('templates/head.php'); ?>
<!--End of Head-->

<style type="text/css">
    body {
        padding-top: 20px;
    }

    .gray-bg{
        background-color: #FFF;
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

    <!-- Page Content -->
    <div class="container">

        <!--Page Title-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><!--DestinationName, Province, Country--></h1>
            </div>
        </div>
        <!--End of the Page Title-->

        <!--Image Slider & Weather Widget-->
        <div class="row">
            <!--Carousel Image Slider-->
            <div class="col-lg-7">
                <div id="main-dest-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
<!--                    <ol class="carousel-indicators">
                        <li data-target="#main-dest-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#main-dest-carousel" data-slide-to="1"></li>
                        <li data-target="#main-dest-carousel" data-slide-to="2"></li>
                    </ol>-->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner main-dest-carousel-inner" role="listbox" >
<!--                        <div class="item active">
                            <img src="http://placehold.it/750x300&text=Slide One" alt="Slide1">
                            <div class="carousel-caption">
                                <h2>Caption 1</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://placehold.it/750x300&text=Slide Two" alt="Slide2">
                            <div class="carousel-caption">
                                <h2>Caption 2</h2>
                            </div>
                        </div>-->

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#main-dest-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#main-dest-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div> 
            <!--End of the Carousel Image Slider-->

            <!--Weather Widget-->
            <div class="col-lg-5">

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
                        <div class="col-md-6">
                            <div class="vk_h" id="wob_loc">Colombo</div>
                            <div class="vk_sh" id="wob_dts">Sunday 12:00 PM</div>
                            <div id="wob_dcp"><span class="vk_gy vk_sh" id="wob_dc">Partly Cloudy</span></div>
                        </div>
                        <div class="col-md-6">
                            <img style="float:left;height:64px;width:64px;" alt="Partly Cloudy" src="//ssl.gstatic.com/onebox/weather/64/partly_cloudy.png" id="wob_tci" >
                            <div class="vk_bk sol-tmp" style="float:left;margin-top:-3px; margin-left: 10px;">
                                <span class="wob_t" id="wob_tm" style="display:inline;font-size:50px;">31</span>
                                <div class="vk_bk wob-unit" style="font-size:16px;margin-top:-70px; margin-left: 55px; height: 10px;">
                                    <span class="wob_t" style="display:inline" aria-label="°Celsius">°C</span>
                                </div>
                            </div>
                            <div class="vk_sh" style="margin-top: 65px;">
                                <div>Humidity: <span id="wob_hm">68%</span></div>
                                <div>Wind:<span><span class="wob_t" id="wob_ws">8 km/h</span></span></div>
                            </div>

                        </div>
                    </div>
                    <!--End of the Current Weather Conditions-->
                    <hr>
                    <!--Forecast Weather-->
                    <div class="row" style="margin: 0 auto">

                        <div class="wob_df wob_ds" style="display:inline-block;line-height:1;text-align:center;-webkit-transition-duration:200ms,200ms,200ms;-webkit-transition-property:background-image,border,font-weight;font-weight:13px;height:90px;width:61px">
                            <div class="vk_lgy" style="padding-top:7px;line-height:15px" aria-label="Sunday">Sun</div>
                            <div style="display:inline-block">
                                <img style="margin:1px 4px 0;height:48px;width:48px" alt="Thunderstorm" src="//ssl.gstatic.com/onebox/weather/48/thunderstorms.png">
                            </div>
                            <div style="font-weight:normal;line-height:15px;font-size:13px">
                                <div class="vk_gy" style="display:inline-block;padding-right:5px">
                                    <span class="wob_t" style="display:inline">28 °C</span>
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
                                    <span class="wob_t" style="display:inline">28 °C</span>
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
                                    <span class="wob_t" style="display:inline">28 °C</span>
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
                                    <span class="wob_t" style="display:inline">28 °C</span>
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
                                    <span class="wob_t" style="display:inline">28 °C</span>
                                </div>
                            </div>
                            <div style="font-weight:normal;line-height:15px;font-size:13px">
                                <div class="vk_gy" style="display:inline-block;padding-right:5px">
                                    <span class="wob_t" style="display:inline">68 %</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--End of the Forecast Weather-->

                </div>
            </div>
            <!--End of the Weather Widget-->

        </div> 
        <!--End of the Image Slider & Weather Widget-->

        <!--Destination Information Section-->
        <div class="row" style="margin-top: 20px;">

            <!--Left Side Navigation-->
            <div class="col-md-3">

                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                                    </span>Overview</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">About This Destination</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-flash text-success"></span><a href="http://www.jquery2dotnet.com">Recommended Attractions</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Map</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Reviews</a>
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
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                                    </span>Things To Do</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse ">
                            <div class="panel-body">
                                <table class="table ttd_table">
                                    <!--Things to do-->
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                                    </span>Nearby Cities</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse ">
                            <div class="panel-body">
                                <table class="table">
                                    <tr><td><a href="#">Kalutara</a></td></tr>
                                    <tr><td><a href="#">Negombo</a></td></tr>
                                    <tr><td><a href="#">Dehiwala-Mount Lavinia</a></td></tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!--End of the Left Side Navigation-->

            <!--Right Side Info Content-->
            <div class="col-md-9">

                <div class="row" style="padding-right: 15px;">

                    <div class="ibox-title">
                        <h5>Overview</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>

                        </div>
                    </div>
                    <div class="ibox-content" style="padding: 40px; padding-top: 10px;"> 
                        <div class="row" >
                            <h2 class="desc_title"><!--Description Title--></h2>
                            <hr style="margin-top: 0px;">
                            <p class="dest_description" style="text-indent: 50px;">Colombo, the capital of Sri Lanka, is a bustling city and a hopping-off point for beaches in the island nation's south. It has a long history as a port on ancient east-west trade routes, ruled successively by the Portuguese, Dutch and British. That heritage is reflected in its spicy cuisine as well as its architecture, mixing colonial buildings with high-rises and shopping malls.</p>
                        </div>
                        <div class="row">
                            <h2><strong>Recommended Attractions</strong></h2>
                            <hr style="margin-top: 0px;">

                            <style type="text/css">

                                a {
                                    -webkit-transition: all 150ms ease;
                                    -moz-transition: all 150ms ease;
                                    -ms-transition: all 150ms ease;
                                    -o-transition: all 150ms ease;
                                    transition: all 150ms ease; 
                                }
                                a:hover {
                                    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
                                    filter: alpha(opacity=50); /* IE7 */
                                    opacity: 0.6;
                                    text-decoration: none;
                                }

                                /* Boxes
                                ------------------------------------------------ */

                                /* List style */
                                ul.thumbnails { 
                                    list-style: none; 
                                    margin: 0;
                                    padding: 0;
                                }

                                .caption-box h4 {
                                    line-height: 0.90rem;
                                    color: #000;
                                }
                                .caption-box p {
                                    font-size: 0.85rem;
                                    color: #999;
                                }
                                .btn.btn-mini {
                                    font-size: 0.85rem;
                                }

                                /* Control box 
                                ------------------------------------------------ */
                                .control-box2 {
                                    text-align: right;
                                    width: 100%;
                                }
                                .carousel-control2{
                                    color: #FFF;
                                    background: #666 !important;
                                    border: 0px;
                                    border-radius: 0px;
                                    display: inline-block;
                                    font-size: 34px;
                                    font-weight: 200;
                                    line-height: 18px;
                                    opacity: 0.5;
                                    padding: 4px 15px 0px;
                                    position: static;
                                    /*margin: 30px -20px 0;*/
                                    height: 30px;
                                    width: 15px;
                                }


                            </style>


                            <div id="myCarousel2" class="row carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

                                    <div class="item active">

                                        <ul class="thumbnails">
                                            <li class="col-sm-3">      
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption-box">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-success btn-mini" href="#">Read More</a>
                                                </div>
                                            </li>

                                            <li class="col-sm-3">      
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption-box">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-success btn-mini" href="#">Read More</a>
                                                </div>
                                            </li>

                                            <li class="col-sm-3">      
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption-box">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-success btn-mini" href="#">Read More</a>
                                                </div>
                                            </li>

                                            <li class="col-sm-3">      
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption-box">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-success btn-mini" href="#">Read More</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- /Slide1 --> 


                                    <div class="item">
                                        <ul class="thumbnails">
                                            <li class="col-sm-3">      
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption-box">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-success btn-mini" href="#">Read More</a>
                                                </div>
                                            </li>

                                            <li class="col-sm-3">      
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption-box">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-success btn-mini" href="#">Read More</a>
                                                </div>
                                            </li>

                                            <li class="col-sm-3">      
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption-box">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-success btn-mini" href="#">Read More</a>
                                                </div>
                                            </li>

                                            <li class="col-sm-3">      
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption-box">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-success btn-mini" href="#">Read More</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- /Slide2 --> 


                                    <div class="item">
                                        <ul class="thumbnails">
                                            <li class="col-sm-3">      
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption-box">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-success btn-mini" href="#">Read More</a>
                                                </div>
                                            </li>

                                            <li class="col-sm-3">      
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption-box">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-success btn-mini" href="#">Read More</a>
                                                </div>
                                            </li>

                                            <li class="col-sm-3">      
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption-box">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-success btn-mini" href="#">Read More</a>
                                                </div>
                                            </li>

                                            <li class="col-sm-3">      
                                                <div class="thumbnail">
                                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                </div>
                                                <div class="caption-box">
                                                    <h4>Praesent commodo</h4>
                                                    <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                    <a class="btn btn-success btn-mini" href="#">Read More</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- /Slide3 --> 

                                </div><!-- /Wrapper for slides .carousel-inner -->

                                <!-- Control box -->
                                <div class="control-box2">                            
                                    <a data-slide="prev" href="#myCarousel2" class="carousel-control2 left">‹</a>
                                    <a data-slide="next" href="#myCarousel2" class="carousel-control2 right">›</a>
                                </div><!-- /.control-box -->   

                            </div><!-- /#myCarousel2 -->

                        </div>


                    </div>
                </div>

            </div>
            <!--End of the Right Side Info Content-->
        </div>
        <!-- End of the Destination Information Section-->

        <!--Map Section-->
        <div class="row">

            <style type="text/css" media="all">

                .marker-holder {
                    position: relative;
                    left: 0;
                    width: 10px;
                    height: 10px;
                }

                .marker-content {
                    position: absolute;
                    bottom: -141px;
                    background: #ffffff;
                    border: 4px solid #ffffff;
                    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.3), 0 1px 0 0 rgba(0, 0, 0, 0.1);
                    left: -63px;
                    width: 218px;
                    z-index: 5;
                }

                .map-item-info {
                    padding: 3px 10px 6px 10px;
                }

                .with-image .map-item-info {
                    text-align: center;
                }

                .map-item-info .title {
                    border-bottom: 1px dotted #dcdcdc;
                    color: #333333;
                    font-family: 'Roboto Condensed';
                    font-size: 14px;
                    font-weight: bold;
                    margin-bottom: 5px;
                    padding-bottom: 2px;
                    text-transform: uppercase;
                }

                .map-item-info .address {
                    color: #333333;
                    font-size: 11px;
                }

                .marker-content img {
                    opacity: 1;
                    position: relative;
                    -moz-transition: all 400ms ease-out;
                    -o-transition: all 400ms ease-out;
                    -ms-transition: all 400ms ease-out;
                    transition: all 400ms ease-out;
                }

                .marker-content img:before {
                    content: "";
                    left: 0;
                    height: 100%;
                    position: absolute;
                    top: 0;
                    width: 100%;
                }

                .marker-content .infobox_close {
                    cursor: pointer;
                    background: #ffffff url('<?php echo base_url('img/pop_up-close.png'); ?>') no-repeat center;
                    border-radius: 10px;
                    box-shadow: 0 0 1px rgba(0, 0, 0, 0.8);
                    height: 10px;
                    margin: auto;
                    padding: 8px;
                    position: absolute;
                    right: -9px;
                    top: -9px;
                    width: 10px;
                    z-index: 1000;
                }

                .marker-content:before {
                    border: 12px solid transparent;
                    border-top-color: #ffffff;
                    bottom: -28px;
                    content: "";
                    left: 96px;
                    height: 0;
                    position: absolute;
                    width: 0;
                }

                .marker-content:hover .map-item-info a.more-button {
                    display: inline-block;
                    opacity: 1;
                    -moz-transition: all 900ms ease-out;
                    -o-transition: all 900ms ease-out;
                    -ms-transition: all 900ms ease-out;
                    transition: all 900ms ease-out;
                }

                .marker-content:hover img {
                    opacity: 0.2;
                    -moz-transition: all 400ms ease-out;
                    -o-transition: all 400ms ease-out;
                    -ms-transition: all 400ms ease-out;
                    transition: all 400ms ease-out;
                }

                .map-item-info a.more-button {
                    background: #207dda;
                    background: -moz-linear-gradient(#207dda, #1e75cd);
                    background: -o-linear-gradient(#207dda, #1e75cd);
                    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#207dda), to(#1e75cd));
                    background: -webkit-linear-gradient(#207dda, #1e75cd);
                    border: 1px solid #1d70c4;
                    box-shadow: 0 1px 0 #4091e3 inset;
                    color: #ffffff;
                    display: none;
                    font-size: 10px;
                    font-weight: bold;
                    left: 64px;
                    opacity: 0;
                    padding: 3px 10px;
                    position: absolute;
                    text-shadow: 1px 1px 0 #17599c;
                    text-decoration: none;
                    top: 69px;
                    -moz-transition: all 900ms ease-out;
                    -o-transition: all 900ms ease-out;
                    -ms-transition: all 900ms ease-out;
                    transition: all 900ms ease-out;
                }

                .map-item-info a.more-button:hover {
                    background: #1b69b6;
                    background: -moz-linear-gradient(#207dda, #1b69b6);
                    background: -o-linear-gradient(#207dda, #1b69b6);
                    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#207dda), to(#1b69b6));
                    background: -webkit-linear-gradient(#207dda, #1b69b6);
                    border: 1px solid #1963ae;
                    box-shadow: 0 1px 0 #569ee6 inset;
                    display: inline-block;
                    text-shadow: 1px 1px 0 #144d86;
                }



                .marker-overlay {
                    cursor: pointer;
                }

                .marker-image {
                    line-height: 0;
                    position: relative;
                    top: 0;
                    z-index: 2;
                    -webkit-transition: all 200ms ease;
                    -moz-transition: all 400ms ease-out;
                    -o-transition: all 400ms ease-out;
                    -ms-transition: all 400ms ease-out;
                    transition: all 400ms ease-out;
                }

                .marker-image:hover {
                    top: -5px;
                    z-index: 4;
                    -webkit-transition: all 200ms ease;
                    -moz-transition: all 400ms ease-out;
                    -o-transition: all 400ms ease-out;
                    -ms-transition: all 400ms ease-out;
                    transition: all 400ms ease-out;
                }

                .marker-image > img {
                    -webkit-border-radius: 83px;
                    border-radius: 83px;
                    box-shadow: 0 0 0 4px #ffffff, 0 0 1px 4px rgba(0, 0, 0, 0.2);
                }

                .marker-image:before {
                    border: 5px solid transparent;
                    border-top-color: #ffffff;
                    border-width: 12px 18px 0;
                    content: "";
                    left: 20px;
                    height: 0;
                    position: absolute;
                    top: 76px;
                    width: 0;
                    z-index: 1;
                }

                .marker-rating {
                    background: #207dda;
                    border-radius: 25px;
                    bottom: 3px;
                    box-shadow: 0 9px 0 0 rgba(255, 255, 255, 0.16) inset, 0 1px 0 0 rgba(0, 0, 0, 0.21) inset;
                    display: inline-block;
                    left: -1px;
                    padding: 2px 0 3px 4px;
                    position: absolute;
                    z-index: 2;
                    width: 80px;
                }

                .marker-overlay:hover .marker-rating {
                    z-index: 5;
                }

                .star {
                    background: url('<?php echo base_url('img/rating_star.png'); ?>') no-repeat 0 0;
                    float: left;
                    padding: 0 15px 0 0;
                    position: relative;
                    width: 11px;
                    height: 11px;
                }

                .star.active {
                    background: url("<?php echo base_url('img/rating_star_active.png'); ?>") no-repeat;
                }

            </style>

            <h2><strong>Colombo Map</strong></h2>
            <hr style="margin-top: 0px;">
            <div id="map-canvas"></div>

        </div>
        <!--End of the map section-->



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

    <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
    <script src="<?php echo base_url() . 'js/plugins/gmap3.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'js/plugins/gmap3.infobox.js' ?>"></script>

    <!-- Custom and plugin javascript -->
    <!--<script src="<?php // echo base_url() . 'js/inspinia.js'      ?>"></script>-->


    <script type="text/javascript">

        var dest_id = getParameterByName('dest_id');

        //Load Destination Info
        $.ajax({
            url: '<?php echo base_url('destinations/load_destInfoPage'); ?>',
            type: "GET",
            data: {
                'dest_Id': dest_id
            },
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (data) {
                if (data != "false") {
                    $.each(data, function (key, value) {
                        $('.page-header').text(value.dest_name+', '+value.province+', Sri Lanka');
                        $('.desc_title').html('<strong>Description about '+value.dest_name+'</strong>');
                        $('.dest_description').text(value.dest_description);
                    });
                } else {

                }
            }
        }); //end of the ajax request


        //Load Attractions ImageSlider
        $.ajax({
            url: '<?php echo base_url('destinations/load_mainImageSlider'); ?>',
            type: "GET",
            data: {
                'dest_Id': dest_id
            },
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (data) {
                if (data != "false") {
                    $.each(data, function (key, value) {
                        $('<div class="item"><img src="<?php echo base_url()?>img/attractions/'+value.attr_image+'" style="width:100%; height:300px;"><div class="carousel-caption"><h4>'+value.attr_name+'</h4></div></div>').appendTo('.main-dest-carousel-inner');
                    });
                    $('.item').first().addClass('active');
                } else {

                }
            }
        }); //end of the ajax request
        
        //Load Things to do
        $.ajax({
            url: '<?php echo base_url('destinations/load_things_todo_menu'); ?>',
            type: "GET",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (data) {
                $.each(data, function (key, value) {
                    $('<tr><td><a href="#">'+value.things_todo+'</a></td></tr>').appendTo('.ttd_table');
                });
            }
        }); //end of the ajax request
        



        //Get Value form QueryString
        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                    results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

    </script>




    <!--gmap3 script-->
    <script type="text/javascript">
        var mapDiv, map, infobox;

        jQuery(document).ready(function ($) {
            
            var i = 0;
            // prepare data
            var data = new Array();
            
            var title = "colombo";
            var address = "Srilanka";
            var link = "More Info";

            var thumbImgCode = "";

            var markerImgCode = "";

            var ratingCode = "";
            
            ratingCode += '<div class="marker-rating">';
            for (var j = 1; j <= 5; j++) {
                ratingCode += '<div class="star';
                if (j <= 3) {
                    ratingCode += ' active';
                }
                ratingCode += '"></div>';
            }
            ratingCode += '</div>';


            
            
            
            $.ajax({
                url: '<?php echo base_url('destinations/load_map'); ?>',
                type: "GET",
                data: {
                    'dest_Id': dest_id
                },
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    if (data != "false") {
                        $.each(data, function (key, value) {
                            
                            thumbImgCode = "<div class='marker-content with-image'><img width='210px' height='115px' src='<?php echo base_url()?>img/attractions/"+value.attr_image+"' alt='' />";
                            markerImgCode = "<div class='marker-image'><img width='76px' height='76px' src='<?php echo base_url()?>img/attractions/"+value.attr_image+"' alt='' /></div>";
                        
                            data[i] = {
                                latLng: [value.attr_lat, value.attr_lng],
                                options: {
                                    content: "<div class='marker-overlay'>" + markerImgCode + ratingCode + "</div>",
                                    offset: {
                                        y: -76,
                                        x: -38
                                    }
                                },
                                data: '<div class="marker-holder">' + thumbImgCode + '<div class="map-item-info"><div class="title">' + value.attr_name + '</div><div class="address">' + address + '</div><a href="' + link + '" class="more-button">VIEW MORE</a></div><div class="infobox_close"></div></div></div></div>'
                            };
                            i++;
                            
                        });
                        
                        
                        mapDiv = $("#map-canvas");

                        mapDiv.height(450).gmap3({
                            map: {
                                options: {
//                                    maxZoom: 15,
                                    draggable: true,
                                    mapTypeControl: true,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                                    scrollwheel: true,
                                    panControl: true,
                                    rotateControl: false,
                                    scaleControl: true,
                                    streetViewControl: false,
                                    zoomControl: true
                                }
                            },
                            overlay: {
                                values: data,
                                events: {
                                    click: function (marker, event, context) {
                                        map.panTo(marker.getPosition());

                                        infobox.setContent(context.data);
                                        infobox.open(map, marker);

                                    }
                                }
                            }
                        }, "autofit");
                        
                        
                        
                        
                    } else {

                    }
                }
            }); //end of the ajax request


//            console.log(JSON.stringify(data));

            mapDiv = $("#map-canvas");

            mapDiv.height(400).gmap3({
                map: {
                    options: {
                        maxZoom: 15,
                        draggable: true,
                        mapTypeControl: true,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        scrollwheel: true,
                        panControl: true,
                        rotateControl: false,
                        scaleControl: true,
                        streetViewControl: false,
                        zoomControl: true
                    }
                },
                overlay: {
                    values: data,
                    events: {
                        click: function (marker, event, context) {
                            map.panTo(marker.getPosition());

                            infobox.setContent(context.data);
                            infobox.open(map, marker);

                        }
                    }
                }
            }, "autofit");


            map = mapDiv.gmap3("get");
            infobox = new InfoBox({
                pixelOffset: new google.maps.Size(-50, -150),
                closeBoxURL: '',
                enableEventPropagation: true
            });

            mapDiv.delegate('.infoBox .infobox_close', 'click', function () {
                infobox.close();
            });
            // hotfix for chrome on android
            mapDiv.delegate('.infoBox div.more-button', 'click', function () {
                window.location = $(this).data('link');
            });



        });
    </script>



</body>

</html>
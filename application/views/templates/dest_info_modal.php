
<link type="text/css" rel="stylesheet" href="<?php echo base_url().'css/plugins/blueimp-gallery.min.css'?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url().'css/plugins/star-rating.min.css'?>">
<!--<link type="text/css" rel="stylesheet" href="<?php //echo base_url().'css/plugins/hover-min.css'?>" media="all">-->

<!--Change default modal window size-->
<style type="text/css">
    .modal.modal-wide .modal-dialog {
      width: 70%;
    }
</style>

<!--Image slider styles--> 
<style type="text/css">      
    .package-box-caption {
        background-color: rgba(0, 0, 0, 0.65);
        padding: 1px 1px;
        position: absolute;
        left: 0px;
        bottom: 20px;
        width: 70%;
    }
</style>

<!--Search Box Highlight Effect-->
<style type="text/css">
    input[type="text"]:focus {
        border-color: rgba(82, 168, 236, 0.8);
        outline: 0;
        outline: thin dotted \9;
        /* IE6-9 */
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
    }
</style>

<!--Google Play Like Rating Styles-->
<style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Roboto:100,300,400);
    @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
    .inner {
        width: 250px;
        margin: 0 auto;
        padding: 3px;
        background-color: white;
        overflow: hidden;
        position: relative;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        font-family: 'Roboto', Helvetica;
        color: #737373;
    }
    .rating {
        float: left;
        width: 45%;
        margin-right: 10px;
        text-align: center;
    }
    .rating-num {
        color: #333333;
        font-size: 50px;
        font-weight: 100;
        line-height: 1em;
    }
    .rating-stars {
        /*font-size: 15px;*/
        color: #E3E3E3;
        margin-bottom: .5em;
    }
    .rating-stars .active {
        color: #737373;
    }
    .rating-users {
        font-size: 12px;
    }
    .histo {
        float: left;
        width: 50%;
        font-size: 13px;
    }
    .histo-star {
        float: left;
        padding: 3px;
    }
    .histo-rate {
        width: 100%;
        display: block;
        clear: both;
    }
    .bar-block {
        margin-left: 5px;
        color: black;
        display: block;
        float: left;
        width: 70%;
        position: relative;
    }
    .bar {
        padding: 2px;
        display: block;
    }
    #bar-five {
        width: 0;
        background-color: #9FC05A;
    }
    #bar-four {
        width: 0;
        background-color: #ADD633;
    }
    #bar-three {
        width: 0;
        background-color: #FFD834;
    }
    #bar-two {
        width: 0;
        background-color: #FFB234;
    }
    #bar-one {
        width: 0;
        background-color: #FF8B5A;
    }
</style>
    

<div class="modal modal-wide fade" id="destInfo" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content">

            <!--Destination Modal Window Header-->
            <div class="modal-header" style="background-color:#222; color:#FFF; height:45px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff; margin-top: -4px; ">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div>
                    <div id="modalHeader_img" style="height:40px; width:40px; float:left; padding:5px; background-color:#fff; possition:absolute; border-radius:40px; margin-top:-13px; background-size: 63px 43px;"></div>
                    <div style="padding-left:60px; width:300px; margin-top:-7px;">
                        <h3 id="dest-name" style="margin:1px;"></h3> <!--Destination Name-->
                        <h6 id="dest-province" style="margin:1px;"></h6> <!--Destination belong province-->
                    </div>
                </div>
            </div>
            <!--End of the modal header-->

            <!--Destination Modal Window Body-->
            <div class="modal-body" style="padding-bottom:0px; padding-top:5px; padding-right:15px; padding-left:15px;">
                <div class="row">
                    <!--main row-->
                    <div class="col-md-12">
                        <!--main column-->
                        <div role="tabpanel">
                            <!--Tab Panel-->
                            <ul class="nav nav-tabs" role="tablist" id="destTab">
                                <li role="presentation" class="active">
                                    <a href="#attractions" aria-controls="attractions" role="tab" data-toggle="tab">Attractions</a>
                                </li>
                                <li role="presentation">
                                    <a href="#locationMap" aria-controls="locationMap" role="tab" data-toggle="tab">Map</a>
                                </li>
                                </li>
                                <li role="presentation">
                                    <a href="#weather" aria-controls="weather" role="tab" data-toggle="tab">Weather</a>
                                </li>
                                <li role="presentation">
                                    <a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab">Gallery</a>
                                </li>
                                <li role="presentation">
                                    <a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a>
                                </li>

                            </ul>
                        </div>
                        <!--End tab Panel-->
                        <div class="tab-content">
                            <!--Tab Panes - Pane1(attraction)-->
                            <div role="tabpanel" class="tab-pane fade in active" id="attractions" style="margin-top:10px;">

                                <!--Inside attraction tab row-->
                                <div class="row">
                                    
                                    <!--Attractions Tab Left Column-->
                                    <div class="col-md-8">
                                        
                                        <!--Search Bar-->
                                        <div class="row" style="height:40px;">
                                            <div class="col-md-12" >
                                                <div id="imaginary_container">
                                                    <div class="input-group custom-search-form">
                                                        <input type="text" id="inputSearch" class="form-control search" placeholder="Find More Attractions Here or By Sliding the Image">
                                                        <br />
                                                        <div id="divResult"></div>
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default" type="button">
                                                                <span class="glyphicon glyphicon-search"></span>
                                                            </button>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!--End of the Search Bar-->

                                        <!--Attractions Image Slider-->
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                                          <!-- Wrapper for image slides -->
                                          <div class="carousel-inner" role="listbox">
                                            <!--Images are get from java script-->  
                                          </div>

                                          <!-- Left and Right Controls -->
                                          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                          </a>
                                            
                                        </div>
                                        <!--End of the Attractions Image Slider-->

                                        <!--Recommended Attractions-->
                                        <div style="margin-top:5px;">
                                            <div class="panel panel-default" >
                                                <div class="panel-body" style="padding-top:5px; padding-bottom:0px; height:120px;">
                                                    <h5>Recommended Attractions</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of the Recommended Attractions-->

                                    </div>
                                    <!--END Attractions Tab Left Column-->

                                    <!--Attractions Tab Right Column-->
                                    <div class="col-md-4" style="padding-left: 0px;">
                                        
                                        <div class="panel panel-default">
                                            
                                            <div class="panel-heading" style="text-align:center; padding: 8px 15px;">
                                                <h3 id="attr_title" class="panel-title"><!--Attraction title goes here--></h3>
                                            </div>
                                            
                                            <div class="panel-body" style="padding:5px; height:450px;">
                                                
                                                <div style="margin:5px; text-align: center; height: 30%;">
                                                    <p id="attr_desc" style="margin: 0px"><!--Attraction description goes here--></p>
                                                </div>
                                                
                                                <h5>Ratings</h5>
                                                <hr style="margin-top:1px; margin-bottom: 10px;" >

                                                    <!--Google Play Like Rating-->
                                                    <div class="inner">
                                                        <div class="rating">
                                                            <span class="rating-num">0.0</span>
                                                            <div class="rating-stars">
                                                                <span><i class="active icon-star"></i></span>
                                                                <span><i class="active icon-star"></i></span>
                                                                <span><i class="active icon-star"></i></span>
                                                                <span><i class="active icon-star"></i></span>
                                                                <span><i class="icon-star"></i></span>
                                                            </div>
                                                            <div class="rating-users">
                                                                <i class="icon-user"></i><!--Total Number of Hits-->
                                                            </div>
                                                        </div>

                                                        <div class="histo">
                                                            <div class="five histo-rate">
                                                                <span class="histo-star"><i class="active icon-star"></i> 5</span>
                                                                <span class="bar-block">
                                                                    <span id="bar-five" class="bar">
                                                                        <span id="bar-five-value">0</span>&nbsp;
                                                                    </span>
                                                                </span>
                                                            </div>

                                                            <div class="four histo-rate">
                                                                <span class="histo-star"><i class="active icon-star"></i> 4</span>
                                                                <span class="bar-block">
                                                                    <span id="bar-four" class="bar">
                                                                        <span id="bar-four-value">0</span>&nbsp;
                                                                    </span>
                                                                </span>
                                                            </div>

                                                            <div class="three histo-rate">
                                                                <span class="histo-star"><i class="active icon-star"></i> 3</span>
                                                                <span class="bar-block">
                                                                    <span id="bar-three" class="bar">
                                                                        <span id="bar-three-value">0</span>&nbsp;
                                                                    </span>
                                                                </span>
                                                            </div>

                                                            <div class="two histo-rate">
                                                                <span class="histo-star"><i class="active icon-star"></i> 2</span>
                                                                <span class="bar-block">
                                                                    <span id="bar-two" class="bar">
                                                                        <span id="bar-two-value">0</span>&nbsp;
                                                                    </span>
                                                                </span>
                                                            </div>

                                                            <div class="one histo-rate">
                                                                <span class="histo-star"><i class="active icon-star"></i> 1</span>
                                                                <span class="bar-block">
                                                                    <span id="bar-one" class="bar">
                                                                        <span id="bar-one-value">0</span>&nbsp;
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            
                                                        </div><!--End of the histo-->
                                                    </div>
                                                    <!--End of the Google Play Like Rating-->

                                                    <br>
                                                    <div style="text-align:center;">
                                                        <p style="margin: 0px">Rate this Attraction</p>
                                                        <form>
                                                            <input id="user_rating" value="0.0" type="number" class="rating" min=0 max=5 step=1 data-size="xs">
                                                        </form>
                                                    </div>

<!--                                                Travel Style
                                                <hr style="margin-top:1px;" margin-bottom: 10px;>
                                                <a class="btn btn-primary btn-xs"><i class="fa fa-tag"></i> History museums</a>
                                                <br>
                                                <br>-->

                                                <hr style="margin-top:1px;">
                                                <div style="text-align:center;">
                                                    <button type="button" id="addtoPlan_Btn" class="btn btn-primary" >
                                                        <i class="fa fa-thumb-tack"></i>&nbsp; Add to Trip Plan
                                                    </button>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!--End of the Attractions Tab Right Column-->

                                </div>
                                <!--END Inside attraction tab row-->

                            </div>
                            <!--END tabpane 1 (attractions)-->


                            <!--Tab panes - pane2(location)-->
                            <div role="tabpanel" class="tab-pane fade" id="locationMap" style="margin-top:10px;">
                                <!--                                    <div class="well" style="margin-top:5px;">-->
                                <h4 id="mapTabAttrName"><!--Attraction Name Goes Here--></h4>
                                <!--                                    </div>-->
                                <div style="height:400px; margin-bottom:0px; padding:0px;">
                                    <div id="map-canvas" style="height: 100%; width: 100%;"></div>
                                </div>
                                <div class="well" style="height:51px; margin-top:6px; padding:10px;">
                                    
                                </div>
                            </div>
                            <!--end of the Tab panes2 - pane2(location)-->


                            <!--Tab panes - pane3(weather)-->
                            <div role="tabpanel" class="tab-pane fade" id="weather" style="margin-top:10px;">

                                <div class="row">

                                    <div class="col-sm-4" style="padding-left:50px; padding-right:5px;">

                                        <div class="weather-widget">

                                            <h3 id="owm_name"></h3>


                                            <div><img style="float: left; margin-top: -9px;" id="owm_image"><h2  id="owm_temp"></h2></div>
                                            <div id="owm_dateTime"></div>
                                            <p></p>

                                            <table class="table table-striped table-bordered table-condensed">
                                                <tbody>
                                                    <tr>
                                                        <td>Wind Speed</td>
                                                        <td id="owm_wind"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cloudiness</td>
                                                        <td id="owm_cloud">N/A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pressure<br></td>
                                                        <td id="owm_pressure">0 hpa</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Humidity</td>
                                                        <td id="owm_humidity">0 %</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sunrise</td>
                                                        <td id="sunrise">00:00 GMT</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sunset</td>
                                                        <td id="sunset">00:00 GMT</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Geo coords</td>
                                                        <td id="coord">N/A</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <script type="text/javascript">
                                                var dt = new Date(1431245998 * 1000);
                                                var hr = dt.getHours();
                                                if (hr < 10) hr = '0' + hr;
                                                var mn = dt.getMinutes();
                                                if (mn < 10) mn = '0' + mn;
                                                var mon = dt.getMonth() + 1;
                                                if (mon < 10) mon = '0' + mon;
                                                var day = dt.getDate();
                                                if (day < 10) day = '0' + day;
                                                var year = dt.getFullYear();
                                                $("#date_m").html('get at ' + year + '.' + mon + '.' + day + ' ' + hr + ':' + mn);

                                                var times = SunCalc.getTimes(new Date(), 6.93, 79.85);
                                                $("#sunrise").html(times.sunrise.getHours() + ':' + times.sunrise.getMinutes());
                                                $("#sunset").html(times.sunset.getHours() + ':' + times.sunset.getMinutes());
                                            </script>

                                        </div>


                                    </div>
                                    <!--end of the left column-->



                                    <div class="col-sm-8">

                                        <h3></h3>

                                        <div id="forcastGraph" style="min-width: 490px; height: 330px; margin-left: 40px"></div>

                                        <br>
                                        <div id="forecast_small" style="margin-left:125px; margin-bottom:100px; margin-top:-20px;">
                                            <div style="float: left; text-align: center; margin-right:35px;">
                                                <img alt="light rain" src="http://openweathermap.org/img/w/10d.png">
                                                <div class="small_val" title="Wind">4.22m/s</div>
                                                <div class="small_val_grey" title="Pressure">1021.35</div>
                                            </div>
                                            <div style="float: left; text-align: center; margin-right:35px;">
                                                <img alt="light rain" src="http://openweathermap.org/img/w/10d.png">
                                                <div class="small_val" title="Wind">5.71m/s</div>
                                                <div class="small_val_grey" title="Pressure">1021.59</div>
                                            </div>
                                            <div style="float: left; text-align: center; margin-right:35px;">
                                                <img alt="light rain" src="http://openweathermap.org/img/w/04d.png">
                                                <div class="small_val" title="Wind">4.57m/s</div>
                                                <div class="small_val_grey" title="Pressure">1020.03</div>
                                            </div>
                                            <div style="float: left; text-align: center; margin-right:35px;">
                                                <img alt="light rain" src="http://openweathermap.org/img/w/04d.png">
                                                <div class="small_val" title="Wind">5.43m/s</div>
                                                <div class="small_val_grey" title="Pressure">1019.74</div>
                                            </div>
                                            <div style="float: left; text-align: center;">
                                                <img alt="light rain" src="http://openweathermap.org/img/w/10n.png">
                                                <div class="small_val" title="Wind">4.56m/s</div>
                                                <div class="small_val_grey" title="Pressure">1021.83</div>
                                            </div>


                                        </div>

                                    </div>
                                    <!--End of the right column-->



                                </div>
                                <!--End of the row-->


                            </div>
                            <!--end of the Tab panes3 - pane3(weather)-->


                            <!--tabpane 4 gallery-->
                            <div role="tabpanel" class="tab-pane fade" id="gallery" style="margin-top:10px; height:470px;">

                                <h3>More Pictures on selected attraction...</h3>

                                <div class="lightBoxGallery" style="text-align:center; margin-bottom:30px;">
                                    <a href="<?php echo base_url("img/gallery/colombo/1.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/1s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/2.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/2s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/3.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/3s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/4.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/4s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/5.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/5s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/6.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/6s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/7.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/7s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/8.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/8s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/9.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/9s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/10.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/10s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/12.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/12s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/4.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/4s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/5.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/5s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/6.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/6s.jpg");?>">
                                    </a>
                                    <a href="<?php echo base_url("img/gallery/colombo/7.jpg");?>" title="Image from Unsplash" data-gallery=""><img src="<?php echo base_url("img/gallery/colombo/7s.jpg");?>">
                                    </a>

                                    <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                                    <div id="blueimp-gallery" class="blueimp-gallery">
                                        <div class="slides"></div>
                                        <h3 class="title"></h3>
                                        <a class="prev">‹</a>
                                        <a class="next">›</a>
                                        <a class="close">×</a>
                                        <a class="play-pause"></a>
                                        <ol class="indicator"></ol>
                                    </div>

                                </div>

                            </div>
                            <!--end of the tab pane 4 (gallery)-->

                            <div role="tabpanel" class="tab-pane fade" id="reviews" style="margin-top:10px;">
                                <div class="well" style="height:386px; margin-bottom:0px;">
                                    <p>Fourm spesific to this destination gose here</p>
                                </div>

                            </div>

                        </div>
                        <!--End of the Tab panes-->


                    </div>
                    <!--End of the main column-->


                </div>
                <!--END of the main row-->

            </div>
            <!--END of the Destination Modal Body-->

        </div>
        <!--END Modal-content-->
    </div>
    <!--END of the Modal-dialog-->
</div>
<!--END of the Modal-->
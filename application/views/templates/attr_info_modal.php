<link type="text/css" rel="stylesheet" href="<?php echo base_url().'css/plugins/star-rating.min.css'?>">

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

<style type="text/css">
    
    .modal .modal-dialog {
      width: 55%;
    }
    
    .modal-content {
        overflow:auto;
        max-height: 580px;
    }
    
    
    .attractive-priv-popup-wrapper {
        border: 1px solid #67c8c3;
        box-shadow: 1px 1px 5px #9e9e9e;
        font-family: latoregular;
        font-size: 14px;
        height: auto;
        margin: 0 auto;
        overflow: auto;
        padding: 15px;
        position: relative;
        width: 100%;
    }
    
    .attraction_img {
        border: 1px solid #ccc;
        padding: 5px;
        width: 100%;
    }
</style>

<div class="modal inmodal" id="attr_info_modal"  tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                
                <h4 class="modal-title"><!--Attraction Name--></h4>
                <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-7">
                            <!--<img class="attraction_img" width="100%" src="<?php echo base_url(); ?>img/attractions/colombo_Gangaramaya Buddhist Temple.jpg">-->
                            <img class="attraction_img" width="100%" >
                        </div>
                        
                        <div class="col-sm-5">
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
                            <hr style="margin-bottom: 0px;">
                            
                        </div>
                    </div>
                    
                    <div class="row">
                        <div style="padding: 0 20px">
                            <h5>About Attractions</h5>
                            <p class="attr_description" style="text-indent: 50px; text-align: justify;"><!--Attraction Description--></p>
                        </div>
                    </div>
                
                    <div class="row">
                        <div style="padding: 0 20px">
                            <div id="map-canvas" style="height: 150px; width: 100%;"></div>
                        </div>
                    </div>
            </div>

        </div>
    </div>
</div>
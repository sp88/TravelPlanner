<!--Head-->
<?php include_once('templates/head.php'); ?>
<!--End of Head-->


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

    html {
        font-size: 16px;
        min-height: 100%; }

    .bg-title-section h1 {
        font-size: 4.1667em;
        color: #fff;
        letter-spacing: 0;
        text-shadow: 0 0 8px rgba(0, 0, 0, 0.25);
        margin-bottom: 0;
        font-weight: 900;
    }



    .bg-title-section h3 {
        font-size: 2em;
        color: #000;
        letter-spacing: 0.1em;
        text-shadow: 0 0 6px rgba(255, 233, 169, 0.25);
        font-weight: 900;
    }
    .align-center {
        text-align: center !important; }


    /* 2.1. Form Elements ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    input.input-text, select, span.custom-select{
        background: #f5f5f5;
        border: none;
        line-height: normal; }

    input.input-text, span.custom-select{
        padding-left: 15px;
        padding-right: 15px;
        height: 34px; }


    /* 2.1.1. Select box */
    select {
        height: 34px;
        padding: 8px 0 8px 8px; }

    select option {
        padding: 2px 10px; }

    .selector {
        position: relative;
        min-width: 60px;
        line-height: 0; }
    .selector select {
        position: absolute;
        z-index: 1;
        filter: alpha(opacity=0);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        -moz-opacity: 0;
        -khtml-opacity: 0;
        opacity: 0;
        width: 100%;
        -webkit-appearance: menulist-button;
        line-height: 30px; }
    .selector span.custom-select {
        display: inline-block;
        line-height: 32px;
        padding: 0 10px;
        position: relative;
        width: 100%;
        overflow: hidden;
        white-space: nowrap; }
    .selector span.custom-select:before {
        position: absolute;
        right: 0;
        top: 0;
        content: '';
        background: #fdb714;
        width: 24px;
        height: 100%; }
    .selector span.custom-select:after {
        position: absolute;
        right: 9px;
        top: 15px;
        border-top: 5px solid #fff;
        border-left: 3px solid transparent;
        border-right: 3px solid transparent;
        content: ""; }




    /* 2.2. Buttons ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    /* 2.2.1. Buttons */
    button, input[type="submit"], a.button {
        border: none;
        color: #fff;
        cursor: pointer;
        padding: 0 15px;
        white-space: nowrap; }


    button.btn-medium, input[type="submit"].btn-medium, a.button.btn-medium {
        padding: 0 32px;
        height: 34px;
        line-height: 34px;
        font-size: 1em; }

    button.sky-blue1, input[type="submit"].sky-blue1, a.button.sky-blue1 {
        background: #01b7f2; }
    button.sky-blue1:hover, input[type="submit"].sky-blue1:hover, a.button.sky-blue1:hover {
        background: #07a5d8; }


    .slideshow-bg .flexslider {
        position: absolute;
        left: 0;
        width: 100%;
        height: 50%;
    }
    .slideshow-bg .flexslider .slides, .slideshow-bg .flexslider .slides > li {
        height: 100%; }
    .slideshow-bg .flexslider .slidebg {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        -moz-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        -webkit-transition: all 0.5s ease-out;
        -ms-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out; }
    .slideshow-bg > .container {
        height: 100%;
        position: relative;
        z-index: 2; }




    .slideshow-bg .search-box {
        background: rgba(0, 0, 0, 0.75);
        padding: 20px 20px 5px;
        display: block;
        margin-bottom: 70px;
        text-align: left; }
    .slideshow-bg .search-box .row {
        margin-left: -6px;
        margin-right: -6px; }
    .slideshow-bg .search-box [class^="col-"], .slideshow-bg .search-box [class*=" col-"] {
        padding-left: 6px;
        padding-right: 6px; }
    .slideshow-bg .search-box .datepicker-wrap:after {
        background: none;
        color: #fdb714; }
    .slideshow-bg .search-box .selector span.custom-select:before {
        width: 0;
        height: 0;
        border-bottom: 4px solid #fdb714;
        border-left: 3px solid transparent;
        border-right: 3px solid transparent;
        background: none !important;
        right: 7px;
        top: 50%;
        margin-top: -3px; }

    /* 7.2. DatePicker ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    button.ui-button::-moz-focus-inner {
        border: 0;
        padding: 0; }

    .datepicker-wrap {
        position: relative; }
    .datepicker-wrap .ui-datepicker-trigger {
        width: 30px;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        cursor: pointer;
        background-color: transparent;
        z-index: 1;
        filter: alpha(opacity=0);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        -moz-opacity: 0;
        -khtml-opacity: 0;
        opacity: 0; }
    .datepicker-wrap:after {
        display: block;
        font-family: "soap-icons";
        content: "\e86a";
        font-size: 25px;
        color: #fff;
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        width: 30px;
        height: 100%;
        text-align: center;
        line-height: 34px;
        background: #fdb714; }
    .datepicker-wrap.yellow:after {
        background: #fdb714; }
    .datepicker-wrap.green:after {
        background: #98ce44; }
    .datepicker-wrap.blue:after {
        background-color: #01b7f2; }
    .datepicker-wrap.dark-blue:after {
        background-color: #2d3e52; }
    .datepicker-wrap.transparent:after {
        background-color: transparent;
        color: #fdb714; }

    .ui-datepicker {
        width: 20em;
        padding: 0;
        display: none;
        background: #fff;
        border: 1px solid #fdb714;
        z-index: 101 !important; }
    .ui-datepicker .ui-datepicker-header {
        position: relative;
        padding: .2em 0;
        background: #fdb714; }
    .ui-datepicker .ui-datepicker-prev, .ui-datepicker .ui-datepicker-next {
        position: absolute;
        top: 11px;
        cursor: pointer; }
    .ui-datepicker .ui-datepicker-prev.ui-state-disabled, .ui-datepicker .ui-datepicker-next.ui-state-disabled {
        visibility: hidden; }
    .ui-datepicker .ui-datepicker-prev:before, .ui-datepicker .ui-datepicker-next:before {
        content: "";
        display: block;
        width: 0;
        height: 0;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent; }
    .ui-datepicker .ui-datepicker-prev {
        left: 24px; }
    .ui-datepicker .ui-datepicker-prev:before {
        border-right: 8px solid #fff; }
    .ui-datepicker .ui-datepicker-next {
        right: 24px; }
    .ui-datepicker .ui-datepicker-next:before {
        border-left: 8px solid #fff; }
    .ui-datepicker .ui-datepicker-prev span, .ui-datepicker .ui-datepicker-next span {
        display: none; }
    .ui-datepicker .ui-datepicker-title {
        margin: 5px;
        text-align: center;
        color: #fff;
        font-size: 1.1667em;
        font-weight: bold; }
    .ui-datepicker .ui-datepicker-title select {
        font-size: 1em;
        margin: 1px 0; }
    .ui-datepicker select.ui-datepicker-month-year {
        width: 100%; }
    .ui-datepicker select.ui-datepicker-month,
    .ui-datepicker select.ui-datepicker-year {
        width: 49%; }
    .ui-datepicker table {
        width: 100%;
        font-size: 12px;
        border-collapse: collapse; }
    .ui-datepicker th {
        width: 30px;
        height: 30px;
        line-height: 30px;
        background: #f5f5f5; }
    .ui-datepicker th span {
        display: block;
        text-align: center;
        font-size: 1.1667em;
        font-weight: normal;
        color: #fdb714; }
    .ui-datepicker span.ui-datepicker-month {
        font-weight: bold; }
    .ui-datepicker .ui-datepicker-calendar td {
        vertical-align: middle;
        text-align: center; }
    .ui-datepicker .ui-datepicker-calendar td a, .ui-datepicker .ui-datepicker-calendar td span {
        color: inherit;
        display: block;
        height: 30px;
        line-height: 30px; }
    .ui-datepicker .ui-datepicker-calendar td.ui-state-disabled span {
        color: #dbdbdb; }
    .ui-datepicker .ui-datepicker-calendar td.ui-datepicker-current-day a, .ui-datepicker .ui-datepicker-calendar td a:hover {
        background: #fdb714;
        color: #fff; }
    .ui-datepicker .ui-datepicker-calendar td.ui-datepicker-today a {
        position: relative; }
    .ui-datepicker .ui-datepicker-calendar td.ui-datepicker-today a:before {
        content: "";
        border-right: 5px solid #fdb714;
        border-top: 5px solid transparent;
        position: absolute;
        bottom: 4px;
        right: 4px; }


</style>


<body class="gray-bg">

    <!--Top Navbar-->
    <?php include_once('templates/default_top_navbar.php'); ?>
    <!--End of Top Navbar-->


    <!--Page Title-->
    <div class="row">

        <div class="slideshow-bg">
            <div class="flexslider">
                <ul class="slides" style="padding: 0px">
                    <li>
                        <div class="slidebg" style="background-image: url(<?php echo base_url(); ?>img/1.jpg);"></div>
                    </li>
                    <li>
                        <div class="slidebg" style="background-image: url(<?php echo base_url(); ?>img/2.jpg);"></div>
                    </li>
                    <li>
                        <div class="slidebg" style="background-image: url(<?php echo base_url(); ?>img/3.jpg);"></div>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="center-block-wrapper">
                    <div class="center-block align-center">
                        <div class="block bg-title-section">
                            <br />
                            <h1>FIND YOUR PERFECT ADVENTURE</h1>
                            <br />
                            <h3>GET 20% DISCOUNT ON SINGLE TOUR PACKAGE</h3>
                            <br />
                        </div>
                        <div class="search-box">
                            <form role="search" method="get" id="searchform" class="tour-searchform2" action="#">
                                <input type="hidden" name="post_type" value="tour">
                                <div class="row">
                                    <div class="form-group col-sm-4 col-md-3">
                                        <input type="text" name="s" class="input-text full-width" placeholder="Enter a destination or tour name" />
                                    </div>
                                    <div class="form-group col-sm-8 col-md-4">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap from-today">
                                                    <input name="date_from" type="text" class="input-text full-width" placeholder="Date From" />
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="datepicker-wrap from-today">
                                                    <input name="date_to" type="text" class="input-text full-width" placeholder="Date To" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6 col-md-3">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="selector">
                                                    <select name="tour_types" class="full-width">
                                                        <option value="">Trip Type</option>
                                                        <option value="47">City Tour</option>
                                                        <option value="48">Cultural</option>
                                                        <option value="50">Honeymoon</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="text" name="max_price" class="input-text full-width" placeholder="Max Budget (usd)" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6 col-md-2">
                                        <button class="button btn-medium full-width uppercase sky-blue1">SEARCH NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
    <!--End of the Page Title-->





    <!-- Page Content -->
    <div class="container">
        <!-- Features Section -->
        <div class="row">

            <style type="text/css">

                .grid_3{
                    width:280px;
                    margin:10px;
                    float:left;	
                    display:inline;

                }


                /*font*/
                body, h1, h2, h3, h4, p, select, .rightsearchopen input[type='text'], .newsletterfooter input[type="text"], input[type="text"], input[type="email"], input[type="date"], textarea, input[type="submit"], .contactform input[type="text"], .contactform input[type="submit"], .contactform textarea, .page-template-template-page-full-width-section-php pre{
                    font-family: 'Signika', sans-serif;
                }
                end font

                /*start tag*/
                h1{
                    color:#5e6d81;
                    font-size:30px;
                    margin:0px;
                    padding:0px;
                    font-weight:600;
                }

                p{
                    color:#a9a9a9;
                    font-size:17px;
                    margin:0px;
                    padding:0px;
                    font-weight:300;
                }
                a{
                    text-decoration:none;	
                }
                a img{
                    border:0px;	
                }



                /*start hometours*/



                .imghometour{
                    width:100%;
                    float:left;
                    height:auto;	
                }
                .datedayhometour{
                    float:left;
                    width:100%;	
                    height: 55px;
                }
                .datehometour{
                    padding:20px;
                    color:#FFF;
                    float:left;	
                }
                .dayhometour{
                    background-color:#434A54;
                    padding:10px 20px;
                    float:right;
                    text-align:center;
                    line-height:1;
                }
                .dayhometour p{
                    font-size:25px;
                    color:#b1bac3;	
                }
                .dayhometour span{
                    color:#fff;
                    font-size:10px;
                }
                .descriptionhometour{
                    float:left;
                    width:100%;
                    background-color:#f9fafc;
                    overflow:hidden;
                    -webkit-box-shadow: inset -1px 0px 0px 0px rgba(244, 244, 246, 1.0);
                    box-shadow: inset -1px 0px 0px 0px rgba(244, 244, 246, 1.0);		
                }
                .titledescriptionhometour{
                    float:left;
                    width:100%;
                    margin-bottom:10px;
                }
                .descriptionhometour p{
                    padding:20px;
                    font-size:15px;	
                }

                .bulletlisthometour{
                    float:right;
                    width:6px;
                    height:6px;
                    border-radius:5px;
                    margin:4px 0px 10px 20px;		
                }
                .listhometour ul{
                    list-style:none;
                    margin:0px;
                    padding:0px;
                    float:left;		
                }
                .listhometour ul li{
                    border-bottom:1px solid #ebeef2;
                    float:left;
                    width:100%;		
                }
                .listhometour ul li p{
                    font-size: 15px;
                    margin: 0;
                    padding: 10px 20px;
                }
                .footerhometour{
                    float:right;
                    width:50%;
                    background-color:#f9fafc;
                    text-align:center;

                    -webkit-box-shadow: inset 0px 0px 0px 1px rgba(244, 244, 246, 1.0);
                    box-shadow: inset 0px 0px 0px 1px rgba(244, 244, 246, 1.0);	
                }
                .footerhometour a{
                    color:#96A0AF;
                    display:inline-block;
                    padding:15px 20px;
                    font-size:15px;
                    border-right:1px solid #EBECF0;
                }
                .footerhometour a:last-child{
                    border-right:none;
                }
                .grid_3 .titleimghometour,.grid_3 .datedescriptionhometour,.grid_3 .tabshometour,.grid_3 .listhometour,.grid_3 .footerhometour{
                    width:100%;		
                }
                .titlesection{
                    text-align:center;
                    padding:0px;	
                }

                .blue input[type="submit"], #sectionsearchtravel .blue input[type="submit"], .blue .labelsearchtravel, .lovetravel-form-booking .blue i, .blue .datedayhometour, .blue .ui-tabs-active a, .btnpromotion .blue, .blue .valueprice, .blue .priceleftarchivetour, .blue .areadmoresinglepostmasonry, .blue .btngalleryarchivedestination, .blue .btngallerypage, .blue .filterinputicon, .blue .titleinfocontact, .blue .markercontactmap .circlemarker, .blue .datearchivesinglepost, .blue .btn, .blue .readmoredestinationsingleproject, .blue .pricesingleproject, .blue .arrowcarouselprev, .blue .arrowcarouselnext, .blue .memberposition, .blue .progressbartitle, .blue .datesinglepost, .blue .form-submit input[type="submit"], .blue .comment-reply-link{
                    background-color:#14b9d5;	
                }
                .blue .bulletlisthometour, .blue .bulletevidenceleftmenu, .blue .bulletarchivedestination, .blue .bulletgallery{
                    border:2px solid #14b9d5;	
                }


            </style>


            <h1>Popular Fixed Tour Packages</h1>
            <hr style="margin: 10px;">

            <div class="col-md-3">
                <div class="hometour hometour-0 blue">
                    <div class="tophometour">
                        <div class="titleimghometour">
                            <div class="datedayhometour">
                                <p class="datehometour">JANUARY - 3 to 17</p>
                                <div class="dayhometour">
                                    <p>10</p>
                                    <span>DAYS</span>
                                </div>
                            </div>
                            <img alt="" class="imghometour" src="<?php echo base_url(); ?>img/tourhome21.jpg">
                        </div>
                        <div class="datedescriptionhometour">
                            <div class="descriptionhometour">
                                <p><strong class="titledescriptionhometour">Colombo - Kandy</strong></p>
                            </div>
                        </div>
                        <div class="listhometour">
                            <ul>
                                <li><p>Tour Budget<span class="bulletlisthometour"></span></p></li>
                                <li><p>No of Kilometers<span class="bulletlisthometour"></span></p></li>
                                <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            </ul>           
                        </div>
                        <div class="footerhometour">
                            <a href="#"><i style="color:#96a0af; font-size:15px" class="icon-export-alt"></i>MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="hometour hometour-0 blue">
                    <div class="tophometour">
                        <div class="titleimghometour">
                            <div class="datedayhometour">
                                <p class="datehometour">JANUARY - 3 to 17</p>
                                <div class="dayhometour">
                                    <p>10</p>
                                    <span>DAYS</span>
                                </div>
                            </div>
                            <img alt="" class="imghometour" src="<?php echo base_url(); ?>img/tourhome21.jpg">
                        </div>
                        <div class="datedescriptionhometour">
                            <div class="descriptionhometour">
                                <p><strong class="titledescriptionhometour">Colombo - Kandy</strong></p>
                            </div>
                        </div>
                        <div class="listhometour">
                            <ul>
                                <li><p>Tour Budget<span class="bulletlisthometour"></span></p></li>
                                <li><p>No of Kilometers<span class="bulletlisthometour"></span></p></li>
                                <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            </ul>           
                        </div>
                        <div class="footerhometour">
                            <a href="#"><i style="color:#96a0af; font-size:15px" class="icon-export-alt"></i>MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="hometour hometour-0 blue">
                    <div class="tophometour">
                        <div class="titleimghometour">
                            <div class="datedayhometour">
                                <p class="datehometour">JANUARY - 3 to 17</p>
                                <div class="dayhometour">
                                    <p>10</p>
                                    <span>DAYS</span>
                                </div>
                            </div>
                            <img alt="" class="imghometour" src="<?php echo base_url(); ?>img/tourhome21.jpg">
                        </div>
                        <div class="datedescriptionhometour">
                            <div class="descriptionhometour">
                                <p><strong class="titledescriptionhometour">Colombo - Kandy</strong></p>
                            </div>
                        </div>
                        <div class="listhometour">
                            <ul>
                                <li><p>Tour Budget<span class="bulletlisthometour"></span></p></li>
                                <li><p>No of Kilometers<span class="bulletlisthometour"></span></p></li>
                                <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            </ul>           
                        </div>
                        <div class="footerhometour">
                            <a href="#"><i style="color:#96a0af; font-size:15px" class="icon-export-alt"></i>MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="hometour hometour-0 blue">
                    <div class="tophometour">
                        <div class="titleimghometour">
                            <div class="datedayhometour">
                                <p class="datehometour">JANUARY - 3 to 17</p>
                                <div class="dayhometour">
                                    <p>10</p>
                                    <span>DAYS</span>
                                </div>
                            </div>
                            <img alt="" class="imghometour" src="<?php echo base_url(); ?>img/tourhome21.jpg">
                        </div>
                        <div class="datedescriptionhometour">
                            <div class="descriptionhometour">
                                <p><strong class="titledescriptionhometour">Colombo - Kandy</strong></p>
                            </div>
                        </div>
                        <div class="listhometour">
                            <ul>
                                <li><p>Tour Budget<span class="bulletlisthometour"></span></p></li>
                                <li><p>No of Kilometers<span class="bulletlisthometour"></span></p></li>
                                <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            </ul>           
                        </div>
                        <div class="footerhometour">
                            <a href="#"><i style="color:#96a0af; font-size:15px" class="icon-export-alt"></i>MORE</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- /.row -->



        <div class="row">

            <style type="text/css">


                /*font*/
                body, h1, h2, h3, h4, p, select, .rightsearchopen input[type='text'], .newsletterfooter input[type="text"], input[type="text"], input[type="email"], input[type="date"], textarea, input[type="submit"], .contactform input[type="text"], .contactform input[type="submit"], .contactform textarea, .page-template-template-page-full-width-section-php pre{
                    font-family: 'Signika', sans-serif;
                }
                /*end font*/

                p{
                    color:#a9a9a9;
                    font-size:17px;
                    margin:0px;
                    padding:0px;
                    font-weight:300;
                }

                .archivetour{
                    float:left;
                    width:100%;

                    background-color:#fff;

                    -webkit-box-shadow: inset 0px 0px 0px 1px #F4F4F6;
                    box-shadow: inset 0px 0px 0px 1px #F4F4F6;		
                }
                .leftarchivetour{
                    float:left;
                    width:50%;
                    position:relative;		
                }

                .pricetitleleftarchivetour{
                    float:left;
                    position:absolute;
                    bottom:-10px;
                    width:100%;
                    z-index:1;
                }
                .titleleftarchivetour{
                    padding:10px;
                    background-color:#434A54;
                    color:#B1BAC3;
                    font-size:15px;	
                    margin-top:25px;
                    margin-bottom:25px;
                }
                .priceleftarchivetour{
                    border:2px solid #fff;
                    float:left;
                    margin:0px 20px 0px 20px;
                    border-radius:100px;	
                }
                .priceleftarchivetour p{
                    width:90px;
                    height:90px;
                    font-size:25px;
                    color:#Fff;	
                    text-align:center;
                    line-height:90px;
                    font-weight:400;
                }
                .btnsarchivesingletravel{
                    position: absolute;
                    right: 5px;
                    top: 0;
                }
                .offerarchivesingletravel{
                    color: #fff;
                    display: inline-block;
                    float: right;
                    padding: 10px;
                    margin: 10px 5px;
                    border: 1px solid #fff;
                    font-size: 15px;
                    background: rgba(255,255,255,0.3);
                }

                .rightarchivetour{
                    float:left;
                    width:50%;		
                }
                .titledayarchivetour{
                    background-color:#F9FAFC;
                    float:left;
                    width:100%;	

                    position: relative;
                    overflow: hidden;

                    -webkit-box-shadow: inset 0px 0px 0px 1px rgba(244, 244, 246, 1.0);
                    box-shadow: inset 01px 0px 0px 1px rgba(244, 244, 246, 1.0);
                }
                .dayarchivetour{	
                    background-color: #f0f1f5;
                    padding: 10px 0px;
                    float: right;
                    text-align: center;
                    line-height: 1;
                    width: 70px;
                    height: 100%;
                    position: absolute;
                    right: 0;
                }
                .dayarchivetour p{
                    font-size:25px;
                    color:#5E6D81;	
                }
                .dayarchivetour span{
                    color:#5E6D81;
                    font-size:10px;
                }
                .titlearchivetour{
                    padding:20px 90px 20px 20px;
                    float:left;
                }
                .descriptioniconsarchivetour{
                    display: inline-block;
                    padding: 20px;
                    font-size:15px;
                }
                .descriptioniconsarchivetour p{
                    font-size:15px;
                }

                .grid_3 .leftarchivetour,.grid_3 .rightarchivetour{
                    width:100%;	
                }
                /*end archive tour*/

                .imgarchivesinglepost img, .imgevidencepage img{
                    width:100%;
                    height:auto;
                    float:left;
                }



                .blue input[type="submit"], #sectionsearchtravel .blue input[type="submit"], .blue .labelsearchtravel, .lovetravel-form-booking .blue i, .blue .datedayhometour, .blue .ui-tabs-active a, .btnpromotion .blue, .blue .valueprice, .blue .priceleftarchivetour, .blue .areadmoresinglepostmasonry, .blue .btngalleryarchivedestination, .blue .btngallerypage, .blue .filterinputicon, .blue .titleinfocontact, .blue .markercontactmap .circlemarker, .blue .datearchivesinglepost, .blue .btn, .blue .readmoredestinationsingleproject, .blue .pricesingleproject, .blue .arrowcarouselprev, .blue .arrowcarouselnext, .blue .memberposition, .blue .progressbartitle, .blue .datesinglepost, .blue .form-submit input[type="submit"], .blue .comment-reply-link{
                    background-color:#14b9d5;	
                }

                .green input[type="submit"], #sectionsearchtravel .green input[type="submit"], .green .labelsearchtravel, .lovetravel-form-booking .green i, .green .datedayhometour, .green .ui-tabs-active a, .btnpromotion .green, .green .valueprice, .green .priceleftarchivetour, .green .areadmoresinglepostmasonry, .green .btngalleryarchivedestination, .green .btngallerypage, .green .filterinputicon, .green .titleinfocontact, .green .markercontactmap .circlemarker, .green .datearchivesinglepost, .green .btn, .green .readmoredestinationsingleproject, .green .pricesingleproject, .green .arrowcarouselprev, .green .arrowcarouselnext, .green .memberposition, .green .progressbartitle, .green .datesinglepost, .green .form-submit input[type="submit"], .green .comment-reply-link{
                    background-color:#1bbc9b;	
                }

                .yellow input[type="submit"], #sectionsearchtravel .yellow input[type="submit"], .yellow .labelsearchtravel, .lovetravel-form-booking .yellow i, .yellow .datedayhometour, .yellow .ui-tabs-active a, .btnpromotion .yellow, .yellow .valueprice, .yellow .priceleftarchivetour, .yellow .areadmoresinglepostmasonry, .yellow .btngalleryarchivedestination, .yellow .btngallerypage, .yellow .filterinputicon, .yellow .titleinfocontact, .yellow .markercontactmap .circlemarker, .yellow .datearchivesinglepost, .yellow .btn, .yellow .readmoredestinationsingleproject, .yellow .pricesingleproject, .yellow .arrowcarouselprev, .yellow .arrowcarouselnext, .yellow .memberposition, .yellow .progressbartitle, .yellow .datesinglepost, .yellow .form-submit input[type="submit"], .yellow .comment-reply-link{
                    background-color:#FFD205;	
                }

                .orange input[type="submit"], #sectionsearchtravel .orange input[type="submit"], .orange .labelsearchtravel, .lovetravel-form-booking .orange i, .orange .datedayhometour, .orange .ui-tabs-active a, .btnpromotion .orange, .orange .valueprice, .orange .priceleftarchivetour, .orange .areadmoresinglepostmasonry, .orange .btngalleryarchivedestination, .orange .btngallerypage, .orange .filterinputicon, .orange .titleinfocontact, .orange .markercontactmap .circlemarker, .orange .datearchivesinglepost, .orange .btn, .orange .readmoredestinationsingleproject, .orange .pricesingleproject, .orange .arrowcarouselprev, .orange .arrowcarouselnext, .orange .memberposition, .orange .progressbartitle, .orange .datesinglepost, .orange .form-submit input[type="submit"], .orange .comment-reply-link{
                    background-color:#F3A46B;	
                }

                .red input[type="submit"], #sectionsearchtravel .red input[type="submit"], .red .labelsearchtravel, .lovetravel-form-booking .red i, .red .datedayhometour, .red .ui-tabs-active a, .btnpromotion .red, .red .valueprice, .red .priceleftarchivetour, .red .areadmoresinglepostmasonry, .red .btngalleryarchivedestination, .red .btngallerypage, .red .filterinputicon, .red .titleinfocontact, .red .markercontactmap .circlemarker, .red .datearchivesinglepost, .red .btn, .red .readmoredestinationsingleproject, .red .pricesingleproject, .red .arrowcarouselprev, .red .arrowcarouselnext, .red .memberposition, .red .progressbartitle, .red .datesinglepost, .red .form-submit input[type="submit"], .red .comment-reply-link{
                    background-color:#F76570;	
                }

                .violet input[type="submit"], #sectionsearchtravel .violet input[type="submit"], .violet .labelsearchtravel, .lovetravel-form-booking .violet i, .violet .datedayhometour, .violet .ui-tabs-active a, .btnpromotion .violet, .violet .valueprice, .violet .priceleftarchivetour, .violet .areadmoresinglepostmasonry, .violet .btngalleryarchivedestination, .violet .btngallerypage, .violet .filterinputicon, .violet .titleinfocontact, .violet .markercontactmap .circlemarker, .violet .datearchivesinglepost, .violet .btn, .violet .readmoredestinationsingleproject, .violet .pricesingleproject, .violet .arrowcarouselprev, .violet .arrowcarouselnext, .violet .memberposition, .violet .progressbartitle, .violet .datesinglepost, .violet .form-submit input[type="submit"], .violet .comment-reply-link{
                    background-color:#C377E4;	
                }




                /*1200 Grid*/
                .grid_1, .grid_2, .grid_3, .grid_4, .grid_5, .grid_6, .grid_7, .grid_8, .grid_9, .grid_10, .grid_11, .grid_12{
                    margin:10px;
                    float:left;	
                    display:inline;

                }

                .grid_1 {width:80px;}
                .grid_2 {width:180px;}
                .grid_3 {width:265px;}
                .grid_4 {width:380px;}
                .grid_5 {width:480px;}
                .grid_6 {width:580px;}
                .grid_7 {width:680px;}
                .grid_8 {width:780px;}
                .grid_9 {width:880px;}
                .grid_10 {width:980px;}
                .grid_11 {width:1080px;}
                .grid_12 {width:1180px;}




            </style>


            <h1>Popular Custom Trip Plans</h1>
            <hr style="margin: 10px;">

            <div class="yellow grid_3">
                <div class="archivetour">
                    <div class="leftarchivetour">
                        <a href="travel/brazil/index.html">
                            <div class="imgarchivesinglepost">
                                <div class="btnsarchivesingletravel">
                                    <a href="travel/brazil/index.html">
                                        <p class="offerarchivesingletravel">MORE</p>
                                    </a>
                                </div>
                                <img width="460" height="341" src="<?php echo base_url(); ?>img/Brasil21.jpg" class="attachment-post-thumbnail wp-post-image" alt="Brasil2" />
                            </div>
                        </a>
                        <div class="pricetitleleftarchivetour yellow">
                            <div class="priceleftarchivetour">
                                <p>1500 $</p>
                            </div>
                            <p class="titleleftarchivetour"><span class="striketext">1700 $</span>
                            </p>
                        </div>
                    </div>
                    <div class="rightarchivetour">
                        <div class="titledayarchivetour">
                            <a href="travel/brazil/index.html">
                                <p class="titlearchivetour">Brazil</p>
                            </a>
                            <div class="dayarchivetour">
                                <p>15</p><span>DAYS</span>
                            </div>
                        </div>
                        <div class="descriptioniconsarchivetour">
                            <p>Mauris sit amet sodales ipsum. Susp turpis diam, rutrum vel urna et, rutrui mattis sem. Mauris odio ipsum, phare quis ante condimentum, lacinia fring.
                            <div class="dividerheight20"></div><a class="tooltip none" title="Sun" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-sun-inv"></i></a> <a class="tooltip none" title="Drinks" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-glass"></i></a> <a class="tooltip none" title="Flight" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-flight"></i></a> <a class="tooltip none" title="Humidity" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-tint"></i></a> <a class="tooltip none" title="Dinner" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-food"></i></a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="blue grid_3  ">
                <div class="archivetour">
                    <div class="leftarchivetour">
                        <a href="travel/alaska/index.html">
                            <div class="imgarchivesinglepost">
                                <div class="btnsarchivesingletravel">
                                    <a href="travel/alaska/index.html">
                                        <p class="offerarchivesingletravel">MORE</p>
                                    </a>
                                </div><img width="460" height="341" src="<?php echo base_url(); ?>img/alaska21.jpg" class="attachment-post-thumbnail wp-post-image" alt="alaska2" />
                            </div>
                        </a>
                        <div class="pricetitleleftarchivetour blue">
                            <div class="priceleftarchivetour">
                                <p>1800 $</p>
                            </div>
                            <p class="titleleftarchivetour">Last Minute</p>
                        </div>
                    </div>
                    <div class="rightarchivetour">
                        <div class="titledayarchivetour">
                            <a href="travel/alaska/index.html">
                                <p class="titlearchivetour">Alaska</p>
                            </a>
                            <div class="dayarchivetour">
                                <p>20</p><span>DAYS</span>
                            </div>
                        </div>
                        <div class="descriptioniconsarchivetour">
                            <p>Mauris sit amet sodales ipsum. Susp turpis diam, rutrum vel urna et, rutrui mattis sem. Mauris odio ipsum, phare quis ante condimentum, lacinia fring.
                            <div class="dividerheight20"></div><a class="tooltip none" title="Snow" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-snowflake"></i></a> <a class="tooltip none" title="Insurance" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-medkit"></i></a> <a class="tooltip none" title="Promotion" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-star"></i></a> <a class="tooltip none" title="All Year" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-calendar"></i></a> <a class="tooltip none" title="Medical" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-user-md"></i></a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="violet grid_3  ">
                <div class="archivetour">
                    <div class="leftarchivetour">
                        <a href="travel/china/index.html">
                            <div class="imgarchivesinglepost">
                                <div class="btnsarchivesingletravel">
                                    <a href="travel/china/index.html">
                                        <p class="offerarchivesingletravel">MORE</p>
                                    </a>
                                </div><img width="460" height="341" src="<?php echo base_url(); ?>img/china1.jpg" class="attachment-post-thumbnail wp-post-image" alt="china" />
                            </div>
                        </a>
                        <div class="pricetitleleftarchivetour violet">
                            <div class="priceleftarchivetour">
                                <p>3700 $</p>
                            </div>
                            <p class="titleleftarchivetour"><span class="striketext">4000 $</span>
                            </p>
                        </div>
                    </div>
                    <div class="rightarchivetour">
                        <div class="titledayarchivetour">
                            <a href="travel/china/index.html">
                                <p class="titlearchivetour">China</p>
                            </a>
                            <div class="dayarchivetour">
                                <p>12</p><span>DAYS</span>
                            </div>
                        </div>
                        <div class="descriptioniconsarchivetour">
                            <p>Mauris sit amet sodales ipsum. Susp turpis diam, rutrum vel urna et, rutrui mattis sem. Mauris odio ipsum, phare quis ante condimentum, lacinia fring.
                            <div class="dividerheight20"></div><a class="tooltip none" title="Cloudy" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-cloud-sun-inv"></i></a> <a class="tooltip none" title="On The Road" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-road"></i></a> <a class="tooltip none" title="Group Trip" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-users"></i></a> <a class="tooltip none" title="Breakfast" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-coffee"></i></a> <a class="tooltip none" title="Last Minute" href="#"><i style="color:#a9a9a9; font-size:15px" class="icon-gauge"></i></a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="orange grid_3  ">
                <div class="archivetour">
                    <div class="leftarchivetour">
                        <a href="travel/maldives/index.html">
                            <div class="imgarchivesinglepost">
                                <div class="btnsarchivesingletravel">
                                    <p class="offerarchivesingletravel">LAST MINUTE</p>
                                </div><img width="460" height="341" src="<?php echo base_url(); ?>img/maldives1.jpg" class="attachment-post-thumbnail wp-post-image" alt="maldives" />
                            </div>
                        </a>
                        <div class="pricetitleleftarchivetour orange">
                            <div class="priceleftarchivetour">
                                <p>2500 $</p>
                            </div>
                            <p class="titleleftarchivetour">50% OFF</p>
                        </div>
                    </div>
                    <div class="rightarchivetour">
                        <div class="titledayarchivetour">
                            <a href="travel/maldives/index.html">
                                <p class="titlearchivetour">Maldives</p>
                            </a>
                            <div class="dayarchivetour">
                                <p>20</p><span>DAYS</span>
                            </div>
                        </div>
                        <div class="descriptioniconsarchivetour">
                            <p>Mauris sit amet sodales ipsum. Susp turpis diam, rutrum vel urna et, rutrui mattis sem. Mauris odio ipsum, phare quis ante condimentum, lacinia fring.
                            </p>
                        </div>
                    </div>
                </div>

            </div>



        </div>




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

    <script src="<?php echo base_url() . 'js/jquery-ui.min.js' ?>"></script>


    <script type='text/javascript' src="<?php echo base_url() . 'js/components/flexslider/jquery.flexslider-min4189.js' ?>"></script>
    <script type='text/javascript'>

        var settings = {
            "sticky_menu": "1"
        };

    </script>
    <script src="<?php echo base_url() . 'js/theme-scripts4189.js' ?>"></script>


    <script src="<?php echo base_url() . 'js/plugins/jquery.raty.js' ?>"></script>




    <script type="text/javascript">


    </script>








</body>

</html>
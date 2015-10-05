<!--Head-->
<?php include_once('templates/head.php'); ?>
<!--End of Head-->


<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/parallax-slider/css/parallax-slider.css') ?>"/>

<style type="text/css">
    body {
        padding-top: 40px;
    }

    .gray-bg{
        background-color: #FFF;
    }

    html {
        font-size: 16px;
        min-height: 100%; }

</style>


<body class="gray-bg">

    <!--Top Navbar-->
    <?php include_once('templates/default_top_navbar.php'); ?>
    <!--End of Top Navbar-->


    <!--Page Title-->
    <div class="row">

        <div id="da-slider" class="da-slider">
            <div class="da-slide">
                <h2><i>Travel with Us</i> <br /> <i>For the </i> <br /> <i>Best Deals</i></h2>
                <p><i>Find the best travel deals with Travel Planner.</i> <br /> <i>Browse by destination or point of interest</i> <br /> <i>to find cheap travel deals for your next trip.</i></p>
                <div class="da-img"><img src="<?php echo base_url('css/plugins/parallax-slider/img/1.png'); ?>" alt="" /></div>
            </div>
            <div class="da-slide">
                <h2><i>Find your</i> <br /> <i>suitable tour package</i> <br /> <i>quickly</i></h2>
                <p><i>We provide the best Sri Lanka</i> <br /> <i>holiday packages and Best travel &</i><br /> <i>tour packages to Sri Lanka.</i></p>
                <div class="da-img col-md-12">
                    <div class="col-md-12">
                        <iframe src="http://player.vimeo.com/video/47911018" width="100%" height="320" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe> 
                    </div>
                </div>
            </div>
            <div class="da-slide">
                <h2><i>Discover </i> <br /> <i>Most Beautiful Places</i> <br /> <i>In Sri Lanka</i></h2>
                <p><i>There are amazing places to visit in Sri Lanka,</i> <br /> <i>you never knew existed including beaches & wildlife.</i> <br /> <i>Find out more about Best Places to visit in Sri Lanka.</i></p>
                <div class="da-img"><img src="<?php echo base_url('css/plugins/parallax-slider/img/html5andcss3.png'); ?>" alt="image01" /></div>
            </div>
            <nav class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>		
            </nav>
        </div><!--/da-slider-->



    </div>
    <!--End of the Page Title-->

    <style type="text/css">
        /*Purchase*/
        .purchase {
            padding:30px 0 20px;
            box-shadow:inset 0 0 4px #eee;
            background:url('<?php echo base_url('img/breadcrumbs.png') ?>') repeat;
        }
        .purchase .container {
            padding:0 20px;
        }
        .purchase span {
            color:#666;
            display:block;
            font-size:32px;
            line-height:35px;
            margin-bottom:12px;
        }
        /*Block headline*/
        .heading {
            padding:5px 20px 5px 20px;
            border-left:4px solid #27c5f2; 
        }

        .headline {
            display:block;
            margin:20px 0 25px 0;
            border-bottom:1px dotted #e4e9f0;
        }
        .headline h3, 
        .headline h4 {
            color:#585f69;
            margin:0 0 -2px 0;
            padding-right:10px;
            display:inline-block;
            text-shadow:0 0 1px #f6f6f6;
            border-bottom:2px solid #72c02c;
            font-weight:normal !important; 
            font-family:'Open Sans', sans-serif; 
            font-size: 24px;
        }
    </style>

    <div class="row purchase">
        <div class="container">
            <div class="col-md-12">
                <span>FIND YOUR PERFECT ADVENTURE</span>
                <p>We at Travel Planner, offers to you a diverse collection of fixed tour packages like no other. We offer packages that are personalized based on the ratings of
                    the valued customers using Travel Planner. We extend our diversity in the packages we offer by also allowing TP users to share their tour plans with you..</p>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="headline"><h3>Popular Tour Packages</h3></div>
            
            <div class="col-md-3">
                <div class="hometour hometour-0 blue">
                    <div class="tophometour">
                        <div class="titleimghometour">
                            <div class="datedayhometour">
                                <p class="datehometour">Cultural Heritage</p>
                                <div class="dayhometour">
                                    <p>8</p>
                                    <span>DAYS</span>
                                </div>
                            </div>
                            <img alt="" class="imghometour" src="<?php echo base_url('img/tour_packages/Cultural Heritage.jpg'); ?>">
                        </div>
                        <div class="datedescriptionhometour">
                            <div class="descriptionhometour">
                                <p>Airport, Negombo, Pinnawala, Anuradhapura, Mihintale, Habarana, Polonnaruwa, Sigiriya, Dambulla, Kandy..</p>
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
                            <a href="<?php echo site_url('tour_packages/culture_heritage');?>" target="_blank"><i class="fa fa-external-link"></i> Tour Package Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hometour hometour-0 blue">
                    <div class="tophometour">
                        <div class="titleimghometour">
                            <div class="datedayhometour">
                                <p class="datehometour">Classic Sri Lanka</p>
                                <div class="dayhometour">
                                    <p>10</p>
                                    <span>DAYS</span>
                                </div>
                            </div>
                            <img alt="" class="imghometour" src="<?php echo base_url('img/tour_packages/Classic Sri Lanka.jpg'); ?>">
                        </div>
                        <div class="datedescriptionhometour">
                            <div class="descriptionhometour">
                                <p>Airport, Negombo, Pinnawala, Sigiriya, Habarana, Polonnaruwa, Dambulla, Kandy, Kitulgala, Nuwara Eliya, Ella, Yala..</p>
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
                            <a href="<?php echo site_url('tour_packages/classic_sri_lanka');?>" target="_blank"><i class="fa fa-external-link"></i> Tour Package Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hometour hometour-0 blue">
                    <div class="tophometour">
                        <div class="titleimghometour">
                            <div class="datedayhometour">
                                <p class="datehometour">Ceylon Tea Trails</p>
                                <div class="dayhometour">
                                    <p>11</p>
                                    <span>DAYS</span>
                                </div>
                            </div>
                            <img alt="" class="imghometour" src="<?php echo base_url('img/tour_packages/Tea Trails.jpg'); ?>">
                        </div>
                        <div class="datedescriptionhometour">
                            <div class="descriptionhometour">
                                <p>Airport, Negombo, Pinnawala, Kandy, Nuwara Eliya, Ella, Udawalawe, Galle, Bentota, Colombo..</p>
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
                            <a href="<?php echo site_url('tour_packages/ceylon_tea_trails');?>" target="_blank"><i class="fa fa-external-link"></i> Tour Package Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hometour hometour-0 blue">
                    <div class="tophometour">
                        <div class="titleimghometour">
                            <div class="datedayhometour">
                                <p class="datehometour">Explore Sri Lanka</p>
                                <div class="dayhometour">
                                    <p>14</p>
                                    <span>DAYS</span>
                                </div>
                            </div>
                            <img alt="" class="imghometour" src="<?php echo base_url('img/tour_packages/Explore Sri Lanka.jpg'); ?>">
                        </div>
                        <div class="datedescriptionhometour">
                            <div class="descriptionhometour">
                                <p>Airport, Negombo, Anuradhapura, Habarana, Polonnaruwa, Sigiriya, Dambulla, Kandy, Pinnawala, Kitulgala, Nuwara Eliya, Ella, Yala..</p>
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
                            <a href="<?php echo site_url('tour_packages/explore_srilanka');?>" target="_blank"><i class="fa fa-external-link"></i> Tour Package Details</a>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>



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
                    font-size:14px;
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
                    height:180px;	
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
                    padding:10px;
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
                    width:100%;
                    background-color:#f9fafc;
                    text-align:center;

                    -webkit-box-shadow: inset 0px 0px 0px 1px rgba(244, 244, 246, 1.0);
                    box-shadow: inset 0px 0px 0px 1px rgba(244, 244, 246, 1.0);	
                }
                .footerhometour a{
                    color:#96A0AF;
                    display:inline-block;
                    padding:10px;
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

                .blue .datedayhometour{
                    background-color:#14b9d5;	
                }
                .blue .bulletlisthometour, .blue .bulletevidenceleftmenu, .blue .bulletarchivedestination, .blue .bulletgallery{
                    border:2px solid #14b9d5;	
                }


            </style>


            

           



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
                    font-size:14px;
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

            <div class="headline"><h3>Custom Tour Packages</h3></div>

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

    </div>
    <!-- /.container -->
    
    <!--Footer2-->
    <?php include_once('templates/footer2.php'); ?>
    <!--End of the Footer2-->


    <!-- Mainly scripts -->
    <script src="<?php echo base_url() . 'js/jquery-1.11.2.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'js/bootstrap.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'js/jquery-ui.min.js' ?>"></script>

    <script type='text/javascript' src="<?php echo base_url('js/plugins/parallax-slider/modernizr.js'); ?>"></script>
    <script type='text/javascript' src="<?php echo base_url('js/plugins/parallax-slider/jquery.cslider.js'); ?>"></script>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            $('#da-slider').cslider();
        });
    </script>








</body>

</html>
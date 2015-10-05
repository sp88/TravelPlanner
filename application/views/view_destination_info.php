<!--Head-->
<?php include_once('templates/head.php'); ?>
<!--End of Head-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/owl-carousel/owl.carousel.css') ?>"/>

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
    /*    footer {
            margin: 50px 0;
        }*/
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

<style type="text/css">
    body {
        padding-top: 70px;
    }
    .gray-bg{
        background-color: #FFF;
    }
    /*Block headline*/
    .heading {
        padding:5px 20px 5px 20px;
        border-left:4px solid #27c5f2; 
    }

    .headline {
        display:block;
        margin:10px 0 25px 0;
        border-bottom:1px dotted #e4e9f0;
    }
    .headline h2,
    .headline h3, 
    .headline h4 {
        color:#585f69;
        margin:0 0 -2px 0;
        padding-right:10px;
        display:inline-block;
        text-shadow:0 0 1px #f6f6f6;
        border-bottom:2px solid #72c02c;
        font-weight: normal !important;
        font-family: 'Open Sans', sans-serif;
        font-size: 20px;
    }

    /*Posts*/
    .posts .dl-horizontal { 
        margin-bottom:0;
        padding:3px;
    }
    .posts .dl-horizontal:hover { 
        /*border-right:solid 2px #72c02c;*/
        -webkit-transition:all 0.4s ease-in-out;
        -moz-transition:all 0.4s ease-in-out;
        -o-transition:all 0.4s ease-in-out;
        transition:all 0.4s ease-in-out;
    }
    .posts .dl-horizontal dt { 
        width:56px; 
    }
    .posts .dl-horizontal dt img { 
        width:50px; 
        height:50px; 
        border:solid 3px #eee;
    }
    .posts .dl-horizontal dd { 
        margin-left:66px;
    }
    .posts .dl-horizontal dd p { 
        margin:0;
    }
    .posts .dl-horizontal a {
        font-size:15px;
        line-height:14px !important; 
    }
    .posts .dl-horizontal a:hover { 
        color:#72c02c; 
    }
    .posts .dl-horizontal:hover dt img,
    .posts .dl-horizontal:hover dd a { 
        border-color:#72c02c !important;
        -webkit-transition:all 0.4s ease-in-out;
        -moz-transition:all 0.4s ease-in-out;
        -o-transition:all 0.4s ease-in-out;
        transition:all 0.4s ease-in-out;
    }

    /*Blog Page
    ------------------------------------*/
    .page-header{
        color:#72c02c;
        margin-top: 0px;
        margin-bottom: 15px;
        text-shadow: 0 0 1px #f6f6f6;
        font-weight: normal !important;
        font-family: 'Open Sans', sans-serif;
        font-size: 24.5px;
        padding-bottom: 5px;
    }



    /*Gallery*/
    .gallery{
        margin-left: -45px;
    }
    .gallery li {
        display:inline;
    }
    .gallery li img {
        opacity:0.6;
        width:60px;
        height:60px;
        margin:0 2px 8px;
    }
    .gallery li img:hover {
        opacity:1;
        box-shadow:0 0 0 2px #72c02c;
    }

    /*CSS3 Hover Effects*/
    .hover-effect {
        -webkit-transition:all 0.4s ease-in-out;
        -moz-transition:all 0.4s ease-in-out;
        -o-transition:all 0.4s ease-in-out;
        transition:all 0.4s ease-in-out;
    }
    .hover-effect-kenburn {
        left:10px;
        margin-left:-10px;
        position:relative;
        -webkit-transition: all 0.8s ease-in-out;
        -moz-transition: all 0.8s ease-in-out;
        -o-transition: all 0.8s ease-in-out;
        -ms-transition: all 0.8s ease-in-out;
        transition: all 0.8s ease-in-out;
    }
    .hover-effect-kenburn:hover {
        -webkit-transform: scale(2) rotate(5deg);
        -moz-transform: scale(2) rotate(5deg);
        -o-transform: scale(2) rotate(5deg);
        -ms-transform: scale(2) rotate(5deg);
        transform: scale(2) rotate(5deg);
    }





    /*Owl Carousel
    ------------------------------------*/
    .owl-btn {
        color: #777;
        cursor: pointer;
        font-size: 18px;
        padding: 2px 9px;
        text-align: center;
        background: #f5f5f5;
    }

    .owl-btn:hover {
        color: #fff;
        background: #72c02c;
    }

    /*Owl Carousel v1*/
    .owl-carousel-v1 .owl-navigation {
        text-align: right;
        margin-bottom: 20px;
    }

    .owl-carousel-v1 .item {
        margin: 0 5px;
    }

    .owl-carousel-v1 .item img {
        text-align: center;
    }

    .owl-carousel-v1 .owl-pagination {
        display: none;
    }

    /*Recent Works (Owl Carousel)
    ------------------------------------*/
    .owl-work-v1 .owl-navigation {
        top: 3px;
        position: relative;
    }

    .owl-work-v1 .owl-navigation {
        margin-bottom: 10px;
    }

    .owl-work-v1 .item a {
        text-align: center;
    }

    .owl-work-v1 .item a:hover {
        text-decoration: none;
    }

    .owl-work-v1 .item a:hover strong {
        color: #555;
    }

    .owl-work-v1 .item em.overflow-hidden {
        display: block;
    }

    .owl-work-v1 .item a span {
        display: block;
        padding: 10px;
        border-bottom: solid 2px #eee;
    }

    .owl-work-v1 .item a strong {
        color: #555;
        display: block;
    }

    .owl-work-v1 .item a i {
        color: #777;
    }

    .owl-work-v1 .item a img {
        -webkit-transition: all 0.8s ease-in-out;
        -moz-transition: all 0.8s ease-in-out;
        -o-transition: all 0.8s ease-in-out;
        -ms-transition: all 0.8s ease-in-out;
        transition: all 0.8s ease-in-out;
    }

    .owl-work-v1 .item a:hover img {
        opacity: 0.8;
        -webkit-transform: scale(1.2) rotate(3deg);
        -moz-transform: scale(1.2) rotate(3deg);
        -o-transform: scale(1.0) rotate(3deg);
        -ms-transform: scale(1.2) rotate(3deg);
        transform: scale(1.2) rotate(3deg);
    }

    .owl-work-v1 .item a:hover span {
        border-bottom: solid 2px #72c02c;
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    /*Block Headline*/

    .headline h2 {
        font-size: 22px;
    }

    /*Others
    ------------------------------------*/
    .overflow-hidden { overflow: hidden;}


    .thumbnail-style { 
        padding: 7px;
        margin-bottom: 20px; 
    }
    .thumbnail-style:hover { 
        box-shadow: 0 0 8px #ddd; 
        -webkit-transition: box-shadow 0.2s ease-in-out;
        -moz-transition: box-shadow 0.2s ease-in-out;
        -o-transition: box-shadow 0.2s ease-in-out;
        transition: box-shadow 0.2s ease-in-out;
    }

    .thumbnail-style .thumbnail-img {
        position: relative;
        margin-bottom: 11px;
    }

    .thumbnail-style a.btn-more {
        right: -10px;
        bottom: 10px;
        color: #fff;
        padding: 1px 6px;
        position: absolute;
        background: #72c02c;
        display: inline-block; 
    }
    .thumbnail-style a.btn-more:hover {
        text-decoration: none;
        box-shadow: 0 0 0 2px #5fb611;
    }
    .thumbnail-style:hover a.btn-more {
        right: 10px;
    }

    .thumbnail-kenburn img {
        /*left: 10px;*/
        margin-left: 0px;
        position: relative;
        -webkit-transition: all 0.8s ease-in-out;
        -moz-transition: all 0.8s ease-in-out;
        -o-transition: all 0.8s ease-in-out;
        -ms-transition: all 0.8s ease-in-out;
        transition: all 0.8s ease-in-out;
    }
    .thumbnail-kenburn:hover img {
        -webkit-transform: scale(1.2) rotate(2deg);
        -moz-transform: scale(1.2) rotate(2deg);
        -o-transform: scale(1.2) rotate(2deg);
        -ms-transform: scale(1.2) rotate(2deg);
        transform: scale(1.2) rotate(2deg);
    }

    /*Testimonials*/

    .testimonials {
        margin-bottom: 10px;
    }

    .testimonials .testimonial-info {
        color: #72c02c;
        font-size: 16px;
        padding: 0 15px;
        margin-top: 18px;
    }

    .testimonials .testimonial-info span {
        top: 3px;
        position: relative;
    }

    .testimonials .testimonial-info em {
        color: #777;
        display: block;
        font-size: 13px;
    }

    /*.testimonials .testimonial-info img {*/
    .testimonials_user_img {
        width: 60px;
        float: left;
        height: 60px;
        padding: 2px;
        margin-right: 15px;
        border: solid 1px #ccc;
    }

    .testimonials .testimonial-author {
        overflow: hidden;
    }

    .testimonials .carousel-arrow {
        top: -65px;
        position: relative;
    }

    .testimonials .carousel-arrow i {
        color: #777;
        padding: 2px;
        min-width: 25px;
        font-size: 20px;
        text-align: center;
        background: #f5f5f5;
    }

    .testimonials .carousel-arrow i:hover {
        color: #fff;
        background: #72c02c;
    }

    .testimonials .carousel-control {
        opacity: 1;
        width: 100%;
        text-align: right;
        text-shadow: none;
        position: absolute;
        filter: Alpha(opacity 100);
        /*For IE*/
    }

    .testimonials .carousel-control.left {
        right: 27px;
        left: auto;
    }

    .testimonials .carousel-control.right {
        right: 0px;
    }
    /*Testimonials v1*/

    .testimonials.testimonials-v1 .item p {
        position: relative;
    }

    .testimonials.testimonials-v1 .item p:after,
    .testimonials.testimonials-v1 .item p:before {
        left: 80px;
        bottom: -20px;
    }

    .testimonials.testimonials-v1 .item p:after {
        border-top: 22px solid;
        border-left: 0 solid transparent;
        border-right: 22px solid transparent;
    }
    /*General Testimonials v1/v2*/

    .testimonials.testimonials-v1 p,
    .testimonials.testimonials-v2 p {
        padding: 15px;
        font-size: 14px;
        font-style: italic;
        background: #f5f5f5;
    }

    .testimonials.testimonials-v1 .item p:after,
    .testimonials.testimonials-v2 .item p:after {
        width: 0;
        height: 0;
        content: " ";
        display: block;
        position: absolute;
        border-top-color: #f5f5f5;
        border-left-style: inset;
        /*FF fixes*/

        border-right-style: inset;
        /*FF fixes*/
    }

    /**/
    /* defaults */
    /**/

    .sky-form {
        margin: 0;
        outline: none;
        box-shadow: 0 0 20px rgba(0, 0, 0, .3);
        font: 13px/1.55 'Open Sans', Helvetica, Arial, sans-serif;
        color: #666;
    }

    .sky-form .input,
    .sky-form .textarea {
        position: relative;
        display: block;
        margin-bottom: 10px;
    }

    .sky-form .input input,
    .sky-form .textarea textarea {
        display: block;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        width: 100%;
        height: 39px;
        padding: 6px 10px;
        outline: none;
        border-width: 2px;
        border-style: solid;
        border-radius: 0;
        background: #fff;
        font: 15px/23px 'Open Sans', Helvetica, Arial, sans-serif;
        color: #404040;
        appearance: normal;
        -moz-appearance: none;
        -webkit-appearance: none;
    }
    /**/
    /* textareas */
    /**/

    .sky-form .textarea textarea {
        height: auto;
        resize: none;
    }

    .sky-form .textarea-resizable textarea {
        resize: vertical;
    }

    .sky-form .textarea-expandable textarea {
        height: 39px;
    }

    .sky-form .textarea-expandable textarea:focus {
        height: auto;
    }
    /**/
    /* ratings */
    /**/

    .sky-form .rating {
        margin-bottom: 0px;
        font-size: 15px;
        color: #404040;
        border: none;
    }


    .sky-form .rating input {
        position: absolute;
        left: -9999px;
    }

    .sky-form .rating label {
        display: block;
        float: right;
        height: 17px;
        margin-top: 5px;
        padding: 0 2px;
        font-size: 17px;
        line-height: 17px;
        cursor: pointer;
    }
    /**/
    /* icons */
    /**/

    .sky-form .icon-append,
    .sky-form .icon-prepend {
        position: absolute;
        top: 5px;
        width: 29px;
        height: 29px;
        font-size: 15px;
        line-height: 29px;
        text-align: center;
    }

    .sky-form .icon-append {
        right: 5px;
        padding-left: 3px;
        border-left-width: 1px;
        border-left-style: solid;
    }

    .sky-form .input .icon-append + input,
    .sky-form .textarea .icon-append + textarea {
        padding-right: 46px;
    }
    /**/
    /* normal state */
    /**/

    .sky-form .rating label {
        color: #ccc;
        -ms-transition: color 0.3s;
        -moz-transition: color 0.3s;
        -webkit-transition: color 0.3s;
    }
    /**/
    /* checked state */
    /**/

    .sky-form .rating input:checked ~ label {
        color: #2da5da;
    }
    /**/
    /* error state */
    /**/

    .sky-form .state-error input,
    .sky-form .state-error textarea {
        background: #fff0f0;
    }

    .sky-form .state-error + em {
        display: block;
        margin-top: 6px;
        padding: 0 1px;
        font-style: normal;
        font-size: 11px;
        line-height: 15px;
        color: #ee9393;
    }

    .sky-form .rating.state-error + em {
        margin-top: -4px;
        margin-bottom: 4px;
    }
    /**/
    /* success state */
    /**/

    .sky-form .state-success input,
    .sky-form .state-success textarea {
        background: #f0fff0;
    }
    /**/
    /* defaults */
    /**/

    .sky-form {
        box-shadow: none;
    }

    .sky-form .input input {
        height: 30px;
        padding: 6px 12px;
    }

    .sky-form .input input,
    .sky-form .textarea textarea {
        border-width: 1px;
        font-size: 14px;
        color: #404040;
    }
    /**/
    /* normal state */
    /**/

    .sky-form .input input,
    .sky-form .textarea textarea,
    .sky-form .icon-append,
    .sky-form .icon-prepend {
        border-color: #bbb;
    }
    /**/
    /* icons */
    /**/

    .sky-form .icon-append,
    .sky-form .icon-prepend {
        top: 0px;
        height: 30px;
        font-size: 14px;
        line-height: 33px;
        background: inherit;
    }

    .sky-form .icon-append {
        right: 1px;
        padding: 0 3px;
        min-width: 34px;
    }
    /**/
    /* focus state */
    /**/

    .sky-form .input input:focus,
    .sky-form .textarea textarea:focus {
        border-color: #bbb;
        box-shadow: 0 0 2px #c9c9c9;
    }
    /**/
    /* hover state */
    /**/

    .sky-form .input:hover input,
    .sky-form .textarea:hover textarea {
        border-color: #999;
    }

    .sky-form .rating input + label:hover,
    .sky-form .rating input + label:hover ~ label {
        color: #72c02c;
    }

    .sky-form .icon-append,
    .sky-form .icon-prepend {
        color: #b3b3b3;
    }



</style>


<body class="gray-bg">

    <!--Top Navbar-->
    <?php include_once('templates/default_top_navbar.php'); ?>
    <!--End of Top Navbar-->


    <div class="container">		
        <div class="row blog-page">    
            <!-- Left Sidebar -->
            <div class="col-md-9">
                <!--<div class="blog">-->
                <h3 class="page-header"><!-- Destination Title --></h3>

                <!-- Near by Places MAP -->
                <div class="row">
                    <div class="col-md-12">
                        <div id="map_canvas" style="width: 100%; height: 400px; margin-bottom: 15px;"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="industries-tabs box-container">
                            <li class="" style="margin-top: 5px;"><strong>Near by Places In Colombo</strong></li>
                            <li class=""><a id="all" title="All" style="border: 1px solid #f25022; background-color: #f25022;"><i class="fa fa-flag-checkered"></i></a></li>
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="headline"><h3>Overview of Colombo</h3></div>
                        <p class="dest_description" style="text-indent: 50px; text-align: justify;">About Destination</p>
                        <!--<p><a class="btn-u btn-u-small" href="">Read More</a></p>-->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <!-- Recent Works -->
                        <div class="owl-carousel-v1 owl-work-v1" style="display: block;">
                            <div class="headline">
                                <h2 class="pull-left">Recommended Attractions</h2>
                                <div class="owl-navigation">
                                    <div class="customNavigation">
                                        <a class="owl-btn rec-prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="owl-btn rec-next"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <!--/navigation-->
                            </div>

                            <div class="row recAttr_userLogin" style="display: none;">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h3 class="font-bold">Login is Required</h3>
                                        User must be logged in to get recommendations<br>
                                        <a class="btn btn-primary m-t">Login Here</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row rec_preloader" style="display: none;">
                                <div class="col-md-4"></div>
                                <div class="col-md-4" style="text-align: center;">
                                    <img src="<?php echo base_url('img/loading.gif'); ?>"><br>
                                    <h4>Loading Recommended Attractions</h4>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="owl-rec-attr-slider">
                                <!--Recommended Attractions Goes Here-->
                            </div>
                        </div>
                        <!-- End Recent Works -->

                    </div>
                </div>


                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12">

                        <!-- Recent Works -->
                        <div class="owl-carousel-v1 owl-work-v1" style="display: none;">
                            <div class="headline">
                                <h2 class="pull-left">Nearby Restaurants</h2>
                                <div class="owl-navigation">
                                    <div class="customNavigation">
                                        <a class="owl-btn res-prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="owl-btn res-next"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <!--/navigation-->
                            </div>

                            <div class="owl-nearby-res-slider">
                                <!--Nearby Restaurants Goes Here-->
                            </div>
                        </div>
                        <!-- End Recent Works -->

                    </div>
                </div>



                <div class="row">

                    <div class="col-md-6">
                        <div class="headline"><h2>User Reviews</h2></div>
                        <div class="carousel slide testimonials testimonials-v1" id="testimonials-1">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium similqui cupiditate non providenque sunt in culpaid est anditiis prae sentium esentium. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatu.</p>
                                    <div class="testimonial-info">
                                        <img alt="" src="<?php echo base_url('img/uploads/user.jpg'); ?>">
                                        <span class="testimonial-author">
                                            Jeremy Asigner 
                                            <em>Web Developer, Unify Theme.</em>
                                        </span>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium similqui cupiditate crasjusto non providenque sunt in culpaid est anditiis prae sentium esentium. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditii sdignissimos prae sentium...</p>
                                    <div class="testimonial-info">
                                        <img alt="" src="<?php echo base_url('img/uploads/user.jpg'); ?>">
                                        <span class="testimonial-author">
                                            User 
                                            <em>Java Developer, Htmlstream</em>
                                        </span>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Adesjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium similqui cupiditate non providenque sunt in culpaid est anditiis prae sentium esentium. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis araesentium...</p>
                                    <div class="testimonial-info">
                                        <img alt="" src="<?php echo base_url('img/uploads/user.jpg'); ?>">
                                        <span class="testimonial-author">
                                            Kate Davenport 
                                            <em>Web Designer, Google Inc.</em>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-arrow">
                                <a data-slide="prev" href="#testimonials-1" class="left carousel-control">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a data-slide="next" href="#testimonials-1" class="right carousel-control">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="headline"><h2>Submit your Review</h2></div>
                        <!-- Review Form-->
                        <form action="#" id="sky-form2" class="sky-form">

                            <div class="row">
                                <div class="col-md-12">
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        <input type="text" name="name" id="name" placeholder="Your name">
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label class="input">
                                        <i class="icon-append fa fa-envelope"></i>
                                        <input type="email" name="email" id="email" placeholder="Your e-mail">
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label class="label"></label>
                                    <label class="textarea">
                                        <i class="icon-append fa fa-comment"></i>
                                        <textarea rows="3" name="review" id="review" placeholder="Text of the review"></textarea>
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div style="font-size: medium;">Overall Rating</div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="review_stars pull-left" id="overall"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <!--<button type="submit" class="btn-u pull-right">Submit a review</button>-->
                                            <button class="btn btn-primary submitReview_btn">Submit review</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <!-- End Review Form-->
                    </div>


                </div>


            </div><!--/span9-->

            <!-- Right Sidebar -->
            <div class="col-md-3">



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
                            height: 65px;
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
                            width: 65px;
                            overflow: inherit;
                            overflow:hidden;
                        }
                        .widget-features-wrapper .list-places.fullwidth .place-wrapper .place-detail-wrapper h2.title-place a {
                            font-size: 14px;
                            font-weight: 400;
                        }
                        .widget-features-wrapper .list-places.fullwidth .place-wrapper .place-detail-wrapper {
                            height: 65px;
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
                        <div class="headline"><h3>Popular Attractions</h3></div>
                        <div data-thumb="small_post_thumbnail" class="widget-features-wrapper">
                            <ul data-thumb="small_post_thumbnail" class="list-places fullwidth" data-list="event">
                                <!--Popular Attractions Goes Here-->
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <!--Weather Widget-->
                    <div class="col-md-12">
                        <div class="headline"><h3>Weather Forecast</h3></div>
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
                            <hr style="margin: 0px;">
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



                <!-- Blog Tags -->




                <!-- Photo Stream -->
                <div class="headline"><h3>Photo Stream</h3></div>
                <ul class="gallery">
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/1.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/2.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/3.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/4.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/5.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/6.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/7.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                    <li><a href="#"><img src="<?php echo base_url('img/tour_packages/pkg_album/8.jpg'); ?>" alt="" class="hover-effect" /></a></li>
                </ul>



                <!-- Blog Latest Tweets -->
                <div class="blog-twitter">
                    <div class="headline"><h3>Latest Tweets</h3></div>
                    <p><a href="">@htmlstream</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/sBav7dm</a> <span>5 hours ago</span></p>
                    <p><a href="">@unify</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/f58Ddg4</a> <span>8 hours ago</span></p>
                    <p><a href="">@veroeos</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/adVs9f</a> <span>17 hours ago</span></p>
                    <p><a href="">@accusamus </a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/wf5Fs6</a> <span>23 hours ago</span></p>
                    <p><a href="">@veroeoset</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/7EsffP</a> <span>1 day ago</span></p>
                </div>
            </div><!--/span3-->
        </div><!--/row-fluid-->        
    </div><!--/container-->	

   
    <!--Footer2-->
    <?php include_once('templates/footer2.php'); ?>
    <!--End of the Footer2-->

    <!--Login Modal Window-->
    <?php include_once('templates/login_modal.php'); ?>
    <!--End of the Login Modal Window-->


    <!-- Mainly scripts -->
    <script src="<?php echo base_url() . 'js/jquery-1.11.2.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'js/bootstrap.min.js' ?>"></script>


    <script src="<?php echo base_url() . 'js/plugins/jquery-migrate.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'js/plugins/jquery-ui-1.10.4.custom.min.js' ?>"></script>

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>

    <script src="<?php echo base_url() . 'js/plugins/jquery.raty.js' ?>"></script>

    <script src="<?php echo base_url() . 'js/jquery.validate.min.js' ?>"></script>



    <!-- Custom and plugin javascript -->
    <!--<script src="<?php // echo base_url() . 'js/inspinia.js'                                      ?>"></script>-->
    <script src="<?php echo base_url() . 'js/plugins/owl-carousel/owl.carousel.js' ?>"></script>


    <script type="text/javascript">

        $('document').ready(function () {

            var dest_lat = "";
            var dest_lng = "";
            var dest_id = "";

            //Get Destination Name From URL Parameter
            var dest_wikiName = getParameterByName('dest_name');

            //load Popular attractions
            loadPopularAttr();



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
                            dest_id = value.dest_id;
                        });
                        loadNearByPlacesMap();
                        get_weatherData();
                        //recommended attraction slider
                        loadRecommendedAttractions();
                        loadNearbyRest();
                        $('.owl-carousel-v1').css("display", "block");
                        loadUserReviews();
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
                    $('#owm_temp').text(parseInt(data.main.temp, 10))
                    $('#owm_image').attr("src", "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png")
                    var dt = new Date();
                    dateTime = dt.toString().split('GMT');
                    $('#owm_dateTime').text(dateTime[0]);
                    $('#owm_wind').text(data.wind.speed + " m/s");
                    $('#owm_cloud').text(data.weather[0].description);
                    $('#owm_humidity').text(data.main.humidity + "%");
                });

            }

            function loadRecommendedAttractions() {
                //Load Recommended Attractions Slider
                $.ajax({
                    url: '<?php echo base_url('destinations/get_recommendedAttr'); ?>',
                    type: "GET",
                    data: {
                        'dest_id': dest_id
                    },
                    beforeSend: function (xhr) {
                        $('.rec_preloader').css('display', 'block');
                    },
                    success: function (data) {
                        if (data == "NO USER") {
                            $('.rec_preloader').css('display', 'none');
                            $('.recAttr_userLogin').css("display", "block");
                        }
                        else if (data == "No Recommendations") {
                            $('.rec_preloader').css('display', 'none');
                            $('.owl-rec-attr-slider').html("<h3 style='text-align:center; margin-bottom:0px;'>No Recommendations are Found</h3><br><h4 style='font-style: italic; text-align:center; margin-top:0px;'>You have to spread some ratings to other attractions</h4>");
                        }
                        else {
                            $('.rec_preloader').css('display', 'none');
                            $('.owl-rec-attr-slider').html(data);

                            var owl = $(".owl-rec-attr-slider");
                            owl.owlCarousel({
                                items: [3],
                                itemsDesktop: [1000, 4],
                                itemsDesktopSmall: [900, 3],
                                itemsTablet: [600, 2],
                                itemsMobile: [479, 1],
                                slideSpeed: 1000
                            });
                            $(".rec-next").click(function () {
                                owl.trigger('owl.next');
                            });
                            $(".rec-prev").click(function () {
                                owl.trigger('owl.prev');
                            });

                            $('.recAttr_stars').raty({
                                readOnly: true,
                                score: function () {
                                    return $(this).attr('data-rating');
                                }
                            });

                        }
                    }
                }); //end of the ajax request
            }

            function loadPopularAttr() {
                $.ajax({
                    url: '<?php echo base_url('destinations/get_popularAttr'); ?>',
                    type: "GET",
                    data: {
                        'dest_wiki_name': dest_wikiName
                    },
                    success: function (data) {
                        $('.list-places').html(data);
                        $('.popularAttr_stars').raty({
                            readOnly: true,
                            score: function () {
                                return $(this).attr('data-rating');
                            }
                        });

                    }
                }); //end of the ajax request
            }

            function loadNearbyRest() {
                $.ajax({
                    url: '<?php echo base_url('destinations/get_nearbyRest'); ?>',
                    type: "GET",
                    data: {
                        'dest_id': dest_id
                    },
                    success: function (data) {
                        $('.owl-nearby-res-slider').html(data);

                        var owl2 = jQuery(".owl-nearby-res-slider");
                        owl2.owlCarousel({
                            items: [3],
                            itemsDesktop: [1000, 4],
                            itemsDesktopSmall: [900, 3],
                            itemsTablet: [600, 2],
                            itemsMobile: [479, 1],
                            slideSpeed: 1000
                        });

                        $(".res-next").click(function () {
                            owl2.trigger('owl.next');
                        });
                        $(".res-prev").click(function () {
                            owl2.trigger('owl.prev');
                        });

                    }
                }); //end of the ajax request
            }

            function loadUserReviews() {
                $.ajax({
                    url: '<?php echo base_url('destinations/load_destReviews'); ?>',
                    type: "GET",
                    data: {
                        'dest_id': dest_id
                    },
                    success: function (data) {
                        $('.carousel-inner').html(data);
                        $('.carousel-inner').children().first().addClass('active');
                        $('.user_stars').raty({
                            readOnly: true,
                            score: function () {
                                return $(this).attr('data-rating');
                            }
                        });

                    }
                }); //end of the ajax request
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


            //Recommended Attractions login button
            $('.recAttr_userLogin').on("click", function () {
                $.ajax({
                    url: '<?php echo base_url('destinations/loginRedirection'); ?>',
                    type: 'GET',
                    success: function (data) {
                        window.location = "<?php echo site_url('user/login'); ?>";
                    }
                });
            });


            var review_score = "";
            //review rating stars
            $('.review_stars').raty({
                click: function (score, evt) {
                    review_score = score;
                }
            });

            //submit review button click event
            $('.submitReview_btn').on("click", function (e) {
                e.preventDefault();

                var form = $("#sky-form2");
                form.validate();

                $.ajax({
                    url: '<?php echo base_url('destinations/checkUserAvailability'); ?>',
                    type: 'GET',
                    success: function (data) {
                        if (data == "true") { //if user available

                            if (form.valid()) { //if form is validated
                                if (review_score != "") { // if rating is validated

                                    var name = $('#name').val();
                                    var email = $('#email').val();
                                    var review = $('#review').val();

                                    $.ajax({
                                        url: '<?php echo base_url('destinations/submitReview'); ?>',
                                        type: "POST",
                                        data: {'name': name, 'email': email, 'review': review, 'dest_id': dest_id, 'ratings': review_score},
                                        cache: false,
                                        success: function (data) {
                                            if (data == 'true') {
                                                alert('Your Review is Submitted');
                                                $('#sky-form2')[0].reset();
                                                $('.review_stars').raty({score: 0});
                                            } else {
                                                alert('Unable to Submit your review');
                                            }
                                        }
                                    });
                                }
                                else {
                                    alert('Input Ratings');
                                }
                            }
                        }
                        else {
                            $('#login-modal').modal('show');
                        }
                    }
                });

            });


            //login modal sign in button click event
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
            $("#loginModal_email, #loginModal_password").focus(function(){
                $('.login_modal_err').html("");
            });


        }); //Endo of the documnet ready

        //Get Value form QueryString
        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                    results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

    </script>


    <script type="text/javascript">
        jQuery(document).ready(function () {

            $("#sky-form2").validate({
                // Rules for form validation
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    review: {
                        required: true,
                        minlength: 20
                    }
                },
                // Messages for form validation
                messages: {
                    name: {
                        required: 'Please enter your name'
                    },
                    email: {
                        required: 'Please enter your email address',
                        email: 'Please enter a VALID email address'
                    },
                    review: {
                        required: 'Please enter your review'
                    }
                },
                // Do not change code below
                errorPlacement: function (error, element) {
                    error.insertAfter(element.parent());
                }
            });

        });
    </script>







</body>

</html>
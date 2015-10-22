<?php session_start(); ?>

<!--Head-->
<?php include_once( 'templates/head.php'); ?>
<!--End of Head-->

<!--destinations models styles-->
<link rel="stylesheet" href="<?php echo base_url('css/styles-models.css') ?>">

<!--Pagination styles-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/easyui/easyui.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/easyui/icon.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/hotelStyles.css') ?>"/>

<!--Login modal social button styles-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-social.css') ?>"/>

<script type="application/javascript" language="JavaScript">
    function createHotelList(){

    }
</script>

<body>

    <div id="wrapper">

        <!--Left Navbar2-->
        <?php include_once('templates/mainWiz_left_navbar.php'); ?>
        <!--End of Left Navbar2-->

        <div id="page-wrapper" class="gray-bg" style="margin-top:45px;">
            <div class="row border-bottom">
                
            <!--Top Navbar-->
                <?php include_once('templates/mainWiz_top_navbar.php'); ?>
            <!--End of Top Navbar-->
                
            </div>
            
            <div class="row  border-bottom white-bg dashboard-header">
                <div class="col-sm-4">
                    <h2>Popular Hotels</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li class="active"><strong>Popular Hotels</strong>
                        </li>
                    </ol>
                </div>
            </div>

<!--            <div id="hotel_list_div" class="">-->
<!--                <h2>this</h2>-->
<!--            </div>-->

            <div class="sort-by-section clearfix">
                <h4 class="sort-by-title block-sm">Sort results by:</h4>
                <ul class="sort-bar clearfix block-sm">
                    <li class="sort-by-name"><a class="sort-by-container" href="#"><span>name</span></a></li>
                    <li class="sort-by-price"><a class="sort-by-container" href="#"><span>price</span></a></li>
                    <li class="clearer visible-sms"></li>
                    <li class="sort-by-rating active"><a class="sort-by-container" href="#"><span>rating</span></a></li>
                    <li class="sort-by-popularity"><a class="sort-by-container" href="#"><span>popularity</span></a></li>
                </ul>

<!--                <ul class="swap-tiles clearfix block-sm">-->
<!--                    <li class="swap-list active">-->
<!--                        <a href="./Travelo _ Responsive HTML5 Travel Template_files/Travelo _ Responsive HTML5 Travel Template.html"><i class="soap-icon-list"></i></a>-->
<!--                    </li>-->
<!--                    <li class="swap-grid">-->
<!--                        <a href="http://www.soaptheme.net/html/travelo/hotel-grid-view.html"><i class="soap-icon-grid"></i></a>-->
<!--                    </li>-->
<!--                    <li class="swap-block">-->
<!--                        <a href="http://www.soaptheme.net/html/travelo/hotel-block-view.html"><i class="soap-icon-block"></i></a>-->
<!--                    </li>-->
<!--                </ul>-->
            </div>

            <div class="hotel-list listing-style3 hotel">
                <article class="box">
                    <figure class="col-sm-5 col-md-4">
                        <a title="" href="#" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src=""></a>
                    </figure>
                    <div class="details col-sm-7 col-md-8">
                        <div>
                            <div>
                                <h4 class="box-title">Hotel Hilton and Resorts<small><i class="soap-icon-departure yellow-color"></i> Bastille, Paris france</small></h4>
                                <div class="amenities">
                                    <i class="soap-icon-wifi circle"></i>
                                    <i class="soap-icon-fitnessfacility circle"></i>
                                    <i class="soap-icon-swimming circle"></i>
                                </div>
                            </div>
                            <div>
                                <div class="five-stars-container">
                                    <span class="five-stars" style="width: 80%;"></span>
                                </div>
                                <span class="review">270 reviews</span>
                            </div>
                        </div>
                        <div>
                            <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                            <div>
                                <span class="price"><small>AVG/NIGHT</small>$620</span>
                                <a class="button btn-small full-width text-center" title="" href="http://www.soaptheme.net/html/travelo/hotel-detailed.html">SELECT</a>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
            
<!--            <div class="row">-->
<!--                <div class="col-lg-12">-->
<!--                    <div class="wrapper wrapper-content">-->
<!--                        <div class="middle-box text-center animated fadeInRightBig">-->
<!--                            <h3 class="font-bold">This is page content</h3>-->
<!---->
<!--                            <div class="error-desc">-->
<!--                                You can create here any grid layout you want. And any variation layout you imagine:) Check out main dashboard and other site. It use many different layout.-->
<!--                                <br/><a href="index-2.html" class="btn btn-primary m-t">Dashboard</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            
            <!--Footer-->
            <?php include_once( 'templates/footer.php'); ?>
            <!--End of Footer-->

        </div>
    </div>

    <!-- Mainly scripts -->
<!--    <script src="js/jquery-2.1.1.js"></script>-->
<!--    <script src="js/bootstrap.min.js"></script>-->
<!--    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>-->
<!--    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>-->

    <!-- Custom and plugin javascript -->
<!--    <script src="js/inspinia.js"></script>-->
<!--    <script src="js/plugins/pace/pace.min.js"></script>-->


</body>


</html>
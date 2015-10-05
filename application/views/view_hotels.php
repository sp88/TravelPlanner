<!--Head-->
<?php include_once( 'templates/head.php'); ?>
<!--End of Head-->


<body>

    <div id="wrapper">

        <!--Left Navbar2-->
        <?php include_once('templates/left_navbar2.php'); ?>
        <!--End of Left Navbar2-->

        <div id="page-wrapper" class="gray-bg" style="margin-top:45px;">
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
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <div class="middle-box text-center animated fadeInRightBig">
                            <h3 class="font-bold">This is page content</h3>

                            <div class="error-desc">
                                You can create here any grid layout you want. And any variation layout you imagine:) Check out main dashboard and other site. It use many different layout.
                                <br/><a href="index-2.html" class="btn btn-primary m-t">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Footer-->
            <?php include_once( 'templates/footer.php'); ?>
            <!--End of Footer-->

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>


</body>


</html>
<!--Head-->
	<?php include_once('templates/head.php'); ?>
<!--End of Head-->

<body>

    <div id="wrapper">

        <!--Left Navbar-->
		<?php include_once('templates/left_navbar.php'); ?>
		<!--End of Left Navbar-->

        <div id="page-wrapper" class="gray-bg" style="margin-top:40px;">

            <!--Top Navbar-->
			<?php include_once('templates/top_navbar.php'); ?>
			<!--End of Top Navbar-->

			
            <div class="wrapper wrapper-content">
                <div class="row animated fadeInRight">
                    <div class="col-md-12">
                        <div class="ibox float-e-margins" style="height:720px;">
                            <!--
                            <div class="ibox-title">
                                <h5>Profile Details</h5>
                            </div>
-->
                        <style type="text/css">
                        
                        	#timelineBackground {
					            height: 200px;
					            position: relative;
					            overflow: hidden;
					            background-color: #ffffff;
                            }
                            #timelineShade {
                                min-height: 80px;
                                position: absolute;
                                margin-top: -80px;
                                width: 100%;
                                background: url(<?php echo base_url().'img/timeline_shade.png'?>);
                            }
                            .uploadFile {
                                background: url(<?php echo base_url().'img/whitecam.png'?>) no-repeat;
                                height: 32px;
                                width: 32px;
                                overflow: hidden;
                                cursor: pointer;
                            }
                            .uploadFile input {
                                filter: alpha(opacity 0);
                                opacity: 0;
                                margin-left: -110px;
                            }
                            .timelineUploadBG {
                                position: absolute;
                                margin-top: 30px;
                                margin-left: 813px;
                                height: 32px;
                                width: 32px;
                            }
                            .custom-file-input {
                                height: 25px;
                                cursor: pointer;
                            }

                            .bgImage,#timelineBGload{
                                width:100%;
                            }

                            .headerimage {
                                cursor: s-resize;
                                position: absolute;
                            }

                            .wallbutton:hover {
                                text-decoration: none;
                            }
                            .blackButton {
                                background-color: #666666;
                                border-color: #333333;
                            }
                            .bgSave {
                                position: absolute;
                                margin-top: 267px;
                                margin-left: 760px;
                                z-index: 4000;
                            }

                            .wallbutton {
                                font-weight: bold;
                                padding: 7px 9px;
                                background-color: #5fcf80;
                                color: #fff !important;
                                font-size: 12px;
                                font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
                                cursor: pointer;
                                text-decoration: none;
                                border-width: 1px 1px 3px !important;
                                border-style: solid;
                                border-color: #3ac162;
                                white-space: nowrap;

                                display: -moz-inline-stack;

                                -moz-border-radius: 3px;
                                -ms-border-radius: 3px;
                                -o-border-radius: 3px;
                                border-radius: 3px;

                            }
                        
                        </style>
                        
                            <div>
                                <div class="ibox-content no-padding border-left-right">
                                    
                                    <div id="timelineBackground">
                                    	<img alt="image" src="<?php echo base_url().'img/uploads/backgroundimage.jpg'?>" height="100%" width="100%">
                                       
                                        <div id="timelineShade">
                                            <form id="bgimageform" method="post" enctype="multipart/form-data" action="image_upload_ajax.php">
                                                <div class="uploadFile timelineUploadBG">
                                                    <input type="file" name="photoimg" id="bgphotoimg" class="custom-file-input">
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                    
                                    
                                </div>
                                <div class="ibox-content profile-content" style="height:500px;">

                                    <div class="col-md-4">
                                        <!--Profile info-->

                                        <div class="ibox float-e-margins">

                                            <div class="ibox-title">
                                                <h5>Profile Info</h5>

                                            </div>

                                            <div class="ibox-content">

                                                <h4><strong>Monica Smith</strong></h4>
                                                <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                                <h5>
                                    About me
                                </h5>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                                </p>

                                                <div class="user-button">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                    <!--End of Profile Info-->


                                    <div class="col-md-8">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5>Recent Activites</h5>

                                            </div>
                                            <div class="ibox-content" style="overflow-y:scroll; height:400px;">

                                                <div>
                                                    <div class="feed-activity-list">

                                                        <div class="feed-element">
                                                            <a href="#" class="pull-left">
                                                                <img alt="image" class="img-circle" src="img/a1.jpg">
                                                            </a>
                                                            <div class="media-body pull-left ">
<!--                                                                <small class="pull-right text-navy">1m ago</small>-->
                                                                <strong>Sandra Momot</strong> started following <strong>Monica Smith</strong>.
                                                                <br>
                                                                <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                                                <div class="actions">
                                                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                    <a class="btn btn-xs btn-danger"><i class="fa fa-heart"></i> Love</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="feed-element">
                                                            <a href="#" class="pull-left">
                                                                <img alt="image" class="img-circle" src="img/profile.jpg">
                                                            </a>
                                                            <div class="media-body ">
                                                                <small class="pull-right">5m ago</small>
                                                                <strong>Monica Smith</strong> posted a new blog.
                                                                <br>
                                                                <small class="text-muted">Today 5:60 pm - 12.06.2014</small>

                                                            </div>
                                                        </div>



                                                        <div class="feed-element">
                                                            <a href="#" class="pull-left">
                                                                <img alt="image" class="img-circle" src="img/a4.jpg">
                                                            </a>
                                                            <div class="media-body ">
                                                                <small class="pull-right text-navy">5h ago</small>
                                                                <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>.
                                                                <br>
                                                                <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                                                <div class="actions">
                                                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                    <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="feed-element">
                                                            <a href="#" class="pull-left">
                                                                <img alt="image" class="img-circle" src="img/profile.jpg">
                                                            </a>
                                                            <div class="media-body ">
                                                                <small class="pull-right">23h ago</small>
                                                                <strong>Monica Smith</strong> love <strong>Kim Smith</strong>.
                                                                <br>
                                                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                                            </div>
                                                        </div>
                                                        <div class="feed-element">
                                                            <a href="#" class="pull-left">
                                                                <img alt="image" class="img-circle" src="img/a7.jpg">
                                                            </a>
                                                            <div class="media-body ">
                                                                <small class="pull-right">46h ago</small>
                                                                <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>.
                                                                <br>
                                                                <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!--End of recent activities-->


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        <!--Footer-->
		<?php include_once('templates/footer.php'); ?>
		<!--End of Footer-->


        </div>
        <!--End of page-wrapper-->





    </div>
    <!--End of wrapper-->



    <!-- Mainly scripts -->
    <script src="<?php echo base_url().'js/jquery-1.11.2.min.js'?>"></script>
    <script src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'js/plugins/jquery.metisMenu.js'?>"></script>
    <script src="<?php echo base_url().'js/plugins/jquery.slimscroll.min.js'?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url().'js/plugins/jquery.metisMenu.js'?>"></script>
    <script src="<?php echo base_url().'js/plugins/jquery.slimscroll.min.js'?>"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Peity -->
    <script src="js/demo/peity-demo.js"></script>

</body>

</html>
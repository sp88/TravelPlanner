<?php if(!$this->session->userdata("logged_in")){ redirect('user/login','location'); } ?>
<!--Head-->
<?php include_once( 'templates/head.php'); ?>
<!--End of Head-->

<body>

    <div id="wrapper">

        <!--Left Navbar1-->
        <?php include_once('templates/left_navbar1.php'); ?>
        <!--End of Left Navbar1-->

        <div id="page-wrapper" class="gray-bg" style="margin-top:40px;">
            <div class="row border-bottom">
                <!--Top Navbar-->
                <?php include_once( 'templates/default_top_navbar.php'); ?>
                <!--End of Top Navbar-->
            </div>

            <div class="wrapper wrapper-content">
                <div class="row animated fadeInRight">
                    <div class="col-md-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Profile Details</h5>

                                

                            </div>
                            <div>
                                <div class="ibox-content no-padding border-left-right">
                                    <!--                                <img alt="image" class="img-responsive" src="<?php echo site_url().'img/uploads/backgroundimage.jpg'?>">-->

                                </div>
                                <div class="ibox-content profile-content">
                                    <!--
                                    <h3><strong>Lakindu Jayasena</strong></h3>
                                    <p><i class="fa fa-map-marker"></i> Colombo SriLanka</p>
-->
                                    <h4>About me
                                        <div class="ibox-tools">
                                            <a class="edit_about" title="Edit"><i class="fa fa-edit"> Edit</i></a>
                                        </div>
                                    </h4>
                                    <div class="text_wrapper">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</div>
                                    <div class="edit" style="display:none">
                                        <textarea style="resize:none;" maxlength="200" class="editbox" cols="40" rows="5" ></textarea>
                                        200 Words Maximum
                                    </div>
                                    
                                    <hr>
                                    <h4>Travel Style
                                        <div class="ibox-tools">
                                            <a class="edit_tstyle" title="Edit"><i class="fa fa-plus"> Add More</i></a>
                                        </div>
                                    </h4>
<!--
                                    <p>
                                        <span class="label label-success">Eco-tourist</span>
                                        <span class="label label-success">Nature Lover</span>
                                        <span class="label label-success">Peace and Quiet Seeker</span>
                                    </p>
                                    <span class="label label-success">Like a Local</span>
                                    <span class="label label-success">Vegetarian</span>
-->
                                   
                                   
                                    <?php $jsond = json_decode($selected_travelStyles,true); 
                                        foreach($jsond as $sts){
                                    ?>
                                        <span class="label label-success"><?php echo $sts['travel_style'];?></span>
                                    <?php } ?>
                                   
                                    
                                    
                                    <hr>
                                    <h4>Contact Details
                                        <div class="ibox-tools">
                                            <a class="edit_contact" title="Edit"><i class="fa fa-edit"> Edit</i></a>
                                        </div>
                                    </h4>
                                    
                                    <div id="contact_focus">
                                    <!--For Email-->
                                    <div>
                                        <div style="float:left;">Email: &nbsp;</div>
                                        <div style="float:left;" class="email_wrapper"><?php echo $email ?></div>
                                    </div>
                                    <div class="edit_cdiv" style="display:none">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="text" id="edit_text_box_email" name="email">
                                    </div>
                                    <br>
                                    <!--For Mobile-->
                                    <div>
                                        <div style="float:left;">Mobile: &nbsp;</div>
                                        <div style="float:left;" class="mobile_wrapper">0770271705<?php //echo $mobile ?></div>
                                    </div>
                                    <div class="edit_cdiv" style="display:none">&nbsp;
                                        <input type="text" id="edit_text_box_mobile" name="mobile">
                                    </div>
                                    </div>
                                    <br>
                                        
                                    
                                    <hr>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-danger">40 Likes</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" style="margin-left:-7px;" class="btn btn-warning">20 Photos</button>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-success">28 Posts</button>
                                        </div>
                                    </div>
                                    <!--                                    <hr>-->
                                    <!--
                                    <div class="user-button">
                                        <div class="row">
                                            <div class="col-md-6 pull-right">
                                                <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                                            </div>

                                        </div>
                                    </div>
-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Recent Trip Plans</h5>

                            </div>
                            <div class="ibox-content" style="height:500px;">


                                <style type="text/css">
                                    .package-box {
                                        position: relative;
                                        max-width: 370px;
                                        margin: 0px auto 30px;
                                    }
                                    
                                    .package-box:hover .imagehover-wrap,
                                    .packages-grid-item-img:hover .imagehover-wrap,
                                    .album-box:hover .imagehover-wrap,
                                    .mpk-box-img:hover .imagehover-wrap,
                                    .img-box:hover .imagehover-wrap,
                                    .mpl-box-img:hover .imagehover-wrap {
                                        display: block;
                                    }
                                    
                                    .imagehover-wrap {
                                        display: none;
                                    }
                                    
                                    .imagehover {
                                        width: 100%;
                                        height: 100%;
                                        z-index: 100;
                                        position: absolute;
                                        overflow: hidden;
                                        background-color: black;
                                        opacity: 0.5;
                                    }
                                    
                                    .imagehover-wrap .glyphicon {
                                        top: 44%;
                                        left: 47%;
                                        font-size: 30px;
                                        position: absolute;
                                        color: #fff;
                                        z-index: 100;
                                    }
                                    
                                    .package-box-off {
                                        position: absolute;
                                        background-color: #fcac02;
                                        color: #fff;
                                        font-size: 12px;
                                        font-weight: normal;
                                        padding: 4px 9px;
                                        right: 12px;
                                        top: 12px;
                                    }
                                    
                                    .package-box-off span {
                                        font-size: 18px;
                                    }
                                    
                                    .package-box-img img {
                                        width: 100%;
                                        height: 100%;
                                    }
                                    
                                    .package-box-info {
                                        background-color: rgba(0, 0, 0, 0.74);
                                        padding: 3px 7px;
                                        overflow: hidden;
                                        position: absolute;
                                        bottom: 0;
                                        width: 100%;
                                    }
                                    
                                    .package-box-common {
                                        float: left;
                                        position: relative;
                                        width: 100%;
                                    }
                                    
                                    .package-box-days {
                                        background-color: #0072ae;
                                        text-align: center;
                                        color: #fff;
                                        width: 53px;
                                        height: 53px;
                                        padding: 5px;
                                        border-radius: 43px;
                                        -webkit-border-radius: 43px;
                                        -moz-border-radius: 43px;
                                        -o-border-radius: 43px;
                                        float: left;
                                        position: absolute;
                                        top: 50%;
                                        margin-top: -26px;
                                    }
                                    
                                    .package-box-details {
                                        margin-left: 63px;
                                    }
                                    
                                    .package-box-name {
                                        color: #fff;
                                        font-size: 17px;
                                        padding-top: 7px;
                                    }
                                    
                                    .package-box-type {
                                        font-size: 12px;
                                        color: #f7ab01;
                                        padding-bottom: 7px;
                                    }
                                    
                                    .package-box-price {
                                        float: right;
                                        text-align: center;
                                        color: #f7ab01;
                                        font-size: 16px;
                                    }
                                    
                                    @media (max-width: 480px) {
                                        .package-box-price {
                                            float: none;
                                        }
                                        .imagehover-wrap .glyphicon {
                                            font-size: 20px;
                                        }
                                        .package-box-info {
                                            background-color: #000;
                                            position: relative;
                                        }
                                    }
                                </style>


                                <div class="row">

                                    <div class="col-md-6">
                                        <a href="#">
                                            <div class="package-box">

                                                <div class="package-box-img">
                                                    <div class="imagehover-wrap"><span class="glyphicon glyphicon-th"></span>
                                                        <div class="imagehover"></div>
                                                    </div>
                                                    <img alt="package - 1" src="<?php echo site_url().'img/destinations/Anuradhapura.jpg'?>">

                                                </div>
                                                <div class="package-box-info">
                                                    <div class="package-box-common">
                                                        <div class="package-box-days">3
                                                            <br>Days</div>
                                                        <div class="package-box-details">
                                                            <div class="package-box-name">Colombo to Anuradhapura</div>
                                                            <div class="package-box-type">2015 March 05 - 08 </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end of one block-->


                                    <div class="col-md-6">
                                        <a href="#">
                                            <div class="package-box">

                                                <div class="package-box-img">
                                                    <div class="imagehover-wrap"><span class="glyphicon glyphicon-th"></span>
                                                        <div class="imagehover"></div>
                                                    </div>
                                                    <img alt="package - 1" src="<?php echo site_url().'img/destinations/Polonnaruwa.jpg'?>">

                                                </div>
                                                <div class="package-box-info">
                                                    <div class="package-box-common">
                                                        <div class="package-box-days">3
                                                            <br>Days</div>
                                                        <div class="package-box-details">
                                                            <div class="package-box-name">Colombo to Polonnaruwa</div>
                                                            <div class="package-box-type">2015 March 05 - 08 </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end of one block-->


                                    <div class="col-md-6">
                                        <a href="#">
                                            <div class="package-box">

                                                <div class="package-box-img">
                                                    <div class="imagehover-wrap"><span class="glyphicon glyphicon-th"></span>
                                                        <div class="imagehover"></div>
                                                    </div>
                                                    <img alt="package - 1" src="<?php echo site_url().'img/destinations/Kandy.jpg'?>">

                                                </div>
                                                <div class="package-box-info">
                                                    <div class="package-box-common">
                                                        <div class="package-box-days">3
                                                            <br>Days</div>
                                                        <div class="package-box-details">
                                                            <div class="package-box-name">Colombo to Kandy</div>
                                                            <div class="package-box-type">2015 March 05 - 08 </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end of one block-->


                                    <div class="col-md-6">
                                        <a href="#">
                                            <div class="package-box">

                                                <div class="package-box-img">
                                                    <div class="imagehover-wrap"><span class="glyphicon glyphicon-th"></span>
                                                        <div class="imagehover"></div>
                                                    </div>
                                                    <img alt="package - 1" src="<?php echo site_url().'img/destinations/Jaffna.jpg'?>">

                                                </div>
                                                <div class="package-box-info">
                                                    <div class="package-box-common">
                                                        <div class="package-box-days">3
                                                            <br>Days</div>
                                                        <div class="package-box-details">
                                                            <div class="package-box-name">Colombo to Jaffna</div>
                                                            <div class="package-box-type">2015 March 05 - 08 </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end of one block-->


                                </div>
                                <!--end of row-->


                            </div>
                            <!--end of i-box content-->
                        </div>

                    </div>
                    <!--End of recent activities-->
                </div>
            </div>

            <!--Footer-->
            <?php include_once( 'templates/footer.php'); ?>
            <!--End of Footer-->

        </div>
    </div> <!--End of the wrapper-->
    
    
    
    <!--Travel styles Modal Window-->
    <?php include_once('templates/travel_style_modal.php'); ?>
    <!--End of travel styles Modal Window-->



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

    <script type="text/javascript" src="<?php echo base_url().'js/jquery.wallform.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'js/jquery-ui.js'?>"></script>


    <!--This Script Tag for change profile pic-->
    <script type="text/javascript">
        $(document).ready(function () {

            /* Uploading Profile BackGround Image */
            $('body').on('change', '#prof_pic', function () {
                $("#prof_pic_form").ajaxForm({

                    target: '#prof_pic_div',

                    success: function () {
                        $("#prof_pic_shade").hide();
                        $("#prof_pic_form").hide();
                        //                $("#prof_pic_shade").fadeIn("slow");
                        //				$("#prof_pic_form").fadeIn("slow");
                    }

                }).submit();
            }); //end of the on click event


            //	/* Banner position drag */
            //	$("body").on('mouseover','.headerimage',function(){
            //	//$( "#timelineBGload" ).mouseover(function() {
            //		
            //		var y1 = $('#timelineBackground').height();
            //		var y2 =  $('.headerimage').height();
            //		
            //		$(this).draggable({
            //			scroll: false,
            //			axis: "y",
            //			drag: function(event, ui) {
            //				if(ui.position.top >= 0){
            //					ui.position.top = 0;
            //				}
            //				else if(ui.position.top <= y1-y2){
            //					ui.position.top = y1-y2;
            //				}
            //			},
            //			stop: function(event, ui){
            //			}
            //		});
            //	});//end of the mouseover event	


            //	/* Bannert Position Save*/
            //	$("body").on('click','.bgSave',function (){
            //		
            //		var p = $("#timelineBGload").attr("style");
            //		var Y =p.split("top:");
            //		var Z=Y[1].split(";");
            //		var dataString ='position='+Z[0];
            //		
            //		$.ajax({
            //			type: "POST",
            //			url: "image_saveBG_ajax.php",
            //			data: dataString,
            //			cache: false,
            //			success: function(html){
            //				if(html){
            //					$(".bgImage").fadeOut('slow');
            //					$(".bgSave").fadeOut('slow');
            //					$("#timelineShade").fadeIn("slow");
            //					$("#bgimageform").fadeIn("slow");
            //					$("#timelineBGload").removeClass("headerimage").css({'margin-top':html});
            //					return false;
            //				}
            //			}
            //		});
            //	return false;
            //	});



        }); //End of the document.ready
    </script>




    <!--This Script tag for edit about, travel style and contact details-->
    <script type="text/javascript"> 
        $(document).ready(function () {

            //Edit link action 
            $('.edit_about').click(function () {
                $('.text_wrapper').hide();
                var data = $('.text_wrapper').html();
                $('.edit').show();
                $('.editbox').html(data);
                $('.editbox').focus();
            });
            
            
            $('.edit_tstyle').click(function () {
                $('#travel_style_modal').modal('show');
            });
            
            
            $('.edit_contact').click(function () {
                $('.email_wrapper').hide();
                $('.mobile_wrapper').hide();
                var email_data = $('.email_wrapper').html();
                var mobile_data = $('.mobile_wrapper').html();
                $('.edit_cdiv').show();
                $('#edit_text_box_email').val(email_data);
                $('#edit_text_box_email').focus();
                $('#edit_text_box_mobile').val(mobile_data);
                
            });

            //Mouseup textarea false
            $(".editbox").mouseup(function () {
                return false
            });

            //Textarea content editing
            $(".editbox").change(function () {
                $('.edit').hide();
                var boxval = $(".editbox").val();
                var dataString = 'data=' + boxval;
                alert("req to db");
                
//                $.ajax({
//                    type: "POST",
//                    url: "update_profile_ajax.php",
//                    data: dataString,
//                    cache: false,
//                    success: function (html) {
//                        $('.text_wrapper').html(boxval);
//                        $('.text_wrapper').show();
//                    }
//                });
            });

            //Textarea without editing.
            $(document).mouseup(function () {
                $('.edit').hide();
                $('.text_wrapper').show();
            });
            
            
            
            $("#edit_text_box_email").focusout(function () {
                $('.edit_cdiv').hide();
                $('.email_wrapper').show();
                $('.mobile_wrapper').show();
            });

        });
    </script>
    
    
    
    
    <!--This Sript Tag for Travel style Modal window-->
    <script type="text/javascript">
        // Move modal to body
        // Fix Bootstrap backdrop issu with animation.css
        $('.modal').appendTo("body")


        $(function () {
            $('.button-checkbox').each(function () {

                // Settings
                var $widget = $(this),
                    $button = $widget.find('button'),
                    $checkbox = $widget.find('input:checkbox'),
                    color = $button.data('color'),
                    settings = {
                        on: {
                            icon: 'glyphicon glyphicon-check'
                        },
                        off: {
                            icon: 'glyphicon glyphicon-unchecked'
                        }
                    };

                // Event Handlers
                $button.on('click', function () {
                    $checkbox.prop('checked', !$checkbox.is(':checked'));
                    $checkbox.triggerHandler('change');
                    updateDisplay();
                });
                $checkbox.on('change', function () {
                    updateDisplay();
                });

                // Actions
                function updateDisplay() {
                    var isChecked = $checkbox.is(':checked');

                    // Set the button's state
                    $button.data('state', (isChecked) ? "on" : "off");

                    // Set the button's icon
                    $button.find('.state-icon')
                        .removeClass()
                        .addClass('state-icon ' + settings[$button.data('state')].icon);

                    // Update the button's color
                    if (isChecked) {
                        $button
                            //.removeClass('btn-default')
                            .addClass('btn-' + color + ' active');
                    } else {
                        $button
                            .removeClass('btn-' + color + ' active');
//                            .addClass('btn-default');
                    }
                }

                // Initialization
                function init() {

                    updateDisplay();

                    // Inject the icon if applicable
                    if ($button.find('.state-icon').length == 0) {
                        $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
                    }
                }
                init();
            });
        });
    </script>





</body>


</html>
<?php session_start(); ?>

<!--Head-->
<?php include_once('templates/head.php'); ?>
<!--End of Head-->

<!--destinations models styles-->
<link rel="stylesheet" href="<?php echo base_url('css/styles-models.css') ?>">

<!--Pagination styles-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/easyui/easyui.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/plugins/easyui/icon.css') ?>"/>

<!--Login modal social button styles-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-social.css') ?>"/>

<style type="text/css">
    #pp {
        background:#efefef;
        border:1px solid #ccc;
        width:100%;
        padding:5px;
        margin:0px;
    }
</style>

<!--destination Star rating styles-->
<style type="text/css">
    span.stars, span.stars span {
        display: block;
        background: url(<?php echo base_url('img/stars.png') ?>) 0 -16px repeat-x;
        width: 80px;
        height: 16px;
    }

    span.stars span {
        background-position: 0 0;
        text-indent: 100%;
        overflow: hidden;
    }
</style>

<body>
    <div id="wrapper">

        <!--Left Navbar-->
        <?php include_once('templates/mainWiz_left_navbar.php'); ?>
        <!--End of Left Navbar-->

        <div id="page-wrapper" class="gray-bg dashbard-1">

            <!--Top Navigation Bar-->
            <div class="row border-bottom">
                <!--Top Navbar-->
                <?php include_once('templates/mainWiz_top_navbar.php'); ?>
                <!--End of Top Navbar-->
            </div>
            <!--End of the Top Navigation Bar-->

            <!--Title Header-->
            <div class="row  border-bottom white-bg dashboard-header">
                <div class="col-sm-12">
                    <h2>A Smart Trip Planner for Your Vacation</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li class="active"><strong>Popular Destinations</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <!--End of the Title Header-->

            <!--Middle Main Content Row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Recommended Destinations</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--                                    <div class="ibox-content ibox-heading">
                                                                            <div class="input-group">
                                                                                <input name="search" id="search" type="text" class="form-control" placeholder="Search Most Popular Destinations in Sri Lanka">
                                                                                <div class="input-group-btn">
                                                                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
                                    <div class="ibox-content" style="padding-bottom: 10px;">
                                        <!--Popular destinations goes here-->

                                        <div class="row"  style="padding: 0px 10px;">

                                            <!--<h2></h2>-->

                                            <div class="row" style="margin-bottom:15px;">



                                                <!--Most popular 6 destinations goes here-->
                                                <div id="content_destinations">
                                                    <div class="col-md-12" >
                                                        <div id='ajax_loader' style="text-align: center; display: none;">
                                                            <img src="<?php echo base_url(); ?>img/ajax-loader.gif">
                                                            <h3>Please Wait, Fetching some Information...</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row" style="z-index: 999;">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4"><button style="display: none;" class="btn btn-block btn-outline btn-primary dest_loadMore" data-page="2"><i class="fa fa-arrow-down"></i> Load More</button></div>
                                                <div class="col-md-4"></div>
                                            </div>
                                            <!--END of destinations second row-->

                                            <!--Pagination Bar-->
                                            <!--<div id="pp"></div>-->

                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-3" style="padding-left: 0px">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>Destinations Wishlist</h5>
                                        <div class="ibox-tools">

                                            <span class="label label-warning-light">
                                                <?php
                                                if (empty($_SESSION["dest_wishlist_items"])) {
                                                    echo "0";
                                                } else {
                                                    echo count($_SESSION["dest_wishlist_items"]);
                                                }
                                                ?> </span>

                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="ibox-content">
                                        <div>
                                            <div class="feed-activity-list">

                                                <?php if (isset($_SESSION["dest_wishlist_items"])) { ?>

                                                    <?php foreach ($_SESSION["dest_wishlist_items"] as $item) { ?>

                                                        <div class="feed-element">
                                                            <a href="#" class="pull-left">
                                                                <img alt="image" class="img-circle" src="<?php echo base_url() ?>img/destinations/<?php echo $item["dest_image"]; ?>">
                                                            </a>
                                                            <div class="media-body" style="width:150px;">
                                                                <strong data-wishlistAttrId="<?php echo $item["dest_id"]; ?>"><?php echo $item["dest_name"]; ?></strong>
                                                                <br><?php echo $item["province"]; ?><br>
                                                            </div>
                                                            <div style="margin-top:-20px;">
                                                                <a class="wishlistItemRemove_btn" data-wishlistAttrId="<?php echo $item["dest_id"]; ?>" ><i class="fa fa-close pull-right"></i></a>
                                                            </div>
                                                        </div>

                                                    <?php } ?>

                                                <?php } else { ?>
                                                    <h4>No Destinations are selected</h4>
                                                <?php } ?>  

                                            </div> <!--End of the Feed activity list-->

                                            <!--<button class="btn btn-primary btn-block m-t"><i class="fa fa-arrow-down"></i> Show More</button>-->

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <!--End of the Middle Main Content Row-->

            <!--Footer-->
            <?php include_once( 'templates/footer.php'); ?>
            <!--End of Footer-->

        </div> <!--End of the Page Wrapper-->




        <!-- User Preference Selection Modal-->
        <?php include_once( 'templates/user_pref_modal.php'); ?>
        <!-- End of the User Preference Selection Modal-->

        <!--Destination Info Modal-->
        <?php include_once('templates/dest_info_modal.php'); ?>
        <!--End of the Destination Info Modal-->

        <!--Login Modal Window-->
        <?php include_once('templates/login_modal.php'); ?>
        <!--End of the Login Modal Window-->

        <!-- Mainly scripts -->
        <script src="<?php echo base_url() . 'js/jquery-1.11.2.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'js/bootstrap.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'js/jquery-ui.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'js/plugins/jquery.metisMenu.js' ?>"></script>
        <!--<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>-->

        <script src="<?php echo base_url() . 'js/plugins/bootstrap-wizard.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'js/plugins/ion.rangeSlider.min.js' ?>"></script>


        <script type="text/javascript">

            $('document').ready(function () {

                $.fn.wizard.logging = true;
                var wizard = $('#user_pref_wizard').wizard({
                    keyboard: false,
                    contentHeight: 400,
                    contentWidth: 700,
                    backdrop: 'static'
                });

                $(window).load(function () {
                    wizard.show();
                });

                //Star Rating Code for Destinations
                $.fn.stars = function () {
                    return $(this).each(function () {
                        $(this).width(Math.max(0, (Math.min(5, parseFloat($(this).html())))) * 16);
                    });
                }

                //load more button click evenet
                $(document).on('click', '.dest_loadMore', function () {
                    $.ajax({
                        url: '<?php echo base_url('destinations/loadMoreDestinations'); ?>',
                        type: 'POST',
                        data: {
                            page: $(this).data('page'),
                        },
                        success: function (response) {
                            if (response) {
                                $("#content_destinations").append(response);
                                //Destination block hoverover & click
                                //------------------------------------
                                dest_hover();
                                dest_click();
                                //------------------------------------  
                            }
                        }
                    });
                });

                function dest_hover() {
                    $(".mask").css("opacity", "0");
                    $(".mask").hover(function () {
                        $(this).stop().animate({
                            opacity: .7
                        }, "slow");
                    },
                            function () {
                                $(this).stop().animate({
                                    opacity: 0
                                }, "slow");
                            });
                }

                function dest_click() {

                    $(".dest_moreInfo_btn").click(function () {
                        clicked_dest_name = $(this).attr('id');
                        var url = '<?php echo base_url('destinations/destination_info'); ?>' + '?dest_name=' + clicked_dest_name;
                        window.open(url, '_blank');
                    });

                    $('.addTo_dest_wishlist_btn').on("click", function () {
                        var dest_id = $(this).attr('data-destId');

                        $.ajax({
                            url: '<?php echo base_url('destinations/destinationWishlist'); ?>',
                            type: "GET",
                            data: {
                                'action': "ADD",
                                'dest_id': dest_id
                            },
                            success: function (data) {
                                $(".feed-activity-list").html(data);
                                $(".label-warning-light").html($(".feed-element").length);
                            }
                        }); //end of the ajax request

                    });
                }// end of the dest_click function


                //Wishlist items remove click event
                $(document).on('click', '.wishlistItemRemove_btn', function () {

                    $remv_attrId = $(this).attr('data-wishlistAttrId');
                    $.ajax({
                        type: "GET",
                        url: '<?php echo base_url('destinations/destinationWishlist'); ?>',
                        data: {
                            'action': "REM",
                            'dest_id': $remv_attrId
                        },
                        success: function (data) {
                            $(".feed-activity-list").html(data);
                            $(".label-warning-light").html($(".feed-element").length);
                        }
                    }); //end of the ajax request 
                });

                //login modal login btn click event
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
                $("#loginModal_email, #loginModal_password").focus(function () {
                    $('.login_modal_err').html("");
                });


                //This is Step by Step Wizard of Collecting User Preference
                //-----------------------------------------------------------------------------------------------------



                wizard.on('closed', function () {
                    wizard.reset();
                });

                wizard.on("reset", function () {
                    wizard.modal.find(':input').val('').removeAttr('disabled');
                });

                wizard.on("submit", function (wizard) {
                    var fdate = $("#datepicker1").val();
                    var tdate = $("#datepicker2").val();

                    var adult = $('#adult').find('option:selected').text();
                    var children = $('#children').find('option:selected').text();

                    var sel_ts = [];
                    $('#ts_check_list input:checkbox:checked').each(function () {
                        sel_ts.push(this.value);
                    });

                    var sel_acc = [];
                    $('#acc_check_list input:checkbox:checked').each(function () {
                        sel_acc.push(this.value);
                    });

                    var sel_destTypes = [];
                    $('#dest_types input:checkbox:checked').each(function () {
                        sel_destTypes.push(this.value);
                    });

                    var sel_destAct = [];
                    $('#dest_activities input:checkbox:checked').each(function () {
                        sel_destAct.push(this.value);
                    });

                    $.ajax({
                        url: '<?php echo base_url('home/collect_user_pref'); ?>',
                        type: "GET",
                        data: {
                            sel_from_date: fdate,
                            sel_to_date: tdate,
                            sel_travel_styles: sel_ts,
                            no_of_adults: adult,
                            no_of_children: children,
                            sel_accommodation: sel_acc,
                            sel_destTypes: sel_destTypes,
                            sel_destActivities: sel_destAct

                        }
                    }); //end of the ajax request

                    setTimeout(function () {
                        wizard.trigger("success");
                        wizard.hideButtons();
                        wizard._submitting = false;
                        wizard.showSubmitCard("success");
                        wizard.updateProgressBar(0);
                    }, 2000);

                }); //end of the wizard on submit event

                wizard.el.find(".wizard-success .im-done").click(function () {
                    wizard.hide();

                    $("#ajax_loader").show();
                    $.ajax({
                        url: '<?php echo base_url('destinations/search_destinations'); ?>',
                        type: "GET",
                        data: {
                            'destName': 0,
                            'pageNumber': 0
                        },
                        success: function (data) {
//                            alert(data);
                            $("#ajax_loader").hide();
                            $("#content_destinations").html(data);

                            $('span.stars').stars(); //for ratings

                            //Destination block hoverover & click
                            //------------------------------------
                            dest_hover();
                            dest_click();
                            //------------------------------------                   

                            $('.dest_loadMore').css('display', 'block');
                        }
                    }); //end of the ajax request
                });


//                $('#open_user_pref_wizard').click(function (e) {
//                    e.preventDefault();
//                    $('#planType_modal').modal('toggle');
                //var wizard1 = $("#user_pref_wizard").wizard({});
//                    wizard.show();
//                });


                //-----------------------------------------------------------------------------------------------------
                //End of the Step by Step Wizard of Collecting User Preference


            });// End of the document ready
        </script>



        <script type="text/javascript">

            function validateDate(el) {
                var name = el.val();
                var retValue = {};

                if (el.attr("id") == "datepicker1" && name == "") {
                    retValue.status = false;
                    retValue.msg = "Please enter Start Date";
                } else if (el.attr("id") == "datepicker2" && name == "") {
                    retValue.status = false;
                    retValue.msg = "Please enter End Date";
                } else {
                    retValue.status = true;
                }
                return retValue;
            }
            ;
            function validateChkBox_ts() {

                var retValue = {};

                if ($("#ts_check_list input:checkbox:checked").length > 0) {
                    retValue.status = true;
                } else {
                    retValue.status = false;
                    alert("You must select at least one!");
                }
                return retValue;
            }
            ;
            function validateChkBox_acc() {

                var retValue = {};

                if ($("#acc_check_list input:checkbox:checked").length > 0) {
                    retValue.status = true;
                } else {
                    retValue.status = false;
                    alert("You must select at least one!");
                }
                return retValue;
            }
            ;

            function validateChkBox_destType() {
                var retValue = {};

                if ($("#dest_types input:checkbox:checked").length > 0) {
                    retValue.status = true;
                } else {

                    $.ajax({
                        url: '<?php echo base_url('destinations/checkUserAvailability');?>',
                        type: 'GET',
                        success: function (data) {
                            if(data=="false"){
                                var page = /[^/]*$/.exec(window.location.href)[0];
                                if(page=="destinations"){
                                    $('#login-modal').attr('data-backdrop','static'); //prevent modal window closable
                                    
                                }
                                $('#login-modal').modal('show');
                                retValue.status = true;
                            }
                        }
                    });
                    //get the lst part of the current url
                    
                    alert(result);
                }
                return retValue;
            }
            ;
            function validateChkBox_tp() {
                var retValue = {};

                if ($("#tp_check_list input:checkbox:checked").length > 0) {
                    retValue.status = true;
                } else {
                    retValue.status = false;
                    alert("You must select at least one!");
                }
                return retValue;
            }
            ;
            function validateNum(el) {
                var content = el.val();
                var retValue = {};

                if (el.attr("id") == "min_budget" && content == "") {
                    retValue.status = false;
                    alert("Enter Minimum Budget");
                } else if (el.attr("id") == "max_budget" && content == "") {
                    retValue.status = false;
                    alert("Enter Maximum Budget");
                } else {
                    retValue.status = true;
                }
                return retValue;
            }
            ;
        </script>

        <!--For the Wizard Tour Duration Selection -->
        <script type="text/javascript">
            $(document).ready(function () {
                $("#datepicker1").datepicker({
                    //minDate: "0"
                    onSelect: function (selected) {
                        $("#datepicker2").datepicker("option", "minDate", selected)
                    }
                });
                $("#datepicker2").datepicker({
                    onSelect: function (selected) {
                        $("#datepicker1").datepicker("option", "maxDate", selected)
                    }
                });
            });
        </script>

        <!--For the Budget Range Selection-->
        <script type="text/javascript">
            $("#budget_range").ionRangeSlider({
                hide_min_max: true,
                keyboard: true,
                min: 25000,
                max: 900000,
                from: 30000,
                to: 70000,
                type: 'double',
                step: 100000,
                prefix: "Rs. ",
                grid: true,
                grid_snap: true
            });

            $("#budget_range").on("change", function () {
                var $this = $(this),
                        value = $this.prop("value").split(";");

                $('#min_budget').val('');
                $('#max_budget').val('');
                $("#min_budget").val(value[0]);
                $("#max_budget").val(value[1]);
            });
        </script>

        <!--Checkbox buttons-->
        <script type="text/javascript">

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




        <!-- Custom and plugin javascript -->
        <script src="<?php echo base_url() . 'js/inspinia.js' ?>"></script>


</body>

</html>

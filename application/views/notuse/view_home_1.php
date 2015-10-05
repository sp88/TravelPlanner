<!--Head-->
<?php include_once('templates/head.php'); ?>
<!--End of Head-->

<!--must include this css file inside the header file through controller-->
<link href="<?php echo base_url().'css/style_home.css'?>" rel="stylesheet">

<!-- Google Font -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet" type="text/css">

<link type="text/css" rel="stylesheet" href="<?php echo base_url().'css/plugins/flipCard.css'?>">

<link type="text/css" rel="stylesheet" href="<?php echo base_url().'css/plugins/jquery.toast.min.css'?>">



<body class="bg-static" data-spy="scroll" data-target=".navbar-custom">

    <div class="preloader">
        <div class="loader-item">
            <img src="<?php echo base_url("img/loading.gif") ?>" alt="loader">
        </div>
    </div>

    <!--Top Navbar-->
    <?php include_once('templates/default_top_navbar.php'); ?>
    <!--End of Top Navbar-->

    <!-- Main Layer -->
    <div class="container" style="padding-top:80px; margin-bottom:0px; padding-bottom:0px; margin-left:120px;">
        <!--Marker Section-->
        <div class="col-md-7">
            <div class="left_marksers" style="padding:0px; width:650px;">

                <div id="markers">
                    <img id="map_marker_1" class="map_marker" data-markerId="M01" title="Colombo, Western Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker1">
                    <img id="map_marker_2" class="map_marker" data-markerId="M02" title="Kandy, Central Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker2">
                    <img id="map_marker_3" class="map_marker" data-markerId="M03" title="Nuwara Eliya, Central Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker3">
                    <img id="map_marker_4" class="map_marker" data-markerId="M04" title="Galle, Southern Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker4">
                    <img id="map_marker_5" class="map_marker" data-markerId="M05" title="Sigiriya, Central Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker5">
                    <img id="map_marker_6" class="map_marker" data-markerId="M06" title="Trincomalee, Eastern Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker5">
                    <img id="map_marker_7" class="map_marker" data-markerId="M07" title="Polonnaruwa, North Central Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker5">
                    <img id="map_marker_8" class="map_marker" data-markerId="M08" title="Anuradhapura, North Central Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker5">
                    <img id="map_marker_9" class="map_marker" data-markerId="M09" title="Jaffna, Northern Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker5">
                    <img id="map_marker_10" class="map_marker" data-markerId="M10" title="Udawalawe, Uva Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker5">
                    <img id="map_marker_11" class="map_marker" data-markerId="M11" title="Katharagama, Uva Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker5">
                    <img id="map_marker_12" class="map_marker" data-markerId="M12" title="Hikkaduwa, Southern Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker5">
                    <img id="map_marker_13" class="map_marker" data-markerId="M13" title="Arugam Bay, Eastern Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker5">
                    <img id="map_marker_14" class="map_marker" data-markerId="M14" title="Sri Padaya, Central Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker5">
                    <img id="map_marker_15" class="map_marker" data-markerId="M15" title="Sinharaja Forest, Sabaragamuwa Province" src="<?php echo base_url('img/map-marker.png'); ?>" alt="marker5">
                </div>

            </div>
        </div> <!--End of the Marker section-->
        
        <!--Flip card section-->
        <div class="col-md-5">
            <div class="top-part" style="padding:0px; width:496px;">

                <div class="banner-form">
                    <div class="form-title">
                        <h3 id="hover_tag">Splendid Sri Lanka</h3>
                    </div>
                    <div class="form-body">

                        <div class="default_mask">
                            <p class="quot">
                                Come visit Sri Lanka. A nation like no other. If endless golden beaches, timeless ruins, warm and welcoming people, oodles of elephants, rolling surf, cheap prices, fun trains, famous tea and flavorful food could sum up a country, that would be Sri Lanka. Sri Lanka awaits you. See it! Feel it! We are sure, you’ll Love it! There is nothing like Sri Lanka.<img src="<?php echo base_url('img/quot2.png'); ?>" alt="" style="display: inline-block;   margin: 4px 0 0 9px;">
                            </p>
                        </div>

                        <div id="flip_cover_mask" style="display: none;">

                            <!--Flip Card #1-->
                            <div class='fc_card-container' style='float:left;margin:0px 8px 8px 0px;width:120px;height:120px;color:white;'>
                                <div class='fc_card fc_auto' data-direction='right' style='border:0;border-radius:0px;' data-autoflip='9000' data-start='1000'>
                                    <div class='fc_front' style='background: rgba(0, 0, 0, 0.4); padding:0px; text-align:center;'>
                                        <img id="img_card2" style="margin:0;border-radius:0;" />
                                    </div>
                                    <div class='fc_back' style='background: rgba(0, 0, 0, 0.4); text-align:center;'>
                                        <h3 id="txt_card2"></h3>
                                    </div>
                                </div>
                            </div>
                                
                            <!--Flip Card #2-->
                            <div class='fc_card-container' style='float:left;margin:0px 8px 8px 0px;width:220px;height:120px;color:white;'>
                                <div class='fc_card fc_auto' data-direction='left' style='border:0;border-radius:0px;' data-autoflip='9000' data-start='4000'>
                                    <div class='fc_front' style='background: rgba(0, 0, 0, 0.4); text-align:center;'>
                                        <h3 id="txt_card1"></h3>
                                    </div>
                                    <div class='fc_back' style='background: rgba(0, 0, 0, 0.4); padding:0px; text-align:center;'>
                                        <img id="img_card1" style="margin:0;border-radius:0;" />
                                    </div>
                                </div>
                            </div>

                            <!--Flip Card #3-->
                            <div class='fc_card-container' style='float:left;margin:0px 0px 8px 0px;width:120px;height:120px;color:white;'>
                                <div class='fc_card fc_auto' data-direction='top' style='border:0;border-radius:0px;' data-autoflip='9000' data-start='2000'>
                                    <div class='fc_front' style='background: rgba(0, 0, 0, 0.4); padding:0px; text-align:center;'>
                                        <img id="img_card3" style="margin:0;border-radius:0;" />
                                    </div>
                                    <div class='fc_back' style='background: rgba(0, 0, 0, 0.4); text-align:center;'>
                                        <h3 id="txt_card3"></h3>
                                    </div>
                                </div>
                            </div>

                            <!--Flip Card #4-->
                            <div class='fc_card-container' style='float:left;margin:0px 8px 0px 0px;width:120px;height:120px;color:white;'>
                                <div class='fc_card fc_auto' data-direction='bottom' style='border:0;border-radius:0px;' data-autoflip='9000' data-start='5000'>
                                    <div class='fc_front' style='background: rgba(0, 0, 0, 0.4); padding:0px; text-align:center;'>
                                        <img id="img_card4" style="margin:0;border-radius:0;" />
                                    </div>
                                    <div class='fc_back' style='background: rgba(0, 0, 0, 0.4); text-align:center;'>
                                        <h3 id="txt_card4"></h3>
                                    </div>
                                </div>
                            </div>

                            <!--Flip Card #5-->
                            <div class='fc_card-container' style='float:left;margin:0px 8px 0px 0px;width:120px;height:120px;color:white;'>
                                <div class='fc_card fc_auto' data-direction='right' style='border:0;border-radius:0px;' data-autoflip='9000' data-start='3000'>
                                    <div class='fc_front' style='background: rgba(0, 0, 0, 0.4); padding:0px; text-align:center;'>
                                        <img id="img_card6" style="margin:0;border-radius:0;" />
                                    </div>
                                    <div class='fc_back' style='background: rgba(0, 0, 0, 0.4); text-align:center;'>
                                        <h3 id="txt_card6"></h3>
                                    </div>
                                </div>
                            </div>

                            <!--Flip Card #6-->
                            <div class='fc_card-container' style='float:left;margin:0px 0px 0px 0px;width:220px;height:120px;color:white;'>
                                <div class='fc_card fc_auto' data-direction='left' style='border:0;border-radius:0px;' data-autoflip='9000' data-start='7000'>
                                    <div class='fc_front' style='background: rgba(0, 0, 0, 0.4); text-align:center;'>
                                        <h3 id="txt_card5"></h3>
                                    </div>
                                    <div class='fc_back' style='background: rgba(0, 0, 0, 0.4); padding:0px; text-align:center;'>
                                        <img id="img_card5" style="margin:0;border-radius:0;" />
                                    </div>
                                </div>
                            </div>

                        </div><!--end of the flip cover mask-->

                    </div> <!--End of the form body-->
                </div> <!--end of the banner form-->

            </div> <!--end of the top part-->

            <div class="bottom-part">

                <div id="bottom-description">
                    <h2>Be your own travel guide</h2>
                    <p>Get a stunning itinerary for your next trip in seconds. Try it now, it's free!</p>
                    <div class="button-cta-holder no-print">
                        <a data-type="Upper" href="#createPlan" data-toggle="modal" class="button button-cta ">Create your trip now <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>

            </div> <!--end of the bottom part-->
            
        </div> <!--End of the Flip card Section-->

    </div><!-- End of the main Layer -->


    <!--Plan Type Selection Modal-->
    <div class="modal fade" id="createPlan" role="dialog" data-backdrop="static">
        
        <div class="modal-dialog">
            
            <div class="modal-content">
                
                <div class="modal-header" style="background-color:#222; color:#FFF; height:50px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;"><span aria-hidden="true">&times;</span>
                    </button>
                    <h3 style="margin:0px;">Select Your Plan Type</h3>
                </div> <!--End of the nodal header-->
                
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="well" style="margin-top:30px;text-align:center;">
                                <h2>Let Us Plan it for You</h2>
                                <a href="#" class="btn btn-primary btn-lg">Let Us Plan it for You</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="well" style="margin-top:30px;text-align:center;">
                                <h2>Create Your Own Trip</h2>
                                <a id="open_user_pref_wizard" data-toggle="modal" class="btn btn-primary btn-lg">Create Your Own Trip</a>
                            </div>
                        </div>
                    </div>

                </div> <!--end of the modal body-->

            </div> <!--end of the modal content-->
            
        </div> <!--end of the modal dialog-->
        
    </div><!-- End of the Plan Type Selection Modal-->


    <!-- User Preference Selection Modal-->
    <?php include_once( 'templates/user_pref_modal.php'); ?>
    <!-- End of the User Preference Selection Modal-->




    <!-- Mainly scripts -->
    <!-- Google CDN jQuery with fallback to local -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url().'js/jquery-1.11.2.min.js'?>"><\/script>')</script>
    <script src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'js/jquery-ui.min.js'?>"></script>
    <script src="<?php echo base_url().'js/plugins/flipCard.js'?>"></script>

    <script src="<?php echo base_url().'js/plugins/bootstrap-wizard.min.js'?>"></script>

    <script src="<?php echo base_url().'js/plugins/ion.rangeSlider.min.js'?>"></script>
    
    <script src="<?php echo base_url().'js/plugins/jquery.toast.min.js'?>"></script>
    
    

    <!--When Page is Load, Destinations are Apeare one After Another -->
    <script type="text/javascript">
        $(window).ready(function () {
            var cars = document.querySelectorAll("#markers img"),
                i = 1;
            Array.prototype.forEach.call(cars, function (car) {
                setTimeout(function () {
                    car.classList.add("visible")
                }, 2000 * i)
                i++;
            });

        });
    </script>


    <!--When Mouse Over the map Marker, Flip Cards are Shows Right Side-->
    <script type="text/javascript">
        $(document).ready(function () {

            $('.map_marker').hover(function () {
                $(this).addClass('transition'); //map marker hover transition effect
                $(".default_mask").hide();

                var selectedMarker = $(this).attr('data-markerId');

                $.ajax({
                    url: '<?php echo base_url('home/get_homeLocation'); ?>',
                    type: "GET",
                    data: {
                        'markerId': selectedMarker
                    },
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    cache: true,

                    success: function (data) {
                        if (data == "") {
//                            alert("Unable to fetch Information");
//                            return false;
                        } else {
                            var siteUrl = "<?php echo base_url(); ?>";

                            $.each(data, function (key, value) {
                                $("#txt_card" + (key + 1)).text(value.attr_name);
                                var lastSection = "img/flip_covers/" + value.marker_id + "/" + value.attr_img_file;
                                $("#img_card" + (key + 1)).attr("src", siteUrl + lastSection);
                            });

                        }
                    }
                }); //end of the ajax request

                $("#hover_tag").text($(this).attr('title'));
                $("#flip_cover_mask").css("display", "block");

            }, function () {
                $(this).removeClass('transition');
                $(".default_mask").show();
                $("#hover_tag").text("Splendid Sri Lanka");
                $("#flip_cover_mask").css("display", "none");
            });

        });
        
    </script>



    <!--This is Step by Step Wizard of Collecting User Preference -->
    <script type="text/javascript">
        $(document).ready(function () {

            $.fn.wizard.logging = true;
            var wizard = $('#user_pref_wizard').wizard({
                keyboard: false,
                contentHeight: 400,
                contentWidth: 700,
                backdrop: 'static'
            });

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

                var sel_food = [];
                $('#food_check_list input:checkbox:checked').each(function () {
                    sel_food.push(this.value);
                });

                var sel_tp = [];
                $('#tp_check_list input:checkbox:checked').each(function () {
                    sel_tp.push(this.value);
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
                        sel_food_pref: sel_food,
                        sel_transport: sel_tp

                    }
                    //cache: false,
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
                setTimeout(function () {
                    wizard.reset();
                }, 250);
            });

            wizard.el.find(".wizard-success").click(function () {
                wizard.reset();
            });


            $('#open_user_pref_wizard').click(function (e) {
                e.preventDefault();
                $('#createPlan').modal('toggle');
                //var wizard1 = $("#user_pref_wizard").wizard({});
                wizard.show();
            });
        });

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
        };


        function validateChkBox_ts() {

            var retValue = {};

            if ($("#ts_check_list input:checkbox:checked").length > 0) {
                retValue.status = true;
            } else {
                retValue.status = false;
                alert("You must select at least one!");
            }
            return retValue;
        };

        function validateChkBox_acc() {

            var retValue = {};

            if ($("#acc_check_list input:checkbox:checked").length > 0) {
                retValue.status = true;
            } else {
                retValue.status = false;
                alert("You must select at least one!");
            }
            return retValue;
        };

        function validateChkBox_food() {
            var retValue = {};

            if ($("#food_check_list input:checkbox:checked").length > 0) {
                retValue.status = true;
            } else {
                retValue.status = false;
                alert("You must select at least one!");
            }
            return retValue;
        };

        function validateChkBox_tp() {
            var retValue = {};

            if ($("#tp_check_list input:checkbox:checked").length > 0) {
                retValue.status = true;
            } else {
                retValue.status = false;
                alert("You must select at least one!");
            }
            return retValue;
        };

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
        };
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
    
    
    <script type="text/javascript">
        $(window).load(function() {
            $.toast('<h4>This site is currently under development...</h4>', {type: 'info'});

        });
    </script>
    
    
    
    <script type="text/javascript">
    
        // ***********************************
        // pageloader - This should be the last script
        // ***********************************
        $(window).load(function(){
            if($(".preloader").length > 0){
                $('.preloader').fadeOut(1000); // set duration in brackets
            }
        });
    
    </script>

</body>

</html>
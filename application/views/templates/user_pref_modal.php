<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'css/plugins/bootstrap-wizard.css' ?>">

<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'css/plugins/rangeSlider/normalize.css' ?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'css/plugins/rangeSlider/ion.rangeSlider.css' ?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'css/plugins/rangeSlider/ion.rangeSlider.skinFlat.css' ?>">


<style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Montserrat);
    #ts_check_list,#food_check_list,#tp_check_list {
        width: 290px;
        margin: 0 auto;
        font-family: montserrat;
    }

    #ts_check_list li,#food_check_list li,#tp_check_list li {
        list-style-type: none;
        padding: 10px;
    }
    /*Adding custom checkbox icons*/

    .chk_box {
        position: relative;
        padding-left: 30px;
        font-size: 14px;
        cursor: pointer;
    }

    .chk_box:before,
    .chk_box:after {
        font-family: FontAwesome;
        font-size: 21px;
        /*absolutely positioned*/

        position: absolute;
        top: 0;
        left: 0;
    }

    .chk_box:before {
        content: '\f096';
        /*unchecked*/
    }

    .chk_box:after {
        content: '\f046';
        /*checked*/
        /*checked icon will be hidden by default by using 0 max-width and overflow hidden*/

        max-width: 0;
        overflow: hidden;
        opacity: 0.5;
        /*CSS3 transitions for animated effect*/

        transition: all 0.35s;
    }
    /*hiding the original checkboxes*/

    input[type="checkbox"] {
        display: none;
    }
    /*when the user checks the checkbox the checked icon will animate in*/

    input[type="checkbox"]:checked + .chk_box:after {
        max-width: 25px;
        /*an arbitratry number more than the icon's width*/

        opacity: 1;
        /*for fade in effect*/
    }
    /*adding some colors for fun*/

    .color1+label:before,
    .color1+label:after {
        color: hsl(0, 45%, 40%);
    }

    .color2+label:before,
    .color2+label:after {
        color: hsl(60, 45%, 40%);
    }

    .color3+label:before,
    .color3+label:after {
        color: hsl(120, 45%, 40%);
    }

    .color4+label:before,
    .color4+label:after {
        color: hsl(180, 45%, 40%);
    }

    .color5+label:before,
    .color5+label:after {
        color: hsl(240, 45%, 40%);
    }

    .color6+label:before,
    .color6+label:after {
        color: hsl(300, 45%, 40%);
    }
</style>


<style type="text/css">
    .wizard-modal p {
        margin: 0 0 10px;
        padding: 0;
    }

    #wizard-ns-detail-servers,
    .wizard-additional-servers {
        font-size: 12px;
        margin-top: 10px;
        margin-left: 15px;
    }

    #wizard-ns-detail-servers > li,
    .wizard-additional-servers li {
        line-height: 20px;
        list-style-type: none;
    }

    #wizard-ns-detail-servers > li > img {
        padding-right: 5px;
    }

    .wizard-modal .chzn-container .chzn-results {
        max-height: 150px;
    }

    .wizard-addl-subsection {
        margin-bottom: 40px;
    }

    .create-server-agent-key {
        margin-left: 15px;
        width: 90%;
    }
</style>



<div class="wizard" id="user_pref_wizard" data-title="How to be your tour...??">

    <form id="user_pref_form">

        <!-- Step 1 Tour Duration -->
        <div class="wizard-card">
            <h3>Tour Duration</h3>

            <div class="wizard-input-section">

                <p>For how long are you planning on visiting this beautiful country?</p>
                <p>Please Specify:</p>

                <div class="form-group">
                    <div class="col-sm-6" style="padding-left:30px; padding-top:20px;">
                        Expected Date of Start
                        <input type="text" class="form-control" name="from_date" id="datepicker1" placeholder="Start Date" data-validate="validateDate">
                        <br> Expected Date of Departure
                        <input type="text" class="form-control" name="to_date" id="datepicker2" placeholder="End Date" data-validate="validateDate">
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php echo base_url() . 'img/user_pref_wizard/calendar.jpg' ?>" alt="Calendar" width="180px" height="180px">
                    </div>
                </div>
            </div>

        </div>

        <!-- Step 2 Travel Style -->
        <div class="wizard-card">
            <h3>Travel Style</h3>

            <div class="wizard-input-section">

                <p>What type of a traveler are you? We are sure you are some of many. Please select one out of those mentioned below. This information will be used to determine what type of a traveler you are as well as what type of attractions you would most likely be interested in visiting.</p>

                <!-- A list of checkboxes -->
                <ul id="ts_check_list" >
                    <li>
                        <input type="checkbox" class="color1" id="one" value="History Buff" data-validate="validateChkBox_ts" />
                        <label class="chk_box" for="one">History Buff</label>
                    </li>
                    <li>
                        <input type="checkbox" class="color2" id="two" value="Peace and Quiet Seeker" />
                        <label class="chk_box" for="two">Peace and Quiet Seeker</label>
                    </li>
                    <li>
                        <input type="checkbox" class="color3" id="three" value="Like a local" />
                        <label class="chk_box" for="three">Like a local</label>
                    </li>
                    <li>
                        <input type="checkbox" class="color4" id="four" value="Nature Lover" />
                        <label class="chk_box" for="four">Nature Lover</label>
                    </li>
                    <li>
                        <input type="checkbox" class="color5" id="five" value="Beach Lover" />
                        <label class="chk_box" for="five">Beach Lover</label>
                    </li>

                </ul>
            </div>
        </div>

        <!-- Step 3 No. of Travellers-->
        <div class="wizard-card wizard-card-overlay">
            <h3>No. of Travellers</h3>

            <div class="wizard-input-section">
                <p>
                    At “Traveler Planner”, we support tour group of all sizes. This information is important to us in determining the travelling services for you.
                </p>

                <div class="col-sm-6" style="padding-top:20px; padding-left:25px;">
                    Adult
                    <select class="form-control" id="adult">
                        <option value="one">1</option>
                        <option value="two">2</option>
                        <option value="three">3</option>
                        <option value="four">4</option>
                        <option value="five">5</option>
                        <option value="five">6</option>
                    </select>
                    <br> Children
                    <select class="form-control"  id="children">
                        <option value="zero">0</option>
                        <option value="one">1</option>
                        <option value="two">2</option>
                        <option value="three">3</option>
                        <option value="four">4</option>
                        <option value="five">5</option>
                        <option value="five">6</option>
                    </select>
                </div>
                <div class="col-sm-6" style="padding-top:30px; text-align:center;">
                    <img src="<?php echo base_url() . 'img/user_pref_wizard/groups.png' ?>" width="160px" height="140px">
                </div>
            </div>
        </div>

        <!--Step 4 Accommodation -->
        <div class="wizard-card wizard-card-overlay">
            <h3>Accommodation</h3>

            <div class="wizard-input-section">
                <p>Feel the difference. “Travel Planner” takes pleasure in providing you with all types of accommodation available at Sri Lanka.</p>

                <div class="row" style="padding-left:15px;" id="acc_check_list">
                    <div class="col-sm-3" style="margin:10px;">
                        <label for="Hotel"><img src="<?php echo base_url() . 'img/user_pref_wizard/hotel.jpg' ?>" width="120px" height="120px" style="margin-bottom:5px;">
                        </label>

                        <input type="checkbox" class="color4" id="Hotel" value="Hotel" data-validate="validateChkBox_acc"/>
                        <label class="chk_box" for="Hotel">Hotel</label>

                    </div>
                    <div class="col-sm-3" style="margin:10px;">
                        <label for="Cabana"><img src="<?php echo base_url() . 'img/user_pref_wizard/cabana.jpg' ?>" width="120px" height="120px" style="margin-bottom:5px;">
                        </label>

                        <input type="checkbox" class="color5" id="Cabana" value="Cabana" />
                        <label class="chk_box" for="Cabana">Cabana</label>

                    </div>
                    <div class="col-sm-3" style="margin:10px;">
                        <label for="GuestHouse"><img src="<?php echo base_url() . 'img/user_pref_wizard/guest_house.jpeg' ?>" width="120px" height="120px" style="margin-bottom:5px;">
                        </label>

                        <input type="checkbox" class="color6" id="GuestHouse" value="GuestHouse" />
                        <label class="chk_box" for="GuestHouse">GuestHouse</label>

                    </div>
                </div>
            </div>
        </div>


        <!--Step 5 Destination type-->
        <div class="wizard-card wizard-card-overlay">
            <h3>Destination Type</h3>

            <div class="wizard-input-section">
                <p>Please select the desired options for us to get a better idea about the destinations you would want to visit?</p>
                <p>If you are already registered user, you can skip this step.</p>

                <div class="col-sm-12">

                    <p id="dest_types" style="text-align:center; padding-top: 20px;">

                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Waterfall</button>
                            <input type="checkbox" value="Waterfall" class="hidden" data-validate="validateChkBox_destType"/>
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Beach</button>
                            <input type="checkbox" value="Beach" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Historical Sites</button>
                            <input type="checkbox" value="Historical_Sites" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Religious Sites</button>
                            <input type="checkbox" value="Religious_Sites" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Mountain</button>
                            <input type="checkbox" value="Mountain" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Forest</button>
                            <input type="checkbox" value="Forest" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Restaurant</button>
                            <input type="checkbox" value="Restaurant" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Park</button>
                            <input type="checkbox" value="Park" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Garden</button>
                            <input type="checkbox" value="Garden" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Island</button>
                            <input type="checkbox" value="Island" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Ancient Ruin</button>
                            <input type="checkbox" value="Ancient_Ruin" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Bridge</button>
                            <input type="checkbox" value="Bridge" class="hidden" />
                        </span>

                    </p>


                    <!-- A list of checkboxes -->
                    <!--                <ul id="food_check_list">
                                        <li>
                                            <input type="checkbox" class="color6" id="Srilanken" data-validate="validateChkBox_food" />
                                            <label class="chk_box" for="Srilanken">	Waterfall</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="color5" id="Chinese" />
                                            <label class="chk_box" for="Chinese">Chinese</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="color4" id="Mongolian" />
                                            <label class="chk_box" for="Mongolian">	Beach</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="color3" id="Thai" />
                                            <label class="chk_box" for="Thai">Thai</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="color2" id="Italian" />
                                            <label class="chk_box" for="Italian">Italian</label>
                                        </li>
                    
                                    </ul>-->
                </div>


            </div>
        </div>


        <!--Step 6 Transport Method-->
        <div class="wizard-card wizard-card-overlay">
            <h3>Preferred Activities</h3>

            <div class="wizard-input-section">
                <p>Please select the desired options for us to get a better idea about the destinations you would want to visit?</p>
                <p>If you are already registered user, you can skip this step.</p>

                <div class="col-sm-12">

                    <p id="dest_activities" style="text-align:center; padding-top: 20px;">

                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Shopping</button>
                            <input type="checkbox" value="Shopping" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Wildlife tourism</button>
                            <input type="checkbox" value="Wildlife_tourism" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Whale watching</button>
                            <input type="checkbox" value="Whale_watching" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Surfing</button>
                            <input type="checkbox" value="Surfing" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Diving</button>
                            <input type="checkbox" value="Diving" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Windsurfing</button>
                            <input type="checkbox" value="Windsurfing" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Kitesurfing</button>
                            <input type="checkbox" value="Kitesurfing" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Boat Rides</button>
                            <input type="checkbox" value="Boat_Rides" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Hiking</button>
                            <input type="checkbox" value="Hiking" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Camping</button>
                            <input type="checkbox" value="Camping" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Spa</button>
                            <input type="checkbox" value="Spa" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Climbing</button>
                            <input type="checkbox" value="Climbing" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Plane Rides</button>
                            <input type="checkbox" value="Plane_Rides" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Swimming</button>
                            <input type="checkbox" value="Swimming" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Birdwatching</button>
                            <input type="checkbox" value="Birdwatching" class="hidden" />
                        </span>
                        <span class="button-checkbox">
                            <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;">Golf</button>
                            <input type="checkbox" value="Golf" class="hidden" />
                        </span>

                </div>

            </div>
            <!--                <div class="col-sm-6" style="padding-top:30px; margin-left:-40px;">
            
                                <ul id="tp_check_list">
                                    <li>
                                        <input type="checkbox" class="color3" id="private_transport" data-validate="validateChkBox_tp" />
                                        <label class="chk_box" for="private_transport">Private Transportation</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="color1" id="public_transport" />
                                        <label class="chk_box" for="public_transport">Public Transportation</label>
                                    </li>
                                </ul>
                            </div>-->
        </div>

        <!--Step 7 Budget Range-->
        <div class="wizard-card">
            <h3>Budget Range</h3>

            <div class="wizard-input-section">
                <p>
                    This information is taken for the sole purpose of providing you with the best solution for your budget. We provide customized trip plan for all budget ranges.
                </p>
                <p>Please specify how much you are expecting to spend for you travel at Sri Lanka.</p>
                <br>
                <div>
                    <input type="text" id="budget_range" name="example_name" value="" />
                    <br>
                    <div class="col-sm-5" style="margin-right:0px; padding-right:0px;">
                        <input type="number" id="min_budget" class="form-control" width="50px" value="30000" data-validate="validateNum" />
                    </div>
                    <div class="col-sm-2" style="text-align:center;">
                        to
                    </div>
                    <div class="col-sm-5" style="margin-left:0px; padding-left:0px;">
                        <input type="number" id="max_budget" class="form-control" width="50px" value="70000" data-validate="validateNum" />
                    </div>
                </div>
            </div>


    </form>

    <div class="wizard-success">
        <div class="alert alert-success" style="margin:20px;">
            <p><strong>Travel Planner</strong> Thanks you for taking time to fill out the questions. Please Click Plan your trip to Sri Lanka.</p>

        </div>
        <div style="text-align:center; margin-top:50px;">
            <a class="btn im-done" href="#"><img src="<?php echo base_url() . 'img/user_pref_wizard/plan-your-trip.png' ?>" alt="Plan Your Trip">
            </a>
        </div>

    </div>
</div>


</div> <!--End of the Step wizard-->
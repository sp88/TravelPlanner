<?php if($this->session->userdata("logged_in")){ redirect('account/myprofile','location'); } ?>



<?php 
//    $jsond = json_decode($travelStyles,true);
//    foreach($jsond as $ts){
//        echo $ts['travel_style'];
//    }
?>

<!--Head-->
<?php include_once( 'templates/head.php'); ?>
<!--End of Head-->



<body class="gray-bg">

    <!--Top Navbar-->
    <?php include_once('templates/default_top_navbar.php'); ?>
    <!--End of Top Navbar-->

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Register to Travel Planner</h2>

                <p>
                    The legendary explorer of the 13th Century, Marco Polo described Sri Lanka as the ‘finest island in the whole world’. It is also the country that is considered as the ‘Pearl of the Indian ocean’.
                </p>
                <p>
                    Using ‘Trip Planner’, you are capable of planning you own trip plan to Sri Lanka.
                </p>
                <p>
                    We take privilege in providing all the services under one roof to ensure a safe and reliable stay at the country.
                </p>
                <p>
                    We differ from other providers, because we take great interest and measures to provide you with a trip plan that is based on your preferences and choices. Because it’s ‘you’ and ‘your’ journey is what ultimately matters to us.
                </p>
                <p>
                    Don’t forget to visit out travel forum, where you can also find others interested in visiting this beautiful and magnificent country. Also, have a glimpse at our albums to see for yourself the true beauty of this country.
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <h4>Create account to see it in action.</h4>
                    <form id="regForm" class="m-t" role="form" action="#" method="post">
                        <div class="form-group">
                            <div class="col-md-6" style="margin:0px; padding:0px; padding-bottom:10px; padding-right:5px;">
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-md-6" style="margin:0px; padding:0px; padding-bottom:10px;">
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div  style="margin-bottom:10px;">
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="gender_m" value="male" name="gender">
                            <label for="gender_m"> Male </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="gender_f" value="female" name="gender">
                            <label for="gender_f"> Female </label>
                        </div>

                        </div>
                        <div class="form-group" style="margin-bottom:10px;">

                            <select id="country" name="country" class="form-control">
                                <option value="" disabled selected>Select Country</option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>

                        </div>

                        <div class="form-group" style="margin-bottom:10px;">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group" style="margin-bottom:10px;">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group" style="margin-bottom:10px;">
                            <input type="password" id="c_password" name="c_password" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group" style="margin-bottom:10px; text-align:center;">
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="tick"><label for="tick"> Agree the terms and policy </label>
                            </div>
                        </div>
                        <button type="button" id="regBtn" class="btn btn-primary block full-width">Register</button>
                        <div style="height:15px;" id="loginStatus">&nbsp;</div>
                        <p class="text-muted text-center">
                            <small>Already have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="<?php echo site_url('user/login'); ?>">Login</a>

                    </form>

                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                Reviews and advice on attractions, hotels, travel packages and more so you can plan your perfect trip quickly and easily...!
                <br>
                <a href="#">About us</a> |
                <a href="#">Our Team</a> |
                <a href="#">Contact us</a> |
                <a href="#">Support</a> |
                <a href="#">FAQ</a>
                <br>&copy; 2015 TravelPlanner All rights reserved. TravelPlanner <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
            </div>

        </div>
    </div>

    <!--Modal Window-->
    <?php include_once('templates/travel_style_modal.php'); ?>
    <!--End of Modal Window-->

    <!-- Mainly scripts -->
    <script src="<?php echo base_url().'js/jquery-1.11.2.min.js'?>"></script>
    <script src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>


    <script type="text/javascript">
        $(document).ready(function () {

            $("#firstname,#lastname,#country,#email,#password,#c_password").focus(function () {
                $("#loginStatus").html(" ");
            });


            function validateEmail($email) {
                var emailRegx = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailRegx.test($email);
            }

            $('#regBtn').click(function (event) {
                event.preventDefault();

                $("#loginStatus").html(" ");
                
                var firstname = $.trim($("#firstname").val());
                var lastname = $.trim($("#lastname").val());
                var gender = $('input[name="gender"]:checked').val(); 
                var country = $("#country").val();
                var email = $.trim($("#email").val().toLowerCase());
                var password = $.trim($("#password").val());
                var c_password = $.trim($("#c_password").val());


                if (firstname == '' || lastname == '' || email == '' || password == '' || country == '' || ($("input[name=gender]:checked").length == 0) || ($("#tick:checked").length == 0)) {
                    $("#loginStatus").html("<span style='color:red'>Error: Fill all the elements</span>");
                    return false;
                } else if (!validateEmail(email)) {
                    $("#loginStatus").html("<span style='color:red'>Error: Invalid Email Address</span>");
                    return false;
                } else if (password != c_password) {
                    $("#loginStatus").html("<span style='color:red'>Error: Password does not match</span>");
                    return false;
                } else {
                    $.ajax({
                        url: '<?php echo base_url('user/email_exists'); ?>',
                        type: "POST",
                        data: {'newUser_email': email},
                        cache: false,
                        success: function(data) {
                            if (data=='true') {
                                $("#loginStatus").html("<span style='color:red'>Error: This Email already Registered</span>");
                                return false;
                            } else {
                                
                                $.ajax({
                                    url: '<?php echo base_url('user/register_user'); ?>',
                                    type: "POST",
                                    data: {'firstname':firstname,'lastname':lastname,'gender':gender,'country':country,'email': email,'password':password},
                                    cache: false,
                                    success: function (data) {
                                        if (data=='true'){
                                            //$('#travel_style_modal').modal('show');
                                            window.location.href = "<?php echo site_url('user/login'); ?>";
                                            return true;
                                        } else {
                                            $("#loginStatus").html("<span style='color:red'>Error: Can not Register to Travel Planner</span>");
                                            return false;

                                        }
                                    }
                                }); 
                                
                                
                                
                                $('#regForm')[0].reset();
                                //$('#travel_style_modal').modal('show');
                                return true;
                            }
                        }
                    });
                }
                return false;

            });

        });
    </script>


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
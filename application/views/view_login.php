<?php
if ($this->session->userdata("logged_in")) {
    redirect('account/myprofile', 'location');
}
?>

<?php
//    if(!empty($selectedTravelStyles)){
//        //session_start();
//        echo $selectedTravelStyles;
//        //echo $_SESSION['reg_email'];
//    }
?>

<!--Head-->
<?php include_once('templates/head.php'); ?>
<!--End of Head-->

<body class="gray-bg">

    <!--Top Navbar-->
    <?php include_once( 'templates/default_top_navbar.php'); ?>
    <!--End of Top Navbar-->

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">

                <div style="text-align:center; margin-top:-15px;">
                    <h1 class="font-bold">Welcome to Travel Planner</h1>
                </div>
                <div style="text-align:center;">
                    <img src="<?php echo site_url('img/login_map_icon.png'); ?>">
                </div>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">

                    <h4>Sign in to Travel Planner</h4>
                    <form class="m-t" role="form" action="">
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" id="loginBtn" class="btn btn-primary block full-width m-b">Login</button>
                        <div style="height:10px;"  id="loginStatus"></div>

                        <br>
                        <a href="#"><small>Forgot password?</small></a>

                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="<?php echo site_url('user/register'); ?>">Create an account</a>
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


    <!-- Mainly scripts -->
    <script src="<?php echo base_url() . 'js/jquery-1.11.2.min.js' ?>"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $("#email,#password").focus(function () {
                $("#loginStatus").html("");
            });

            function validateEmail($email) {
                var emailRegx = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailRegx.test($email);
            }

            $('#loginBtn').click(function (event) {
                event.preventDefault();

                $("#loginStatus").html("");

                var email = $.trim($("#email").val().toLowerCase());
                var password = $.trim($("#password").val());

//                var dataString = 'email='+email+'&password='+password;

                if (!validateEmail(email) || email == '' || password == '') {
                    $("#loginStatus").html("<span style='color:red'>Error: Invalid Email Address or Password</span>");
                    return false;
                } else {
                    $.ajax({
                        url: '<?php echo base_url('user/login_user'); ?>',
                        type: "POST",
                        data: {'user_email': email, 'user_password': password},
                        cache: false,
//                        beforeSend: function () {
//                            $("#loginBtn").val('Connecting...');
//                        },
                        success: function (data) {
                            if (data == 'true') {

                                $.ajax({
                                    url: '<?php echo base_url('user/chk_loginRedirectUrl'); ?>',
                                    type: 'GET',
                                    success: function (data) {
                                        if(data!="false"){
                                            window.location.href = data;
                                        }
                                        else{
                                            window.location.href = "<?php echo site_url('account/myprofile'); ?>";
                                        }
                                    }
                                });

                                return true;
                            } else {
                                //Shake animation effect.
//                                $('#box').shake();
                                $("#loginStatus").html("<span style='color:red'>Error: Invalid Email Address or Password</span>");
                                return false;
                            }
                        }
                    });
                }
                return false;

            });

        });
    </script>



</body>

</html>

<style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Roboto);


    /*Forms
------------------------------------*/

    .form-control {
        box-shadow: none;
        border-radius: 0;
    }

    .input-group-addon {
        border-radius: 0;
    }

    .form-control:focus {
        border-color: #bbb;
        box-shadow: 0 0 2px #c9c9c9;
    }
    /*Form Spacing*/

    .form-spacing .form-control {
        margin-bottom: 15px;
    }
    /*Form Icons*/

    .input-group-addon {
        color: #b3b3b3;
        font-size: 14px;
        background: #fff;
    }

    .rounded-x {
        border-radius: 50% !important;
    }
    /*Icons
------------------------------------*/
    /*Social Icons*/

    .social-icons {
        margin: 0;
        padding: 0;
    }

    .social-icons li {
        list-style: none;
        margin-right: 3px;
        margin-bottom: 5px;
        text-indent: -9999px;
        display: inline-block;
    }

    .social-icons li a,
    a.social-icon {
        width: 28px;
        height: 28px;
        display: block;
        background-position: 0 0;
        background-repeat: no-repeat;
        transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
    }

    .social-icons li:hover a {
        background-position: 0 -38px;
    }

    .social-icons-color li a {
        opacity: 0.7;
        background-position: 0 -38px !important;
        -webkit-backface-visibility: hidden;
        /*For Chrome*/
    }

    .social-icons-color li a:hover {
        opacity: 1;
    }

    .social_facebook {
        background: url('<?php echo base_url('img/social_icons/facebook.png'); ?>') no-repeat;
    }

    .social_googleplus {
        background: url('<?php echo base_url('img/social_icons/googleplus.png'); ?>') no-repeat;
    }

    .social_linkedin {
        background: url('<?php echo base_url('img/social_icons/linkedin.png'); ?>') no-repeat;
    }

    .social_instagram {
        background: url('<?php echo base_url('img/social_icons/instagram.png'); ?>') no-repeat;
    }

    .social_twitter {
        background: url('<?php echo base_url('img/social_icons/twitter.png'); ?>') no-repeat;
    }

    .margin-bottom-20 {
        margin-bottom: 20px;
    }

    .reg-block {
        width: 300px;
        padding: 0px;
        margin: 10px auto;
        background: #fff;
        border-top: solid 2px #72c02c;
    }

    .reg-block h2,
    .reg-block p,
    .reg-block p a {
        color: #777;
    }

    .reg-block-header h2 {
        font-size: 28px;
    }

    .reg-block p a {
        text-decoration: underline;
    }
    .reg-block p a:hover {
        text-decoration: none;
    }

    /*Forms*/
    .reg-block .input-group-addon {
        color: #bbb;
        background: none;
        min-width: 40px;
    }

    .reg-block .form-control:focus {
        box-shadow: none;
        border-color: #999;
    }

    .reg-block .checkbox { 
        color: #555;
        margin-bottom: 20px;
        font-weight: normal;
    }

    /*Reg Header*/
    .reg-block-header {
        padding-bottom: 5px;
        margin-bottom: 20px;
        border-bottom: solid 1px #eee;
    }

    .reg-block-header h2 {
        text-align: center;
        margin-bottom: 15px;
    }

    .reg-block-header p {
        text-align: center;
    }

</style>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true" style="z-index: 1500;">
    <div class="modal-dialog modal-sm" style="width: 30%;">
        <div class="modal-content">

            <div class="modal-body">
                <div class="reg-block">
                    <div class="reg-block-header">
                        <h2>Sign In to Continue</h2>
                        <ul class="social-icons text-center">
                            <li>
                                <a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a>
                            </li>
                            <li>
                                <a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a>
                            </li>
                            <li>
                                <a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a>
                            </li>
                            <li>
                                <a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a>
                            </li>
                        </ul>

                    </div>

                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" id="loginModal_email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" id="loginModal_password" class="form-control" placeholder="Password">
                    </div>
                    <div>
                        <span class="login_modal_err" style="font-size: 13px; color: red;" ></span>
                    </div> 
                    <hr>
                    <div>
                        <p>Don't Have Account? Click <a class="color-green" href="<?php echo site_url('user/register'); ?>">Sign Up</a> to registration.</p>
                    </div>

                    <input type="button" name="login" class="btn btn-primary loginmodal-submit" value="Sign In" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
</div>

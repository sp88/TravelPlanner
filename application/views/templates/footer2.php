<style type="text/css">

    /*Footer-v1
------------------------------------*/

    .footer-v1 .footer {
        margin-top: 30px;
        padding: 0px;
        background: #272727;
    }

    .footer-v1 .footer p {
        color: #eee;
        font-size: 13px;
        line-height: 1.6;
    }

    .footer-v1 .footer h2 {
        color: #eee;
        font-size: 18px;
        font-weight: 200;
    }
    /*Link List*/

    .footer-v1 .link-list li {
        border-top: solid 1px #353535;
    }

    .footer-v1 address,
    .footer-v1 .link-list a,
    .footer-v1 .link-list i {
        color: #eee;
        font-size: 13px;
    }

    .footer-v1 address {
        line-height: 23px;
    }
    /*Dotted Map*/

    .footer-v1 .footer .map-img {
        background: url('<?php echo base_url('img/map-img.png'); ?>') 5px 60px no-repeat;
    }
    /*Blog Posts (with images)*/

    .footer-v1 .footer .posts .dl-horizontal a {
        color: #dadada;
    }

    .footer-v1 .footer .dl-horizontal a:hover {
        color: #5fb611 !important;
    }
    /*Copyright*/

    .footer-v1 .copyright {
        background: #222;
        border-top: none;
        padding: 5px 0 5px;
    }

    .footer-v1 .copyright p {
        color: #eee;
        margin-top: 14px;
    }

    .footer-v1 .copyright a {
        margin: 0 2px;
    }

    .footer-v1 .footer-socials {
        margin-top: 12px;
        text-align: right;
    }

    .footer-v1 .footer-socials li a {
        color: #777;
        font-size: 16px;
    }

    @media (max-width: 991px) {
        .footer-v1 .copyright,
        .footer-v1 .footer-socials {
            text-align: left;
        }
    }
    /*Headings*/

    h2 {
        font-size: 24px;
        line-height: 33px;
        color: #555;
        margin-top: 5px;
        text-shadow: none;
        font-weight: normal;
        font-family: "Open Sans", Arial, sans-serif;
    }
    /*Block Headline*/

    .headline {
        display: block;
        margin: 10px 0 25px 0;
        border-bottom: 1px dotted #e4e9f0;
    }

    .headline h2 {
        font-size: 22px;
    }

    .headline h2,
    .headline h3,
    .headline h4 {
        margin: 0 0 -2px 0;
        padding-bottom: 5px;
        display: inline-block;
        border-bottom: 2px solid #72c02c;
    }
    /*Other Footer Common Classes
------------------------------------*/
    /*Thumb Headline*/

    .thumb-headline h2 {
        color: #eee;
        font-size: 16px;
    }
    /*Footer Logo*/

    .footer-logo {
        margin: 17px 0 20px;
    }
    /*Latest List*/

    .latest-list li {
        padding: 8px 0;
        border-top: 1px solid #353535;
    }

    .latest-list li:first-child {
        padding-top: 0;
        border-top: none;
    }

    .latest-list li a {
        color: #eee;
    }
    /*Link List*/

    .link-list li {
        border-top: solid 1px #353535;
    }

    .link-list li:first-child {
        border-top: none !important;
    }

    .link-list a {
        color: #eee;
        font-size: 11px;
        padding: 6px 0px;
        display: inline-block;
        text-transform: uppercase;
    }

    .link-list li i {
        color: #bbb;
        float: right;
        margin-top: 10px;
    }

</style>


<!--=== Footer Version 1 ===-->
<div class="footer-v1">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-3 md-margin-bottom-40">
                    <a href="#"><img id="logo-footer" class="footer-logo" src="<?php echo base_url('img/logo.png'); ?>" alt="">
                    </a>
                    <p>Trip planning is made fun with Travel Planner's smart and intuitive trip planner. With over 1000 user generated itineraries, you can choose between an existing itinerary or plan your own trip. Explore about more than 200 destinations across Sri Lanka and create your trip plan.</p>
                </div>
                <!--/col-md-3-->
                <!-- End About -->

                <!-- Latest -->
                <div class="col-md-3 md-margin-bottom-40">
                    <div class="posts">
                        <div class="headline">
                            <h2>Offers</h2>
                        </div>
                        <ul class="list-unstyled latest-list">
                            <li>
                                <a href="#">Accommodations</a>
                            </li>
                            <li>
                                <a href="#">Car Rental</a>
                            </li>
                            <li>
                                <a href="#">Flights</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/col-md-3-->
                <!-- End Latest -->

                <!-- Link List -->
                <div class="col-md-3 md-margin-bottom-40">
                    <div class="headline">
                        <h2>Useful Links</h2>
                    </div>
                    <ul class="list-unstyled link-list">
                        <li><a href="#">About us</a><i class="fa fa-angle-right"></i>
                        </li>
                        <li><a href="#">Site Map</a><i class="fa fa-angle-right"></i>
                        </li>
                        <li><a href="#">FAQ</a><i class="fa fa-angle-right"></i>
                        </li>
                        <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i>
                        </li>
                    </ul>
                </div>
                <!--/col-md-3-->
                <!-- End Link List -->

                <!-- Address -->
                <div class="col-md-3 map-img md-margin-bottom-40">
                    <div class="headline">
                        <h2>Contact Us</h2>
                    </div>
                    <address class="md-margin-bottom-40">
                        25, Lorem Lis Street, Orange <br />
                        California, US <br />
                        Phone: 800 123 3456 <br />
                        Fax: 800 123 3456 <br />
                        Email: <a href="mailto:cdap15046@gmail.com" class="">cdap15046@gmail.com</a>
                    </address>
                </div>
                <!--/col-md-3-->
                <!-- End Address -->
            </div>
        </div>
    </div>
    <!--/footer-->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        2015 &copy; Travel Planner All Rights Reserved.
                        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                    </p>
                </div>

                <!-- Social Links -->
                <div class="col-md-6">
                    <ul class="footer-socials list-inline">
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Links -->
            </div>
        </div>
    </div>
    <!--/copyright-->
</div>
<!--=== End Footer Version 1 ===-->
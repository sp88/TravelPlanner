<!--  This leftside navigation bar used for planning pages  -->

<nav class="navbar-default navbar-static-side" role="navigation" style="margin-top:55px;">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" src="<?php echo base_url().'img/logo.png'?>" width="200px" style="margin-left:-15px;" />
                </div>
                <div class="logo-element">
                    TP
                </div>
            </li>
            <li class="active">
                <a href="<?php echo site_url("destinations"); ?>">
                    <i class="fa fa-map-marker fa-lg"></i>
                    <span class="nav-label">Destinations</span>
                    <span class="label label-primary pull-right"><span class="fa fa-check-square-o fa-lg" style="color:#000;"></span></span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url("hotels"); ?>">
                    <i class="fa fa-cutlery fa-lg"></i>
                    <span class="nav-label">Hotels</span>
                    <span class="label label-primary pull-right"><span class="fa fa-lock fa-lg" style="color:#000;"></span></span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url("map_view"); ?>">
                    <i class="fa fa-globe fa-lg"></i>
                    <span class="nav-label">Show On Map</span>
                    <span class="label label-primary pull-right"><span class="fa fa-lock fa-lg" style="color:#000;"></span></span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url("transport"); ?>">
                    <i class="fa fa-car fa-lg"></i>
                    <span class="nav-label">Car Hire</span>
                    <span class="label label-primary pull-right"><span class="fa fa-lock fa-lg" style="color:#000;"></span></span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url("flights"); ?>">
                    <i class="fa fa-plane fa-lg"></i>
                    <span class="nav-label">Flights</span>
                    <span class="label label-primary pull-right"><span class="fa fa-lock fa-lg" style="color:#000;"></span></span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url("plan_summary"); ?>">
                    <i class="fa fa-desktop fa-lg"></i>
                    <span class="nav-label">Plan Summary</span>
                    <span class="label label-primary pull-right"><span class="fa fa-lock fa-lg" style="color:#000;"></span></span>
                </a>
            </li>
            <li>

            </li>
        </ul>

    </div>
</nav>
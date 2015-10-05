<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0px; background-color:#333;">
    <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        <form role="search" class="navbar-form-custom" method="post" action="#">
            <div class="form-group">
                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
            </div>
        </form>
    </div>
    <ul class="nav navbar-top-links navbar-right" style="margin-top: 5px;">
        <li><a href="#"><i class="fa fa-paper-plane fa-lg"></i><span>Trip Planner</span></a></li>
        <li><a href="http://localhost/TravelPlannerForum/"><i class="fa fa-comments fa-lg"></i><span>Travel Forum</span></a></li>
        

        <?php if ($this->session->userdata('logged_user_email') !== false) : ?>
            <li><a href="<?php echo site_url('user/logout'); ?>"><i class="fa fa-sign-out fa-lg"></i><span>Sign Out</span></a></li>
        <?php else : ?>
            <li><a href="<?php echo site_url('user/login'); ?>"><i class="fa fa-sign-in fa-lg"></i><span>Sign In</span></a></li>
        <?php endif ?>



    </ul>

</nav>
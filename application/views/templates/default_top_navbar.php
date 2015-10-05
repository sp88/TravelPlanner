

	<style type="text/css">
		.navbar-header > a {
			height: 30px !important;
			padding-top: 0px !important;
		}

		.navbar-nav > li > a {
			padding-top: 10px !important;
			padding-bottom: 10px !important;
		}

		.navbar {
			min-height: 30px !important;
			background-color: #333;
		}
	</style>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" style="width:30px; padding-left:3px;">
					<i class="icon-bar"></i>
					<i class="icon-bar"></i>
					<i class="icon-bar"></i>
				</button>

				<a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url().'img/logo.png'?>" class="img-responsive" style="margin-top:4px;"> </a>
			</div>
			<div class="collapse navbar-collapse " id="bs-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo site_url('destinations'); ?>"><i class="fa fa-paper-plane fa-lg"></i><span>Trip Planner</span></a></li>
					<li><a href="http://localhost/TravelPlannerForum/"><i class="fa fa-comments fa-lg"></i><span>Travel Forum</span></a></li>
					
					<?php if ($this->session->userdata('logged_user_email')!== false) : ?>
				   		<li><a href="<?php echo site_url('user/logout'); ?>"><i class="fa fa-sign-out fa-lg"></i><span>Sign Out</span></a></li>
					<?php else : ?>
				   		<li><a href="<?php echo site_url('user/login'); ?>"><i class="fa fa-sign-in fa-lg"></i><span>Sign In</span></a></li>
					<?php endif ?>
					
				</ul>

			</div>
		</div>
	</nav>

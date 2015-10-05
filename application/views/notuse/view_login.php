<!--Head-->
	<?php include_once('templates/head.php'); ?>
<!--End of Head-->

<body class="gray-bg">
    
	<!--Top Navbar-->
	<?php include_once('templates/top_navbar.php'); ?>
	<!--End of Top Navbar-->
	
		<div class="loginColumns animated fadeInDown">    
			<div class="row">

				<div class="col-md-6">
					<h2 class="font-bold">Welcome to Travel Planner</h2>
					<p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					<p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<p><small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small></p>
				</div>
				
				<div class="col-md-6">
					<div class="ibox-content">
						<form class="m-t" role="form" action="<?php echo site_url('user/login_user'); ?>" method="post">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required="">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password" required="">
							</div>
							<button type="submit" class="btn btn-primary block full-width m-b">Login</button>

							<a href="#"> <small>Forgot password?</small> </a>

							<p class="text-muted text-center"><small>Do not have an account?</small></p>
							<a class="btn btn-sm btn-white btn-block" href="<?php echo site_url('user/register'); ?>">Create an account</a>
						</form>

					</div>
				</div>
			</div>
			
		</div> <!--End of Login Columns-->

		<!--Footer-->
		<?php include_once('templates/footer.php'); ?>
		<!--End of Footer-->

		<script src="<?php echo base_url().'js/jquery-1.11.2.min.js'?>"></script>

		<script type="text/javascript">
			// Social Hover
			jQuery("#gdl-social-icon .social-icon").hover(function() {
				jQuery(this).animate({
					opacity : 0.55
				}, 150);
			}, function() {
				jQuery(this).animate({
					opacity : 1
				}, 150);
			});
		</script>

	</body>

</html>
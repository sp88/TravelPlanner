<!DOCTYPE html>
<!--[if IE 8 ]><html lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="shortcut icon" href="<?php echo base_url().'img/favicon.ico' ?>" />
    	<title><?php echo 'Travel Planner | '.$title; ?></title>
    	
		<!-- Bootstrap -->
        <link href="<?php echo base_url().'css/bootstrap.min.css'?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url().'css/font-awesome.min.css'?>" rel="stylesheet">

        <link href="<?php echo base_url().'css/animate.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'css/style.css'?>" rel="stylesheet">
                <link href="<?php echo base_url().'css/jquery-ui.min.css'?>" rel="stylesheet">

        <?php
            if(!empty($css)){
                foreach($css as $cssfile){
                    echo "<link rel='stylesheet' href='";echo base_url()."css/$cssfile' type='text/css' />";
                }
            }
	?>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="<?php echo base_url().'js/html5shiv.min.js'?>"></script>
	      <script src="<?php echo base_url().'js/respond.min.js'?>"></script>
	    <![endif]-->
        
    </head>


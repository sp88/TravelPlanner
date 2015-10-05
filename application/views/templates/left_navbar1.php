<!--  This leftside navigation bar used for profile pages  -->

<style type="text/css">
    #prof_pic_div {
        height: 128px;
        width:128px;
        margin-left: 20px;
        margin-bottom:10px;
        position: relative;
        overflow: hidden;
        background-color: #ffffff;
        background: url(<?php echo base_url().'img/uploads/default_profile_pic.png'?>) no-repeat;
    }
    
    #prof_pic_shade {
        min-height: 40px;
        position: absolute;
        margin-top: -40px;
        width: 100%;
        background: url(<?php echo base_url().'img/timeline_shade.png'?>);
    }
    
    .uploadFile {
        background: url(<?php echo base_url().'img/whitecam.png'?>) no-repeat;
        height: 32px;
        width: 32px;
        overflow: hidden;
        cursor: pointer;
    }
    
    .uploadFile input {
        filter: alpha(opacity 0);
        opacity: 0;
        margin-left: -110px;
    }
    
    .timelineUploadBG {
        position: absolute;
        margin-top: 5px;
        margin-left: 85px;
        height: 32px;
        width: 32px;
    }
    
    .custom-file-input {
        height: 25px;
        cursor: pointer;
    }
    
    .bgImage,
    #timelineBGload {
        width: 100%;
    }
    
    .headerimage {
        cursor: s-resize;
        position: absolute;
    }
    
    .wallbutton:hover {
        text-decoration: none;
    }
    
    .blackButton {
        background-color: #666666;
        border-color: #333333;
    }
    
    .bgSave {
        position: absolute;
        margin-top: 267px;
        margin-left: 760px;
        z-index: 4000;
    }
    
    .wallbutton {
        font-weight: bold;
        padding: 7px 9px;
        background-color: #5fcf80;
        color: #fff !important;
        font-size: 12px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        cursor: pointer;
        text-decoration: none;
        border-width: 1px 1px 3px !important;
        border-style: solid;
        border-color: #3ac162;
        white-space: nowrap;
        display: -moz-inline-stack;
        -moz-border-radius: 3px;
        -ms-border-radius: 3px;
        -o-border-radius: 3px;
        border-radius: 3px;
    }
</style>


<nav class="navbar-default navbar-static-side" role="navigation" style="margin-top: 40px;">

    <div class="sidebar-collapse">

        <ul class="nav" id="side-menu">
            <li class="nav-header" style="height: 220px; background-color:#202C38;">
                <div style="text-align:center;">
                    

                    <div id="prof_pic_div">
                       
                       <?php if($prof_pic=="default_profile_pic.png") { ?>
                       
                        <img alt="image" src="<?php echo base_url().'img/uploads/default_profile_pic.png'?>" height="100%" width="100%">
                    
                        <?php } else { ?>
                        
                        <img alt="image" src="<?php echo base_url().'img/uploads/'. $prof_pic.''?>" height="100%" width="100%">
                        
                        <?php } ?>
                        

                        <div id="prof_pic_shade">
                            <form id="prof_pic_form" method="post" enctype="multipart/form-data" action="<?php echo site_url('account/upload_profile_pic'); ?>">
                                <div class="uploadFile timelineUploadBG">
                                    <input type="file" name="photoimg" id="prof_pic" class="custom-file-input">
                                </div>
                            </form>
                        </div>

                    </div>


                    <h3><span style="color:white;"><?php echo $fname." ".$lname ?></span></h3>
                    <p style="color:white;"><i class="fa fa-map-marker"></i> &nbsp; <?php echo $country ?></p>
                </div>

            </li>
            <li class="active"><a href="<?php echo site_url('account/myprofile'); ?>"><i class="fa fa-user"></i>
					<span class="nav-label">Profile Info</span></a>
            </li>
<!--
            <li><a href="<?php echo site_url('account/messages'); ?>"><i class="fa fa-envelope"></i> <span
					class="nav-label">Messages</span> <span
					class="label label-primary pull-right">NEW (1)</span></a>
            </li>
-->
            <li><a href="#"><i class="fa fa-th-large"></i> <span
					class="nav-label">My Plans</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="#"><i class="fa fa-plus-square "></i>Create New Plan</a>
                    </li>
                    <li><a href="<?php echo site_url('account/myplans'); ?>"><i class="fa fa-eye "></i>View Plans</a>
                    </li>

                </ul>
            </li>
            <li><a href="#"><i class="fa fa-picture-o"></i> <span
					class="nav-label">My Albums</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="#"><i class="fa fa-plus-square "></i>Create New Album</a>
                    </li>
                    <li><a href="basic_gallery.html"><i class="fa fa-eye "></i>View
							Albums</a>
                    </li>

                </ul>
            </li>
            <li><a href="<?php echo site_url('account/calendar'); ?>"><i class="fa fa-calendar"></i> <span
					class="nav-label">Calender</span></a>
            </li>

        </ul>

    </div>
</nav>
<!--Head-->
<?php include_once( 'templates/head.php'); ?>
<!--End of Head-->

<style type="text/css">
    .chat {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .chat li {
        margin-bottom: 10px;
        padding-bottom: 5px;
        border-bottom: 1px dotted #B3A9A9;
    }
    
    .chat li.left .chat-body {
        margin-left: 60px;
    }
    
    .chat li.right .chat-body {
        margin-right: 60px;
    }
    
    .chat li .chat-body p {
        margin: 0;
        color: #777777;
    }
    
    .panel .slidedown .glyphicon,
    .chat .glyphicon {
        margin-right: 5px;
    }
    
    .panel-body {
        overflow-y: scroll;
        height: 400px;
    }
    
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #F5F5F5;
    }
    
    ::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }
    
    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #555;
    }
</style>


<body>

    <div id="wrapper">

        <!--Left Navbar-->
        <?php include_once( 'templates/left_navbar.php'); ?>
        <!--End of Left Navbar-->

        <div id="page-wrapper" class="gray-bg" style="margin-top:40px; height:600px;">

            <!--Top Navbar-->
            <?php include_once( 'templates/top_navbar.php'); ?>
            <!--End of Top Navbar-->

            <div class="wrapper wrapper-content animated fadeInRight" style="height:570px;">

                <!--                <div class="row" >-->
                <div class="col-lg-12">

                    <div class="ibox chat-view" >

                        <div class="ibox-title">
                            <h4>Messages</h4>
                        </div>


                        <div class="ibox-content" style="padding:10px 10px; padding-bottom:0px; margin-bottom:0px;">


                            <div class="row">


                                <div class="col-md-3" style="margin-right:0px; padding-right:0px; padding-bottom:0px; margin-bottom:0px;">

                                    <div class="panel panel-primary">
                                        <!--
                                        <div class="panel-heading">
                                            <span class="glyphicon glyphicon-comment"></span> Chat

                                        </div>
-->
                                        <div class="panel-body" style="height:502px;">
                                            <ul class="chat">
                                                <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                                                    <div class="chat-body clearfix">
                                                        <div class="header">
                                                            <strong class="primary-font">Jack Sparrow</strong>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                                                    <div class="chat-body clearfix">
                                                        <div class="header">
                                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                                                    <div class="chat-body clearfix">
                                                        <div class="header">
                                                            <strong class="primary-font">Jack Sparrow</strong>
                                                        </div>

                                                    </div>
                                                </li>
                                                <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                                                    <div class="chat-body clearfix">
                                                        <div class="header">
                                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                                        </div>

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>




                                <div class="col-md-9" style="margin-left:0px; padding-left:0px; padding-bottom:0px; margin-bottom:0px;">
                                    <div class="panel panel-primary">
                                        <!--
                                        <div class="panel-heading">
                                            <span class="glyphicon glyphicon-comment"></span> Chat

                                        </div>
-->
                                        <div class="panel-body">
                                            <ul class="chat">
                                                <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                                                    <div class="chat-body clearfix">
                                                        <div class="header">
                                                            <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                                        </div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                                                    <div class="chat-body clearfix">
                                                        <div class="header">
                                                            <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                                        </div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                                                    <div class="chat-body clearfix">
                                                        <div class="header">
                                                            <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                                        </div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                                                    <div class="chat-body clearfix">
                                                        <div class="header">
                                                            <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                                        </div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="input-group">
                                                <textarea rows="4" cols="95%"></textarea>
<!--                                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />-->
                                                <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" id="btn-chat" style="height:50px;">
                                Send</button>
                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

                <!--                </div>-->


            </div>


            <!--Footer-->
            <?php include_once( 'templates/footer.php'); ?>
            <!--End of Footer-->


        </div>
        <!--end of the page wrapper-->





    </div>
    <!--end of the wrapper-->



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

</body>

</html>
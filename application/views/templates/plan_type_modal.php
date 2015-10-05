<!--Plan Type Selection Modal-->
<div class="modal fade" id="planType_modal" role="dialog">

    <div class="modal-dialog" style="margin-top: 10%">

        <div class="modal-content">

            <div class="modal-header" style="background-color:#222; color:#FFF; height:50px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;"><span aria-hidden="true">&times;</span>
                </button>
                <h3 style="margin:0px;">Select Your Plan Type</h3>
            </div> <!--End of the nodal header-->

            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6 text-center">
                        <!--<div class="well" style="margin-top:30px;text-align:center;">-->
                        <img src="<?php echo base_url('img/fixed plans.png'); ?>" width="200px" height="200px" alt="Let Us Plan it for You">
                        <br>
                        <br>
                        <a href="<?php echo site_url('Tour_Packages'); ?>" class="btn btn-primary btn-lg">Let Us Plan it for You</a>
                        <!--</div>-->
                    </div>
                    <div class="col-md-6 text-center">
                        <!--<div class="well" style="margin-top:30px;text-align:center;">-->
                        <img src="<?php echo base_url('img/make your own trip.png'); ?>" width="200px" height="200px" alt="Create Your Own Trip">
                        <br>
                        <br>
                        <a href="<?php echo site_url('destinations');?>" class="btn btn-primary btn-lg">Create Your Own Trip</a>
                        <!--<a id="open_user_pref_wizard" data-toggle="modal" class="btn btn-primary btn-lg">Create Your Own Trip</a>-->
                        <!--</div>-->
                    </div>
                </div>

            </div> <!--end of the modal body-->

        </div> <!--end of the modal content-->

    </div> <!--end of the modal dialog-->

</div><!-- End of the Plan Type Selection Modal-->
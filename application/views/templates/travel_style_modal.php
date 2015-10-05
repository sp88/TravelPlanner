
<!--<?php  //echo $_POST['email']; ?>   -->

<style type="text/css">
    .modal {
        text-align: center;
    }
    
    .modal:before {
        display: inline-block;
        vertical-align: middle;
        content: " ";
        height: 100%;
    }
    
    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }
</style>

<div class="modal inmodal" id="travel_style_modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
           <form id="travel_style_form" action="<?php echo site_url('account/store_travel_styles'); ?>" method="post">
                <div class="modal-header" style="height:70px;">
                    <!--    <button type="button" class="close" data-dismiss="modal" style="margin-top:-5px;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
                    <h5 class="modal-title" style="margin-top:-25px;">What kind of Traveler are you?</h5>
                    <p>Select 3 or more tags to include on your profile.</p>
                </div>
                <div class="modal-body">

                    <p style="text-align:center;">
                        
                        
                        
                        
                        <?php 
                        
                        if(basename($_SERVER['PHP_SELF'])=='myprofile'){
                                
                            $jsond = json_decode($travelStyles,true); 
                            $jsond_selected = json_decode($selected_travelStyles,true); 
                            
                            $sitems = array();
                            
                            foreach($jsond_selected as $sts){
                                array_push($sitems,$sts['travel_style']);
                            }   
                            
                                foreach($jsond as $ts){
                        ?>               
                                <span class="button-checkbox">
                                    <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;"><?php echo $ts['travel_style']; ?></button>
                                    <input type="checkbox" name="check_list[]" value="" class="hidden" <?php if(in_array($ts['travel_style'],$sitems)){ echo "checked"; } ?> />
                                </span>
                                        
                                <?php }  ?>
                            
                        <?php }
                        else{
                            $jsond = json_decode($travelStyles,true); 
                                foreach($jsond as $ts){
                        ?>
                                <span class="button-checkbox">
                                    <button type="button" class="btn btn-primary btn-outline"  style="margin-bottom:5px;"><?php echo $ts['travel_style'];?></button>
                                    <input type="checkbox" name="check_list[]" value="<?php echo $ts['travel_style_id']; ?>" class="hidden" />
                                </span>
                        
                                <?php } ?>
                        <?php } ?>


                   
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Done</button>
                </div>
            </form>
        </div>
    </div>
</div>



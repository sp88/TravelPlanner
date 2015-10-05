<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<input disabled type="hidden" id="recNum" value="<?php echo $rec ?>"/>

<?php foreach ($query as $qry => $row): ?>

    <div class="col-md-4 dest_block" style="margin-bottom:10px; ">
        <div class="package-box movin movedin">
            <div class="package-box-img">
                <div class="mask">
                    <div class="wrapmask">
                        <span>
                            <a data-destId="<?php echo $row['dest_id']; ?>" class="addTo_dest_wishlist_btn"  title="Add to Wishlist"><i class="fa fa-plus maskicons"></i></a>
                            <a href="#" title="Like"><i class="fa fa-heart-o maskicons"></i></a>
                            <a id="<?php echo $row['wiki_name']; ?>" target="_blank" class="dest_moreInfo_btn" title="More Info"><i class="fa fa-link maskicons"></i></a>
                        </span>
                    </div>
                </div>

                <img alt="img1" src="<?php echo base_url() ?>img/destinations/<?php echo $row['dest_image']; ?>">
            </div>
            <div class="package-box-info">
                <div class="package-box-common">
                    <div class="package-box-details">
                        <div class="package-box-name"><?php echo $row['dest_name']; ?>
                            <span class="stars" style="float:right;">

                                <p><span class="stars"><?php echo $row['dest_ratings']; ?></span></p>

                            </span>
                        </div>
                        <div class="package-box-type"><?php echo $row['province']; ?></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php endforeach; ?>







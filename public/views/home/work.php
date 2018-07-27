<!-- Banner -->
<div class="section">
    <section id="banner">
        <div class="patteren"></div>
        <div class="container fadeInRightBig" data-delay="500">
            <div class="center flash animated">
                <h2 class="title-service"><?php echo $this->lang->line('hoatdong'); ?></h2>
            </div>

        </div>
    </section>
</div>
<!-- Banner End -->
<div class="section s1" id="news-work">
    <!-- BEGIN SERVICE CONTAINER -->
    <section class="news-work-container">
        <div class="news-work-list" id="news-work-list">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <!-- BEGIN WORK NEWS -->
                        <div class="work-news">
                            <div class="row">
                                <?php foreach($cultures as $culture) { ?>
                                    <div class="list">
                                        <div class="col-md-7 detail-left">
                                            <img src="<?php echo base_url().'image_tools/timthumb.php?src='.base_url().$culture->cul_image.'&h=413&w=652&zc=1'; ?>" alt="" class="img-thumbnail">
                                        </div>
                                        <div class="col-md-5 detail-right">
                                            <h4 class="title-work"><?php echo $culture->cul_title; ?></h4>
                                            <div class="description-work">
                                                <p><?php echo $culture->cul_detail?></p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- END WORK NEWS -->
                        <div class="pagi">
                             <?php echo $paginator; ?>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TEAM CONTAINER -->

</div>

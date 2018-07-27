<!-- Banner -->
<div class="section">
    <section id="banner">
        <div class="patteren"></div>
        <div class="container fadeInRightBig" data-delay="500">
            <div class="center flash animated">
                <h2 class="title-service text-uppercase"><?php echo $this->lang->line('tuyendung'); ?></h2>
            </div>

        </div>
    </section>
</div>
<!-- Banner End -->
<div class="section s1" id="recruitment">
    <!-- BEGIN SERVICE CONTAINER -->
    <section class="recruitment-container">
        <div class="recruitment-list" id="recruitment-list">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <!-- BEGIN RECRUITMENT CONTENT -->
                        <div class="recruitment-content">
                            <div class="row">
                                <div class="list">
                                    <div class="col-md-8 detail-left">
                                        <?php foreach($recruitments as $recruitment) { ?>
                                            <div class="item">
                                                <img src="<?php echo get_image_size($recruitment->rec_image) ?>" alt="" class="img-responsive">
                                                <h4 class="text-uppercase"><a href="<?php echo base_url('chi-tiet-tuyen-dung').'/'.$recruitment->rec_id.'-'.$recruitment->rec_alias; ?>"><?= $lang == 'vi' ? $recruitment->rec_title :  $recruitment->rec_title_en; ?></a></h4>
                                            </div>
                                            <div class="clearfix"></div>
                                        <?php } ?>

                                    </div>
                                    <div class="col-md-4 detail-right">
                                        <form action="<?php echo base_url('recruitment-search');?>" method="post">
                                            <div class="form-group search-box">
                                                <i class="fa fa-search magnify"></i>
                                                <input type="text" name="key" class="form-control search-box-recruitment" placeholder="<?php echo $this->lang->line('timkiem'); ?>" />
                                            </div>
                                        </form>
                                        <h4 class="title-work"><?php echo $this->lang->line('bophan'); ?></h4>
                                        <div class="list-group">
                                            <?php foreach($cate_recruitments as $cate_recruitment) { ?>
                                                <a href="<?php echo base_url('danh-muc-tuyen-dung').'/'.$cate_recruitment->cat_id.'-'.$cate_recruitment->cat_alias; ?>" class="list-group-item"><?php echo $lang == 'vi' ? $cate_recruitment->cat_name : $cate_recruitment->cat_name_en ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- END RECRUITMENT CONTENT -->
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

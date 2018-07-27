<!-- Banner -->
<div class="section">
    <section id="banner">
        <div class="patteren"></div>
        <div class="container fadeInRightBig" data-delay="500">
            <div class="center flash animated">
                <h2 class="title-service text-uppercase"><?php echo $this->lang->line('tintuc'); ?></h2>
            </div>

        </div>
    </section>
</div>
<!-- Banner End -->
<div class="section s1" id="news">
    <!-- BEGIN SERVICE CONTAINER -->
    <section class="news-container">
        <div class="news-list" id="news-list">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <!-- BEGIN RECRUITMENT CONTENT -->
                        <div class="news-content">
                            <div class="row">
                                <div class="list">
                                    <div class="col-md-8 detail-left">
                                        <?php foreach($posts as $post) { ?>
                                        <div class="item">
                                            <img src="<?php echo base_url().'image_tools/timthumb.php?src='.base_url().$post->pos_image.'&h=338&w=750&zc=1'; ?>" alt="" class="img-responsive">
                                            <div class="date-time"><p><?php echo date('d-m-Y', $post->pos_date) ?></p></div>
                                            <h4><a href="<?php echo base_url('chi-tiet').'/'.$post->pos_id.'-'.$post->pos_alias; ?>"><?php echo isset($post->pos_title) && $lang == 'vi' ? $post->pos_title : $post->pos_title_en ?></a></h4>
                                            <div class="description-news">
                                                <p><?php echo isset($post->pos_detail) && $lang == 'vi' ? $post->pos_detail : $post->pos_detail_en ?></p>
                                            </div>
                                            <a href="<?php echo base_url('chi-tiet').'/'.$post->pos_id.'-'.$post->pos_alias; ?>" class="btn btn-warning read-more-news"><?php echo $this->lang->line('doctiep'); ?></a>
                                        </div>
                                        <div class="clearfix"></div>
                                        <?php } ?>

                                    </div>
                                    <div class="col-md-4 detail-right">
                                        <form action="<?php echo base_url('search');?>" method="post">
                                            <div class="form-group search-box">
                                                <i class="fa fa-search magnify"></i>
                                                <input type="text" name="key" class="form-control search-box-recruitment" placeholder="<?php echo $this->lang->line('timkiem'); ?>" />
                                            </div>
                                        </form>
                                        <h4 class="title-work"><?php echo $this->lang->line('baivietganday'); ?></h4>
                                        <div class="list-group">
                                            <?php foreach($recent_posts as $recent_post) { ?>
                                            <a href="<?php echo base_url('chi-tiet').'/'.$recent_post->pos_id.'-'.$recent_post->pos_alias; ?>" class="list-recent-item">
                                                <?php echo $lang == 'vi' ? '[THÔNG BÁO] - '. $recent_post->pos_title : '[NOTIFICATION] - '.$recent_post->pos_title_en ?>
                                                <br/><span class="date-time"><?php echo date('d-m-Y', $recent_post->pos_date) ?></span>
                                            </a>
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

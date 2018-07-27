<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=<?php echo APP_ID_FB; ?>&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
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
                        <!-- BEGIN NEWS DETAIL CONTENT -->
                        <div class="news-content">
                            <div class="row">
                                <div class="list">
                                    <div class="col-md-8 detail-left">
                                        <div class="item">
                                            <img src="<?php echo base_url().'image_tools/timthumb.php?src='.base_url().$post_detail[0]->pos_image.'&h=338&w=750&zc=1'; ?>" alt="" class="img-responsive">
                                            <div class="date-time"><p><?php echo date('d-m-Y', $post_detail[0]->pos_date) ?></p></div>
                                            <h4><a href="<?php echo base_url('chi-tiet') . '/' . $post_detail[0]->pos_id . '-' . $post_detail[0]->pos_alias; ?>"><?= $lang == 'vi' ? $post_detail[0]->pos_title : $post_detail[0]->pos_title_en ?></a></h4>
                                            <div class="description-news">
                                                <p><?php echo $post_detail[0]->pos_detail ?></p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="row">
                                            <div class="pagi-detail">
                                                <div class="col-md-6 text-left">
                                                    <a href=""><i class="fa fa-long-arrow-left"></i>&nbsp;Previous</a>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <a href="">Next&nbsp;<i class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row comments-fb">
                                            <div class="fb-comments" data-width="100%" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
                                        </div>
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
                                            <?php
                                            foreach($posts as $post) {
                                            ?>
                                            <a href="<?php echo base_url('chi-tiet') . '/' . $post->pos_id . '-' . $post->pos_alias; ?>" class="list-recent-item">
                                                <?php echo $lang == 'vi' ? '[THÔNG BÁO] - '. $post->pos_title : '[NOTIFICATION] - '.$post->pos_title_en ?>
                                                <br/><span class="date-time"><?php echo date('d-m-Y', $post->pos_date) ?></span>
                                            </a>
                                            <? } ?>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- END NEWS DETAIL CONTENT -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TEAM CONTAINER -->

</div>

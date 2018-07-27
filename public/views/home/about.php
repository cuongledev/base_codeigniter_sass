<!-- Banner -->
<div class="section">
    <section id="banner">
        <div class="patteren"></div>
        <div class="container fadeInRightBig" data-delay="500">
            <div class="center flash animated">
                <h2 class="title-top">VNPT EPAY<br/><?php echo $this->lang->line('bietdoitoasang'); ?></h2>
            </div>
            <div class="text-center">
                <img src="<?php echo base_url('public/theme/images/about/icon-button.png') ?>" class="button-icon-center" alt=""/>
            </div>
        </div>
    </section>
</div>
<!-- Banner End -->
<div class="section s1" id="intro-about">
    <!-- BEGIN SERVICE CONTAINER -->
    <section class="intro-about-container">
        <div class="introx" id="introx">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 animate fadeInLeftBig" data-delay="100">
                            <!-- BEGIN TEAM -->
                            <div class="team-sec team-sec1">
                                <div class="detail-left">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <img src="<?php echo base_url('public/theme/images/togethe.jpg') ?>" class="img-responsive" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <h1 class="about-title">VNPT EPAY</h1>
                                        </div>
                                    </div>

                                </div>
                                <div class="clearfix"></div>
                            </div>



                        </div>
                        <!-- END TEAM -->

                        <div class="col-md-6 animate fadeInRightBig" data-delay="100">
                            <!-- BEGIN TEAM -->
                            <div class="detail-right">
                                <div class="description-top">
                                    <div class="desc-content-top">
                                        <p><p><?php echo $this->lang->line('gioithieuvechungtoi'); ?></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="bg-run">
                                    <div class="description-bottom">
                                        <div class="desc-content-bottom">
                                             <p><strong><?php echo $this->lang->line('tencongty'); ?></strong></p>
                                            <p><?php echo $this->lang->line('thanhlap'); ?></p>
                                            <p><?php echo $this->lang->line('vondieule'); ?>: <strong>120 tỷ VNĐ</strong></p>
                                            <p><?php echo $this->lang->line('codongchinh'); ?>: VNPT(35%),UTC(65%)</p>
                                            <p><?php echo $this->lang->line('address'); ?></p>
                                            <p>Hotline: 1900 6470</p>
                                            <p>Website: vnptepay.com.vn</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<div class="section s2" id="mission-about">
    <!-- BEGIN SERVICE CONTAINER -->
    <section class="mission-about-container">
        <div class="mission" id="mission">
            <div class="container">
                <div class="col-md-4">
                    <h3 class="title-mission"><img src="<?php echo base_url('public/theme/images/about/icon-title.png') ?>" class="icon-title" alt=""/><span>><?php echo $this->lang->line('tamnhin'); ?></span></h3>
                    <div class="ss1">
                        <div class="divider"><img src="<?php echo base_url('public/theme/images/about/timeline-divider.png') ?>" alt=""></div>
                        <p><?php echo $this->lang->line('tamnhinvechungtoi'); ?></p>
                    </div>
                    <h3 class="title-vision"><img src="<?php echo base_url('public/theme/images/about/icon-title.png') ?>" class="icon-title" alt=""/><span><?php echo $this->lang->line('sumenh'); ?></span></h3>
                    <div class="ss2">
                        <?php foreach($missions as $mission) { ?>
                        <div class="divider"><img src="<?php echo base_url('public/theme/images/about/timeline-divider.png') ?>" alt=""></div>
                        <p><span class="bold-us"><?php echo $lang == 'vi' ? mis_name($mission->mis_title, 1) : mis_name($mission->mis_title_en, 1) ?> <span><?= $lang == 'vi' ? mis_name($mission->mis_title, 2) : mis_name($mission->mis_title_en, 2) ?></span></p>
                        <p><p><?php echo $lang == 'vi' ? $mission->mis_summary : $mission->mis_summary_en ?></p></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

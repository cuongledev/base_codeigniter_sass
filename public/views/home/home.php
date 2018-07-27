<!-- Banner -->
<div class="section">
    <section id="banner">
        <div class="patteren"></div>
        <div class="container fadeInRightBig" data-delay="500">
            <div class="center flash animated">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner banner-detail ">
                        <div class="item active ">
                            <p class="creative text-left">VNPT EPAY</p>
                            <p class="small-text text-left"><?php echo $this->lang->line('bietdoitoasang'); ?></p>
                            <p> <a href="<?php echo base_url('ve-chung-toi') ?>" class="btn btnWhite"><?php echo $this->lang->line('timhieuthem'); ?></a></p>
                            <!--                        <div class="item">
                                                        <p class="creative text-left">VNPT EPAY</p>
                                                        <p class="small-text text-left">BIỆT ĐỘI TỎA SÁNG</p>
                                                        <p> <a href="" class="btn btnWhite">TÌM HIỂU THÊM</a></p>
                                                    </div>
                                                    <div class="item">
                                                        <p class="creative text-left">VNPT EPAY</p>
                                                        <p class="small-text text-left">BIỆT ĐỘI TỎA SÁNG</p>
                                                        <p> <a href="" class="btn btnWhite">TÌM HIỂU THÊM</a></p>
                                                    </div>
                                                    <div class="item">
                                                        <p class="creative text-left">VNPT EPAY</p>
                                                        <p class="small-text text-left">BIỆT ĐỘI TỎA SÁNG</p>
                                                        <p> <a href="" class="btn btnWhite">TÌM HIỂU THÊM</a></p>
                                                    </div>-->
                        </div>
                    </div>
                </div>
                <a href="#scroll" class="scroll "><span id="scroll"></span></a>

            </div>
    </section>
    <br class="clear">
</div>
<!-- Banner End -->

<!-- About Us -->
<div class="section s1" id="about-us">
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="title animate fadeIn">
                        <h3 class="light text-center"><?php echo $this->lang->line('vechungtoi'); ?></h3>
                        <h3 class="light-title-bottom text-center">VNPT EPAY</h3>
                        <div class="box-title text-center">
                            <hr class="hr-title-bottom"/>
                        </div>
                        <div class="description text-center"><?php echo $this->lang->line('gioithieuvevnptep'); ?></div>
                    </div>
                </div>
                <div class="col-md-12 ">
                    <div class="title animate fadeIn">
                        <h3 class="light text-center color-yellow"><?php echo $this->lang->line('tamnhin'); ?></h3>
                        <div class="description text-center"><?php echo $this->lang->line('gioithieutamnhin'); ?></div>
                    </div>
                </div>
                <div class="features">
                    <div class="col-md-12 ">
                        <div class="title animate fadeIn">
                            <h3 class="light text-center color-yellow"><?php echo $this->lang->line('sumenh'); ?></h3>
                        </div>
                    </div>
                    <?php
                    $data_delay = 0;
                    if (!empty($missions)){
						foreach ($missions as $mission) {
							$data_delay = $data_delay + 500;
							?>
							<div class="col-md-3 animate fadeIn" data-delay="<?php echo $data_delay; ?>"><img src="<?php echo '../' . $mission->mis_image ?>" alt=""></i>
								<h4 class="text-center text-uppercase"><?php echo $lang == 'vi' ? mis_name($mission->mis_title, 1) : mis_name($mission->mis_title_en, 1) ?> <span class="color-carrot"><?= $lang == 'vi' ? mis_name($mission->mis_title, 2) : mis_name($mission->mis_title_en, 2) ?></span></h4>
								<p><?php echo $lang == 'vi' ? $mission->mis_summary : $mission->mis_summary_en ?></p>
							</div>
							<?php
						}
					}
                    ?>
                </div>
            </div>
        </div>

    </section>
    <!-- BEGIN -->
</div>
<!-- About Us End -->
<div class="section s2" id="service-us">
    <!-- BEGIN SERVICE CONTAINER -->
    <section class="service-container">
        <div class="service" id="service">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <!-- BEGIN HEADING -->
                    <div class="title animate fadeIn">
                        <h3 class="light text-center"><?php echo $this->lang->line('dichvu'); ?></h3>
                        <h3 class="light-title-bottom text-center">VNPT EPAY</h3>
                        <div class="box-title text-center">
                            <hr class="hr-title-bottom"/>
                        </div>
                    </div>
                    <!-- END HEADING -->
                    <div class="row">
                        <div class="col-md-6 animate fadeInLeftBig" data-delay="100">
                            <!-- BEGIN TEAM -->
                            <div class="team-sec team-sec1">
                                <div class="detail-left">
                                    <h4 class="service-title"><img src="<?php echo base_url('public/theme/images/thanhtoandientu.png') ?>" alt=""><?php echo $this->lang->line('thanhtoandientu'); ?></h4>
                                    <div class="service-des">
                                        <p><?php echo $this->lang->line('gioithieuthanhtoandientu'); ?></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                        <!-- END TEAM -->

                        <div class="col-md-6 animate fadeInRightBig" data-delay="100">
                            <!-- BEGIN TEAM -->
                            <div class="team-sec team2">
                                <div class="detail-left">
                                    <h4 class="service-title"><img src="<?php echo base_url('public/theme/images/vidientu.png') ?>" alt=""> <?php echo $this->lang->line('vidientu'); ?></h4>
                                    <div class="service-des">
                                        <p><?php echo $this->lang->line('gioithieuvidientu'); ?></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>



                        </div>

                        <div class="col-md-6 animate fadeInLeftBig" data-delay="300">
                            <!-- BEGIN TEAM -->
                            <div class="team-sec team-sec2  team-sec1">
                                <div class="detail-left">
                                    <h4 class="service-title"><img src="<?php echo base_url('public/theme/images/topup.png') ?>" alt=""><?php echo $this->lang->line('topup'); ?></h4>
                                    <div class="service-des">
                                        <p><?php echo $this->lang->line('gioithieutopup'); ?></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="col-md-6 animate fadeInRightBig" data-delay="300">
                            <!-- BEGIN TEAM -->
                            <div class="team-sec team-sec2 team2">
                                <div class="detail-left">
                                    <h4 class="service-title"><img src="<?php echo base_url('public/theme/images/shipantoan.png') ?>" alt=""> <?php echo $this->lang->line('shipantoan'); ?></h4>
                                    <div class="service-des">
                                        <p><?php echo $this->lang->line('gioithieushipantoan'); ?></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TEAM CONTAINER -->
    <section class="customer" id="customer">
        <div class="container">
            <div class="col-md-12">
                <!-- BEGIN HEADING -->
                <div class="title animate fadeIn">
                    <h3 class="light text-center"><?php echo $this->lang->line('khachhang'); ?></h3>
                    <h3 class="light-title-bottom text-center">VNPT EPAY</h3>
                </div>
                <!-- END HEADING -->
                <div class="col-md-12 customer-list-item">
                    <div class="owl-carousel-customer owl-theme list-customer" data-dots="false" data-loop="true" data-nav="false" data-margin="10" data-autoplayTimeout="1000" data-autoplayHoverPause="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                        <?php
						if (!empty($partners)){
							foreach($partners as $partner) {
								?>
								<div class="item"><img src="<?php echo base_url().'image_tools/timthumb.php?src='.base_url().$partner->par_image.'&h=100&w=200&zc=2'; ?>" alt=""></i></div>
								<?php
							}
						} ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="hr-linear-bottom"></div>
    </section>
    <!--END CUSTOMER-->

    <section class="news" id="news">
        <div class="container">
            <div class="col-md-10 col-lg-offset-1">
                <!-- BEGIN HEADING -->
                <div class="title animate fadeIn">
                    <h3 class="light text-center"><?php echo $this->lang->line('tintuc'); ?></h3>
                    <h3 class="light-title-bottom text-center">VNPT EPAY</h3>
                    <div class="box-title text-center">
                        <hr class="hr-title-bottom"/>
                    </div>
                </div>
                <!-- END HEADING -->

                <div id="carousel-news" class=carousel-news-slide">
                    <!-- Indicators -->
                    <div class="owl-carousel-news list-news" data-dots="false" data-loop="true" data-nav="true" data-drag="false" data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                        <?php
						if (!empty($posts)){
							foreach ($posts as $post) { ?>
								<div class="item">
									<div class="animate fadeInLeftBig animated" data-delay="500">
										<div class="news-block">
											<img src="<?php echo base_url().'image_tools/timthumb.php?src='.$post->pos_image.'&h=255&w=488&zc=1'; ?>" alt="">
											<a href="<?php echo base_url('chi-tiet/'.$post->pos_id.'-'.$post->pos_alias) ?>" class="title-news"><?php echo $lang == 'vi' ? $post->pos_title : $post->pos_title_en ?></a>
										</div>
										<div class="description-news">
											<p><?php echo $lang == 'vi' ? $post->pos_detail : $post->pos_detail_en ?></p>
										</div>
									</div>
								</div>
							<?php }
						}
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

<div class="section s3">

    <section class="portfolio no-padding-bottom" id="portfolio">
        <div class="container">
            <div class="title animate fadeIn">
                <h3 class="light text-center"><?php echo $this->lang->line('hoatdong'); ?></h3>
                <h3 class="light-title-bottom text-center">VNPT EPAY</h3>
                <div class="box-title text-center">
                    <hr class="hr-title-bottom"/>
                </div>
            </div>
        </div>
        <div id="portfolio-items-wrap">



			<?php
			$i=0;
			foreach($cultures as $culture) {
				$i++;
				if($i <= 8 ){
					?>

					<div class="portfolio-item one-third column photos">
						<div class="freshdesignweb">
							<div class="image_grid portfolio_4col">
								<ul id="list" class="portfolio_list da-thumbs">
									<li>
										<div class="slideUp"><img src="<?php echo base_url().$culture->cul_image; ?>" alt=""></div>
										<article class="da-animate da-slideFromRight" style="display: block;"> <a class="fancybox photo-icon" href="#" data-fancybox-group="gallery" title=""> <i class="icon-photo"></i>
												<h5><?php echo $this->lang->line('hoatdong') . ' EPAY'; ?></h5>
												<span><?php echo $this->lang->line('xemthem'); ?></span> </a></article>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<?php
				}
			} ?>



            
        </div>
    </section>
</div>


<!-- REQUIREMENT -->
<div class="section s4" id="carrerr-us">
    <div class="carrerr-left"></div>
    <div class="carrerr-right"></div>
    <section class="carrerr" id="carrerr">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="title animate fadeIn">
                        <h3 class="light text-center"><?php echo $this->lang->line('tuyendung'); ?></h3>
                        <h3 class="light-title-bottom text-center">VNPT EPAY</h3>
                        <div class="box-title text-center">
                            <hr class="hr-title-bottom"/>
                        </div>
                    </div>
                </div>
                <div class="features">
                    <div class="col-md-6 animate fadeIn" data-delay="500">
                        <img src="<?php echo base_url() . 'public/theme/images/carrerr1.jpg' ?>" alt="" class="carrerr-img">
                    </div>
                    <div class="col-md-6 animate fadeIn" data-delay="1000">
                        <h4 class="text-center"><?php echo $this->lang->line('tieudetuyendung'); ?></h4>
                        <div class="desciption-carrerr">
                            <p>
                                <?php echo $this->lang->line('gioithieutuyendung'); ?>
                            </p>
                        </div>
                        <div class="apply text-center">
                            <h3 class="light "><?php echo $this->lang->line('ungtuyenngay'); ?></h3>
                            <a href="<?php echo base_url('tuyen-dung') ?>" class="apply-btn">
                                <img src="<?php echo base_url() . 'public/theme/images/icon-apply.png' ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Modal -->
		<!--<div class="modal fade" id="myModalApply" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<!--<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
						<p>Some text in the modal.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>-->

    </section>
    <!-- BEGIN -->
</div>
<!-- REQUIREMENT End -->


<!-- MAP -->
<div class="section s5" id="map-us">
    <section class="map" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3355720987756!2d105.82147411493249!3d21.019254836003533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab79763e16e7%3A0xeb827fe0d9756e3f!2zQ8O0bmcgVHkgVGhhbmggVG_DoW4gxJBp4buHbiBU4butIFZOUFQ!5e0!3m2!1sen!2s!4v1529658436343" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="hr-linear-bottom"></div>
    </section>
    <!-- BEGIN -->
</div>
<!-- REQUIREMENT End -->

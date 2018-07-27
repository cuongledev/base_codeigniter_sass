<!-- Header -->
<div class="menu-bar">

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>"><img class="logo" src="<?php echo base_url('public/theme/images/logo.png') ?>" alt=""></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <?php
                $uri_active = $this->uri->segment(1);
                ?>
                <ul class="nav navbar-nav navbar-nav-custom navbar-right">
                    <li <?php echo (isset($uri_active) && $uri_active == 've-chung-toi') ? 'class="active"' : ''; ?>><a id="sTop" class="subNavBtn " href="<?php echo base_url('ve-chung-toi') ?>"><?php echo $this->lang->line('vechungtoi'); ?></a> </li>
                    <li <?php echo (isset($uri_active) && $uri_active == 'dich-vu') ? 'class="active"' : ''; ?>><a id="s1"  href="<?php echo base_url('dich-vu') ?>"><?php echo $this->lang->line('dichvu'); ?></a></li>
                    <li <?php echo (isset($uri_active) && $uri_active == 'tin-tuc') ? 'class="active"' : ''; ?>><a id="s2"  href="<?php echo base_url('tin-tuc') ?>"><?php echo $this->lang->line('tintuc'); ?></a></li>
                    <li <?php echo (isset($uri_active) && $uri_active == 'hoat-dong') ? 'class="active"' : ''; ?>><a id="s3"  href="<?php echo base_url('hoat-dong') ?>"><?php echo $this->lang->line('hoatdong'); ?></a></li>
                    <li <?php echo (isset($uri_active) && $uri_active == 'khach-hang') ? 'class="active"' : ''; ?>><a id="s4"  href="<?php echo base_url('khach-hang') ?>"><?php echo $this->lang->line('khachhang'); ?></a></li>
                    <li <?php echo (isset($uri_active) && $uri_active == 'tuyen-dung') ? 'class="active"' : ''; ?>><a id="s5"  href="<?php echo base_url('tuyen-dung') ?>"><?php echo $this->lang->line('tuyendung'); ?></a></li>
                    <!--<li class="search-header">
                        <form action="">
                            <div class="form-group search-box-header">
                                <i class="fa fa-search magnify"></i>
                                <input type="text" class="form-control input-search-header" name="search" placeholder="<?php echo $this->lang->line('timkiem'); ?>" autocomplete="off"/>
                            </div>

                        </form>

                    </li>-->
                </ul>
				<div class="language ">
					<div class="dropdown">
						<a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">
							<?php
							if (get_cookie('lang')=='en'){ ?>
								<img alt="English" src="<?php echo base_url('public/theme/images/icon_en.jpg') ?>" class="img-language"> ENGLISH
								<?php
							}else{ ?>
								<img alt="Vietnamese" src="<?php echo base_url('public/theme/images/icon_vi.jpg') ?>" class="img-language"> TIẾNG VIỆT
								<?php
							}
							?>
						</a>
						<ul class="dropdown-menu" role="menu" data-current-url="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
							<li><a href="javascript:void(0)" data-language="en" data-href="<?php echo base_url(); ?>" class="flag_language"><img alt="language" src="<?php echo base_url('public/theme/images/icon_en.jpg') ?>"> ENGLISH</a></li>
							<li><a href="javascript:void(0)" data-language="vi" data-href="<?php echo base_url(); ?>" class="flag_language"><img alt="language" src="<?php echo base_url('public/theme/images/icon_vi.jpg') ?>"> TIẾNG VIỆT</a></li>
						</ul>
					</div>
				</div>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</div>
<!-- Header End -->

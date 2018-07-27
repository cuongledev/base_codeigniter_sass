<!-- FOOTER -->
<div class="section" id="footer">
    <section class="footer">
        <div class="container">
            <div class="col-md-6 footer-left">
                <a href="<?php echo base_url(); ?>" class="logo-footer">
                    <img src="<?php echo base_url('public/theme/images/logo.png'); ?>" alt="">
                    <?php echo $this->lang->line('tencongty'); ?>
                </a>
                <div class="footer-descript">
                    <p><?php echo $this->lang->line('trusohanoi'); ?></p>
                    <p><?php echo $this->lang->line('dienthoai'); ?> : + 844-39335133 | Fax: + 844-39335166.</p>
                    <p><?php echo $this->lang->line('chinhanhtaitphcm'); ?></p>
                    <p><?php echo $this->lang->line('dienthoai'); ?>: (+84) 283.997.6677 | Fax: + 848-38443786.</p>
                </div>
                <div class="footer-social">
                    <p>Follow Us: <a href=""><i class="fab fa-facebook-f"></i></a><a href=""><i class="fab fa-twitter"></i></a><a href=""><i class="fab fa-instagram"></i></a><a href=""><i class="fab fa-pinterest-p"></i></a><a href=""><i class="fab fa-google-plus-g"></i></a><a href=""><i class="fab fa-youtube"></i></a><a href=""><i class="fab fa-dribbble"></i></a><a href=""><i class="fab fa-tumblr"></i></a></p>
                </div>
            </div>
            <div class="col-md-3 footer-center">
                <h4><?php echo $this->lang->line('dichvu'); ?></h4>
                <a href="<?php echo base_url('dich-vu') ?>"><img src="<?php echo base_url('public/theme/images/thanhtoandientu.png') ?>"/> <?php echo $this->lang->line('dichvuthanhtoan'); ?> </a>
                <a href="<?php echo base_url('dich-vu') ?>"><img src="<?php echo base_url('public/theme/images/topup.png') ?>"/> <?php echo $this->lang->line('dichvutopup'); ?></a>
                <a href="<?php echo base_url('dich-vu') ?>"><img src="<?php echo base_url('public/theme/images/vidientu.png') ?>"/> <?php echo $this->lang->line('dichvuvidientu'); ?></a>
                <a href="<?php echo base_url('dich-vu') ?>"><img src="<?php echo base_url('public/theme/images/shipantoan.png') ?>"/> <?php echo $this->lang->line('dichvushipantoan'); ?> </a>
            </div>
            <div class="col-md-3 footer-right">
                <h4><?php echo $this->lang->line('vechungtoi'); ?></h4>
                <iframe src="https://www.youtube.com/embed/gfjo9KoH0pE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-- BEGIN -->
</div>
<!-- FOOTER End -->
<!-- BEGIN GO TO TOP -->
<a href="#." class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
<!-- END GO TO TOP -->

</div><!--end of body wrapper-->

<?php echo isset($_scripts) ? $_scripts : ''; ?>

<div id="page-loading" class="hidden">
    <div class="over-everything"></div>
    <div class="sk-spinner sk-spinner-three-bounce content-loading">
        <div class="sk-bounce1"></div>
        <div class="sk-bounce2"></div>
        <div class="sk-bounce3"></div>
    </div>
</div>
</body>
</html>

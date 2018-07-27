<!-- Banner -->
<div class="section">
    <section id="banner">
        <div class="patteren"></div>
        <div class="container fadeInRightBig" data-delay="500">
            <div class="center flash animated">
                <h2 class="title-service text-uppercase"><?php echo $this->lang->line('khachhang'); ?></h2>
            </div>

        </div>
    </section>
</div>
<!-- Banner End -->
<div class="section s1" id="customer">
    <!-- BEGIN SERVICE CONTAINER -->
    <section class="customer-container">
        <div class="customer-list" id="customer-list">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <!-- BEGIN CUSTOMER CONTENT -->
                        <div class="customer-content">
                            <div class="row">
                                <div class="list">
                                    <div class="col-md-12">
                                        <div class="table-responsive list-customers">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <?php
                                                    $i = 0;
                                                    foreach ($partners as $key => $partner) {
                                                        $i++;
                                                        ?>  
                                                        <?php if($i%5==1){?>
                                                        <tr>
                                                            <?}?>
                                                            <td><img src="<?php echo get_image_size($partner->par_image, 'small_') ?>" alt=""></i></td>
                                                            <?php if($i%5==0){?>
                                                        </tr>
                                                        <?}?>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- END CUSTOMER CONTENT -->



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TEAM CONTAINER -->

</div>

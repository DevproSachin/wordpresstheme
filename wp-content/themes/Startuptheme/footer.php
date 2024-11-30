<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-9">
                <div class="mb-5">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-6 col-xl-5">
                            <div class="footer-item">
                                <?php dynamic_sidebar('footer1');?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item">
                                <?php dynamic_sidebar('footer2');?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4">
                            <div class="footer-item">
                                <?php dynamic_sidebar('footer3');?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-5" style="border-top: 1px solid rgba(255, 255, 255, 0.08);">
                    <div class="row g-0">
                        <div class="col-12">
                            <div class="row g-4">
                                <?php dynamic_sidebar('footer5');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <?php dynamic_sidebar('footer4');?>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <?php dynamic_sidebar('copyright');?>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/wow/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/easing/easing.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/counterup/counterup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/lightbox/js/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>


<!-- Template Javascript -->
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>
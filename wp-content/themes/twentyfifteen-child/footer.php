<footer>
<div class="footer-top">
<div class="container">
<div class="row">

<div class="col-xs-12 col-sm-3">
<div class="footer-box">
<div class="">
<div class="foot-heading"><p><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo-foot.png" alt=""></p></div>
<div class="foot-content">
<p><?php echo get_field('value',59,false); ?></p>
<p><a href="tel:<?php echo get_field('value',65,false); ?>">+91 <?php echo get_field('value',65,false); ?></a><a href="tel:<?php echo get_field('value',64,false); ?>"><?php echo get_field('value',64,false); ?></a></p>
<p><a href="mailto:<?php echo get_field('value',67,false); ?>"><?php echo get_field('value',67,false); ?></a><a href="mailto:<?php echo get_field('value',68,false); ?>"><?php echo get_field('value',68,false); ?></a></p>
</div>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-3">
<div class="footer-box">
<div class="foot-heading"><p>Usefull Links</p></div>
<div class="foot-link">
<a href="<?php echo site_url(); ?>">Home</a>
<a href="<?php echo get_permalink(2); ?>"><?php $page = get_post(2) ; echo $page->post_title; ?></a>
<a href="<?php echo get_permalink(5); ?>"><?php $page = get_post(5) ; echo $page->post_title; ?></a>
<a href="<?php echo get_permalink(7); ?>"><?php $page = get_post(7) ; echo $page->post_title; ?></a>
<a href="<?php echo get_permalink(51); ?>"><?php $page = get_post(51) ; echo $page->post_title; ?></a>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-3">
<div class="footer-box">
<div class="foot-heading"><p>Connect with us</p></div>
<div class="map-container">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14007.955305356394!2d77.07217916732147!3d28.630096982418785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04bf74e6f80d%3A0xcefdcc3162f14df4!2sJaina+Tower%2C+Chatrapati+Shivaji+Marg%2C+Janakpuri+District+Center%2C+Janakpuri%2C+Delhi%2C+110058%2C+India!5e0!3m2!1sen!2s!4v1475316797930" width="100%" height="100" frameborder="0" allowfullscreen></iframe>
</div>
<div class="foot-social">
<a href="<?php echo get_field('value',61,false); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="<?php echo get_field('value',63,false); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="<?php echo get_field('value',62,false); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
<a href="<?php echo get_field('value',60,false); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
</div>

</div>
</div>

<div class="col-xs-12 col-sm-3">
<div class="footer-box">
<?php echo do_shortcode('[facebook-page href="https://facebook.com/facebook" width="250" height="250" tabs="timeline, events, messages" show_cta="false" small_header="true" align="left" hide_cover="true" show_facepile="true"]'); ?>
</div>
</div>

</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-6">
© 2016 Aarohan Consultants Pvt. ltd. All Rights Reserved.
</div>
<div class="col-xs-12 col-sm-6">
<div class="powerd-by">Powered by : <a href="http://unicodesolutions.com">Unicode Solutions</a></div>
</div>
</div>
</div>
</div>
<?php wp_footer();?>
</footer>

<a href="#" id="back-to-top" title="Back to top" class="show"><i class="fa fa-chevron-up"></i></a>

<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.placeholder.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.counterup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/waypoints.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/jCarrotCell.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/readmore.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.mixitup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/custom.js"></script>
</body>
</html>
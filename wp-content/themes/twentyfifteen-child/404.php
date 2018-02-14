<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div style="height:100px;">
</div>
<section class="bredcrumb-section">
<div class="container">
<div class="bredcrumb-heading"><?php echo get_the_title(); ?></div>
<div class="bredcrumb-live">

</div>
</div>
</section >

<div class="container" style="text-align:center ;color:#338ad9;">
<h1 ><div class="error-icon">4<i class="icon-traffic-cone">0</i>4</div></h1>
<div class="error-heading"><h1>Oops! That page can’t be found.</h1></div>
<div class="error-small-heading"><h4>The page you are looking for was moved, removed, renamed or might never existed.</h4></div>
<div style="height:25px;">
</div>
<div class="button-center">
<a class="btn btn-service" href="<?php echo site_url(); ?>">Go Home</a>
</div>
</div>
</div>
</div>
</section>
<div style="height:50px;">
</div>
<?php get_footer(); ?>

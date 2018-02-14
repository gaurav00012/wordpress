<?php
/**
 * The template for displaying pages
 * Template Name: services Template
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<banner class="breadcrumb-section">
<h1>Services</h1>
</banner>



<section class="client-section">
<div class="container">
<div class="theme-heading">Our Services<span></span></div>
<div class="row">
<div class="philosply-box">
<div class="col-xs-12 col-sm-4">
<div class="philosphy-heading"><i class="fa fa-home"></i><?php echo get_field('title',82,false); ?></div>
<div class="philosphy-content" style="padding:10px;">At Aarohan Consultants we all share congenital thirst for knowledge. For us the rapid developments in design technology.</div>
</div>

<div class="col-xs-12 col-sm-4">
<div class="philosphy-heading"><i class="fa fa-paint-brush"></i><?php echo get_field('title',97,false); ?></div>
<div class="philosphy-content"  style="padding:10px;">Creativity is at the heart of everything we do. Yet it is not just about producing compelling imagery and dynamic graphics.</div>
</div>

<div class="col-xs-12 col-sm-4">
<div class="philosphy-heading"><i class="fa fa-video-camera"></i><?php echo get_field('title',98,false); ?></div>
<div class="philosphy-content"  style="padding:10px;">Good ideas are not enough. We also know how important it is to deliver on our promises. That's why we not only.</div>
</div>


</div>
</div>
</div>
</section>



<?php get_footer(); ?>

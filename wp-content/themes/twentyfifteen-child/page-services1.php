<?php
/**
 * The template for displaying pages
 * Template Name: Services1 Template
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
<h1><?php $page = get_post(82) ; echo $page->post_title; ?></h1>
</banner>

<section class="service-section">
<div class="col-sm-12 col-md-6">
<div class="image-service">
<img src="<?php $data = get_field('image',82); echo $data['url']; ?>" alt="">
</div>
</div>
<div class="col-sm-12 col-md-6">
<div class="about-cont-box">
<div class="about-page-cont">
<p>
<?php $page = get_post(82); echo $page->post_content; ?>
</p>
</div>
</div>
</div>
</section>

<section class="mission-section">
<div class="container">
<div class="theme-heading"><?php $page = get_post(82) ; echo $page->post_title; ?> Visualization <span></span></div>
<div class="philosply-box">
<div class="row">
<?php  
            $args = array('post_type' => 'sub-services',
                          'orderby' => 'date',
                          'order' => 'ASC',
                          'meta_key' => 'main_service',
                          'meta_value' => '3D Archituctural visualization'
                          
                             
                          );
            $loop = new WP_Query( $args );
    while ( $loop->have_posts() )  : $loop->the_post();
?>

<div class="col-xs-12 col-sm-3">
<div class="philosphy-heading"><?php echo get_field( "title1", get_the_ID() ); ?></div>
<div class="philosphy-content"><?php echo wp_trim_words( get_field( "content1", get_the_ID() ), 100 ); ?></div>
</div>

<?php endwhile;?> 

</div>
</div>
</div>
</section>

<section class="client-section">
<div class="container">
<div class="theme-heading">Other Services<span></span></div>
<div class="row">
<div class="col-xs-12 col-sm-6">
<div class="service-box">
<div class="service-heading"> <i class="fa fa-paint-brush"></i> Interior Designing</div>
<div class="center-btn">
<a href="<?php echo get_permalink(120); ?>"><button class="btn btn-service">View More </button></a></div>
</div>
</div>
<div class="col-xs-12 col-sm-6">
<div class="service-box">
<div class="service-heading"> <i class="fa fa-video-camera"></i> Video Production</div>
<div class="center-btn">
<a href="<?php echo get_permalink(118); ?>"><button class="btn btn-service">View More </button></a></div>
</div>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>

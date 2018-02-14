<?php
/**
 * The template for displaying pages
 * Template Name: About us Template
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
<h1><?php $ID = 2; $page = get_post($ID);echo $page->post_title; ?></h1>
</banner>

<section class="service-section">
<div class="col-sm-12">
<div class="about-cont-box">
<div class="theme-heading">About Aarohan<span></span></div>
<div class="about-page-cont">
<p><?php $ID = 2; $page = get_post($ID);echo $page->post_content; ?></p>
</div>
</div>
</div>
</section>


<section class="my-client-section">
<div class="container">
<div class="theme-heading">Methodology<span></span></div>
<div class="row">
<div class="about-cont col-sm-10 col-center">
<p><?php $ID =99; $page = get_post($ID);echo $page->post_content; ?></p>
</div>
</div>
<div class="row">
<div class="philosply-box">
<?php  
      $args = array('post_type' => 'philosophy','post_status' => array('publish','draft'),'order' => 'ASC', 'orderby' => 'ID');
            $loop = new WP_Query( $args );
    while ( $loop->have_posts() )  : $loop->the_post();
?>
<div class="col-xs-12 col-sm-4">
<div class="philosphy-heading"><?php $page = get_post(get_the_ID());echo $page->post_title; ?></div>
<div class="philosphy-content"><?php echo get_field( "content", get_the_ID() ); ?></div>
</div>
<?php endwhile; ?>
</div>
</div>
</div>
</section>

<section class="testi-section" hidden>
  <div class="contaqiner">
    <div class="theme-heading">Clients Speak <span></span></div>
    <div class="testi-scroll">
      <div id="testi" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators testi-indicators">
  <?php  
            $args = array('post_type' => 'testimonial',
                           
                          );
            $loop = new WP_Query( $args ); $i=0;
    while ( $loop->have_posts() )  : $loop->the_post();
?>
    <li data-target="#testi" data-slide-to="<?php echo $i; ?>" ></li>
    

<?php $i++ ; endwhile;?> 
  
  </ol>

  <!-- Wrapper for slides -->

  <div class="carousel-inner" role="listbox">
    <?php  
            $args = array('post_type' => 'testimonial',
                           'post_status' => array('publish','draft')
                          );
            $loop = new WP_Query( $args ); $i=0;
    while ( $loop->have_posts() )  : $loop->the_post();
?>
    <div class="item <?php if(!$i++)echo "active";?>">
      <div class="testi-cont"><?php  echo  get_field( "full_description", get_the_ID() ); ?></div>
      <div class="testi-testi">
     <div class="testi-name"><?php  echo  get_field( "title", get_the_ID() ); ?>, <span><?php  echo  get_field( "short_description", get_the_ID() ); ?></span></div>
     </div>
    </div>
<?php  endwhile;?> 
 
  </div>
</div>
    </div>
  </div>
</section>
<section class="bg-orange">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-9">
        <div class="about-cont">Looking to hire ? Discuss your requirment. </div>
      </div>
      <div class="col-xs-12 col-sm-3"><a href="mailto:<?php echo get_field('value',67,false); ?>"><button class="btn btn-gray">Mail Us</button></a></div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

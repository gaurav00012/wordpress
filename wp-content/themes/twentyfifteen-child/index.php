<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<?php 
$corporate = 36;
$whychoose= 41;
$jobseeker= 39;

?>
<?php get_template_part( 'templates/homepage-banner', 'page' ); ?>
<section class="about-section">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-6">
<?php

$aboutID = 18;
$page = get_post($aboutID);

?>
<div class="theme-heading"><?php echo $page->post_title; ?><span></span></div>
<div class="about-cont"><?php echo $page->post_content; ?></div>
</div>
<div class="col-xs-12 col-sm-6">
<div class="theme-heading">Skills Tag<span></span></div>
<div class="skills-tag new-tag-home">
<?php $tags = get_tags(array('hide_empty' => false)); foreach($tags as $tag){?>
<span><?php echo $tag->name; ?></span>
<?php } ?>
</div>
</div>
</div>
</section>

<section class="service-section">
<div class="col-sm-12 col-md-6">
<div class="image-service">

<?php $url = wp_get_attachment_url( get_post_thumbnail_id(36), 'thumbnail' ); ?>
<img src="<?php echo $url ?>">
</div>
</div>
<div class="col-sm-12 col-md-6">
<div class="service-content">
  <div id="service1">
  <div class="theme-heading"><?php echo get_post($corporate)->post_title; ?><span></span></div>
  <div class="ser-cont"><?php echo get_post($corporate)->post_content; ?></div>
  <div class="btn-cen"><a href="<?php echo get_permalink(126); ?>" style="color:#555;"><button class="btn btn-explore">Mail Us Your Requirment</button></a></div>
  </div>
</div>
</div>
</section>

<section class="service-section">
<div class="col-sm-12 col-md-6">
<div class="service-content">
  <div id="service1">
  <div class="theme-heading"><?php echo get_post($jobseeker)->post_title; ?><span></span></div>
  <div class="ser-cont"><?php echo get_post($jobseeker)->post_content; ?></div>
  <div class="btn-cen"><a href="<?php echo get_permalink(124); ?>" style="color:#555;"><button class="btn btn-explore">Apply Now</button></a></div>
  </div>
</div>
</div>
<div class="col-sm-12 col-md-6">
<div class="image-service">

<?php $url = wp_get_attachment_url( get_post_thumbnail_id(39), 'thumbnail' ); ?>
<img src="<?php echo $url ?>">
</div>
</div>
</section>

<section class="about-section">
<div class="container">
<div class="row">
<div class="col-sm-12 col-center">
<div class="theme-heading"><?php echo get_post($whychoose)->post_title; ?><span></span></div>
<div class="row">
<div class="col-xs-12 col-sm-3">
<div class="aarohan-cont">Aarohan, is one of India's leading search and selection company delivering permanent & contractual recruitment solutions to many organization.</div>
</div>
<div class="col-xs-12 col-sm-3">
<div class="aarohan-cont">Aarohan offers potential competitive advantage in the marketplace as it provides organisations with the ability to rapidly acquire the best people, reduce operational costs and risks, and gain access to consultancy expertise to develop their recruitment strategies.</div>
</div>
<div class="col-xs-12 col-sm-3">
<div class="aarohan-cont">Aarohan's approach combines a comprehensive transformation of the recruitment function of an organization with a collaborative approach to delivering the service to keep you in command. Core to the success of our service is our commitment to transfer skills and share best practices with our clients. Adopting a virtual recruitment office strategy though Aarohan translates into tangible and measurable benefits for our clients.</div>
</div>
<div class="col-xs-12 col-sm-3">
<div class="aarohan-cont">It would be our pleasure to be associated with you and dedicate our services in catering to manpower needs of your esteemed organization." Aarohan " would work towards building a long term relationship and meeting your exacting standards.</div>
</div>
</div>


<!--<div class="about-cont"><?php echo get_post($whychoose)->post_content; ?></div>-->
</div>
</div>
</div>
</section>

<section class="client-section">
<div class="container">
<div class="theme-heading">Our Clients <span></span></div>

<div class="carrotCell">			
<div class="carrotCellView">
<ol>
<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/client1.png" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/client2.png" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/client3.png" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/client4.png" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/client5.png" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/client6.png" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/client1.png" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/client2.png" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/client3.png" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/client4.png" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/client5.png" /></li>
<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/client6.png" /></li>
</ol>       
</div>			
<div class="prev pre"><i class="fa fa-angle-left"></i></div>
<div class="next nex"><i class="fa fa-angle-right"></i></div> 
</div>

<!--<div class="row">

 <?php  
            $args = array('post_type' => 'client',
                             'order' => 'ASC',
                             'orderby' => 'ID',
                            'post_status' => array('publish','draft')
                          );
            $loop = new WP_Query( $args ); $i=0;
    while ( $loop->have_posts() )  : $loop->the_post();
?>

      <?php  $data = get_field( "image", get_the_ID() );  ?>

<div class="col-xs-12 col-sm-3">
<div class="client-image"><img src="<?php echo $data['url'];?>" alt=""></div>
</div>  


 <?php endwhile;?> 


</div>-->
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



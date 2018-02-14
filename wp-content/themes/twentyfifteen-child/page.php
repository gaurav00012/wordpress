<?php
/**
 * The template for displaying pages
 *
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
<h1 style="text-transform:uppercase;"><?php the_title(); ?></h1>
</banner>
<section style="padding:20px;">
 <div class="theme-heading">OUR MISSION<span></span></div>
  <div class="about-cont">Our vision is to understand the need of our clients, perform search and research, evolve the right combination of tools, technology, develop impressive and effective communication solutions.</div>
   <div class="mission-image"><img src="<?php echo get_stylesheet_directory_uri();?>/images/mission.png" alt=""></div>
  </div>

 </section>
<?php get_footer(); ?>

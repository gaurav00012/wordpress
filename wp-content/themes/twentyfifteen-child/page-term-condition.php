<?php
/**
 * The template for displaying pages
 * Template Name: Term & Conditions Template
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
<h1>Terms & Conditions</h1>
</banner>


<section class="about-section">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="about-page-cont">
<?php $page = get_post(51) ; echo $page->post_content;?>
</div>
</div>
</div>
</div>
</section>



<?php get_footer(); ?>

<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<banner class="breadcrumb-section">
<h1>Blog Detail</h1>
</banner>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="center-section">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4">
<div class="featured-image"><img src="<?php echo get_stylesheet_directory_uri();?>/images/portfolio1.jpg" alt=""></div>
</div>
<div class="col-xs-12 col-sm-8">
<div class="featured-content">
<h2>What is Lorem Ipsum?</h2>
<time><i class="fa fa-clock-o"></i> September 3, 2015</time>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
</div>
</div>
</div>
</section>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>

		<section class="center-section">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4">
<div class="featured-image"><?php	twentyfifteen_post_thumbnail(); ?></div>
</div>
<div class="col-xs-12 col-sm-8">
<div class="featured-content">
<h2>What is Lorem Ipsum?</h2>
<time><i class="fa fa-clock-o"></i> September 3, 2015</time>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
</div>
</div>
</div>
</section>

			
		

		<?php endwhile;
		?>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	

				<?php if ( have_posts() ) : ?>
					<banner class="breadcrumb-section">
							<?php
								the_archive_title( '<h1>', '</h1>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
					</banner>

	<section class="center-section">
		<div class="container">
		  <div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9">
			  <div class="row">
			
			<?php
			
			while ( have_posts() ) : the_post(); 

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				//get_template_part( 'content', get_post_format() );  
				$ID = get_the_ID();
				?>
         		


				<div class="col-xs-12 col-sm-4">
				<div class="blog-box">
				
				<?php  $data = get_field( "image", get_the_ID() );  ?>
				
				<a style="text-decoration:none;" href="<?php echo get_permalink(get_the_ID()); ?>">
				<div class="blog-image" style="background-image:url(<?php echo $data['url'];?>);"></div>
				</a>
				<div class="blog-heading"><a style="text-decoration:none;" href="<?php echo get_permalink(get_the_ID()); ?>"><?php $ID = get_the_ID(); $page = get_post($ID);echo $page->post_title; ?></a></div>
				<div class="blog-date"><i class="fa fa-clock-o"></i><?php echo get_the_date(); ?></div>
				<div class="blog-cont">
				<?php  echo get_field( "short_description", get_the_ID() );  ?>
				<a href="<?php echo get_permalink(get_the_ID()); ?>">Read More</a>
				</div>
				</div>
				</div>


			
			<?php endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-3">
<div class="theme-left-heading">Recent Posts <span></span></div>
<div class="blog-ul">
<ul>
<?php
    $recent_posts = wp_get_recent_posts(array('post_type'=>'blogs'));
    foreach( $recent_posts as $recent ){
        echo '<li><a href="'.get_permalink(104).'?id=' . $recent['ID'] . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
    }
?>
</ul>
</div>

<div class="theme-left-heading">Categories <span></span></div>
<div class="blog-ul">
<ul>
<?php wp_get_object_terms( $object_ids, 'blog-category' ); ?>
<?php

	$args = array(
  				
  				'taxonomy' => 'blog-category',
  				'title_li' => '<h2 style="display:none;">' . __( 'Categories' ) . '</h2>'
);
	
    wp_list_categories($args);
   
?>

</ul>
</div>

</div>
</div>
</div>
</section>

<?php get_footer(); ?>

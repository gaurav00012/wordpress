<?php get_header(); ?>

	
<div id="three" class="wrapper align-center" >

				<div class="inner">
					
					<div class="">
					<?php if(have_posts()) : while(have_posts()) : the_post();?>
						<article <?php post_class();?> id="post-<?php the_ID();?>">
							<div class="image round">
								
							</div>
							<header>
							<h1><?php the_title();?></h1>
							</header>
							<p><?php the_content(); ?></p>
							<!-- <footer>
								<a href='' class="button">Read More</a>
							</footer> -->
						</article>
						<?php endwhile; ?>
<?php endif; ?>  
					</div>
				</div>
</div>
			   

<?php get_footer(); ?>

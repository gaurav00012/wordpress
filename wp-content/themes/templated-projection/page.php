<?php get_header(); ?>

	

        <?php if(have_posts()) : while(have_posts()) : the_post();?>
            <section id="banner" class="wrapper align-center" <?php post_class();?> id="post-<?php the_ID();?>">
            <div class="inner">
                <header><h1><?php the_title();?></h1></header>
                <?php the_content(); ?>
        </div>
</section>
<?php endwhile; ?>
<?php endif; ?>        
		

<?php get_footer(); ?>

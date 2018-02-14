<?php
/**
 * The template for displaying pages
 * Template Name: Jobs Search Template
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
<h1>Job Search</h1>
</banner>

<section class="center-section">
<section class="portfolio-section">
<div class="container">
<div class="row">

<div class="col-xs-12 col-sm-8">

              <?php  global $wp_query, $paged;
                      if( get_query_var('paged') ) {
                          $paged = get_query_var('paged');
                      }else if ( get_query_var('page') ) {
                          $paged = get_query_var('page');
                      }else{
                          $paged = 1;
                      }
                      $wp_query = null;
                      $args = array('post_type' => 'post',
                                    'post_status'=> array('publish','draft'),
                                    'posts_per_page' =>5,
                                    'orderby'=>'ID',
                                    'order'=>'DESC',
                                    'paged' => $paged
                                    );
                      $wp_query = new WP_Query();
                      $wp_query->query( $args );
           
                      while ($wp_query->have_posts()) : $wp_query->the_post();
              ?>
              <div class="box-content job-content">
              <div class="card">
                  <div class="height-fix-port">
                  <article>
                       <h3><?php the_title(); ?></h3>
                       <div class="hire-btn">
                          <a href="<?php echo get_permalink(124); ?>"  class="btn-hire" ><i class="fa fa-location-arrow"></i> Apply Now</a>
                       </div>
                       <?php the_content(); ?>
                       </article>
                  </div>
              </div>
              </div>
        <?php endwhile;
        echo '<div class="paginations">';
        echo '<span class="previous">';
         previous_posts_link('Previous');
        echo '</span>';
       echo  '<span class="next">';
         next_posts_link('Next');
       echo '</span>';
        echo '</div>';
          /* $big = 999999999; // need an unlikely integer
           $translated = __( 'Page', 'mytextdomain' ); // Supply translatable string
           echo paginate_links( array(
                                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                  'format' => '?paged=%#%',
                                  'current' => max( 1, get_query_var('paged') ),
                                  'total' => $wp_query->max_num_pages       
                                  ) );   */
              wp_reset_query();?>

</div>
<div class="col-xs-12 col-sm-4">
<div class="add-banner">
<a href="<?php echo get_permalink(124); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/images/add1.jpg" alt=""></a>
</div>
<div class="add-banner">
<a href="<?php echo get_permalink(126); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/images/add2.jpg" alt=""></a>
</div>
</div>

</div>
</div>
</section>
</section>

            
     
         

<?php get_footer(); ?>

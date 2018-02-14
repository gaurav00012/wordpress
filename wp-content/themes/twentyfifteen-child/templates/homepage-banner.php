<banner>

  <div id="Aarohan-banner" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
     <?php  $args = array('post_type' => 'main-slider', 'post_status' => array('publish','draft') );
            $loop = new WP_Query( $args ); $i=0;
    while ( $loop->have_posts() ) : $loop->the_post();?>
    <li data-target="#Aarohan-banner" data-slide-to="<?php echo $i; $i++?>" <?php if($i==1)echo 'class="active"'; ?> ></li>
    <?php endwhile;?>
  </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner my-carousel-inner" role="listbox">
    <?php  
            $args = array('post_type' => 'main-slider',
                             'order' => 'ASC',
                             'orderby' => 'meta_value',
                          'meta_key' => 'order',
                          'post_status' => array('publish','draft')
                          );
            $loop = new WP_Query( $args ); $i=0;
    while ( $loop->have_posts() ) : $loop->the_post();
?>
      <div class="item <?php if(!$i++)echo "active";?>"> 
      <?php  $data = get_field( "main-slider", get_the_ID() );  ?> 
      <img src="<?php echo $data['url'];?>" alt="Aarohan banner1">
        <div class="carousel-caption my-caption">
          <h2><?php  echo $data = get_field( "image-text2", get_the_ID() ); ?> </h2>
          <p><?php  echo $data = get_field( "image-text3", get_the_ID() );  ?> </p>
    
         <!-- <a class="btn btn-banner" href="<?php  echo $data = get_field( "image-link", get_the_ID()); ?>" target="_blank">Explore <i class="fa fa-long-arrow-right"></i></a>-->
        </div>
      </div>
      
     <?php endwhile;?> 
    </div>
    <!-- Controls -->
    <a class="left carousel-control my-control" href="#Aarohan-banner" role="button" data-slide="prev"> <span class="fa fa-angle-left glyphicon-chevron-left icon-left-open-big" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>

    <a class="right carousel-control my-control" href="#Aarohan-banner" role="button" data-slide="next"> <span class="fa fa-angle-right glyphicon-chevron-right icon-right-open-big" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
     </div>

</banner>
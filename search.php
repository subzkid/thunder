<?php get_header(); ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <h5>Search Results</h5>
        </div>
      </div>
  </div> 
   <br>
    <div class="container-fluid">
      <div class="row">
       
         <?php
          $args = array(
              'post_type' => array('post', 'portfolio'),
             'posts_per_page' => -1
          );
          $lastBlog = new WP_Query($args);
        
          if ( $lastBlog->have_posts() ) :
           while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

             <?php get_template_part('content', 'search'); ?>
             
          <?php endwhile;

          endif;
            wp_reset_postdata();
        ?>
        
      </div>
    </div>



<?php get_footer(); ?>

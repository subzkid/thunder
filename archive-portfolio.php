<?php
get_header(); ?>


<div class="recentWork">
    <div class="container-fluid">
      <div class="row marginTopTitle">
        <div class="col-xs-12">
          <h5>All Work</h5>
        </div>
      </div>
      <div class="row">
          <?php
        
        
          $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => -1
          );
        
          $lastBlog = new WP_Query($args);
        
          if( $lastBlog->have_posts() ): ?>
              
          <?php  while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
            
              <?php get_template_part('content-portfolio', get_post_format()); ?>
              
            <?php endwhile;
        
            endif;
        
            wp_reset_postdata();
        
          ?>
          </div>
    </div>
</div>

<?php
get_footer();
?>

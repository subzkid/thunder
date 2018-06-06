<?php get_header(); ?>

   
    <div class="container-fluid">
          <div class="row">
                <div class="col-xs-12">
                   
                    <?php
                        if ( have_posts() ) :
                             while ( have_posts() ) : the_post(); ?>
                                
                                 <article>
                                     
                                      <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
                                      
                                      <h3><?php the_title(); ?></h3>
                                      
                                      <p><?php the_content(); ?></p>
                                      
                                 </article>
                                 
                              <?php endwhile;
                        endif;
                    ?>
                    
                </div>
          </div>
    </div>


<?php get_footer(); ?>

<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12"> 
           
            <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>

                         <article class="post-single-page">

                              <h3><?php the_title(); ?></h3>
                              <?php 
                                  the_date('Y-m-d', '<span>Date: ', '</span>');
                                  the_post_thumbnail( 'single-post-thumbnail' ); 
                              ?>
                              <div class="wrapperTextPostSingle">
                                  <p><?php the_content(); ?></p>
                              </div>
                         </article>

                    <?php endwhile;

                endif;

                if (comments_open() ){ 

                    comments_template(); 
                } else {
                  echo '<h5>sorry, je kan geen reactie plaatsen</h5>';
                }
            ?>
            
        </div>
    </div>
</div>


<?php get_footer(); ?>

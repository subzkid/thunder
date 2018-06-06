                <article class="col-xs-6 col-md-3">
                 <div class="postWrapper">
                    <div class="portfolioOverlay">
                     <div class="portfolioAbsolute">
                      <h4><?php the_title(); ?></h4>
                              
                      <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                        echo '<a href="'.esc_url($featured_img_url).'" rel="lightbox">'; ?>
                        <span class="glyphicon glyphicon-search"></span>
                        <?php echo '</a>';
                      ?>
                     
                      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><span class="glyphicon glyphicon-list-alt"></span></a>
                    </div>
                   </div>
                     <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
                  
                  </div>          
                </article>
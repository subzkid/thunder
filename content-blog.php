           <article>
            <div class="postWrapper col-sm-4 col-xs-12">
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
              </a>
              <h3><?php the_title(); ?></h3>
              <div class="divider"></div>
              <?php the_excerpt(); ?>
            </div> 
          </article> 
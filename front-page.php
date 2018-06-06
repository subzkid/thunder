<?php 
  get_header();
?>


   
   
      <?php
        
        $args = array(
          'post_type' => 'slideshow',
          'posts_per_page' => 3
        );
        
        $lastBlog = new WP_Query($args);
        
          if ( $lastBlog->have_posts() ) : ?>
               <div id="carousel-hero" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner hero" role="listbox">

                    <?php $count = 0; 
                
                    while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

                      <section class="item <?php if($count == 0): echo 'active'; endif; ?>" >
                        <div class="container-fluid">
                            <h4 class="sliderTitle"><?php the_title(); ?></h4>
                            <?php the_content(); ?>
                        </div>
                        <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
                      </section>
             
                    <?php $count++; endwhile; ?>
                  </div>
              
                  <!-- Controls -->
                  <a class="left carouselButton" href="#carousel-hero" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carouselButton" href="#carousel-hero" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
      <?php   
          endif;
          wp_reset_postdata();
      ?>
      
  <!--  features -->       
          <?php
        
          $args = array(
            'post_type' => 'features',
            'posts_per_page' => 8
          );
        
          $lastBlog = new WP_Query($args);
        
          if( $lastBlog->have_posts() ): ?>
              <div class="features" id="what-we-do">
                <div class="container-fluid">
                  <div class="row">
              
                    <?php  while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                              
                      <?php get_template_part('content-features', get_post_format()); ?>
                                
                    <?php endwhile; ?>
                  </div>
                </div>
              </div> 
        
          <?php 
          endif;
          wp_reset_postdata();
        
          ?>
                  
  <!--  portfolio (recent work)  -->       
          <?php
        
          $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 8
          );
        
          $lastBlog = new WP_Query($args);
        
          if( $lastBlog->have_posts() ): ?>
              <div class="recentWork" id="portfolio">
                <div class="container-fluid">
                  <div class="row marginTopTitle">
                    <div class="col-xs-8">
                      <h5>Recent Work</h5>
                    </div>        
                    <div class="col-sm-3 pull-right text-right">
                        <a href="<?php echo get_post_type_archive_link( 'portfolio' ); ?>">Browse All</a>
                    </div>
                  </div>
                  <div class="row">
              
                    <?php  while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                              
                      <?php get_template_part('content-portfolio', get_post_format()); ?>
                                
                    <?php endwhile; ?>
                  </div>
                </div>
              </div> 
        
          <?php 
          endif;
          wp_reset_postdata();
        
          ?>
      
          <article class="page-content-wrapper" id="service">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <h7>Hear The Thunder</h7>
                  <p>Let me introduce you to a clean, simple, yet powerful <span>PREMIUM WORDPRESS THEME</span>, created specifically for you.</p>
                  <a href="#">get started</a>
                </div>
                <div class="col-xs-12 col-sm-5 col-sm-push-1">
                  <img src="<?php bloginfo('template_directory'); ?>/images/content.png" alt="d">
                </div>
              </div>
            </div>
          </article>
       


<!--  blog  -->
        <?php
        
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3
          );
        
          $lastBlog = new WP_Query($args);
        
          if ( $lastBlog->have_posts() ) : ?>

            <div class="allePosts" id="news">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12">
                    <h5>Latest News</h5>
                  </div>
                </div>
                <div class="row">
                
                <?php while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

                  <?php get_template_part('content-blog', get_post_format()); ?>
             
                <?php endwhile; ?>
                </div>
              </div>
            </div>
        <?php 
          endif;
          wp_reset_postdata();
        ?>
      
            
            
            
            
            
<!--  testamonials  -->
        <?php
        
          $args = array(
            'post_type' => 'testimonials',
            'posts_per_page' => 5
          );
        
          $lastBlog = new WP_Query($args);
        
          if ( $lastBlog->have_posts() ) : ?>

            <div class="testimonials" id="testimonials">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 testimonialsHeadings">
                    <h5>Testimonials From Our Clients</h5>
                   
                    <p>See what people are saying about our work</p>
                  </div>
                </div>
                <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">

                    <?php 
                    
                    $count = 0; 
                    $bullets = ''; 
                
                    while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

                      <div class="item <?php if($count == 0): echo 'active'; endif; ?>" >
                        <?php get_template_part('content-testimonials', get_post_format()); ?>
                      </div>
                     <?php $bullets .= '<li data-target="#carousel-testimonials" data-slide-to="'.$count.'" class="'; ?> 
                       
                     <?php if($count == 0): $bullets .= 'active'; endif; ?>
                       
                     <?php $bullets .= '"><img alt="" src="'. fbi_img_url() .'"></li>'; ?>
                     
                    <?php $count++; endwhile; ?>
                 <ol class="carousel-indicators">
                   <?php echo $bullets; ?>
                 </ol>
                  </div>
                </div>
               
              </div>
            </div>
            
            
         <?php 
          endif;
          wp_reset_postdata();
        ?>


  <!--  Our Clients (recent work)  -->       
          <?php
        
          $args = array(
            'post_type' => 'our-clients',
            'posts_per_page' => 10
          );
        
          $lastBlog = new WP_Query($args);
        
          if( $lastBlog->have_posts() ): ?>
              <div class="our-clients" id="clients">
                <div class="container-fluid">
                  <div class="row marginTopTitle">
                    <div class="col-xs-4 col-sm-2">
                      <h5>Our Clients</h5>
                    </div>  
                    <div class="col-xs-8 col-sm-10">
                      <div class="doubleDivider"></div>
                    </div>   
                  </div>
                  <div class="row">
                   
              
                    <?php  while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                              
                      <?php get_template_part('content-our-clients', get_post_format()); ?>
                                
                    <?php endwhile; ?>
                   
                  </div>
                </div>
              </div> 
        
          <?php 
          endif;
          wp_reset_postdata();
        
          ?>
          
          
         <?php 
          $args = array(
            'post_type' => 'product',
            'posts_per_page' => 3
          );
          $lastBlog = new WP_Query($args);
        
          if( $lastBlog->have_posts() ): ?>
            <div class="productsHome" id="products">
                <div class="container-fluid">
                 <div class="row">
                   <div class="col-xs-12">
                     <h5>Newest Products</h5>
                   </div>
                 </div>
                  <div class="row">
                    
                     <?php while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                
                       <?php get_template_part('content-product-home', get_post_format()); ?>
                       
                     <?php endwhile; ?>
                    
                </div>
              </div>
           </div>
          <?php endif; 
              wp_reset_postdata();
          ?>
          
       

<?php get_footer(); ?>

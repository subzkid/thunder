<?php /* Template Name: SidePages */ ?>


<?php get_header(); ?>
 
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12"> 
       <br><br><br><br>
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 

             the_content();

 
            // End of the loop.
        endwhile;
        ?>
       <br><br><br><br>
    </div>
  </div>
</div><!-- .content-area -->
 

<?php get_footer(); ?>
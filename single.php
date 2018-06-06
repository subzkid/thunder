
 <?php if( have_posts() ){ the_post(); rewind_posts(); } ?>
  <?php if('portfolio' == get_post_type()){ ?>
    <?php include(TEMPLATEPATH . '/single-portfolio.php'); ?>
  <?php } 
else { ?>
    <?php include(TEMPLATEPATH . '/single-posts.php'); ?>
  <?php } ?>
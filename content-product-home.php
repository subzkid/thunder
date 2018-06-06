<?php  global $woocommerce;
$currency = get_woocommerce_currency_symbol();
$price = get_post_meta( get_the_ID(), '_regular_price', true); ?>
     
  <div class="col-xs-6 col-sm-4">
     <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    <div class="productWrapper">
   
     
        <?php the_post_thumbnail('full'); ?>
     
      
      <h4><?php the_title(); ?></h4>
      
     
       <p class="product-price">
         <?php echo $currency; echo $price; ?> 
       </p>
       
    </div>
     </a>
  </div>
    <?php dynamic_sidebar('call-out'); ?>
    <footer>
      <div class="container-fluid">
         <div class="row">
  
                 <?php get_sidebar(); ?>
          
         </div>
         <div class="row">
           <div class="col-xs-12">
             <div class="divider"></div>
           </div>
         </div>         
         <div class="row">
           <div class="col-xs-12">
              <p class="copyright">COPYRIGHT 2013 - <a>THUNDER</a></p>
             <?php get_sidebar('social-media'); ?>
           </div>
         </div>
      </div> <!-- container(-fluid) -->
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
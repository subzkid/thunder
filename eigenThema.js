jQuery(function() {

    var topoffset = 60; //variable for menu height

    //Activate Scrollspy
    jQuery('body').scrollspy({
        target: 'header .navbar',
        offset: topoffset
    });

    // add inbody class
    var hash = jQuery(this).find('li.active a').attr('href');
    if(hash !== '#what-we-do') {
       
    } else {
        jQuery('header nav').removeClass('inbody');
    }


    // Add an inbody class to nav when scrollspy event fires
    jQuery('.navbar-fixed-top').on('activate.bs.scrollspy', function() {
        var hash = jQuery(this).find('li.active a').attr('href');
        if(hash !== '#what-we-do') {
            jQuery('header nav').addClass('inbody');
        } else {
            jQuery('header nav').removeClass('inbody');
        }
    });
    
    jQuery('.navbar a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') ===
           this.pathname.replace(/^\//,'') &&
           location.hostname === this.hostname) {
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                jQuery('html,body').animate({
                    scrollTop: target.offset().top-topoffset+2
                }, 500);
                return false;
            }
        }
    });
    
});

  jQuery('#carousel-hero').carousel({
    interval: 10000,
    pause: 'false'
  });

  jQuery('#carousel-testimonials').carousel({
    interval: 50000,
    pause: 'false'
  });
  
  jQuery('p:empty').remove();
  
  jQuery('[data-toggle="tooltip"]').tooltip();   


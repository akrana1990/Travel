jQuery(document).ready(function() {
   jQuery('.nav li.dropdown').hover(function() {
	   jQuery(this).addClass('open');
   }, function() {
	  jQuery(this).removeClass('open');
   });

    jQuery(window).load(function(){
        jQuery('.flexslider').flexslider({
            animation: "slide",
            animationLoop: true,
            itemWidth: 386,
            itemMargin: 5,
            pausePlay: false,
            animationSpeed: 1000,
            slideshow: true,
            slideshowSpeed: 5000,
            move: 1,
            start: function(slider){

            }
        });
    });
});
	
	  


  /*-------------------------------------------------------------------------------
    PRE LOADER
  -------------------------------------------------------------------------------*/

  $(window).load(function(){
    $('.preloader').fadeOut(1000); // set duration in brackets    
  });


  /*-------------------------------------------------------------------------------
    jQuery Parallax
  -------------------------------------------------------------------------------*/

    function initParallax() {
    $('#home').parallax("50%", 0.3);

  }
  initParallax();


  /* Back top
  -----------------------------------------------*/
  
  $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
        $('.go-top').fadeIn(200);
        } else {
          $('.go-top').fadeOut(200);
        }
        });   
        // Animate the scroll to top
      $('.go-top').click(function(event) {
        event.preventDefault();
      $('html, body').animate({scrollTop: 0}, 300);
      })


	var floatPosition = parseInt($("#quickmenu").css('top'));

	 $(window).scroll(function() {

		  var scrollTop = $(window).scrollTop();

		  var newPosition = scrollTop + floatPosition + "px";
			
			//console.log( parseInt($("#quickmenu").css('top')) );

		   $("#quickmenu").css('top', newPosition);
		   $("#quickmenu").stop().animate({

		   "top" : newPosition

		  }, 500);

		 }).scroll();


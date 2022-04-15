jQuery(window).scroll(function() {    
  var scroll = jQuery(window).scrollTop();

  if (scroll >= 44) {      
      jQuery("header").addClass("fixed-header");
  } else {      
      jQuery("header").removeClass("fixed-header");
  }
});

document.getElementById('success').onclick = function(){
	swal("Seccessfull", "You logged in successfully!", "success");
};
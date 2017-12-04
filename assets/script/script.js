// Document Ready
$( document ).ready(function() {

	// AOS Transition Time
	AOS.init({
	  duration: 1200,
	})

	$("#media-navbar-icon").click(function(){
		$("#myModal").fadeIn(300);
	});

	$("#close").click(function(){
		$("#myModal").fadeOut(300);
	});


}); //end document ready

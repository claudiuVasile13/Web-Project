$(document).ready(function(){

	// register action

	setTimeout(popup, 2000);

	function popup() {

		$('#register').click(function(){
			$('.register').css('display', 'block');
			$('body').css('overflow', 'hidden');
		}); 
		
		$("#exit").click(function() {
			$(".register").css("display", "none");
			$('body').css('overflow', 'scroll');
		});

		$("#register-button").click(function() {
			$(".register").css("display", "none");
			$('body').css('overflow', 'scroll');
		});
	
	}
});
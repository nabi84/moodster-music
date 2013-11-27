$(document).ready(function() {
  
  	function checkMenu(){
  		if($('body').hasClass('active')){
    	alert('moved');
    	}
    	else{
    		$('nav[role=navigation]').css('width', '15em');
    		$('nav[role=navigation]').css('float', 'left');
    		$('section.main_content').css('float', 'left');
    		$('section.main_content').css('width', '76%');
    		$('.container').css('margin', '0');
    	}
  	}

  	checkMenu();

	window.scrollTo(0, 1);
	
	$('#menu-toggle').click(function (e) {
		$('body').toggleClass('active');
		e.preventDefault();
		
    });


    
    
});
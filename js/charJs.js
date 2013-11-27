// JavaScript Document

$(document).ready(function(){

	$("select[name='moods']").change(function() {
$("#imagesContainer").empty();

		var txt=$("select[name='moods'] option:selected").val();
console.log('the txt value is ' + txt);

		$.ajax({
			url:'./retrieveImages.php', 
			data:  'text=' + txt,
			type: 'POST',
dataType:'json'
			}).done(function(data){
				

				
				for (var i=0; i<data.photos.photo.length; i++)
				{
					var photo = data.photos.photo[i];
					var dateArray = photo.datetaken.split("-",3);
					var year = parseInt(dateArray[0]);
					var month = parseInt(dateArray[1]);
					var day = parseInt(dateArray[2]);
					
					if (i<5)
					{
						$("#imagesContainer").append("<a href='http://farm" + photo.farm + ".staticflickr.com/" + photo.server + "/" + photo.id + "_" + photo.secret + "_n.jpg' title='" + photo.title + "'><img class='thumbs' src='http://farm" + photo.farm + ".staticflickr.com/" + photo.server + "/" + photo.id + "_" + photo.secret + "_n.jpg' alt='" + photo.id + "' /><a/>");
					}
					else
					{
					$("#imagesContainer").append("<a href='http://farm" + photo.farm + ".staticflickr.com/" + photo.server + "/" + photo.id + "_" + photo.secret + "_n.jpg' title='" + photo.title + "'><img class='thumbs hideme' src='http://farm" + photo.farm + ".staticflickr.com/" + photo.server + "/" + photo.id + "_" + photo.secret + "_n.jpg' alt='" + photo.id + "' /></a>");
					}
					
				}//end for
		});//end ajax 

	});//end input change

	//Fade In for images
	$(window).on('scroll', function(){
        $('.hideme').each( function(){
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            //alert (bottom_of_window);
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
    
    });

});//end doc ready


$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') ;
			}
		}
	});
});
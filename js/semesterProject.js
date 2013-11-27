$(document).ready(function() 






{
		$("select[name='moods']").change(function() {

	var txt=$("select[name='moods'] option:selected").val();

	
		$.ajax
		(
			{
			url: 'find_videos.php',
			type: 'post',
			data: 'mood=' + txt,
			success: function(response) 
			{
				$('#response').append(response);
			},
			error: function(response) 
			{
				alert('You must refresh to start a new search!!');
			}
			}
		);	
		
		});
		
		
	
	
});
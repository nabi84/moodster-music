$(document).ready(function() 
{
	
	
        
        $('form').on('submit',function(e) 
        {
                e.preventDefault();
                $.ajax
                (
                        {
                        url: 'find_songs.php',
                        type: 'post',
                        data: 'mood=' + $('#mood').val(),
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
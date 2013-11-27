<?php
        include ('includes/header.php');
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/semesterProject.js"></script>

<script> 

// Find all the YouTube video embedded on a page
var videos = document.getElementsByClassName("youtube"); 
 
for (var i=0; i<videos.length; i++) {
  
  var youtube = videos[i];
  
  // Based on the YouTube ID, we can easily find the thumbnail image
  var img = document.createElement("img");
  img.setAttribute("src", "http://i.ytimg.com/vi/" 
                          + youtube.id + "/hqdefault.jpg");
  img.setAttribute("class", "thumb");
  
 
  // Overlay the Play icon to make it look like a video player
  var circle = document.createElement("div");
  circle.setAttribute("class","circle");  
  
  youtube.appendChild(img);
  youtube.appendChild(circle);
  
  // Attach an onclick event to the YouTube Thumbnail
  youtube.onclick = function() {
 
    // Create an iFrame with autoplay set to true
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src",
          "https://www.youtube.com/embed/" + this.id 
        + "?autoplay=1&autohide=1&border=0&wmode=opaque&enablejsapi=1"); 
    
    // The height and width of the iFrame should be the same as parent
    iframe.style.width  = this.style.width;
    iframe.style.height = this.style.height;
       
    // Replace the YouTube thumbnail with YouTube HTML5 Player
    this.parentNode.replaceChild(iframe, this);
 
  }; 
}
 
 
</script>
<style>



.youtube {
    float: none;
    clear: both;
    width: 100%;
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 25px;
    height: 0;
}
.youtube iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

</style>
		


        <section class="main_content" role="main">
        	<div id="m-content" style="text-align:center;">
      			   <div id="input">
		     	<select name="moods">
				<option value="select">Select</option>
				<option value="Happy">Happy</option>
				<option value="Sad">Sad</option>
				<option value="Angry">Angry</option>
				</select>
     </div>
        
   			 <div id="response">
                  
	 		 </div>  
      
      
	<section class="main_content" role="main">
	 
		
	</section>
    
<?php
        include ('includes/footer.php');
?>

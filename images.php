<?php
	include ('includes/header.php');
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/charJs.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<style>

select[name='moods']{
margin: auto auto;
display: block;
padding: 5px;
margin-bottom: 25px;
background-color: skyblue;
}

</style>
	<section class="main_content" role="main">
    	<div id="m-content">
        	<select name="moods">
				<option value="select">Select</option>
				<option value="angry">Angry</option>
				<option value="happy">Happy</option>
                <option value="sad">Sad</option>
				</select>
                <section id="imagesContainer" class="popup-gallery">
                </section>
                
        </div>
        
				
	</div><!--section-->
				
		
	</section>
    
<?php
	include ('includes/footer.php');
?>

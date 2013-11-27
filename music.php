<?php
	include ('includes/header.php');
?>

<script type="text/javascript" src="http://connect.soundcloud.com/sdk.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="./js/soundcloud.player.api.js"></script>
    <script type="text/javascript" src="./js/sc-player.js"></script>

<script type="text/javascript">
function playSomeMusic(myGenre) {  
      SC.initialize({      
        client_id: '37db7420c381c7925480c7af1c8e4c90'
        });

        SC.get('/tracks', { genres: myGenre, bpm: { from: 120 } },
        function(tracks) {
            var random = Math.floor(Math.random() * 49);
            var track_url = tracks[random].permalink_url;

            SC.oEmbed(track_url, {auto_play: false, color: "000000"},
              document.getElementById("target"));
            }
        );
      }
</script>



<body onload="playSomeMusic('electronic')">
	<section class="main_content" role="main">
    <div id="m-content" style="text-align:center">
       
  <div class="post">  



<select id="selectField1" style="padding-left: 20px;width:150px">

        <option value="option1">Select</option>
        <option value="option2">Angry</option> 
        <option value="option3">Sad</option> 
        <option value="option4">Happy</option>
    </select>     


<h1>Music</h1>


 <div id="option1" class="block"> 

  <div class="sc-player"><a href="https://soundcloud.com/yvynyl/sets/bloggd">track</a></div>
  <div class="sc-player"><a href="https://soundcloud.com/feedelity">track</a></div>
  <div class="sc-player"><a href="https://soundcloud.com/hunee">track</a></div>


</div>


 <div id="option2" class="block"> 
  <div class="sc-player"><a href="https://soundcloud.com/alex/sets/danceable">track</a></div>
<div class="sc-player"><a href="https://soundcloud.com/prinsthomas/sets/dj-mixes">track</a></div>
<div class="sc-player"><a href="https://soundcloud.com/willowsmith">track</a></div>
</div>



 <div id="option3" class="block">
  <div class="sc-player"><a href="https://soundcloud.com/flightfacilities">track</a></div>
<div class="sc-player"><a href="https://soundcloud.com/markprtchrd/sets/production-and-remixes">track</a></div>
<div class="sc-player"><a href="https://soundcloud.com/alexanderberg">track</a></div>
</div>


  <div id="option4" class="block"> 
    <div class="sc-player"><a href="https://soundcloud.com/agendas">track</a></div>
    <div class="sc-player"><a href="https://soundcloud.com/50_cent">track</a></div>
    <div class="sc-player"><a href="https://soundcloud.com/princesspiamia">track</a></div>
</div>

  </div>



</div>
	</section>

<script type="text/javascript">
$('.block').hide();
$('#selectField1,#selectField2').change(function () {
    $('.block').hide();
    $('#'+$(this).val()).fadeIn();
});
</script>
    </body>

<?php
	include ('includes/footer.php');
?>

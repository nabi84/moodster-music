<?php
$ch = curl_init();

$txt= $_POST['text'];

$url = 'http://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=d9ac94e9d6cf2c82faaed81a53e249af&text=' . $txt . '%20mood&content_type=1&media=photos&safe_search=1&per_page=50&format=json&nojsoncallback=1&extras=date_taken';


curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$curl_response = curl_exec($ch);
curl_close($ch);

//$rsp_obj = unserialize($curl_response);  

/*$date = '2007/08/30'; 
$weekday = date('l', strtotime($date)); // note: first arg to date() is lower-case L */

echo($curl_response);
?>

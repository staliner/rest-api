<?php 
	$get =  file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
	$decode = json_decode($get,true);
 ?>
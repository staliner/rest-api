<?php 
	$get=file_get_contents('coba.json');
	$data = json_decode($get,true);

	foreach ($data as $value) {
		echo $value['nama'];
		echo $value['nip'];
		echo $value['lulus'];
	}
 ?>
<?php 
	$conn = mysqli_connect('localhost','root','','phpdasar');
	$get_data = mysqli_query($conn,"SELECT * FROM mahasiswa");
	$result=[];
	while ($data=mysqli_fetch_assoc($get_data)) {
		$result[]=$data;
	}
	echo json_encode($result);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OK</title>
	<link rel="stylesheet" href="../asset/bootstrap-4.3.1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" id="search" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" id="search-input" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" id="search-button" type="button">Search</button>
    </form>
  </div>
</nav>

<div class="container mt-5">

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
		      <label for="prov">Pilih Provinsi</label>
				<select data-FID="5" class="form-control load-data" id="prov">
					
				</select>
		    </div>
		</div>

		<div class="col-md-6 mt-4">
			<div class="card">
				<div class="card-header">-Detail-</div>
			<div class="card-body">
				<div class="form-group">
					<label for="provinsi">Provinsi</label>
					<input type="text" readonly="" id="provinsi" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Sembuh</label>
					<input type="text" readonly="" id="sembuh" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Positif</label>
					<input type="text" readonly="" id="positif" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Meninggal</label>
					<input type="text" readonly="" id="meninggal" class="form-control">
				</div>
			</div>
			<div class="card-footer">#StayHome</div>
			</div>
		</div>
	</div>

</div>

<script src="../asset/jquery/jquery.min.js"></script>
<script src="../asset/bootstrap-4.3.1/js/bootstrap.min.js"></script>

<script>

	// loadProvinsi()

	// function loadProvinsi() {
	// 	$.ajax({
	// 		url: 'data.php',
	// 		type: 'get',
	// 		dataType: 'json',
	// 		success:function(response){
	// 			var handler = $('.load-data')
	// 			$.each(response,function(key, value) {
	// 				let data = $(`<option value="`+value.attributes.FID+`">`+value.attributes.Provinsi+`</option>`)
	// 				handler.append(data)
	// 			});
	// 		}
	// 	})	
	// }

	$('.load-data').on('change',function() {
		let FID = $(this).val()
		console.log()
		// $.ajax({
		// 	url: 'get_by_id.php',
		// 	type: 'get',
		// 	dataType: 'json',
		// 	success:function(){
				
		// 	},
		// 	error:function(){
		// 		alert('Error')
		// 	}
		// })
 	});

</script>

</body>
</html>
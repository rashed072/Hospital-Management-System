<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Patient details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron" style="background: url('images/4.jpg') no-repeat;background-size: cover;height: 300px;"></div>
	<div class="container-fluid">
		<div class="card">
		<div class="card-body" style="background-color:#3498DB;color: #ffffff">
			<div class="row">
				<div class="col-md-1">
			<a href="admin-panel.php" class="btn btn-light">Go back</a>
		</div>
		<div class="col-md-3">Patient details</div>
		<div class="col-md-8">
			<form class="form-group" action="patient_search.php" method="POST">
				<div class="row">
				<div class="col-md-10">
					<input type="text" name="search" class="form-control" placeholder="enter Contact">
				</div>
				<div class="col-md-2">
					<input type="submit" name="patient_search_submit" class="btn btn-light" value="search">
				</div></div>
			</form>
		</div>
		</div></div>
		<div class="card-body">
		<table class="table table-hover">
  <thead>
    <tr> 
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Contact</th>
      <th scope="col">Doctor appointment</th>
    </tr>
  </thead>
  <tbody>
    <?php get_patient_details(); 
    ?> 
  </tbody>
</table></div></div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Insert Database With Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
		body{
			background-color: #EEF9F9 ;
		}
		td{
			padding:10px;
		}
		.h1-cl{
			border:3px groove gray;
			padding: 10px;
			background-color: #9BF9E5;
			color:#0B05D6;
		}
		.btn-excel{
			margin-top: -60px;
			margin-right: 50px;
		}
	</style>
</head>
<body>
	<div class="container mt-2 p-md-3">
		<h1 class="text-center mb-4 h1-cl">User Data Management</h1>
		<form action="/create" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
			<table border='1'>
				<tr>
					<td>First Name</td>
					<td><input type="text" name="first_name" /></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" name="last_name" /></td>
				</tr>
				<tr>
					<td>City Name</td>
					<td>
						<select name="city_name">
							<option value="Jabalpur">Jabalpur</option>
							<option value="Bhopal">Bhopal</option>
							<option value="Indore">Indore</option>
							<option value="Gwalior">Gwalior</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name='email' /></td>
				</tr>
				<tr>
					<td colspan='2'>
						<input class="btn btn-primary ml-5" type="submit" value="Insert Data">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div class="container">
		<table class="table table-hover table-striped">
			<tr class="font-weight-bold">
				<td>S.No.</td>
				<td>First Name</td>
				<td>Lastst Name</td>
				<td>City Name</td>
				<td colspan='3' class="text-center">Email</td>	
			</tr>
			@foreach ($input as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->first_name }}</td>
				<td>{{ $user->last_name }}</td>
				<td>{{ $user->city_name }}</td>
				<td>{{ $user->email }}</td>
				<td><a href = '/create/{{ $user->id }}'>Edit</a></td>
				<td><a href = '/delete/{{ $user->id }}'>Delete</a></td>
			</tr>
			@endforeach
		</table>	
	</div>
	<div class="container mt-4"> 
	{{$input->Links()}}
   </div>
   <div class="container">
   	<a style="float:right;" class="btn btn-secondary btn-excel" href='/export'>Get Data In Excel</a>
   </div>
</body>
</html>
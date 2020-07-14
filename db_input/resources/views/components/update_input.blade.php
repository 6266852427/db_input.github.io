<!DOCTYPE html>
<html>
<head>
	<title>PHP Insert Database With Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
		td{
			padding:10px;
		}
	</style>
</head>
<body>
	<div class="container mt-5 p-md-3">
		<form action="/create/<?php echo $input[0]->id; ?>" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
			<table border='1'>
				<tr>
					<td>First Name</td>
					<td><input type="text" name="first_name" value='<?php echo $input[0]->first_name; ?>'/></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" name="last_name" value='<?php echo $input[0]->last_name; ?>'/></td>
				</tr>
				<tr>
					<td>City Name</td>
					<td>
						@foreach($input as $value)
						<select name="city_name">
							<option class="text-ligth bg-primary">{{$input[0]->city_name}}</option>
							 <option value="Jabalpur">Jabalpur</option>
					        <option value="Bhopal">Bhopal</option>
							<option value="Indore">Indore</option>
							<option value="Gwalior">Gwalior</option>
						</select>
						@endforeach
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name='email' value='<?php echo $input[0]->email; ?>'/></td>
				</tr>
				<tr>
					<td colspan='2'>
						<input class="btn btn-primary ml-5" type="submit" value="Update Data">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
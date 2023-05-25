<!DOCTYPE html>
<html>
<head>

	<title>Login Form</title>
		

</head>
<body>
 <center>
 	<h3>Login Form</h3>
		<form method="POST" action="{{route('login')}}">
			@csrf
			<label for="username">Username</label>
			<input type="text" id="username" name="username" required><br><br>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required><br><br>
			<input type="submit" value="login">

		</form><br>
		@if($errors->any())
		<div style="color: red;">{{$errors->first()}}</div>
		@endif

 	</form>
 </center>
</body>
</html>
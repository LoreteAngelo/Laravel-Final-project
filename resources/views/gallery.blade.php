<!DOCTYPE html>
<html>
<head>
	
	<title>login</title>
</head>
<body>
	<center>
		<h3>Login Form</h3>
		<form method="POST" action="{{route('login')}}">
			@csrf
			<label for="username">Username</label>
			<input type="text" id="username" name="username" required><br>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required><br>
			<input type="submit" value="login">

		</form><br>
		@if ($error->any())
		<div style="color: red;">{{$errors->first()}}</div>
		@endif
	</center>

</body>
</html>
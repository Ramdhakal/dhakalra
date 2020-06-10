<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<form action="validation.php">
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder="Enter your full name">
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Enter your password">
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Login</button>
	</div>
</form>
</div>
</body>
</html>

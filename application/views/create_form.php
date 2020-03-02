<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>

<div id="container">
	<h1>create form</h1>
	<form action="<?php echo site_url('createform/show')?>" method="post">
		name: <input type="text" name="name" required placeholder="name">
		last name: <input type="text" name="lname" required placeholder="last name">
		<br>
		<br>
		<button type="submit">save</button>
	</form>

</div>

</body>
</html>

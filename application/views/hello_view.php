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
	<h1>Hello welcome to CodeIgniter!</h1>
	<hr> <!--under line-->
	aa
	<?php
		echo br(3) ;
	?>
	bb<!--  new line-->
	<hr>
	<?php
		echo heading("Text",1);
	?>
	<?php
		echo 'space';
		echo nbs(10);
		echo'space';
	?>
	<?php
		$list =array('a','b','c');
		echo ol($list);
	?>
	<?php
		$list =array('a','b','c');
		echo ul($list);
	?>
</div>

</body>
</html>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
<div id="wrapper">
	<nav class="navbar navbar-default top-navbar" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"><strong>bluebox</strong></a>
		</div>

		<ul class="nav navbar-top-links navbar-right">

			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
					<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu dropdown-user">
					<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
					</li>
					<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
					</li>
					<li class="divider"></li>
					<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
					</li>
				</ul>
				<!-- /.dropdown-user -->
			</li>
			<!-- /.dropdown -->
		</ul>
	</nav>
	<!--/. NAV TOP  -->
	<nav class="navbar-default navbar-side" role="navigation">
		<div class="sidebar-collapse">
			<ul class="nav" id="main-menu">
				<li>
					<a class="active-menu" href="<?php echo site_url('test/deviceList');?>"><i class="fa fa-dashboard"></i> รายการครุภัณฑ์</a>
				</li>
				<li>
					<a href="<?php echo site_url('test/borrow');?>"><i class="fa fa-desktop"></i> ยืม - คืน</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="#">Second Level Link</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<!-- /. NAV SIDE  -->

	<div id="page-wrapper">
		<div class="header">
			<h1 class="page-header">
				Dashboard <small>Summary of your App</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Library</a></li>
				<li class="active">Data</li>
			</ol>

		</div>
		<div id="page-inner">
			<!-- /. ROW  -->

			<div class="row">
				<div class="col-md-15 col-sm-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Area Chart
						</div>
						<div class="panel-body">
							<div id="morris-area-chart"></div>
						</div>
					</div>
				</div>
			</div>

			<!-- /. ROW  -->


			<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p>


			</footer>
		</div>
		<!-- /. PAGE INNER  -->
	</div>
	<!-- /. PAGE WRAPPER  -->
</div>

<script>

</script>

</body>

</html>

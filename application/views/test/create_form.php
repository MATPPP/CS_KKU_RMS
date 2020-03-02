<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- jQuery UI CSS -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
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
					<a  href="<?php echo site_url('test/deviceList');?>"><i class="fa fa-dashboard"></i> รายการครุภัณฑ์</a>
				</li>
				<li>
					<a class="active-menu" href="<?php echo site_url('test/borrow');?>"><i class="fa fa-desktop"></i> ยืม - คืน</a>
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
				ยืม-คืน ครุภัณฑ์ <small></small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('test/borrow');?>">หน้าหลัก</a></li>
				<li class="active">หน้ายืม</li>
			</ol>
		</div>
		<div id="page-inner">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								เพิ่มข้อมูลการยืม
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-9 col-sm-offset-1">
										<br>
										<form role="form" action="<?php echo site_url('test/show')?>" method="post">
											<div class="form-group row">
												<div class="col-sm-2 control-label"><i class="fa fa-user fa-1x"></i> รหัสนักศึกษา</div>
												<div class="col-sm-4">
													<input required class="form-control" type="text" name="id_std" placeholder="Enter text"  id="autouser_by_id_std">
												</div>
												<div class="col-sm-2 control-label">รหัสครุภัณฑ์</div>
												<div class="col-sm-4">
													<input required class="form-control" type="text" name="id_device" placeholder="Enter text">
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-2 control-label"><i class="fa fa-user fa-1x"></i> ชื่อ</div>
												<div class="col-sm-4">
													<input required class="form-control" type="text" name="name_std" placeholder="Enter text" id="name_std">
												</div>
												<div class="col-sm-2 control-label">ชื่อครุภัณฑ์</div>
												<div class="col-sm-4">
													<input required class="form-control" type="text" name="ืname_device" placeholder="Enter text">
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-2 control-label" ><i class="fa fa-user fa-1x"></i> สาขา</div>
												<div class="col-sm-4">
													<select class="form-control"  required name="dept_std">
														<option disabled selected value> -- select a department -- </option>
														<option>CS</option>
														<option>GIS</option>
														<option>IT</option>
													</select>
												</div>
												<div class="col-sm-2 control-label">วันที่ยืม</div>
												<div class="col-sm-4">
													<input required class="form-control" type="date" name="date_borrow" >
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-2 control-label">เบอร์</div>
												<div class="col-sm-4">
													<input required class="form-control" type="text" name="tell_std" placeholder="Enter text" id="tell_std">
												</div>
												<div class="col-sm-2 control-label">กำหนดคืน</div>
												<div class="col-sm-4">
													<input required class="form-control" type="date" name="dateline_return" >
												</div>
											</div>
											<br>
											<div class="col-md-offset-5">
												<button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
												<button type="reset" class="btn btn-secondary">ล้างข้อมูล</button>
											</div>
										</form>
									</div>
									<!-- /.col-lg-6 (nested) -->
								</div>
								<!-- /.row (nested) -->
							</div>
							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->
					</div>
					<!-- /.col-lg-12 -->
				</div>
			<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p>
			</footer>
			<!-- /. ROW  -->
		</div>
		<!-- /. PAGE INNER  -->
	</div>
	<!-- /. PAGE WRAPPER  -->
</div>

<script>

</script>

</body>

</html>

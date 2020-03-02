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
				<li class="active">หน้าหลัก</li>
			</ol>

		</div>
		<div id="page-inner">
			<!-- /. ROW  -->
			<div class="row" >
				<div class="col-md-12">
					<?php
					echo nbs(342);
					?>
					<a  href="<?php echo site_url('test/formBorrow');?>" class="btn btn-success" style="height: 40px ">
						<i class="fa f fa-plus"></i> เพิ่มข้อมูลยืม
					</a>
				</div>
			</div>
			<div class="row" style="height: 5px">
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- Advanced Tables -->
					<div class="panel panel-default">
						<div class="panel-heading">
							รายการยืม-คืน ครุภัณฑ์
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
									<tr>
										<th>รหัสนักศึกษา</th>
										<th>ชื่อ</th>
										<th>ระดับชั้น</th>
										<th>ชั้นปี</th>
										<th>สาขา</th>
										<th>รหัสครุภัณฑ์</th>
										<th>จำนวน</th>
										<th>วันที่ยืม</th>
										<th>วันที่คืน</th>
										<th>การดำำเนินการ</th>
									</tr>
									</thead>
									<tbody>
									<tr class="odd gradeX">
										<td>603020296-7</td>
										<td>นนทวัฒน์ ประทุมมา</td>
										<td>ปริญญาตรี</td>
										<td class="center">3</td>
										<td class="center">CS</td>
										<td class="center">632326565656</td>
										<td class="center">3</td>
										<td class="center">12-02-2562</td>
										<td class="center">19-02-2562</td>
										<td>
											<button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
											<button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td>603020296-7</td>
										<td>นนทวัฒน์ ประทุมมา</td>
										<td>ปริญญาตรี</td>
										<td class="center">3</td>
										<td class="center">CS</td>
										<td class="center">632326565656</td>
										<td class="center">3</td>
										<td class="center">12-02-2562</td>
										<td class="center">19-02-2562</td>
										<td>
											<button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
											<button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td>603040285-0</td>
										<td>วรินทร์  ผิวเงิน</td>
										<td>ปริญญาตรี</td>
										<td class="center">3</td>
										<td class="center">ENVI</td>
										<td class="center">632326565656</td>
										<td class="center">3</td>
										<td class="center">12-02-2562</td>
										<td class="center">19-02-2562</td>
										<td>
											<button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
											<button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
										</td>
									</tr>

									</tbody>
								</table>
							</div>

						</div>
					</div>
					<!--End Advanced Tables -->
				</div>
			</div>
			<!-- /. ROW  -->
</body>

</html>



<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- jQuery UI CSS -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
</head>

<body>
<div id="wrapper">

	<?php
	$this->load->view('mainPageBorrow');?>
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
										<form role="form" action="<?php echo site_url('Insertdata/adding')?>" method="post">
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
													<input required class="form-control" type="text" name="name_device" placeholder="Enter text" id="name_device">
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

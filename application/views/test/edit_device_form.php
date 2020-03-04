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
				<li><a href="<?php echo site_url('device');?>">หน้าหลัก</a></li>
				<li class="active">หน้ายืม</li>
			</ol>
		</div>
		<div id="page-inner">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								แก้ไขรายการ
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-9 col-sm-offset-1">
										<br>
										<form role="form" action="<?php echo site_url('device/editdata')?>" method="post">
											<div class="form-group row">
												<div class="col-sm-2 control-label"> รหัสครุภัณฑ์</div>
												<div class="col-sm-4">
													<input required class="form-control" type="text" name="taxt_device" placeholder="Enter text" <?php echo $query->taxt_device;?> >
												</div>
												<div class="col-sm-2 control-label">ชื่อครุภัณฑ์</div>
												<div class="col-sm-4">
													<input required class="form-control" type="text" name="name_device" placeholder="Enter text"<?php echo $query->name_device;?>>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-2 control-label" > ประเภท</div>
												<div class="col-sm-4">
													<select class="form-control"  required name="ref_idTypeDevice">
														<option disabled selected value> -- เลือกประเภท -- </option>
														<option>CS</option>
														<option>GIS</option>
														<option>IT</option>
													</select>
												</div>
												<div class="col-sm-2 control-label">ลักษณะ/ยี่ห้อ</div>
												<div class="col-sm-4">
													<input required class="form-control" type="text" name="des_device" placeholder="Enter text" <?php echo $query->des_device;?>>
												</div>
											</div>

											<div class="form-group row">
												<div class="col-sm-2 control-label"> ปีงบประมาณ</div>
												<div class="col-sm-4">
													<input required class="form-control" type="text" name="year_device" placeholder="Enter text" <?php echo $query->year_device;?> >
												</div>
												<div class="col-sm-2 control-label">เงื่อนไขการยืม</div>
												<div class="col-sm-4">
													<input required class="form-control" type="text" name="ref_idRoleBorrow" placeholder="Enter text"<?php echo $query->ref_idRoleBorrow;?>>
												</div>
											</div>

											<div class="form-group row">
												<div class="col-sm-2 control-label">ราคา</div>
												<div class="col-sm-4">
													<input required class="form-control" type="text" name="price_device" placeholder="Enter text"<?php echo $query->price_device;?>>
												</div>
												<div class="col-sm-2 control-label">สถานะ</div>
												<div class="col-sm-4">
													<select class="form-control"  required name="ref_idStatus">
														<option disabled selected value> -- เลือกสถานะ -- </option>
														<option>รอซ่อม</option>
														<option>อยู่ระหว่างการซ่อม</option>
														<option>เสีย</option>
														<option>ยังไม่อัปเดต</option>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<div class="col-sm-2 control-label"> สถานที่</div>
												<div class="col-sm-4">
													<input required class="form-control" type="text" name="loc_device" placeholder="Enter text" <?php echo $query->loc_device;?> >
												</div>
											</div>
											<br>
											<div class="col-md-offset-5">
												<button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
												<button type="reset" class="btn btn-secondary">ล้างข้อมูล</button>
											</div>
										</form>
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

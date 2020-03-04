<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<div id="wrapper">
	<?php
	$this->load->view('mainPageBorrow');?>
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
					echo nbs(335);
					?>
					<a  href="<?php echo site_url('borrow/formBorrow');?>" class="btn btn-success btn-lg" >
						<i class="fa f fa-plus"></i> เพิ่มข้อมูล
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
										<th>สาขา</th>
										<th>เบอร์</th>
										<th>รหัสครุภัณฑ์</th>
										<th>ชื่อ</th>
										<th>วันที่ยืม</th>
										<th>กำหนดคืน</th>
										<th>วันที่คืน</th>
										<th>ดำเนินการ</th>
									</tr>
									</thead>
									<tbody>
										<?php foreach ($query as $row) {?>
										<tr class="odd gradeX">
											<td><?php echo  $row->id_std;?></td>
											<td><?php echo  $row->name_std;?></td>
											<td><?php echo  $row->dept_std;?></td>
											<td><?php echo  $row->tell_std;?></td>
											<td><?php echo  $row->id_device;?></td>
											<td><?php echo  $row->name_device;?></td>
											<td><?php echo  $row->date_borrow;?></td>
											<td><?php echo  $row->dateline_return;?></td>
											<td><?php echo  $row->date_return;?></td>
											<td>
												<a href="<?php echo site_url('borrow/edit/').$row->id;?> " <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button></a>
												<a href="<?php echo site_url('borrow/delete/').$row->id;?> " onclick="return confirm('ยืนยันการลบ');" <button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button></a>
											</td>
										</tr>
										<?php } ?>

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



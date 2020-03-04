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
				<a  href="<?php echo site_url('borrow/deviceList');?>"><i class="fa fa-dashboard"></i> รายการครุภัณฑ์</a>
			</li>
			<li>
				<a class="active-menu" href="<?php echo site_url('borrow');?>"><i class="fa fa-desktop"></i> ยืม - คืน</a>
			</li>
			<li>
				<a  href="<?php echo site_url('borrow/borrowList');?>"><i class="fa fa-dashboard"></i> รายการยืมคืน</a>
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

<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>RCV TGR 1</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/IDM.jpg" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="#" class="logo">
					<img src="../assets/img/IDM.jpg" alt="navbar brand" style="width: 40px;height: 40px;" class="navbar-brand">
					<font style="color: white;">RECEIVING TGR1</font>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						
						
						
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/IDM.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
									<div class="user-box">
									<div class="avatar-lg"></div>
									<div class="u-text">
									<h4><?php echo $_SESSION['username'] ?></h4>
									</div>
									</li>
									<li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="../logout.php"><i class="fa fa-power-off"></i>&nbsp; Logout</a>
									</li>
				                 </div>
			                    </nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/img/IDM.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo $_SESSION['username'] ?>
									<span class="user-level">user login</span>
									
								</span>
							</a>
							
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="?view=dashboard" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Menu utama</p>
							</a>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Data Master</h4>
						</li>
						<li class="nav-item">
							<a href="?view=user">
								<i class="fas fa-layer-group"></i>
								<p>Data User</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?view=suplier">
								<i class="fas fa-layer-group"></i>
								<p>File bpb</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?view=vb6">
								<i class="fas fa-layer-group"></i>
								<p>File vb6</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?view=npb">
								<i class="fas fa-layer-group"></i>
								<p>File npb</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?view=lap">
								<i class="fas fa-th-list"></i>
								<p>Laporan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?view=eiscab">
								<i class="fas fa-th-list"></i>
								<p>eis cabang</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<?php
					// Dashboard
					if(@$_GET['view']=='')
						include 'dashboard.php';
					elseif($_GET['view']=='dashboard')
						include 'dashboard.php';
					// Data Master	
					elseif($_GET['view']=='suplier')
						include 'suplier.php';
					elseif($_GET['view']=='hapusbarang')
						include 'suplier.php';
					elseif($_GET['view']=='lap')
						include 'lap.php';
					elseif($_GET['view']=='npb')
						include 'npb.php';
					elseif($_GET['view']=='npb')
						include 'npb.php';
					elseif($_GET['view']=='vb6')
						include 'vb6.php';
					elseif($_GET['view']=='user')
						include 'user.php';
					elseif($_GET['view']=='hapususer')
						include 'hapususer.php';
					elseif($_GET['view']=='eiscab')
						include 'cabang.php';
					elseif($_GET['view']=='hapususer')
						include 'cabang.php';	
				 ?>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<img src="../assets/img/IDM.jpg" width="200" height="50">
					</nav>
					<div class="copyright ml-auto">
						2021, Copyright <i class="fa fa-heart heart text-danger"></i> by <a href="#">Npb & bpb</a>
					</div>				
				</div>
			</footer>
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo2.js"></script>
	<script >
		$(document).ready(function() {
			$('#add-row').DataTable({
			});
		});
	</script>
</body>
</html>
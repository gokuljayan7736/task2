<?php
session_start();
$a=$_SESSION['admin'];
include("dashboard.php");
?>
<html>
 <head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>
 </head>
 <body>
	<div class="d-flex flex-column flex-md-row align-items-start">
	 <div class="nav flex-column nav-pills  w-md-auto me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		<button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
		<button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Approved Leaves</button>
		<button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Pending Leaves</button>
		<button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Rejected Leaves</button>
	 </div>
	 <div class="container" id="con1">
		<div class="tab-content w-100" id="v-pills-tabContent">
		 <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
			<div class="container1">
			 <?php
				include("date-admin.php");
			 ?>
			</div>
			<div class="home">
			 <?php
			 include("admin-home.php");
			 ?>
			</div>
		 </div>
		 <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
			<div class="container1">
			 <?php
			 include("date-admin.php");
			 ?>
			</div>
			<div class="home">
			 <?php
			 include("approved_leave.php");
			 ?>
			</div>
		 </div>
		 <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
			<div class="container1">
			 <?php
			 include("date-admin.php");
			 ?>
			</div>
			<div class="home">
			 <?php
			 include("pending_leave.php");
			 ?>
			</div>
		 </div>
		 <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
			<div class="container1">
			 <?php
			 include("date-admin.php");
			 ?>  
			</div>
			<div class="home">
			 <?php
			 include("reject_leave.php");
			 ?>
			</div>
		 </div>
		</div>
	 </div>
	</div>
 </body>
</html>

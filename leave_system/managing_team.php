<?php
session_start();
$a=$_SESSION['managing_team'];
include ("dashboard.php");
?>
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="managing_team.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>
 </head>
 <body>
  <div class="d-flex align-items-start">
   <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Leave Status</button>
   </div>
   <div class="container">
    <div class="tab-content" id="v-pills-tabContent">
     <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
      <div class="container1">
       <?php
       include("date.php"); ?>
      </div> 
      <div class="home">
       <?php
       include("managing-team-home.php");
       ?>
      </div>
     </div>
     <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      <div class="container1">
       <?php
       include("date.php");
       ?>
      </div>
      <div class="home">
       <?php
       include("leave_status.php"); 
       ?>
      </div>
     </div>
    </div>
   </div>
  </div> 
 </body>
</html>
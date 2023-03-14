<?php
session_start();
$a=$_SESSION['managing_team'];

?>
<html>
 <head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>
  <link rel="stylesheet" type="text/css" href="leave_status.css"/>
 </head>
 <body>
  <table class="table table-striped table1">
   <tr>
    <th>Name</th>
    <th>Username</th>
    <th>Id no</th>
    <th>reason</th>
    <th>Role</th>
    <th>Date</th>
    <th>To date</th>
    <th>No of days</th>
    <th colspan="2">Status</th>
   </tr>

<?php

  $con=mysqli_connect("localhost","gokul","gokul","leave_management_system");
  $sel=mysqli_query($con,"select * from apply_leave where role='managing team' and username='$a'");


  if(mysqli_num_rows($sel)>0)
  {
  while($r=mysqli_fetch_row ($sel))
  {
?>
   <tr>
    <td><?php echo$r[1];?></td>
    <td><?php echo$r[2];?></td>
    <td><?php echo$r[3];?></td>
    <td><?php echo$r[4];?></td>
    <td><?php echo$r[5];?></td>
    <td><?php echo$r[6];?></td>
    <td><?php echo$r[7];?></td>
    <td><?php echo$r[8];?></td>
    <td><?php echo$r[9];?></td>
   </tr>
<?php
  }
  }
?>

  </table>
  <!-- <nav aria-label="Page navigation example">
   <ul class="pagination float-right">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
   </ul>
  </nav> -->
 </body>
</html>
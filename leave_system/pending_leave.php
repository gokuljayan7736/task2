
<html>
 <head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>
  <!-- <link rel="stylesheet" type="text/css" href="date-admin.css"/> -->
 </head>
 <body>
  <div class="container">
   <table class="table table-striped table1">
    <tr>
     <th>Name</th>
     <th>Username</th>
     <th>Id no</th>
     <th>Subject</th>
     <th>Role</th>
     <th>Date</th>
     <th>To date</th>
   <!-- <th>No of days</th> -->
     <th>Status</th>
     <th colspan="4">Operations</th>
    </tr>

<?php

 $con=mysqli_connect("localhost","gokul","gokul","leave_management_system");
 $sel=mysqli_query($con,"select * from apply_leave where status='pending'");


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
  
     <td><?php echo$r[9];?></td>
     <form method="post">
      <td><button class="btn btn-success btn"><a href="pending_leave.php?confirmid=<?php echo$r[0]?> ">Confirm</a></button></td>
      <td><button class="btn btn-danger btn"><a href="pending_leave.php?rejectid=<?php echo$r[0]?> ">Reject</a></button></td>
     </form>
    </tr>      
 <?php


  if(isset($_GET['confirmid']))
  {
  $conn=$_GET['confirmid'];
  $ins2=mysqli_query($con,"update apply_leave set name='$r[1]',username='$r[2]',id_no='$r[3]',reason='$r[4]',role='$r[5]',date='$r[6]',to_date='$r[7]',no_of_days='$r[8]',status='approved' where sl_no='$conn'");
   
  if($ins2==1)
  {
    
  header("location:adminhome.php");
  }
  else
  {
  echo"not inserted";
  }
  }
  if(isset($_GET['rejectid']))
  {
  $can=$_GET['rejectid'];
  $ins3=mysqli_query($con,"update apply_leave set name='$r[1]',username='$r[2]',id_no='$r[3]',reason='$r[4]',role='$r[5]',date='$r[6]',to_date='$r[7]',no_of_days='$r[8]',status='rejected' where sl_no='$can'");
  if($ins3==1)
  {
    
  header("location:adminhome.php");
  }
  else
  {
   echo"not inserted";
  }  
  }
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
  </div>
 </body>
</head>
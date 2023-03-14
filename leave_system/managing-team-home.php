
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="managing_team.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>
 </head>
 <body>
  <div class="container" id="con2">
   <div class="apply-leave">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Apply Leave </button>
   </div>
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
     <th colspan="5">Status</th>
    </tr>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
       <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
        <form method="post">
         <label class="form-label">From Date</label>
         <input type="date" name="a" class="form-control"><br>
         <label  class="form-label">To Date</label>
         <input type="date" name="aa" class="form-control"><br>
         <label  class="form-label">Reason</label>
         <input type="text" name="c" class="form-control"><br>
       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="send" value="send" class="btn btn-primary btn-2">
        </form>
       </div>
      </div>
     </div>
    </div>
 
    
  
<?php
 


session_start();
$a=$_SESSION['managing_team'];

  $con=mysqli_connect("localhost","gokul","gokul","leave_management_system");
  $sel=mysqli_query($con,"select * from add_users where username='$a' and role='managing team'");
  if(mysqli_num_rows($sel)>0)
  {
  while($r1=mysqli_fetch_row($sel))
  {
  if(isset($_POST['send']))
  {
  $a=$_POST['a'];
  $aa=$_POST['aa'];
  $b=$_POST['b'];
  $c=$_POST['c'];

  $diff=abs(strtotime($aa)-strtotime($a));
  $year=floor($diff/(365*60*60*24));
  // echo"$year" ;
  $month=floor(($diff-$year*365*60*60*24)/(30*60*60*24));
  $day=floor(($diff-$year*365*60*60*24-$month*30*60*60*24)/(60*60*24));
  // echo"$day";

  $ins="INSERT INTO apply_leave (name,username,id_no,reason,role,date,to_date,no_of_days,status) VALUES ('$r1[1]','$r1[6]','$r1[2]','$c','$r1[4]','$a','$aa','$day','pending')";
  {
   
  $ins2=mysqli_query($con,$ins);
  if($ins2==1)
  {
  
  echo"inserted";
  }
  else
  {
  echo "Error" . $sql . "<br/>" . $conn->error;
  }
  }
  }
  }
  }

  $con=mysqli_connect("localhost","gokul","gokul","leave_management_system");
  $sel=mysqli_query($con,"select * from apply_leave where role='staff'");
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
   <!-- <form method="post"> -->
     <td><button class="btn btn-success btn"><a href="managing_team.php?confirmid=<?php echo$r[0]?> ">Confirm</a></button></td>
     <td><button class="btn btn-danger btn"><a href="managing_team.php?rejectid=<?php echo$r[0]?> ">Reject</a></button></td>
    </tr>    
<?php

  if(isset($_GET['confirmid']))
  {
  $conn=$_GET['confirmid'];
  $ins2=mysqli_query($con,"update apply_leave set name='$r[1]',username='$r[2]',id_no='$r[3]',reason='$r[4]',role='$r[5]',date='$r[6]',to_date='$r[7]',no_of_days='$r[8]',status='approved' where sl_no='$conn'");
   
  if($ins2==1)
  {
    
  header("location:managing_team.php");
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
    
   header("location:managing_team.php");
  }
  else {
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
</html>
<?php
session_start();
$a=$_SESSION['staff'];

?>
<html>
 <head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="staff.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>
 </head>
 <body>
  <div class="container" id="con2">
   <div class="staff">
    <button type="button" class="btn btn-success btn-11" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Apply Leave</button>
   </div>
   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
      <div class="modal-header">
       <h1 class="modal-title fs-5" id="staticBackdropLabel">Apply Leave</h1>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form method="post">
        <label class="form-label">From Date</label>
        <input type="date" name="a" class="form-control"><br>
        <label class="form-label">To Date</label>
        <input type="date" name="aa" class="form-control"><br>
        <label class="form-label">Reason</label>
        <input type="text" name="c" class="form-control"><br>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <input type="submit" name="send" value="send" class="btn btn-primary">
       </form>
      </div>
     </div>
    </div>
   </div>
   <table class="table table-striped table2" >
    <tr>
     <th>Name</th>
     <th>Username</th>
     <th>Id no</th>
     <th>Subject</th>
     <th>Role</th>
     <th>From Date</th>
     <th>To date</th>
     <th>No of days</th>
     <th>Status</th>
    </tr>
   <?php
// session_start();
// $a=$_SESSION['staff'];

    $con=mysqli_connect("localhost","gokul","gokul","leave_management_system");
    $sel=mysqli_query($con,"select * from apply_leave where username='$a'");
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

    $sel=mysqli_query($con,"select * from add_users where username='$a' and role='staff'");
    if(mysqli_num_rows($sel)>0)
    {
    while($r1=mysqli_fetch_row($sel))
    {  
    ?>
    <?php
    $sel=mysqli_query($con,"select sum(no_of_days) as total from apply_leave where username='$a'");
    $res=mysqli_fetch_assoc($sel);
    $num=$res['total'];
    $rem=$r1[3]-$num;
  
    if($rem >0){
      // echo $rem; 
    }
    // echo"$rem";

    else{
      $rem1=$r1[3]-$num; 
      // echo "$rem1";
     }
    // echo"$rem1";
   
    ?>

    <div class="both">
     <div class="circle1">
      <h5 class="card-title1">Total Leaves</h5>
      <div class="remaining">
       <p class="card-text1"><?php echo$r1[3];?></p>
      </div>
     </div>
     <div class="circle2">
      <h5 class="card-title1">Remaining Leaves</h5>
      <div class="remaining">
       <p class="card-text1"><?php echo"$rem"; ?></p>
      </div>
     </div>
     <div class="circle3">
      <h5 class="card-title1">Exceeded Leaves</h5>
      <div class="remaining">
       <p class="card-text1"><?php  echo"$rem1";?> </p>
      </div>
     </div>
    </div>

    <?php
   
    $con=mysqli_connect("localhost","gokul","gokul","leave_management_system");

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
    // $sel=mysqli_query($con,"select * from add_users where role='staff'");
  //  $r=mysqli_fetch_row($sel);

 
  // echo $num;



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
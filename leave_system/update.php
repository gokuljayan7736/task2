
<?php
   $con=mysqli_connect("localhost","gokul","gokul","leave_management_system");
   if(isset($_GET['updateid']))
   {
   $a1=$_GET['updateid'];
   $sel=mysqli_query($con,"select * from add_users where sl_no='$a1'");
   if(mysqli_num_rows($sel)>0)
   {
   $r=mysqli_fetch_row($sel);
   }
   }
       
   if(isset($_POST['h']))
   {
   $a=$_POST['a'];
   $b=$_POST['b'];
   $c=$_POST['c'];
   $d=$_POST['d'];
   $e=$_POST['e'];
   $f=$_POST['f'];
   $g=$_POST['g'];
   
   $ins=mysqli_query($con,"update add_users set name='$a',id_no='$b',total_leaves='$c',role='$d',date_of_joining='$e',username='$f',password='$g' where sl_no='$a1'");
   
   if($ins==1)
   {
   header("location:adminhome.php");
   }
  else {
   echo"not inserted";
   }
   }
?>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>
  <title></title>
 </head>
 <body>
  <div class="container">
   <form method="post" class="form1">
    <label class="form-label">Name</label>
    <input type="text" name="a" class="form-control" value=<?php echo$r[1]?>>
    <label class="form-label">Id No</label>
    <input type="text" name="b" class="form-control" value=<?php echo$r[2]?>>
    <label class="form-label">Total Leaves</label>
    <input type="number" name="c" class="form-control" value=<?php echo$r[3]?>>
    <label class="form-label">Role</label>
    <select name="d" class="form-select" value=<?php echo$r[4]?>>
     <option value="managing team">Managing team</option>
     <option value="staff">Staff</option>
     <option value="training">Training</option>
    </select>
    <label class="form-label">Date of Joining</label>
    <input type="date" name="e" class="form-control" value=<?php echo$r[5]?>>
    <label class="form-label">Username</label>
    <input type="email" name="f" class="form-control" value=<?php echo$r[6]?>>
    <label class="form-label">Password</label>
    <input type="password" name="g" class="form-control" value=<?php echo$r[7]?>>
    <input type="submit" name="h" value="update" class="btn btn-success">
   </form>
  </div>
 </body>
</html>
    
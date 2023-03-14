
<html>
 <head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>
  <link rel="stylesheet" type="text/css" href="login.css"/>
 </head>
 <body>
  <div class="container-fluid"> 
   <div class="row">
    <div class="col-lg-12 col-md-12">
     <div class="login-div">
      <h1>login</h1>
      <div class="login-details">
       <form method="post">
        <p>Username:<input type="email" name="a"></p>
        <p>Password:<input type="password" name="b"></p>
        <input type="submit" class="btn btn-danger" name="c" value="Login">
       </form>
      </div>
     <div>
    </div>
   </div>
  </div>
 </body>
</html>

<?php
  $con=mysqli_connect("localhost","gokul","gokul","leave_management_system");
  if(isset($_POST['c']))
  {
  $a=$_POST['a'];
  $b=$_POST['b'];
  $sel=mysqli_query($con,"select * from add_users where username='$a' and password='$b'");
  if(mysqli_num_rows($sel)>0)
  {
  session_start();
  $r=mysqli_fetch_array($sel);
  if(empty($r['4']))
  {
  echo"invalid username/password";
  }
  else
  {
  if($r["4"]=="admin")
  {
  $_SESSION['admin']=$a;
  header("location:adminhome.php");
  } 
  if($r["4"]=="managing team")
  {
  if(empty($_SESSION['managing_team']))
  {
  $_SESSION['managing_team']=$a;
  header("location:managing_team.php");
  } 
  else echo"Please logout the current User";
  }
  if($r["4"]=="staff")
  {
  if(empty($_SESSION['staff']))
  {
  $_SESSION["staff"]=$a;
  header("location:staff.php");
  }
  else echo"Please logout the current User";
  }
  if($r["4"]=="training")
  {
  $_SESSION['training']=$a;
  header("location:training.php");
  } 
  } 
  }
  }

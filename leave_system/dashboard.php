<html>
 <head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>
  <link rel="stylesheet" type="text/css" href="dashboard.css"/>
 </head>
 <body>  
  <div class="dashboard-full">
   <div class="dashboard">
    <h2>Dashboard</h2>
    <h2>welcome</h2> 
    <img class="userimg" src="User-Profile-PNG-High-Quality-Image.png"/>
    <a href="logout.php" class="logout">Logout</a>
    <?php
        //  session_start();     
   $con=mysqli_connect("localhost","gokul","gokul","leave_management_system");
   $sel=mysqli_query($con,"select * from add_users where username='$a'");
         
   $r=mysqli_fetch_row($sel);
           
    {
    ?>
    <div class="name">
    <?php
    echo" $r[6] <br>";
    }
    ?>
    </div>
   </div>   
  </div>
 </body>
</html> 
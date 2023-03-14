<?php
 $con=mysqli_connect("localhost","gokul","gokul","leave_management_system");
 if(isset($_GET['deleteid']))
 {
 $a1=$_GET['deleteid'];
 $sel=mysqli_query($con,"delete from add_users where sl_no='$a1'");
 header("location:adminhome.php");
 }

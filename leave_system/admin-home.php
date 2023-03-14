
<html>
 <head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>
  <!-- <link rel="stylesheet" type="text/css" href="admin.css"/> -->
  <script>
   $(document).ready(function () {
   $(".btn-danger").click(function () {
   var answer = confirm("Are you sure?");
   return answer;
   });
   });

  </script>
 </head>
 <body>
  <div class="container">
   <div class="add-user">
    <button type="button" class="btn btn-success btn-add_user" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Users</button>
   </div>
   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
       <h1 class="modal-title fs-5" id="staticBackdropLabel">Add user</h1>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form method="post" class="form1">
        <label class="form-label">Name</label>
        <input type="text" name="a" class="form-control">
        <label class="form-label">Id No</label>
        <input type="text" name="b" class="form-control">
        <label class="form-label">Total Leaves</label>
        <input type="number" name="c" class="form-control">
        <label class="form-label">Role</label>
        <select name="d" class="form-select" >
         <option value="managing team">Managing team</option>
         <option value="staff">Staff</option>
         <option value="training">Training</option>
        </select>
        <label class="form-label">Date of Joining</label>
        <input type="date" name="e" class="form-control">
        <label class="form-label">Username</label>
        <input type="email" name="f" class="form-control">
        <label class="form-label">Password</label>
        <input type="password" name="g" class="form-control">
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
       <input type="submit" class="btn btn-success" value="Register" name="h">
       </form>  
      </div>
     </div>
    </div>
   </div>
   <table class="table table-striped table1">
    <tr>
     <th>Users</th>
     <th>Id no</th>
     <th>Total Leaves</th>
     <th>Role</th>
     <th>Date of joining</th>
     <th>Username</th>
     <th>password</th>
     <th colspan="2">operations</th>
     <th></th>
    </tr>
<?php

  $con=mysqli_connect("localhost","gokul","gokul","leave_management_system");
  if(isset($_POST['h']))
  {
   $a=$_POST['a'];
   $b=$_POST['b'];
   $c=$_POST['c'];
   $d=$_POST['d'];
   $e=$_POST['e'];
   $f=$_POST['f'];
   $g=$_POST['g'];
 
  $ins="INSERT INTO add_users(name, id_no, total_leaves, role, date_of_joining, username, password) VALUES('$a','$b','$c','$d','$e','$f','$g')";
  {
  
  $inss=mysqli_query($con,$ins);

  if($inss==1)
  {
  $ins1="INSERT INTO login (username, password, type) VALUES ('$f','$g','$d')";
  $ins2=mysqli_query($con,$ins1);
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
  $sel=mysqli_query($con,"select * from add_users");

  if(mysqli_num_rows($sel)>0)
  {
  while($r=mysqli_fetch_row($sel))
  {
?>
    <tr>
     <td><?php echo $r[1];?></td>
     <td><?php echo $r[2];?></td>
     <td><?php echo $r[3];?></td>
<!-- <td><?php echo $r[''];?></td> -->
     <td><?php echo $r[4];?></td>
     <td><?php echo $r[5];?></td>
     <td><?php echo $r[6];?></td>
     <td><?php echo $r[7];?></td>
     <td><button class="btn btn-success btn1"><a href="update.php?updateid=<?php echo$r[0]?> ">update</a></button></td>
     <td><button class="btn btn-danger btn1" id="btn"><a href="delete.php?deleteid=<?php echo$r[0]?> ">delete</a></button></td>
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
  </div>
 </body>
</html>
<script>

$("#btn").confirm();
</script>
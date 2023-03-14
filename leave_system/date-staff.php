<html>
 <head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="date_staff.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>
 </head>
 <body>
  <form class="date-managing" method="POST">
   <div class="row">
    <div class="col-lg-4">
     <div class="form-group">
      <label class="form-label">From Date</label>
      <input type="date" name="from_date" class="form-control">
     </div>
    </div>
    <div class="col-lg-4">
     <div class="form-group">
      <label class="form-label">To Date</label>
      <input type="date" name="to_date" class="form-control">
     </div>
    </div>
    <div class="col-lg-2">
     <div class="form-group">
      <label class="form-label"> Status</label>
      <select name="s" class="form-select">
       <option value="approved">approved</option>
       <option value="pending">Pending</option>
       <option value="rejected">Rejected</option>
      </select>
     </div>
    </div>
    <div class="col-lg-2">
     <div class="form-group">
      <label class="form-label">filter</label><br>
      <button type="submit" class="btn btn-primary" name="filter">Filter</button>
     </div>
    </div>
   </div>
  </form>
  

 <?php
  $con = mysqli_connect("localhost","gokul","gokul","leave_management_system");

  if(isset($_POST['filter']))
  {
  if(isset($_POST['from_date']) && isset($_POST['to_date']))
  if(empty($_POST['from_date']))  
  {
  $from_date='empty';
  
  if(empty($_POST['to_date']))  
  {
  $to_date='empty';
  }
  }

  else
  {
  $from_date = $_POST['from_date'];
  $to_date = $_POST['to_date'];
  $s=$_POST['s'];
  $query = mysqli_query($con,"SELECT * FROM apply_leave WHERE date BETWEEN '$from_date' AND '$to_date' and role='staff' and status='$s' and username='$a'");
  if(mysqli_num_rows($query)>0)
  {
  ?>
  <table class="table table-primary table-striped table-admin-date">  
   <tr>
    <th>Name</th>
    <th>Username</th>
    <th>Id no</th>
    <th>Reason</th>
    <th>Role</th>
    <th>Date</th>
    <th>Status</th>
   </tr>

   <?php
  while($r=mysqli_fetch_row($query))
  {
?>
   <tr>
    <td><?php echo $r['1'];?></td> 
    <td><?php echo $r['2'];?></td> 
    <td><?php echo $r['3'];?></td> 
    <td><?php echo $r['4'];?></td> 
    <td><?php echo $r['5'];?></td> 
    <td><?php echo $r['6'];?></td> 
    <td><?php echo $r['9'];?></td> 
   </tr>
   <?php 
  }
  }
  }
  }
  else
  {
   echo "No Record Found";
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







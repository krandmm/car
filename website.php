<?php

include('connect.php');
$query="select * from user";
$res=mysqli_query($c,$query);
if(mysqli_num_rows($res)>0)
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>


    <div class="container-fluid"> 

      <!-- Example DataTables Card-->
      <div class="card mb-3"> 
        <div class="card-header">
          <i class="fa fa-table"></i> JD Power</div> 
        <div class="card-body"> 
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><a href = 'form.php'><font color=blue><b>[Registration Car]</b></font></a><a href = 'search.php'><font color=blue><b>[Search Car]</b></font></a>
              <thead>
                <tr>
                  <th>Seller Name</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Vehicle Make</th>
                  <th>Vehicle Model</th>
                  <th>Vehicle Year</th>
                  <th>Website Link</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Seller Name</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Vehicle Make</th>
                  <th>Vehicle Model</th>
                  <th>Vehicle Year</th>
                  <th>Website Link</th>
                </tr>
              </tfoot>
              <tbody>
<?php

while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo"<td>".$row['sellername']."</td>";
echo"<td>".$row['address']."</td>";
echo"<td>".$row['city']."</td>";
echo"<td>".$row['phone']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['make']."</td>";
echo"<td>".$row['model']."</td>";
echo"<td>".$row['year']."</td>";
echo"<td><a href='https://www.jdpower.com/Cars/".$row['make']."/".$row['model']."/".$row['year']."'>https://www.jdpower.com/Cars/".$row['make']."/".$row['model']."/".$row['year']."</a></td>";

echo "</tr>";
}
}
?>
 
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"> JD Power</div>
      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
 
</body>

</html>

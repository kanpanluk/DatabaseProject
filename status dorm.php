<!DOCTYPE html>
<html lang="en">

 <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Database Project</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">Dominize</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="index.html">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                 รายละเอียดหอ</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="รายรับรายจ่าย">
            <a class="nav-link" href="income.html">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">
                รายรับรายจ่าย</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="สถาณะหอพัก">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">
                สถานะหอพัก</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                <a href="status dorm.html">ดูห้องว่าง</a>
              </li>
              <li>
                <a href="status dorm client.html">ดูห้องค้างชำระ</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="รายละเอียด">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-file"></i>
              <span class="nav-link-text">
                รายละเอียด</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseExamplePages">
              <li>
                <a href="rules.html">รายละเอียดกฎ</a>
              </li>
              <li>
                <a href="staff.html">บุคลากร</a>
              </li>
              <li>
                <a href="#">สัญญาเช่า</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="d-lg-none">Messages
                <span class="badge badge-pill badge-primary">12 New</span>
              </span>
              <span class="new-indicator text-primary d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">12</span>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">New Messages:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>David Miller</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>Jane Smith</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>John Doe</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                View all messages
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
              <span class="d-lg-none">Alerts
                <span class="badge badge-pill badge-warning">6 New</span>
              </span>
              <span class="new-indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">6</span>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">New Alerts:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-danger">
                  <strong>
                    <i class="fa fa-long-arrow-down"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                View all alerts
              </a>
            </div>
          </li>
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">สถานะหอพัก</a>
          </li>
          <li class="breadcrumb-item active">ดูห้องว่าง</li>
        </ol>

        
	


<!-- Example Tables Card -->
        <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Rooms Details</h2>
                        <a href="createl.php" class="btn btn-success pull-right">Add New Client</a>
                    </div>
                    <?php
                    // Include config file
                    require_once 'config.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM livingStatus";
                    if($result = $pdo->query($sql)){
                        if($result->rowCount() > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
										echo "<th>building</th>";
                                        echo "<th>room Number</th>";
                                        echo "<th>Status</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch()){
                                    echo "<tr>";
										echo "<td>" . $row['buildingID'] . "</td>";
                                        echo "<td>" . $row['roomNumber'] . "</td>";
                                        if($row['livingStatus']==0){
                                          echo "<td>ว่าง</td>";
                                        }else if($row['livingStatus']==1){
                                          echo "<td>มีผู้พัก</td>";
                                        }else{
                                          echo "<td>จอง</td>";
                                        }

                                        echo "<td>";
        
                                            echo "<a href='delete.php?id=". $row['roomNumber'] ."class='btn btn-success pull-right'>Modify</a>";
                                            echo "<a href='delete.php?id=". $row['roomNumber'] ."class='btn btn-success pull-right'>Delete</a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            unset($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                    }
                    
                    // Close connection
                    unset($pdo);
                    ?>
                </div>
            </div>        
        </div>
    </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy; Your Website 2017</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
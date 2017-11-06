<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$Client = $RoomNumber = $BuildingID = $Status = "";
$Client_err = $RoomNumber_err = $BuildingID_err =  $Status_err ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["Client"]);
    if(empty($input_name)){
        $Client_err = "Please enter a name.";
    } elseif(!filter_var(trim($_POST["Client"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
        $Client_err = 'Please enter a valid name.';
    } else{
        $Client = $input_name;
    }
    
    // Validate number
    $input_number = trim($_POST["RoomNumber"]);
    if(empty($input_number)){
        $RoomNumber_err = 'Please enter an number.';     
    } else{
        $RoomNumber = $input_number;
    }

    $input_Status = trim($_POST["Status"]);
    if(empty($input_Status)){
        $Status_err = 'Please enter an number.';     
    } else{
        $Status = $input_number;
    }
    
    // Validate salary
    $BuildingID_id = trim($_POST["BuildingID"]);
    if(empty($BuildingID_id)){
        $BuildingID_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($BuildingID_id)){
        $BuildingID_err = 'Please enter a positive integer value.';
    } else{

        $BuildingID = $BuildingID_id;
    }
    
    // Check input errors before inserting in database
    if(empty($Client_err) && empty($RoomNumber_err) && empty($BuildingID_err)){
        // Prepare an insert statement
        echo "$BuildingID";
        $sql = "INSERT INTO room (Client,RoomNumber,BuildingID,Status) VALUES (:Client, :RoomNumber, :BuildingID, :Status)";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':Client', $param_name);
            $stmt->bindParam(':RoomNumber', $param_number);
            $stmt->bindParam(':BuildingID', $param_BuildingID);
            $stmt->bindParam(':Status', $param_Status);
            // Set parameters
            $param_name =$Client;
            $param_number = $RoomNumber;
            $param_BuildingID = $BuildingID;
            $param_Status =$Status;
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: status dorm client.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!($emptyClient_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="Client" class="form-control" value="<?php $echoClient; ?>">
                            <span class="help-block"><?php echo $Client_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($number_err)) ? 'has-error' : ''; ?>">
                            <label>Room number</label>
                            <input type="text" name="RoomNumber" class="form-control" value="<?php echo $RoomNumber; ?>">
                            <span class="help-block"><?php echo $RoomNumber_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($BuildingID_err)) ? 'has-error' : ''; ?>">
                            <label>Building Id</label>
                            <input type="text" name="BuildingID" class="form-control" value="<?php echo $BuildingID; ?>">
                            <span class="help-block"><?php echo $BuildingID_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($Status_err)) ? 'has-error' : ''; ?>">
                            <label>สถานะ</label>
                            <input type="text" name="Status" class="form-control" value="<?php echo $Status; ?>">
                            <span class="help-block"><?php echo $Status_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="status dorm client.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
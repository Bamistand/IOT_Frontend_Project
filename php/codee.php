<?php
session_start();
require 'dbcon.php';


    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $query = "SELECT * FROM users WHERE  name = '$name'";

    $query_run = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($query_run)){
        $dbname = $row['name'];
        $dbphone = $row['phone'];
    }

    if(empty($name) || empty($phone)){
        echo "Enter username or phone number";
    }else{
        if($dbname == $name && $dbphone == $phone){
            $_SESSION['message'] = "Login Successfully";
            // echo "Login success";
            
            ?>
            <?php
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Devices </title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <h4>Welcome
                        </h4> -->
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th style="display:none;"></th>
                                <th style="display:none;"> </th>
                                    <th>Device Name </th>
                                    <th>Schedule Time</th>
                                    <th>Job</th>
                                    <th>Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <form action ="nan.php" method = "post">
                                <?php 
                                $getuserid = "select * from users where name = '$name'";
                                $queryget = mysqli_query($con,$getuserid);
                                while($row = mysqli_fetch_array($queryget)){
                                    $dbuserid = $row['id'];
                                }
                                $stringname = (string)$dbuserid;
                                // echo $stringname;
                                echo "Welcome " . $name;
                                    $query = "SELECT * FROM deviceuser where user_id = '$stringname'";
                                    $query_run = mysqli_query($con, $query);
                                   
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        while($row = mysqli_fetch_array($query_run))
                                        {
                                            ?>
                                            <tr>
                                            <td style="display:none;"><input type = "text" name = "deviceid[]" value = "<?php echo $row['device_id']; ?>"  ></td>
                                            <td style="display:none;"><input type = "text" name = "userid[]" value = "<?php echo $row['user_id']; ?>" ></td>
                                                <td><input type = "text" class="form-control-plaintext border-0" name = "devicename[]" value = "<?php echo $row['device_name']; ?>" ></td>
                                               
                                                <td>
                                                <input type ="text" class="form-control" name = "stime[]"></td>
                                                <td>
                                                <input type ="text" class="form-control" name = "job[]"></td>
                                                <td>
                                                <input type ="text" class="form-control" name="status[]"></td>
                                                        
                                                        
                                        
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                 </tbody>
                        </table>
                                <input type ="submit" name="schedule" class="btn btn-info btn-sm " value="Schedule">
                                </form>
                           

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
function myFunction() {                                            
                                                     
  alert("Sucessfully Scheduled");
}
</script>

</body>
</html>
            <?php
        }else{
            
            echo "Login failed";
        }
    }
?>
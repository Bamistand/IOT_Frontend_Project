<?php
    session_start();
    $_SESSION['name']=$name; 
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
                        <h4>Welcome
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Device Name </th>
                                    <th>Schedule</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM devices";
                                    $query_run = mysqli_query($con, $query);
                                   
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $device)
                                        {
                                            ?>
                                            <tr>
                                                
                                                <td></td>
                                               
                                                <td>
                                                <select class="form-select form-select-sm">
                                                <option value=" ">Select time</option> 
                                                <option value="1">00:00</option> 
                                                <option value="2">00:15</option> 
                                                <option value="3">00:30</option> 
                                                <option value="4">00:45</option> 
                                                <option value="5">01:00</option> 
                                                <option value="6">01:15</option> 
                                               
                                               
                                                        </select>   
                                                        </td>
                                        
                                                <td>
                                                
                            <a href="#" class="btn btn-info btn-sm " onclick="myFunction()">Schedule</a>
                             
                                  
                                                </td>
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
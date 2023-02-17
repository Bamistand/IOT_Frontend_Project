<?php
    session_start();
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
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#" class="navbar-brand"> Admin</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Users</a>
                </li>
                <li class="nav-item">
                    <a href="device.php" class="nav-link">Devices</a>
                </li>
                <li class="nav-item">
                    <a href="map.php" class="nav-link">Map Devices</a>
                </li>
            </ul>
        </div>

    </nav>

    <form action = "<?=$_SERVER['PHP_SELF'];?>" method="POST" class="d-inline">       
    <div class="container mt-4">
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Assign Device
                        </h4>
                    </div>
                    <div class="card-body">
                                     
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>Device ID </th>
                                    <th>Device Name </th>
                                    <th>TUYA_DEVICE_ID </th>
                                    <th>User</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                    $query = "SELECT * FROM devices";
                                    $query_run = mysqli_query($con, $query);
                                    $userquery = "select * from users";
                                    $users_run = mysqli_query($con,$userquery);
                                    $userlist = array();
                                    $userlistid = array();
                                    $userid = 0;
                                    while($rowusers = mysqli_fetch_array($users_run)){
                                        $userlist[] = $rowusers['name'];
                                        $userlistid[] = $rowusers['id'];
                                    }
                                    $devicelist = array();
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        while($device = mysqli_fetch_array($query_run))
                                        {
                                            $devicelist = $device;
                                            ?>
                                            <tr>
                                            <td><?= $device['id']; ?></td>
                                                <td><?= $device['name']; ?></td>
                                                <td><?= $device['TUYA_DEVICE_ID']; ?></td>
                                                <td>
                                               
                                                <select id = "userspicked"  name = "userspicked" class="form-select form-select-sm">
                                                <option value=" ">Select User</option> 
                                          <?php 
                                          for($i=0;$i<count($userlist);$i++){
                                            ?>
                                            <option value="<?php  echo $userlist[$i]; ?>" name="users"><?php echo $userlist[$i]; ?></option> 
                                            <?php
                                            
                                            }
                                          ?>      
                                                </select>  
                                                         
                                                        </td>
                                        
                                                <td>
                                                
                            <a href="#" name = "assign" class="btn btn-info btn-sm " onclick="myFunction(<?= $device['id']; ?>,<?php ?>)">Assign</a>
                            <input type="submit"  class="btn btn-info btn-sm " name = "assign" value ="Assign">
                            
                             <a href="device_edit.php?id=<?= $device['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                               
                                                        <button type="submit" name="delete_device" value="<?=$device['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    
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
                                </form>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
function myFunction(X) {
var userpicked =  document.getElementById("userspicked");
var selectedvalue = userpicked.value;
                                                    
                                                     
  alert(X + " is allocated" + selectedvalue);
}
</script>

</body>
</html>

<?php
    
        if(isset($_POST['assign'])){
            $selectedvalue = $_POST['userspicked'];
            echo $selectedvalue;
            echo "<br>";
            
        }
    
?>
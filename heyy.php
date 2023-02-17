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

<?php  include("dbcon.php")?>
    <form action ="<?=$_SERVER['PHP_SELF'];?>" method="post" enctype="form-data/multipart">
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
                                <th>User ID </th>
                                    <th>User Name </th>
                                    <!-- <th>TUYA_DEVICE_ID </th>
                                    <th>User</th>
                                    <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
    <?php
    $devicequery = "select * from devices";
    $device_query = mysqli_query($con, $devicequery);
    $devicelist = array();
    $devicelistid = array();
    while($device = mysqli_fetch_array($device_query)){
        $devicelist[] = $device['name'];
        $devicelistid[] = $device['id'];
    }
    $userquery = "select * from users";
    $user_query = mysqli_query($con, $userquery);
    $userlist = array();
    $userlistid = array();
    while($using = mysqli_fetch_array($user_query)){
        $userlist[] = $using['name'];
        $userlistid[] = $using['id'];
    }
    ?>
<!-- <h3>Users Listed Below along with ids</h3> -->
<?php
    for($i=0;$i<count($userlist);$i++){
        ?>
         <tr>
                                            
                                                <td><?php echo $userlistid[$i]; ?></td>
                                                <td><?php echo $userlist[$i] ?></td>
                                                
    </tr>
        <!-- <input type ="text" name= "usersname[]" value="<?php echo $userlist[$i] ?>" />
        <input type = "text" name ="usernameid[]" value = "<?php echo $userlistid[$i]; ?>" />
        <br> -->
        <?php
    }
?>
<br>
<br>
    <table>
        <tr>
            
<td>
    

<table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>Device ID </th>
                                    <th>Device Name </th>
                                    <th>User ID</th>
            
                                </tr>
                            </thead>
                            <tbody>
    
    <?php  for ($i=0;$i<count($devicelist);$i++){
    ?>
    <tr>
                                            
                                            <td><input type="text" name="deviceid[]" value="<?php echo $devicelistid[$i]; ?>"/></td>
                                            <td><input type="text" name ="device[]" value="<?php echo $devicelist[$i]; ?>" /></td>
                                            <td> <input class="form-control" type="text" name = "use[]" id = "use"></td>
                                            
</tr>
    
   <!-- <br>
   
   <br>
   <input type="text" name = "use[]" id = "use">
<br>
   
   <br> --> 
   <?php
}
    ?></td>
</tr>

</table>
<br>
<input type = "submit"  class="btn btn-primary mb-2" name = "assign" value = "Assign" />
</form>

</body>
</html>

<?php
if(isset($_POST['assign'])){
   
    // for($i=0;$i<count($_POST['use']);$i++){
    //     echo $_POST['use'][$i];
    //     echo "<br>";
    //     echo "<br>";
    // }
    // for($i=0;$i<count($_POST['device']);$i++){
    //     echo $_POST['device'][$i];
    //     echo "<br>";
    // }



    for($i=0;$i<count($_POST['device']);$i++){
        
        $devicing = $_POST['device'][$i];
        $usersing = $_POST['use'][$i];
        $devicingid = $_POST['deviceid'][$i] ?? '';    
        
        // echo $devicing;
        // echo "<br>";
        // echo $usersing;
        // echo "<br>";
        // echo $devicingid;
        // echo "<br>";

       
       $insertusers = "insert into deviceuser(device_id,user_id) values('$devicingid','$usersing')";
        $insertdevice_query = mysqli_multi_query($con, $insertusers);
    
        // echo "done";
        // echo "<br>";
        // echo "<br>";
        
    }
    
}
?>


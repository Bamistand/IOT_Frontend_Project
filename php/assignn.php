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
<?php  include("dbcon.php")?>
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
                    <a href="php/device.php" class="nav-link">Devices</a>
                </li>
                <li class="nav-item">
                    <a href="assignn.php" class="nav-link">Assign Devices</a>
                </li>
            </ul>
        </div>

    </nav>
    <form action ="hello.php" method="post" enctype="form-data/multipart">
    <div class="container mt-4">
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h4>Assign Device
                        </h4>
                    </div> -->
                    <div class="card-body">
                                     
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>User ID </th>
                                    <th>User Name </th>
                                
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

<?php
    for($i=0;$i<count($userlist);$i++){
        ?>
        <tr>
       
       <td>  <input type = "text"  class="form-control-plaintext border-0" name ="usernameid[]" value = "<?php echo $userlistid[$i]; ?>" readonly/></td> 
       <td> <input type ="text" class="form-control-plaintext border-0" name= "usersname[]" value="<?php echo $userlist[$i] ?>" readonly/></td>
    </tr>
        <?php
    }
?>
<br>
<br>
     
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
    <td><input type="text" class="form-control-plaintext border-0" name="deviceid[]" value="<?php echo $devicelistid[$i]; ?>" readonly/></td>
  
    <td> <input type="text" class="form-control-plaintext border-0" name ="device[]" value="<?php echo $devicelist[$i]; ?>" readonly /></td>
    <td>
   <input type="text" class="form-control" name = "use[]" id = "use">
</td>
   
</tr>
   <?php
}
    ?></td>
</tr>

</table>
<br>
<input type = "submit" class="btn btn-primary mb-2" name = "assign" value = "Assign" />
</form>

</body>
</html>




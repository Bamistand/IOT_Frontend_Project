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
                    <a href="assignn.php" class="nav-link">Assign Devices</a>
                </li>
                <li class="nav-item">
                    <a href="bar.php" class="nav-link">History</a>
                </li>
            </ul>
        </div>

    </nav>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Device Details
                            <a href="device_create.php" class="btn btn-primary float-end">Register Device</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Device Name</th>
                                    <th>TUYA_DEVICE_ID </th>
                                    <th>Details</th>
                                    <th>Action</th>
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
                                                <td><?= $device['id']; ?></td>
                                                <td><?= $device['name']; ?></td>
                                                <td><?= $device['TUYA_DEVICE_ID']; ?></td>
                                                <td><?= $device['detail']; ?></td>
                                        
                                                <td>
                                                    <a href="device_view.php?id=<?= $device['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="device_edit.php?id=<?= $device['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_device" value="<?=$device['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
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

</body>
</html>
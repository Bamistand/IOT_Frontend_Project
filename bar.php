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
        <br>
        <br>
<?php
 
$dataPoints1 = array(
    array("label"=> "12/02/2023", "y"=> 200),
    array("label"=> "13/02/2023", "y"=> 200),
    array("label"=> "14/02/2023", "y"=> 200),
    array("label"=> "15/02/2023", "y"=> 230),
    array("label"=> "16/02/2023", "y"=> 200),
    array("label"=> "17/02/2023", "y"=> 200),
    array("label"=> "18/02/2023", "y"=> 200),
    array("label"=> "19/02/2023", "y"=> 200),
    array("label"=> "20/02/2023", "y"=> 200),
    array("label"=> "21/02/2023", "y"=> 200),
    
);
 
$dataPoints2 = array(
    array("label"=> "12/02/2023", "y"=> 280),
    array("label"=> "13/02/2023", "y"=> 280),
    array("label"=> "14/02/2023", "y"=> 280),
    array("label"=> "15/02/2023", "y"=> 270),
    array("label"=> "16/02/2023", "y"=> 280),
    array("label"=> "17/02/2023", "y"=> 280),
    array("label"=> "18/02/2023", "y"=> 250),
    array("label"=> "19/02/2023", "y"=> 280),
    array("label"=> "20/02/2023", "y"=> 280),
    array("label"=> "21/02/2023", "y"=> 280),
);
 

 
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
    title: {
        text: "Summary"
    },
    theme: "light2",
    animationEnabled: true,
    toolTip:{
        shared: true,
        reversed: true
    },
    axisY: {
        title: "Total Minutes",
        suffix: "mins"
    },
    legend: {
        cursor: "pointer",
        itemclick: toggleDataSeries
    },
    data: [
        {
            type: "stackedColumn",
            name: "System turned off",
            showInLegend: true,
            yValueFormatString: "#,##0 mins",
            dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
        },{
            type: "stackedColumn",
            name: "User left on",
            showInLegend: true,
            yValueFormatString: "#,##0 mins",
            dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
        },
        
    ]
});
 
chart.render();
 
function toggleDataSeries(e) {
    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
    } else {
        e.dataSeries.visible = true;
    }
    e.chart.render();
}
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                     
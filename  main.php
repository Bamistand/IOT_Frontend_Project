<?php
if(isset($_POST["schedule"])){
    $dname = $_POST['devicename'];
    $status = $_POST['status'];
    $time = $_POST['stime'];
    $job = $_POST['job'];

    echo $dname;
    echo "<br>";
    echo $status;
    echo "<br>";
    echo $time;
    echo "<br>";
    echo $job;
    echo "<br>";

}


?>
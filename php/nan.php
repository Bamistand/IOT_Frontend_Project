<?php
if(isset($_POST["schedule"])){
    include("dbcon.php");

    for($i=0;$i<count($_POST['devicename']);$i++){
        $dname = $_POST['devicename'][$i];
        $status = $_POST['status'][$i];
        $time = $_POST['stime'][$i];
        $job = $_POST['job'][$i];
        $did = $_POST['deviceid'][$i];
        $userid = $_POST['userid'][$i];


        // echo $dname;
        // echo "<br>";
        // echo $status;
        // echo "<br>";
        // echo $time;

        // echo "<br>";
        // echo $job;
        // echo "<br>";
        // echo $did;
        // echo "<br>";
        // echo $userid;
        // echo "<br>";

        $insertschedule = "insert into schedule(User_ID,device_id,time,job,status) values($userid,$did,'$time','$job','$status')";
        $insertschedule_query = mysqli_multi_query($con, $insertschedule);

        echo $dname ." is schedule to ". $time;
        echo "<br>";

    }
    

}


?>
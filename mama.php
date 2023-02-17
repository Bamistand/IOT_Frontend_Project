<?php
if(isset($_POST["schedule"])){

    for($i=0;$i<count($_POST['devicename']);$i++){
        $dname = $_POST['devicename'][$i];
        $status = $_POST['status'][$i];
        $time = $_POST['stime'][$i];
        $job = $_POST['job'][$i];
        $did = $_POST['deviceid'][$i];
        $userid = $_POST['user_id'][$i];


        echo $dname;
        echo "<br>";
        echo $status;
        echo "<br>";
        echo $time;

        echo "<br>";
        echo $job;
        echo "<br>";
        echo $did;
        echo "<br>";
        echo $userid;
        echo "<br>";

        // $insertusers = "insert into schedule(User_ID,device_id,time,job,status) values('$devicingid','$usersing','$devicing')";
        //     $insertdevice_query = mysqli_multi_query($con, $insertusers);

        //     echo $devicingid ." is allocated to ". $usersing;
    }
    

}


?>
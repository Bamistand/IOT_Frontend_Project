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

include("dbcon.php");



    for($i=0;$i<count($_POST['device']);$i++){
        
        $devicing = $_POST['device'][$i];
        $usersing = $_POST['use'][$i];
        $devicingid = $_POST['deviceid'][$i] ?? '';  
        
        $getdevice = "select * from deviceuser where device_id = '$devicingid'";
        $getdevice_query = mysqli_query($con, $getdevice);
        if(mysqli_num_rows($getdevice_query) > 0){
            while($row = mysqli_fetch_array($getdevice_query)){
                if($row['device_id'] == intval($devicingid)){
                    echo "Device with ID ". $devicingid . " is already allocated";
                    echo "<br>";
                }
                
            }
        }else{
            // echo "hey";
            // echo "<br>";
            echo $devicingid;
            echo "<br>";
            
            $insertusers = "insert into deviceuser(device_id,user_id,device_name) values('$devicingid','$usersing','$devicing')";
            $insertdevice_query = mysqli_multi_query($con, $insertusers);

            echo "Device ID ". $devicingid ." is allocated to user ID ". $usersing;
            echo "<br>";
        }
        
        
        
        // echo $devicingid;
        // echo "<br>";
       

        // echo $devicing;
        // echo "<br>";
        // echo $usersing;
        // echo "<br>";
        // echo $devicingid;
        // echo "<br>";
        // // echo $devicingid ." is allocated to ". $usersing;
        // // echo "<br>";

       
    
        // echo "done";
        // echo "<br>";
        // echo "<br>";

        
        // echo "<br>";
        
    }
    
}
?>


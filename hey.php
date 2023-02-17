<html>
<head>
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js">
        </script>
        <script>
$(document).ready(function(){
    $("p").click(function(){
        alert("The paragraph was clicked");
    });
});

$(".btn").click(function(){
    alert($(this).data("value"));
});
</script>
</head>
<body>
<?php  include("dbcon.php")?>
    <form action ="hello.php" method="post">
    
    <?php
    $devicequery = "select * from devices";
    $device_query = mysqli_query($con, $devicequery);
    $devicelist = array();
    $devicelistid = array();
    while($device = mysqli_fetch_array($device_query)){
        $devicelist[] = $device['name'];
        $devicelistid[] = $device['id'];
    }
    $userquery = "select * from devices";
    $user_query = mysqli_query($con, $userquery);
    $userlist = array();
    $userlistid = array();
    while($using = mysqli_fetch_array($user_query)){
        $userlist[] = $using['name'];
        $userlistid[] = $using['id'];
    }
    ?>
    <table>
        <tr>
<td><?php  for ($i=0;$i<count($devicelist);$i++){
    ?>
   <input type="text" name ="device[]" value="<?php echo $devicelist[$i]; ?>" />
   <br>
   <input type="text" name = "use[]" id = "use">
<br>
   
   <br>
   <?php
}
    ?></td>
</tr>

</table>
<br>
<input type = "submit" name = "assign" value = "Assign" />
</form>
<p>Click on this paragraph.</p>

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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);
    $stmt = $con->prepare("insert into deviceuser(device_id,user_id) values(?,?)");
    $stmt -> bind_param("sss",$biscuit,$chin);

    for($i=0;$i<count($_POST['device']);$i++){
        $devicing = $_POST['device'][$i];
        $usersing = $_POST['use'][$i];
        echo $devicing;
        echo "<br>";
        echo $usersing;
        echo "<br>";
       
        $biscuit = $_POST['device'][$i];
        $chin = $_POST['use'][$i];

        $stmt -> execute();
        
        echo "Done";
        
    
        
    }
    
}
?>


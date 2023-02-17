<html>
<head>

</head>
<body>
<?php  include("dbcon.php")?>
    <form action ="hello.php" method="post" enctype="form-data/multipart">
    
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
<h3>Users Listed Below along with ids</h3>
<?php
    for($i=0;$i<count($userlist);$i++){
        ?>
        <input type ="text" name= "usersname[]" value="<?php echo $userlist[$i] ?>" />
        <input type = "text" name ="usernameid[]" value = "<?php echo $userlistid[$i]; ?>" />
        <br>
        <?php
    }
?>
<br>
<br>
    <table>
        <tr>
            
<td><?php  for ($i=0;$i<count($devicelist);$i++){
    ?>
    <input type="text" name="deviceid[]" value="<?php echo $devicelistid[$i]; ?>"/>
   <br>
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

</body>
</html>




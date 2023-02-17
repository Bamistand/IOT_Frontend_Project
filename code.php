<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_user']))
{
    $user_id = mysqli_real_escape_string($con, $_POST['delete_user']);

    $query = "DELETE FROM users WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_user']))
{
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);

    $query = "UPDATE users SET name='$name', address='$address', phone='$phone'  WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_user']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);


    $query = "INSERT INTO users (name,address,phone) VALUES ('$name','$address','$phone')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "User Created Successfully";
        header("Location: user_create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Created";
        header("Location: user_create.php");
        exit(0);
    }
}


if(isset($_POST['save_device']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $tuya = mysqli_real_escape_string($con, $_POST['TUYA_DEVICE_ID']);
    $detail = mysqli_real_escape_string($con, $_POST['detail']);


    $query = "INSERT INTO devices (name,TUYA_DEVICE_ID,detail) VALUES ('$name','$tuya','$detail')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Device registered Successfully";
        header("Location: device_create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Device Not Registered";
        header("Location: device_create.php");
        exit(0);
    }
}

if(isset($_POST['delete_device']))
{
    $device_id = mysqli_real_escape_string($con, $_POST['delete_device']);

    $query = "DELETE FROM devices WHERE id='$device_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Device Deleted Successfully";
        header("Location: device.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Device Not Deleted";
        header("Location: device.php");
        exit(0);
    }
}

if(isset($_POST['update_device']))
{
    $device_id = mysqli_real_escape_string($con, $_POST['device_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $tuya = mysqli_real_escape_string($con, $_POST['TUYA_DEVICE_ID']);
    $detail = mysqli_real_escape_string($con, $_POST['detail']);

    $query = "UPDATE devices SET name='$name', TUYA_DEVICE_ID='$tuya', detail='$detail'  WHERE id='$device_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Device Updated Successfully";
        header("Location: device.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Device Not Updated";
        header("Location: device.php");
        exit(0);
    }

}


    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $query = "SELECT * FROM users WHERE  name = '$name' AND phone = '$phone'";
    
    $query_run = mysqli_query($con, $query);
    if (mysqli_num_rows($query_run) > 0) 
    {
        
        $_SESSION['message'] = "Login Successfully";
        echo "hey";
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Created";
        echo "failed";
        exit(0);
    }


?>
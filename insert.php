<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="coin.css">
    <center><h1><p class="text-primary"><font color=#66FFCC>เพิ่มเหรียญสำเร็จ</font></p></center></h1>

    <center><h2><form method="post" action="main.html">
        <input type="submit"  value="กลับหน้าหลัก"class="btn btn-success"><br><br>
    </form><h2></center><h2>

    <style>
        body{
            background-image: url("https://sv1.picz.in.th/images/2021/03/26/D6RReW.jpg");
            background-size: cover;
        }
        </style>

<?php
    // connect database 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "coinshop";
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
    $mysqli->set_charset("utf8");

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
        // connect success, do nothing
        // echo "Connect success.";
    }
    if(isset($_POST['upload']))
{
    $coinname = $_POST['coinname'];
    $detail = $_POST['detail'];
    $Price = $_POST['Price'];
    $images = $_FILES['images']['name'];
    $target = "images/".basename($images);

    $sql = mysqli_query($mysqli,"INSERT INTO coin_shop VALUES ('$coinname', '$detail' , '$Price','$images')");
    if (move_uploaded_file($_FILES['images']['tmp_name'], $target)) {
    }
}
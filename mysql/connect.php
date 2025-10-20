<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
echo"Connected successfully";

$database="goetel22";
$sql= "create database $database";
if(mysqli_query($conn, $sql)){
    echo " database created succesfully";
}else{echo"error creating database" . mysqli_error($conn);
}
if(mysqli_select_db($conn, $database)){
    echo"database $database $database selected";
}else{echo"error select database:".mysqli_error($conn);}
?>

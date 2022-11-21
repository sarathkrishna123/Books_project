<?php
$con = mysqli_connect("localhost","root","","books");
if($con === false){
    die("Error: Cannot connect".mysqli_connect_error());
}
?>
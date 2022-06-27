<?php
session_start();

$con = mysqli_connect("localhost", "nikhil", "1234", "test")or die("Server Not Found" .mysqli_error($con));

?>
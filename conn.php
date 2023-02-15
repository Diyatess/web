<?php
$conn= new mysqli("localhost","root","","sample");
if($conn->connect_error)
{
    die("connection failed...".$conn->connect_error);
}
?>
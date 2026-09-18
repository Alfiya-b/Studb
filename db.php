<?php
$conn = new mysqli("localhost","root","","college");
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}

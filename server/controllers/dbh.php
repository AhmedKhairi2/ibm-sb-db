<?php

$serverName = 'localhost';
$dBusername = 'root';
$dBpassword = 'admin123';
$dBname = 'users_data';

$conn = mysqli_connect($serverName, $dBusername, $dBpassword,$dBname);

if (!$conn)
{
    die("Connection to Database failed: " . mysqli_connect_error());
}
<?php

$db = mysqli_connect("localhost","root","","hoteldb");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
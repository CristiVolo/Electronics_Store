<!--Database Handler - this file handles the connection to the database-->
<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpproject01";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
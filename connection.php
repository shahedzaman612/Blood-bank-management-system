<?php
$host = 'db'; // <-- use the service name from docker-compose.yml
$user = 'root';
$pass = '';
$db = 'mypro_bbms';

$con = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_errno())
{
    echo "Failed to connect to server/database: ".mysqli_connect_error();
}

?>
<?php
session_start();
if(!isset($_SESSION['un']))
{
    header("Location:index.php");
    exit();
}
?>
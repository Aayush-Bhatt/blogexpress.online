<?php 
$server_name="localhost";
$username="root";
$password="";
$database_name="databaseblog";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("connection failed:". mysqli_connect_error());

}

<?php
$username="root";
$password="";
$host="localhost";
$connection=new mysqli($host,$username,$password,$database);

if($connection->connect_error)
{
    die("connection is error");
}

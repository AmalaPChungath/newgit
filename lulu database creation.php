<?php
$cc=new mysqli("localhost","root","");
if($cc->connect_error)
{
die("Connection failed:".$cc->connect_error);
}
else
{
echo "Connection successfull";
}
$s="CREATE DATABASE Lulu_Hypermarket";
if($cc->query($s)==TRUE)
{
echo "Database created succesfully with the name Lulu Hypermarket";
}
else
{
"Error creating database".$cc->error;
}
$cc->close();
?>

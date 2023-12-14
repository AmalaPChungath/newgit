<?php
$conn=new mysqli("localhost","root","","Lulu_Hypermarket");
if($conn->connect_error)
{
die("Connection failed:".$conn->connect_error);
}
else
{
echo "Connection successfull";
}
$al="ALTER TABLE Product_details ADD(manufacture_name VARCHAR(50))";
if($conn->query($al)==TRUE)
{
echo "Table Product details altered succesfully";
}
else
{
"Error altering table".$conn->error;
}
$conn->close();
?>

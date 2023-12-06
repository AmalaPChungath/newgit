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
$sl="CREATE TABLE Product_details(id INT(2) PRIMARY KEY AUTO_INCREMENT,item_name VARCHAR(50),quantity INT(3) NOT NULL,unit_price DECIMAL(7,3) NOT NULL,manufacture_date DATE NOT NULL,expiry_date DATE NOT NULL)";
if($conn->query($sl)==TRUE)
{
echo "Table Product details created succesfully";
}
else
{
"Error creating table".$conn->error;
}
$conn->close();
?>

<?php
$conn=new mysqli("localhost","root","","Lulu_Hypermarket");
if($conn->connect_error)
{
die("Connection failed:".$conn->connect_error);
}
$sql="SELECT * FROM Product_details";
$result=$conn->query($sql);
if($result->num_rows>0)
{
echo "<center><table border='1'><tr><th>Id</th><th>Item Name</th><th>Quantity</th><th>Unit Price</th><th>Manufacture Date</th><th>Expiry Date</th></tr>";
while($row=$result->fetch_assoc())
{
echo "<tr><td>".$row["id"]."</td><td>".$row["item_name"],"</td><td>".$row["quantity"],"</td><td>".$row["unit_price"],"</td><td>".$row["manufacture_date"],"</td><td>".$row["expiry_date"],"</td></tr><br>";
}
echo"</table></center>";
}
else
{
echo "0 results";
}
$conn->close();
?>

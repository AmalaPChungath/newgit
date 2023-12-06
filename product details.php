<html>
<?php
$conn=new mysqli("localhost","root","","Lulu_Hypermarket");
?>
<title>LULU Hypermarket</title>
<body>
<center>
<h1 style="color:green" >LULU Hypermarket</h1>
<form method='post'>
	<table cellpadding="10">
		<tr>
			<th>Item Name</th>
			<th>Quantity</th>
			<th>Unit Price</th>
			<th>Manufacture Date</th>
			<th>Expiry Date</th>
		</tr>
		<?php
		for($i=1;$i<6;$i++)
		{
		$name="name".$i;
                $quant="quant".$i;
                $unitprice="unitprice".$i;
                $manudate="manudate".$i;
                $exdate="exdate".$i;
		?>
		<tr>
			<td><input type="text" placeholder="item name" name="<?php echo $name ?>"></td>
			<td><input type="number" placeholder="Quantity" name="<?php echo $quant ?>"></td>
			<td><input type="number" placeholder="Unit Price" name="<?php echo $unitprice ?>"></td>
			<td><input type="date" placeholder="Manufature date" name="<?php echo $manudate ?>"></td>
			<td><input type="date" placeholder="Expiry Date" name="<?php echo $exdate ?>"></td>
		</tr>
		<?php
		}
		?>
	</table>
	<input type="submit" value="submit" name="sub">
</form>
</center>
<?php
if(isset($_POST['sub']))
{
$i=1;
for($i=1;$i<6;$i++)
{
$name="name".$i;
$quant="quant".$i;
$unitprice= "unitprice".$i;
$manudate="manudate".$i;
$exdate="exdate".$i;
$ins1="insert into Product_details(item_name,quantity,unit_price,manufacture_date,expiry_date) values('$_POST[$name]','$_POST[$quant]','$_POST[$unitprice]','$_POST[$manudate]','$_POST[$exdate]')";
            
$q1=$conn->query($ins1);
}
}
$conn->close();
?>
</body>
</html>

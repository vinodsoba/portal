<?php 
include('header.php');
include('connect.php');

$productcode =  $_POST['prod_code']; 
$brandname =  $_POST['brand_name'];

$ebayfees =  10;

?>
<div id="display-content"></div>
<table>
	<tr>
		<td><h3>Product Code:</h3></td><td width="231"><h3>Product Name:</h3></td><td width="231"><h3>Brand:</h3></td><td><h3>Manufacturer:</h3></td><td><h3>AM Price</h3></td><td><h3>UK Retail</h3></td>
	</tr>




<?php

if(isset($_POST['prod_code']) == true){
	$qry = "SELECT * from product where prod_code LIKE '%$productcode%' AND brand_name LIKE '%$brandname%'";
	$result=$conn->prepare($qry);
	$result->execute();
	while($row=$result->fetch(PDO::FETCH_ASSOC)){
		echo '<tr>';
		echo '<td>'.$productcode = $row['prod_code'].'</</td>';
		echo '<td>'. $productname = $row['prod_name'] .'</td>';
		echo '<td>'. $brandname = $row['brand_name'] . '</td>';
		echo '<td>'. $manuname = $row['manu_name'] .'</td>';
			$amprice = $row['am_price'];
			$ukprice = $row['uk_retail'];
		echo '<td>'. htmlentities($amprice , ENT_QUOTES, "ISO-8859-1") .'</td>';
		echo '<td>'. htmlentities($ukprice , ENT_QUOTES, "ISO-8859-1") .'</td>';

	}
}
?>
</tr>
</table>

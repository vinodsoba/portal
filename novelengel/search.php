<?php 
include('header.php');
include('connect.php');

$productcode =  $_POST['item_id']; 
$productname =  $_POST['name']; 
$brandname =  $_POST['brand'];

$ebayfees =  10;

?>
<div id="display-content"></div>
<table cellpadding="10" cellspacing="20">
	<tr>
		<td><strong>Item ID:</strong></td><td ><strong>Brand:</strong></td><td><strong>Name:</strong></td><td><strong>Description:</strong></td><td><strong>EAN 1:</strong></td><td><strong>Price</strong></td></tr>

<?php

if(isset($_POST['item_id']) == true){
	$qry = "SELECT * from ne_catalog where item_id LIKE '%$productcode%' AND name LIKE '%$productname%' AND brand LIKE '%$brandname%'";
	$result=$conn->prepare($qry);
	$result->execute();
	while($row=$result->fetch(PDO::FETCH_ASSOC)){
		echo '<tr>';
		echo '<td>'. $itemId = $row['item_id'] .'</td>';
		echo '<td>'.$productBrand = $row['brand'].'</</td>';		
		echo '<td>'.$productName = $row['name'].'</</td>';
		echo '<td>'. $desc= $row['description'] . '</td>';
		echo '<td>'. $ean1 = $row['ean'] .'</td>';
		echo '<td>'.$price = $row['price'] .'</td>';
		//echo '<td>'. htmlentities($amprice , ENT_QUOTES, "ISO-8859-1") .'</td>';
		//echo '<td>'. htmlentities($ukprice , ENT_QUOTES, "ISO-8859-1") .'</td>';

	}




	/*$qry2 = "SELECT * from ne_skincare_makeup where item_id LIKE '%$productcode%' AND brand LIKE '%$brandname%'";
	$result=$conn->prepare($qry2);
	$result->execute();
	while($row=$result->fetch(PDO::FETCH_ASSOC)){
		echo '<tr>';
		echo '<td>'.$productBrand = $row['brand'].'</</td>';
		echo '<td>'. $itemId = $row['item_id'] .'</td>';
		echo '<td>'. $desc= $row['description'] . '</td>';
		echo '<td>'. $ean1 = $row['ean_1'] .'</td>';
		echo '<td>'.$price = $row['price'] .'</td>';
		//echo '<td>'. htmlentities($amprice , ENT_QUOTES, "ISO-8859-1") .'</td>';
		//echo '<td>'. htmlentities($ukprice , ENT_QUOTES, "ISO-8859-1") .'</td>';

	}*/
}
?>
</tr>
</table>
<a href="http://localhost/portal/novelengel">Back</a>

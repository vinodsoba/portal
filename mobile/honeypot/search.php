<?php 
include('header.php');
?>
<div data-role="page">
	<div data-role="header">
		<h2>Results Below</h2>
	</div> 
	
<div data-role="content" data-theme="b">


<?php
include('connect.php');

$sku =  $_POST['sku']; 
$brandname =  $_POST['brand'];
$prodname =  $_POST['product_name'];


$ebayfees =  10;

?>
<div id="display-content"></div>
<table>
	<tr>
		<td><h3>Sku:</h3></td><td width="231"><h3>Product Name:</h3></td><td width="231"><h3>Brand:</h3></td><td><h3>Category:</h3></td><td><h3>Price:</h3></td>
	</tr>

<?php

if(isset($_POST['sku']) == true){

	$qry = "SELECT * from product_honeypot where sku LIKE '%$sku%' AND brand LIKE '%$brandname%' AND product_name LIKE '%$prodname%'";
	$result=$conn->prepare($qry);
	$result->execute();
	while($row=$result->fetch(PDO::FETCH_ASSOC)){
		echo '<tr>';
		echo '<td>'.$sku = $row['sku'].'</</td>';
		echo '<td>'. $productname = $row['product_name'] .'</td>';
		echo '<td>'. $brandname = $row['brand'] . '</td>';
		echo '<td>'. $category = $row['category'] .'</td>';
			$price = $row['price'];
		echo '<td>'. htmlentities($price , ENT_QUOTES, "ISO-8859-1") .'</td>';


	}
}
?>
</tr>
</table>
</div>
</div>
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

$itemId =  $_POST['item_id']; 
$brand =  $_POST['brand'];
$description =  $_POST['description'];


$ebayfees =  10;

?>
<div id="display-content"></div>
<table>
	<tr>
		<td><h3>Item No:</h3></td><td width="231"><h3>Product Name:</h3></td><td width="231"><h3>Brand:</h3></td><td><h3>Price:</h3></td>
	</tr>

<?php

if(isset($_POST['item_id']) == true){

	$qry = "SELECT * from ne_perfumes where item_id LIKE '%$itemId%' AND brand LIKE '%$brand%' AND description LIKE '%$description%'";
	$result=$conn->prepare($qry);
	$result->execute();
	while($row=$result->fetch(PDO::FETCH_ASSOC)){
		echo '<tr>';
		echo '<td>'.$itemId = $row['item_id'].'</</td>';
		echo '<td>'. $description = $row['description'] .'</td>';
		echo '<td>'. $brand = $row['brand'] . '</td>';
			$price = $row['price'];
		echo '<td>'. htmlentities($price , ENT_QUOTES, "ISO-8859-1") .'</td>';


	}
}
?>
</tr>
</table>
</div>
</div>
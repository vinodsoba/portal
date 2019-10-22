<?php
include('header.php');
include('connect.php');

$sku =  $_POST['sku'];
$hpprice = $_POST['price']; 
$qty = $_POST['each_per_unit'];
$ourprice = $_POST['our_price'];
$shipping = $_POST['shipping'];
$ebayfees =  10;


if($_POST['submit']){
if (!preg_match('/^[0-9].*$/', $_POST['am_price'])){
	echo 'Only numeric value required for price' .'<br>';

 
if (empty($_POST['our_price'])){
		echo 'please enter a price' .'<br>';
		
}	
	
if (empty($_POST['am_price'])){
		echo 'please enter a pricing' .'<br>';

}
} 
}

if($_POST['submit']){	
	if(isset($_POST['sku'])){
		$qry = "SELECT product_name, price from product_honeypot where sku like '$sku'";
		$result=$conn->prepare($qry);
		$result->execute();
		while($row=$result->fetch(PDO::FETCH_ASSOC)){
			$prodname = $row['product_name'];
			$amprice = $row['price'];
			$amprice1 = str_replace(utf8_decode("£"),"&pound;",$amprice);			
			$priceperunit = $hpprice / $qty;
			$formatted = sprintf("%01.2f",	$priceperunit);
			echo "<form  id='myForm' name='myForm' method='POST'><tr><td><label>Product Code:</label></td><td><input type='text' id='sku' name='sku' value='" .$sku ."'></td>";
			echo "<td><label>Product Name:</label><td><td><input type='text' name='prodname' value='" .str_replace("'", "", $prodname)."''></td>";
			echo "<td><label>Buying Price:</label></td><td><input type='text' name='buying_price' value='" .$amprice1 ."'></td>";								
			echo "<td><label>QTY:</label></td><td><input type='text' name='qty' value='". $qty . "'></td>";
			echo "<td><label>Price Per Unit:</label></td><td><input type='text' name='price_per_unit' value='£". $formatted . "'></td>";
			echo "<td><label>Our Price:</label></td><td><input type='text' name='our_price' value='".$ourprice ."'></td>";
			$ebayResult = $ourprice * 10/100;
			echo "<td><label>Ebay Result:</label></td><td><input type='text' name='ebay_result' value='" . $ebayResult ."'></td>";
			$ourpriceminusebayfees = $ourprice - $ebayResult;
			echo "<td><label>After Ebay Fees:</label></td><td><input type='text' name='after_ebay_fees' value='" .$ourpriceminusebayfees ."'></td>";
			$paypalResult = $ourpriceminusebayfees * 3.4/100+0.2;
			echo "<td><label>Paypal Fees:</label></td><td><input type='text' name='paypal' value='" . $paypalResult . "'></td>";
			$after_all_fees = $ourpriceminusebayfees - $paypalResult;
			echo "<td><label>After All Fees:</label></td><td><input type='text' name='after_fees' value='". $after_all_fees ."'></td>";
			$feessftershipping = $after_all_fees - $shipping;
			echo "<td><label>Fees after Shipping:</label></td><td><input type='text' name='shipping' value='" .$feessftershipping ."'></td>";
			$profit = $feessftershipping - $formatted;
			
			if($profit < 0){
					
					echo "<h2>Profit per unit</h2><input type='text' name='profit_per_item' style='color:red' value='" . $profit . "'>";
			}
			else if ($profit > 0){

					echo "<h2>Profit per unit</h2><input type='text' name='profit_per_item' style='color:blue' value='" . $profit . "'>";
			}
			$bulkprofit = $profit * $qty;
			echo "<td><label>Profit Total Items:</label></td><td><input type='text' name='profit_bulk' value='" . $bulkprofit ."'></td>";
			echo "<td><label>Created Date:</label></td><td><input type='text' name='creation_date' value='" . date('Y-m-d H:i:s') ."'></td>";
			
		}//close while loop
		} //close prod_code				
	echo "<td><input type='submit' name='submit' value='add'></td></tr></form>";
}//closing submit

?>		

<div id="loadResponse"></div>

				
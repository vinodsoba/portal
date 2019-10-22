<?php
include('header.php');
include('connect.php');

$productcode =  $_POST['prod_code'];
$amprice2 = $_POST['am_price']; 
$qty = $_POST['each_per_unit'];
$ourprice = $_POST['our_price'];
$shipping = $_POST['shipping'];
$ebayfees =  10;

/*$id = $_POST['id']; 
	$productcode =  $_POST['product_code']; 
	$productname =  $_POST['product_name']; 
	$productbrand =  $_POST['product_brand']; 
	

	$paypal =  $_POST['paypal'];  
	$afterfees =  $_POST['after_fees']; 
	
	$profitperitem =  $_POST['profit_per_item']; 
	$profitbulk =  $_POST['profit_bulk']; 
*/

//$heading = array('id', 'product_code', 'product_name', 'product_brand', 'buying_price', 'each_per_unit', 'our_price', 'ebay_fees', 'after_ebay_fees', 'paypal', 'after_fees', 'shipping', 'profit_per_item', 'profit_bulk');

//$company_heading = array('company_id', 'company_name', 'date_of_order', 'buy_in_total', 'shipping_total', 'total_inc_shipping', 'vat_20%', 'total_inc_vat');

/*
*/
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
	if(isset($_POST['prod_code'])){
		$qry = "SELECT prod_name, am_price from product where prod_code like '$productcode'";
		$result=$conn->prepare($qry);
		$result->execute();
		while($row=$result->fetch(PDO::FETCH_ASSOC)){
			$prodname = $row['prod_name'];
			$amprice = $row['am_price'];
			$amprice1 = str_replace(utf8_decode("£"),"&pound;",$amprice);			
					
			echo "<form  id='myForm' name='myForm' method='POST'><tr><td><label>Product Code:</label></td><td><input type='text' id='sku' name='productcode' value='" .$productcode ."'></td>";
			echo "<td><label>Product Name:</label><td><td><input type='text' name='prodname' value='" .$prodname."''></td>";
			echo "<td><label>Buying Price:</label></td><td><input type='text' name='buying_price' value='" .$amprice1 ."'></td>";								
			echo "<td><label>QTY:</label></td><td><input type='text' name='qty' value='". $qty . "'></td>";
			echo "<td><label>Price Per Unit:</label></td><td><input type='text' name='price_per_unit' value='". $amprice1 . "'></td>";
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
			$profit = $feessftershipping - $amprice2;
			
			if($profit <= 0){

					echo "<h2>Profit per unit</h2><input type='text' name='profit_per_item' style='color:red' value='" . $profit . "'>";
			}
			else if ($profit >= 0){
					echo "<h2>Profit per unit</h2><input type='text' name='profit_per_item' style='color:blue' value='" . $profit . "'>";
			}
			
		}//close while loop
		} //close prod_code				
	echo "<td><input type='submit' name='submit' value='add'></td></tr></form>";
}//closing submit

?>		

<div id="loadResponse"></div>

				
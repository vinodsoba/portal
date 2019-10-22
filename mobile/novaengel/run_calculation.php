<?php 
include("header.php");
?>
<div data-role="page">
	<div data-role="header">
		<h2>Results Below</h2>
	</div> 
	
<div data-role="content" data-theme="b">

<?php
include('connect.php');

$productId =  $_POST['item_id'];
$hpprice = $_POST['price']; 
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

if($_POST['submit']){
if (!preg_match('/^[0-9].*$/', $_POST['price'])){
	echo 'Only numeric value required for price' .'<br>';
 
if (empty($_POST['price'])){
		echo 'please enter a price' .'<br>';		
}		
if (empty($_POST['price'])){
		echo 'please enter a pricing' .'<br>';
  }
 }   
}*/

if($_POST['submit']){	
	if(isset($_POST['item_id'])){
		$qry = "SELECT item_id, description, price, brand from ne_perfumes where item_id like '$productId'";
		$result=$conn->prepare($qry);
		$result->execute();
		while($row=$result->fetch(PDO::FETCH_ASSOC)){
			$brand =$row['brand'];
			$prodname = $row['description'];
			$buyingprice = $row['price'];			
			$priceperunit = $hpprice / $qty;
			$formatted = sprintf("%01.2f",	$priceperunit);	
			 $name = "{$brand} {$prodname}";  			
					
			echo "<form action='process_upload.php' id='myForm' name='myForm' method='POST'><fieldset><tr><td><label>Product Code:</label></td><td><input type='text' id='item_id' name='sku' value='" .$productId ."'></td>";
			echo "<td><label>Product Name:</label><td><td><input type='text' name='description' value='" .$name."''></td>";
			echo "<td><label>Buying Price:</label></td><td><input type='text' name='buying_price' value='" .$hpprice ."'></td>";								
			echo "<td><label>QTY:</label></td><td><input type='text' name='qty' value='". $qty . "'></td>";
			echo "<td><label>Price Per Unit:</label></td><td><input type='text' name='price_per_unit' value='". $formatted . "'></td>";
			echo "<td><label>Our Price:</label></td><td><input type='text' name='our_price' value='".$ourprice ."'></td>";
			$ebayResult = $ourprice * 10/100;
			echo "<td><label>Ebay Result:</label></td><td><input type='text' name='ebay_result' value='" . $ebayResult ."'></td>";
			$ourpriceminusebayfees = $ourprice - $ebayResult;
			echo "<td><label>After Ebay Fees:</label></td><td><input type='text' name='after_ebay_fees' value='" .sprintf("%01.2f", $ourpriceminusebayfees)."'></td>";
			$paypalResult = $ourpriceminusebayfees * 3.4/100+0.2;
			echo "<td><label>Paypal Fees:</label></td><td><input type='text' name='paypal' value='" . $paypalResult . "'></td>";
			$after_all_fees = $ourpriceminusebayfees - $paypalResult;
			echo "<td><label>After All Fees:</label></td><td><input type='text' name='after_fees' value='".sprintf("%01.2f",  $after_all_fees)."'></td>";
			$feessftershipping = $after_all_fees - $shipping;
			echo "<td><label>Fees after Shipping:</label></td><td><input type='text' name='shipping' value='".sprintf("%01.2f", $feessftershipping)."'></td>";
			$vat = $feessftershipping * 20/100;
			$addedVat = $feessftershipping + $vat; 
			echo "<td><label>20% VAT added:</label></td><td><input type='text' name='shipping' value='".sprintf("%01.2f", $addedVat)."'></td>";
			// BBop Comms @ 15% 
			$bbopComms = $addedVat * 15/100;
			$bbopPrice = $addedVat + $bbopComms;
			echo "<td><label>BBOP Commision: @ 15%</label></td><td><input type='text' name='finalprice' value='".sprintf("%01.2f", $bbopPrice)."'></td>";
			$profit = $feessftershipping - $formatted;
			
			if($profit < 0){
					
					echo "<h2>Profit per unit</h2><input type='text' name='profit_per_item' style='color:red' value='" . $profit . "'>";
			}
			else if ($profit > 0){

					echo "<h2>Profit per unit</h2><input type='text' name='profit_per_item' style='color:blue' value='" . $profit . "'>";
			}
			$bulkprofit = $profit * $qty;
			echo "<td><label>Profit Total Items:</label></td><td><input type='text' name='profit_bulk' value='".$bulkprofit."'></td>";
			echo "<td><label>Created Date:</label></td><td><input type='text' name='creation_date' value='" . date('Y-m-d H:i:s') ."'></td>";
			
		}//close while loop
		} //close prod_code				
	echo "<td><input type='submit' name='submit' value='add'></td></tr><fieldset></form>";



	
}//closing submit

?>	

</div>	
</div>

				
<?php

include("connect.php");

$sku = $_POST['productcode'];
$prodname = $_POST['prodname'];
$amprice1 = $_POST['buying_price'];
$qty = $_POST['qty'];
$priceperunit = $_POST['price_per_unit'];
$ourprice = $_POST['our_price'];
$ebayresult = $_POST['ebay_result'];
$afterebayfees = $_POST['after_ebay_fees'];
$paypal = $_POST['paypal'];
$afterfees = $_POST['after_fees'];
$shipping = $_POST['shipping'];
$profit = $_POST['profit_per_item'];
$profitbulk = 27.00;


$sql10 = "SELECT sku FROM product_calc WHERE sku = '$sku'";

$RTH=$conn->prepare($sql10);

$RTH->execute();
$row=$RTH->rowCount();

if ($row > 0){

	echo "No record inserted. already in db " .$sku ."<br>";
}
else {
	
	$sql1=("INSERT into product_calc (id, sku, prod_name, buying_price, qty, price_per_unit, our_price, ebay_result, after_ebay_fees, paypal, after_fees, shipping, profit_per_item, profit_bulk) VALUES ('$id', '$sku', '$prodname',  '$amprice1', '$qty', '$priceperunit', '$ourprice', '$ebayresult',  '$afterebayfees', '$paypal', '$afterfees', '$shipping', '$profit', '$profitbulk')");
	
	$PTH=$conn->prepare($sql1);
	$PTH->execute();
	$row=$PTH->rowCount();
	echo "1 record inserted" ."<br>";
}




/*

$_root_category = $_POST['_root_category'];
$_product_websites = $_POST['_product_websites'];
$created_at = $_POST['created_at'];
$description = $_POST['description'];
$gift_wrapping_available = $_POST['gift_wrapping_available'];
$has_options = $_POST['has_options'];
$image = $_POST['image'];
$msrp_display_actual_price_type = $_POST['msrp_display_actual_price_type'];
$msrp_enabled = $_POST['msrp_enabled'];
$name = $_POST['name'];
$options_container = $_POST['options_container'];
$page_layout = $_POST['page_layout'];
$price = $_POST['price'];
$product_brand = $_POST['product_brand'];
$required_options = $_POST['required_options'];
$short_description= $_POST['short_description'];
$small_image = $_POST['small_image'];
$status = $_POST['status'];
$tax_class_id = $_POST['tax_class_id'];
$thumbnail = $_POST['thumbnail'];
$updated_at = $_POST['updated_at'];
$url_key = $_POST['url_key'];
$url_path = $_POST['url_path'];
$visibility = $_POST['visibility'];
$weight = $_POST['weight'];
$width = $_POST['width'];
$qty = $_POST['qty'];
$min_qty = $_POST['min_qty'];
$use_config_min_qty = $_POST['use_config_min_qty'];
$is_qty_decimal = $_POST['is_qty_decimal'];
$backorders = $_POST['backorders'];
$use_config_backorders = $_POST['use_config_backorders'];
$min_sale_qty = $_POST['min_sale_qty'];
$use_config_min_sale_qty = $_POST['use_config_min_sale_qty'];
$max_sale_qty = $_POST['max_sale_qty'];
$use_config_max_sale_qty = $_POST[' use_config_max_sale_qty '];
$is_in_stock = $_POST[' is_in_stock '];
$notify_stock_qty = $_POST[' notify_stock_qty '];
$use_config_notify_stock_qty = $_POST[' use_config_notify_stock_qty '];
$manage_stock = $_POST[' manage_stock '];
$use_config_manage_stock = $_POST[' use_config_manage_stock '];
$stock_status_changed_auto = $_POST[' stock_status_changed_auto '];
$use_config_qty_increments = $_POST[' use_config_qty_increments '];
$qty_increments = $_POST[' qty_increments '];
$use_config_enable_qty_inc = $_POST[' use_config_enable_qty_inc '];
$enable_qty_increments = $_POST[' enable_qty_increments '];
$is_decimal_divided = $_POST[' is_decimal_divided '];
$_media_attribute_id = $_POST[' _media_attribute_id '];
$_media_image = $_POST[' _media_image '];
$_media_position = $_POST[' _media_position '];
$_media_is_disabled = $_POST[' _media_is_disabled '];
*/

/*$array1 = array(
		"sku" => $sku,
		'_attribute_set' => $_attribute_set,
		'_type' => $_type
	);

foreach ($array1 as $key => $value) {
	echo $key. '=>' .$value. '<br />';
}

/*$sqlq1 = ("INSERT INTO product_upload (sku,_attribute_set,_type) VALUES ('$sku', '$_attribute_set', '$_type')");
$RTH=$conn->prepare($sqlq1);
$RTH->execute();
$row=$RTH->rowCount();
if($row > 0 ){

	echo "1 record inserted";
}
else {
	echo "No records inserted";
}
*/
?>
<button class="show_prod_calc" >Show Table</button>
<div id="loadProducts"></div>






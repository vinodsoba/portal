<?php
include("header.php");

$datefrom = $_POST['date_from'];
$dateto = $_POST['date_to'];

echo '<b>Date From:</b>' . $datefrom .'<br><br>';
echo '<b>Date To:</b>' . $dateto .'<br><br>';

if(isset($_POST['date_from']) && isset($_POST['date_to'])){

	include("connect.php");

	//Total Buying In
	$STH16=$conn->prepare("SELECT SUM( buying_price ) AS value_sum FROM product_calc where creation_date between '$datefrom' AND '$dateto'");
	$STH16->execute();
	while($row2=$STH16->fetch(PDO::FETCH_ASSOC)){
		$buyingprice = $row2['value_sum'];
	}		

	$includedelivery = $buyingprice + 8.95;
	$vatinclusive = $includedelivery *20/100;
	$total = $includedelivery + $vatinclusive;
			
echo '<b>Total Buying Price:</b>&nbsp;' . $buyingprice .'<br><br>';
echo '<b>Total Buying Price Plus Delivery:</b>&nbsp;' . $includedelivery .'<br><br>';
echo '<b>Total Buying Price including VAT @ 20%:</b>&nbsp;' . $vatinclusive .'<br><br>';
echo '<b>Total Buying Price including VAT @ 20%:</b>&nbsp;' . $total .'<br><br>';
	//Total price per unit
	$STH6=$conn->prepare("SELECT SUM( price_per_unit ) AS value_sum FROM product_calc where creation_date between '$datefrom' AND '$dateto'");
	$STH6->execute();
	while($row3=$STH6->fetch(PDO::FETCH_ASSOC)){
		$priceperunit = $row3['value_sum'];
	}

echo '<b>Total Price Per Unit:</b>&nbsp;' . $priceperunit .'<br><br>';
	//Our Price
	$STH7=$conn->prepare("SELECT SUM( our_price ) AS value_sum FROM product_calc where creation_date between '$datefrom' AND '$dateto'");
	$STH7->execute();
	while($row4=$STH7->fetch(PDO::FETCH_ASSOC)){
		$ourprice = $row4['value_sum'];
	}

echo '<b>Total Our Price:</b>&nbsp;' . $ourprice  .'<br><br>';
	//Profit per item
	$STH8=$conn->prepare("SELECT SUM( profit_per_item ) AS value_sum FROM product_calc where creation_date between '$datefrom' AND '$dateto'");
	$STH8->execute();
	while($row5=$STH8->fetch(PDO::FETCH_ASSOC)){
		$profitperitem = $row5['value_sum'];
	}

echo '<b>Total Profit per Item:</b>&nbsp;' . round($profitperitem)  .'<br><br>';

	//Bulk Profit
    $STH9=$conn->prepare("SELECT SUM( profit_bulk ) AS value_sum FROM product_calc where creation_date between '$datefrom' AND '$dateto'");
	$STH9->execute();
	while($row6=$STH9->fetch(PDO::FETCH_ASSOC)){
		$bulkprofit = $row6['value_sum'];
	}

echo '<b>Total Profit on All Items:</b>&nbsp;£' . sprintf("%01.2f",$bulkprofit)  .'<br><br>';
sprintf("%01.2f",	$priceperunit);

		echo "End of Report";
}

else {
	echo "Dates are required";
}

 


?>
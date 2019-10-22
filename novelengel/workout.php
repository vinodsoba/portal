<?php
require('header.php');

$rate = 1.10;
$date = date('d/m/y');
echo 'Exchage rate in Euros today is '.$date .'  <br>'. $rate;

?>

<?php
echo '<form method="POST" id="workoutForm" action="run_calculation.php">
	<fieldset>
<label>Product Code</label>
<input type="text" name="item_id" value="'.$row['item_id'].'">';


?>


<div id="loadRespone"></div>

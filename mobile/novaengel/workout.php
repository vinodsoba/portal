<?php
include("header.php");
?>
<div data-role="content">
<form method="POST" id="workoutForm" action="run_calculation.php">
	<fieldset>
<label>Item ID:</label>
<input type="text" name="item_id"><br>
<label>Product Name</label>
<input type="text" name="description"><br>
<label>Buying Price</label>
<input type="text" name="price"><br>
<label>Each Per Unit</label>
<input type="text" name="each_per_unit" value="1"><br>
<label>Our Price</label>
<input type="text" name="our_price"><br>
<label>Shipping</label>
<input type="text" name="shipping"><br>
<input type="submit" name="submit" value="go">
</fieldset>
</form>
</div>


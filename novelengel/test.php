<?
require('header.php');
include('connect.php');

$rate = 1.10;
$shippingCost = 2.70;
$id = $_POST['item_id'];

if($id == true){

  $sq1 = "select item_id, brand, name, price from ne_catalog where item_id like '%$id%' ";

  $result=$conn->prepare($sq1);
  $result->execute();
  while($row=$result->fetch(PDO::FETCH_ASSOC)){
    $item_id = $row['item_id'];
    $brand = $row['brand'];
    $name= $row['name'];
    $price= $row['price'];

  }

//converts to pounds
$a = $price / $rate;

//round our price 2 decimal points
$ab = number_format((float)$a, 2, '.','');

$addedPercent = $ab * 110/100;
//echo 'percentage added to our price'.$addedPercent . '<br>';
$addedShippingCost = $addedPercent + $shippingCost;
//echo 'Our price with percentage added + Shipping costs '.$addedShippingCost . '<br>';
// ebay fees calc
$ebayResult =  $addedShippingCost * 10/100;

//echo ' Ebay fee result after percentage + shipping added on' .$ebayResult . '<br>';

$total = $addedShippingCost + $ebayResult;
//echo 'Total after ebay fees' . $total;

//paypal fees cancel
$paypalResult = $total * 3.4/100+0.2;

$grandTotal = $paypalResult + $total;
//echo 'grand result'.$grandTotal;

  echo '
  <label>Product Name</label>
  <input type="text" name="description" value="'.$brand.'"><br>
  <label>Buying Price</label>
  <input type="text" name="buyingprice" class="buyingprice" value="'.str_replace('€', '', $ab).'"><br>
  <label>Each Per Unit</label>
  <input type="text" name="each_per_unit" value="1"><br>
  <label>Our Price</label>
  <input type="text" name="our_price" class="our_price" value="'.round($grandTotal, 2).'"><br>
  <label>Shipping</label>
  <input type="text" name="shipping" value="'.$shippingCost.'"><br>
  <input type="submit" name="submit" value="go">
  </fieldset>
  </form>';
}
else {
  echo 'id is not passed';
}

?>

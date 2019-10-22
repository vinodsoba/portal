<?php
include("header.php");
include('simple_html_dom.php');


?>
<form action="<?php echo $_SERVER['PHP_SELF']?>"  method="POST">
<label>sku</label>
<input type="text" title="Type in a name" name="sku">
<input type="submit" value="go" name="submit" >
</form>

<?php 

$sku = $_POST['sku'];

if(isset($_POST['sku'])){
	include('connect.php');

	$SQ1="select name from product_upload where sku = '$sku'";

	$STF=$conn->prepare($SQ1);

	$STF->execute();

	while($row=$STF->fetchAll(PDO::FETCH_ASSOC)){
		echo $name = $row['name'];
echo $sku;
			
			
		  $nameconvert = str_replace('(EACH)', '.jpg', $name);
          $nameconvert1 = preg_replace('/\s+/', '_', $nameconvert);
          $nameconverted = strtolower($nameconvert1);
          $imageconvert = str_replace('_edp_spray_ladies_', '_l', $nameconverted);

			// Change to the URL you want to redirect to
$URL="http://www.honeypotcosmetics.com/images/products/";

$getWeb = header ("Location: $URL$imageconvert");
		$html = file_get_html($getWeb);
foreach($html->find('src') as $prodName){                    
 		$string2 = $prodName->plaintext . "\n"; 
 		echo $string2;

}

	}




}
else {
	echo "nothing is set";
}

/*$websiteUrl = "http://www.honeypotcosmetics.com/images/products/";
$html = file_get_html($websiteUrl);
foreach($html->find('#productDescription ul') as $prodName){                    
 $string = $prodName->plaintext . "\n"; 
echo $sku;
echo $string;
     include('connect.php');

     $FTP=$conn->prepare("UPDATE product_honeypot SET product_desc = '$string' WHERE sku = '$sku'");
     $FTP->execute();
     
}
*/


?>
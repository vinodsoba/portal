<!DOCTYPE html>
<head>
	<title>Welcome to your dashboard Novel Engel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
</head>
<body>
	<header style="height:50px"></header>
<div class="row">
<div class="col-md-1">
<button type="button" onclick="loadDoc()">Workout Pricing</button><br><br>
<button type="button" onclick="loadProducts()">Novel Engel Products</button><br><br>
<button type="button" onclick="loadUploadProducts()">Upload</button><br><br>
<button type="button" onclick="loadSearch()">Search</button>
</div>
<div class="col-md-11">
	<h2>Welcome to your Novel Engel DASHBOARD</h2>
<div id="display-content"></div>
</div>
</div>

<footer>
	
</footer>
<script type="text/javascript" src="js/function.js"></script>
</body>
</html>
<?php
/*
$creatDirectory = mkdir('images');	
if($creatDirectory === false ){
echo $creatDirectory;
}



$sales = array( 
array('Northwest', '1011', 'London'),
array('Northwest', '3', 'London'),
array('Southwest', '2', 'Scotland'),
array('Westeast', '1', 'Cambridge'),
array('All Regions', '6', 'All') );		
}

$fh = fopen('images/image.csv', 'w') or die("Can't open image.csv");
foreach ($sales as $sales_line) {
	
	if (fputcsv($fh, $sales_line) === false){
		die("Can't write to CSV line");
	}
}
echo "CSV Updated";
fclose($fh) or die("Can't close image.csv");





/*$startrow1 = 1;
$endrow = 4;
$coll =3;
$fh = fopen('images/image.csv', 'w') or die("Can't open image.csv");
for ($i=$startrow1; $i < $endrow; $i++){

foreach ($sales as $sales_line) {
	if (fputcsv($fh, $sales) === false){
		die("Can't write to CSV line");
	}
}

}






	/*include('simple_html_dom.php');

	$websiteUrl = "http://www.honeypotcosmetics.com/fragrances-c-2.html";

	$html = file_get_html($websiteUrl);

	// gives me urls on the website	
			foreach($html->find('.centerBoxContentsFeatured a') as $prodName){				
				echo $prodName->plaintext . "\n";				
				}

			foreach($html->find('.normalprice') as $normPrice) {
				echo $normPrice->plaintext . '<br>';
			}
				
				$prodNameStrip = strip_tags($prodName, "");
				$normPriceStrip = strip_tags($normPrice, "");

					$creatDirectory = mkdir('images');	

					echo $creatDirectory;

					//Store in the filesystem.
					$file = fopen("images/image.csv", "a");
					fwrite($file, $prodName);
					fclose($file);
				
					//Store in the filesystem.
					$file = fopen("images/image.csv", "w");
					$row =0;
					while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
        			$row++;
        			// This loops through the fields
        			foreach($html->find('.centerBoxContentsFeatured a') as $prodName){					
						echo $prodName->plaintext . "\n";				
						}
    				}
					// save the column headers
					fputcsv($file, array('product name',	'code',	'brand',	'buying price',	'each per unit',	'our price',	'Ebay Fees',	'After Ebay Fees',	'Paypal',	'After Fees','Shipping','Profit Per Item','Profit Bulk','Company','Date of Order','Buy In Total','Shipping Total','Total Inc Shipping','VAT @ 20%','Total Inc VAT'));
					fputcsv($file, array( $prodNameStrip, '','' , str_replace(utf8_decode("&pound;"), utf8_decode("£"), $normPriceStrip)));
					fclose($file);





			//take the images create directory place images in directory
			/*$creatDirectory = mkdir('images');
			
			//place images here
			if(is_dir($creatDirectory))			
			{
				echo $creatDirectory;
				
			}			
			else{
    				echo "Directory ", $creatDirectory, " already exists";
    		}

    		if($creatDirectory == true){
	    		foreach($html->find('.product-name') as $prodImg){	
					echo $prodImg->a. '<br>';
					$prodImgArray = array($prodImg);
					print_r(explode("a href",$prodImgArray[0]));	
					

					$content = strip_tags($prodImg, "");
										
					//Store in the filesystem.
					$file = fopen("images/image.csv", "w");
					fwrite($file, $content);
					fclose($file);
				
					//Store in the filesystem.
					$file = fopen("images/image.csv", "w");
					// save the column headers
					fputcsv($file, array('product name',	'code',	'brand',	'buying price',	'each per unit',	'our price',	'Ebay Fees',	'After Ebay Fees',	'Paypal',	'After Fees','Shipping','Profit Per Item','Profit Bulk','Company','Date of Order','Buy In Total','Shipping Total','Total Inc Shipping','VAT @ 20%','Total Inc VAT'));
					fputcsv($file, array($content, '2','3'));
					
				}


				foreach($html->find('.price-box') as $prodImg){	
					echo $prodImg->a. '<br>';
					$prodImgArray = array($prodImg);
					print_r(explode("span",$prodImgArray[0]));	
					

					$content = strip_tags($prodImg, "");
										
					//Store in the filesystem.
					$file = fopen("images/image.csv", "w");
					fwrite($file, $content);
					fclose($file);
				
					//Store in the filesystem.
					$file = fopen("images/image.csv", "w");
					// save the column headers
					fputcsv($file, array('product name',	'code',	'brand',	'buying price',	'each per unit',	'our price',	'Ebay Fees',	'After Ebay Fees',	'Paypal',	'After Fees','Shipping','Profit Per Item','Profit Bulk','Company','Date of Order','Buy In Total','Shipping Total','Total Inc Shipping','VAT @ 20%','Total Inc VAT'));
					fputcsv($file, array($content, '2','3'));
					
				}
			}


*/



	
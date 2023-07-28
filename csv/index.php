<?php
include("header.php");
include('simple_html_dom.php');
//include('htmldomparser.php');
require_once('url_to_absolute.php');
$sku = $_POST['sku'];
$weburl = $_POST['web_url'];
$imageurl = $_POST['image_url'];
echo $sku;
$websiteUrl = "$weburl";
$html = file_get_html($websiteUrl);
$prodDescription= '';
foreach($html->find('#prodDesc p') as $prodName){
 $prodDescription = $prodName->plaintext . "\n";
echo $prodDescription;

}


if(isset($sku)){
    echo $sku;
}
else {
    echo 'There is no sku provided';
}



?>
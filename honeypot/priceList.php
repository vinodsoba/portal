<?php
include("header.php");
include('simple_html_dom.php');

$websiteUrl = "http://www.honeypotcosmetics.com/index.php?main_page=pricelist";
$html = file_get_html($websiteUrl);

foreach($html->find('<td></td>') as $prodName){                    
 $string = $prodName->plaintext . "\n"; 
echo $string;

}

?>
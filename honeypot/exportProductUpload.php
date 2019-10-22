<!DOCTYPE html>
<head>
	<title>Welcome to your dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min_1.css">
	<link rel="stylesheet" href="css/tableexport.min.css">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
</head>
<body>
	<div class='result'>
			<table id='result2' width="3000">
					<thead>
						<tr>
							<th>store</th>
<th width="auto">websites</th>
<th width="auto">attribute_set</th>
<th width="auto">type</th>
<th width="auto">category_ids</th>
<th width="auto">sku</th>
<th>has_options</th>
<th>name</th>
<th>meta_title</th>
<th>meta_description</th>
<th>image</th>
<th>small_image</th>
<th>thumbnail</th>
<th>url_key</th>
<th>url_path</th>
<th>page_layout</th>
<th>options_container</th>
<th>image_label</th>
<th>small_image_label</th>
<th>thumbnail_label</th>
<th>country_of_manufacture</th>
<th>msrp_enabled</th>
<th>msrp_display_actual_price_type</th>
<th>gift_message_available</th>
<th>gift_wrapping_available</th>
<th>price</th>
<th>special_price</th>
<th>weight</th>
<th>msrp</th>
<th>gift_wrapping_price</th>
<th>status</th>
<th>is_recurring</th>
<th>visibility</th>
<th>tax_class_id</th>
<th>max_factor_colour_shades</th>
<th>description</th>
<th>short_description</th>
<th>meta_keyword</th>
<th>custom_layout_update</th>
<th>special_from_date</th>
<th>special_to_date</th>
<th>news_from_date</th>
<th>news_to_date</th>
<th>custom_design_from</th>
<th>custom_design_to</th>
<th>qty</th>
<th>min_qty</th>
<th>use_config_min_qty</th>
<th>is_qty_decimal</th>
<th>backorders</th>
<th>use_config_backorders</th>
<th>min_sale_qty</th>
<th>use_config_min_sale_qty</th>
<th>max_sale_qty</th>
<th>use_config_max_sale_qty</th>
<th>is_in_stock</th>
<th>low_stock_date</th>
<th>notify_stock_qty</th>
<th>use_config_notify_stock_qty</th>
<th>manage_stock</th>
<th>use_config_manage_stock</th>
<th>stock_status_changed_auto</th>
<th>use_config_qty_increments</th>
<th>qty_increments</th>
<th>use_config_enable_qty_inc</th>
<th>enable_qty_increments</th>
<th>is_decimal_divided</th>
<th>stock_status_changed_automatically</th>
<th>use_config_enable_qty_increments</th>
<th>product_name</th>
<th>store_id</th>
<th>product_type_id</th>
<th>product_status_changed</th>
<th>product_changed_websites</th>
<th>product_brand</th>
<th>format</th>
<th>books_music_type</th>
<th>bottle_size</th>
<th>author_artist</th>
<th>genre</th>

						</tr>
						
<?php 
include("connect.php");

$QRY1 = "SELECT * FROM product_upload";
$STH=$conn->prepare($QRY1);
$STH->execute();
while($row=$STH->fetch(PDO::FETCH_ASSOC)){

	echo '<tr>';
echo '<td>'. $store = $row['store'] .'</td>';
echo '<td>'. $websites = $row['websites'] . '</td>';
echo '<td>'. $attribute_set = $row['attribute_set'] .'</td>';
echo '<td>'. $type = $row['type'] .'</td>';
echo '<td>'. $category_ids = $row['category_ids'] .'</td>';
echo '<td>'. $sku = $row['sku'] .'</td>';
echo '<td>'. $has_options = $row['has_options'] .'</td>';
echo '<td style="width:auto">'. $name = $row['name'] .'</td>';
echo '<td>'. $meta_title = $row['meta_title'] .'</td>';
echo '<td>'. $meta_description = $row['meta_description'] .'</td>';
echo '<td>'. $image = $row['image'] .'</td>';
echo '<td>'. $small_image = $row['small_image'] .'</td>';
echo '<td>'. $thumbnail = $row['thumbnail'] .'</td>';
echo '<td>'. $url_key = $row['url_key'] .'</td>';
echo '<td>'. $url_path = $row['url_path'] .'</td>';
echo '<td>'. $page_layout = $row['page_layout'] .'</td>';
echo '<td>'. $options_container = $row['options_container'] .'</td>';
echo '<td>'. $image_label = $row['image_label'] .'</td>';
echo '<td>'. $small_image_label = $row['small_image_label'] .'</td>';
echo '<td>'. $thumbnail_label = $row['thumbnail_label'] .'</td>';
echo '<td>'. $country_of_manufacture = $row['country_of_manufacture'] .'</td>';
echo '<td>'. $msrp_enabled = $row['msrp_enabled'] .'</td>';
echo '<td>'. $msrp_display_actual_price_type = $row['msrp_display_actual_price_type'] .'</td>';
echo '<td>'. $gift_message_available = $row['gift_message_available'] .'</td>';
echo '<td>'. $gift_wrapping_available = $row['gift_wrapping_available'] .'</td>';
echo '<td>'. $price = $row['price'] .'</td>';
echo '<td>'. $special_price = $row['special_price'] .'</td>';
echo '<td>'. $weight = $row['weight'] .'</td>';
echo '<td>'. $msrp = $row['msrp'] .'</td>';
echo '<td>'. $gift_wrapping_price = $row['gift_wrapping_price'] .'</td>';
echo '<td>'. $status = $row['status'] .'</td>';
echo '<td>'. $is_recurring = $row['is_recurring'] .'</td>';
echo '<td>'. $visibility = $row['visibility'] .'</td>';
echo '<td>'. $tax_class_id = $row['tax_class_id'] .'</td>';
echo '<td>'. $max_factor_colour_shades = $row['max_factor_colour_shades'] .'</td>';
echo '<td>'. $description = $row['description'] .'</td>';
echo '<td>'. $short_description = $row['short_description'] .'</td>';
echo '<td>'. $meta_keyword = $row['meta_keyword'] .'</td>';
echo '<td>'. $custom_layout_update = $row['custom_layout_update'] .'</td>';
echo '<td>'. $special_from_date = $row['special_from_date'] .'</td>';
echo '<td>'. $special_to_date = $row['special_to_date'] .'</td>';
echo '<td>'. $news_from_date = $row['news_from_date'] .'</td>';
echo '<td>'. $news_to_date = $row['news_to_date'] .'</td>';
echo '<td>'. $custom_design_from = $row['custom_design_from'] .'</td>';
echo '<td>'. $custom_design_to = $row['custom_design_to'] .'</td>';
echo '<td>'. $qty = $row['qty'] .'</td>';
echo '<td>'. $use_config_min_qty = $row['use_config_min_qty'] .'</td>';
echo '<td>'. $is_qty_decimal = $row['is_qty_decimal'] .'</td>';
echo '<td>'. $backorders = $row['backorders'] .'</td>';
echo '<td>'. $use_config_backorders = $row['use_config_backorders'] .'</td>';
echo '<td>'. $min_sale_qty = $row['min_sale_qty'] .'</td>';
echo '<td>'. $use_config_min_sale_qty = $row['use_config_min_sale_qty'] .'</td>';
echo '<td>'. $max_sale_qty = $row['max_sale_qty'] .'</td>';
echo '<td>'. $use_config_max_sale_qty = $row['use_config_max_sale_qty'] .'</td>';
echo '<td>'. $is_in_stock = $row['is_in_stock'] .'</td>';
echo '<td>'. $low_stock_date = $row['low_stock_date'] .'</td>';
echo '<td>'. $notify_stock_qty = $row['notify_stock_qty'] .'</td>';
echo '<td>'. $use_config_notify_stock_qty = $row['use_config_notify_stock_qty'] .'</td>';
echo '<td>'. $manage_stock = $row['manage_stock'] .'</td>';
echo '<td>'. $use_config_manage_stock = $row['use_config_manage_stock'] .'</td>';
echo '<td>'. $stock_status_changed_auto = $row['stock_status_changed_auto'] .'</td>';
echo '<td>'. $use_config_qty_increments = $row['use_config_qty_increments'] .'</td>';
echo '<td>'. $qty_increments = $row['qty_increments'] .'</td>';
echo '<td>'. $use_config_enable_qty_inc = $row['use_config_enable_qty_inc'] .'</td>';
echo '<td>'. $enable_qty_increments = $row['enable_qty_increments'] .'</td>';
echo '<td>'. $is_decimal_divided = $row['is_decimal_divided'] .'</td>';
echo '<td>'. $stock_status_changed_automatically = $row['stock_status_changed_automatically'] .'</td>';
echo '<td>'. $use_config_enable_qty_increments = $row['use_config_enable_qty_increments'] .'</td>';
echo '<td>'. $product_name = $row['product_name'] .'</td>';
echo '<td>'. $store_id = $row['store_id'] .'</td>';
echo '<td>'. $product_type_id = $row['product_type_id'] .'</td>';
echo '<td>'. $product_status_changed = $row['product_status_changed'] .'</td>';
echo '<td>'. $product_changed_websites = $row['product_changed_websites'] .'</td>';
echo '<td>'. $product_brand = $row['product_brand'] .'</td>';
echo '<td>'. $format = $row['format'] .'</td>';
echo '<td>'. $books_music_type = $row['books_music_type'] .'</td>';
echo '<td>'. $bottle_size = $row['bottle_size'] .'</td>';
echo '<td>'. $author_artist = $row['author_artist'] .'</td>';
echo '<td>'. $genre = $row['genre'] .'</td>';
echo '</tr>';

}
?>

</table>
</div>
<script src="js/bootstrap.min_1.js"></script>
	<script src="js/FileSaver.min.js"></script>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/tableexport.min.js"></script>

<script type="text/javascript">
			$('#result2').tableExport();

</script>
</body>
</html>
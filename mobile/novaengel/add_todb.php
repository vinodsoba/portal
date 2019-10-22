<?php
include("header.php");
include("connect.php");
?>

<div data-role="page">
	<div data-role="header">
		<h2>Results Below</h2>
	</div>
	<div data-role="content" data-theme="b">
<?php
$store = $_POST['store'];
$websites =$_POST['websites'];
$attset = $_POST['attribute_set'];
$type =$_POST['type'];
$category =$_POST['category_ids'];
$sku = $_POST['sku'];
$hasoptions = $_POST['has_options'];
$name = $_POST['name'];
$metatitle = $_POST['meta_title'];
$metadesc = $_POST['meta_description'];
$image = $_POST['image'];
$smallimage = $_POST['small_image'];
$thumbnail = $_POST['thumbnail'];
$urlkey = $_POST['url_key'];
$urlpath = $_POST['url_path'];
$customdesign = $_POST['custom_design'];
$pagelayout = $_POST['page_layout'];
$optionscontainer = $_POST['options_container'];
$imagelabel = $_POST['image_label'];
$smallimagelabel = $_POST['small_image_label'];
$thumbnaillabel = $_POST['thumbnail_label'];
$countryofmanufacture = $_POST['county_of_manufacture'];
$msrpenabled = $_POST['msrp_enabled'];
$msrpdisplayactualpricetype = $_POST['msrp_display_actual_price_type'];
$giftmessageavailable = $_POST['gift_message_available'];
$giftwrappingavailable = $_POST['gift_wrapping_available'];
$price = $_POST['price'];
$specialprice = $_POST['special_price'];
$weight = $_POST['weight'];
$msrp = $_POST['msrp'];
$giftwrappingprice = $_POST['gift_wrapping_price'];
$status = $_POST['status'];
$isrecurring = $_POST['is_recurring'];
$visibility = $_POST['visibility'];
$taxclassid = $_POST['tax_class_id'];
$maxfactorcolourshades = $_POST['max_factor_colour_shades'];
$description = $_POST['description'];
$shortdescription= $_POST['short_description'];
$metakeyword = $_POST['meta_keyword'];
$customlayoutupdate = $_POST['custom_layout_update'];
$specialfromdate = $_POST['special_from_date'];
$specialtodate = $_POST['special_to_date'];
$newsfromdate =$_POST['news_from_date'];
$newstodate =$_POST['news_to_date'];
$customdesignfrom =$_POST['custom_design_from'];
$customdesignto =$_POST['custom_design_to'];
$qty = $_POST['qty'];
$minqty = $_POST['min_qty'];
$useconfigminqty = $_POST['use_config_min_qty'];
$isqtydecimal = $_POST['is_qty_decimal'];
$backorders = $_POST['backorders'];
$useconfigbackorders = $_POST['use_config_backorders'];
$minsaleqty = $_POST['min_sale_qty'];
$useconfigminsaleqty = $_POST['use_config_min_sale_qty'];
$maxsaleqty = $_POST['max_sale_qty'];
$useconfigmaxsaleqty = $_POST['use_config_max_sale_qty'];
$isinstock = $_POST['is_in_stock'];
$lowstockdate =$_POST['low_stock_date'];
$notifystockqty = $_POST['notify_stock_qty'];
$useconfignotifystockqty = $_POST['use_config_notify_stock_qty'];
$managestock = $_POST['manage_stock'];
$useconfigmanagestock = $_POST['use_config_manage_stock'];
$stockstatuschangedauto = $_POST['stock_status_changed_auto'];
$useconfigqtyincrements = $_POST['use_config_qty_increments'];
$qtyincrements = $_POST['qty_increments'];
$useconfigenableqtyinc = $_POST['use_config_enable_qty_inc'];
$enableqtyincrements = $_POST[' enable_qty_increments '];
$isdecimaldivided = $_POST[' is_decimal_divided '];
$stockstatuschangedautomatically = $_POST['stock_status_changed_automatically'];
$useconfigenableqtyincrements = $_POST['use_config_enable_qty_increments'];
$productname = $_POST['product_name'];
$storeid = $_POST['store_id'];
$producttypeid =$_POST['product_type_id'];
$productstatuschanged = $_POST['product_status_changed'];
$productchangedwebsites =$_POST['product_changed_websites'];
$productbrand = $_POST['product_brand'];
$format =$_POST['format'];
$booksmusictype =$_POST['books_music_type'];
$bottlesize =$_POST['bottle_size'];
$authorartist =$_POST['author_artist'];
$genre = $_POST['genre'];


echo $sku;

$array1 = array(
"store"=>$store,
"websites"=>$websites,
"attribute_set"=>$attribute_set,
"type"=>$type,
"category_ids"=>$category_ids,
"sku"=>$sku,
"has_options"=>$has_options,
"name"=>$name,
"meta_title"=>$meta_title,
"meta_description"=>$meta_description,
"image"=>$image,
"small_image"=>$small_image,
"thumbnail"=>$thumbnail,
"url_key"=>$url_key,
"url_path"=>$url_path,
"page_layout"=>$page_layout,
"options_container"=>$options_container,
"image_label"=>$image_label,
"small_image_label"=>$small_image_label,
"thumbnail_label"=>$thumbnail_label,
"county_of_manufacture"=>$county_of_manufacture,
"msrp_enabled"=>$msrp_enabled,
"msrp_display_actual_price_type"=>$msrp_display_actual_price_type,
"gift_message_available"=>$gift_message_available,
"gift_wrapping_available"=>$gift_wrapping_available,
"price"=>$price,
"special_price"=>$special_price,
"weight"=>$weight,
"msrp"=>$msrp,
"gift_wrapping_price"=>$gift_wrapping_price,
"status"=>$status,
"is_recurring"=>$is_recurring,
"visibility"=>$visibility,
"tax_class_id"=>$tax_class_id,
"max_factor_colour_shades"=>$max_factor_colour_shades,
"description"=>$description,
"short_description"=>$short_description,
"meta_keyword"=>$meta_keyword,
"custom_layout_update"=>$custom_layout_update,
"special_from_date"=>$special_from_date,
"special_to_date"=>$special_to_date,
"news_from_date"=>$news_from_date,
"news_to_date"=>$news_to_date,
"custom_design_from"=>$custom_design_from,
"custom_design_to"=>$custom_design_to,
"qty"=>$qty,
"min_qty"=>$min_qty,
"use_config_min_qty"=>$use_config_min_qty,
"is_qty_decimal"=>$is_qty_decimal,
"backorders"=>$backorders,
"use_config_backorders"=>$use_config_backorders,
"min_sale_qty"=>$min_sale_qty,
"use_config_min_sale_qty"=>$use_config_min_sale_qty,
"max_sale_qty"=>$max_sale_qty,
"use_config_max_sale_qty"=>$use_config_max_sale_qty,
"is_in_stock"=>$is_in_stock,
"low_stock_date"=>$low_stock_date,
"notify_stock_qty"=>$notify_stock_qty,
"use_config_notify_stock_qty"=>$use_config_notify_stock_qty,
"manage_stock"=>$manage_stock,
"use_config_manage_stock"=>$use_config_manage_stock,
"stock_status_changed_auto"=>$stock_status_changed_auto,
"use_config_qty_increments"=>$use_config_qty_increments,
"qty_increments"=>$qty_increments,
"use_config_enable_qty_inc"=>$use_config_enable_qty_inc,
"enable_qty_increments "=>$enable_qty_increments ,
"is_decimal_divided "=>$is_decimal_divided ,
"stock_status_changed_automatically"=>$stock_status_changed_automatically,
"use_config_enable_qty_increments"=>$use_config_enable_qty_increments,
"product_name"=>$product_name,
"store_id"=>$store_id,
"product_type_id"=>$product_type_id,
"product_status_changed"=>$product_status_changed,
"product_changed_websites"=>$product_changed_websites,
"product_brand"=>$product_brand,
"format"=>$format,
"books_music_type"=>$books_music_type,
"bottle_size"=>$bottle_size,
"author_artist"=>$author_artist,
"genre"=>$genre
);


$sqlq1 = ("INSERT INTO product_upload( store, websites, attribute_set, type, category_ids, sku, has_options, name, meta_title, meta_description, image, small_image, thumbnail, url_key, url_path, page_layout, options_container, image_label, small_image_label, thumbnail_label, country_of_manufacture, msrp_enabled, msrp_display_actual_price_type, gift_message_available, gift_wrapping_available, price, special_price, weight, msrp, gift_wrapping_price, status, is_recurring, visibility, tax_class_id, max_factor_colour_shades, description, short_description, meta_keyword, custom_layout_update, special_from_date, special_to_date, news_from_date, news_to_date, custom_design_from, custom_design_to, qty, min_qty, use_config_min_qty, is_qty_decimal, backorders, use_config_backorders, min_sale_qty, use_config_min_sale_qty, max_sale_qty, use_config_max_sale_qty, is_in_stock, low_stock_date, notify_stock_qty, use_config_notify_stock_qty, manage_stock, use_config_manage_stock, stock_status_changed_auto, use_config_qty_increments, qty_increments, use_config_enable_qty_inc, enable_qty_increments, is_decimal_divided, stock_status_changed_automatically, use_config_enable_qty_increments, product_name, store_id, product_type_id, product_status_changed, product_changed_websites, product_brand, format, books_music_type, bottle_size, author_artist, genre
) VALUES ( '$store', '$websites', '$attset', '$type', '$category', '$sku', '$hasoptions', '$name', '$metatitle', '$metadesc', '$image', '$smallimage', '$thumbnail', '$urlkey ', '$urlpath ', '$pagelayout ', '$optionscontainer', '$imagelabel ', '$smallimagelabel ', '$thumbnaillabel ', '$countryofmanufacture',  '$msrpenabled', '$msrpdisplayactualpricetype', '$giftmessageavailable', '$giftwrappingavailable', '$price', '$specialprice', '$weight', '$msrp', '$giftwrappingprice', '$status', '$isrecurring', '$visibility', '$taxclassid', '$maxfactorcolourshades', '$description', '$shortdescription', '$metakeyword',  '$customlayoutupdate', '$specialfromdate', '$specialtodate', '$newsfromdate',  '$newstodate', '$customdesignfrom', '$customdesignto', '$qty', '$minqty', '$useconfigminqty', '$isqtydecimal', '$backorders', '$useconfigbackorders', '$minsaleqty', '$useconfigminsaleqty',  '$maxsaleqty', '$useconfigmaxsaleqty',  '$isinstock',  '$lowstockdate', '$notifystockqty', '$useconfignotifystockqty', '$managestock', '$useconfigmanagestock', '$stockstatuschangedauto', '$useconfigqtyincrements', '$qtyincrements', '$useconfigenableqtyinc', '$enableqtyincrements', '$isdecimaldivided', '$stockstatuschangedautomatically', '$useconfigenableqtyincrements', '$productname',  '$storeid', '$producttypeid', '$productstatuschanged', '$productchangedwebsites', '$productbrand', '$format', '$booksmusictype', '$bottlesize', '$authorartist', '$genre' )");

$RTH=$conn->prepare($sqlq1);
$RTH->execute();
$row=$RTH->rowCount();
if($row > 0 ){
	echo $sku;
	echo "1 record inserted";
}
else {
	echo "No records inserted";
}



?>



</div>
</div>

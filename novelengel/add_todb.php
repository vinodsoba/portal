<?php
/* AS COSMETICS */
include("connect.php");

$sku = $_POST['sku'];
$storeviewcode =$_POST['store_view_code'];
$attributesetcode = $_POST['attribute_set_code'];
$producttype =$_POST['product_type'];
$categories =$_POST['categories'];
$productwebsites = $_POST['product_websites'];
$name = $_POST['name'];
$description = $_POST['description'];
$shortdescription= $_POST['short_description'];
$weight = $_POST['weight'];
$productonline = $_POST['product_online'];
$taxclassname = $_POST['tax_class_name'];
$visibility = $_POST['visibility'];
$price = $_POST['price'];
$specialprice = $_POST['special_price'];
$specialpricefromdate = $_POST['special_price_from_date'];
$specialpricetodate = $_POST['special_price_to_date'];
$urlkey = $_POST['url_key'];
$metatitle = $_POST['meta_title'];
$metakeywords = $_POST['meta_keywords'];
$metadesc = $_POST['meta_description'];
$baseimage = $_POST['base_image'];
$baseimagelabel = $_POST['base_image_label'];
$smallimage = $_POST['small_image'];
$smallimagelabel = $_POST['small_image_label'];
$thumbnailimage = $_POST['thumbnail_image'];
$thumbnailimagelabel = $_POST['thumbnail_image_label'];
$swatchimage = $_POST['swatch_image'];
$swatchimagelabel = $_POST['swatch_image_label'];
$createdat = $_POST['created_at'];
$updatedat = $_POST['updated_at'];
$newfromdate = $_POST['new_from_date'];
$newtodate = $_POST['new_to_date'];
$displayproductoptionsin = $_POST['display_product_options_in'];
$mapprice = $_POST['map_price'];
$msrpprice = $_POST['msrp_price'];
$mapenabled = $_POST['map_enabled'];
$giftmessageavailable = $_POST['gift_message_available'];
$customdesign = $_POST['custom_design'];
$customdesignfrom = $_POST['custom_design_from'];
$customdesignto = $_POST['custom_design_to'];
$customlayoutupdate = $_POST['custom_layout_update'];
$pagelayout = $_POST['page_layout'];
$productoptionscontainer = $_POST['product_options_container'];
$msrpdisplayactualpricetype = $_POST['msrp_display_actual_price_type'];
$countryofmanufacture = $_POST['county_of_manufacture'];
$additionalattributes = $_POST['additional_attributes'];
$qty = $_POST['qty'];
$outofstockqty = $_POST['out_of_stock_qty'];
$useconfigminqty = $_POST['use_config_min_qty'];
$isqtydecimal = $_POST['is_qty_decimal'];
$allowbackorders = $_POST['allow_backorders'];
$useconfigbackorders = $_POST['use_config_backorders'];
$mincartqty = $_POST['min_cart_qty'];
$useconfigminsaleqty = $_POST['use_config_min_sale_qty'];
$maxcartqty = $_POST['max_cart_qty'];
$useconfigmaxsaleqty = $_POST['use_config_max_sale_qty'];
$isinstock = $_POST['is_in_stock'];
$notifyonstockbelow = $_POST['notify_on_stock_below'];
$useconfignotifystockqty = $_POST['use_config_notify_stock_qty'];
$managestock = $_POST['manage_stock'];
$useconfigmanagestock = $_POST['use_config_manage_stock'];
$useconfigqtyincrements = $_POST['use_config_qty_increments'];
$qtyincrements = $_POST['qty_increments'];
$useconfigenableqtyinc = $_POST['use_config_enable_qty_inc'];
$enableqtyincrements = $_POST['enable_qty_increments'];
$isdecimaldivided = $_POST['is_decimal_divided'];
$websiteid = $_POST['website_id'];
$relatedskus = $_POST['related_skus'];
$relatedposition = $_POST['related_position'];
$crosssellskus = $_POST['crosssell_skus'];
$crosssellposition = $_POST['crosssell_position'];
$upsellskus = $_POST['upsell_skus'];
$upsellposition = $_POST['upsell_position'];
$additionalimages = $_POST['additional_images'];
$additionalimagelabels = $_POST['additional_image_labels'];
$hidefromproductpage = $_POST['hide_from_product_page'];
$customoptions = $_POST['custom_options'];
$bundlepricetype = $_POST['bundle_price_type'];
$bundleskutype = $_POST['bundle_sku_type'];
$bundlepriceview = $_POST['bundle_price_view'];
$bundleweighttype = $_POST['bundle_weight_type'];
$bundlevalues = $_POST['bundle_values'];
$bundleshipmenttype = $_POST['bundle_shipment_type'];
$associatedskus = $_POST['associated_skus'];
$configurablevariations = $_POST['configurable_variations'];
$configurablevariationlabels = $_POST['configurable_variation_labels'];




echo $sku;
$insData = array(
"sku"=>$sku,
"store_view_code"=>$storeviewcode,
"attribute_set_code"=>$attributesetcode,
"product_type"=>$producttype,
"categories"=>$categories,
"product_websites"=>$productwebsites,
"name"=>$name,
"description"=>$description,
"short_description"=>$shortdescription,
"weight"=>$weight,
"product_online"=>$productonline,
"tax_class_name"=>$taxclassname,
"visibility"=>$visibility,
"price"=>$price,
"special_price"=>$specialprice,
"special_price_from_date"=>$specialpricefromdate,
"special_price_to_date"=>$specialpricetodate,
"url_key"=>$urlkey,
"meta_title"=>$smetatitle,
"meta_keywords"=>$metakeywords,
"meta_description"=>$metadesc,
"base_image"=>$baseimage,
"base_image_label"=>$mbase_magelabel,
"small_image"=>$smallimage,
"small_image_label"=>$smallimagelabel,
"thumbnail_image"=>$thumbnailimage,
"thumbnail_image_label"=>$thumbnailimagelabel,
"swatch_image"=>$swatchimage,
"swatch_image_label"=>$swatchimagelabel,
"created_at"=>$createdat,
"updated_at"=>$updatedat,
"new_from_date"=>$new_rom_ate,
"new_to_date"=>$newtodate,
"display_product_options_in"=>$displayproductoptionsin,
"map_price"=>$mapprice,
"msrp_price"=>$msrpprice,
"map_enabled"=>$mapenabled,
"gift_message_available"=>$giftmessageavailable,
"custom_design"=>$customdesign,
"custom_design_from"=>$customdesignfrom,
"custom_design_to"=>$customdesignto,
"custom_layout_update"=>$customlayoutupdate,
"page_layout"=>$pagelayout,
"product_options_container"=>$productoptionscontainer,
"msrp_display_actual_price_type"=>$msrpdisplayactualprice_type,
"country_of_manufacture"=>$countyofmanufacture,
"additional_attributes"=>$additionalattributes,
"qty"=>$qty,
"out_of_stock_qty"=>$outofstockqty,
"use_config_min_qty"=>$useconfigminqty,
"is_qty_decimal"=>$isqtydecimal,
"allow_backorders"=>$allowbackorders,
"use_config_backorders"=>$useconfigbackorders,
"min_cart_qty"=>$mincartqty,
"use_config_min_sale_qty"=>$useconfigmin_ale_qty,
"max_cart_qty"=>$maxcartqty,
"use_config_max_sale_qty"=>$useconfigmaxsaleqty,
"is_in_stock"=>$isinstock,
"notify_on_stock_below"=>$notifyonstockbelow,
"use_config_notify_stock_qty"=>$useconfignotifystockqty,
"manage_stock"=>$managestock,
"use_config_manage_stock"=>$useconfigmanagestock,
"use_config_qty_increments"=>$useconfigqtyincrements,
"qty_increments"=>$qtyincrements,
"use_config_enable_qty_inc"=>$useconfigenableqtyinc,
"enable_qty_increments"=>$enableqtyincrements,
"is_decimal_divided"=>$isdecimaldivided,
"website_id"=>$websiteid,
"related_skus"=>$relatedskus,
"related_position"=>$relatedposition,
"crosssell_skus"=>$crosssellskus,
"crosssell_position"=>$crosssellposition,
"upsell_skus"=>$upsellskus,
"upsell_position"=>$upsellposition,
"additional_images"=>$additionalimages,
"additional_image_labels"=>$additionalimagelabels,
"hide_from_product_page"=>$hidefromproductpage,
"custom_options"=>$customoptions,
"bundle_price_type"=>$bundlepricetype,
"bundle_sku_type"=>$bundleskutype,
"bundle_price_view"=>$bundlepriceview,
"bundle_weight_type"=>$bundleweighttype,
"bundle_values"=>$bundlevalues,
"bundle_shipment_type"=>$bundleshipmenttype,
"associated_skus"=>$associatedskus,
"configurable_variations"=>$configurablevariations,
"configurable_variation_labels"=>$configurablevariationlabels
);

$columns = implode(", ",array_keys($insData));
$escaped_values = array_values($insData);
$values  = implode("', '", $escaped_values);


$sql1 = "INSERT INTO `site_upload`($columns) VALUES ('$values')";

/*$sqlq1 = ("INSERT INTO product_upload( store, websites, attribute_set, type, category_ids, sku, has_options, name, meta_title, meta_description, image, small_image, thumbnail, url_key, url_path, page_layout, options_container, image_label, small_image_label, thumbnail_label, country_of_manufacture, msrp_enabled, msrp_display_actual_price_type, gift_message_available, gift_wrapping_available, price, special_price, weight, msrp, gift_wrapping_price, status, is_recurring, visibility, tax_class_id, max_factor_colour_shades, description, short_description, meta_keyword, custom_layout_update, special_from_date, special_to_date, news_from_date, news_to_date, custom_design_from, custom_design_to, qty, min_qty, use_config_min_qty, is_qty_decimal, backorders, use_config_backorders, min_sale_qty, use_config_min_sale_qty, max_sale_qty, use_config_max_sale_qty, is_in_stock, low_stock_date, notify_stock_qty, use_config_notify_stock_qty, manage_stock, use_config_manage_stock, stock_status_changed_auto, use_config_qty_increments, qty_increments, use_config_enable_qty_inc, enable_qty_increments, is_decimal_divided, stock_status_changed_automatically, use_config_enable_qty_increments, product_name, store_id, product_type_id, product_status_changed, product_changed_websites, product_brand, format, books_music_type, bottle_size, author_artist, genre*/
/*) VALUES ( '$store', '$websites', '$attset', '$type', '$category', '$sku', '$hasoptions', '$name', '$metatitle', '$metadesc', '$image', '$smallimage', '$thumbnail', '$urlkey ', '$urlpath ', '$pagelayout ', '$optionscontainer', '$imagelabel ', '$smallimagelabel ', '$thumbnaillabel ', '$countryofmanufacture',  '$msrpenabled', '$msrpdisplayactualpricetype', '$giftmessageavailable', '$giftwrappingavailable', '$price', '$specialprice', '$weight', '$msrp', '$giftwrappingprice', '$status', '$isrecurring', '$visibility', '$taxclassid', '$maxfactorcolourshades', '$description', '$shortdescription', '$metakeyword',  '$customlayoutupdate', '$specialfromdate', '$specialtodate', '$newsfromdate',  '$newstodate', '$customdesignfrom', '$customdesignto', '$qty', '$minqty', '$useconfigminqty', '$isqtydecimal', '$backorders', '$useconfigbackorders', '$minsaleqty', '$useconfigminsaleqty',  '$maxsaleqty', '$useconfigmaxsaleqty',  '$isinstock',  '$lowstockdate', '$notifystockqty', '$useconfignotifystockqty', '$managestock', '$useconfigmanagestock', '$stockstatuschangedauto', '$useconfigqtyincrements', '$qtyincrements', '$useconfigenableqtyinc', '$enableqtyincrements', '$isdecimaldivided', '$stockstatuschangedautomatically', '$useconfigenableqtyincrements', '$productname',  '$storeid', '$producttypeid', '$productstatuschanged', '$productchangedwebsites', '$productbrand', '$format', '$booksmusictype', '$bottlesize', '$authorartist', '$genre' )");*/

$RTH=$conn->prepare($sql1);
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

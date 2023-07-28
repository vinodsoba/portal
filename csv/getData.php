<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Generate Export File</title>
</head>
<body>


<?php

include 'connect.php';

$conn = OpenCon();

if(isset($conn)){
    echo "Connected Successfully";
}
else {
    CloseCon($conn);
}

//query database
$sql1 = "select 
bf_catalog.sku,
bf_catalog.category,
bf_catalog.name,
bf_catalog.price,
bf_catalog.product_type,
bf_catalog.stock
from `bf_catalog`
left join `site_upload` 
ON site_upload.sku = bf_catalog.sku 
WHERE bf_catalog.category NOT IN (
select bf_catalog.category from `bf_catalog` 
where bf_catalog.category IN ('Default Category Shop/Bath & Body/Body Sprays & Mists', 'Default Category Shop/Bath & Body/Body Moisturisers', 'Default Category Shop/Cosmetics/Brushes & Applicators')
)
AND bf_catalog.sku in ('L124722', 'T352727', 'B887292', 'M960653', 'J150781')
Order By bf_catalog.sku ASC 
limit 21
";




//$get_array_items = array();
$STR=$conn->prepare($sql1);
$STR->execute();
$count = $STR->rowCount();
echo  '<br> Number of rows returned ' . $count;
?>

<div class="table-responsive" id="data-bf">
    <table class="table table-bordered">
        <tr>
            <th>sku</th>
            <th>store_view_code</th>
            <th>attribute_set_code</th>
            <th>product_type</th>
            <th>category</th>
            <th>product_websites</th>
            <th>name</th>
            <th>product type</th>
            <th>description</th>
            <th>short_description</th>
            <th>weight</th>
            <th>product_online</th>
            <th>tax_class_name</th>
            <th>visibility</th>
            <th>price</th>
            <th>special_price</th>
            <th>special_price_from_date</th>
            <th>special_price_to_date</th>
            <th>url_key</th>
            <th>meta_title</th>
            <th>meta_keywords</th>
            <th>meta_description</th>
            <th>base_image</th>
            <th>base_image_label</th>
            <th>small_image</th>
            <th>small_image_label</th>
            <th>thumbnail_image</th>
            <th>thumbnail_image_label</th>
            <th>swatch_image</th>
            <th>swatch_image_label</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>new_from_date</th>
            <th>new_to_date</th>
            <th>display_product_options_in</th>
            <th>map_price</th>
            <th>msrp_price</th>
            <th>map_enabled</th>
            <th>gift_message_available</th>
            <th>custom_design</th>
            <th>custom_design_from</th>
            <th>custom_design_to</th>
            <th>custom_layout_update</th>
            <th>page_layout</th>
            <th>product_options_container</th>
            <th>msrp_display_actual_price_type</th>
            <th>country_of_manufacture</th>
            <th>additional_attributes</th>
            <th>qty</th>
            <th>out_of_stock_qty</th>
            <th>use_config_min_qty</th>
            <th>is_qty_decimal</th>
            <th>allow_backorders</th>
            <th>use_config_backorders</th>
            <th>min_cart_qty</th>
            <th>use_config_min_sale_qty</th>
            <th>max_cart_qty</th>
            <th>use_config_max_sale_qty</th>
            <th>is_in_stock</th>
            <th>notify_on_stock_below</th>
            <th>use_config_notify_stock_qty</th>
            <th>manage_stock</th>
            <th>use_config_manage_stock</th>
            <th>use_config_qty_increments</th>
            <th>qty_increments</th>
            <th>use_config_enable_qty_inc</th>
            <th>enable_qty_increments</th>
            <th>is_decimal_divided</th>
            <th>website_id</th>
            <th>related_skus</th>
            <th>related_position</th>
            <th>crosssell_skus</th>
            <th>crosssell_position</th>
            <th>upsell_skus</th>
            <th>upsell_position</th>
            <th>additional_images</th>
            <th>additional_image_labels</th>
            <th>hide_from_product_page</th>
            <th>custom_options</th>
            <th>bundle_price_type</th>
            <th>bundle_sku_type</th>
            <th>bundle_price_view</th>
            <th>bundle_weight_type</th>
            <th>bundle_values</th>
            <th>bundle_shipment_type</th>
            <th>associated_skus</th>
            <th>configurable_variations</th>
            <th>configurable_variation_labels</th>
        </tr>

<?php
while($row=$STR->fetch(PDO::FETCH_ASSOC)){
$sku = $row['sku'];
$category =$row['category'];
$name = $row['name'];
$prod_name = preg_replace('/[^A-Za-z0-9\-]/', ' ', $name);
$prod_name = str_replace('x,+', ' ', $prod_name);
$prod_name = str_replace('&', ' ', $prod_name);
$price = $row['price'];

$qty = $row['stock'];

// category



// convert name to url
$urlkey = str_replace(' ', '-', strtolower($name));
$editurlkey = str_replace('&', '', $urlkey);

//meta title convert name

//meta keywords

//meta description

//base image
$nameconvert = str_replace('(EACH)', '.jpg', $name );
$nameconvert1 = preg_replace('/\s+/', '_', $nameconvert);
$nameconverted = ucwords(strtolower($nameconvert1));
$editednameconvert = str_replace('&', '', $nameconverted );
$editednameconvert1 = str_replace('-', '', $editednameconvert );
$editednameconvert2 = str_replace('+', '', $editednameconvert1 );
$editednameconvert3 = str_replace('__', '_', $editednameconvert2 );
//small image

//thumbnail image

// date formated
$today = date('Y-m-d');

// Price
$shipping = 3.35;
$vat = 20;
$ebayfees = 10; //5% ebay fees
$profit = 15; //5% profit

// 20 + 3.35 = 23.35
$total = $price + $shipping;


// 23.35 * 20% = 4.67
$calculatevat = $total * 20 /100;


// inc VAT 23.35 + 4.67 = 28.02
$totalinc = $total + $calculatevat;

//calculate ebay fees ontop of total
// 28.02 * 10% = 2 .80 
$a = $totalinc * $ebayfees / 100;


// 28.02 + 2.80 = 30.82
$subtotal = $totalinc + $a;

//bbop profit at 15%
// 30.82 * 15% = 4.62;
$bbopsubtotal = $subtotal * $profit / 100;

// 30.82 + 4.62 = 35.44
$bboptotal = $subtotal + $bbopsubtotal;

$finalprice = number_format($bboptotal,2);
//echo $finalprice;

    echo  '<tr>
        <td>'.$sku.'</td>
        <td></td>
        <td>Default</td>
        <td>simple</td>
        <td>'.$category.'</td>
        <td>base</td>
        <td>'.$prod_name.'</td>
        <!--description --><td>'.$prod_name.'</td>
        <!--short description --><td>'.$prod_name.'</td>
        <td>'.$weight.'</td>
        <td>1</td>
        <td>Taxable Goods</td>
        <td>Catalog, Search</td>
        <td>'.$finalprice.'</td>
        <td></td>
        <td></td>
        <td></td>
        <td>'.$editurlkey.'</td>
        <td>'.$editednameconvert.'</td>
        <!--metakeywords --><td>'.$metakeywords.'</td>
        <!--metadesc --><td>'.$metadesc.'</td>
        <td>/'.$editednameconvert3.'.jpg</td>
        <td></td>
        <td>/'.$editednameconvert3.'.jpg</td>
        <td></td>
        <td>/'.$editednameconvert3.'.jpg</td>
        <td></td>
        <td>'.$swatchimage.'</td>
        <td></td>
        <td>'.$today.'</td>
        <td>'.$today.'</td>
        <td>'.$today.'</td>
        <td></td>
        <td>Block after Info Column</td>
        <td></td>
        <td></td>
        <td></td>
        <td>Use config</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Use config</td>
        <td></td>
        <td></td>
        <td>'.$qty.'</td>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1000</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
     </tr>';
}

?>

</table>
</div>

<div style="align: center">
    <button name="create_excel" id="create_excel" class="btn btn-success">Create Excel File</button>
</div>
<script>
$(document).ready(function(){
    $('#create_excel').click(function(){
        console.log('button works');
        var excel_data = $('#data-bf').html();
        var page = encodeURI("excel.php?data="+ excel_data);
        window.location = page;

    });
});
</script>
</body>
</html>





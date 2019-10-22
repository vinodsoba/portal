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
foreach($html->find('.description') as $prodName){
 $prodDescription = $prodName->plaintext . "\n";

echo $prodDescription;

}

if(isset($_POST['sku']) || empty($_POST['sku'])){

     include('connect.php');
     //run query to db
     $sql11 ="SELECT item_id, description, brand FROM ne_catalog WHERE item_id = '$sku'";
     $sql12 = "SELECT * FROM product_calc where sku = '$sku'";

     $STH=$conn->prepare($sql11);
          $STH->execute();
            while($row12=$STH->fetch(PDO::FETCH_ASSOC)){
                  $itemId = $row12['item_id'];
                  $description = ucwords(strtolower($row12['description']));
                  $brand = ucwords(strtolower($row12['brand']));

    }


     $RTH=$conn->prepare($sql12);
     $RTH->execute();
     while($row1=$RTH->fetch(PDO::FETCH_ASSOC)){
          $ourprice = $row1['our_price'];
          $itemId = $row1['sku'];
          $productName = ucwords(strtolower($row1['prod_name']));
     }

    $nameconvert = str_replace('(EACH)', '.jpg', $productName );
    $nameconvert1 = preg_replace('/\s+/', '_', $nameconvert);
    $nameconverted = ucwords(strtolower($nameconvert1));

    echo '<form id="form_upload" name="form_upload">
          <label>sku</label>
          <input type="text" name="sku" value="'. $itemId.'"><br>
          <label>websites</label>
          <input type="text" name="store_view_code" value=""><br>
          <label>Attribute Set Code</label>
          <input type="text" name="attribute_set_code" value="Default"><br>
          <label>Product Type</label>
          <input type="text" name="product_type" value="simple"><br>
          <label>Categories</label>
          <input type="text" name="categories" value="Default Category/Shop"><br>
          <label>Product Websites</label>
          <input type="text" name="has_options" value="base"><br>
          <label>Name</label>
          <input type="text" name="name" value="'.$productName.'"><br>
          <label>Description</label>
          <input type="text" name="description" value="'.trim($prodDescription).'"><br>
          <label>Short Description</label>
          <input type="text" name="short_description" value="'.trim($prodDescription).'"><br>
          <label>Weight</label>
          <input type="text" name="weight" value="0"><br>
          <label>Product Online</label>
          <input type="text" name="product_online" value="1"><br>
          <label>Tax Class Name</label>
          <input type="text" name="tax_class_name" value="Taxable Goods"><br>
          <label>Visibility</label>
          <input type="text" name="visibility" value="Catalog, Search"><br>
          <label>Price</label>
          <input type="text" name="price" value="'. $ourprice .'"><br>
          <label>Special Price</label>
          <input type="text" name="special_price" value=""><br>
          <label>Special Price From Date</label>
          <input type="text" name="special_price_from_date" value=""><br>
          <label>Special Price To Date</label>
          <input type="text" name="special_price_to_date" value=""><br>
          <label>URL Key:</label>
          <input type="text" name="urlkey" value="'.str_replace(' ', '_', $nameconverted).'"><br>
          <label>Meta Title</label>
          <input type="text" name="meta_title" value="'.trim($prodName).'"><br>
          <label>Meta Keywords</label>
          <input type="text" name="meta_keywords" value="'.$productName.'"><br>
          <label>Meta Description</label>
          <input type="text" name="metadesc" value="'.trim($prodDescription).'"><br>
          <label>Base Image</label>
          <input type="text" name="base_image" value="/'.str_replace(' ', '_', $nameconverted). '.jpg"><br>
          <label>Base Image Label</label>
          <input type="text" name="base_image_label" value=""><br>
          <label>Small Image</label>
          <input type="text" name="small_image" value="/'.str_replace(' ', '_', $nameconverted).'.jpg"><br>
          <label>Small Image Label</label>
          <input type="text" name="small_image" value=""><br>
          <label>Thumbnail Image</label>
          <input type="text" name="thumbnail_image" value="/'.str_replace(' ', '_', $nameconverted).'.jpg"><br>
          <label>Thumbnail Image Label</label>
          <input type="text" name="thumbnail_image_label" value=""><br>
          <label>Swatch Image</label>
          <input type="text" name="swatch_image" value="0"><br>
          <label>Swatch Image Label</label>
          <input type="text" name="swatch_image" value=""><br>
          <label>Created At</label>
          <input type="text" name="created_at" value="'.date('Y-m-d').'"><br>
          <label>Update At</label>
          <input type="text" name="updated_at" value="'.date('Y-m-d').'"><br>
          <label>New From Date</label>
          <input type="text" name="new_from_date" value="'.date('Y-m-d').'"><br>
          <label>New To Date</label>
          <input type="text" name="new_to_date" value="'.date('Y-m-d').'"><br>
          <label>Display Products Options In</label>
          <input type="text" name="display_products_options_in" value="Block after Info Column"><br>
          <label>Gift Message Available</label>
          <input type="text" name="updated_at" value="Use config"><br>
          <input type="submit" name="submit" value="add">
	</form>';




$my_save_dir = 'images/';
$destination ='updatedimages/';

}
else {
	echo "sku is not set so upload is not done";
}

if(is_dir($my_save_dir)){
  echo "Dir exists";
} else {
  echo "directory doesnt";
   mkdir($my_save_dir);
}

if(is_dir($my_save_dir)){
$urlpic = "$imageurl";

$filename = basename($urlpic);
$complete_save_loc = $my_save_dir .$filename;
file_put_contents($complete_save_loc, file_get_html($urlpic));
    echo dirname($my_save_dir).'</br>';
      $file=opendir($my_save_dir);
        while(($data=readdir($file))!==false){
            $i++;
            if($data!='.' && $data!='..'){
                  $info=pathinfo($data,PATHINFO_EXTENSION);

                  $processedImage = rename($my_save_dir. '/' . $data, $my_save_dir.'/'.$nameconverted .$i.'.jpg');

            }
        }

}
$file=opendir($my_save_dir);
$complete_image = $destination .$processedImage;
file_put_contents($complete_image, file_get_html($my_save_dir));






?>
<div id="demo"></div>

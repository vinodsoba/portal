<?php 
include("header.php");
include('simple_html_dom.php');
$sku = $_POST['sku']; 
$weburl = $_POST['web_url'];
$imageurl = $_POST['image_url'];

$websiteUrl = "$weburl";
$html = file_get_html($websiteUrl);
foreach($html->find('c-product-short-desc,.product-description') as $prodName){                    
 $description = $prodName->plaintext . "\n"; 
echo $sku;
echo $description;
     /*include('connect.php');

     $FTP=$conn->prepare("UPDATE product_honeypot SET product_desc = '$string' WHERE sku = '$sku'");
     $FTP->execute();*/
     
}

if(isset($_POST['sku']) || empty($_POST['sku'])){
     include('connect.php');

     //run query to db
     $sql11 ="SELECT sku, product_name, model, brand, price, product_desc FROM product_honeypot WHERE sku = '$sku'";
     $sql12 = "SELECT our_price, prod_name FROM product_calc where sku = '$sku'";

     $STH=$conn->prepare($sql11);
     $STH->execute();
     while($row12=$STH->fetch(PDO::FETCH_ASSOC)){
      $sku = $row12['sku'];
      $proddesc = $row12['product_desc'];
      $brandname = $row12['brand'];
      $prodname = $row12['product_name'];
  
     }
      
     $RTH=$conn->prepare($sql12);
     $RTH->execute();
     while($row1=$RTH->fetch(PDO::FETCH_ASSOC)){
          $ourprice = $row1['our_price'];
          $name = $row1['prod_name'];
     }
          $nameconvert = str_replace('(EACH)', '.jpg', $name);
          $nameconvert1 = preg_replace('/\s+/', '_', $nameconvert);
          $nameconverted = strtolower($nameconvert1);
         

     echo '<form id="form_upload" name="form_upload">
          <label>Store</label>
          <input type="text" name="store" value="admin"><br>
          <label>websites</label>
          <input type="text" name="websites" value="base"><br>
          <label>Attribute Set</label>
          <input type="text" name="attribute_set" value="Default"><br>
          <label>Type</label>
          <input type="text" name="type" value="simple"><br>
          <label>Category</label>
          <input type="text" name="category_ids" value="84,86"><br>
          <label>sku</label>
          <input type="text" name="sku" value="'. $sku .'"><br>    
          <label>Has Options</label>
          <input type="text" name="has_options" value="0"><br>
          <label>Name</label>
          <input type="text" name="name" value="'. $prodname .'"><br>
          <label>Meta Title</label>
          <input type="text" name="meta_title" value="'.$prodname.'"><br>
          <label>Meta Description</label>
          <input type="text" name="meta_description" value="'. trim($description) .'"><br>
          <label>Image</label>
          <input type="text" name="image" value="/'.str_replace(' ', '_', $nameconverted).'"><br>
          <label>Small Image</label>
          <input type="text" name="small_image" value="/'.str_replace(' ', '_', $nameconverted).'"><br>
          <label>Thumbnail</label>
          <input type="text" name="thumbnail" value="/'.str_replace(' ', '_', $nameconverted).'"><br>
          <label>URL Key:</label>
          <input type="text" name="url_key" value="'.str_replace(' ', '_', $nameconverted).'.html"><br>
          <label>URL PATH:</label>
          <input type="text" name="url_path" value="'.str_replace(' ', '_', $nameconverted).'.html"><br>         
          <label>Page Layout</label>
          <input type="text" name="page_layout" value="No layout updates"><br>
          <label>Options Container</label>
          <input type="text" name="options_container" value="Block after Info Column"><br>
          <label>Msrp Enabled</label>
          <input type="text" name="msrp_enabled" value="Use config"><br>
          <label>Msrp Display Actual Price Type</label>
          <input type="text" name="msrp_display_actual_price_type" value="Use config"><br>
          <label>Gift Message Available</label>
          <input type="text" name="gift_message_available" value="No"><br>
          <label>Gift Wrapping Avaiable</label>
          <input type="text" name="gift_wrapping_available" value="No"><br>
          <label>Price</label>
          <input type="text" name="price" value="'. $ourprice .'"><br>
          <label>Special Price</label>
          <input type="text" name="special_price" value=""><br>
          <label>Status</label>
          <input type="text" name="status" value="Enabled"><br>
          <label>Is Recurring</label>
          <input type="text" name="is_recurring" value="No"><br>
          <label>Visibility</label>
          <input type="text" name="visibility" value="Catalog, Search"><br>
          <label>Tax Class Id</label>
          <input type="text" name="tax_class_id" value="none"><br>
          <label>Description</label>
          <input type="text" name="description" value="'. trim($description) .'"><br>
          <label>Short Description</label>
          <input type="text" name="short_description" value="'. trim($description) .'"><br>
          <label>Meta Keyword</label>
          <input type="text" name="meta_keyword" value="'. $prodname .'"><br>
          <label>QTY</label>
          <input type="text" name="qty" value="3"><br>
          <label>Min QTY</label>
          <input type="text" name="min_qty" value="1"><br>
          <label>Product Name</label>
          <input type="text" name="product_name" value="'. $prodname .'"><br>
          <label>Store ID</label>
          <input type="text" name="store_id" value="0"><br>
          <label>Product Type ID</label>
          <input type="text" name="product_type_id" value="simple"><br>
          <label>Product Brand</label>
          <input type="text" name="product_brand" value="'. $brandname .'"><br>
          <label>Bottle Size</label>
          <input type="text" name="bottle_size" value=""><br>
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
$url = "$imageurl";

$filename = basename($url);
$complete_save_loc = $my_save_dir .$filename;
file_put_contents($complete_save_loc, file_get_contents($url));
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
file_put_contents($complete_image, file_get_contents($my_save_dir));    



?>
<div id="demo"></div>
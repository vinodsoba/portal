<?php 
include("header.php");

$sku = $_POST['sku']; 

if(isset($_POST['sku']) || empty($_POST['sku'])){
	include('connect.php');

	//run query to db
	$sql11 ="SELECT prod_code, prod_description, brand_name, prod_name FROM product WHERE prod_code = '$sku'";
     $sql12 = "SELECT our_price FROM product_calc where sku = '$sku'";

	$STH=$conn->prepare($sql11);
	$STH->execute();
	while($row12=$STH->fetch(PDO::FETCH_ASSOC)){
	 $prodcode = $row12['prod_code'];
	 $proddesc = $row12['prod_description'];
	 $brandname = $row12['brand_name'];
      $prodname = $row12['prod_name'];
	}
       $name = "{$brandname} {$prodname}";   

     $RTH=$conn->prepare($sql12);
     $RTH->execute();
     while($row1=$RTH->fetch(PDO::FETCH_ASSOC)){
          $ourprice = $row1['our_price'];
     }

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
          <input type="text" name="category_ids" value="76"><br>
          <label>sku</label>
          <input type="text" name="sku" value="'. $prodcode .'"><br>    
          <label>Has Options</label>
          <input type="text" name="has_options" value="0"><br>
          <label>Name</label>
          <input type="text" name="name" value="'. $name .'"><br>
          <label>Meta Title</label>
          <input type="text" name="meta_title" value="'.$metatitle.'"><br>
          <label>Meta Description</label>
          <input type="text" name="meta_description" value="'.$metadesc.'"><br>
          <label>Image</label>
          <input type="text" name="image" value="/2/2/img/img1.jpg"><br>
          <label>Small Image</label>
          <input type="text" name="small_image" value="/2/2/img/img1.jpg"><br>
          <label>Thumbnail</label>
          <input type="text" name="thumbnail" value="/2/2/img/'.$nameofimage.'.jpg"><br>
          <label>URL Key:</label>
          <input type="text" name="url_key" value="'.$name.'.html"><br>
          <label>URL PATH:</label>
          <input type="text" name="url_path" value="'.$name.'.html"><br>         
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
          <input type="text" name="special_price" value="0"><br>
          <label>Status</label>
          <input type="text" name="status" value="Enabled"><br>
          <label>Is Recurring</label>
          <input type="text" name="is_recurring" value="No"><br>
          <label>Visibility</label>
          <input type="text" name="visibility" value="Catalog"><br>
          <label>Tax Class Id</label>
          <input type="text" name="tax_class_id" value="none"><br>
          <label>Description</label>
          <input type="text" name="description" value="'. $description .'"><br>
          <label>Short Description</label>
          <input type="text" name="short_description" value="'. $shortdescription .'"><br>
          <label>Meta Keyword</label>
          <input type="text" name="meta_keyword" value="'. $metakeyword .'"><br>
          <label>QTY</label>
          <input type="text" name="qty" value="'. $qty .'"><br>
          <label>Min QTY</label>
          <input type="text" name="min_qty" value="'. $minqty .'"><br>
          <label>Product Name</label>
          <input type="text" name="product_name" value="'. $prodname .'"><br>
          <label>Store ID</label>
          <input type="text" name="store_id" value="0"><br>
          <label>Product Type ID</label>
          <input type="text" name="product_type_id" value="simple"><br>
          <label>Product Brand</label>
          <input type="text" name="product_brand" value="'. $brandname .'"><br>
          <label>Bottle Size</label>
          <input type="text" name="bottle_size" value="'.$bottlesize.'"><br>
          <input type="submit" name="submit" value="add">
	</form>';
	
}
else {
	echo "sku is not set so upload is not done";
}

?>
<div id="demo"></div>
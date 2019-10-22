<?php
include('connect.php');
$sql13 = "SELECT * from product_honeypot";
$array1 = array('sku', 'product_name', 'model', 'brand', 'price', 'product_desc','category');

?>
<?php include('header.php'); ?>
 
    <div class="row">        
          <div class="col-lg-1 col-xs-1" style="width:50px">
              <b><?php echo $array1[0] ?></b><br>
            <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $sku = $row['sku'];echo $sku;?><br><?php
                } }?>
          </div>
          <div class="col-lg-4 col-xs-4" style="width:250px"><b><?php echo $array1[1] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodName = $row['product_name'];echo $prodName;?><br><?php
                } }?>
          </div>
          
          <div class="col-lg-3 col-xs-3" style="width:150px"><b><?php echo $array1[3] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $brand = $row['brand'];echo $brand;?><br><?php
                } }?>
            
          </div>   
          <div class="col-lg-2 col-xs-2" style="width:90px"><b><?php echo $array1[4] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $price = $row['price'];echo $price;?><br><?php
                } }?>       
          </div>    
          <div class="col-lg-2 col-xs-2" style="width:50px"><b><?php echo $array1[6] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $category = $row['category'];echo $category;?><br><?php
                } }?>       
          </div>                              
    </div>

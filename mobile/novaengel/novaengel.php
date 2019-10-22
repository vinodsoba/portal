<?php
include('connect.php');
$sql13 = "SELECT * from ne_perfumes";
$array1 = array('brand', 'item_id', 'description', 'ean_1', 'price_euro', 'price');

?>
<?php include('header.php'); ?>
 
    <div class="ui-grid-d">
    <div class="ui-block-a">
      <div class="ui-bar ui-bar-e">
         <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $brand = $row['brand'];echo $brand;?><br><?php
                } }?>
      </div>
    </div>
    <div class="ui-block-b">
      <div class="ui-bar ui-bar-e">
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $itemId = $row['item_id'];echo $itemId;?><br><?php
            } }?>
      </div>
    </div>
    <div class="ui-block-c">
      <div class="ui-bar ui-bar-e">
        <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $description = $row['description'];echo $description;?><br><?php
          } }?>
      </div>
    </div>
    <div class="ui-block-d">
      <div class="ui-bar ui-bar-e">
        <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $ean1 = $row['ean_1'];echo $ean1;?><br><?php
                } }?>  
      </div>
    </div>
    <div class="ui-block-e">
      <div class="ui-bar ui-bar-e">
        <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $priceEuro = $row['price_euro'];echo $priceEuro;?><br><?php
        } }?> 
      </div>
    </div>
    <div class="ui-block-f">
      <div class="ui-bar ui-bar-e">
        <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $price = $row['price'];echo $price;?><br><?php
        } }?>  
      </div>
    </div>
</div><!-- /grid-c -->

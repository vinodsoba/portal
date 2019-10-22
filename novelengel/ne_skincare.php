<?php
include('connect.php');
$sql13 = "SELECT * from ne_skincare_makeup";
$array1 = array('p_id', 'brand', 'item_id', 'description', 'ean_1', 'ean_2', 'ean_3','qty','eur_price','price');

?>
<?php include('header.php'); ?>
<table width="2900">  
  <tr>
                     
          <td><b><?php echo $array1[0] ?></b><br>
            <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodid = $row['p_id'];echo $prodid;?><br><?php
                } }?>
          </td>
            <td><b><?php echo $array1[1] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodBrand = $row['brand'];echo $prodBrand;?><br><?php
                } }?>
          </td>
          <td><b><?php echo $array1[2] ?></b><br>
          <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $itemId = $row['item_id'];echo $itemId;?><br><?php
                } }?>
            
          </td>    
          <td><b><?php echo $array1[3] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodDesc = $row['description'];echo $prodDesc;?><br><?php
                } }?>
            
          </td>   
          <td><b><?php echo $array1[4] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $ean1 = $row['ean_1'];echo $ean1;?><br><?php
                } }?>       
          </td>    
           <td><b><?php echo $array1[5] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $ean2 = $row['ean_2'];echo $ean2;?><br><?php
                } }?>       
          </td>  

           <td><b><?php echo $array1[6] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $ean3 = $row['ean_3'];echo $ean3;?><br><?php
                } }?>       
          </td> 
      
           <td><b><?php echo $array1[7] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $qty = $row['qty'];echo $qty;?><br><?php
                } }?>       
          </td> 
          <td><b><?php echo $array1[8] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $priceEuro = $row['eur_price'];echo $priceEuro;?><br><?php
                } }?>       
          </td>  
           <td><b><?php echo $array1[9] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $price = $row['price'];echo $price;?><br><?php
                } }?>       
          </td>    
          <td><?php echo '<button id="upload-to-web">upload to website</button>'; ?></td>                                            
          
    </tr>
 </table> 
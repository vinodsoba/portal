<?php
include('connect.php');
$sql13 = "SELECT * from ne_catalog";
$array1 = array('p_id', 'item_id', 'name', 'brand', 'ean', 'description',  'stock', 'rsp', 'is_offer', 'price_from', 'price');

?>
<?php include('header.php'); ?>
<table width="3900">  
  <tr>
                     
          <td width="auto"><b><?php echo $array1[0] ?></b><br>
            <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodid = $row['p_id'];echo $prodid;?><br><?php
                } }?>
          </td>
          
          <td><b><?php echo $array1[1] ?></b><br>
          <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $itemId = $row['item_id'];echo $itemId;?><br><?php
                } }?>
            
          </td>
            <td><b><?php echo $array1[2] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodName = $row['name'];echo $prodName;?><br><?php
                } }?>
          </td>    
            <td><b><?php echo $array1[3] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodBrand = $row['brand'];echo $prodBrand;?><br><?php
                } }?>
          </td>
          <td><b><?php echo $array1[4] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $ean = $row['ean'];echo $ean;?><br><?php
                } }?>       
          </td>     
          <td><b><?php echo $array1[5] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodDesc = $row['description'];echo $prodDesc;?><br><?php
                } }?>
            
          </td>   
           
           <td><b><?php echo $array1[6] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $stock = $row['stock'];echo $stock;?><br><?php
                } }?>       
          </td>  

           <td><b><?php echo $array1[7] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $rsp = $row['rsp'];echo $rsp;?><br><?php
                } }?>       
          </td> 
           <td><b><?php echo $array1[8] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $isoffer = $row['is_offer'];echo $isoffer;?><br><?php
                } }?>       
          </td> 
           <td><b><?php echo $array1[9] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $pricefrom = $row['price_from'];echo $pricefrom;?><br><?php
                } }?>       
          </td> 
          <td><b><?php echo $array1[10] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $price = $row['price'];echo $price;?><br><?php
                } }?>       
          </td>  
          <td><?php echo '<button id="upload-to-web">upload to website</button>'; ?></td>                                                      
    </tr>
 </table> 
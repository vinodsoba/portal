<?php
include('connect.php');
$sql13 = "SELECT * from product_honeypot";
$array1 = array('sku', 'product_name', 'model', 'brand', 'price', 'product_desc','category');

?>
<?php include('header.php'); ?>
<table width="3800">  
  <tr>
                     
          <td><b><?php echo $array1[0] ?></b><br>
            <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $sku = $row['sku'];echo $sku;?><br><?php
                } }?>
          </td>
            <td><b><?php echo $array1[1] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodName = $row['product_name'];echo $prodName;?><br><?php
                } }?>
          </td>
          <td><b><?php echo $array1[2] ?></b><br>
          <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $model = $row['model'];echo $model;?><br><?php
                } }?>
            
          </td>    
          <td><b><?php echo $array1[3] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $brand = $row['brand'];echo $brand;?><br><?php
                } }?>
            
          </td>   
          <td><b><?php echo $array1[4] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $price = $row['price'];echo $price;?><br><?php
                } }?>       
          </td>    
           <td><b><?php echo $array1[5] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodDesc = $row['product_desc'];echo $prodDesc;?><br><?php
                } }?>       
          </td>  

           <td><b><?php echo $array1[6] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $category = $row['category'];echo $category;?><br><?php
                } }?>       
          </td> 
           
          <td><?php echo '<button id="upload-to-web">upload to website</button>'; ?></td>                                            
          
    </tr>
 </table> 
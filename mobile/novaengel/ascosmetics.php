<?php
include('connect.php');
$sql13 = "SELECT * from product";
$array1 = array('prod_id', 'prod_code', 'prod_name', 'prod_description', 'am_price', 'uk_retail', 'manu_name', 'brand_name', 'cat_name');

?>
<?php include('header.php'); ?>
<table width="2900">  
  <tr>
                     
          <td><b><?php echo $array1[0] ?></b><br>
            <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodid = $row['prod_id'];echo $prodid;?><br><?php
                } }?>
          </td>
            <td><b><?php echo $array1[1] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodCode = $row['prod_code'];echo $prodCode;?><br><?php
                } }?>
          </td>
          <td><b><?php echo $array1[2] ?></b><br>
          <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodName = $row['prod_name'];echo $prodName;?><br><?php
                } }?>
            
          </td>    
          <td><b><?php echo $array1[3] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $prodDesc = $row['prod_description'];echo $prodDesc;?><br><?php
                } }?>
            
          </td>   
          <td><b><?php echo $array1[4] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $amPrice = $row['am_price'];echo $amPrice;?><br><?php
                } }?>       
          </td>    
           <td><b><?php echo $array1[5] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $ukRetail = $row['uk_retail'];echo $ukRetail;?><br><?php
                } }?>       
          </td>  

           <td><b><?php echo $array1[6] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $manuName = $row['manu_name'];echo $manuName;?><br><?php
                } }?>       
          </td> 
           <td><b><?php echo $array1[7] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $brandName = $row['brand_name'];echo $brandName;?><br><?php
                } }?>       
          </td> 
           <td><b><?php echo $array1[8] ?></b><br>
           <?php $result=$conn->prepare($sql13);if($result->execute()){ while($row=$result->fetch(PDO::FETCH_ASSOC)){
                $catName = $row['cat_name'];echo $catName;?><br><?php
                } }?>       
          </td>    
          <td><?php echo '<button id="upload-to-web">upload to website</button>'; ?></td>                                            
          
    </tr>
 </table> 
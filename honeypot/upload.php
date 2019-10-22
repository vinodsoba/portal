<?php
include("header.php");
?>

<form action="fill_fields.php"  method="POST">
<label>sku</label>
<input type="text" title="Type in a name" name="sku" placeholder="enter description first">
<label>Web URL</label>
<input type="text" title="Type in a web address" name="web_url"><br>
<label>Image URL</label>
<input type="text" title="Type in a web address" name="image_url">
<input type="submit" value="go" name="submit" >
</form>




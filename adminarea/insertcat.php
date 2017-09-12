<?php
include("includes/db.php");

?>


<!DOCTYPE HTML>
<html>
<head>
<title>MY SHOP</title>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>    

</head>
<body>

<form method="POST"  action="insertcat.php" enctype="multipart/form-data">
<table width="700px" height="650px" align="center" border='1px' >

<tr align= "center">
<td colspan="2" height=80px><h1>Insert New Product</h1></td>
</tr>
<tr>
<td align="right" ><b>Product Title</b></td>
<td ><input type="text" name="product_title" size="50"/></td>
</tr>


<tr align="center">
<td colspan="2"><input type="submit" name="insert_product" value="Insert Product"/></td>
</tr>

</table>
</form>
</body>
</html>


<?php






if(isset($_POST['insert_product']))
{
	
	//text data variables
	$product_title=$_POST['product_title'];
    
	
	
	
	
	if($product_title=='')
	{
		echo "<script>alert('please fill all the fields')</script>";
	    exit();
	}
	else
	{   
       
		
		$insert_product = "insert into cat (cat_title) values ('$product_title')";
	
	    $run_product= mysqli_query($con, $insert_product);
		
		if($run_product)
		{
			echo "<script> alert('Product inserted successfully') </script>";
		}
	
	}	
}

?> 


 












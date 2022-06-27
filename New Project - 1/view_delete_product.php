<?php

	include "index.php";

//~~~~~~~~~~~~~~~~~~~~~	Delete Product~~~~~~~~~~~~~~~~~~~~~//

	if(isset($_REQUEST['delete']))						// if press delete button 

	{
	
		foreach($_REQUEST['p_id'] as $product_id)		//select multiple product id 
		{
       
			mysqli_query($con,"DELETE FROM product WHERE product_id=$product_id");

		}
			echo "Data Deleted";

	}


//~~~~~~~~~~~~~~~~~~~~	View Product~~~~~~~~~~~~~~~~~~~~~//

	$select1 = mysqli_query($con, "select * from product")or die("Table Not Found".mysqli_error($con));

			echo "<br><br><br><br>br><br><br><br><br><center><h3>View Product</h3><table cellspacing='15' border='10' cellpadding='30'style='border: 3px solid grey; border-collapse: collapse;' >";

			echo "<tr><th>Product ID</th><th>Product Name</th><th>Product M.R.P.</th><th>UPC</th><th>Product Status</th><th>Product Photo</th>


            <th> <input type='submit' value='Delete' name='delete' form='form1' class='btn btn-warning'> </th>
            <th> <input type='button' value='Edit' class='btn btn-primary'> </th></tr>";



		while($select2 = mysqli_fetch_array($select1))			// Fetch data from database
		{
			echo "<tr>";
			echo "<td>".$select2['product_id']."</td>";
			echo "<td>".$select2['product_name']."</td>";
			echo "<td>".$select2['product_mrp']."</td>";
			echo "<td>".$select2['product_upc']."</td>";
			echo "<td>".$select2['product_status']."</td>";
			echo "<td><img src='". $select2['product_image']. "'height='100'  width='100'></td>";
	
	?>
	
	

			<form action="" id="form1" method="POST">
	
	<?php
	
			echo "<th> <input type='checkbox' name='p_id[]' value=".$select2['product_id'].">
            </th>";


			echo "<td><a href='insert_update_product.php?update=".$select2['product_id']."'>Edit</td></td>";
			echo "</tr>";
		}

			echo "</table></center>";
?>




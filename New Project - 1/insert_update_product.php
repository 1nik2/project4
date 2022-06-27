<?php
include "index.php";

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~		Update	Product	~~~~~~~~~~~~~~~~~~~~~~//

	if(isset($_REQUEST['update']))
	{
		$update = $_REQUEST['update'];
		//echo $update;
	
		$edit = mysqli_query($con, "select * from product where product_id='$update'")or die("Select Error".mysqli_error($con));
		
		$edit = mysqli_fetch_array($edit);
		//echo $edit['product_name'];
	
		if(@$_REQUEST['Submit']=='Update Product')				// if press submit button and value is update product
		{
			$new_id = $_REQUEST['old_id'];	
			$product_name = $_REQUEST['product_name'];
			$product_mrp = $_REQUEST['product_mrp'];
			$product_upc = $_REQUEST['product_upc'];
			$product_status = $_REQUEST['product_status'];
			$product_image = $_REQUEST['old_image'];
	
			if($_FILES['product_image']['name']!="")
			{
				$product_image = "img/".$_FILES['product_image']['name'];
				move_uploaded_file(@$_FILES['product_image']['tmp_name'],$product_image); 	
			}
	
			//echo $product_name,$product_mrp,$product_upc,$product_status,$product_image;
	
				mysqli_query($con, "update product set  product_name='$product_name' , product_mrp='$product_mrp' , product_upc='$product_upc' ,
				product_status='$product_status' , product_image='$product_image'  where product_id=$new_id " )or die("Insert Error".mysqli_error($con));
	
				echo "<script>alert('Data Updated')</script>";
		
		}
	}

//~~~~~~~~~~~~~~~~~~~~~~~~~~~	Insert	Product~~~~~~~~~~~~~~~~~~~~~~~~~~~//

	if(@$_REQUEST['Submit']=='Insert Product')					// if press submit button and value is insert product
	{
		$product_name = $_REQUEST['product_name'];
		$product_mrp = $_REQUEST['product_mrp'];
		$product_upc = $_REQUEST['product_upc'];
		$product_status = $_REQUEST['product_status'];
		@$product_image = "img/".$_FILES['product_image']['name'];
	
		//echo $product_name,$product_mrp,$product_upc,$product_status,$product_image;
		move_uploaded_file(@$_FILES['product_image']['tmp_name'],$product_image); 

		mysqli_query($con, "insert into product set product_name='$product_name' , product_mrp='$product_mrp' , product_upc='$product_upc' , product_status='$product_status' , product_image='$product_image'" )or die("Insert Error".mysqli_error($con));
	
		echo "<script>alert('Data Inserted')</script>";
	}
?>
	
	
	<section class="insert_update_product-form section-padding">
                <div class="container" style="margin-top:15px;">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h3 class="hero-title text-center mb-5">Insert Product</h3>                           
							
                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">

<!-- Form start for product insert or update -->

                                    <form role="form" name="porduct_form" method="post" action="" enctype="multipart/form-data" >
			
			<!-- product id -->
								
										<div class="form-floating my-4">
                                            <input type="hidden" name="old_id" class="form-control" value="<?= @$edit['product_id']?>"  readonly >
                                        </div>

			<!-- product name -->
			
                                        <div class="form-floating my-4">
                                            <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name"  value="<?= @$edit['product_name']?>"  required>

                                            <label for="product_name">Enter Product Name</label>
                                        </div>
            
			<!-- product MRP -->
			
									   <div class="form-floating my-4">
                                            <input type="text" name="product_mrp" class="form-control" placeholder="Enter Product MRP" value="<?= @$edit['product_mrp']?>" required>

                                            <label for="product_mrp">Enter Product MRP</label>
                                        </div>
                                       
			<!-- product UPC -->
			
									   <div class="form-floating my-4">
                                            <input type="text" name="product_upc" class="form-control" placeholder="Enter Product UPC" value="<?= @$edit['product_upc']?>"required>

                                            <label for="product_upc">Enter Product UPC</label>
                                       </div>
										
			<!-- product status -->
			
									   <div class="form-floating my-4">
                                           <span style="color:grey;"> Product Status &nbsp; &nbsp; 
										   &nbsp; &nbsp;  Available   
											<input type="radio" name="product_status"  value="Available"  
											<?php if(@$edit['product_status']=='Available')echo 'checked';?> required>
											
												&nbsp; &nbsp;
											
											Not-Available
											<input type="radio" name="product_status"  value="Not-Available" 
											<?php if(@$edit['product_status']=='Not-Available')echo 'checked';?> required>
											</span>

                                       </div>
                                       
			<!-- product image -->
			
									   <div class="form-floating my-4">
                                            <center><input type="file" name="product_image" class="form-control"></center>
                                       </div>
			
			<!-- product image for update part -->
			
									   <div class="form-floating my-4">
											<input name="old_image" readonly class="form-control" value="<?php echo @$edit['product_image'];?>"> 
									   </div>
                                       
            <!-- submit button -->
			
										<input type="submit" name="Submit" class="btn custom-btn form-control mt-4 mb-3" value="<?php if(isset($_REQUEST['update'])) echo 'Update Product'; else echo 'Insert Product' ?>">
										
										
									</form>
<!-- Form End -->
									
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </section>

        </main>

</body>
</html>

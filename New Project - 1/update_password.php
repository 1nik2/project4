<?php

	include "config.php";

		//echo $_SESSION['$user_mobile'];							//Check SESSION

		$user_mobile = $_SESSION['user_mobile'];				

			$select = mysqli_query($con, "select * from registetion where user_mobile='$user_mobile' ");

			$data = mysqli_fetch_array($select);					//Fetch Data from database using mobile number
			
		
			$_SESSION['user_name'] = $data['user_name'];			//SESSION for print user name in Welcome Header side 
			
		
		if (isset($_REQUEST['change_password']))					// if press the Submit(change_password) button 
		{
			$update_password = $_REQUEST['update_password'];
			$re_type_password = $_REQUEST['re_type_password'];

				//echo $update_password,$re_type_password,$user_mobile;
    
			if ($update_password !== $re_type_password)
			{
				echo "<script>alert('Your Password And Re-type Password Is Different..!!')</script>";
			} 
			else
			{
				mysqli_query($con,"update registetion set user_password='$update_password' where user_mobile='$user_mobile' ");

				$_SESSION['update_password'] = true;  
	 
				header("location:registetion_success.php");
			}
		}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Nik's Fashion-Update Password</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        
		<script>												// script for refreshing page
			if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
			}
</script>

    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

            <section class="update-password-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Change Your Password</h1>                           
							
                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">

<!-- Form Start for update password -->

                                    <form role="form" name="update_form" method="post" action="" >

		<!-- Change password -->

                                        <div class="form-floating my-4">
                                            <input type="password" name="update_password" class="form-control" placeholder="Change Your Password" required>

                                            <label for="update_password">Change Your Password</label>
                                        </div>

        <!-- Re-type password -->
		
									   <div class="form-floating my-4">
                                            <input type="password" name="re_type_password" class="form-control" placeholder="Re-tyrp Your Password" required>

                                            <label for="re_type_password">Re-tyrp Your Password</label>
                                        </div>

		<!-- submit button -->
		
										 <button type="submit" name="change_password" class="btn custom-btn form-control mt-4 mb-3">
                                         Change My Password  
                                        </button>
										
										
									</form>
<!-- Form End -->

                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </section>

        </main>

       
        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>


</html>

<?php

include "config.php";

	if(isset($_REQUEST['forgot']))								// If press the Submit (forgot) button 
	{
		$user_name = $_REQUEST['user_name'];
		$user_mobile = $_REQUEST['user_mobile'];

			$select = mysqli_query($con,"select * from registetion where user_name='$user_name' AND user_mobile=$user_mobile")or die("select error");
																// Select data From Databse 
			if(mysqli_num_rows($select)!=0)
			{
				$recive = mysqli_fetch_array($select);				//FETCH DATA FROM REGISTRATION TABLE
				//echo $recive['user_mobile'];
		
				$user_mobile = $recive['user_mobile'];
				//echo $user_mobile;
				
				$_SESSION['$user_mobile'] = $user_mobile;
				//echo $_SESSION['$user_mobile'];
				
					header("location:security_question.php");
			}

			else
			{
				echo "<script>alert('Invalid User Name or Mobile Number..!!')</script>";
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

        <title>Nik's Fashion forgot password</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        
	<script>												// script for refreshing page
		if (window.history.replaceState) 
		{
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

            <section class="forgot-password-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Forgot-Password</h1>

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">

<!-- Form start for forgot password -->

                                    <form role="form" action="" method="post">

			<!-- User name -->
                                        <div class="form-floating mb-4 p-0">
                                            <input type="text" name="user_name" class="form-control" placeholder="Full Name" required>
                                            <label for="user_name">Full Name</label>
                                        </div>
										
			<!-- User Mobile Number -->
			
                                        <div class="form-floating p-0">
                                            <input type="text" name="user_mobile" class="form-control" placeholder="Mobile Number" required>
                                            <label for="user_mobile">Mobile Number</label>
                                        </div>

			<!-- Submit button -->
			
                                        <button type="submit" name="forgot" class="btn custom-btn form-control mt-4 mb-3">
                                         Submit   
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

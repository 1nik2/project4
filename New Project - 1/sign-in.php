<?php 

	include "config.php";


	if(isset($_REQUEST['user_signin']))					// When press the Submit (user_signin) button 
	{
	
		$user_mail = $_REQUEST['user_mail'];			
		$user_password = $_REQUEST['user_password'];
	
		//echo $user_mail , $user_password;				// Check the value are show 
	
		$select = mysqli_query($con,"SELECT * FROM registetion WHERE user_mail='$user_mail' AND user_password='$user_password' ");

														// All data matching form registetion table 	
		

	if(mysqli_num_rows($select)>0) 						//mysqli query for select number of row from database table
		{
			$fetch = mysqli_fetch_array($select);		//Fetch data from data base for SESSION print user name

			$user_name = $fetch['user_name'];
			$_SESSION['$user_name'] = $user_name; 
	
				header('location:index.php');

		}
		else
		{
		
			echo "<script>alert('Invalid User-id or Password');</script>";
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

        <title>Nik's Fashion-Sign In</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        
		<script>													// script for refreshing page
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

            <section class="sign-in-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Sign In</h1>

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                   
<!--	Form Start for User Data email and password -->

								<form role="form" action="" method="post">

                                        <div class="form-floating mb-4 p-0">
                                            <input type="email" name="user_mail" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>

	<!-- Fill Email for user -->
                                            <label for="user_mail">Email address</label>
                                        </div>

                                        <div class="form-floating p-0">
                                            <input type="password" name="user_password" class="form-control" placeholder="Password" required>
	<!-- Fill Password -->
                                            <label for="user_password">Password</label>
                                        </div>

                                        <input type="submit" name="user_signin" class="btn custom-btn form-control mt-4 mb-3">
										
										<p class="text-center"><a href="forgot_password.php">Forgot-password?</a></p>
                                        <p class="text-center">Don’t have an account? <a href="sign-up.php">Create One</a></p>
                                        		
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

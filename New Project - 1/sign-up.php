<?php

	include "config.php";

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Nik's Fashion-Sign Up</title>

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

            <section class="sign-up-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Sign Up</h1>                           
							
	<?php 
	
																// USER DATA INSERT
	
		if(isset($_REQUEST['user_signup']))						//if press the submit (user_signup) button 		
		{
			$user_name = $_REQUEST['user_name'];
			$user_mobile = $_REQUEST['user_mobile'];
			$user_mail = $_REQUEST['user_mail'];
			$user_password = $_REQUEST['user_password'];
			$security_question = $_REQUEST['security_question'];
			$security_answer = $_REQUEST['security_answer'];
				
				//echo $user_name, $user_mobile, $user_mail, $user_password, $security_question, $security_answer;
	
					$_SESSION['$user_name'] = $user_name;			//SESSION for showing user name in header 
				
						//echo $_SESSION['$user_name'];
		
																	// CHECK USER ALREADY REGISTERD OR NOT
  
					$select = mysqli_query($con, "select * from registetion where user_name='$user_name' AND user_mobile='$user_mobile'  ");

						if (mysqli_num_rows($select) != 0) 
						{
			
							echo "<script> alert ('This Mobile Number Is Already Registerd')</script>";
							echo "<script> window.location.replace('sign-in.php'); </script> ";

						} 
		
						else 
						{
							mysqli_query($con, "insert into registetion set user_name='$user_name' , user_mobile='$user_mobile' , user_mail='$user_mail', user_password='$user_password' , security_question='$security_question' , security_answer='$security_answer'")or die("Table Not Found".mysqli_error($con));

								echo "<script> window.location.replace('registetion_success.php'); </script> ";

						}
		
		}
	
?>

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">

<!-- Form start for user information -->

                                    <form role="form" name="form1" method="post" action="" onsubmit="return check();">

										<div class="form-floating my-4">
                                            <input type="text" name="user_name" class="form-control" placeholder="Full Name" required>
			
			<!-- User name -->
                                            <label for="user_name">Full Name</label>
                                        </div>
										
										<div class="form-floating my-4">
                                            <input type="text" name="user_mobile" class="form-control" placeholder="Mobile Number" required>
			
			<!-- User Mobile Number -->
			
                                            <label for="user_mobile">Mobile Number</label>
                                        </div>
										
										
                                        <div class="form-floating my-4">
                                            <input type="email" name="user_mail"  pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
			
			<!-- User e-mail Address -->
			
                                            <label for="user_mail">Email address</label>
                                        </div>

                                        <div class="form-floating my-4">
                                            <input type="password" name="user_password" id="password"  class="form-control" placeholder="Password" required>
			
			<!-- User password -->
			
                                            <label for="user_password">Password</label>
                                        </div>
                                       
									   <div class="form-floating my-4">
                                            <input type="password" name="confirm_password" id="c_password"  class="form-control" placeholder="Comfirm Password" required>
			
			<!-- confirm password -->
			
                                            <label for="c_password">Comfirm Password</label>
                                        </div>
												
										<div class="form-floating my-4">
                                        <span style="color:blue">Password Recovery Security Question</span>

			<!-- Security question -->
			
											<select name="security_question" class="form-control" >
												
												<option value="What is the name of your favorite childhood friend?" >What is the name of your favorite childhood friend?
												</option>
												
												<option value="What is Your grandmother's first name?">What is Your grandmother's first name?
												</option>
												
												<option value="Who was your childhood hero?">Who was your childhood hero?</option>
											
											</select>
										
										</div>	
			
			<!-- Security answer -->
			
										<div class="form-floating my-4"> 
											<input type="text" name="security_answer" class="form-control" placeholder="Answer" required>
													
													<label for="security_answer">Answer</label>
										</div>
			
			<!-- User Data submit button -->
			
                                        <button type="submit" name="user_signup" class="btn custom-btn form-control mt-4 mb-3">
                                            Create account
                                        </button>

                                        <p class="text-center">Already have an account? Please <a href="sign-in.php">Sign In</a></p>
			
                                    </form>
<!-- User Signup Form End -->
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

<script>
	function check()										//function for password and confirm password are match or not 
	{
		
		password_check = document.getElementById('password').value;
		//alert(password_check);

		confirm_password_check = document.getElementById('c_password').value;

		if(password_check==confirm_password_check)
		{
			alert ("password Match..!!!!");
		}
		else 
		{
			alert ("password Not Match..!!!!");
			return false;
		}
		
	}
		
</script>

		

   </body>


</html>

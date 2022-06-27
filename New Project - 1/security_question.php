<?php

	include "config.php";

	//echo $_SESSION['$user_mobile'];						// Check SESSION 

		$user_mobile = $_SESSION['$user_mobile'];				

			$select = mysqli_query($con,"select security_question from registetion where user_mobile='$user_mobile' ");
			
			$record = mysqli_fetch_array($select);			// Fetch Data using mobile number from database
 
			//echo $record['security_question'];			// print security_question in the security_question text box


				if(isset($_REQUEST['submit_answer']))	   // if press submit(submit_answer) button 
				{
					
					$security_question = $_REQUEST['security_question'];
					$security_answer = $_REQUEST['security_answer'];
					$user_mobile = $_SESSION['$user_mobile'];
    
					//echo $security_question,$security_answer,$user_mobile;
						
						$select1 = mysqli_query($con, "select security_question , security_answer from registetion where security_question='$security_question' AND security_answer='$security_answer' AND user_mobile='$user_mobile' ");
				
							$record1 = mysqli_fetch_array($select1);
	
					//echo $record1['security_question'];
					//echo $record1['security_answer'];
    
					if(mysqli_num_rows($select1)!=0)
					{
						header("location:update_password.php");
					}
					else
					{
						echo "<script>alert('Your Answer Is Wrong..!!')</script>";
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

        <title>Nik's Fashion Security Question</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        
	<script>														// script for refreshing page
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

            <section class="security_question_form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Password Recovery Security Question</h1>

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
 
<!-- Form Start For Security question -->

                                   <form role="form" action="" method="post">
		
		<!-- Password Recovrey Security qustion print from database -->
		
                                        <div class="form-floating mb-4 p-0">
                                            <input type="text" name="security_question" class="form-control" placeholder="Password Recovery Security Question" style="color:blue; font-weight:bold;" value="<?php 
													echo @$record['security_question']; 
											
											?>" readonly required>

                                            <label for="rp" style="color:grey;" >Password Recovery Security Question</label>
                                        </div>
		
		<!-- Security Answer -->
		
                                        <div class="form-floating p-0">
                                            <input type="text" name="security_answer" class="form-control" placeholder="Type Your Answer" required>

                                            <label for="security_answer">Type Your Answer</label>
                                        </div>
		
		<!-- Button For submit answer -->
		
                                        <button type="submit" name="submit_answer" class="btn custom-btn form-control mt-4 mb-3">
                                         Submit Answer  
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

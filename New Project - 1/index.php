<?php

include "config.php";

//echo $_SESSION['$user_name'];									//Check SESSION 
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Nik's Little Fashion</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
		<link rel="stylesheet" href="css/all.min.css">
		<link rel="stylesheet" href="css/fontawesome.min.css">
		
				<link rel="stylesheet" href="css/custom.css">

		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                        <strong><span> N!k'$ </span> &nbsp; Fashion</strong>
                    </a>

    <!-- Insert Product navigation button -->
	
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="insert_update_product.php">Insert Product</a>
                            </li>
    
	<!-- View Product navigation button -->
	
							<li class="nav-item">
                                <a class="nav-link" href="view_delete_product.php">View Product</a>
                            </li>
                        </ul>

	<!-- Show Welcome and print user name -->
	
                        <div class="d-none d-lg-block">
						
						<p>Welcome <?php if(isset($_SESSION['$user_name'])) echo "&nbsp;" .$_SESSION['$user_name']; ?></p>	

	<!-- Log out button -->
	
                            <a title="Logout" href="logout.php" >Logout</a>
								
						</div>
                    </div>
                </div>
            </nav>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>


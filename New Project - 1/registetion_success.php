<?php

include "index.php";

?>

<html>
	<head>
		<title>Registration Success</title>
	</head>

	<body>
		<div class="container" style="margin-top: 270px; margin-bottom:200px;">

			<h1 class="text-center" style="font-weight:bold; font-size:50px; color:skyblue;">Congratulations</h1>
	
			<?php
			
				if(isset($_SESSION['update_password'])){
			
			?>
			
				<p class="text-center" style="font-weight:bold; font-size:30px;"> Your Password Successfully Changed..!</p>
				
				
            <?php
			}
			else
			{
			?>
			
				<p class="text-center" style="font-weight:bold; font-size:30px;"> You Are Registred Successfully..!</p>
		   
			<?php
			
			} 
			
			?>
		</div>
	</body>
</html>
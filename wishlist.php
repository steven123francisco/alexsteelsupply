<!DOCTYPE html>
<html lang="en">
   <!-- Head folded -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title> [Blank] Alex Steel Supply</title>
		<link rel="icon" href="./img/AlexSteelSupplyLogoBlue.png" type="image">

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
         <link type="text/css" rel="stylesheet" href="css/style.css"/>
        

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
        <?php include('headerandnav.php'); ?>

		

		<!-- SECTION -->
		<div class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

                    <!-- Product panel-->
                        <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                    <input type="checkbox" class="checkbox-btn" name="SELECITEM" value="ITEM"><b> &nbsp My Wishlist</b><br>
                                                    </div>
                           
                           
                                                <!--panel body-->
                                                <div class="panel-body">
                                                    <input type="checkbox" class="checkbox-btn" name="SELECTITEM" value="ITEM">
                                                    <div class="cart-list">
                                                                            
                                                                            <div class="cart-img">
                                                                            <img src="./img/product01.png" alt="" >
                                                                            </div>
                                                                        <div class="product-body">
                                                                            <h4 class="cart-product-name"><a href="#">product name goes here</a></h4>
                                                                            <h5 class="cart-product-price"><span class="qty"><b>1x</b></span> &nbsp&nbsp&nbsp ₱980.00 </h5>
                                                                            <p class="cart-product-details"><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                            
                                                                            
                                                                        </div>
                                                                
                                                    </div>
                                                    
                                                    
                                                    
                                                </div>
                                                <!--insert new panel-->
                                                
                                                <!--/insert new panel-->
                                                
                                                
                                                <!--/panel body-->
                       
                        </div>
                        <a href=""><button class="addtocart-button">Add to cart</button></a>
                    <!--/product panel-->

                
                

                        

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->





		

   		<?php include('footer.php'); ?>

	</body>
</html>
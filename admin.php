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
         <link type="text/css" rel="stylesheet" href="css/stevenstyle.css"/>


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
		<div class="section-admin">
        <!--Section-admin-->
        


                    
        <!--sidenavbar-->          
        <div class="side-nav">
        
                    
                        <nav>
                            
                            <ul>
                                <li>
                                    <a href="#">
                                        <span><i class="fa fa-user"></i></span>
                                        <span>Admin</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <span><i class="fa fa-cube"></i></span>
                                        <span>Product</span>
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="#">
                                        <span><i class="fa fa-bar-chart"></i></span>
                                        <span>View Daily Sales</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span><i class="fa fa-bar-chart"></i></span>
                                        <span>View Sales History</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span><i class="fa fa-bar-chart"></i></span>
                                        <span>Inventory Management</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span><i class="fa fa-exclamation-circle"></i></span>
                                        <span>Order Request</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <span><i class="fa fa-calendar-check-o"></i></span>
                                        <span>Delivery Schedule</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span><i class="fa fa-edit"></i></span>
                                        <span>Customer Management</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span><i class="fa fa-edit"></i></span>
                                        <span>Invoices</span>
                                    </a>
                                </li>
                            
                            
                            







                            </ul>

                        </nav>  
                        
                        
                    </div>

                    <!--/sidenavbar-->

                    <!--admin-details-->
                         <div id="admin-details" class="col-md-3">
                                 <div class="panel panel-default">
                                        <div class="panel-heading"><b>Personal Details</b>
                                        <a href="" class="admin-btn"><button class="fa fa-edit" >EDIT</button></a>
                                        </div>
                                                <div class="panel-body">
                                                    
                                                    <p>FirstName: &nbsp Steven</p>
                                                    <hr>
                                                    <p>LastName: &nbsp Francisco</p>
                                                    <hr>
                                                    <p>Position: &nbsp CEO</p>
                                                    <hr>
                                                    <p>Birthday: &nbsp August 3,1994</p>
                                                    <hr>
                                                    <p>Gender: &nbsp Male</p>
                                                    <hr>
                                                    <p>Mobile Number: &nbsp09057904098</p>
                                                    

                                                </div>
                                                
                                
                                                
                     </div>
                     <!--/admin-details-->

                                        











          </div>
          <!--/section-admin-->
                    
                    

			<!-- container -->
			<div class="container">
                

				<!-- row -->
				<div class="row">
                                        <div id="order-request" class="col-md-7">
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><b>Order Request</b>
                                                <a href="" class="remove-btn"><button class="fa fa-trash">Remove</button></a>
                                            </div>
                                            <div class="panel-body">
                                                           
                                                            <div class="order-request-table">   
                                                            <table border=0>
                                                                <tr>
                                                                    <th><input type="checkbox" name="" value="">Product</th>
                                                                    <th>Payment Method</th>
                                                                    <th>Subtotal Item(s)</th>
                                                                    <th>Shipping Fee</th>
                                                                    <th>Total</th>
                                                                    <th>Action</th>

                                                                </tr>
                                                        
                                                                <tr>
                                                                <td><input type="checkbox" name="vehicle1" value="Bike">Steel Pipe</td>
                                                                <td>Cash-on-Delivery (COD)</td>
                                                                <td>₱980.00</td>
                                                                <td>₱50.00</td>
                                                                <td>₱1030.00</td>
                                                                <td><a href=""><button class="approve-btn">Approved</button></a><br>
                                                                <a href=""><button class="cancel-btn">Cancel</button></a></td>
                                                                </tr>

                                                                <tr>
                                                                <td><input type="checkbox" name="vehicle1" value="Bike">Steel Pipe</td>
                                                                <td>Cash-on-Delivery (COD)</td>
                                                                <td>₱50.00</td>
                                                                <td>₱50.00</td>
                                                                <td>₱1030.00</td>
                                                                <td><a href=""><button class="approve-btn">Approved</button></a><br>
                                                                <a href=""><button class="cancel-btn">Cancel</button></a></td>
                                                                </tr>

                                                                <tr>
                                                                <td><input type="checkbox" name="vehicle1" value="Bike">Steel Pipe</td>
                                                                <td>Cash-on-Delivery (COD)</td>
                                                                <td>₱980.00</td>
                                                                <td>₱50.00</td>
                                                                <td>₱1030.00</td>
                                                                <td><a href=""><button class="approve-btn">Approved</button></a><br>
                                                                <a href=""><button class="cancel-btn">Cancel</button></a></td>
                                                                </tr>

                                                                <tr>
                                                                <td><input type="checkbox" name="vehicle1" value="Bike">Steel Pipe</td>
                                                                <td>Cash-on-Delivery (COD)</td>
                                                                <td>₱980.00</td>
                                                                <td>₱50.00</td>
                                                                <td>₱1030.00</td>
                                                                <td><a href=""><button class="approve-btn">Approved</button></a><br>
                                                                <a href=""><button class="cancel-btn">Cancel</button></a></td>
                                                                </tr>

                                                                <tr>
                                                                <td><input type="checkbox" name="vehicle1" value="Bike">Steel Pipe</td>
                                                                <td>Cash-on-Delivery (COD)</td>
                                                                <td>₱980.00</td>
                                                                <td>₱50.00</td>
                                                                <td>₱1030.00</td>
                                                                <td><a href=""><button class="approve-btn">Approved</button></a><br>
                                                                <a href=""><button class="cancel-btn">Cancel</button></a></td>
                                                                </tr>


                                                            
                                                            </table>
                                                            </div> 



                                            </div>
                                        </div>
                                        </div>

                                        <div id="order-request" class="col-md-7">
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><b>Order Request</b></div>
                                            <div class="panel-body">Panel Content</div>
                                            
                                        </div>
                                        </div>
                    
                    
                    



				</div>
				<!-- /row -->

			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->





		

   		<?php include('footer.php'); ?>

	</body>
</html>

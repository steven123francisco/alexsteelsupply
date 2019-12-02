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





			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

                                                    <div id="inventory-details" class="col-md-10">
                                                    <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                
                                                                 <span><i class="fa fa-edit"></i></span>&nbspManage Items
                                                                </div>
                                                                        <!--inventorypanel-->
                                                                        <div class="panel-body">
                                                                      

                                                                                <div class="search-box">
                                                                                <input class="search-txt" type="search" name="" placeholder="Search Product">
                                                                                <a class="search-item-btn" href="#"><button><i class="fa fa-search"></i>&nbspEnter</button></a>
                                                                                </div>
                                                                                
                                                                                
                                                                                <a href="#"><button class="add-item-btn"><i class="fa fa-plus"></i>&nbspAdd item</button></a>
                                                                                <br><hr>
                                                                                            <div class="inventory-table">
                                                                                                <table border=0>
                                                                                                    <tr>
                                                                                                    <th>Product Photo</th>
                                                                                                    <th>Product Name</th>
                                                                                                    <th>Size</th>
                                                                                                    <th>Color</th>
                                                                                                    <th>Quantity</th>
                                                                                                    <th>Price</th>
                                                                                                    <th>Options</th>
                                                                                                    
                                                                                                    </tr>
                                                                                                    
                                                                                                    <tr>
                                                                                                        <td>--</td>
                                                                                                        <td>lorem ipsum</td>
                                                                                                        <td>x</td>
                                                                                                        <td>Red</td>
                                                                                                        <td>32</td>
                                                                                                        <td>₱980.00</td>
                                                                                                        <td>               <div class="dropdown">
                                                                                                                            <button class="action-btn" type="button" data-toggle="dropdown">Action
                                                                                                                            <span class="caret"></span></button>
                                                                                                                            <ul class="dropdown-menu">
                                                                                                                            <li><center><a href=""><button class="inv-delete-btn"><i class="fa fa-trash"></i>Delete</button></a></center></li>
                                                                                                                            <li><center><a href=""><button class="inv-edit-btn"><i class="fa fa-edit"></i>Edit</button></a></center></li>
                                                                                                                            
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                        </td>
                                                                                                   </tr>
                                                                                                   
                                                                                                   <tr>
                                                                                                        <td>--</td>
                                                                                                        <td>lorem ipsum</td>
                                                                                                        <td>x</td>
                                                                                                        <td>Red</td>
                                                                                                        <td>32</td>
                                                                                                        <td>₱980.00</td>
                                                                                                        <td>               <div class="dropdown">
                                                                                                                            <button class="action-btn" type="button" data-toggle="dropdown">Action
                                                                                                                            <span class="caret"></span></button>
                                                                                                                            <ul class="dropdown-menu">
                                                                                                                            <li><center><a href=""><button class="inv-delete-btn"><i class="fa fa-trash"></i>Delete</button></a></center></li>
                                                                                                                            <li><center><a href=""><button class="inv-edit-btn"><i class="fa fa-edit"></i>Edit</button></a></center></li>
                                                                                                                            
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                        </td>
                                                                                                   </tr>

                                                                                                   <tr>
                                                                                                        <td>--</td>
                                                                                                        <td>lorem ipsum</td>
                                                                                                        <td>x</td>
                                                                                                        <td>Red</td>
                                                                                                        <td>32</td>
                                                                                                        <td>₱980.00</td>
                                                                                                        <td>               <div class="dropdown">
                                                                                                                            <button class="action-btn" type="button" data-toggle="dropdown">Action
                                                                                                                            <span class="caret"></span></button>
                                                                                                                            <ul class="dropdown-menu">
                                                                                                                            <li><center><a href=""><button class="inv-delete-btn"><i class="fa fa-trash"></i>Delete</button></a></center></li>
                                                                                                                            <li><center><a href=""><button class="inv-edit-btn"><i class="fa fa-edit"></i>Edit</button></a></center></li>
                                                                                                                            
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                        </td>
                                                                                                   </tr>

                                                                                                   <tr>
                                                                                                        <td>--</td>
                                                                                                        <td>lorem ipsum</td>
                                                                                                        <td>x</td>
                                                                                                        <td>Red</td>
                                                                                                        <td>32</td>
                                                                                                        <td>₱980.00</td>
                                                                                                        <td>               <div class="dropdown">
                                                                                                                            <button class="action-btn" type="button" data-toggle="dropdown">Action
                                                                                                                            <span class="caret"></span></button>
                                                                                                                            <ul class="dropdown-menu">
                                                                                                                            <li><center><a href=""><button class="inv-delete-btn"><i class="fa fa-trash"></i>Delete</button></a></center></li>
                                                                                                                            <li><center><a href=""><button class="inv-edit-btn"><i class="fa fa-edit"></i>Edit</button></a></center></li>
                                                                                                                            
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                        </td>
                                                                                                   </tr>

                                                                                                   <tr>
                                                                                                        <td>--</td>
                                                                                                        <td>lorem ipsum</td>
                                                                                                        <td>x</td>
                                                                                                        <td>Red</td>
                                                                                                        <td>32</td>
                                                                                                        <td>₱980.00</td>
                                                                                                        <td>               <div class="dropdown">
                                                                                                                            <button class="action-btn" type="button" data-toggle="dropdown">Action
                                                                                                                            <span class="caret"></span></button>
                                                                                                                            <ul class="dropdown-menu">
                                                                                                                            <li><center><a href=""><button class="inv-delete-btn"><i class="fa fa-trash"></i>Delete</button></a></center></li>
                                                                                                                            <li><center><a href=""><button class="inv-edit-btn"><i class="fa fa-edit"></i>Edit</button></a></center></li>
                                                                                                                            
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                        </td>
                                                                                                   </tr>

                                                                                                   <tr>
                                                                                                        <td>--</td>
                                                                                                        <td>lorem ipsum</td>
                                                                                                        <td>x</td>
                                                                                                        <td>Red</td>
                                                                                                        <td>32</td>
                                                                                                        <td>₱980.00</td>
                                                                                                        <td>               <div class="dropdown">
                                                                                                                            <button class="action-btn" type="button" data-toggle="dropdown">Action
                                                                                                                            <span class="caret"></span></button>
                                                                                                                            <ul class="dropdown-menu">
                                                                                                                            <li><center><a href=""><button class="inv-delete-btn"><i class="fa fa-trash"></i>Delete</button></a></center></li>
                                                                                                                            <li><center><a href=""><button class="inv-edit-btn"><i class="fa fa-edit"></i>Edit</button></a></center></li>
                                                                                                                            
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                        </td>
                                                                                                   </tr>

                                                                                                   <tr>
                                                                                                        <td>--</td>
                                                                                                        <td>lorem ipsum</td>
                                                                                                        <td>x</td>
                                                                                                        <td>Red</td>
                                                                                                        <td>32</td>
                                                                                                        <td>₱980.00</td>
                                                                                                        <td>               <div class="dropdown">
                                                                                                                            <button class="action-btn" type="button" data-toggle="dropdown">Action
                                                                                                                            <span class="caret"></span></button>
                                                                                                                            <ul class="dropdown-menu">
                                                                                                                            <li><center><a href=""><button class="inv-delete-btn"><i class="fa fa-trash"></i>Delete</button></a></center></li>
                                                                                                                            <li><center><a href=""><button class="inv-edit-btn"><i class="fa fa-edit"></i>Edit</button></a></center></li>
                                                                                                                            
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                        </td>
                                                                                                   </tr>

                                                                                                   <tr>
                                                                                                        <td>--</td>
                                                                                                        <td>lorem ipsum</td>
                                                                                                        <td>x</td>
                                                                                                        <td>Red</td>
                                                                                                        <td>32</td>
                                                                                                        <td>₱980.00</td>
                                                                                                        <td>               <div class="dropdown">
                                                                                                                            <button class="action-btn" type="button" data-toggle="dropdown">Action
                                                                                                                            <span class="caret"></span></button>
                                                                                                                            <ul class="dropdown-menu">
                                                                                                                            <li><center><a href=""><button class="inv-delete-btn"><i class="fa fa-trash"></i>Delete</button></a></center></li>
                                                                                                                            <li><center><a href=""><button class="inv-edit-btn"><i class="fa fa-edit"></i>Edit</button></a></center></li>
                                                                                                                            
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                        </td>
                                                                                                   </tr>

                                                                                                   <tr>
                                                                                                        <td>--</td>
                                                                                                        <td>lorem ipsum</td>
                                                                                                        <td>x</td>
                                                                                                        <td>Red</td>
                                                                                                        <td>32</td>
                                                                                                        <td>₱980.00</td>
                                                                                                        <td>               <div class="dropdown">
                                                                                                                            <button class="action-btn" type="button" data-toggle="dropdown">Action
                                                                                                                            <span class="caret"></span></button>
                                                                                                                            <ul class="dropdown-menu">
                                                                                                                            <li><center><a href=""><button class="inv-delete-btn"><i class="fa fa-trash"></i>Delete</button></a></center></li>
                                                                                                                            <li><center><a href=""><button class="inv-edit-btn"><i class="fa fa-edit"></i>Edit</button></a></center></li>
                                                                                                                            
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                        </td>
                                                                                                   </tr>

                                                                                                   <tr>
                                                                                                        <td>--</td>
                                                                                                        <td>lorem ipsum</td>
                                                                                                        <td>x</td>
                                                                                                        <td>Red</td>
                                                                                                        <td>32</td>
                                                                                                        <td>₱980.00</td>
                                                                                                        <td>               <div class="dropdown">
                                                                                                                            <button class="action-btn" type="button" data-toggle="dropdown">Action
                                                                                                                            <span class="caret"></span></button>
                                                                                                                            <ul class="dropdown-menu">
                                                                                                                            <li><center><a href=""><button class="inv-delete-btn"><i class="fa fa-trash"></i>Delete</button></a></center></li>
                                                                                                                            <li><center><a href=""><button class="inv-edit-btn"><i class="fa fa-edit"></i>Edit</button></a></center></li>
                                                                                                                            
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                        </td>
                                                                                                   </tr>




                                                                                                    </table>
                                                                                            </div>





















                                                                        
                                                                        <!--/inventorypanel-->
                                                                         </div>
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

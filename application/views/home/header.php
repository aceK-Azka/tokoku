<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Online Food</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/slick.css') ?>"/>
		<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/slick-theme.css') ?>"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/nouislider.min.css') ?>"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"/>
		<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/accountbtn.css') ?>"/>
		
		
		
         
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <style>
        #navigation {
          background:#000080;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right,#000080,#000080);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right,#000080,#000080); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

          
        }
        #header {
  
            background: #000080;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #000080, #000080);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #000080, #000080); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
        }
        #top-header {
              
  
            background: #000080;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #190A05, #000080);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #190A05, #000080); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #footer {
            background: #000080;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #000080);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #000080); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


          color: #FFFF00;
        }
        #bottom-footer {
            background: #000080;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #000080);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #000080); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          

        }
        .footer-links li a {
          color: #FFFF00;
        }
        .mainn-raised {
            
            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }
       
        .glyphicon{
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
    .glyphicon-chevron-left:before{
        content:"\f053"
    }
    .glyphicon-chevron-right:before{
        content:"\f054"
    }
        

       
        
        </style>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			
			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
								<font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
                                        Online Food
                                    </font>
									
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Makanan</option>
										<option value="1">Minuman </option>
									</select>
									<input class="input" id="search" type="text" placeholder="Search here">
									<button type="submit" id="search_btn" class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<div>
                                    
                                </div>
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
		<nav id='navigation'>
			<!-- container -->
            <div class="container" id="">
            <ul class="navbar-nav ms-auto">
                    <li class="">
                        <a class="" aria-current="" href="<?= site_url('home'); ?>">Home</a>
                    </li>
                    <li class="">
                        <a class="" href="<?= site_url('menu/show_menu'); ?>">Menu</a>
                    </li>
                    <li class="">
                        <a class="" href="<?= site_url('login/logout'); ?>">logout</a>
                    </li>
                </ul>
            </div>
				<!-- responsive-nav -->
				
			<!-- /container -->
		</nav>
            

		<!-- NAVIGATION -->
		
		<div class="modal fade" id="Modal_login" role="dialog">
                        <div class="modal-dialog">
													
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            <!-- </div>
                            <div class="modal-body">
                            <?php
                                include "login_form.php";
    
                            ?> -->
          
                            </div>
                            
                          </div>
													
                        </div>
                      </div>
                <div class="modal fade" id="Modal_register" role="dialog">
                        <div class="modal-dialog" style="">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <!-- <div class="modal-body">
                            <?php
                                include "register_form.php";
    
                            ?> -->
          
                            </div>
                            
                          </div>

                        </div>
                      </div>
		
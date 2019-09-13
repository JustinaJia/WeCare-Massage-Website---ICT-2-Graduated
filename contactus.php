<?php

session_start();

include_once('include/config.php');

?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="img/logo.png" rel="shortcut icon">

		<title>Why Us | WeCare Massage and Natural Theraphy </title>

		<!-- Bootstrap -->

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link href="css/styles.css?v=1.2" rel="stylesheet">

		<link href="css/queries.css?v=1.2" rel="stylesheet">

		<link href="css/readmore.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="css/flexslider.css?v=1.2" type="text/css">

		<link rel="stylesheet" href="css/animate.css" type="text/css">

		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>

		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

		<![endif]-->

        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>

			/* The overlay effect (full height and width) - lays on top of the container and over the image */

			.overlay {

			  position: absolute;

			  height: 100%;

			  width: 500px;

			  margin-bottom:20px;

			  opacity: 0;

			  transition: .3s ease;

			  background: URL("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56621.6159180479!2d152.97503350007412!3d-27.505009135848912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b9156cdadcf48b7%3A0x72f7b1801d279b83!2sWeCARE+Massage+%26+Natural+Therapy!5e0!3m2!1sen!2sau!4v1517023868763");

			}

			

			/* When you mouse over the container, fade in the overlay icon*/

			.container:hover .overlay {

			  opacity: 1;

			}

			

			/* The icon inside the overlay is positioned in the middle vertically and horizontally */

			.gap {

			  height: 100%;

					  text-align: center;
			  display: block;
    margin-left: auto;
    margin-right: auto;
    width: 70%;

			}

			.gaphigh{

				width:100%;

				height:400px;

		
    
}
			body {font-family: Arial, Helvetica, sans-serif;}

			* {box-sizing: border-box;}



			.input-container {

				display: -ms-flexbox; /* IE10 */

				display: flex;

				width: 100%;

				margin-bottom: 15px;

			}



			.icon {

				padding: 10px;

				background: #D6DC9C;

				color: white;

				min-width: 50px;

				text-align: center;

			}



			.input-field {

				width: 100%;

				padding: 10px;

				outline: none;

			}





			.center {

				display: block;

				margin-left: auto;

				margin-right: auto;

				width: 30%;

			}



					.block {

				display: block;

				width: 100%;

				border: none;

				background-color: #99C68E;

				color: white;

				padding: 14px 28px;

				font-size: 16px;

				cursor: pointer;

				text-align: center;

				align-content:center;



			}



			.block:hover {

				background-color: #ddd;

				color: black;

			}



			* {

				box-sizing: border-box;

			}



			.column {

				float: left;

				width: 25%;

				padding: 5px;

			}



			.column1 {

				float: left;

				width: 33.33%;

				padding: 2px;

				 word-wrap: break-word;

					 }





			/* Clearfix (clear floats) */

			.row::after {

				content: "";

				clear: both;

				display: table;

			}



			/* Set a style for the submit button */

			.btn {

				background-color: #D6DC9C;

				color: white;

				padding: 15px 20px;

				border: none;

				cursor: pointer;

				width: 100%;

				opacity: 0.9;

			}



			.btn:hover {

				opacity: 1;

			}

		</style>



    </head>

    

	<body>

		<header>

        	<?php include("include/nav.inc")?>

        	<script src="js/nav.js"></script>

     		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56621.6159180479!2d152.97503350007412!3d-27.505009135848912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b9156cdadcf48b7%3A0x72f7b1801d279b83!2sWeCARE+Massage+%26+Natural+Therapy!5e0!3m2!1sen!2sau!4v1517023868763" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>

		</header>

        <div class="container-fluid intro" id="about">

        	<div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <h1 align="center" style="color:#EDDA74" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif" font-size:"18px" >CONTACT US</h1>

                    <p class="text-intro">Welcome to our endearing family. At WeCare, our mission is to assist you to fully relax and unwind from the hectic pace of everyday life. Not only do we ensure your peace at our care, but also in your day to day life. We are located within a short distance from Brisbane CBD which has proven to be convenient to most our clients. Come and experience the blissful solitude.  </p>

                </div>

            </div>

        </div>

		<div class="container-fluid">       

        	<div class="row">

        		<div class="col-md-8 col-md-offset-2">

					<h2 align="center" style="color:#99C68E" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif" font-size:"18px" >LOCATE US</h2>

					<div class="container gaphigh" style="align:center;">

                    	<img src="img/Location.png" alt="Avatar" class="gap" >

                      		<div class="gap" style="height: 100%; width: 500px;">
<br>

                            	
                                                  		</div>

                	</div>

				</div>

			</div>

			<br>

    		<br>

     		<div class="row" style="margin-top:10px; ">

           		<div class="col-md-8 col-md-offset-2">

  					<div class="column1 col-md-8">

						<p style="font-size:1vw; color:#99C68E"><b>ADDRESS</b></p>

						<p style="font-size:1vw;">WeCARE Massage & Natural Therapy 

							<br>Shop 8/974 Waterworks Road.

							<br>The Gap, QLD 4061

							<br>Brisbane, Queensland, Australia</p>

  					</div>

  					<div class="column1 col-md-8">

						<p style="font-size:1vw; color:#99C68E;"><b>OPENING HOURS</b></p>

						<p align="justify" style="font-size:1vw;">MONDAY TO THURSDAY: 9:00am - 5:30pm <BR>
                       FRIDAY TO SUNDAY : 9:00am - 5:00pm </p>

						﻿

  					</div>

  					<div class="column1 col-md-8">

						<p style="font-size:1vw; color:#99C68E"><b>WALK IN APPOINTMENTS WELCOME</b></p>

						<p style="font-size:1vw;">TEL: (07) 3511 1550</p>

  					</div>

  				</div>

 			</div>

		</div>

		<div class="container-fluid">

			<div class="row">

				<div class="col-md-8 col-md-offset-2"></div>

            </div>

			</div>



		  <section class="discover">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <a href="book.php" class="shop-btn">BOOK YOUR MASSAGE ONLINE</a>
                    </div>
                </div>
            </div>
        </section>
        
        <?php include 'include/footer.inc'?>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script><script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider.js"></script><script src="js/jquery.flexslider.js"></script>
        <script src="js/scripts.js"></script><script src="js/scripts.js"></script>
        <script src="js/modernizr.js"></script><script src="js/modernizr.js"></script>
        <script src="js/waypoints.min.js"></script><script src="js/waypoints.min.js"></script>
    </body>
</html>
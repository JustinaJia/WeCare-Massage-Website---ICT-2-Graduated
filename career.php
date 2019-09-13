<?php

session_start();

include_once('include/config.php');

?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="img/logo.png" rel="shortcut icon">

		<title>Careers | WeCare Massage and Natural Theraphy  </title>

    	<meta name="description" content="Family owned Therapeutic Massage located close to Brisbane CBD with an array of specialized relaxation massages at WeCare Massage and Natural Theraphy."/>

   		<meta name="keywords" content="therapeutic massage, pregnancy massage, neck massage, spa massage, remedial massage, wecare massage and natural theraphy"/>

        

		<!-- Bootstrap -->

 		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link href="css/styles.css?v=1.2" rel="stylesheet">

		<link href="css/queries.css?v=1.2" rel="stylesheet">

		<link href="css/readmore.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="css/flexslider.css?v=1.2" type="text/css">

		<link rel="stylesheet" href="css/animate.css" type="text/css">

		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>

		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

		<![endif]-->



		<style>

		

	.collapsible {

    background-color: #FAF0E6;

    color: 	#A0522D;

    cursor: pointer;

    padding: 18px;

    width: 100%;

    border: none;

    text-align: left;

    outline: none;

    font-size: 15px;

}



.active, .collapsible:hover {

    background-color:#F8EADD;

}



.content {

    padding: 0 18px;

    display: none;

    overflow: hidden;

    background-color: #FFFFFF;

	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
   text-align: left;

}



</style>

        



		<script src="js/show_text.js"></script>

    </head>

    

    <body>	

        <header>

            <?php include("include/nav.inc")?>

            <script src="js/nav.js"></script>

    

      <div class="flexslider">

                <ul class="slides">

                    <li>

                        <a href="#"><img src="img/careers 1.jpg" alt="treatment1" class="img-rounded"></a> <span></span>

                    </li>

                    <li>

                        <a href="#"><img src="img/careers2.jpg" alt="treatment2" class="img-rounded"></a> <span></span>

                    </li>

                </ul>

            </div>

        </header>    

        <div class="container-fluid intro" id="about">

            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <h1 align="center" style="color:#EDDA74" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif" font-size:"18px" >JOIN US</h1>

                    <p class="text-intro">We at WeCare Massage treat our employees like one of our own. Have a look at our latest career opportunities and if you think you've got what it takes to enter the team please do send us your resume to wecare@gmail.com. </p>

                </div>

            </div>

        </div>

           

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

            

          


<button class="collapsible">+ Massage Therapist</button>

<div class="content">

    <p align="left">We require a professional who:
<ul style="list-style-type:square">


<li>Cares about what they do and how their clients respond.

<li>Possess the ability to work without direct supervision.

<li>Be a highly motivated person, with self initiative and a commitment to excellence and professionalism.

<li>Be an excellent communicator who has empathy, respect, compassion and the ability to connect with people.

<li>Has strong attention to detail, particularly in regards to hygiene and cleanliness.

<li>For Remedial Massage Therapists MUST have:

<li>Minimum Diploma in Remedial Massage Therapy. We are open to check other diplomas or certifications!

<li>Health fund provider recognition

<li>Professional association membership

<li>Have own professional indemnity / public liability insurance

Own ABN number.</li></ul></p>

</div>

<button class="collapsible">+ Sports Massage Therapist</button>

<div class="content">

  <p>Great massage centre which is well located.You must have a visa to work in Australia to apply.



Minimum Cert IV in Massage Therapy or equivalent qualification
<ul style="list-style-type:square">



<li>Your own ABN and insurance

<li>National police check (we can help you get this if you don't have it already)

<li>Experience in one or more of these modalities: Remedial, Deep Tissue, Swedish, Sports, Pregnancy, or Corporate massage

<li>Excellent customer service and communication skills</li></ul></p>

</div>

<button class="collapsible">+ Remedial Massage Therpahist</button>

<div class="content">

  <p>We are looking for a person who

  <ul style="list-style-type:square">

  <li>Minimum Diploma in Remedial Massage Therapy or similar (or close to graduating)

 <li>Have or able to attain health fund provider numbers

 <li>Member of or eligible to become a member of a reputable professional body

 <li>Professional indemnity / public liability insurance.

 <li>Confident to work on musculoskeletal conditions, sports injuries and during all stages of pregnancy

 <li>Display a high level of professionalism and hygiene
</li></ul>
</p>

</div>

  </div>

 </div>

<br>

<br>

<div class="row">

            <div class="w3-row-padding w3-grayscale">

              

 </div>

</div>

<script>

var coll = document.getElementsByClassName("collapsible");

var i;



for (i = 0; i < coll.length; i++) {

    coll[i].addEventListener("click", function() {

        this.classList.toggle("active");

        var content = this.nextElementSibling;

        if (content.style.display === "block") {

            content.style.display = "none";

        } else {

            content.style.display = "block";

        }

    });

}

</script>





 <BR>

 </BR>

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
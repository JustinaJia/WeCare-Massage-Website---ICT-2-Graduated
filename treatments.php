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
	<title>Natural Therapy Massage Services | WeCare Massage and Natural Theraphy  </title>
    	<meta name="description" content="Massage services offered at WeCare Massage and Natural Theraphy includes 	remedial, pregnancy massage, head massage, neck massages and various other spa massages."/>
   		<meta name="keywords" content="natural theraphy, massage services, pregnancy massage, neck massage, spa massage, 		remedial massage, wecare massage and natural theraphy"/>
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
	img
	{  border-radius: 35px;
	alignment-adjust:central}
	{
		box-sizing: border-box;
		}

	.responsive {
        height:50%;
	display: block;
    margin-left: auto;
    margin-right: auto;
    width: 60%;
}
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    background-color: #FFFFFF;
    width: 30%;
    height: 500px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: #FFFFFF;
    color: black;
    padding: 22px 16px;
    width: 100%;
     outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	color:#DEB887;
	border:1PX;
	
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #FAF0E6;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #F8EADD;
}

/* Style the tab content */
.tabcontent {
	float: left;
    padding: 0px 12px;
  
    width: 70%;
    border-left: none;
    height: 500px;
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
                        <a href="#"><img src="img/treaments 1.jpg" alt="treatment1" class="img-rounded"></a> <span></span>
                    </li>
                    <li>
                        <a href="#"><img src="img/treatments11.jpg" alt="treatment2" class="img-rounded"></a> <span></span>
                    </li>
                </ul>
            </div>
	</header>
    
	<div class="container-fluid intro" id="about">
		<div class="row">
		  <div class="col-md-8 col-md-offset-2">
			<h1 align="center" style="color:#EDDA74" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif" font-size:"18px" >OUR TREATMENTS</h1>
				<p class="text-intro">Welcome to WeCare Massage, our mission is to assist you to fully relax and unwind from the hectic pace of everyday life. Conveniently located within a short distance from the city, WeCare Massage offers individual as well as group treatments and packages designed for your pampering and well-being. </p>
                <br>
                <br>
			
<h3 style="color:#99C68E" align="center"><b></b></h3>

<div class="tab">

  <button class="tablinks" onclick="openCity(event, 'Oil_Massage')" id="defaultOpen">Oil Massage</button>
  <button class="tablinks" onclick="openCity(event, 'Neck_Shoulder')"> Neck and Shoulder Massage</button>
  <button class="tablinks" onclick="openCity(event, 'Accupressure')"> Accupressure</button>
  <button class="tablinks" onclick="openCity(event, 'Headache')"> Headache Relief</button>
   <button class="tablinks" onclick="openCity(event, 'Sciatica')"> Sciatica Treatment</button>
    <button class="tablinks" onclick="openCity(event, 'Reflexology')"> Reflexology</button>
      <button class="tablinks" onclick="openCity(event, 'SPORTS_MASSAGE')" >Sports Massage</button>
            <button class="tablinks" onclick="openCity(event, 'HOTSTONE_MASSAGE')" >Hot Stone Massage</button>
</div>
<div id="SPORTS_MASSAGE" class="tabcontent">
    <h3 align="center" style="color:#EDDA74" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif" font-size:"18px">  </h3>
    
    <img src="img/sport_massage.jpg" style="align-self:center" class="responsive" width="500" height="400">
  <p>Sports Massage Theraphy is geared towards athelete of every kind. It can used as a means to promote flexibility, reduce fatigue and improve endurance.</p>
</div>

<div id="Oil_Massage" class="tabcontent">
   <h3 align="center" style="color:#EDDA74" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif" font-size:"18px">  </h3>
    <img src="img/oil_massage.jpg" left="40%" class="responsive"  width="500" height="400">
  <p>Oil Massage is type of Natural Theraphy for relaxation and healing purposes.The carrier oils used is high quality botanical extracts oils. It is blended with water solubale media and can be easily washed off.</p> 
</div>

<div id="Neck_Shoulder" class="tabcontent">
   <h3 align="center" style="color:#EDDA74" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif" font-size:"18px">  </h3>
   <img src="img/neck_and_shoulder.jpg" class="responsive" width="500" height="400">
  <p>This is a seated massage. Often caused by wrong sleeping positions which causes involuntary muscle contractions around the cervical region.This treatment helps to eleviate the pains and recover range of neck movement.</p>
</div>

<div id="Accupressure" class="tabcontent">
   <h3 align="center" style="color:#EDDA74" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif" font-size:"18px">  </h3>
   <img src="img/acupressure_massage.jpg" class="responsive" width="500" height="400">
  <p>Accupressure is a traditional Chinese Massage to stimulate the body's natural self curative abilities by pressing on the accupressure points and loosen muscles in order to provide pain relief.</p>
</div>

<div id="Headache" class="tabcontent">
   <h3 align="center" style="color:#EDDA74" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif" font-size:"18px">  </h3>
   <img src="img/headche.jpg" class="responsive" width="500" height="400">
  <p>Treatment for relieving headache caused by tension, pressures and bad sleeping quality.</p>
</div>

<div id="Sciatica" class="tabcontent">
   <h3 align="center" style="color:#EDDA74" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif" font-size:"18px">  </h3>
   <img src="img/sciatiaca_massage.jpg" class="responsive" width="500" height="400">
  <p>Irritation to sciatic nerve causing pain and doscomfort along one side of your lower back to your leg and foot. It can be caused by sitting in one position for too long, wearing heels, obesity, slipped disc on muscle spurs.This treatment is good for pain relief and flexibility increase.</p>
</div>

<div id="Reflexology" class="tabcontent">
   <h3 align="center" style="color:#EDDA74" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif" font-size:"18px">  </h3>
   <img src="img/reflexology_massage.jpg" class="responsive" width="600" height="400">
  <p>Reflexology is the application of appropriate pressure to specific points and areas of the feet, the reflex points in these areas respons to different organs and body points. Pressing on these areas have a positive impact and relief to these organs and a persons general health.</p>
</div>
<div id="HOTSTONE_MASSAGE" class="tabcontent">
   <h3 align="center" style="color:#EDDA74" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif" font-size:"18px">  </h3>
   <img src="img/reflexology_massage.jpg" class="responsive" width="600" height="400">
  <p>Hot Stone Massage is one of the most relaxing style of messages available. During the treatment, hot stones will be placed on your bodyand they will also be used therapist to massage the muscles. It's the perfect treatment to warm you up during the cold winter months.</p>
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
            
            
            </div>
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
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/waypoints.min.js"></script>
    
  
</body>
</html>
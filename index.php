<!DOCTYPE html>
<html>
<title>Vacations in Greece</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="noindex, nofollow" name="robots">

<link rel="stylesheet" src="style.css">
<link src="contact.php">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
body,td,th {
	font-family: Montserrat, sans-serif;
	font-size: 12px;
}

#go {
  display: block;
  width: 400px;
  height: 300px;
}

#frame{
  display: block;
  width:130px;
}
.essentials{
	font-family: Georgia, "Times New Roman", Times, serif;
	text-shadow: 1px 1px #666666;
	font-size:18px;
	font-weight:500;
}
#essentials{
	box-shadow: outset 3px 3px #CCCCCC;
}
#welcome{
	text-align:center;
	border-radius:25px;
	
}
.eselinks:hover{
	opacity:0.5;
	color: #F30;
}
#boxes:hover p{
	font-weight:bolder;
}
#boxes:hover img{
	opacity:0.5;
}
.goframes{
	position:relative;
	left:16px;
}
.w3-hover-opacity {cursor: pointer;}

#myNavbar{
	position:relative;
	left:20px;
}
.where{
	position:relative;
	left:10px;
	height:50px;
	background-color:#06F;
	border-bottom: 2px #CCCCFF solid;
	border-right: 2px #CCCCFF solid;
	border-left: 8px solid #003399;
	border-top-right-radius: 5px;
	border-bottom-right-radius: 50px;
	box-shadow: 1px 1px #036;
	font-size:44px;
	font-family: Tahoma, Geneva, sans-serif;
	text-shadow: 1px 1px #CCCCCC;
}
.uppertext{
	font-family: "Lato", sans-serif;
	font-size: 16px;
	text-align:justify;
	margin-right:20px;
}
.sidelinks{
	font-family: "Engravers MT";
}
.error {
    color: #FF0000;
    padding-left:10px;
}
#form1{
    max-width:400px;
}

.inputf{
   width:400px;
}

.alnright{
   text-align:left;
}

.star{
   position:relative;
   left:0px;
}
</style>
<body class="w3-content" style="max-width:1200px">

<div class="w3-container">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">

<div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <a href="index.html" style="text-decoration:none"><h3 class="w3-wide"><b>Greek Islands</b></h3></a>    
</div>

<div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
	<a href="crete.html" class="w3-bar-item w3-button">Crete</a>
    <a href="evia.html" class="w3-bar-item w3-button">Evia</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
    Cyclades<i class="fa fa-caret-down"></i></a>
   	  <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium sidelinks">      		
         	<a href="andros.html" class="w3-bar-item w3-button w3-light-grey">Andros</a>
            <a href="ios.html" class="w3-bar-item w3-button w3-light-grey">Ios</a>
            <a href="mykonos.html" class="w3-bar-item w3-button w3-light-grey">Mykonos</a>
            <a href="milos.html" class="w3-bar-item w3-button w3-light-grey">Milos</a>
            <a href="naxos.html" class="w3-bar-item w3-button w3-light-grey">Naxos</a>
            <a href="paros.html" class="w3-bar-item w3-button w3-light-grey">Paros</a>
            <a href="santorini.html" class="w3-bar-item w3-button w3-light-grey">Santorini</a>        
            <a href="syros.html" class="w3-bar-item w3-button w3-light-grey">Syros</a>
      </div>
    <a onclick="myAccFunc2()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn2">
    Dodekanisa<i class="fa fa-caret-down"></i></a>
    	<div id="demoAcc2" class="w3-bar-block w3-hide w3-padding-large w3-medium sidelinks">
        	<a href="karpathos.html" class="w3-bar-item w3-button w3-light-grey">Karpathos</a>
            <a href="kalimnos.html" class="w3-bar-item w3-button w3-light-grey">Kalimnos</a>
        	<a href="kos.html" class="w3-bar-item w3-button w3-light-grey">Kos</a>            
            <a href="nisyros.html" class="w3-bar-item w3-button w3-light-grey">Nisyros</a>
        	<a href="rhodes.html" class="w3-bar-item w3-button w3-light-grey">Rhodes</a>
            <a href="symi.html" class="w3-bar-item w3-button w3-light-grey">Symi</a>
           
    	</div>
    <a onclick="myAccFunc3()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn3">
    Eptanisa<i class="fa fa-caret-down"></i></a>
    	<div id="demoAcc3" class="w3-bar-block w3-hide w3-padding-large w3-medium sidelinks">
        	<a href="corfu.html" class="w3-bar-item w3-button w3-light-grey">Corfu</a>
        	<a href="zakinthos.html" class="w3-bar-item w3-button w3-light-grey">Zakynthos</a>
            <a href="kefalonia.html" class="w3-bar-item w3-button w3-light-grey">Kefalonia</a>            
        	<a href="leykada.html" class="w3-bar-item w3-button w3-light-grey">Leykada</a>
            <a href="ithaki.html" class="w3-bar-item w3-button w3-light-grey">Ithaca</a>
        </div>
    <a onclick="myAccFunc4()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn4">
    Other islands<i class="fa fa-caret-down"></i></a>
    	<div id="demoAcc4" class="w3-bar-block w3-hide w3-padding-large w3-medium sidelinks">
        	<a href="chios.html" class="w3-bar-item w3-button w3-light-grey">Chios</a>
        	<a href="mytilini.html" class="w3-bar-item w3-button w3-light-grey">Mytilini</a>
            <a href="ikaria.html" class="w3-bar-item w3-button w3-light-grey">Ikaria</a>
            <a href="skiathos.html" class="w3-bar-item w3-button w3-light-grey">Skiathos</a>
            <a href="skopelos.html" class="w3-bar-item w3-button w3-light-grey">Skopelos</a>
            <a href="samos.html" class="w3-bar-item w3-button w3-light-grey">Samos</a>
        </div>
</nav>
</div>      
    <!-- Top menu on small screens -->
    <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
      <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    </header>
    
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px">

	<!-- Navbar (sit on top) -->
  <div class="w3-top">
  	<div class="w3-bar" id="myNavbar">
    	<a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
        </a>
        <a href="index.html" class="w3-bar-item w3-button" style="font-size:18px; font-family: Impact, Charcoal, sans-serif"><i class="fa fa-home fa-fw"></i>HOME</a>
        <a href="#essentials" class="w3-bar-item w3-button w3-hide-small" style="font-size:18px; font-family:Impact, Charcoal, sans-serif">
        <i class="fa fa-th"></i>   ESSENTIALS</a>
        <a href="#wheretogo" class="w3-bar-item w3-button w3-hide-small" style="font-size:18px; font-family:Impact, Charcoal, sans-serif"><i class="fa fa-th"></i> WHERE TO GO</a>
        <a href="#footer" class="w3-bar-item w3-button w3-hide-small" style="font-size:18px; font-family:Impact, Charcoal, sans-serif">
        <i class="fa fa-envelope"></i>  CONTACT</a>
   </div>
   
    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    	<a href="#essentials" class="w3-bar-item w3-button" onClick="toggleFunction()">ESSENTIALS</a>
        <a href="#wheretogo" class="w3-bar-item w3-button" onClick="toggleFunction()">WHERE TO GO</a>
        <a href="#footer" class="w3-bar-item w3-button" onClick="toggleFunction()">CONTACT</a>
    </div>
 </div> <!-- end of w3-top navbar -->

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  
    
  
  <!-- Top header -->
  <div class="w3-display-container w3-container w3-padding-16 w3-margin-left">
    <img class="w3-padding-24" src="img/front_image.jpg" style="width:100%;height:auto">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
    	<h2 class="w3-jumbo w3-hide-small"  style="text-shadow: 2px 2px">Live your myth</h2>
        <h2 class="w3-jumbo w3-hide-small" style="text-shadow: 2px 2px">in Greece</h2>
    </div>
  </div>
  
<div class="container w3-sand w3-padding-16">
  <div class="w3-container" id="welcome">
    	<span style="font-family: 'Arial Black', Gadget, sans-serif;font-size:44px;color: #06F">Greece</span>
        <br>
        <span style="font-family:'MS Serif', 'New York', serif;font-size:18px; font-style:italic;color: #09F">Meze and mythology, hedonism and history</span>        
  </div>
  
  <div class="w3-row-padding w3-padding-32 w3-container">
  	<div class="w3-content">
    	<div class="w3-third w3-center">
        	<img src="img/islas10.jpg" style="width:260px;height:260px;">
        </div>
        
        <div class="w3-twothird" style="margin-left:0%;">
        	<h1>Greek island tourist guide</h1>
            <h4 class="w3-padding-32" style="margin-left:0%;font-family: 'Agency FB';font-size:20px">The Greek Islands ignite the imagination and satisfy the soul with a history laced in mythical tales and told through ancient, sun-bleached ruins.
            </h4>
            <p class="w3-text-grey uppertext" style="margin-left:0%;">While its economic reputation has taken a battering, Greece remains a premier-league travel destination. Its incredible historic sites span four millennia, encompassing both the legendary and the obscure. Its convoluted coastline is punctuated by superb beaches, while its mountainous interior urges you to dust off your hiking boots and explore. Yet perhaps its greatest riches are the islands, ranging from backwaters where the boat calls twice a week to resorts as cosmopolitan as any in the Mediterranean.</p>
        
          <p class="w3-text-grey uppertext">For anyone with a cultural bone in their body Greece cannot fail to inspire. Minoans, Romans, Arabs, Latin Crusaders, Venetians, Slavs, Albanians and Turks have all left their mark, and almost every town or village has a link to the past, whether it’s a delicately crumbling temple to Aphrodite, a forbidding Venetian fort or a dusty Byzantine monastery decorated with exquisite frescoes. And let’s not forget the museums stuffed to bursting with Classical sculpture and archeological treasures.</p>
          <p class="w3-text-grey uppertext">But the call to cultural duty will never be too overwhelming on a Greek holiday. The hedonistic pleasures of languor and warmth – swimming in balmy seas at dusk, talking and drinking under the stars – are just as appealing. Bar a few upmarket and “boutique” exceptions you may struggle to find five-star comfort – orthopaedic mattresses, faultless plumbing and cordon bleu cuisine are not the country’s strongpoint – but this isn’t really what the Greek experience is about. Greek food, for example, is at its best fresh, abundant and uncomplicated, while the genuine welcome you receive at the simplest taverna is often enough to get you booking next year’s break as soon as you have returned home.</p>
          <p class="w3-text-grey uppertext">Whatever you come here for, it’s clear that Greece needs its tourists like never before. For the last few years it’s been synonymous with financial calamity with a titanic debt crisis seemingly ready to engulf Europe. However, this seems to have put off few people (visits to the islands were up 30 percent in 2011). Perhaps they know what we’ve known since the first edition of this guide was published thirty years ago – Greece can offer surprises and a true sense of discovery to even the most demanding traveller.<p>
        </div>
    </div>
  </div>
  
 
</div>  
  <div class="w3-container w3-padding-64 w3-light-blue w3-center" id="essentials">
      <h1 style="font-size:42px;font-family: Elephant;text-shadow: 1px 2px #666666;"><b>ESSENTIALS</b></h1>
      <p style="font-family: Candara;font-size:18px;">Everything you need to know before you set off.</p>
      
      <div class="w3-row" style="margin-top:64px">
      
        <div class="w3-col s3 eselinks">
        	<a href="leisure.html" style="text-decoration:none"><img src="img/touring.png" style="width:100px;height:100px;">
            <p class="essentials">Leisure</p></a>
        </div>
        
        <div class="w3-col s3 eselinks">
        	<a href="gastronomy.html" style="text-decoration:none"><img src="img/gastronomy.png" style="width:100px;height:100px;">
            <p class="essentials">Gastronomy</p></a>
        </div>
        
        <div class="w3-col s3 eselinks">
        	<a href="#" style="text-decoration:none"><img src="img/activities.png" style="width:100px;height:100px;">
            <p class="essentials">Activities</p></a>
        </div>
        
        <div class="w3-col s3 eselinks">
        	<a href="#" style="text-decoration:none"><img src="img/health.png" style="width:100px;height:100px;">
            <p class="essentials">Health</p></a>
        </div>
        
     </div>
      
      <div class="w3-row" style="margin-top:64px">
      
      	  <div class="w3-col s3 eselinks">
          	<a href="#" style="text-decoration:none"><img src="img/travel.png" style="width:100px;height:100px;">
            <p class="essentials">Touring</p></a>
          </div>
          
          <div class="w3-col s3 eselinks">
          	<a href="#" style="text-decoration:none"><img src="img/transport.png" style="width:100px;height:100px;">
            <p class="essentials">Travel essentials</p></a>
          </div>
          
          <div class="w3-col s3 eselinks">
            <a href="#" style="text-decoration:none"><img src="img/weather.png" style="width:100px;height:100px;">
            <p class="essentials">Weather</p></a>
          </div>
          
          <div class="w3-col s3 eselinks">
          	<a href="#" style="text-decoration:none"><img src="img/music.png" style="width:100px;height:100px;">
            <p class="essentials">Festivals</p></a>
          </div>
          
      </div>
      
  </div>

 <div class="w3-container w3-center w3-padding-64 w3-white" id="wheretogo">
    <h1 class="where"></h1>


    <div class="w3-row-padding w3-margin-left w3-padding-16 goframes">

            <div class="w3-col l6 m6 w3-margin-bottom">    
                <div class="w3-display-container" id="boxes">
                    <div class="w3-display-topleft w3-black w3-padding" id="frame">
                    <p style="font-size:18px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">Culture</p>
                    </div>
                    <img src="img/parth2.jpg" id="go">            
                </div>
            </div>
        
            <div class="w3-col l6 m6 w3-margin-bottom">
                <div class="w3-display-container" id="boxes">
                    <div class="w3-display-topleft w3-black w3-padding" id="frame">
                    <p style="font-size:18px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">Sea</p>
                    </div>
                    <img src="img/sea3.jpg" id="go">            
                </div>
            </div>
        
             <div class="w3-col l6 m6 w3-margin-bottom">    
                <div class="w3-display-container" id="boxes">
                    <div class="w3-display-topleft w3-black w3-padding" id="frame">
                    <p style="font-size:18px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">Nature</p>
                    </div>
                    <img src="img/plastira.jpg" id="go">            
                </div>
            </div>
    
            <div class="w3-col l6 m6 w3-margin-bottom">    
                <div class="w3-display-container" id="boxes">
                    <div class="w3-display-topleft w3-black w3-padding" id="frame">
                    <p style="font-size:18px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">Religion</p>
                    </div>
                    <img src="img/religion.jpg" id="go">            
                </div>
            </div>
        
    </div>
 </div>
	

<div class="container w3-padding-32 w3-margin-left">
    <div id="googleMap" class="w3-grayscale" style="width:100%;height:450px;"></div>
</div>

<?php
 $name = $email = $subject = "";
 $nameErr = $emailErr = $subjectErr = "";
?>
<footer class="w3-padding-64 w3-light-gray w3-small w3-center" id="footer">
	<div class="w3-row-padding">
    
    	<div class="w3-col s12">
            <h1 style="font-size:28px;">Contact</h1>
            <p>Questions? Go ahead.</p>
         </div>
         <div class="w3-col s2">
         <p class="star"><span class="error">* required field</span></p>
         </div>
         <div class="w3-col s12">
            <form class="w3-margin-left" method="post" action="contact.php">
            <table>
            <tr>

            <td class="inputf"><p id="form1"><input class="w3-input w3-border" type="text" id="name" placeholder="Name" name="name" required></p></td><td><span class="error">*</span></td><td class='alnright'><span class="error" id="namefield"></span></td>
            </tr>
            <tr>
             <td class="inputf"><p id="form1"><input class="w3-input w3-border" type="text" id="email" placeholder="Email" name="email" maxlength="50" required></p></td><td><span class="error">*</span></td><td class='alnright'><span class="error" id="emailfield"></span></td>
              </tr>
              <tr>
              <td class="inputf"><p id="form1"><input class="w3-input w3-border" type="text" id="subject" placeholder="Subject" name="subject" maxlength="100" required></td><td><span class="error">*</span></td><td class='alnright'></p><span class="error" id="subjectfield"></span></td>
              </tr>
              </table>
                <p id="form1"><textarea class="w3-input w3-border" rows="5" id="comment" placeholder="Message" name="message" cols="50" maxlength="1000"></textarea></p>
                <button id="form1" type="submit" class="w3-button w3-block w3-black" onclick="return validateForm()" name="submit">Send</button>
            </form>
        </div>
        
    </div>

    <div class="w3-row-padding" style="margin-top:64px;background-color:rgb(15,13,18);color:rgb(180,180,180);">

        <div class="w3-col s2">
            .
        </div>

        <div class="w3-col s4 w3-justify" style="margin-top:64px;margin-bottom:32px;">
            <h1 style="font-size:21px;">About</h1>
            <div class="w3-padding-8">
                <p><span class="glyphicon glyphicon-user"></span><a href="about.html" style="text-decoration: none;font-weight: normal;">&nbsp; About me</a> </p>
                <p><span class="glyphicon glyphicon-map-marker"></span>&nbsp;Thessaloniki, Greece</p>
                <p><span class="glyphicon glyphicon-earphone"></span> 6940615663</p>
                <p><span class="glyphicon glyphicon-envelope"></span> giorgosakritidis596@gmail.com</p>
            </div>
        </div>

        <div class="w3-col s6 w3-justify" style="margin-top:64px;">
            <h1 style="font-size:21px;">Social Contacts</h1>
            <div class="w3-padding-8">
                <a href="https://www.facebook.com/george.akritidis.79" target="_blank">
                    <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
                </a>
                <a href="https://twitter.com/geoakr84?lang=el" target="_blank">
                    <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
                </a>
                <a href="https://www.instagram.com/geoakr84/?hl=el" target="_blank">
                    <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

</div>
</div>

<script>

function validateForm(){
   var x=document.getElementById("name").value;
   var regex=/^[a-zA-Z]+$/;
   if (!x.match(regex)){
      var myspan=  document.getElementById("namefield");
      myspan.innerText = 'Only letters are allowed';
   }

   var y=document.getElementById("email").value;
   var regex2=/\S+@\S+/;
   if (!y.match(regex2)){
     var myspan=document.getElementById("emailfield");
     myspan.innerText = "Wrong email format";
   }
}
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function myAccFunc2() {
    var x = document.getElementById("demoAcc2");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function myAccFunc3() {
    var x = document.getElementById("demoAcc3");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function myAccFunc4() {
    var x = document.getElementById("demoAcc4");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

document.getElementById("myBtn").click();
document.getElementById("myBtn2").click();
document.getElementById("myBtn3").click();
document.getElementById("myBtn4").click();

// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

function myMap()
    {
      myCenter=new google.maps.LatLng(38.829431, 24.609972);
      var mapOptions= {
        center:myCenter,
        zoom:6, scrollwheel: true, draggable: true,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);
    }
	
window.onscroll = function() {myFunction()};

function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function clearForm(){
	document.getElementById("name").value="";
	document.getElementById("email").value="";
	document.getElementById("subject").value="";
	document.getElementById("comment").value="";
	
}


</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmO9YYGAocizT-WpyK5N9m-7QZ7n_eL0E&callback=myMap"></script>
  


</body>
</html>

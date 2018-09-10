<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>GTUCTF18</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/temp.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
<script src="js/jquery.js"></script>
<!-- Google Font -->

<style type="text/css">


.wow{
  padding-left: 20px;
  padding-right: 40px;
}

.title-widget::before{
background-color: #92bd1b;
}
  
h3,h1,h2,h4{
  color:#053541 !important;
    font-weight: 300;
  font-family: 'Montserrat';font-size: 25px;
  font-weight: bold !important;
}


p{
  text-align: justify !important;
  color: #4d4d4d !important;
   font-family: 'Playfair Display';font-size: 15px;
   
   
}


</style>


</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<div class="navbar navbar-fixed-top custom-navbar navbar1" role="navigation">
    

    <!-- navbar header -->
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="" class="navbar-brand">
        <img src="images/GTU , VGEC.png" style="position: fixed;overflow: hidden!important;  top: 1%;left: 1%; width: 11%;"></img></a>
    </div>

    <div class="collapse navbar-collapse">

      <ul class="nav navbar-nav navbar-right navbar-pills text-center">
        <li><a href="#Xintro">Home</a></li>
        <li><a href="#Xoverview">Overview</a></li>
        
        <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"  data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Events <span class="caret"></span></a>
        
           <ul class="dropdown-menu bounceIn multi-level text-center" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" role="menu" aria-labelledby="dropdownMenu">
              
              <li class="dropdown-submenu">
                <a href="#">Tech</a>
                <?php $dept='tech'?>
                <ul class="dropdown-menu" style="padding: 0;;">
                  <li class="dropdown-submenu">
                    <a href="#">Computer</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eventname="C quiz and CryptoHunt"; echo'<a href="subevent.php?dep='.$dept.'&eventname='.$eventname.'">C quiz and CryptoHunt</a>';?></li>
                        <li><?php $eventname="Code-less"; echo'<a href="subevent.php?dep='.$dept.'&eventname='.$eventname.'">Code-less</a>';?></li>
                        <li><?php $eve="Relay Coding"; echo'<a href="subevent.php?dep='.$dept.'&eve='.$eve.'">Relay Coding</a>';?></li>
                        <li><?php $eve="WebWeaver"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">WebWeaver</a>';?></li>
                        <li><?php $eve="Photoshop-FACEOFF"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Photoshop-FACEOFF</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">Civil</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="Hola Bridge"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Hola Bridge</a>';?></li>
                        <li><?php $eve="Plantastic"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Plantastic</a>';?>
                        </li>
                        <li><?php $eve="Civil Brainiacs"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Civil Brainiacs</a>';?></li>
                        <li><?php $eve="Eagle Eye"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Eagle Eye</a>';?></li>
                        <li><?php $eve="Traffica"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Traffica</a>';?></li>
                        <li><?php $eve="Spile"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Spile</a>';?></li>
                        <li><?php $eve="Game Of Gravity"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Game Of Gravity</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">Chamical</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="Hunt It Up"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Hunt It Up</a>';?></li>
                        <li><?php $eve="Canon Wars"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Canon Wars</a>';?></li>
                        <li><?php $eve="Sod-i-Atic Car"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Sod-i-Atic Car</a>';?></li>
                        <li><?php $eve="Chem-o-live "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Chem-o-live</a>';?></li>
                        <li><?php $eve="Chem-o-Click"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Chem-o-Click</a>';?></li>
                        <li><?php $eve="Poster Presentation"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Poster Presentation</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">Electrical</a>
                    <ul class="dropdown-menu" style="padding: 0;;">
                        <li><?php $eve="Electric-o-buzz"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Electric-o-buzz</a>';?></li>
                        <li><?php $eve="Gate-o-Tarka"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Gate-o-Tarka</a>';?></li>
                        <li><<?php $eve="Decode, Recode, Encode"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Decode, Recode, Encode</a>';?></li>
                        <li><?php $eve="Think Big"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Think Big</a>';?></li>
                        <li><?php $eve="Circuit Chakravyuh"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Circuit Chakravyuh</a>';?></li>
                        <li><?php $eve="Waste 2 Shreshtha"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Waste 2 Shreshtha</a>';?></li>
                        <li><?php $eve="Use solar - save nature"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Use solar - save nature</a>';?></li>
                        <li><?php $eve="Witricity"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Witricity</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">General and Management</a>
                    <ul class="dropdown-menu" style="padding: 0;;">
                        <li><?php $eve="Maths Treasurhunt"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Maths Treasurhunt</a>';?></li>
                        <li><?php $eve="Mock Interview"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mock Interview</a>';?></li>
                        <li><?php $eve="Entrepreneurs'de ck"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Entrepreneurs deck</a>';?></li>
                        <li><?php $eve="Corpo Quiz"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Corpo Quiz</a>';?></li>
                        <li><?php $eve="Mad-Ads"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mad-Ads</a>';?></li>
                        <li><?php $eve="Cash Flow"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Cash Flow</a>';?></li>
                        <li><?php $eve="GRAM UDAY"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">GRAM UDAY</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">Mechanical</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="HYDRAULIC ARM"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">HYDRAULIC ARM</a>';?></li>
                        <li><?php $eve="CAD ISTIC"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">CAD ISTIC</a>';?></li>
                        <li><?php $eve="Mecha Treasure Hunt"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mecha Treasure Hunt</a>';?></li>
                        <li><?php $eve="Chain Reaction ? Falling Dominoes?"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Chain Reaction ? Falling Dominoes?</a>';?></li>
                        <li><?php $eve="AUTO PSY"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">AUTO PSY</a>';?></li>
                        <li><?php $eve="Junkyard"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Junkyard</a>';?></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">NonTech</a>
                <?php $dept='nontech';?>
                <ul class="dropdown-menu" style="padding: 0;;">
                  <li class="dropdown-submenu">
                    <a href="#">Fun Events</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="1 minute Game"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">1 minute Game</a>';?></li>
                        <li><?php $eve="SelfieHolic"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">SelfieHolic</a>';?></li>
                        <li><?php $eve="Slow Cycling"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Slow Cycling</a>';?></li>
                        <li><?php $eve="Paint IT Out"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Paint IT Out</a>';?></li>
                        <li><?php $eve="Distraction"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Distraction</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">Fluency</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="Story up "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Story up </a>';?></li>
                        <li><?php $eve="Mock Parliament"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mock Parliament</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">Gaming</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="Live Ludo"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Live Ludo</a>';?></li>
                        <li><?php $eve="Mini Militia"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mini Militia</a>';?></li>
                        <li><?php $eve="Counter Strike"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Counter Strike</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">Adventure Events</a>
                    <ul class="dropdown-menu" style="padding: 0;;">
                        <li><?php $eve="Being Sherlock"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Being Sherlock</a>';?></li>
                        <li><?php $eve="Hurdles & Twister"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Hurdles & Twister</a>';?></li>
                        <li><?php $eve="Tug of war"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Tug of war</a>';?></li>
                        <li><?php $eve="HumanCaterpillar"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">HumanCaterpillar</a>';?></li>
                        <li><?php $eve="Paint War"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Paint War</a>';?></li>
                        <li><?php $eve="Run Rotate Run"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Run Rotate Run</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">English-Vinglish</a>
                    <ul class="dropdown-menu" style="padding: 0;;">
                        <li><?php $eve="CineJam"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">CineJam</a>';?></li>
                        <li><?php $eve="NERD Quiz "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">NERD Quiz </a>';?></li>
                        <li><?php $eve="Catapult"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Catapult</a>';?></li>
                        <li><?php $eve="C quiz And CryptoHunt"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Hola Bridge</a>';?></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">Robotics</a>
                <?php $dept='robotics'?>
                <ul class="dropdown-menu" style="padding: 0;">
                  <li><?php $eve="MAZE HUNTERS "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">MAZE HUNTERS </a>';?></li>
                  <li><?php $eve="RO-VENTURE"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">RO-VENTURE</a>';?></li>
                  <li><?php $eve="ARMAGEDDON "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">ARMAGEDDON </a>';?></li>
<li><?php $eve="DROID HOCKEY"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">DROID HOCKEY</a>';?></li>
<li><?php $eve="HYDROBOT"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">HYDROBOT</a>';?></li>
<li><?php $eve="COPTER'S KINGDOM"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">COPTERS KINGDOM</a>';?></li>
<li><?php $eve="LINE SEGUIDOR"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">LINE SEGUIDOR</a>';?></li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">ATV</a>
                <ul class="dropdown-menu" style="padding: 0;">
                  <li><a href="#">ATV</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">Workshop</a>
                <ul class="dropdown-menu" style="padding: 0;">
                  <li><a href="#">2</a></li>
                  <li><a href="#">2</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">EntreSum</a>
                <ul class="dropdown-menu" style="padding: 0;">
                  <li><a href="#">Hackathon</a></li>
                  <li><a href="#">Startup + Minutes To Millinoare</a></li>
                  <li><a href="#">Panel Dicussion</a></li>
                  <li><a href="#">IPL Auction</a></li>
                  <li><a href="#">Crowdpitch</a></li>
                  <li><a href="#">BizQuiz</a></li>
                </ul>
              </li>
          </ul>
        </li>
         
        <li><a href="#Xdepartmets">Departments</a></li>
        <li><a href="#Xschedule" >Schedule</a></li>
        <li><a href="registermain.php">Register Now</a></li>
      </ul>

    </div>

  </div>
</div>
<div class="navbar navbar-fixed-top custom-navbar navbar2 hidden" role="navigation">
    

    <!-- navbar header -->
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="" class="navbar-brand">
        <img src="images/TF 18 Logo.png" style="position: fixed;overflow: hidden!important;  top: 1%; bottom:1%;left: 1%; width: 13%;margin-bottom: 5px !important;"></img></a>
    </div>

    <div class="collapse navbar-collapse">

      <ul class="nav navbar-nav navbar-right navbar-pills text-center">
        <li><a href="#Xintro" >Home</a></li>
        <li><a href="#Xoverview" >Overview</a></li>
        
        <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"  data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Events <span class="caret"></span></a>
        
           <ul class="dropdown-menu bounceIn multi-level text-center" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" role="menu" aria-labelledby="dropdownMenu">
              
              <li class="dropdown-submenu">
                <a href="#">Tech</a>
                <?php $dept='tech'?>
                <ul class="dropdown-menu" style="padding: 0;;">
                  <li class="dropdown-submenu">
                    <a href="#">Computer</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eventname="C quiz and CryptoHunt"; echo'<a href="subevent.php?dep='.$dept.'&eventname='.$eventname.'">C quiz and CryptoHunt</a>';?></li>
                        <li><?php $eventname="Code-less"; echo'<a href="subevent.php?dep='.$dept.'&eventname='.$eventname.'">Code-less</a>';?></li>
                        <li><?php $eve="Relay Coding"; echo'<a href="subevent.php?dep='.$dept.'&eve='.$eve.'">Relay Coding</a>';?></li>
                        <li><?php $eve="WebWeaver"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">WebWeaver</a>';?></li>
                        <li><?php $eve="Photoshop-FACEOFF"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Photoshop-FACEOFF</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">Civil</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="Hola Bridge"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Hola Bridge</a>';?></li>
                        <li><?php $eve="Plantastic"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Plantastic</a>';?>
                        </li>
                        <li><?php $eve="Civil Brainiacs"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Civil Brainiacs</a>';?></li>
                        <li><?php $eve="Eagle Eye"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Eagle Eye</a>';?></li>
                        <li><?php $eve="Traffica"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Traffica</a>';?></li>
                        <li><?php $eve="Spile"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Spile</a>';?></li>
                        <li><?php $eve="Game Of Gravity"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Game Of Gravity</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">Chamical</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="Hunt It Up"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Hunt It Up</a>';?></li>
                        <li><?php $eve="Canon Wars"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Canon Wars</a>';?></li>
                        <li><?php $eve="Sod-i-Atic Car"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Sod-i-Atic Car</a>';?></li>
                        <li><?php $eve="Chem-o-live "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Chem-o-live</a>';?></li>
                        <li><?php $eve="Chem-o-Click"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Chem-o-Click</a>';?></li>
                        <li><?php $eve="Poster Presentation"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Poster Presentation</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">Electrical</a>
                    <ul class="dropdown-menu" style="padding: 0;;">
                        <li><?php $eve="Electric-o-buzz"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Electric-o-buzz</a>';?></li>
                        <li><?php $eve="Gate-o-Tarka"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Gate-o-Tarka</a>';?></li>
                        <li><<?php $eve="Decode, Recode, Encode"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Decode, Recode, Encode</a>';?></li>
                        <li><?php $eve="Think Big"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Think Big</a>';?></li>
                        <li><?php $eve="Circuit Chakravyuh"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Circuit Chakravyuh</a>';?></li>
                        <li><?php $eve="Waste 2 Shreshtha"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Waste 2 Shreshtha</a>';?></li>
                        <li><?php $eve="Use solar - save nature"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Use solar - save nature</a>';?></li>
                        <li><?php $eve="Witricity"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Witricity</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">General and Management</a>
                    <ul class="dropdown-menu" style="padding: 0;;">
                        <li><?php $eve="Maths Treasurhunt"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Maths Treasurhunt</a>';?></li>
                        <li><?php $eve="Mock Interview"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mock Interview</a>';?></li>
                        <li><?php $eve="Entrepreneurs'de ck"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Entrepreneurs deck</a>';?></li>
                        <li><?php $eve="Corpo Quiz"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Corpo Quiz</a>';?></li>
                        <li><?php $eve="Mad-Ads"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mad-Ads</a>';?></li>
                        <li><?php $eve="Cash Flow"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Cash Flow</a>';?></li>
                        <li><?php $eve="GRAM UDAY"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">GRAM UDAY</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">Mechanical</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="HYDRAULIC ARM"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">HYDRAULIC ARM</a>';?></li>
                        <li><?php $eve="CAD ISTIC"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">CAD ISTIC</a>';?></li>
                        <li><?php $eve="Mecha Treasure Hunt"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mecha Treasure Hunt</a>';?></li>
                        <li><?php $eve="Chain Reaction ? Falling Dominoes?"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Chain Reaction ? Falling Dominoes?</a>';?></li>
                        <li><?php $eve="AUTO PSY"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">AUTO PSY</a>';?></li>
                        <li><?php $eve="Junkyard"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Junkyard</a>';?></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">NonTech</a>
                <?php $dept='nontech';?>
                <ul class="dropdown-menu" style="padding: 0;;">
                  <li class="dropdown-submenu">
                    <a href="#">Fun Events</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="1 minute Game"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">1 minute Game</a>';?></li>
                        <li><?php $eve="SelfieHolic"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">SelfieHolic</a>';?></li>
                        <li><?php $eve="Slow Cycling"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Slow Cycling</a>';?></li>
                        <li><?php $eve="Paint IT Out"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Paint IT Out</a>';?></li>
                        <li><?php $eve="Distraction"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Distraction</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">Fluency</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="Story up "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Story up </a>';?></li>
                        <li><?php $eve="Mock Parliament"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mock Parliament</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">Gaming</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="Live Ludo"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Live Ludo</a>';?></li>
                        <li><?php $eve="Mini Militia"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mini Militia</a>';?></li>
                        <li><?php $eve="Counter Strike"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Counter Strike</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">Adventure Events</a>
                    <ul class="dropdown-menu" style="padding: 0;;">
                        <li><?php $eve="Being Sherlock"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Being Sherlock</a>';?></li>
                        <li><?php $eve="Hurdles & Twister"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Hurdles & Twister</a>';?></li>
                        <li><?php $eve="Tug of war"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Tug of war</a>';?></li>
                        <li><?php $eve="HumanCaterpillar"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">HumanCaterpillar</a>';?></li>
                        <li><?php $eve="Paint War"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Paint War</a>';?></li>
                        <li><?php $eve="Run Rotate Run"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Run Rotate Run</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">English-Vinglish</a>
                    <ul class="dropdown-menu" style="padding: 0;;">
                        <li><?php $eve="CineJam"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">CineJam</a>';?></li>
                        <li><?php $eve="NERD Quiz "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">NERD Quiz </a>';?></li>
                        <li><?php $eve="Catapult"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Catapult</a>';?></li>
                        <li><?php $eve="C quiz And CryptoHunt"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Hola Bridge</a>';?></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">Robotics</a>
                <?php $dept='robotics'?>
                <ul class="dropdown-menu" style="padding: 0;">
                  <li><?php $eve="MAZE HUNTERS "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">MAZE HUNTERS </a>';?></li>
                  <li><?php $eve="RO-VENTURE"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">RO-VENTURE</a>';?></li>
                  <li><?php $eve="ARMAGEDDON "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">ARMAGEDDON </a>';?></li>
<li><?php $eve="DROID HOCKEY"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">DROID HOCKEY</a>';?></li>
<li><?php $eve="HYDROBOT"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">HYDROBOT</a>';?></li>
<li><?php $eve="COPTER'S KINGDOM"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">COPTERS KINGDOM</a>';?></li>
<li><?php $eve="LINE SEGUIDOR"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">LINE SEGUIDOR</a>';?></li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">ATV</a>
                <ul class="dropdown-menu" style="padding: 0;">
                  <li><a href="#">ATV</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">Workshop</a>
                <ul class="dropdown-menu" style="padding: 0;">
                  <li><a href="#">2</a></li>
                  <li><a href="#">2</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">EntreSum</a>
                <ul class="dropdown-menu" style="padding: 0;">
                  <li><a href="#">Hackathon</a></li>
                  <li><a href="#">Startup + Minutes To Millinoare</a></li>
                  <li><a href="#">Panel Dicussion</a></li>
                  <li><a href="#">IPL Auction</a></li>
                  <li><a href="#">Crowdpitch</a></li>
                  <li><a href="#">BizQuiz</a></li>
                </ul>
              </li>
          </ul>
        </li>
          
        <li><a href="#Xdepartmets">Departments</a></li>
        <li><a href="#Xschedule" >Schedule</a></li>
        <li><a href="registermain,php"">Register Now</a></li>
      </ul>

    </div>

  </div>
</div>
<!-- =========================
    INTRO SECTION   
============================== -->
<section id="Xintro" class="parallax-section"">
  <div class="container">
    
    <div class="row col-align-center" style="height: 80vh;"">
      <div class="col-md-12 col-sm-12 vcenter">
        <div class="logo text-center wow fadeInDown">
          <a href="#"><img src="images/Final Logo with hosted by.png" alt="Layla" style="width: 80%;"></a>
        </div>    
        
      </div>
    </div>
    <div class="row" style="height: 18vh;">
      
    </div>
    <div class="row" style="max-height: 2vh;">
      <div class="col-md-12 col-sm-12 vcenter">
        <div class="arrow-down text-center">
          <a href="#Xoverview" class="bounce" style="color: white;"><marquee direction="down" class="text-center btn btn-default" style="max-height: 2vh;background-color: transparent;border:none;"><i class="fa fa-chevron-down" style="font-size: 3em;"></i></marquee></a>
        </div>
      </div>

  </div>

</section>
<!-- =========================
    DETAIL SECTION   
============================== -->
<section id="Xdetail" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="wow fadeInLeft col-md-4 col-sm-4"  data-wow-delay="0.3s">
        <i class="fa fa-group" style="color:#92bd1b"></i>
        <h3 class="counter">650</h3><h3>Participants</h3>
        <p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
      </div>

      <div class="wow fadeInUp  col-md-4 col-sm-4" data-wow-delay="0.6s">
        <i class="fa fa-clock-o" style="color:#92bd1b"></i>
        <h3 class="counter">24</h3><h3>Sites Viewed</h3>
        <p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
      </div>

      <div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.9s">
        <i class="fa fa-rupee" style="color:#92bd1b"></i>
        <h3 class="counter">400000</h3><h3>Reward Bucks</h3>
        <p>Quisque ut libero sapien. Integer tellus nisl, efficitur sed dolor at, vehicula finibus massa. Sed tincidunt metus sed eleifend suscipit.</p>
      </div>

    </div>
  </div>
</section>
</div></section>
<!-- =========================
    OVERVIEW SECTION   
============================== -->
<section id="Xoverview" class="parallax-section"  style="padding-top:23px !important; padding-bottom: 20px;"> 
  <div class="container" >
    <div class="row">

      <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s"  ">
        <div class="col-md-6 col-sm-6">
          <h1 class="title-widget" style="font-weight: ">When</h1>
        <p class="font_3"><b>16 - 17 March 2018</b></p>

          
         
        </div>
        <div class="col-md-6 col-sm-6">
            <h1 class="title-widget">Where</h1>
        <p class="font_3"><b>Vishwakarma governement engineering college</b></p>
        </div>
      </div>
    </div>
      <br><br><br>
      <div class="row" style="padding-top: 20px !important;">
        <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s">
        <h1 class="title-widget" style="margin-left: 10px">OverView</h1>
        <br>
        <p>The Central TechFest 2k18 is annual science n tech carnival of GTU. Techfest2k18 summons all the unconventional and ingenious Engineers to celebrate their freshness in our fair. Not just a fiesta of engineering know-hows, but a Platform to ignite and foster ideas dug deep inside bright brains from across the widely spread boundaries of GTU throughout Gujarat.
The sole motto of Techfest 2k18 is to transform potential ideas to minted ones, and realising the need to reform and transfigure the present day scenario in Gujarat, develop those ideas into crusader of better and improved lives of millions, earning higher and higher dignity for the state.
Techfest 2k18 also strives to bridge the gap between industry and academiA, by encompassing
competitions
Expert talks
Exhibition
Workshops
Tech and non tech events
Startup Fair
Tf2k18 aims to launch a wave of bright minds and path breaking solutions to sustainable future.</p>
      </div>
          
      <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe width="854" height="480" src="https://www.youtube.com/embed/LoBLkQR5NSQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      </div>

    </div>
  </div>
</section>



<section id="Xdepartmets" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-sm-12 wow bounceIn">
        <div class="section-title white">
          
          <h2 class="title-widget" style="text-align: left;float: left;">Departments</h2>
         
        </div>
      </div>

      <!-- Testimonial Owl Carousel section
      ================================================== -->
      <div id="owl-departmets" class="owl-carousel">

        <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
          
          <div class="container2">
            <img src="images/logo/tech.jpg" alt="Avatar" class="image">
            <div class="overlay">
            <a href="tech_events.php"><div class="text">Technical<br>
            </div></a>
          </div>
        </div>
        </div>

        <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
          
          <div class="container2">
            <img src="images/logo/non tech.jpg" alt="Avatar" class="image">
            <div class="overlay">
            <a href="nontech_events.php"><div class="text">NonTech<br/>
            </div></a>
          </div>
        </div>
        </div>

        <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
          
          <div class="container2">
            <img src="images/logo/robotics.jpg" alt="Avatar" class="image">
            <div class="overlay">
            <a href="robo_events.php"><div class="text">Robotics<br/>
            </div></a>
          </div>
        </div>
        </div>

        <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
          
          <div class="container2">
            <img src="images/logo/entre.jpg" alt="Avatar" class="image">
            <div class="overlay">
            <a href="entre_events.php"><div class="text">Entre'sum<br/>
            </div></a>
          </div>
        </div>
        </div>

        <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
          
          <div class="container2">
            <img src="images/logo/atv.jpg" alt="Avatar" class="image">
            <div class="overlay">
            <a href="atv_events.php"><div class="text">ATV<br/>
            </div></a>
          </div>
        </div>
        </div>
        
      </div>

    </div>
  </div>
</section>

<section id="Xschedule" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-sm-12 wow bounceIn">
        <div class="section-title white">
           <h2 class="title-widget" style="text-align: left;float: left;">Event Schedule</h2>
         
        </div>
      </div>

    </div>

<div class="row">
<div class="col-md-12">
            <div class="panel with-nav-tabs panel-success" style="padding-bottom: 10px !important;">
                <div class="panel-heading" style="padding-bottom: 10px;background-color:#cbcbcb !important; color: #4d4d4d!important;">
                       <div class="nik">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#over" style="color: #4d4d4d!important;" data-toggle="tab">Technical</a></li>
                            <li><a href="#over1" style="color: #4d4d4d!important;" data-toggle="tab">NonTech</a></li>
                            <li><a href="#over3" style="color: #4d4d4d!important;" data-toggle="tab">Robotics</a></li>
                            <li><a href="#over5" style="color: #4d4d4d!important;" data-toggle="tab">Entre'sum</a></li>
                            <li><a href="#over4" style="color: #4d4d4d!important;" data-toggle="tab">Workshop</a></li>
                            <li><a href="#over2" style="color: #4d4d4d!important;" data-toggle="tab">ATV</a></li>
                        </ul>
                      </div>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="over">
                          <div class="panel-group" id="accordion" role="tablist">
                  <div class="panel panel-default smoothScroll">
              <div class="panel-heading" role="tab" id="headingcou">
                  <h4 class="panel-title">
                    <a class="collapsed " data-toggle="collapse" href="#cou"  aria-controls="cou">
                        <p>Computer-IT</p>
                    </a>
                  </h4>
              </div>
                

              <div id="cou" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcou">
                  <div class="panel-body">

<!-- 8) Add contents here with justify/sub-headings/images whatever it contains -->
  <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fday" aria-controls="fday" role="tab" data-toggle="tab">FIRST DAY</a></li>
          <li><a href="#sday" aria-controls="sday" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fday">
            <!-- Xschedule speaker here -->
         
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room D-205</span>
              </h6>
              <h3>CodeSaw</h3>
              <h4>ROUND 1 And ROUND 2</h4>
              <p>This contest is based on coding skills , IQ and awareness as well. It is not only about coding it also test your precision and accuracy.Team have to minimize the code length of 3 codes in round 1, need to create 3 minimize codes from the start for given definition or output in whatever way you can in round 2.</p>
            </div>
 
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room D-103</span>
              </h6>
              <h3>C quiz And CryptoHunt</h3>
              <h4>ROUND 1 And ROUND 2</h4>
              <p>First elimination round would be C quiz based on C language. The second round would be C Schedule debugging.</p>
            </div>
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM </span> 
                <span><i class="fa fa-map-marker"></i> Room D-202,D-203</span>
              </h6>
              <h3>Code-less</h3>
              <h4>ROUND 1 And ROUND 2</h4>
              <p>Team have to minimize the code length of 3 codes in round 1, need to create 3 minimize codes from the start for given definition or output in whatever way you can in round 2 and round 3 is like rapid fire round of 5 questions.</p>
            </div>
             <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room B-203</span>
              </h6>
              <h3>Relay Coding</h3>
              <h4>ROUND 1 And ROUND 2</h4>
              <p>Relay coding is all about playing a different task with your knowledge of coding.A members of group solve a quiz in the 1st round,then In the 2nd round Offscreen coding ,Onscreen coding and the compilation of code will take place the game but in the limitation of specific time and by replacing the members of group the round would become more challenging task.</p>
            </div>
             <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room B-206</span>
              </h6>
              <h3>WebWeaver</h3>
              <h4>ROUND 1 And ROUND 2</h4>
              <p>Web Weaver is an area where best of the web developers in town amalgamate. The participants are required to have a thorough knowledge on basics of HTML and CSS. Also, beginner to intermediate knowledge of dynamic and responsiveness of your website is tested. So, get ready with your skills to come and compete.</p>
            </div>
            

             <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room B-103</span>
              </h6>
              <h3>Photoshop – Faceoff</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>In this event, a team will have to design a creative newspaper of their own,with their unique logo and front page with the help of the graphics editor of Photoshop.</p>
            </div>
          
          </div>

          <div role="tabpanel" class="tab-pane" id="sday">
           
          <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room D-205</span>
              </h6>
              <h3>CodeSaw</h3>
              <h4>Final Round</h4>
              <p>This contest is based on coding skills , IQ and awareness as well. It is not only about coding it also test your precision and accuracy.Team have to minimize the code length of 3 codes in round 1, need to create 3 minimize codes from the start for given definition or output in whatever way you can in round 2 and round 3 is like rapid fire round of 5 questions.</p>
            </div>
 
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room D-103</span>
              </h6>
              <h3>C quiz And CryptoHunt</h3>
              <h4>Final Round</h4>
              <p>First elimination round would be C quiz based on C language. The second round would be C schedule debugging. The third round would be cryptohunt in which the teams would be required to decrypt the clues to get destination block numbers and password. The team with least time of completion would be the winner.</p>
            </div>
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM </span> 
                <span><i class="fa fa-map-marker"></i> Room D-202,D-203</span>
              </h6>
              <h3>Code-less</h3>
              <h4>Final Round</h4>
              <p>Team have to minimize the code length of 3 codes in round 1, need to create 3 minimize codes from the start for given definition or output in whatever way you can in round 2 and round 3 is like rapid fire round of 5 questions.</p>
            </div>
             <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room B-203</span>
              </h6>
              <h3>Relay Coding</h3>
              <h4>Final Round</h4>
              <p>Relay coding is all about playing a different task with your knowledge of coding.A members of group solve a quiz in the 1st round,then In the 2nd round Offscreen coding ,Onscreen coding and the compilation of code will take place the game but in the limitation of specific time and by replacing the members of group the round would become more challenging task .and in last round members will code the schedule by using the internet.</p>
            </div>
             <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room B-206</span>
              </h6>
              <h3>WebWeaver</h3>
              <h4>Round 3 And Final Round</h4>
              <p>Web Weaver is an area where best of the web developers in town amalgamate. The participants are required to have a thorough knowledge on basics of HTML and CSS. Also, beginner to intermediate knowledge of dynamic and responsiveness of your website is tested. So, get ready with your skills to come and compete.</p>
            </div>
        
          
          </div>
        </div>
      </div>
                  
                  </div>
               </div>
          </div>
        </div>

                  <div class="panel-group" id="accordion" role="tablist">
                  <div class="panel panel-default smoothScroll">
              <div class="panel-heading" role="tab" id="headingcou">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#eli"  aria-controls="eli">
                        <p>Mechanical</p>
                    </a>
                  </h4>
              </div>
                

              <div id="eli" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeli">
                  <div class="panel-body">

<!-- 8) Add contents here with justify/sub-headings/images whatever it contains -->
  <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fdaym" aria-controls="fdaym" role="tab" data-toggle="tab">FIRST DAY</a></li>
          <li><a href="#sdaym" aria-controls="sdaym" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fdaym">
            <!-- Xschedule speaker here -->
         
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> IIT Shed 1, Workshop</span>
              </h6>
              <h3>Hydraulic Arm</h3>
              <h4>Round 1</h4>
              <p>Participants are expected to design a hydraulic arm. The arm stays stationary in the arena, picks up cups (any elements) and places them on platforms at different heights on the arena.</p>
            </div>
 
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 12:00 PM</span> 
                <span><i class="fa fa-map-marker"></i> CAD LAB 1st Floor</span>
              </h6>
              <h3>CAD ISTIC</h3>
              <h4>Round 1 And Round 2</h4>
              <p>CAD Modelling phase is actually a software based rounds.Here the total designing concepts of mechanical engineering shall be checked. Skill, speed, coordination &amp; accuracy of the participants will ensure the position &amp; last long them till the end. </p>
            </div>
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room M-104</span>
              </h6>
              <h3>Mecha Treasure Hunt</h3>
              <h4>Round 1 And Round 2</h4>
              <p>Mecha Treasure Hunt is an event of mind, speed and time. Here it will be consisted of three rounds; first of  GK quiz, second  of assembly building in which materials will be provided and third also of assembly building but it will be clue based round</p>
            </div>
             <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> 1st Floor M block</span>
              </h6>
              <h3>Chain Reaction</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>A chain reaction is a sequence of reaction where a reactive product or by product causes additional reactions to take place. In a chain reaction, positive feedback leads to a self-amplifying chain of events.</p>
            </div>
             <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room M-103,Workshop</span>
              </h6>
              <h3>Autopsy</h3>
              <h4>Round 1 And Round 2</h4>
              <p>To know about Internal Combustion Engine and also to know how to assemble as well as dismantle the engine within required amount of time.</p>
            </div>
            

             <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room M-101,Workshop</span>
              </h6>
              <h3>Junkyard</h3>
              <h4>Round 1 And Round 2</h4>
              <p>Junkyard wars is a platform to showcase your engineering attitude by creating some useful stuff from the provided useless scrap materials.</p>
            </div>
          
          </div>

          <div role="tabpanel" class="tab-pane" id="sdaym">
           
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> IIT Shed 1, Workshop</span>
              </h6>
              <h3>Hydraulic Arm</h3>
              <h4>Round 2 And Final Round</h4>
              <p>Participants are expected to design a hydraulic arm. The arm stays stationary in the arena, picks up cups (any elements) and places them on platforms at different heights on the arena.</p>
            </div>
 
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 12:00 PM</span> 
                <span><i class="fa fa-map-marker"></i> CAD LAB 1st Floor</span>
              </h6>
              <h3>CAD ISTIC</h3>
              <h4>Final Round</h4>
              <p>CAD Modelling phase is actually a software based rounds.Here the total designing concepts of mechanical engineering shall be checked. Skill, speed, coordination &amp; accuracy of the participants will ensure the position &amp; last long them till the end. </p>
            </div>
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room M-104</span>
              </h6>
              <h3>Mecha Treasure Hunt</h3>
              <h4>Final Round</h4>
              <p>Mecha Treasure Hunt is an event of mind, speed and time. Here it will be consisted of three rounds; first of  GK quiz, second  of assembly building in which materials will be provided and third also of assembly building but it will be clue based round</p>
            </div>
             <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room M-103,Workshop</span>
              </h6>
              <h3>Autopsy</h3>
              <h4>Round 3 And Final Round</h4>
              <p>To know about Internal Combustion Engine and also to know how to assemble as well as dismantle the engine within required amount of time.</p>
            </div>
            

             <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room M-101,Workshop</span>
              </h6>
              <h3>Junkyard</h3>
              <h4>Round 3 And Final Round</h4>
              <p>Junkyard wars is a platform to showcase your engineering attitude by creating some useful stuff from the provided useless scrap materials.</p>
            </div>
          
          </div>
        </div>
      </div>
                  
                  </div>
               </div>
          </div>
        </div>


    <div class="panel-group" id="accordion" role="tablist">
                  <div class="panel panel-default smoothScroll">
              <div class="panel-heading" role="tab" id="headingcou">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#ele"  aria-controls="ele">
                        <p>Electrical-IC-EC-Power</p>
                    </a>
                  </h4>
              </div>
                

              <div id="ele" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcou">
                  <div class="panel-body">

<!-- 8) Add contents here with justify/sub-headings/images whatever it contains -->
  <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fdaye" aria-controls="fdaye" role="tab" data-toggle="tab">FIRST DAY</a></li>
          <li><a href="#sdaye" aria-controls="sdaye" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fdaye">
            <!-- Xschedule speaker here -->
         <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:45 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room C-205</span>
              </h6>
              <h3>Electric-O-buzz</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>This event is based on your technical knowledge. There will questions of different types based on your fundamental electrical and electronics knowledge.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:45 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room C-206</span>
              </h6>
              <h3>Gate-O-Tarka</h3>
             <!-- <h4>By Johnathan Mark</h4>-->
              <p>This event is totally based on knowledge of basic logic gates and their circuits. These events consist three rounds.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 12:00 PM</span> 
                <span><i class="fa fa-map-marker"></i> Room C-202</span>
              </h6>
              <h3>Decode, Recode, Encode</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>This event is arduino based event in which there will be a team of maximum two members and they should have knowledge of arduino. </p>
            </div>
            
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 12:30 PM</span> 
                <span><i class="fa fa-map-marker"></i> Room G-106</span>
              </h6>
              <h3>Think Big</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>A technical event related with your abilities to Reduce, Modify and solved any kind of Analog, Digital &amp; Multi-block circuit given to you. </p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room F-104,106</span>
              </h6>
              <h3>Circuit Chakravyuh</h3>
             <!-- <h4>By Johnathan Mark</h4>-->
              <p>This event totally depends upon the circuit metholodgy.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room K-201,K-202</span>
              </h6>
              <h3>Waste 2 Shreshtha</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>This event is Electronics Basic Circuit based event in which there will be a team of maximum two members and they should have knowledge of electronics and electrical circuit and components.</p>
            </div>
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img2.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 12:15 PM</span> 
                <span><i class="fa fa-map-marker"></i> In front of F-block</span>
              </h6>
              <h3>Use solar - save nature</h3>
             <!-- <h4>By Johnathan Mark</h4>-->
              <p>This event is solar based event in which there will be a team of maximum four members.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img3.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:15 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room G-102</span>
              </h6>
              <h3>Witricity</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>This event is based on wireless transfer of electric power between 2 coils at resonance using induction to achieve the maximum power transfer between the coils in the circuit you have designed.</p>
            </div>

          
          </div>

          <div role="tabpanel" class="tab-pane" id="sdaye">

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:45 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room C-206</span>
              </h6>
              <h3>Gate-O-Tarka</h3>
             <!-- <h4>By Johnathan Mark</h4>-->
              <p>This event is totally based on knowledge of basic logic gates and their circuits. These events consist three rounds.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 12:00 PM</span> 
                <span><i class="fa fa-map-marker"></i> Room C-202</span>
              </h6>
              <h3>Decode, Recode, Encode</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>This event is arduino based event in which there will be a team of maximum two members and they should have knowledge of arduino. </p>
            </div>
            
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 12:30 PM</span> 
                <span><i class="fa fa-map-marker"></i> Room G-106</span>
              </h6>
              <h3>Think Big</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>A technical event related with your abilities to Reduce, Modify and solved any kind of Analog, Digital &amp; Multi-block circuit given to you. </p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room F-104,106</span>
              </h6>
              <h3>Circuit Chakravyuh</h3>
             <!-- <h4>By Johnathan Mark</h4>-->
              <p>This event totally depends upon the circuit metholodgy.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room K-201,K-202</span>
              </h6>
              <h3>Waste 2 Shreshtha</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>This event is Electronics Basic Circuit based event in which there will be a team of maximum two members and they should have knowledge of electronics and electrical circuit and components.</p>
            </div>
            

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img3.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:15 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room G-102</span>
              </h6>
              <h3>Witricity</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>This event is based on wireless transfer of electric power between 2 coils at resonance using induction to achieve the maximum power transfer between the coils in the circuit you have designed.</p>
            </div>

          
          </div>
        </div>
      </div>
                  
                  </div>
               </div>
          </div>
        </div>


          <div class="panel-group" id="accordion" role="tablist">
                  <div class="panel panel-default smoothScroll">
              <div class="panel-heading" role="tab" id="headingcou">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#cvl"  aria-controls="cvl">
                        <p>Civil</p>
                    </a>
                  </h4>
              </div>
                

              <div id="cvl" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcvl">
                  <div class="panel-body">

<!-- 8) Add contents here with justify/sub-headings/images whatever it contains -->
  <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fdayc" aria-controls="fdayc" role="tab" data-toggle="tab">FIRST DAY</a></li>
          <li><a href="#sdayc" aria-controls="sdayc" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fdayc">
            <!-- Xschedule speaker here -->
         <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img1.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-103</span>
              </h6>
              <h3>Hola Bridge</h3>
              <h4>Round 1 And Round 2</h4>
              <p>In this event, truss bridge is to be constructed using Pop sticks satisfying given constraints. The event consists of three rounds. Round 1 would be Questions paper based. If your structure collapse in second round then it will not be eligible for round 3 in which seismic capacity will be checked.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img2.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-102</span>
              </h6>
              <h3>Plantastic</h3>
            <h4>Round 1 And Round 2</h4>
              <p>The Participants have to pass through a series of task to attain the title of PLANTASTIC. This event consists of 2 rounds. In the first round, they have to prepare(Draw) a building plan of (G+1) storey in the given area as per building bye laws and NBC(National building code). In the second round, they will have to prepare a model according to the concept of green building by using the given materials.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img3.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 12:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-104</span>
              </h6>
              <h3>Civil Brainiacs</h3>
              <h4>Round 1 And Round 2</h4>
              <p>As this is a quiz event, participant has to qualify various rounds to become a winner. This event will increase the participant knowledge in the field of civil, along with the good experience of attending various rounds of quiz event.</p>
            </div>
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-104,Ground opposite N block</span>
              </h6>
              <h3>Eagle Eye</h3>
              <h4>Round 1 And Round 2</h4>
              <p>It is an event which is to be carried out using â€˜Theodoliteâ€™. This will increase the knowledge about the surveying work to be done on the field and will help the participants in future.</p>
            </div>
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-208,N-209</span>
              </h6>
              <h3>Traffica</h3>
              <h4>Round 1 And Round 2</h4>
              <p>Participants have to plan a road network according to given specified area and to prepare Prototype (Model) for same. </p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-107</span>
              </h6>
              <h3>Spile</h3>
              <h4>Round 1 And Round 2</h4>
              <p>Participant will have to pass through a series of task of testing of their pile structure. Those would include preparation of pile. Participants have to make pile structure  and the pile will be tested on different soils with different loads on it. Participants have to make a model of PILE with PILE CAP.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-205</span>
              </h6>
              <h3>Game Of Gravity</h3>
              <h4>Round 1 And Round 2</h4>
              <p>This event consist of three rounds based on gravity and its effects . The first round will be a MCQ test paper based on gravity. The second round consist practical game of wooden blocks based on stability. The first and second round will be cumulatively resulting in eliminations and the third round will be the deciding round of winner.</p>
            </div>
          
          </div>

          <div role="tabpanel" class="tab-pane" id="sdayc">
           
                     <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img1.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 09:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-103</span>
              </h6>
              <h3>Hola Bridge</h3>
              <h4>Final Round</h4>
              <p>In this event, truss bridge is to be constructed using Pop sticks satisfying given constraints. The event consists of three rounds. Round 1 would be Questions paper based. If your structure collapse in second round then it will not be eligible for round 3 in which seismic capacity will be checked.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img2.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 09:00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-102</span>
              </h6>
              <h3>Plantastic</h3>
             <h4>Round 3 And Final Round</h4>
              <p>The Participants have to pass through a series of task to attain the title of PLANTASTIC. This event consists of 2 rounds. In the first round, they have to prepare(Draw) a building plan of (G+1) storey in the given area as per building bye laws and NBC(National building code). In the second round, they will have to prepare a model according to the concept of green building by using the given materials.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img3.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:30 PM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-104</span>
              </h6>
              <h3>Civil Brainiacs</h3>
              <h4>Round 3 And Final Round</h4>
              <p>As this is a quiz event, participant has to qualify various rounds to become a winner. This event will increase the participant knowledge in the field of civil, along with the good experience of attending various rounds of quiz event. </p>
            </div>
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 09:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-104,Ground opposite N block</span>
              </h6>
              <h3>Eagle Eye</h3>
              <h4>Round 3 And Final Round</h4>
              <p>It is an event which is to be carried out using â€˜Theodoliteâ€™. This will increase the knowledge about the surveying work to be done on the field and will help the participants in future.</p>
            </div>
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-208,N-209</span>
              </h6>
              <h3>Traffica</h3>
              <h4>Final Round</h4>
              <p>Participants have to plan a road network according to given specified area and to prepare Prototype (Model) for same. </p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-107</span>
              </h6>
              <h3>Splie</h3>
              <h4>Final Round</h4>
              <p>Participant will have to pass through a series of task of testing of their pile structure. Those would include preparation of pile. Participants have to make pile structure  and the pile will be tested on different soils with different loads on it. Participants have to make a model of PILE with PILE CAP.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-205</span>
              </h6>
              <h3>Game Of Gravity</h3>
              <h4>Final Round</h4>
              <p>This event consist of three rounds based on gravity and its effects . The first round will be a MCQ test paper based on gravity. The second round consist practical game of wooden blocks based on stability. The first and second round will be cumulatively resulting in eliminations and the third round will be the deciding round of winner.</p>
            </div>
          
          </div>
        </div>
      </div>
                  
                  </div>
               </div>
          </div>
        </div>


      
    <div class="panel-group" id="accordion" role="tablist">
                  <div class="panel panel-default smoothScroll">
              <div class="panel-heading" role="tab" id="headingcou">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#che"  aria-controls="che">
                        <p>Chemical</p>
                    </a>
                  </h4>
              </div>
                

              <div id="che" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingche">
                  <div class="panel-body">

<!-- 8) Add contents here with justify/sub-headings/images whatever it contains -->
  <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fdaych" aria-controls="fdaych" role="tab" data-toggle="tab">FIRST DAY</a></li>
          <li><a href="#sdaych" aria-controls="sdaych" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fdaych">
            <!-- Xschedule speaker here -->
         <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 12:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room J-201,J-202,J-204</span>
              </h6>
              <h3>Hunt It Up</h3>
             <h4>Round 1 And Round 2</h4>
              <p>“If we don’t tackle ‘em we might just as well never have come on this treasure hunt at all.”  Bring out the SHERLOCK in you by participating in this treasure hunt. Get ready for the ultimate quest to find your way through all the challenges and become the INDIANA JONES.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> In front of GTU building</span>
              </h6>
              <h3>Canon Wars</h3>
              <h4>Round 1</h4>
              <p>We chemical engineers are very experts at explosive ideas, but wait a second, for here you need to get your mind on a way that can go much far as possible but without explosion, and that is the main point here. So get yourself ready for the event “Chemo-missile”.</p>
              <p>Prepare a missile from any material that would use no explosive chemicals and would take the minds of each  and every one present there to the highest point one can imagine and if you worth it, then you are just going to create history.</p>
            </div>
          
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> In front of GTU building(temp)</span>
              </h6>
              <h3>Sod-I-Atic Car</h3>
             <h4>Round 1</h4>
              <p>Cars have always fascinated youth. Here’s an opportunity for the young chemical engineers to build a car of their dreams by the use of safe chemicals. </p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room J-105,J-106</span>
              </h6>
              <h3>Chem-O-live</h3>
              <h4>Round 1 And Round 2</h4>
              <p>Hey guys, its time to excavate your hidden skills and to build up your ability at practical level. We provide you a platform to test your practical knowledge. So here we introduce our event called CHEM-O-LIVE. Its time to avail yourself through this event. Here you will be given live tasks like identification of Compounds given to you and many more. So get ready for the Live application of chemical engineering.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room H-204</span>
              </h6>
              <h3>Chem-O-Click</h3>
             <h4>Round 1 And Round 2</h4>
              <p>Bring out the photographic skills and showcase your understanding of chemical engineering principles in day to day life. In this event you have to bring photograph and  explain the chemical engineering aspects in that photo. You will get an opportunity to capture the wonderful world of Chemical engineereing through your lenses. </p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> J and H Block Inner Circle</span>
              </h6>
              <h3>Paper Presentation</h3>
              <h4>Round 1 And Round 2</h4>
              <p>Success of an engineer is determined by his/her efficiency in communicating his/her ideas. Techfestâ€™18 invites you to demonstrate your technical ideas and views and imaginations which wait to be assembled on the canvas of your skies and let your posters do the talking.</p>
            </div>

          
          </div>

          <div role="tabpanel" class="tab-pane" id="sday">
           
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room J-201,J-202,J-204</span>
              </h6>
              <h3>Hunt It Up</h3>
             <h4>Final Round</h4>
              <p>“If we don’t tackle ‘em we might just as well never have come on this treasure hunt at all.”  Bring out the SHERLOCK in you by participating in this treasure hunt. Get ready for the ultimate quest to find your way through all the challenges and become the INDIANA JONES </p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 09:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> In front of GTU building</span>
              </h6>
              <h3>Canon Wars</h3>
              <h4>Round 2 And Final Round</h4>
              <p>We chemical engineers are very experts at explosive ideas, but wait a second, for here you need to get your mind on a way that can go much far as possible but without explosion, and that is the main point here. So get yourself ready for the event â€œChemo-missileâ€. Prepare a missile from any material that would use no explosive chemicals and would take the minds of each and every one present there to the highest point one can imagine and if you worth it, then you are just going to create history. </p>
            </div>
          
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 09:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> In front of GTU building(temp)</span>
              </h6>
              <h3>Sod-I-Atic Car</h3>
             <h4>Round 2 And Final Round</h4>
              <p>Cars have always fascinated youth. Here is an opportunity for the young chemical engineers to build a car of their dreams by the use of safe chemicals. </p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room J-105,J-106</span>
              </h6>
              <h3>Chem-O-live</h3>
              <h4>Final Round</h4>
              <p>Hey guys, its time to excavate your hidden skills and to build up your ability at practical level. We provide you a platform to test your practical knowledge. So here we introduce our event called CHEM-O-LIVE. Its time to avail yourself through this event. Here you will be given live tasks like identification of Compounds given to you and many more. So get ready for the Live application of chemical engineering.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room H-204</span>
              </h6>
              <h3>Chem-O-Click</h3>
             <h4>Round 2 And Final Round</h4>
              <p>Bring out the photographic skills and showcase your understanding of chemical engineering principles in day to day life. In this event you have to bring photograph and  explain the chemical engineering aspects in that photo. You will get an opportunity to capture the wonderful world of Chemical engineereing through your lenses. </p>
            </div>

          </div>
        </div>
      </div>
                  
                  </div>
               </div>
          </div>
        </div>



    <div class="panel-group" id="accordion" role="tablist">
                  <div class="panel panel-default smoothScroll">
              <div class="panel-heading" role="tab" id="headingcou">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#gne"  aria-controls="gne">
                        <p>General &amp; Management</p>
                    </a>
                  </h4>
              </div>
                

              <div id="gne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinggne">
                  <div class="panel-body">

<!-- 8) Add contents here with justify/sub-headings/images whatever it contains -->
  <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fday" aria-controls="fday" role="tab" data-toggle="tab">FIRST DAY</a></li>
          <li><a href="#sday" aria-controls="sday" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fday">
            <!-- Xschedule speaker here -->
         <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-204</span>
              </h6>
              <h3>Maths Treasurhunt</h3>
              <h4>Round 1 And Round 2</h4>
              <p>This event  treasurehunt is  based on Math and Aptitude skills.</p>
            </div>
            
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room GKS(E-block)</span>
              </h6>
              <h3>Mock Interview</h3>
              <h4>Round 1 And Round 2</h4>
              <p>This is a event which gives real interview experience to the participants. In this event participants will face three different types of challenges for interview perpose and  finally there is one will be winner.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room B-201</span>
              </h6>
              <h3>Smart Manager</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>Smart manager is event in which there are three rounds , first is aptitude test of current affairs , second is group discussion, and third is about story narration in which 4 random pictures are given and participants have to write short story according to that.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-206</span>
              </h6>
              <h3>Corpo Quiz</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>A business quiz to ignite the young minds. Quiz will be based on new business venture, are known businessmen, start ups, new business techniques and various topics related to corporate.</p>
            </div>
            
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room M-106</span>
              </h6>
              <h3>Mad-Ads</h3>
              <h4>Round 1 And Round 2</h4>
              <p>Only a few are blessed by the talent  of effective advertising.The Ad-Mad show is the perfect platform to showcase that you have the knack to advertise and win hearts.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-203</span>
              </h6>
              <h3>Cash Flow</h3>
              <h4>Round 1 And Round 2</h4>
              <p>Do you have, what it takes to Build a business empire? Do you think you can handle your assets &amp; liabilities efficiently? Do you think you can escape the rat race? If yes, Then, this is the platform you were looking so far, To test your entrepreneur skills</p>
            </div>

          
          </div>

          <div role="tabpanel" class="tab-pane" id="sday">
           
           <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-204</span>
              </h6>
              <h3>Maths Treasurhunt</h3>
              <h4>Final Round</h4>
              <p>This event  treasurehunt is  based on Math and Aptitude skills.</p>
            </div>
            
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room GKS(E-block)</span>
              </h6>
              <h3>Mock Interview</h3>
              <h4>Final Round</h4>
              <p>This is a event which gives real interview experience to the participants. In this event participants will face three different types of challenges for interview perpose and  finally there is one will be winner.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room M-106</span>
              </h6>
              <h3>Mad-Ads</h3>
              <h4>Final Round</h4>
              <p>Only a few are blessed by the talent  of effective advertising.The Ad-Mad show is the perfect platform to showcase that you have the knack to advertise and win hearts.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> Room N-203</span>
              </h6>
              <h3>Cash Flow</h3>
              <h4>Final Round</h4>
              <p>Do you have, what it takes to Build a business empire? Do you think you can handle your assets &amp; liabilities efficiently? Do you think you can escape the rat race? If yes, Then, this is the platform you were looking so far, To test your entrepreneur skills</p>
            </div>
          
          </div>
        </div>
      </div>
                  
                  </div>
               </div>
          </div>
        </div>
                        </div>
                        

                        <div class="tab-pane fade" id="over1">



                  <div class="panel-group" id="accordion" role="tablist">
                  <div class="panel panel-default smoothScroll">
              <div class="panel-heading" role="tab" id="headingfun">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#fun"  aria-controls="fun">
                        <p>Fun Events</p>
                    </a>
                  </h4>
              </div>
                

              <div id="fun" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfun">
                  <div class="panel-body">

<!-- 8) Add contents here with justify/sub-headings/images whatever it contains -->
  <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fdayn" aria-controls="fdayn" role="tab" data-toggle="tab">FIRST DAY</a></li>
          <li><a href="#sdayn" aria-controls="sdayn" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fdayn">
            <!-- program speaker here -->
         
            <div class="col-md-2 col-sm-2">
              <img src="images/program-img1.jpg" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> I block ground(Right side)</span>
              </h6>
              <h3>Water War</h3>
              <h4>Round 1</h4>
              <p>In this game, there will be two teams, each one having 5
                members. Each team has one leader with paper disc on her/his head.
                The remaining four members: two would have water balloon on his/her
                hand; rest of them would have water guns. Two member with balloons
                will have fixed position which would be chosen by them. Other three
                members with gun will have to attack on opposite team.</p>
            </div>

             <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> I block ground(Left side)</span>
              </h6>
              <h3>HumanCaterpillar</h3>
              <h4>Round 1 and Round 2</h4>
              <p>There will be race between two groups. In each group, There will be four members who would be covered with cloth vertically. They will have to move forward with the cloth such that they will move forward by rotating the cloth keeping their feet on it..</p>
            </div>
            
            <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>
            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/program-img1.jpg" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i>Garden between A and B block</span>
              </h6>
              <h3>One Minute Game</h3>
              <p>The game is based on Time. The game is palyed by player in one Minute.Players have to finish the given task in specified one minute. there are very light weighted games which we have already know and may be play in our childhood.</p>
            </div>

            <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/program-img3.jpg" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM </span> 
                <span><i class="fa fa-map-marker"></i> Opposite to Workshop(Behind J block)</span>
              </h6>
              <h3>SelfieHolic</h3>
              <h4>Round 1 and Round 2</h4>
              <p>Ever tried to take selfies by solving puzzles? In our event you are suppose to take selfies as per given situation and at given location. Capture this lovable moments in three rounds.</p>
            </div>             
            <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> A block Parking</span>
              </h6>
              <h3>Paint It Out</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>One member of the team will paint the face of the other member using colours, paint brushes and other necessary materials required.</p>
            </div>
            <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> Volleyball Ground</span>
              </h6>
              <h3>Distraction</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>Distraction as the name suggests will test your ability to complete the task with some sort of distraction. Be ready to get distracted with some sort of interesting stuffs. So yes there is a chance for every one to show their prowess!!</p>
            </div>
            


          </div>

          <div role="tabpanel" class="tab-pane" id="sdayn">
           

          <div class="col-md-2 col-sm-2">
              <img src="images/program-img1.jpg" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> I block ground(Right side)</span>
              </h6>
              <h3>Water War</h3>
              <h4>Round 2 And Final Round</h4>
              <p>In this game, there will be two teams, each one having 5
                members. Each team has one leader with paper disc on her/his head.
                The remaining four members: two would have water balloon on his/her
                hand; rest of them would have water guns. Two member with balloons
                will have fixed position which would be chosen by them. Other three
                members with gun will have to attack on opposite team.</p>
            </div>

          <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> I block ground(Left side)</span>
              </h6>
              <h3>HumanCaterpillar</h3>
              <h4>Round 3 And Final Round</h4>
              <p>There will be race between two groups. In each group, There will be four members who would be covered with cloth vertically. They will have to move forward with the cloth such that they will move forward by rotating the cloth keeping their feet on it..</p>
            </div>
          <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

          <div class="col-md-2 col-sm-2">
              <img src="images/program-img3.jpg" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> Opposite to Workshop(Behind J block)</span>
              </h6>
              <h3>SelfieHolic</h3>
              <h4>Round 3 And Final Round</h4>
              <p>Ever tried to take selfies by solving puzzles? In our event you are suppose to take selfies as per given situation and at given location. Capture this lovable moments in three rounds.</p>
            </div>
            
            
            
        
          
          </div>
        </div>
      </div>
                  
                  </div>
               </div>
          </div>
        </div>

                  <div class="panel-group" id="accordion" role="tablist">
                  <div class="panel panel-default smoothScroll">
              <div class="panel-heading" role="tab" id="headingcou">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#adv"  aria-controls="adv">
                        <p>Adventure Events</p>
                    </a>
                  </h4>
              </div>
                

              <div id="adv" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeli">
                  <div class="panel-body">

<!-- 8) Add contents here with justify/sub-headings/images whatever it contains -->
  <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fdayad" aria-controls="fdayad" role="tab" data-toggle="tab">FIRST DAY</a></li>
          <li><a href="#sdayad" aria-controls="sdayad" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fdayad">
            <!-- program speaker here -->
         
            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> Garden Besides Of B Block(Infront Of C Block)</span>
              </h6>
              <h3>Run Rotate Run</h3>
              <h4>Round 1 and Round 2</h4>
              <p>There will be 3 members in each team. Each member from the team has to run to reach at the stand (cricket stump) and then rotate the stump along with their body by putting their head on the stump in a circular manner for five times. After rotating the stump, go back to the starting position and then give call to the next team member and the same continues for the other two members.</p>
            </div>

 
             <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Garden near to college gate</span>
              </h6>
              <h3>Paint Ball</h3>
              <!--<h4>Round 1 and Round 2</h4>-->
              <p>Paintball is a war simulation game. Players are divided into two teams and are provided guns (‘markers’) which fire paintball at very high speeds.These paintballs burst on impact releasing vegetable oil paint. So,come here and be a part of war…</p>
            </div>
            <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM </span> 
                <span><i class="fa fa-map-marker"></i> Garden backside of E block</span>
              </h6>
              <h3>Body Zorbing</h3>
              <h4>Round 1 and Round 2</h4>
              <p>In this game, you have to fight with others but the twist is that your upper body and head will be inside the plastic ball! Participants will be allowed to fight for certain time limit. In given time they have to earn certain points.Participant will gain point if he make fall the opponent.</p>
            </div>

                        <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/program-img2.jpg" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 12:00 PM </span> 
                <span><i class="fa fa-map-marker"></i> Room G-203</span>
              </h6>
              <h3>Being Sherlock</h3>
              <p>Do you ever solve a criminal case ?? Here is a chance to be a crime inspector. Here, in round 1 you are suppose to solve some mysterious puzzles for elimination round and then in round 2 participants will have to solve case usig crime scene to find suspects</p>
            </div>

            <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM </span> 
                <span><i class="fa fa-map-marker"></i> Garden between G block and H block</span>
              </h6>
              <h3>Hurdles And Twister</h3>
              <h4>Round 1 And Round 2</h4>
              <p>First round will be a path with the hurdles like tyres, chairs, bottles, rod, etc. Only team of two participants is required. Second round The participant who was guiding in first round will do this round. Whoever lasts for more time will be winner of the game.</p>
            </div>

              

          
          </div>

          <div role="tabpanel" class="tab-pane" id="sdayad">
           
            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> Garden Besides Of B Block(Infront of C Block)</span>
              </h6>
              <h3>Run Rotate Run</h3>
              <h4>Final Round </h4>
              <p>There will be 3 members in each team. Each member from the team has to run to reach at the stand (cricket stump) and then rotate the stump along with their body by putting their head on the stump in a circular manner for five times. After rotating the stump, go back to the starting position and then give call to the next team member and the same continues for the other two members.</p>
            </div>
                                     <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM</span> 
                <span><i class="fa fa-map-marker"></i> Garden near to college gate</span>
              </h6>
              <h3>Paint Ball</h3>
              <!--<h4>Round 1 and Round 2</h4>-->
              <p>Paintball is a war simulation game. Players are divided into two teams and are provided guns (‘markers’) which fire paintball at very high speeds.These paintballs burst on impact releasing vegetable oil paint. So,come here and be a part of war…</p>
            </div>
            
            <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM </span> 
                <span><i class="fa fa-map-marker"></i> Garden backside of E block</span>
              </h6>
              <h3>Body Zorbing</h3>
              <h4>Final Round</h4>
              <p>In this game, you have to fight with others but the twist is that your upper body and head will be inside the plastic ball! Participants will be allowed to fight for certain time limit. In given time they have to earn certain points.Participant will gain point if he make fall the opponent.</p>
            </div>
             
            <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM </span> 
                <span><i class="fa fa-map-marker"></i> Garden between G block and H block</span>
              </h6>
              <h3>Hurdles And Twister</h3>
              <h4>Final Round</h4>
              <p>First round will be a path with the hurdles like tyres, chairs, bottles, rod, etc. Only team of two participants is required. Second round The participant who was guiding in first round will do this round. Whoever lasts for more time will be winner of the game.</p>
            </div>

          
          </div>
        </div>
      </div>
                  
                  </div>
               </div>
          </div>
        </div>


    <div class="panel-group" id="accordion" role="tablist">
                  <div class="panel panel-default smoothScroll">
              <div class="panel-heading" role="tab" id="headingcou">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#gamein"  aria-controls="gamein">
                        <p>Gaming</p>
                    </a>
                  </h4>
              </div>
                

              <div id="gamein" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinggam">
                  <div class="panel-body">

<!-- 8) Add contents here with justify/sub-headings/images whatever it contains -->
  <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fdaygam" aria-controls="fdaygam" role="tab" data-toggle="tab">FIRST DAY</a></li>
          <li><a href="#sdaygam" aria-controls="sdaye" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fdaygam">
            <!-- program speaker here -->
         <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> Room B-206,B-203</span>
              </h6>
              <h3>Counter Strike</h3>
              <h4>Round 1 and Round 2</h4>
              <p>Counter Strike is very well known for lan gaming. It will be a knock-out based game with teams competing with each other within a specific time decided for each round. Get ready to shoot, battle and knock down other teams.</p>
            </div>


            <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> Room M-304</span>
              </h6>
              <h3>Mini Militia</h3>
              <h4>Round 1 and Round 2</h4>
              <p>Mini-Militia is android and iOS mobile game. Mini-militia is combat fight game like counter-strike. Its multiplayer game where 8-player can play over Local-Wifi- Connection.</p>
            </div>

            
          
          </div>

          <div role="tabpanel" class="tab-pane" id="sdaygam">

                        <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> Room B-206,B-203</span>
              </h6>
              <h3>Counter Strike</h3>
              <h4>Round 3,4 and Final Round</h4>
              <p>Counter Strike is very well known for lan gaming. It will be a knock-out based game with teams competing with each other within a specific time decided for each round. Get ready to shoot, battle and knock down other teams.</p>
            </div>

              <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> Room M-304</span>
              </h6>
              <h3>Mini Militia</h3>
              <h4>Final Round</h4>
              <p>Mini-Militia is android and iOS mobile game. Mini-militia is combat fight game like counter-strike. Its multiplayer game where 8-player can play over Local-Wifi- Connection.</p>
            </div>            
            
          
          </div>
        </div>
      </div>
                  
                  </div>
               </div>
          </div>
        </div>


          <div class="panel-group" id="accordion" role="tablist">
                  <div class="panel panel-default smoothScroll">
              <div class="panel-heading" role="tab" id="headingflu">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#spo"  aria-controls="spo">
                        <p>Sports</p>
                    </a>
                  </h4>
              </div>
                

              <div id="spo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingspo">
                  <div class="panel-body">

<!-- 8) Add contents here with justify/sub-headings/images whatever it contains -->
  <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fdayspo" aria-controls="fdayspo" role="tab" data-toggle="tab">FIRST DAY</a></li>
          <li><a href="#sdayspo" aria-controls="sdayspo" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fdayspo">
            <!-- program speaker here -->
<!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> Outside Library Road(From N block)</span>
              </h6>
              <h3>Slow Cycling</h3>
              <h4>Round 1</h4>
              <p>This event is based on cycle racing but in this event participants have to ride cycle at min slow speed.The one who will reach the destination last will be winner of this event.</p>
            </div>
 <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> I block ground(opposite to workshop)</span>
              </h6>
              <h3>Tug of War</h3>
              <h4>Round 1 and Round 2</h4>
              <p>Tug of war is a sport that directly puts two teams against each other in a test of strength: teams pull on opposite ends of a rope, with the goal being to bring the rope a certain distance in one direction against the force of the opposing team&#39;s pull.</p>
            </div>
            
          
          </div>

          <div role="tabpanel" class="tab-pane" id="sdayspo">
           
          <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM </span> 
                <span><i class="fa fa-map-marker"></i> Outside Library Road(From N block)</span>
              </h6>
              <h3>Slow Cycling</h3>
              <h4>Round 2 And Final Round</h4>
              <p>This event is based on cycle racing but in this event participants have to ride cycle at min slow speed.The one who will reach the destination last will be winner of this event.</p>
            </div>
 <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:00 AM</span> 
                <span><i class="fa fa-map-marker"></i> I block ground(opposite to workshop)</span>
              </h6>
              <h3>Tug of War</h3>
              <h4>Round 1 and Round 2</h4>
              <p>Tug of war is a sport that directly puts two teams against each other in a test of strength: teams pull on opposite ends of a rope, with the goal being to bring the rope a certain distance in one direction against the force of the opposing team&#39;s pull.</p>
            </div>
            
            
          
          </div>
        </div>
      </div>
                  
                  </div>
               </div>
          </div>
        </div>


      
    <div class="panel-group" id="accordion" role="tablist">
                  <div class="panel panel-default smoothScroll">
              <div class="panel-heading" role="tab" id="headingeng">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#eng"  aria-controls="eng">
                        <p>English-Vinglish</p>
                    </a>
                  </h4>
              </div>
                

              <div id="eng" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingche">
                  <div class="panel-body">

<!-- 8) Add contents here with justify/sub-headings/images whatever it contains -->
  <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fdayeng" aria-controls="fdayeng" role="tab" data-toggle="tab">FIRST DAY</a></li>
          <li><a href="#sdayeng" aria-controls="sdayeng" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fdayeng">
            <!-- program speaker here -->
         <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> Room F-205</span>
              </h6>
              <h3>NERD Quiz</h3>
              <p>Are you a fan of the Marvel and DC comic heroes?Do You love Iron Man, Superman, Batman and all the other famous heroes as much as we do? You know the special weapons and abilities of Thor, Spider-Man, Hulk and the X-Men? Great! Then the chances are good that you like our Nerd Quiz. There will be 4 rounds like Q&amp;A ,guess me,Rapid Fire and Buzzer.</p>
            </div>

            <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10:30 AM </span> 
                <span><i class="fa fa-map-marker"></i> Room G-202</span>
              </h6>
              <h3>CineJam</h3>
              <p>It is basically related to the bollywood movie, It consists of three round in which Que-Ans (OMR) , Dumbseras &amp; guess dialogue from mute video etc. Will play by participates.</p>
            </div>
          
            <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> Room M-303</span>
              </h6>
              <h3>Click Flix</h3>
              <h4>Round 1</h4>
              <p>This is a fun event based on famous TV series.</p>
            </div>
            <!-- program divider -->
            <div class="program-divider col-md-12 col-sm-12"></div>

            <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> Room M-301</span>
              </h6>
              <h3>Youth Parliament</h3>
              <p>Participants are divided into two parties namely ruling party and opposition party. Participants are given post according to their knowledge. Then opposition party will raise questions about current topics and ruling party will defend themselves.</p>
            </div>
          
          </div>

          <div role="tabpanel" class="tab-pane" id="sdayeng">
           
                        <!-- program speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="program">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 11:00 AM </span> 
                <span><i class="fa fa-map-marker"></i> Room M-303</span>
              </h6>
              <h3>Click Flix</h3>
              <h4>Round 2 And Final Round</h4>
              <p>This is a fun event based on famous TV series.</p>
            </div>


          </div>
        </div>
      </div>
                  
                  </div>
               </div>
          </div>
        </div>




 
      <!--  <div class="panel-group" id="accordion" role="tablist" >

          <div class="panel panel-default">
              <div class="panel-heading smoothScroll" data-spy="scroll" role="tab" id="headingeli">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#eli" aria-controls="eli">
                        <p>Mechanical</p>
                    </a>
                  </h4>
              </div>
              <div id="eli" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeli">
                  <div class="panel-body">
        <p>para</p>
                  </div>
               </div>
          </div>
        </div>-->

                  
                  </div>
      
                        <div class="tab-pane fade" id="over3">
                          <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fday" aria-controls="fday" role="tab" data-toggle="tab">FIRST DAY</a></li>
          <li><a href="#sday" aria-controls="sday" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fday">
            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img1.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-203(temp)</span>
              </h6>
              <h3>RO-VENTURES</h3>
              <!--<h4>By Jenny Green</h4>-->
              <p>In this event Robot has to pass number of obstacles. Team which finishes the event in less time will win. In case of controllers used, weight, dimension etc. will be taken into consideration.Control of the robot can be done either by wire communication or by wireless communication system.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img2.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-102(temp)</span>
              </h6>
              <h3>MAZE HUNTERS</h3>
             <!-- <h4>By Johnathan Mark</h4>-->
              <p>For all those 90’s kids who are fed up with seeing those memes that hit like if you remember this game and feels nostalgia here’s a chance to live those days back again when you used to play video games like Pacman, Rescue Rover, Dangerous Dave, Catacomb 3D and many others. </p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img3.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-104(temp)</span>
              </h6>
              <h3>ARMAGEDDON</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>The flagship event of any Robotics competition, RoboWars, sees the age-old entertainment of two robots battling it out in the center to be the last one standing. This presents a chance for the challenger to show their robotic acumen, intellect, and fighter spirit. </p>
            </div>
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-104(temp)</span>
              </h6>
              <h3>DROID HOCKEY</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>Ever heard of robot playing hockey? BOT Hockey is an event based on the controlling of robot while playing an innovative version of the sports game Ice Hockey. The event is a robotic event which consists of four rounds having various difficulties. Higher the rounds, higher are the difficulties. Participants will be able to learn new technical skills and will be introduced with new mechanism and the team coordination will be the main factor they will be introduced.</p>
            </div>
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-107(temp)</span>
              </h6>
              <h3>HYDROBOT</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>The Event will be played on water. The participant should make robot as it can run on water and complete the track.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-205(temp)</span>
              </h6>
              <h3>COPTER'S KINGDOM</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>The main objective of this whole competition is to judge the knowledge and skills of all the participants in the field of Robotics, and so participants should also know that how to fly a drone in present of hurdles and barriers.</p>
            </div>
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room D-205</span>
              </h6>
              <h3>LINE SEGUIDOR</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>What is Line Follower? In simple words, it is a kind of robot that can follow a specific path. The path can be a black line on white surface (or vice-versa.).Participants should have to complete the paths as per rules and regulations mentioned below.</p>
            </div>
          </div>
        </div>
                        </div></div>
                        <div class="tab-pane fade" id="over4">workshop</div>
                        <div class="tab-pane fade" id="over2">
                            <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fday" aria-controls="fday" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fday">
            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img1.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-203(temp)</span>
              </h6>
              <h3>ATV</h3>
              <!--<h4>By Jenny Green</h4>-->
              <p>temp temp tepm--------------------------------</p>
            </div>
          </div>
        </div>
      </div>

                        </div>
                        <div class="tab-pane fade" id="over5">
                          
                          <div class="wow fadeInUp col-md-10 col-sm-10">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#fday" aria-controls="fday" role="tab" data-toggle="tab">FIRST DAY</a></li>
          <li><a href="#sday" aria-controls="sday" role="tab" data-toggle="tab">SECOND DAY</a></li>
        </ul>
        <!-- tab panes -->
          <div class="tab-content">

          <div role="tabpanel" class="tab-pane active" id="fday">
            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img1.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-203(temp)</span>
              </h6>
              <h3>Hackathon</h3>
              <!--<h4>By Jenny Green</h4>-->
              <p>temp temp tepm--------------------------------</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img2.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-102(temp)</span>
              </h6>
              <h3>Startup Fair + Minutes to Millionaire</h3>
             <!-- <h4>By Johnathan Mark</h4>-->
              <p>temp temp tepm--------------------------------temp temp tepm--------------------------------</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="images/Xschedule-img3.jpg" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-104(temp)</span>
              </h6>
              <h3>Panel Discussion(Startup India)</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>temp temp tepm--------------------------------temp temp tepm--------------------------------</p>
            </div>
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-104(temp)</span>
              </h6>
              <h3>IPL Auction</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>Welcome to the thrill of a live auction! Put yourself in the shoes of a bidder to build the dream team that you always wanted in these racy hours of nerves, strategy, game theory and gut. If you love cricket, if you have followed IPL and if you can mix common sense with passion into your bidding strategy, this event is a must for you.</p>
            </div>
            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-107(temp)</span>
              </h6>
              <h3>CROWDPITCH</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>In this event the people who have an Idea with a raw start-up plan who think their Idea can be useful in the market and want to Pitch before the judges and Public. People who want to know how strong their Idea can sustain the market can participate and Win for their Idea.</p>
              <p>People who are searching for new ideas and can vote for the Pitchers who are pitching their idea can participate as crowd investors.</p>
            </div>

            <!-- Xschedule divider -->
            <div class="Xschedule-divider col-md-12 col-sm-12"></div>

            <!-- Xschedule speaker here -->
            <div class="col-md-2 col-sm-2">
              <img src="#" class="img-responsive" alt="Xschedule">
            </div>
            <div class="col-md-10 col-sm-10">
              <h6>
                <span><i class="fa fa-clock-o"></i> 10.00 AM Onwards</span> 
                <span><i class="fa fa-map-marker"></i> Room N-205(temp)</span>
              </h6>
              <h3>BIZQUIZ</h3>
              <!-- <h4>By Johnathan Mark</h4>-->
              <p>temp temp tepm--------------------------------temp temp tepm--------------------------------</p>
            </div>
          </div>
        </div>
      </div>

                        </div>
                    

                    </div></div></div></div></div></div></section>

<!-- =========================
    FOOTER SECTION   
============================== -->

<footer class="footer1">
<div class="container">

<div class="row"><!-- row -->
            
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                          <li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <a><img src="images/footer.png" style="width: 90%;padding: 10px;"></img></a><br><br>
                                
                                
                    
              </li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                          <li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Useful links</h1>
                                
                                <ul>
                  <li><a  href="#"><i class="fa fa-angle-double-right" style="text-align: left;"></i>  OverView</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Departments</a></li>
                                    
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Xschedule</a></li>
                                    <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Registration</a></li>
                                    
                                </ul>
                    
              </li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                          <li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Events</h1>
                                
                                <ul>


                <li><a href="#"><i class="fa fa-angle-double-right"></i> Technical </a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Non-tech</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Robotics</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Workshop</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> Entre'sum</a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i> ATV</a></li>
              

                                </ul>
                    
              </li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                
                   
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                          <li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">Contact Detail </h1>
                                
                                <div class="footerp"> 
                                
                                <h2 class="title-median">Vishwakarma Govt. Eng. College</h2>
                                <p><b>Email id:</b> <a href="mailto:info@vgec.com">info@vgec.com</a></p>
                                <p><b>Helpline Numbers </b>

    <b style="color:#ffc106;">(8AM to 10PM):</b>  +91-8130890090, +91-8130190010  </p>
    
    <p><b>Corp Office / Postal Address</b></p>
    <p><b>Phone Numbers : </b>7042827160, </p>
    <p> 011-27568832, 9868387223</p>
                                </div>
                                
                                <div class="social-icons">
                                
                                  <ul class="nomargin">
                                    
                <a href="https://goo.gl/bvXqjs"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
              <a href="https://goo.gl/uidJuh"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
              <a href=""><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
              <a href=""><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
                                    
                                    </ul>
                                </div>
                        </li>
                          </ul>
                          <br>
                          <br><button class="btn btn-default">WEB TEAM</button>

                       </div>
                </div>
</div>
</footer>
<!--header-->

<div class="footer-bottom">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <div class="copyright">

          © 2018, GTU CENTRAL TECHFEST, All rights reserved

        </div>

      </div>

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        <div class="design">

           <a href="#"> VGEC </a> |  <a target="_blank" href="">WEB DEVELOPMENT TEAM</a>

        </div>

      </div>

    </div>

  </div>

</div>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
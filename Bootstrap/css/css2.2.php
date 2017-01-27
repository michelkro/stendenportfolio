<?php
    header("Content-type: text/css");
    include '../content/session.php';

    $Background = $BackgroundColor_Home;
    $Menu = $MenuColor_Home;
    $Hoveractivemenu = $HoverActiveMenu_Home;
?>
 
html{
    background-color: <?php echo $Background; ?>;
}
 
#page-wrapper{
    background-color: <?php echo $Background; ?>;
}
 
#header{
    background-image: url("header.jpg")
}
body {
  margin-top: 50px;
}
 
#voornaamrij{
    margin-bottom: 25px;
    width: 100%;
    float: left;
}
 
#achternaamrij{
    margin-top: 10px;
    margin-bottom: 20px;
    width: 100%;
    float: left;
}
 
#berichtrij{
    margin-bottom: 20px;
}
 
.margin{
    margin-top: 55px;
}
 
#verschillendekleuren{
    width: 100%;
    height: 60px;
}
 
.kleur{
    text-align: center;
    width: 10%;
    height: 10%;
    margin-right: 50px;
    float: left;
}
 
#cv img{
    width: 100%;
    max-width: 300px;
}
 
p img:hover{
    border: 3px solid #777
}
 
#verzendenrij{
    margin-left: 10px;
}
 
#wrapper {
  padding-left: 0;
}
 
.standardwith{
    width: 70px;
}
 
#page-wrapper {
  width: 100%;
  padding: 5px 15px;
}
.form_left{
     
}
 
#profielfoto{
    margin-right: 5px;
    margin-left: 5px;
}
#profielfoto img{
    border-radius: 5px;
}
.margin{
	padding: 2%;
	border: 1px solid <?php echo $Header; ?>;
}  
.form_right{
}
 
/* Nav Messages */
 
.messages-dropdown .dropdown-menu .message-preview .avatar,
.messages-dropdown .dropdown-menu .message-preview .name,
.messages-dropdown .dropdown-menu .message-preview .message,
.messages-dropdown .dropdown-menu .message-preview .time {
  display: block;
}
 
.messages-dropdown .dropdown-menu .message-preview .avatar {
  float: left;
  margin-right: 15px;
}
 
.messages-dropdown .dropdown-menu .message-preview .name {
  font-weight: bold;
}
 
.messages-dropdown .dropdown-menu .message-preview .message {
  font-size: 12px;
}
 
.messages-dropdown .dropdown-menu .message-preview .time {
  font-size: 12px;
}
 
 
/* Nav Announcements */
 
.announcement-heading {
  font-size: 50px;
  margin: 0;
}
 
.announcement-text {
  margin: 0;
}
 
/* Table Headers */
 
table.tablesorter thead {
  cursor: pointer;
}
 
table.tablesorter thead tr th:hover {
  background-color: #f5f5f5;
}
 
/* Flot Chart Containers */
 
.flot-chart {
  display: block;
  height: 400px;
}
 
.flot-chart-content {
  width: 100%;
  height: 100%;
}
 
/* Edit Below to Customize Widths > 768px */
@media (min-width:768px) {
 
  /* Wrappers */
 
  #wrapper {
    padding-left: 225px;
  }
 
  #page-wrapper {
    padding: 15px 25px;
  }
 
  /* Side Nav */
 
  .side-nav {
    margin-left: -225px;
    left: 225px;
    width: 225px;
    position: fixed;
    top: 50px;
    height: 100%;
    border-radius: 0;
    border: none;
    background-color: <?php echo $Menu; ?>;
    overflow-y: auto;
  }
 
  /* Bootstrap Default Overrides - Customized Dropdowns for the Side Nav */
 
  .side-nav>li.dropdown>ul.dropdown-menu {
    position: relative;
    min-width: 225px;
    margin: 0;
    padding: 0;
    border: none;
    border-radius: 0;
    background-color: transparent;
    box-shadow: none;
    -webkit-box-shadow: none;
  }
 
  .side-nav>li.dropdown>ul.dropdown-menu>li>a {
    color: #999999;
    padding: 15px 15px 15px 25px;
  }
 
  .side-nav>li.dropdown>ul.dropdown-menu>li>a:hover,
  .side-nav>li.dropdown>ul.dropdown-menu>li>a.active,
  .side-nav>li.dropdown>ul.dropdown-menu>li>a:focus {
    color: #fff;
    background-color: #080808;
  }
 
  .side-nav>li>a {
    width: 225px;
  }
 
  .navbar-inverse .navbar-nav>li>a:hover,
  .navbar-inverse .navbar-nav>li>a:focus {
    background-color: <?php echo $Hoveractivemenu ?>;
  }
 
  /* Nav Messages */
 
  .messages-dropdown .dropdown-menu {
    min-width: 300px;
  }
 
  .messages-dropdown .dropdown-menu li a {
    white-space: normal;
  }
 
}
 

/*Hoofdpagina*/

#content{
    background-color: burlywood;
    height: 100%;
    width: 100%;
}
.info{
    background-color: #F44336;
    margin-left: 10px;
	border-radius: 8px;
    height: 100%;
    width: 30%;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    float: left;
}
.pasfoto img{
	border: 3px solid #F44336;
	border-radius: 8px;
    width: 100%;
    float: left;
}
.pasfoto img:hover{
	opacity: 0.5;
}

.pasfoto{
	width: 100%;
}
.gegevens{
    height: 350px;
    width: 100%;
    float: left;
}
.gegevens p{
    text-align: center;
}
.gegevens h2{
    text-align: center;
    font-size: 28px;
}
.overjouzelf{
    height: 100%;
    width: 65%;
	margin-left: 2%;
    text-align: center;
	border-radius: 8px;
    background-color: #2196F3;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    float:left;
}

.welkom{
	height: 100%;
    width: 95%;
	margin-left: 2%;
	margin-top: 2%;
    text-align: center;
	border-radius: 8px;
    background-color: #2196F3;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	padding-bottom: 1%;
    float:left;
}

.welkom h1{
	color: white;
}

#eigenfotos{
	height: 100%;
    width: 65%;
	margin-left: 2%;
	border-radius: 8px;
	margin-top: 2%;
    background-color: #2196F3;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    float:left;
}
.fototrots img{
	border-radius: 8px;
	width: 46%;
	margin: 2%;
	float: left;
}

/*CV*/

.frontendcv{
    background-color: burlywood;
    height: auto;
    width: 100%;
}
.pasfotocv img{
    border: 3px solid #F44336;
    width: 100%;
    border-radius: 8px;
    float: left;
}
.infocv{
    background-color: #F44336;
    margin-left: 10px;
    height: 100%;
	margin-bottom: 100%;
    width: 25%;
	border-radius: 8px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    float: left;
	
}
.cv{
   background-color: #2196F3;
   margin-left: 2%;
   width: 70%;
   height: 100%;
   border-radius: 8px;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   float: left;
}
.we{
    background-color: #2196F3;
    margin-left: 2%;
	margin-top: 2%;
    width: 70%;
    height: 100%;
	border-radius: 8px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    float: left;
}
#info{
	heigth: 100%;
	width: 100%;
}
.we h2{
    text-align: center;
}
.we p{
    margin-left: 10px;
}
.cv h2{
    text-align: center;
    
}
.cv p {
    margin-left: 10px;
    
}

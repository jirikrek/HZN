<?php

  
     session_start();
 ?>
<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a9460588d7.js"></script>
 
   
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="generator" content="HTML Tidy for HTML5 for Windows version 5.6.0">
  <script src="https://kit.fontawesome.com/a9460588d7.js"></script>
       <link rel="icon" type="image/png" href="/images/logo2.png" />

  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Kontakt</title><!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
  <link href="css/custom.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- Custom Fonts from Google -->
  <link href=
  'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
  rel='stylesheet' type='text/css'>
  <style>
  
  .velikost{
  border-radius: 0.8em 5em 5em; 
          margin: 40px 22%;
          margin-bottom:0px;
          background-color: #07b9b6;
  top:0;
  right:0;
  bottom:0;
  left:0;
  
  padding:1.2%;}
  
 @media only screen and (max-width: 1000px){   
 .velikost{margin: 40px 14%;}}
 @media only screen and (max-width: 767px){
 .velikost{margin: 40px 8%;}} 
  
  

nav#header-navigation ul li a{
text-decoration:none!important;
display: inline-block;
vertical-align: top;
margin:0px}
    

.ikona{font-size:50px;}

nav#header-navigation ul li a:hover{
font-size:108%;
margin:0px;}


nav#header-navigation {
  margin-bottom: 50px;
  display: block;
}



nav#header-navigation ul li {

    position:relative;
    padding-top:1%;
     padding-bottom:4%;
     padding-left:12%;
     padding-right:12%;
    display: inline-block;
  white-space: nowrap;
    text-transform: uppercase;
    min-height: 22px;
}

nav#header-navigation ul li span.subnavigation {      
position: absolute;
white-space: nowrap;
	top: 50%;
	left: 50%;
	transform: translate(-50%, 0);
    margin-bottom:5%;
  color: #fff;
  font-size: 85%;
}  

@media only screen and (max-width: 767px)
{nav#header-navigation ul li {
     padding-left:10%;
     padding-right:10%;
     }
     nav#header-navigation ul li span.subnavigation {
     font-size: 60%; 
     top: 60%;}}     
 
     
@media only screen and (max-width: 400px)
{nav#header-navigation ul li {
     padding-left:25%;
     padding-right:25%;
     padding-bottom:10%;     
     }
     nav#header-navigation ul li span.subnavigation {
     font-size: 80%; 
     top: 50%;}}
               




hr{position:relative;
bottom:16px;
width:80%;
padding:4px;}

.popisecek, a:focus, a:hover {
color:#ddd}   
  </style>
  

</head>





<body>
   

 
  <header>
    <?php
         include "nav.php";        
        ?>
  </header><!-- Footer -->
  
  
   
   <?php    
        
        
               
        if(!isset($_SESSION['username'])){
        function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
           
           $user_ip = getUserIP();
          
        
        
           
            
            $querys = "SELECT username FROM users WHERE username = '{$user_ip}' ";
            $selquery = mysqli_query($connection,$querys);
            while($row = mysqli_fetch_assoc($selquery)){
                
                 $user_ip = $row['username'];
              
            }
            
            
            if(mysqli_num_rows($selquery) < 1 ){
            
            $query = "INSERT INTO users(username)";
            $query .= "VALUES('{$user_ip}')";
            $insquery = mysqli_query($connection,$query);
              
            }else {
                $_SESSION['user_role'] = "member";  
                 $_SESSION['user_ip'] = $user_ip;  
                
            }
                 $_SESSION['user_role'] = "member"; 
            $_SESSION['user_ip'] = $user_ip;   
        }
        ?>
  
<div class="mezera"> </div>
<div class="velikost">
<h1> Kontakt na naše vývojáře </h1>
 
<br><br><hr>
 
<h3> Jiří Křek </h3>
<p class="popisecek">[HTML, PHP, GML, Blender, Unity]</p>
    
<nav id = "header-navigation">
<ul>
<li>    <a   href="mailto:j.krek@seznam.cz"> <i class="ikona fas fa-envelope-open-text"></i>  <span class = "subnavigation"><br>j.krek@seznam.cz  </span></a> </li>
<li>    <a> <i id="myTooltip" class="ikona fas fa-mobile-alt"></i>         <span class = "subnavigation"><br>+420 733 219 029  </span> </a> </li>
<li>    <a   href="https://fb.com/jiri.krek" target="_blank">   <i class="ikona fab fa-facebook-square"></i>           <span class = "subnavigation"><br>fb.com/jiri.krek  </span> </a> </li>

</ul>
</nav>

<hr>

<h3> Štěpán Rožník </h3>
<p class="popisecek">[HTML, CSS, GML, Python]</p>

<nav id = "header-navigation">
<ul>
<li>    <a   href="mailto:stepanroznik2@gmail.com"> <i class="ikona fas fa-envelope-open-text"></i>        <span class = "subnavigation"><br>stepanroznik2@gmail.com  </span> </a> </li>
<li>    <a> <i id="myTooltip" class="ikona fas fa-mobile-alt"></i>         <span class = "subnavigation"><br>+420 730 977 722  </span> </a> </li>
<li>    <a   href="https://fb.com/stepan.roznik" target="_blank" > <i class="ikona fab fa-facebook-square"></i>           <span class = "subnavigation"><br>fb.com/stepan.roznik  </span> </a> </li>

</ul>
</nav>
</div>   
 
                

    
  
<!-- jQuery -->
  <script src="js/jquery-1.11.3.min.js"></script> <!-- Bootstrap Core JavaScript -->
   
  <script src="js/bootstrap.min.js"></script> <!-- Plugin JavaScript -->
   
  <script src="js/jquery.easing.min.js"></script> <!-- Custom Javascript -->
   
  <script src="js/custom.js"></script>
  
  

  
  
</body>
</html>

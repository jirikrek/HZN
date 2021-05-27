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
  <title>Realizace</title><!-- Bootstrap Core CSS -->
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
  
  .velikost{position:fixed;
  top:0;
  right:0;
  bottom:0;
  left:0;}

nav#header-navigation ul li a{

    text-decoration:none!important;
    display: inline-block;
    vertical-align: top;
}

.ikona{font-size:50px;}


nav#header-navigation {
  margin-bottom: 50px;
  display: block;
}

@media only screen and (max-width: 767px)
{nav#header-navigation ul li {
     padding-left:10%!important;
     padding-right:10!important;
     }
     nav#header-navigation ul li span.subnavigation {
     font-size: 60%!important; 
     top: 60%!important;
	left: 60%!important;}}


nav#header-navigation ul li {

    position:relative;
    padding-top:1%;
     padding-bottom:4%;
     padding-left:6%;
     padding-right:6%;
    display: inline-block;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
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
  color: #999;
  font-size: 85%;
}
         .popisek{
         margin:20px;
         font-size:16px;
         text-align:justify;
         display: inline-block;
         width:60%}
      
      .pozad{
          border-radius: 0.8em 5em 5em; 
          margin: 40px 22%;
          margin-bottom:10px;
          background-color: #07b9b6; }
          
                
         
 @media only screen and (max-width: 767px){   
 .popisek{text-align:left;
          width:82%}     
      .pozad{ margin: 40px 8%;}}
      
      
      .realimg{
      vertical-align:top;
      display: inline-block;
    position:relative;
    height:120px;
    width:auto; 
    margin:20px;
      }

      .btn{
          
          font-weight:bold; 
          font-style: normal; 
          text-transform: uppercase;
          margin: 10px;
      }
      
  </style>
  

</head>


 
  <header>
    <?php
         include "nav.php";        
        ?>
  </header><!-- Footer -->


<body>
   


  
  
   
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
  

   
   


   <div class="mezera"></div>
   
    <div class="pozad">
     <section class="content content-3">
        <div class="container2"> 
			<h1 class="section-header"><br>KUŘE</h1>
                            <img class="realimg" src="images/Kure_ikona.png" alt="KURE">
			<p class="popisek">S touto velmi jednoduchou návykovou hrou vám čas na nudné přednášce uteče rychleji. 
            Její roztomilý sofistikovaný design vás dostane.<br>Cílem hry je co nejrychleji klikat na červená kuřata, dokud se dokáží udržet ve vzduchu.
Pozor na ta modrá, od těch prsty pryč. Zabijí všechna červená okolo sebe. </p> 
                    <br>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.stever68.Kuregame" class="btn btn-primary btn-lg">Google play</a>               
            </div>
    </section>
   </div>   

      


    <div class="pozad">
     <section class="content content-3">
        <div class="containe2"> 
			<h1 class="section-header"><br>Rainbow Snake</h1>
                            <img class="realimg" src="images/Had500.png" alt="Rainbow Snake">
			<p class="popisek">Snake, který se přizpůsobuje moderním dotykovým zařízením. K ovládání mu stačí dvě tlačítka - pravá a levá strana dotykové obrazovky. Místo klasických pohybů do stran se pohybuje buďto po směru nebo prosti směru hodinových ručiček.
<br>Cílem hry je posbírat co nejvíce jídla, než had narazí do svého ocasu nebo do jednoho z kaktusů. S jedením jednotlivých kousků se však had prodlužuje, čímž se stupňuje obtížnost hry. </p> 
                    <br>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.stever68.Rainbow_Snake" class="btn btn-primary btn-lg">Google play</a>               
            </div>
    </section>
   </div>



    <div class="pozad">
     <section class="content content-3">
        <div class="container2"> 
			<h1 class="section-header"><br>Jumping Plant</h1>
                            <img class="realimg" src="images/kytkaa.png" alt="Jumping Plant">
			<p class="popisek">Jumping plant je dobrodružná hra kde se kytička snaží dostat za svou milou přes různé levely. Samozřejmě je tu i režim pro hráče, kteří rádi soupeří s ostatními. </p> 
                    <br>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.companyname.Jumpingplant" class="btn btn-primary btn-lg">Google play</a>               
            </div>
    </section>
   </div>   
   
   
       <div class="pozad">
     <section class="content content-3">
        <div class="container2"> 
			<h1 class="section-header"><br>Jumping Unicorn</h1>
                            <img class="realimg" src="images/poniiiik.png" alt="Jumping Unicorn">
			<p class="popisek">In Jumping unicorn, it's about getting the highest score and getting enough unicoin to buy supplements on the unicorn. </p> 
                    <br>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.nikea.unicorn" class="btn btn-primary btn-lg">Google play</a>               
            </div>
    </section>
   </div>   
   
   
    <div class="pozad">
     <section class="content content-3">
        <div class="container2"> 
			<h1 class="section-header"><br>SUBMARINE</h1>
                            <img class="realimg" src="images/ponorka.png" alt="Submarine">
			<p class="popisek">You will play a submarine that floats in the oceans and avoid the obstacles.
Yellow Submarine is there to make you guys have fun! </p> 
                    <br>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=cz.submarine.yellow" class="btn btn-primary btn-lg">Google play</a> 
            
            <br>
                    <a target="_blank" href="https://hrazanapad.cz/games/submarine/submarine.html" class="btn btn-primary btn-lg">Zahrát si online</a>               
            </div>
    </section>
   </div>   
   
   
   
    <div class="pozad">
     <section class="content content-3">
        <div class="container2"> 
			<h1 class="section-header"><br>VLAK</h1>
                            <img class="realimg" src="images/vlaceeek.png" alt="VLAK">
			<p class="popisek">Poměrně známá česká freewarová hra z roku 1993. Řídíte lokomotivu a vaším úkolem je sesbírat všechny předměty, které na obrazovce vidíte. S každým sebraným nákladem se ale váš vláček zvětší přesně o jeden vagónek. </p> 
                    <br>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.companyname.vlak" class="btn btn-primary btn-lg">Google play</a>  
            <br>
             <a target="_blank" href="https://hrazanapad.cz/games/vlak/vlak.html" class="btn btn-primary btn-lg">Zahrát si online</a>   
            </div>
    </section>
   </div>   
   
   
   
       <div class="pozad">
     <section class="content content-3">
        <div class="container2"> 
			<h1 class="section-header"><br>Líbí se Vám naše tvorba?</h1>
                            <img class="realimg" src="images/zarovka.png" alt="zarovka">
			<p class="popisek">Za velmi výhodnou cenu Vám můžeme vytvořit mobilní hru na zakázku, například pro propagaci Vaší společnosti.
            Stačí kontaktovat jednoho z našich vývojářů. </p> 
                    <br>
                    <a target="_blank" href="/kontakty" class="btn btn-primary btn-lg">Kontakt</a>               
            </div>
    </section>
   </div>  
    
   
    
  
<!-- jQuery -->
  <script src="js/jquery-1.11.3.min.js"></script> <!-- Bootstrap Core JavaScript -->
   
  <script src="js/bootstrap.min.js"></script> <!-- Plugin JavaScript -->
   
  <script src="js/jquery.easing.min.js"></script> <!-- Custom Javascript -->
   
  <script src="js/custom.js"></script>
  
  

  
  
</body>
</html>

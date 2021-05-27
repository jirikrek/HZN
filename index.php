 <?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
    $big2 = 90;
    $big = 180;
}else{
    $big2 = 90;
    $big = 180; 
    
}
?> 
    
   <?php

     session_start();

 ?>
<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a9460588d7.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
     <link rel="icon" type="image/png" href="/images/logo2.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Hra za nápad</title>

    <!-- Bootstrap Core CSS -->
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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <style>


 body{height:100%}
 
 .header-content{
 position:relative;}

.pacman{width:22%;
position:absolute;
height:auto;
 top: 0;
    bottom: 0;
    margin: auto;
left:5%;}  

.logo{width:11%;
position:absolute;
height:auto;
 top: 0;
    bottom: 0;
    margin: auto;
left:85%;} 
  

    i {width:26px;text-align:center;}
    .bottomh {padding:0 8%;}
        
    p{padding:0 8%;
    font-size:120%;
    width:100%;}

.column {
text-align:left;
position:relative;
  float: left;
  width: 50%;
  padding: 10px;  
  height:100%;
    margin-bottom: -99px;
  padding-bottom: 99px;
  }
  
.row{position:relative;
margin-left:0!important;margin-right:0!important;
text-align:left;
width:auto;}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}     

           
           
  .retroshadow {
      color:#d5d5d5 ;
    letter-spacing: .025em;
    text-shadow: 
      4px 4px 0px #2c2c2c , 
      7px 7px 0px rgba(0, 0, 0, 0.2);
  }
        
        .idk1 {
                font-size: <?php echo $big . "%" ?>;
                margin-top: 14%;
                 margin-bottom: 8%;
       
            font-size-adjust: auto;
            text-align: center;
        
            
        }
        
        
        .idk {
            
            font-size: 50px;
            
        }




        .button:focus{ 
         color:white!important ;
      text-decoration: none!important;
              background-color: #ff2e63;
        }

  .button:hover{
    color:white!important ;
      text-decoration: none!important;
      background-color:#252a34;}
        
    
    .button{
         border-radius: 0px;
        background-color: #ff2e63;
       color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: <?php echo $big2 . "%" ?>;
  margin: 0px 0px;
  cursor: pointer;
         border: none; 
    }
     #section1 {
     width:65% ;
  height: 100vh;
  background-color:#12151a;}  
 #section2 {
  height: 100%; background-color:#08cac7;}   
  
  .sec1con{
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
 
 
@media only screen and (max-width: 767px){
.column{width:100%!important;
float:none!important;}
.pacman,.logo{display:none;}
}   

@media only screen and (min-width: 768px){
 .pridat{margin:8px 30%;}
 }     
       
/* Main styles */

.atext {
  fill: none;
  stroke-width: 3;
  stroke-linejoin: round;
  stroke-dasharray: 70 330;
  stroke-dashoffset: 0;
  -webkit-animation: stroke 12s infinite linear;
  animation: stroke 12s infinite linear;
}
.atext:nth-child(5n + 1) {
  stroke: #F2385A;
  -webkit-animation-delay: -2.4s;
  animation-delay: -2.4s;
}
.atext:nth-child(5n + 2) {
  stroke: #F5A503;
  -webkit-animation-delay: -4.8s;
  animation-delay: -4.8s;
}
.atext:nth-child(5n + 3) {
  stroke: #E9F1DF;
  -webkit-animation-delay: -7.2s;
  animation-delay: -7.2s;
}
.atext:nth-child(5n + 4) {
  stroke: #56D9CD;
  -webkit-animation-delay: -9.6s;
  animation-delay: -9.6s;
}
.atext:nth-child(5n + 5) {
  stroke: #3AA1BF;
  -webkit-animation-delay: -12s;
  animation-delay: -12s;
}

@-webkit-keyframes stroke {
  100% {
    stroke-dashoffset: -400;
  }
}
@keyframes stroke {
  100% {
    stroke-dashoffset: -400;
  }
}

svg {
  position: relative;
  width: 100%;
  height: 100%;
  font-size:80px;
}        
       
       
.heading1{
font-weight:150;
font-size:25px;
}

.space1{
height:50px}

.
        
    
    </style>
</head>

<body>

    

	<!-- Header -->
    <header>
    <?php
         include "nav.php";     
                
        ?>
    </header>
    
    <body >
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
        
        
        
        <div class="header_space">
        </div>
        
        
         <div class="header-content">
            <div class="header-content-inner">
            
               <div class="container" id="section1"> 
               <div class="sec1con">
               
               <svg viewBox="0 0 600 100">
               
  <symbol id="s-text">
    <text text-anchor="middle" x="50%" y="50%" dy=".35em">HRA ZA NÁPAD</text>
  </symbol>

  <use class="atext" xlink:href="#s-text"></use>
  <use class="atext" xlink:href="#s-text"></use>
  <use class="atext" xlink:href="#s-text"></use>
  <use class="atext" xlink:href="#s-text"></use>
  <use class="atext" xlink:href="#s-text"></use>
</svg>
            
                <h1 class="heading1" >Máš skvělý nápad na mobilní hru nebo aplikaci, ale neumíš ji naprogramovat? <br class="space1"> Vytvoříme ji pro tebe zcela zdarma!</h2>
                
                      
                
                <a  class="button" href="#section2" style=" font-weight:bold; font-style: normal; text-transform: uppercase;" >Jak to funguje </a>
                  </div>  
                               
                </div>
            </div>
        </div>
        
          
          <div class="main" id="section2">     <br><br>



<div class="row" style="background-color:#08cac7;padding:3% 0">
<h1 style="text-align: center; font-size:70px; ">Hra nemusí být jen pro pobavení!</h1>
<h2 class="bottomh" style="text-align: center; font-size:40px;"></i>&nbsp Hry nemusí být jen pro zábavu, ale lze díky nim podpořit váš marketing nebo propagovat vaši značku. Nezáleží na tom, zda máte kompletně propracovaný nápad nebo potřebujete ještě s něčím pomoct. S radostí se budeme podílet na projektech, kde budeme moct zanechat svou stopu. </h2>

</div> 
<div class="row">
  <div class="column" style="background-color:#07b9b6;">
  <br>
    <h2 class="bottomh">Když se váš nápad rozhodneme vytvořit<br>...</h2>            <br>
    <p><i class="fas fa-gamepad"></i> Uděláme vám vlastní hru/aplikaci pro mobilní zařízení.</p>
    <p><i class="fab fa-google-play"></i> Nahrajeme ji na Google Play, odkud si ji může každý stáhnout.</p>
    <p><i class="fas fa-signature"></i> Samozřejmostí jsou taky budoucí updaty.</p>
    <br>
  </div>
  <div class="column" style="background-color:#06A8A5;">
  <br>
    <h2 class="bottomh">Často kladené otázky<br>...</h2>            <br>
    <p><i class="fas fa-gamepad"></i>Jakou používáté technologii?    --   Programujeme především v Game Maker Studiu. </p>
    <p><i class="fas fa-clock" ></i> Jak dlouho trvá vývoj hry?    --   Záleží na typu hry a velikosti prostředí.</p>
    <p><i class="fas fa-crow"   ></i> Kolik vývoj stojí?   --   Cena se určuje na základě herního prostředí.</p>
    
    <br>
  </div>
</div>

<div class="row" style="background-color:#08cac7;padding:2.5% 0;text-align:center;">

<img class="pacman" src="images/pacman.png"> 
<a  class="button realizovane" style="z-index:1000;font-weight:bold; font-style: normal; text-transform: uppercase;" href="realizace">Již zrealizované projekty</a>                  
<a  class="button pridat" style="z-index:1000;font-weight:bold; font-style: normal; text-transform: uppercase;" href="navrhy">Přidat nápad</a>


</div>




</div>
        
        
    </body>
     

        
   
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    
    <!-- Custom Javascript -->
    <script src="js/custom.js"></script>

</body>

</html>

    </footer>

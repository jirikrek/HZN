 <?php


ob_start();
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{

  $my = 'myDIV2';
    $size = 90;
}else{

    $big = "hidden"; 
    $size = 45;                     
}
?>  


<?php
 
include "db.php";
   use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


 
require 'vendor/autoload.php';

function confirm($result){
      global $connection;
    if(!$result){
        
        die(mysqli_error($connection));
        
    }
    
    
}


function checkemail_exist($email){
    
    global $connection;
    
    $query = " SELECT user_email FROM users WHERE user_email = '$email' ";
    $result = mysqli_query($connection, $query);
    confirm($result);
   
    if(mysqli_num_rows($result) > 0 ){
        
        return true;
        
    } else {
        
        return false;
    }
    
    
    
    
    
}

    if(isset($_POST['email'])){
        
        
            $email = $_POST['email'];
        
        $lenght = 50;
        
        $token = bin2hex(openssl_random_pseudo_bytes($lenght));
        

if(checkemail_exist($email)){

if($stmt = mysqli_prepare($connection, "UPDATE users SET token='{$token}' WHERE user_email=?")){
    
   mysqli_stmt_bind_param($stmt, "s" , $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    
    /*
    *
    *PHP MAILER
    *
    */
    
    $mail = new PHPMailer();
   // $mail->isSMTP();
                    $mail->Host = '	smtp.mailtrap.io ';
                    $mail->Username = '	26e9f402fe57f0 ';  
                    $mail->Password = '	a7732896188d70 '; 
                    $mail->Port = 25;
                    $mail->SMTPSecure = 'tls';
                    $mail->SMTPAuth = true;
                    $mail->isHTML(true);
                    $mail->CharSet = 'UTF-8';  
                    $mail->SMTPDebug = 2;
                              
    $mail->setFrom('info@mafianje.chytrak.cz', 'Resetování hesla');
    // $mail->From = 'j.krek@seznam.cz ';
    // $mail->FromName = 'jiri krek';
    $mail->addAddress($email);
    
    $mail->Subject = "Žádost o resetování hesla";
    $mail->Body = '<p>Klikni zde pro resetování hesla --> 
    
    <a href="https://hrazanapad.cz/reset.php?email='.$email.' & token='.$token.'">https://hrazanapad.cz/reset.php?email='.$email.' & token='.$token.'</a>
    </p>';

    if($mail->send()){
        
        $emailSent= true;
        
    } else {
        
        echo'email not sent and error is : ' , $mail->ErrorInfo;
        
    }
    
    
        } 
    
    
    }
    
  }  
//}



?>

 
    
  
<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">

<head>
        <link rel="icon" type="image/png" href="/images/logo2.png" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Zapomenuté heslo</title>

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
     input[type=email] {
        
         
        color: white;
      
    }
        div.login {
      
        border-style: solid;
        border-width: 4px;
        border-color: lightslategrey;
        border-radius: 8px;
        
         position: static;
        margin: auto;
          max-width: <?php echo $size . "%" ?>;
            color: white;
        
        }
             .button{
         border-radius: 35px;
        background-color: dodgerblue;
       color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
         border: none; 
    }
      
    </style>
</head>

<body>

    

	<!-- Header -->
    <header>
    <?php
         include "nav.php";        
        ?>
    </header>
    
    <body>
       <!-- Page Content -->
                     <div class="mezera"></div>
                    <div  class="login">

                        <?php if(!isset( $emailSent)): ?>


                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                                <h2 class="text-center">Zapomenuté heslo?</h2>
                                <p>Můžeš si ho zde resetovat.</p>
                                <div class="panel-body">




                                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                                <input id="email" name="email" placeholder="Email" class="form-control"  type="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="recover-submit" class="button" value="Resetovat heslo" type="submit">
                                        </div>

                                        <input type="hidden" class="hide" name="token" id="token" value="">
                                    </form>

                                </div><!-- Body-->

                            <?php else: ?>


                                <h2>Zkontroluj email.</h2>


                            <?php endIf; ?>


</div>


    </body>
       <footer class="page-footer">
    

        	
       <!-- Copyright etc -->
        <div class="small-print">
        	<div class="container">
        		<p>Copyright &copy; Mafous 2019</p>
        	</div>
        </div>
        
    </footer>

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
 




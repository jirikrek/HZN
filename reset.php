<?php include "db.php";



if(!isset($_GET['email']) && !isset($_GET['token'])){
   
   redirect('index.php');
} 

$verified = false;
$email = $_GET['email'];
$token = $_GET['token'];
if($stmt = mysqli_prepare($connection, "SELECT username , user_email , token FROM users WHERE token =? ")){
    
    
    mysqli_stmt_bind_param($stmt , "s" , $_GET['token']);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt , $username ,$user_email , $token);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);
    
    

if(isset($_POST['recover'])) {
    if(isset($_POST['password']) && isset($_POST['password_repeat'])){
        
        
        if($_POST['password'] === $_POST['password_repeat']){
            
            $password = $_POST['password'];
            $hashedpassword = password_hash($password, PASSWORD_BCRYPT , array('cost'=>10));
            if($stmt = mysqli_prepare($connection, "UPDATE users SET token='', user_password= '{$hashedpassword}' WHERE user_email =? ")){
                
                mysqli_stmt_bind_param($stmt , "s" , $_GET['email']);
                mysqli_stmt_execute($stmt);
                
                 if(mysqli_stmt_affected_rows($stmt) >=1){
                    
                   header("Location: index.php");
                }
                
                mysqli_stmt_close($stmt);
                $verified = true;
                
                
            }
        }
        
    }  
    
    
    
}
}

?>

<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">

<head>
 <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Livestock_brand_J_K_combined.svg/571px-Livestock_brand_J_K_combined.svg.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Reset hesla</title>

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
          div.login {
      
        border-style: solid;
        border-width: 4px;
        border-color: lightslategrey;
        border-radius: 8px;
       
         position: static;
        margin: auto;
          max-width: 40%;
       
        
        
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
<div class="login">

   <?php if(!$verified): ?>
 
                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                                    <h2 class="text-center">Zapomenuté heslo?</h2>
                                <p>Můžeš si ho zde resetovat.</p>
                                <div class="panel-body">

                                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                                                <input id="password" name="password" placeholder="Nové heslo" class="form-control"  type="password">
                                            </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                                                <input id="password_repeat" name="password_repeat" placeholder="Nové heslo znovu" class="form-control"  type="password">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input name="recover" class="button" value="Resetovat heslo" type="submit">
                                        </div>

                                        <input type="hidden" class="hide" name="token" id="token" value="">
                                    </form>

                 
    </div>
<?php else: ?>
   
  <?php redirect('/login.php'); ?>
   
 <?php endif; ?>
    

</div> <!-- /.container -->

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
 






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
    
           session_start();  

ob_start();
 //include "logins.php";



   use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


 
require 'vendor/autoload.php';

   
     


require 'Mobile_Detect.php';
$detect = new Mobile_Detect;
   
 $log = "login";
if ( $detect->isMobile() ) {
 
    $log = "loginm";
    
}
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

    <title>Návrhy</title>

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
        
        .login{
         margin-top: 20px!important;   
        border-style: solid;
        border-width: 4px;
        border-color: lightslategrey;
        border-radius: 8px;
        
         position: static;
        margin: auto;
          max-width: <?php echo $size . "%" ?>;
       
            
            
        }
        
        
       
        
        
      
       
         .loginm{
            
        border-style: solid;
        border-width: 4px;
        border-color: lightslategrey;
        border-radius: 8px;
        background-color: rgba(0, 75, 100, .7);
         position: static;
        margin: auto;
          max-width: 60%;
       
            
            
        }
        p {
            
            color: white;
            
        }

.velikost{        height:300px!important;}
.velikostp{        height:150px!important;}
   
        textarea{
            background: none;
      font-size: 15px;
     align-self: auto;
            border: none;
      outline: none;
              
        }
        
        in {
       
              background: none;
            
            
        }
         .pc{
            
            
            text-align: right;
            padding-right: 15px;
            
        }
        

.pd{top:40px;
position:relative;
  text-align: left;
            padding-left: 15px;  }
            
           
            
            
        }
    
        .img_con{
            
            border-radius: 20%;
            width: 75px;
            height: 50px;
            padding-bottom: 5px;
            padding-top: 5px;
          
        }
        
        .table , tr {
            
       
        
            padding-left: 10px;
                width: 85px;
                height: 0px;
           text-align: left;
         position: fixed;
                top: 50;
        }
        
        .like {
            
            color: black;
            background-color: white;
         
        }
     
    
        
        
    </style>

 
</head>

<body>
  <header>
    <?php
         include "nav.php";        
        ?>
    </header>
	<!-- Body -->
    
    
    <body>
  
  
  
  
  
  
  
  
  
     
   <?php    
        
        ////////////////////////createkoment//////////////////
        
        
         
    if(isset($_POST['create_comment'])){
     if(isset($_GET['p_id'])){
         $author = $_SESSION['username'];
         $p_id = $_GET['p_id'];
        $post_comment  = $_POST['comment'];
     $query = "INSERT INTO comments (comment_content,comment_date,comment_post_id,comment_author) ";
         $query .= " VALUES ('{$post_comment}' , now() , '{$p_id}', '{$author}') ";
         $create_comment = mysqli_query($connection,$query);
     
  ?><div class="mezera"></div> <h1> <?php echo "Váš komentář byl přidán."; ?> </h1>  <?php
     
     }}
        
 
   
        
        
        
        ///////////////IPADRESA/////////////////////////
               
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
        
        
        
        
        
        ///////KONTROLA PRIHLASENI//////
        
         if(isset($_GET['p_id'])){
               $post_id = $_GET['p_id'];
       if (isset($_SESSION['username'])){
           
              $user = $_SESSION['username'];
       }else {
           
            $user = $_SESSION['user_ip'];
         
    
           
           
       }
             
            
         }
        
        
        
        //////////ZAJEM/////////////
        
      if (isset($_POST['zajem'])){
         
             //if(isset($_SESSION['username'])){
            $querys = "SELECT * FROM users WHERE username = '{$user}' ";
            $sel_querys = mysqli_query($connection,$querys);
            while($row = mysqli_fetch_assoc($sel_querys)){
    
    $user_id = $row['user_id'];
               
            }
          
           $queryl = "SELECT * FROM liky WHERE user_id = $user_id ";
            $sel_queryl = mysqli_query($connection,$queryl);
            while($row = mysqli_fetch_assoc($sel_queryl)){
       $user_interest_id = $row['user_interest_id'];
               
            }
               
         // if ($user_interest_id == 0){
          
                 $queryn = "SELECT * FROM posts WHERE post_id = $post_id ";
            $sel_queryn = mysqli_query($connection,$queryn);
            while($row = mysqli_fetch_assoc($sel_queryn)){
    
    $post_user = $row['post_user'];
                
            }
                 
              
            $query_s = "SELECT * FROM liky WHERE user_id = '{$user_id}' AND user_interest_id = '{$post_id}'";
           $query_se = mysqli_query($connection,$query_s);
          while($row = mysqli_fetch_assoc($query_se)){
              
              $user_id_db = $row['user_id'];
              $user_interest_id_db = $row['user_interest_id'];
          }
               
            if (($user_id_db != $user_id)&&($user_interest_id_db != $post_id)){
                
                
           
    
           $query = "UPDATE posts SET ";
   
           
     $query .="post_status  = post_status + 1 ";
   $query .= "WHERE post_id =$post_id ";
     $update_users_query = mysqli_query($connection , $query);
  
            
             $queryd = "INSERT INTO liky (user_id,user_interest_id) "; 
          $queryd .="VALUES($user_id,$post_id)";

     $update_users_query = mysqli_query($connection , $queryd);   
           
             }
    
     
                
                
                
         
            
             header("Location:návrh?p_id=$post_id"); 
        }
            
           
         
            
      //  }
        
        
        ////////////////////////nezajem//////////////
        
         
          $post_id = $_GET['p_id'];
       
        if (isset($_POST['nezajem'])){
           
            $querys = "SELECT user_id FROM users WHERE username = '{$user}' ";
            $sel_querys = mysqli_query($connection,$querys);
            while($row = mysqli_fetch_assoc($sel_querys)){
    
    $user_id = $row['user_id'];
            }
            
            
            
            $query_s = "SELECT * FROM liky WHERE user_id = '{$user_id}' AND user_interest_id = '{$post_id}'";
           $query_se = mysqli_query($connection,$query_s);
          while($row = mysqli_fetch_assoc($query_se)){
              
              $user_id_db = $row['user_id'];
              $user_interest_id_db = $row['user_interest_id'];
          }
               
            if(isset($user_id_db)&& isset($user_interest_id_db)){
           
            
           $query = "UPDATE posts SET ";
   
     $query .="post_status  = post_status - 1 ";
   $query .= "WHERE post_id =$post_id ";
     $update_users_query = mysqli_query($connection , $query);
  
            
             $queryd = "DELETE FROM liky WHERE user_interest_id = $post_id AND user_id = $user_id"; 
         
     $update_users_query = mysqli_query($connection , $queryd);   
            
            
            
            
            header("Location:návrh?p_id=$post_id");
        
            
           
            }
            
        }
        
         $post_id = $_GET['p_id'];
       
         if(isset($_GET['p_id'])){
            // if(isset($_SESSION['username'])){
             
             $query = "SELECT user_id FROM users WHERE username = '{$user}' ";
            $sel_queryf = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($sel_queryf)){
    
    $user_id = $row['user_id'];
            
            
            }
             
              $queryf = "SELECT * FROM liky WHERE user_interest_id  = $post_id AND user_id = $user_id ";
            $sel_queryv = mysqli_query($connection,$queryf);
            while($row = mysqli_fetch_assoc($sel_queryv)){
    
    $user_interest_id = $row['user_interest_id'];
            
            
            }
             if(!isset($user_interest_id)){
                 $user_interest_id = 0;
             }
             
             if(mysqli_num_rows($sel_queryv) > 0 ){
                        
                     
                   
          
             //if ($user_interest_id ==  $post_id ){
                 $nezajem = "nezajem";
                $zajem = "Už se mi to nelíbí" ;
                 
             }else{
                
                 $nezajem = "zajem";
                 $zajem = "To se mi líbí";
                 
             }
                   
         }
        
           
         if(isset($_GET['p_id'])){
                
             $post_id = $_GET['p_id'];
        

                $query = "SELECT * FROM posts WHERE post_id = $post_id ";
   $select_post = mysqli_query($connection,$query);


while($row = mysqli_fetch_assoc($select_post)){
    
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_title= $row['post_title'];
    $post_image = $row['post_image'];
    $post_date = $row['post_date'];
    $post_content= $row['post_content'];
    $post_status = $row['post_status'];
         $post_user = $row['post_user'];
 
   

                if(isset($_GET['log'])){
                    
                    $log = "loginm";
                    
                }else{
                    
                    $log = "login";
                    
                } 
       
       
        
        ?>

                  
            
             
            <div class="mezera"></div>
                  
              
               
            <form action="" method="post">
                  <div class="<?php echo $log; ?> ">

              
                <!-- First Blog Post -->
                <h2>
                       
                    <?php echo $post_title; ?>
                </h2>
                <p class="autor">  <span class="glyphicon glyphicon-user"></span>  <?php echo $post_user; ?> </p>
                <hr>
                
            <!-- <input height="50px" width="100px" type="image" id="image" alt=""
       src="<?php echo "/images/" . $post_image; ?>"> -->
       
       <?php if(strlen($post_image) > 1){?>
             
   <div class="nadobrazek">
            <!-- <a target="_blank" href="<?php echo "/images/" . $post_image; ?> ">  <input class="obrazek" type="image" id="image" alt="<?php echo $post_title; ?>"  
       src="<?php echo "/images/" . $post_image; ?> "> </a> 
       -->
       
              <img class="obrazek" src="<?php echo "/images/" . $post_image; ?> " alt="" id="<?php echo $post_id; ?>">

       
       
       </div>
     
         
                          <?php } ?>  
       
                            
                                      
      
                            
                             
                    <textarea readonly rows="50" cols="6" class="form-control in textnavrhu velikost" ><?php echo $post_content; ?></textarea>
               
                <p class="pd"><span class="glyphicon glyphicon-time"></span><?php echo $post_date; ?></p>

               <p  class="pc"> Likes: <?php echo $post_status; ?> &nbsp;         <button name="<?php echo $nezajem; ?>" type="submit" class="btn like" ><?php echo $zajem; ?> <span <?php if($nezajem == "zajem"){ echo "class='glyphicon glyphicon-thumbs-up'";}else{echo "class='glyphicon glyphicon-thumbs-down'";} ?>  ></span></button>
</p>
               
                
 <!--          
 <button name="<?php echo $nezajem; ?>" type="submit" class="button">
<?php echo $zajem; ?></button> -->
            
              

            </div>
    
                    <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("<?php echo $post_id; ?>");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>         
   
   
    </form>
         <?php
          $p_id = $_GET['p_id'];
         
  $query = " SELECT * FROM comments WHERE comment_post_id = $p_id ";
            $result = mysqli_query($connection, $query);
       while($row = mysqli_fetch_array($result)){
        
   $kom_id = $row['comment_id'];
       $kom_autor = $row['comment_author'];
           $text_kom = $row['comment_content'];
       }
          ?>
             
                        <?php
      if(mysqli_num_rows($result) < 1){
                        
                     
                    
                  ?>       
                     <h1><?php echo "Žádný komentář";?></h1>  <?php
                        
                   }else{
         ?> <h1><?php echo "Komentáře:"; ?></h1>
              
          <?php    
      }
       
          ////////////////////////zobrazitkoment//////////////////
        
    
 $p_id = $_GET['p_id'];
         
  $query = " SELECT * FROM comments WHERE comment_post_id = $p_id ";
            $result = mysqli_query($connection, $query);
       while($row = mysqli_fetch_array($result)){
        
   $kom_id = $row['comment_id'];
       $kom_autor = $row['comment_author'];
           $text_kom = $row['comment_content'];
        
     
            
          
           
     ?>
          
         
          
     <div class="login">
   
         
               
               
               <div class="form-group">
         <label for="post_tags"></label>
         <br>
         <p class="autor" style=" text-align: center; position:relative;"> <span class="glyphicon glyphicon-user"></span> <?php echo $kom_autor; ?></p> 
           <!--<span class="glyphicon glyphicon-user autor"></span> <input type="text" class="autor" name="" readonly value="<?php echo $kom_autor ;?>" -->
          <textarea rows="3" cols="40"  class="textnavrhu form-control ini"  name="" readonly ><?php echo $text_kom ;?></textarea>
      </div>

            <form action="logins.php?p_id=<?php echo $kom_id; ?>&po_id=<?php echo $p_id; ?>" method="POST">
               <?php  if ($_SESSION['user_role'] == 'admin'){
           
                 ?>   
                   
                
                <button class="delete" type="submit" name="delete_comment"><span class="glyphicon glyphicon-remove"></span></button>
        <?php    } ?>
    </form>
               
           
             </div>
    
 
    <?php } ?>
   
    <?php
    if(isset($_SESSION['username'])){  ?>
      <div class="login">
   
           <form class="nadtextnavrhu" method="post" action="">
               
               
               <div class="form-group">
         <label for="post_tags"></label>
          <!-- <input type="text" class="form-control" name="post_description" placeholder="Enter destription"> -->
          <br><br>
          <textarea rows="3" cols="40"  class="textnavrhu form-control ini velikostp"  name="comment" placeholder="Napiš komentář"></textarea>
      </div>
<button  class="btn btn-primary" name="create_comment" type="submit">Přidat komentář</button>
            
               
               
           </form>
           
             </div>
     <?php }?> 
    
    </body>


 <?php     }}
                   
   ?>
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
      <!--WZ-REKLAMA-1.0-->
</body>

</html>

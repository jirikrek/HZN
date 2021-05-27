 <?php
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
global $connection;

   
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

    <title>Tvoje nápady</title>

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
       
       
         .obrazek{position:relative!important;left:0!important;top:-8px!important}
         
        p {
            
            color: white;
            
        }
            .table , tr {
            
     
        
            padding-left: 10px;
                width: 85px;
                height: 0px;
           text-align: left;
         position: fixed;
                top: 50;
        }
        
        .img_con{
            
            border-radius: 20%;
            width: 75px;
            height: 50px;
            padding-bottom: 5px;
            padding-top: 5px;
          
        }
        
        .pc{
            
            top:6px;
            position:relative;
            text-align: right;
            padding-right: 15px;
            
        }
        
        .pd {
            
             text-align: left;
            padding-left: 15px;
            
            
        }
        
        .logina{
            
        border-style: solid;
        border-width: 4px;
        border-color: #06A8A5;
        border-radius: 8px;
        background-color: rgba(0, 75, 100, .7);
         position: fixed;
        margin: auto;
     
        z-index:2; 
          
      
       padding-left: 10px;
            padding-right: 10px;
            color: white;
      
        padding-bottom: 20px
     
             
        }
        
         .loginaimg{
            
              padding-left: 10px;

        border-radius: 20px;
       margin-left: 5px;
         position: fixed;
        margin: auto;
     max-height: 15%;
             max-width: 20%;
        z-index:2; 
          
      border-style: solid;
        border-width: 4px;
        border-color: #06A8A5;
        border-radius: 8px;
        background-color: rgba(0, 75, 100, .7);

     
             
        }
        
         
        .login{
            
        border-style: solid;
        border-width: 4px;
        border-color: #06A8A5;
        border-radius: 8px;
       
         position:relative;
        margin: auto;
          max-width: <?php echo $size . "%" ?>;
           margin-bottom: 20px;
            margin-top: 20px;
            text-align: center;
            margin-left: 30%;
            padding-top: 30px;
         
       
            
            
        }
        .loginfix {
            visibility: <?php echo $big ?>;
             padding-left: 0px;
padding-top: 150px;
        border-radius: 20px;
       margin-left: 5px;
         position: fixed;
        margin: auto;
     max-height: 20%;
             max-width: 30%;
        z-index:2; 
          
            
            
        }
        
        .seradit{
            
            color: black;
            background-color: white;
            
        }
        
        
        .prog{
            
            color: white;
            width: auto;
            height: auto;
            
        }
        
        .aval{
            
             border-style: solid;
        border-width: 4px;
        border-color: #06A8A5;
        border-radius: 8px;
        background-color:rgba(37,42,52,0.9);
         position:relative;
        margin: auto;
          max-width: <?php echo $size . "%" ?>;
           margin-bottom: 20px;
            margin-top: 20px;
            text-align: center;
             padding-top: 30px;
         
            
        }

        .aval1{
            
             border-style: solid;
        border-width: 4px;
        border-color: #06A8A5;
        border-radius: 8px;
         background-color:rgba(37,42,52,0.9);
         position:relative;
        margin: auto;
          max-width: <?php echo $size . "%" ?>;
           margin-bottom: 20px;
            margin-top: 20px;
            text-align: center;
            
         
            
        }
        
        
        
           
      
    
        
    </style>
</head>

<body style="napady">
  <header>
    <?php
         include "nav.php";        
        ?>
    </header>
	<!-- Body -->
    
    
    <body>
    
         <div class="mezera"></div>
                        
            <script>
                  window.onload = function() {
  document.getElementById('myDIV2').style.display = 'none';
};                 
       
              
                 function myFunctions() {
                     
                     myFunctio();
                     myFuncti();
                     
                 }
                
                               function myFunctio() {
  var x = document.getElementById("myDIV");

    if (x.style.display === "none") {
    x.style.display = "block";
   
  } else {
    x.style.display = "none";
  }
}   
     
                  function myFuncti() {
  var x = document.getElementById("myDIV2");

    if (x.style.display === "none") {
    x.style.display = "block";
   
  } else {
    x.style.display = "none";
  }
}   
   
          
        </script>
        
        <?php
        
        
       
   if(isset($_POST['edit_posts'])) {
    
      $p_id = $_GET['p_id'];
            
            $post_title    = $_POST['post_title'];
            $post_description    = $_POST['post_description'];
          
           
         
            $post_image         = $_FILES['post_image']['name'];
         $post_image_temp     =$_FILES['post_image']['tmp_name'];

    
   
     if ( ( strlen ($post_description ) > 1 ) && ( strlen ($post_title ) > 1 )  ){
       
          $sel_query = "SELECT post_image FROM posts WHERE post_image = '{$post_image}'";
           $sel_my_query = mysqli_query($connection, $sel_query);  
         while($row = mysqli_fetch_assoc($sel_my_query)){
    
    $db_post_image = $row['post_image'];
               
            }
          if(mysqli_num_rows($sel_my_query) > 1){
                        
                     $lenght = 10;
        
        $num = bin2hex(openssl_random_pseudo_bytes($lenght));
                    $post_image = $num . $post_image ;
                   }
         
         if ($_FILES["post_image"]["size"] > 2000000) {
    $velike = "Soubor je příliš velký.(max. 2MB)";
  
}else{
             
             


         
             if($_FILES['post_image']['name'] == "") {

                 $query = " UPDATE posts SET post_title = '$post_title' , post_content = '$post_description'  WHERE post_id = $p_id  ";
  
            $create_user_query = mysqli_query($connection, $query);  
              
               if (!$create_user_query){
                   
                   die(mysqli_error($connection));
                
               }
                $velike = "Váš příspěvěk byl upraven";
         
                 
             }else{
                 
                 $imageFileType = strtolower(pathinfo($_FILES["post_image"]["name"],PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   
    $velike = "Podporované formáty obrázků jsou: JPG,PNG,GIF,JPEG";
}else{
                 
                 
          move_uploaded_file($post_image_temp, "images/$post_image" );
         
       
             $query = " UPDATE posts SET post_title = '$post_title' , post_image = '$post_image'  , post_content = '$post_description'  WHERE post_id = $p_id  ";
                 
            $create_user_query = mysqli_query($connection, $query);  
             
               if (!$create_user_query){
                   
                   die(mysqli_error($connection));
                   
               }
 $velike = "Váš příspěvěk byl upraven";
         
}
             }////moveupload
     
      
       }
     
     }else{
           $velike = "Prosím vyplntě všechny kolonky";
          
     }
     
   }else{
       
       $velike = "";
        }
        
        
      /////////delete/////////////  
        
   if(isset($_POST['delete_posts'])) {
       
      $p_id = $_GET['p_id'];
       
            $query = " DELETE FROM posts WHERE post_id = $p_id"; 
                 
           
                 
            $create_user_query = mysqli_query($connection, $query);  
              
               if (!$create_user_query){
                   
                   die(mysqli_error($connection));
                   
               }
          header("Location: nápady");
      
   
   }
        
        
              
   if(isset($_POST['delete_image'])) {
       
      $p_id = $_GET['p_id'];
       
            $query = " UPDATE posts SET post_image = '' WHERE post_id = $p_id"; 
                 
           
                 
            $create_user_query = mysqli_query($connection, $query);  
              
               if (!$create_user_query){
                   
                   die(mysqli_error($connection));
                   
               }
       
      
   
   }
        
        
        
        ?>
       
        
        
         <div>
      <h1><?php echo $velike ;?></h1>
            <h1>Tvoje nápady</h1> 
      
   <?php       

      
   
             
             
             
                  $username = $_SESSION['username'];
                
                    
                     $query = "SELECT * FROM posts WHERE post_user = '{$username}' "; 
                    
                
            
        
        
   $select_post = mysqli_query($connection,$query);

 $text_size =200;
while($row = mysqli_fetch_assoc($select_post)){
    
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_title= $row['post_title'];
    $post_image = $row['post_image'];
    $post_date = $row['post_date'];
    $post_content=$row['post_content'];
    $post_status = $row['post_status'];
    $post_user = $row['post_user'];
    $post_tags = $row['post_tags'];
    

?>
                

                 <div class="aval" >
                   
          
              
                      
          <form action="nápady.php?p_id=<?php echo $post_id; ?>" method="post" enctype="multipart/form-data">
           
                <div class="form-group">
         <label for="title"></label>
          <input maxlength="20" type="text" class="form-control in"   name="post_title" value="<?php echo $post_title; ?>" placeholder="Název vaší hry (nejlépe v angličtině)">
      </div>
      
      
      

      <div class="form-group">
         <label for="post_tags"></label>
          <!-- <input type="text" class="form-control" name="post_description" placeholder="Enter destription"> -->
          <textarea maxlength="800" rows="10" cols="40"  class="form-control ini" value="<?php echo $post_content; ?>"  name="post_description" placeholder="Stručný popis hry"><?php echo $post_content; ?></textarea>
      </div>
      
    
     
     <?php if(strlen($post_image) > 1){?>
               <button  class="nacrt2del" name="delete_image" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
   <div class="nadobrazek">
             <!--  <input  class="obrazek" type="image" id="<?php echo $post_id; ?>" alt="<?php echo $post_title; ?>"  
       src="<?php echo "/images/" . $post_image; ?> "> -->
       <img class="obrazek" src="<?php echo "/images/" . $post_image; ?> " alt="<?php echo $post_title; ?>" id="<?php echo $post_id; ?>">
        </div>
    
        
                         
                          <?php $nacrt = "Upravit náčrt"; }else{$nacrt = "Vložit náčrt";} ?>  
                          
                                 
    
                          
                          
                          
                          
      <div  class="CV">
         <label  for="n<?php echo $post_id; ?>" class="btn like">   <span class="
glyphicon glyphicon-open"></span><?php echo $nacrt ;?> </label><span style="position:absolute;"> &nbsp;*nepovinné</span>
          <input id="n<?php echo $post_id; ?>" name="post_image" type="file" style="visibility:hidden;"  >
      </div> 
   

      
       
                
                 <span  class="input-group-button">
                  
              <button  class="btn btn-primary" name="edit_posts" type="submit">Upravit</button>
                 
                 
                  <button  class="btn btn-primary" name="delete_posts" type="submit">Vymazat</button>
                  <br>
  
                 <input class="aval1" type="text" value="<?php if ($post_tags == "unavalibled"){ echo "Čeká na schválení";}else{ echo "Zveřejněno";} ?>">
                 
                
                  
              </span>
                 
         
              
              
              
              
          </form>
   
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
      </div> 

</div>
    </body>


 <?php     } 
                    
            
    ?>
    
      <?php  if(mysqli_num_rows($select_post) < 1){
                        
                     
                    
                        ?>  <h1> <?php echo "Ještě nemáš žádné nápady "; ?> </h1>  
                        <?php
                        
                   }  
              
    
                    ?>
    
    
      <footer class="page-footer">
    

        	
       <!-- Copyright etc -->
        <div class="small-print">
        	<div class="container">
        		<p>Copyright � Mafous 2019</p>
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

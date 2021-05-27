

<?php include "db.php";
session_start(); 

  //users//  
 
   function escape($string) {

global $connection;

return mysqli_real_escape_string($connection, trim($string));


}

   if(isset($_POST['create_user'])) {
     
            
            $user_firstname    = escape($_POST['user_firstname']);
            $user_lastname     = escape($_POST['user_lastname']);
            $username          = escape($_POST['username']);
            $user_email        = escape($_POST['user_email']);
            $user_tel        = escape($_POST['user_tel']);
            $user_password     = escape($_POST['user_password']);
            $user_role         = escape($_POST['user_role']);
            $user_image         = escape($_FILES['user_image']['name']);
         $user_image_temp     =escape($_FILES['user_image']['tmp_name']);

         move_uploaded_file($user_image_temp, "images/$user_image" );

            $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10));    
              
            $query = " INSERT INTO users(user_firstname, user_lastname,user_role, username, user_tel, user_email, user_password, user_cv) ";
                 
            $query .= " VALUES ('{$user_firstname}','{$user_lastname}','{$user_role}', '{$username}', '{$user_tel}', '{$user_email}', '{$user_password}', '{$user_image}') "; 
                 
            $create_user_query = mysqli_query($connection, $query);  
              
               if (!$create_user_query){
                   
                   die(mysqli_error($connection));
                   
               }
          header("Location: index");
      
   
   }




//posts//
 if(isset($_POST['avalibled_post'])){
     
     $p_id = $_GET['p_id'];
     $post_ava = "avalibled";
     $query = " UPDATE posts SET post_tags = '$post_ava' WHERE post_id = $p_id  ";
                 
           
                 
            $create_user_query = mysqli_query($connection, $query);  
     
     
       header("Location: navrhy");
 }
 

   if(isset($_POST['create_posts'])) {
      
             $username = $_SESSION['username']; 
             $query = " SELECT user_id FROM users WHERE username = '$username' ";
            $result = mysqli_query($connection, $query);
       while($row = mysqli_fetch_array($result)){
        $post_user_id = $row['user_id'];
       }
            $post_title    = escape($_POST['post_title']);
            $post_description    = escape($_POST['post_description']);
            $post_user           = $_SESSION['username'];
            $post_tags         = "unavalibled";
            $post_date        = date('d.m.Y');
       
       
       
     if ( ( strlen ($post_description ) > 1 ) && ( strlen ($post_title ) > 1 )  ){
       
       
            $query = " INSERT INTO posts(post_user , post_title, post_tags,post_content,post_date, post_user_id, post_date_l) ";
                 
            $query .= " VALUES ('{$post_user}','{$post_title}','{$post_tags}', '{$post_description}','{$post_date}' , '{$post_user_id}', now())"; 
                 
            $create_user_query = mysqli_query($connection, $query);  
              
               if (!$create_user_query){
                   
                   die(mysqli_error($connection));
                   
               }
         
         echo "JDEPFKA";
         
     }
          header("Location: navrhy");
     
   
   }



//edit_posts//
 
 

   if(isset($_POST['edit_posts'])) {
       
      $p_id = $_GET['p_id'];
            
            $post_title    = escape($_POST['post_title']);
            $post_description    = escape($_POST['post_description']);
            $post_image         = escape($_FILES['post_image']['name']);
            $post_image_temp     =escape($_FILES['post_image']['tmp_name']);

  
        $velike = "";
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
         
         if ($_FILES["post_image"]["size"] > 500000) {
    $velike = "Soubor je příliš velký.(max. 500kb)";
  
}else{
             
             


         
             if($_FILES['post_image']['name'] == "") {

                 $query = " UPDATE posts SET post_title = '$post_title' , post_content = '$post_description'  WHERE post_id = $p_id  ";
           
            $create_user_query = mysqli_query($connection, $query);  
              
               if (!$create_user_query){
                   
                   die(mysqli_error($connection));
                   
               }
                 
                 
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
}
             }////moveupload
     
      
             $velike = "Váš příspěvek byl odeslán ke kontrole";
       }
     
     }else{
           $velike = "Prosím vyplntě všechny kolonky";
          
     }
       header("Location: nápady");   
   }
//delete_posts//
 
 

   if(isset($_POST['delete_posts'])) {
       
      $p_id = $_GET['p_id'];
            
            $query = " DELETE FROM posts WHERE post_id = $p_id"; 
                 
           
                 
            $create_user_query = mysqli_query($connection, $query);  
              
               if (!$create_user_query){
                   
                   die(mysqli_error($connection));
                   
               }
          header("Location: nápady");
      
   
   }

 if(isset($_POST['delete_comment'])) {
       $p_id = $_GET['p_id'];
      $po_id = $_GET['po_id'];
            
       
            $query = " DELETE FROM comments WHERE comment_id = $p_id"; 
                 
           
                 
            $create_user_query = mysqli_query($connection, $query);  
              
               if (!$create_user_query){
                   
                   die(mysqli_error($connection));
                   
               }
          header("Location: návrh?p_id=$po_id");
      
   
   }

function IfItIsMethod($method=null){
    
    if($_SERVER['REQUEST_METHOD'] == strtoupper($method)){
        
        return true;
        
    } 
    
    return false;    
        
    
    
    
}

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

function redirect($location){
    
header("Location:" . $location);
    exit;
    
}


?>
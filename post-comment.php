<?php 
    session_start();
    require "database.php";
    $comment = isset($_POST['user_comment']) ? trim($_POST['user_comment']) : '';
    $id  = $_POST['post-id'];
    $userid = $_SESSION['id'];
    if(strlen($comment) < 10){
        echo ("tối thiểu 10 kí tự vui lòng nhập lại "   );
        
    }
    else{
        
        $insertsql = $conn->prepare("INSERT INTO comments( post_id, user_id, comment_text ) VALUES (?  , ? , ? );");
        $insertsql->bind_param('iis' , $id , $userid , $comment  );
        if($insertsql->execute()){
        
        $comment_count = "UPDATE `posts` SET comments = comments + 1 WHERE id = $id ";
        $update_comment = $conn->query($comment_count);
        header("location: post.php?id=$id");
            
    }
    }
    
   


?>
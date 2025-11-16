<?php 
    session_start();
    require "database.php";
    $comment = isset($_POST['user_comment']) ? trim($_POST['user_comment']) : '';
    $id  = $_POST['post-id'];
    $userid = $_SESSION['id'];
    if($comment == ''){
        echo ("vui lòng nhập bình luận của bạn  "   );
        
    }
    else{
        echo ("id bài viết : $id");
        
        echo ("nội dung : $comment");
        echo ("user : $userid");

    }
    $insertsql = $conn->prepare("INSERT INTO comments( post_id, user_id, comment_text ) VALUES (?  , ? , ? );");
    $insertsql->bind_param('iis' , $id , $userid , $comment  );
    if($insertsql->execute()){
        echo('bình luận thành công');
    }


?>
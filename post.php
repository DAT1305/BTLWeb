<?php 
 session_start();
 require("database.php");
 $id = $_GET['id'];
 $post = "SELECT * FROM `posts` WHERE id = $id ";
 $result =  $conn->query($post);
 $get_post = $result->fetch_assoc(); 
 $id_user = $get_post['id_user'];
 $post_user = "SELECT username FROM `users` WHERE id = $id_user ";
 $result_user = $conn->query($post_user);
 $user_get = $result_user->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$get_post['title']?></title>
    <link rel="stylesheet" href="post.css">
</head>
<body>
    <div class = "container">
    <div class = "bentrong">

    <div class = "user">
        <div class="user-trong">
            <div class="user_avata"><img src="avatardefault_92824.png" alt=""></div>
        <div class="username_post"> <?= $user_get['username'] ?></div>
        <div class="date">ngày tham gia :</div>
        <div class="post_count">Tổng số bài viết :</div>
        </div>
    </div>
        <div class = "post-container">
            <div class = "title-post">
            <?= $get_post['title'] ?>
        </div>
           <div class="post_noi_dung"> <div class = "post-image"><img src="<?= $get_post['post_image'] ?>" alt="">
    </div>
            
        
    <div class = "post-noi-dung">
        <?= $get_post['noi_dung'] ?>

    </div></div>
        </div>
</div>

    </div>
    <div class="comment-display-container">
        <?php 
            require "comments.php"
        ?>

    </div>



    <div class="comment-container">
        <?php if(!isset($_SESSION['username'])):?>
            <div class="need-login">bạn cần đăng nhập để bình luận ! <a href="login.html">đăng nhập ngay</a></div>



        <?php else : ?>
            
            <form class="comment-area" action="post-comment.php"  method="POST" >
            <div class="comment_text"><h3>điền bình luận của bạn vào đây !</h3></div>
            <input  class = "post-id" name = "post-id" value = "<?= $id ?>">
            <div class="comment-box-area"><textarea class = "comment_box" name="user_comment" id="user_comment" placeholder="nhập comment của bạn"></textarea></div>
           
            <button class = "submit" type="submit">bình luận </button>
            
        </form>
         
        <?php endif ;?>
    </div>

<script></script>
</body>
</html>
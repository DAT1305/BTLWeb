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
<!-- cập nhật views vào sql cho post có id cụ thể khi người dùng truy cập vào -- -->
 <?php 
$update_view = "UPDATE posts SET views = views + 1 WHERE id = $id";
$result = $conn->query($update_view);
 
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

    <div class = "user"  data-user ="<?= $id_user?>">
        <div class="user-trong">
            <div class="user_avata"><img src="avatardefault_92824.png" alt=""></div>
        <div class="username_post"  > <?= $user_get['username'] ?></div>
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

    </div>

</div>
<!-- nút like  -->
 <div class="like-button">
   
    <div class="like-button-text"> bài viết này có hữu ích cho bạn không ? :</div>
    <button id = "like-button" onclick = "click_like()" data-post-id = "<?= $id ?>"  class  >
        <?php  
            $user_get_id = $_SESSION['id']?? null;
            


        ?>
        <?php if($user_get_id == null) :?>
            <svg class = "not-click-like-button"  width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
         <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
        <path d="M3.156 41.45c.04 1.47.906 2.79 2.343 3.097c.923.197 2.105.358 3.501.358s2.578-.16 3.5-.358c1.438-.307 2.305-1.628 2.344-3.097c.067-2.496.156-6.72.156-11.545s-.089-9.049-.156-11.544c-.04-1.47-.906-2.79-2.343-3.097A16.8 16.8 0 0 0 9 14.905c-1.396 0-2.578.162-3.5.359c-1.438.307-2.305 1.628-2.344 3.097C3.089 20.856 3 25.08 3 29.905s.089 9.049.156 11.545"/>
        <path d="M14.75 17.38c1.616-3.539 3.461-8.548 4.387-11.648c.5-1.675 2.006-2.875 3.747-2.718c1.095.098 2.362.283 3.55.623c2.135.612 3.284 2.71 3.443 4.926c.152 2.125.146 4.289.075 6.198c3.247-.305 6.432-.548 9.28-.696c3.04-.159 5.587 2.115 5.702 5.155c.214 5.637.038 14.68-2.554 21.702c-.905 2.45-3.317 3.908-5.929 3.963c-8.501.18-17.136-.873-22.133-1.631M9 38.905v-2"/>
            </g>
        </svg>
            
        <?php else :
            $like_get = "SELECT * FROM likes WHERE user_id = $user_get_id AND post_id = $id";
            $result_get_like = $conn->query($like_get);
           $like_get_result = $result_get_like->fetch_assoc();
            $islike = $like_get_result['islike'] ?? null; ?>
            
        <?php if($islike ==  0 ): ?>
            <svg class = "not-click-like-button"  width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
         <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
        <path d="M3.156 41.45c.04 1.47.906 2.79 2.343 3.097c.923.197 2.105.358 3.501.358s2.578-.16 3.5-.358c1.438-.307 2.305-1.628 2.344-3.097c.067-2.496.156-6.72.156-11.545s-.089-9.049-.156-11.544c-.04-1.47-.906-2.79-2.343-3.097A16.8 16.8 0 0 0 9 14.905c-1.396 0-2.578.162-3.5.359c-1.438.307-2.305 1.628-2.344 3.097C3.089 20.856 3 25.08 3 29.905s.089 9.049.156 11.545"/>
        <path d="M14.75 17.38c1.616-3.539 3.461-8.548 4.387-11.648c.5-1.675 2.006-2.875 3.747-2.718c1.095.098 2.362.283 3.55.623c2.135.612 3.284 2.71 3.443 4.926c.152 2.125.146 4.289.075 6.198c3.247-.305 6.432-.548 9.28-.696c3.04-.159 5.587 2.115 5.702 5.155c.214 5.637.038 14.68-2.554 21.702c-.905 2.45-3.317 3.908-5.929 3.963c-8.501.18-17.136-.873-22.133-1.631M9 38.905v-2"/>
            </g>
        </svg>
        <?php elseif($islike ==  1):?>
            <svg class = "click-like-button"  width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
    <g fill="blue" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
        <path d="M3.156 41.45c.04 1.47.906 2.79 2.343 3.097c.923.197 2.105.358 3.501.358s2.578-.16 3.5-.358c1.438-.307 2.305-1.628 2.344-3.097c.067-2.496.156-6.72.156-11.545s-.089-9.049-.156-11.544c-.04-1.47-.906-2.79-2.343-3.097A16.8 16.8 0 0 0 9 14.905c-1.396 0-2.578.162-3.5.359c-1.438.307-2.305 1.628-2.344 3.097C3.089 20.856 3 25.08 3 29.905s.089 9.049.156 11.545"/>
        <path d="M14.75 17.38c1.616-3.539 3.461-8.548 4.387-11.648c.5-1.675 2.006-2.875 3.747-2.718c1.095.098 2.362.283 3.55.623c2.135.612 3.284 2.71 3.443 4.926c.152 2.125.146 4.289.075 6.198c3.247-.305 6.432-.548 9.28-.696c3.04-.159 5.587 2.115 5.702 5.155c.214 5.637.038 14.68-2.554 21.702c-.905 2.45-3.317 3.908-5.929 3.963c-8.501.18-17.136-.873-22.133-1.631M9 38.905v-2"/>
    </g>
</svg>
            <?php else  : ?>

<svg class = "not-click-like-button"  width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
         <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
        <path d="M3.156 41.45c.04 1.47.906 2.79 2.343 3.097c.923.197 2.105.358 3.501.358s2.578-.16 3.5-.358c1.438-.307 2.305-1.628 2.344-3.097c.067-2.496.156-6.72.156-11.545s-.089-9.049-.156-11.544c-.04-1.47-.906-2.79-2.343-3.097A16.8 16.8 0 0 0 9 14.905c-1.396 0-2.578.162-3.5.359c-1.438.307-2.305 1.628-2.344 3.097C3.089 20.856 3 25.08 3 29.905s.089 9.049.156 11.545"/>
        <path d="M14.75 17.38c1.616-3.539 3.461-8.548 4.387-11.648c.5-1.675 2.006-2.875 3.747-2.718c1.095.098 2.362.283 3.55.623c2.135.612 3.284 2.71 3.443 4.926c.152 2.125.146 4.289.075 6.198c3.247-.305 6.432-.548 9.28-.696c3.04-.159 5.587 2.115 5.702 5.155c.214 5.637.038 14.68-2.554 21.702c-.905 2.45-3.317 3.908-5.929 3.963c-8.501.18-17.136-.873-22.133-1.631M9 38.905v-2"/>
            </g>
        </svg>
        <?php endif ; ?>
    <?php endif;?>



    </button>

 </div>
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

<script src="likeclick.js"></script>
</body>
</html>
<?php 
    
    require "database.php";
    $getpost = "SELECT * FROM `comments` WHERE post_id = $id";
    $result_post = $conn->query($getpost);
    
    
    

?>

<?php if($result_post->num_rows < 0) :?>
    <div class="empty-comment"><h1>không có bình luận nào</h1></div>

<?php else : while($post_get = $result_post->fetch_assoc()) : 
    $user_id = $post_get["user_id"];
    $userget = "SELECT * FROM `users` WHERE id = $user_id";
    $result_user = $conn->query($userget);
    $get_user = $result_user->fetch_assoc();  ?>
    <div class = "container">>
        <div  class = "bentrong">

    <div class = "user">
        <div class="user-trong">
            <div class="user_avata"><img src="avatardefault_92824.png" alt=""></div>
        <div class="username_post"> <?= $get_user['username'] ?></div>
        <div class="date">ngày tham gia :</div>
        <div class="post_count">Tổng số bài viết :</div>
        </div>
    </div>
        <div class = "post-container">
            <div class = "title-post">
            bình luận của : <?= $get_user['username'] ?>
        </div>
           <div class="post_noi_dung">
            
        
    <div class = "post-noi-dung">
        <?= $post_get['comment_text'] ?>

    </div></div>
        </div>


    </div>
    </div
    
<?php endwhile ; endif ;?>
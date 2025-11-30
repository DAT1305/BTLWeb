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
    <div class = "container">
        <div  class = "bentrong">

    <div class = "user-comment">
        <div id = "user-comment-profile"class="user-trong" data-usercomment = "<?= $get_user['id'] ?>">
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
</div>
    <script>
      document.addEventListener('click', function(e){ 
            let profilecomment = e.target.closest(".user-trong");
            let userIdComment = profilecomment.dataset.usercomment;
            if(profilecomment){
                window.location.href = "profile.php?user=" + userIdComment;
            }

      });  
    </script>
<?php endwhile ; endif ;?>
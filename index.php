<?php 
 session_start();
require'database.php';
 $keySearch = $_GET['search'] ?? null;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forum</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">

</head>
<style>
.link-create-post-2{
     width: 50%;
    display: flex;
    justify-content: flex-start;
}
</style>

    <?php 
    require 'header.php';
   
    ?>


<body>
    <div class = "container">
        <div class = "body-left-items">
           
                
                    
                    
                    
                
                    
                 
            <div class="double-nut">
                 <a  class = "link-create-post-2" href="postcreate.php">   <div  class="body-create-post-button" ><h3>tạo bài viết</h3></div></a>
                
            </div>
                     
            <div class="nut">
                <div class="text-moi-nhat"><h3>bài viết mới nhất</h3></div>
                <a class = "link-create-post" href="postall.php?show=all">   <div  class="body-create-post-button" ><h3>xem tất cả </h3></div></a> 
            </div>
               
            
            
           
   
            <!-- xử lí post tại đây  -->
             <!-- PHP START   -->
             <?php 
                $getpost = 'SELECT * FROM `posts` ORDER BY id DESC LIMIT 4';
                $result = $conn->query($getpost);
                // lấy ra 
            
                
             
             ?>
            <?php if($keySearch == null): ?>
           
         <?php while($post = $result->fetch_assoc()): ?>
            <?php 
                $id_user = $post['id_user'];
                $user = "SELECT username FROM `users` WHERE id = $id_user" ;
                $result_user = $conn->query($user);
                $user_get = $result_user->fetch_assoc();
                
                ?>
        <div class = "body-post-popular-container">
         <div class = "body-popular-post">
            <div class="body-post" data-id = " <?= $post['id']?>">
                <div class="body-post-image" style="background-image: url('<?= $post['post_image']?>')"></div>
                <div class="post-container">
                <div class="body-post-tilte"><?= $post['title']?></div>
                 <div class="body-post-tag"><?= $post['tags']?></div>
                 <div class="post-container-2">
                     <div class="body-post-author">
                      <img class="avatar-post-author" src="avatardefault_92824.png" alt="">
                      <div class="post-date-name">
                     <div class="username-post-author"><?=$user_get['username']?></div>
                   <div class="post-date"><?= $post['post_date']?></div>
                            </div>
                    </div>
                  <div class="interact-items-post">
                       <div class="body-post-views">số lượt xem: <?= $post['views']?> |</div>
                  <div class="body-post-likes">số lượt thích: <?= $post['likes']?> |</div>
                  <div class="body-post-comments">số lượt comment: <?= $post['comments']?> |</div>
                    </div>
              </div>
                </div>
            </div>
            </div>
    
     </div>
         
        <?php endwhile ; ?>

        <?php elseif($keySearch != null): 
                $getSearchPost = "SELECT * FROM `posts` WHERE title LIKE '%$keySearch%';
";
                $queryGetSearchPost = $conn->query($getSearchPost);
            ?>
            <?php if($queryGetSearchPost->num_rows > 0) :?>
            <!-- tiếp ở đây  -->
             <?php while($getpostSearch = $queryGetSearchPost->fetch_assoc()):
                 $id_user = $getpostSearch['id_user'];
                $user = "SELECT username FROM `users` WHERE id = $id_user" ;
                $result_user = $conn->query($user);
                $user_get = $result_user->fetch_assoc();
                ?>
                 <div class = "body-post-popular-container">
         <div class = "body-popular-post">
            <div class="body-post" data-id = " <?= $getpostSearch['id']?>">
                <div class="body-post-image" style="background-image: url('<?= $getpostSearch['post_image']?>')"></div>
                <div class="post-container">
                <div class="body-post-tilte"><?= $getpostSearch['title']?></div>
                 <div class="body-post-tag"><?= $getpostSearch['tags']?></div>
                 <div class="post-container-2">
                     <div class="body-post-author">
                      <img class="avatar-post-author" src="avatardefault_92824.png" alt="">
                      <div class="post-date-name">
                     <div class="username-post-author"><?=$user_get['username']?></div>
                   <div class="post-date"><?= $getpostSearch['post_date']?></div>
                            </div>
                    </div>
                  <div class="interact-items-post">
                       <div class="body-post-views">số lượt xem: <?= $getpostSearch['views']?> |</div>
                  <div class="body-post-likes">số lượt thích: <?= $getpostSearch['likes']?> |</div>
                  <div class="body-post-comments">số lượt comment: <?= $getpostSearchpost['comments']?> |</div>
                    </div>
              </div>
                </div>
            </div>
            </div>
    
     </div>
     
        <?php endwhile ; ?>
      <?php else: ?>
            <h1>không tìm thấy bài viết nào có kí tự '<?= $keySearch?> '</h1>
                <?php endif; ?>

                <?php endif; ?>
               

</div>



                <!-- -->
        <div class = "body-mid-items">
        <div class="popular-tag">tag phổ biến nhất</div>
        </div>
        <div class = "body-right-items">
            faafafa
        </div>
</div>
</div>


<!-- <script src="script.js"></script>     -->
 <script src = "post.js"></script>
</body>
</html>
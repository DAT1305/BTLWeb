<?php 
session_start();
require 'database.php';
$userId = $_GET['user'];
$getAllPostSql = "SELECT * FROM posts WHERE id_user = $userId";
$queryPost = $conn->query($getAllPostSql);
$user_sql = "SELECT * FROM users WHERE id = $userId";
        $user_query = $conn->query($user_sql);
        $user_get = $user_query->fetch_assoc();
$userSession = $_SESSION['id'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
      

<link rel="stylesheet" href="style.css">
</head>
<?php require 'header.php'; ?>
  

<body>
     <div class="user-container">
      <div class="user-name-avata">
        <div class="user-avata-2"><img width="100px" src="avatardefault_92824.png" alt=""></div>
      <div class="user-name-profile">
      <?= $user_get['username'] ?>
      </div>
      </div>
      <div class="user-interact">
        <div class="follow"><button id= "follow-button" data-followuser = "<?= $user_get['id'] ?>"  onclick = "follow()">
          <?php 
            $follow_sql_select = "SELECT * FROM follow WHERE user_id = $userSession AND follow_user_id = $userId  ";
            $query_follow = $conn->query($follow_sql_select);
            $get_follow = $query_follow->fetch_assoc();
            $isFollow = $get_follow['isfollowing']  ?? null;

          ?>
          <?php if($isFollow == null): ?>
            <div >theo dõi</div>
          <?php elseif($isFollow == 1): ?>
            <div >hủy theo dõi</div>
          <?php else : ?>
            theo dõi
            <?php endif ;?>

        </button></div>
      </div>
     </div>
       <?php while($get_post = $queryPost->fetch_assoc()):
        
     ?>
           <div class = "body-post-popular-container">
         <div class = "body-popular-post">
            <div class="body-post" data-id = " <?= $get_post['id']?>">
                <div class="body-post-image" style="background-image: url('<?= $get_post['post_image']?>')"></div>
                <div class="post-container">
                <div class="body-post-tilte"><?= $get_post['title']?></div>
                 <div class="body-post-tag"><?= $get_post['tags']?></div>
                 <div class="post-container-2">
                     <div class="body-post-author">
                      
                        <img class="avatar-post-author" src="avatardefault_92824.png" alt="">
                      
                      <div class="post-date-name">
                     <div class="username-post-author"><?=$user_get['username']?></div>
                   <div class="post-date"><?= $get_post['post_date']?></div>
                            </div>
                    </div>
                  <div class="interact-items-post">
                       <div class="body-post-views">số lượt xem: <?= $get_post['views']?> |</div>
                  <div class="body-post-likes">số lượt thích: <?= $get_post['likes']?> |</div>
                  <div class="body-post-comments">số lượt comment: <?= $get_post['comments']?> |</div>
                    </div>
              </div>
                </div>
            </div>
            </div>
    
     </div>

           
<?php endwhile ; ?>
 <script src = "post.js"></script>

</body>
</html>
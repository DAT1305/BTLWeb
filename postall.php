<?php 
    session_start();
    require 'database.php';
    $postall = $_GET['show'];

        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<?php require 'header.php'; ?>
<body>
     <?php if($postall == 'all'):
             $sqlpost = "SELECT * FROM posts ";
             $querypost = $conn->query($sqlpost);
            
        
        ?>
        <?php while($getpost = $querypost->fetch_assoc() ) : ?>
            <?php 
                 $user_postid = $getpost['id_user'];
             $sqluser = "SELECT * FROM users WHERE id = $user_postid ";
             $queryuser = $conn->query($sqluser);
                $getuser = $queryuser->fetch_assoc();
                ?>
                <div class = "body-post-popular-container">
         <div class = "body-popular-post">
            <div class="body-post" data-id = " <?= $getpost['id']?>">
                <div class="body-post-image" style="background-image: url('<?= $getpost['post_image']?>')"></div>
                <div class="post-container">
                <div class="body-post-tilte"><?= $getpost['title']?></div>
                 <div class="body-post-tag"><?= $getpost['tags']?></div>
                 <div class="post-container-2">
                     <div class="body-post-author">
                      
                        <img class="avatar-post-author" src="avatardefault_92824.png" alt="">
                      
                      <div class="post-date-name">
                     <div class="username-post-author"><?=$getuser['username']?></div>
                   <div class="post-date"><?= $getpost['post_date']?></div>
                            </div>
                    </div>
                  <div class="interact-items-post">
                       <div class="body-post-views">số lượt xem: <?= $getpost['views']?> |</div>
                  <div class="body-post-likes">số lượt thích: <?= $getpost['likes']?> |</div>
                  <div class="body-post-comments">số lượt comment: <?= $getpost['comments']?> |</div>
                    </div>
              </div>
                </div>
            </div>
            </div>
    
     </div>

        <?php endwhile;?>
       

        <?php endif;?>
 <script src = "post.js"></script>
</body>
</html>

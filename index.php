<?php 
 session_start();
require'database.php';
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
<header>
    <div class = "Header-container">
        <a href="#" class = "head-logo">
            <div><img width="50px" src="nike-lich-su-thiet-ke-logo.jpg"></div>
            <div>FORUM </div>

        </a>
        <div class = "head-mid-items">
            <!-- nút về trang chủ  -->
            <a href="#" class = "head-return"><img class = "head-svg-item" src="home-svgrepo-com.svg"></a>
            <!-- nút lịch để tạo sự kiện cho 1 vấn đề nào đó  -->
            <a href="#" class = "head-calendar"><img class = "head-svg-item" src="calendar.svg"></a>
            <!-- nút truy cập nhóm /group -->
            <a href="#" class = "head-group"><img class = "head-svg-item" src="group.svg"></a>
            <!-- thanh tìm kiếm -->
         <div class = "head-search">
        <input class = "search-bar" type="text" placeholder="nhập vào đâu để tìm kiếm">
        <img style = "background-color: rgb(153, 151, 151);" class = "head-svg-item" src="search.svg" class="search-icon" >
        </div>

        </div>
        
        <!-- những item bên phải  -->
         <div class = "head-right-item">
            <a href="#" class = "head-message"><img class = "head-svg-item" src="messgae.svg" ></a>
            <a href="#" class = "head-noti"><img class = "head-svg-item" src="notification-svgrepo-com.svg" ></a>
            <!-- user item  -->
            <a href="#" class = "head-user-items">
            
               <?php if(isset($_SESSION['username'])): ?>

    <div class="head-user-avata">
        <div class="user-avata"></div>
    </div>

    <div class="head-user-name">
        <button><?= $_SESSION['username'] ?></button>
        <div class="dropdown-menu">
        <div class="dropdown-menu-item">
        <button onclick="window.location.href = 'logout.php'">đăng xuất</button>
            </div>
        </div>
    </div>

    <?php else: ?>

    <div class="login-button"><a href="login.html">Đăng Nhập</a></div>
    <div class="signup-button"><a href="signup.html">Đăng kí</a></div>

    <?php endif; ?>
                

            </a>
            
         </div>
        
    </div>    
</header>

<body>
    <div class = "container">
        <div class = "body-left-items">
            <div class = "body-create-post">
                
                    <div class = "user-avata"></div>
                    <div class = "body-user-input">
                        <input class = "post-input" type="text" placeholder="bạn đang nghĩ về điều gì ">
                    </div>
                    <button class = "body-create-post-button" onclick="">Tạo bài viết</button>
                
            </div>
            
           
   <div class = "body-post-popular-container">
     <div class = "body-popular-post">
            <!-- xử lí post tại đây  -->
             <!-- PHP START   -->
             <?php 
                $getpost = 'SELECT * FROM `posts` LIMIT 4';
                $result = $conn->query($getpost);
                // lấy ra 
            
                
             
             ?>
            <!-- PHG END   -->
         <?php while($post = $result->fetch_assoc()): ?>
            <?php 
                $id_user = $post['id_user'];
                $user = "SELECT username FROM `users` WHERE id = $id_user" ;
                $result_user = $conn->query($user);
                $user_get = $result_user->fetch_assoc();
                
                ?>
        
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
                       <div class="body-post-views">số lượt xem: <?= $post['views']?></div>
                  <div class="body-post-likes">số lượt thích: <?= $post['likes']?></div>
                  <div class="body-post-comments">số lượt comment: <?= $post['comments']?></div>
                    </div>
              </div>
                </div>
            </div>
            
         
        <?php endwhile ; ?>




                <!-- -->
        <div class = "body-mid-items">

        </div>
        <div class = "body-right-items"></div>

</div>
    
     </div>

<!-- <script src="script.js"></script>     -->
 <script src = "post.js"></script>
</body>
</html>
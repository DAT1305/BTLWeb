<?php
    session_start();
    require "database.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tạo bài viết</title>
</head>
<?php 
require "header.php"
?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="postcreate.css">

<body>
 <div class="tilte-tao">tạo bài viết</div>
 <form  class = "body-create-post-2" action="upload.php" method="POST" enctype="multipart/form-data">
   
                     <div class="tren-create-post-2">
                       <div class="boc_avata"> <div class = "user-avata"></div></div>   
                    <div class = "body-user-input-2">
                    <div class="tieu-de-2"><input class = "post-input-2" type="text" name = "tieu_de" placeholder="nhập tiêu đề "></div>
                    <div class="boc-ngoai-them">
                        <div class="boc-text">
                        <div class="noi-dung-2"><textarea class = "post-input-2" type="text" name = "noi_dung" placeholder="nhập nội dung "></textarea></div>
                   <div class="image_upload-2"><input type="file" name = "file" ></div>
                    </div>
                    </div>
                </div>
                
                 
                <div class="nut-bam"><button type = "submit" class = "body-create-post-button-2" onclick="">Tạo bài viết</button></div>
                     </div>
                
                
                 </form>
            
    
</body>
</html>
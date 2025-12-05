<?php 
     session_start();
     require 'database.php';
     $userid = $_GET['id'] ?? null;
     
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container-group-create{
        
        display: flex;
    }
</style>
<link rel="stylesheet" href="left.css">
<body>
   
    <div class="container-group-create">
         <?php 
               include ('leftmenu.php')

    ?>
        <div class="ben-trong-create">
            
            <form action="gcreate.php" method="POST" enctype="multipart/form-data">
               <div class="name-group"> tên group <input type="text" name = "namegroup"></div>
                <div class="tieu-de-group">tiêu đề  <input name = "grouptitle"></div>
                <div class="bg-group">ảnh <input type="file" name="image-group"></div>
                <button type = "submit">tạo</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
    if($userid == null){
        echo "bạn cần đăng nhập trước khi tạo";
        header("location: login.html");
    }
    $nameGroup = isset($_POST['namegroup']) ? trim($_POST['namegroup']) : '';
    $titleGroup = isset($_POST['grouptitle']) ? trim($_POST['grouptitle']) : '';
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES['image-group']['name']);
    $upload = move_uploaded_file($_FILES["image-group"]["tmp_name"] , $target_file);
    if(!$upload){
        echo "<h1>upload thất bại</h1>";
    }
    $sqlgroup = "INSERT INTO `groups`(groupname, title , image , admin_id) VALUES ('$nameGroup' ,'$titleGroup' ,'$target_file' , $userid)";
    $queGroup = $conn->query($sqlgroup);
    if($queGroup){
        echo "tạo group thành công";
    }
?>

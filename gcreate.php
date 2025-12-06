<?php
    session_start();
    require 'database.php';
    $userid = $_SESSION['id'] ?? null;
    if($userid == null){
        echo "bạn cần đăng nhập trước khi tạo";
        header("location: login.html");
    }
    $nameGroup = isset($_POST['namegroup']) ? trim($_POST['namegroup']) : '';
    $titleGroup = isset($_POST['titleg']) ? trim($_POST['titleg']) : '';
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image-group"]["name"]);
     if($nameGroup == ""){
        echo "vui lòng nhập tên group";
        return;
    }
    if(strlen($titleGroup) < 1){
        echo "vui lòng nhập mô tả " . $titleGroup;
        return;

    }
    $upload = move_uploaded_file($_FILES["image-group"]["tmp_name"] , $target_file);
   
    if(!$upload){
        echo "<h1>upload thất bại</h1>";
    }
    $sqlgroup = "INSERT INTO `groups`(groupname, title , image , admin_id) VALUES ('$nameGroup' ,'$titleGroup' ,'$target_file' , $userid)";
    $queGroup = $conn->query($sqlgroup);
    if($queGroup){
        echo "tạo group thành công " . $titleGroup;
    }
?>

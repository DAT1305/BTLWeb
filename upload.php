<?php 
    session_start();
    require 'database.php';
    $userId = $_SESSION['id'] ?? null;
    if($userId == null){
        header("location: login.html");
    }
    else{
         $tieu_de = isset($_POST['tieu_de'] ) ? trim($_POST['tieu_de'] ) : '';
             $noi_dung = isset($_POST['noi_dung'] ) ? trim($_POST['noi_dung'] ) : '';
        $tag = 'tag1 , tag2 , tag3';
        if(!empty($_FILES['file']['name'])){
        $target_dir = "uploads/";
        $file_name = basename($_FILES["file"]["name"] );
        $target_file = $target_dir . $file_name;
        $upload =     move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
         $dang_bai_sql = "INSERT INTO posts(id_user , title , post_image , noi_dung ,tags) VALUES (? , ? ,? ,? ,?)";
        $prepare_sql = $conn->prepare($dang_bai_sql);
          

        $bind_sql = $prepare_sql->bind_param('issss' ,$userId , $tieu_de , $target_file,$noi_dung ,$tag );
        if($prepare_sql->execute()){
            echo "đăng bài thành công";
        }
        else{
           echo "đăng bài thất bại";  
        }
        }
        else{
            echo "nhập thiếu vui lòng nhập lại";
        }
        
    }





?>
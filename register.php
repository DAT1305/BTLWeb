<?php 
    require'database.php';
    // kiểm tra xem có dữ liệu từ form ko nếu có thì trim khoảng trắng ko thì gán rỗng
    $username = isset($_POST['username']) ? trim($_POST['username']) : '' ;
    $password = isset($_POST['password']) ? trim($_POST['password']) : '' ;
    if($username === '' && $password === ''){
          die('Vui lòng nhập username và password');
    }
    $insertsql = "INSERT INTO users(username , password ) VALUE(? , ?)";

    $stmt  = $conn->prepare($insertsql);
    $stmt->bind_param('ss',$username , $password );
    if($stmt->execute()){
        echo('đăng kí thành công ');
    }
    else{
        echo('đăng kí thất bại');
    }
    $stmt->close();
?>
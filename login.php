<?php 
    session_start();
    require'database.php';

    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $sql = "SELECT id , username , password  FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
     $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    //lấy ra
    $user = $result->fetch_assoc();
    if(!$user){
       echo('đăng nhập thất bại');
       header("location : login.html");
    }
    else{
        
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("location: index.php");
    }


?>
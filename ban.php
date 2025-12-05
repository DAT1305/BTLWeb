<?php 
    session_start();
    require 'database.php';
    require 'checkadmin.php';
    $userban = $_GET['user'] ?? null;
    if($userban == null){
        echo 'dữ liệu không hợp lệ';
        
    }
    else{
        $get_user_ban = "SELECT * FROM users WHERE id = $userban";
        $result_user_ban = $conn->query($get_user_ban);
        $fetch = $result_user_ban->fetch_assoc();
        if($fetch['is_banned'] == 0){
            $get_banuser = "UPDATE users SET is_banned = 1 WHERE id = $userban";
            $result_ban = $conn->query($get_banuser);
            header("location: admin.php?tab=usermana");
        }
        else{
            $get_banuser = "UPDATE users SET is_banned = 0 WHERE id = $userban";
            $result_ban = $conn->query($get_banuser);
            header("location: admin.php?tab=usermana");
        }
        
          
        
    }

?>

<?php
    
    require 'database.php';
    $user_id = $_SESSION['id'] ?? null;
    if($user_id == null){
        header("location: index.php");
       
    }
    function ifadmin($conn ,$id){
        $get_user = "SELECT * FROM users WHERE id = $id";
        $result = $conn->query($get_user);
        $user = $result->fetch_assoc();
        if($user['is_admin'] == 1){
            return 'admin';

        }
        else{
            return 'user';
        }
        
    }
    

if(ifadmin($conn , $_SESSION['id']) == 'user'){
        header("location: index.php");
        }
  

?>
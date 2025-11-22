<?php 
    session_start();
    require "database.php";
    $userfollowId = $_GET['user'];
    $user = $_SESSION['id'] ?? null;
    $followCheck = "SELECT * FROM follow WHERE follow_user_id = $userfollowId AND user_id = $user";
    $followQuery = $conn->query($followCheck);
    
    if($user == null){
        header("location: login.html");
    }

else{
$followGet = $followQuery->fetch_assoc();
if($followQuery->num_rows <= 0){
        $insertFollow = "INSERT INTO follow(user_id , follow_user_id , isfollowing) VALUES ($user,$userfollowId , 1)"; 
        $queryFollow = $conn->query($insertFollow);
        header("location: profile.php?user=$userfollowId" );

        
    }
    elseif($followGet['isfollowing'] == 1){
        $updateFollow = "UPDATE follow SET isfollowing = 0 WHERE follow_user_id = $userfollowId AND user_id = $user ";
        $followQueryUpdate = $conn->query($updateFollow);
        header("location: profile.php?user=$userfollowId" );
    }
    else {
         $updateFollow = "UPDATE follow SET isfollowing = 1 WHERE follow_user_id = $userfollowId AND user_id = $user ";
        $followQueryUpdate = $conn->query($updateFollow);
        header("location: profile.php?user=$userfollowId" );
    }
}
    
?>

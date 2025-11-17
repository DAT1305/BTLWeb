<?php 
session_start();
    require "database.php";
    $postid = $_GET['post'];
    $userid = $_SESSION['id'];
    $like_check = "SELECT * FROM likes WHERE post_id = $postid AND user_id = $userid";
    $like_check_result = $conn->query($like_check);
    $like_get_result = $like_check_result->fetch_assoc();
    


    if($like_check_result->num_rows <= 0){
        $insert_like = "INSERT INTO likes(user_id , post_id, islike) VALUES ($userid , $postid , 1) ";
        $prepare_like = $conn->prepare($insert_like);
        $excute_like = $prepare_like->execute();
        $like_total_update = "UPDATE posts SET likes = likes + 1 WHERE id = $postid";
        $like_total_query = $conn->query($like_total_update);
        header("location: post.php?id=$postid");
    }
    else{
        if($like_get_result['islike'] == 1){
            $update_like = "UPDATE likes SET islike = 0 WHERE post_id = $postid AND user_id = $userid ";
            $query_like = $conn->query($update_like);
            header("location: post.php?id=$postid");
            $like_total_update = "UPDATE posts SET likes = likes - 1 WHERE id = $postid";
        $like_total_query = $conn->query($like_total_update);
        }
        else {
             $update_like = "UPDATE likes SET islike = 1 WHERE post_id = $postid AND user_id = $userid ";
            $query_like = $conn->query($update_like);
            header("location: post.php?id=$postid");
            $like_total_update = "UPDATE posts SET likes = likes + 1 WHERE id = $postid";
            $like_total_query = $conn->query($like_total_update);
        }

    }

?>
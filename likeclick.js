
function click_like(){
    let like_button = document.getElementById('like-button');
    let postid = like_button.dataset.postId ;
    let userid = like_button.dataset.userid;
    window.location.href = "likeclick.php?post=" + postid ;
}

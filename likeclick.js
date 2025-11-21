
function click_like(){
    let like_button = document.getElementById('like-button');
    let postid = like_button.dataset.postId ;
    let userid = like_button.dataset.userid;
    window.location.href = "likeclick.php?post=" + postid ;
};

document.addEventListener('click', function(e){
    let profileClick = e.target.closest(".user");
    if(profileClick){
        
        let userIdProfile = profileClick.dataset.user;
        window.location.href = "profile.php?user=" + userIdProfile;
    }
}
);

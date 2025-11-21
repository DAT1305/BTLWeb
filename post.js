document.addEventListener('click' , function(e){
   let post = e.target.closest(".body-post");
   if(post){
    
    window.location.href = "post.php?id="+post.dataset.id;
   }
});
function follow(){
   let followButton = document.getElementById("follow-button");
   let followUserId = followButton.dataset.followuser;
   if(followUserId){
      window.location.href = "follow.php?user=" + followUserId;
   }
}
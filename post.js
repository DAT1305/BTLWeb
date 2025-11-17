document.addEventListener('click' , function(e){
   let post = e.target.closest(".body-post");
   if(post){
    
    window.location.href = "post.php?id="+post.dataset.id;
   }
});

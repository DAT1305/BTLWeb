document.addEventListener('click' , function(e){
   let post = e.target.closest(".body-post");
   if(post){
    alert(post.dataset.id);
    window.location.href = "post.php?id=" + post.dataset.id;
   }
});

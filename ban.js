function ban(){
     document.addEventListener('click' , function(e){
        let clicked = e.target.closest('.ban-button');
        let id = clicked.dataset.id ;
        window.location.href = "ban.php?user="+id;

     })
}
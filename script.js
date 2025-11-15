let post = [

  
  
  {
      id : 1,
      image:"url('post-image1.jpg')" ,
      tilte: "đây là post 1 ",
      views : 1000,
      likes: 200 , 
      comments : 10,
      author: {
        id: 1,
        username: "nguyendat",
        avatar: "avatardefault_92824.png" ,
        date: 5 ,
    
      },
      tag: ["tag1" , "tag2" , "tag3"],


    },
    {
      id : 2,
      image:"url('post-image1.jpg')" ,
      tilte: "đây là post 2 ",
      views : 1200,
      likes: 200 , 
      comments : 10,
      author: {
        id: 1,
        username: "nguyễn minh",
        avatar: "avatardefault_92824.png" ,
        date: 5 ,
    
      },
      tag: ["tag1" , "tag2" , "tag3"],


    },
    {
      id : 3,
      image:"url('post-image1.jpg')" ,
      tilte: "đây là post 3",
      views : 1200,
      likes: 200 , 
      comments : 10,
      author: {
        id: 1,
        username: "david dat",
        avatar: "avatardefault_92824.png" ,
        date: 5 ,
    
      },
      tag: ["tag1" , "tag2" , "tag3"],


    },
    {
      id : 4,
      image:"url('post-image1.jpg')" ,
      tilte: "đây là post 4",
      views : 1200,
      likes: 200 , 
      comments : 10,
      author: {
        id: 1,
        username: "david dat",
        avatar: "avatardefault_92824.png" ,
        date: 5 ,
    
      },
      tag: ["tag1" , "tag2" , "tag3"],


    }
    
];



let PostCount = document.getElementsByClassName('body-popular-post');
let imagePost = document.getElementsByClassName('body-post-image')
let titlePost = document.getElementsByClassName('body-post-tilte');
let viewsPost = document.getElementsByClassName('body-post-views');

let likesPost = document.getElementsByClassName('body-post-likes');

let commentsPost = document.getElementsByClassName('body-post-comments');
let usernameAuthorPost = document.getElementsByClassName('username-post-author');
let avatarAuthorPost = document.getElementsByClassName('avatar-post-author');
let datePost = document.getElementsByClassName('post-date');



let container = document.querySelector('.body-post-popular-container');



function renderPosts() {
    container.innerHTML = '';
    for (let i = 0; i < 4; i++) {
        let p = post[i];
     
        let html = `
        <div class = "body-popular-post" >
            <div class="body-post" data-id="${p.id}">
                <div class="body-post-image" style="background-image:${p.image}"></div>
                <div class="post-container">
                <div class="body-post-tilte">${p.tilte}</div>
                 <div class="body-post-tag">${p.tag.join(' | ')}</div>
                 <div class="post-container-2">
                     <div class="body-post-author">
                      <img class="avatar-post-author" src="${p.author.avatar}" alt="">
                      <div class="post-date-name">
                     <div class="username-post-author">${p.author.username}</div>
                   <div class="post-date">${p.author.date} ngày trước</div>
                            </div>
                    </div>
                  <div class="interact-items-post">
                       <div class="body-post-views">số lượt xem: ${p.views}</div>
                  <div class="body-post-likes">số lượt thích: ${p.likes}</div>
                  <div class="body-post-comments">số lượt comment: ${p.comments}</div>
                    </div>
              </div>
                </div>
            </div>
            </div>`;

            // chèn vào html 
        container.insertAdjacentHTML('beforeend', html);
        
        
    }
}
// lắng nghe click vào class 'body-post-popular-container để lấy id start'

container.addEventListener('click', function(e) {
  let postEl = e.target.closest('.body-post');
  if (!postEl) return; 
  let id = postEl.dataset.id;
  alert('Post id = ' + id);
  
});
// lắng nghe click vào class 'body-post-popular-container để lấy id end'



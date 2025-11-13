
let IsLogin = false;

let login = document.getElementById('login-form').onsubmit = function(e){
    e.preventDefault();
    let username =  document.getElementById('username').value;
    let password = document.getElementById('password').value;
    if(username == 'admin' && password == '12345' ){
        let user = {username : username};
        localStorage.setItem('user', JSON.stringify(user));
        alert('đăng nhập thành công' + localStorage.getItem('user'));
        window.location.href = 'index.html';
        IsLogin = true;
    }
}

// Ẩn hiện đăng nhập đăng ký
let register = document.querySelector(".register")
let registerForm = document.querySelector(".registerForm")
let loginForm = document.querySelector(".loginForm")

register.addEventListener("click", (e) => {
    loginForm.classList.add("hide")
    registerForm.classList.remove("hide")
})
let loginBtn = document.querySelector(".login_btn p")
loginBtn.addEventListener("click", (e) => {
    loginForm.classList.remove("hide")
    registerForm.classList.add("hide")
})

// Ẩn hiện password
var show = document.getElementById('show-1');

show.onclick = function(e) {
    var p1 = document.querySelector('.pas1'); 
    if(p1.type == 'password') {
        p1.type = 'text';
    } else {
        p1.type = 'password';
    }
}

var show = document.getElementById('show-2');

show.onclick = function(e) {
    var p2 = document.querySelector('.pas2');
    if(p2.type == 'password') {
        p2.type = 'text';
    } else {
        p2.type = 'password';
    }
}

var show = document.getElementById('show-3');

show.onclick = function(e) {
    var p3 = document.querySelector('.pas3');
    if(p3.type == 'password') {
        p3.type = 'text';
    } else {
        p3.type = 'password';
    }
}

// Kiểm tra 2 nút password có giống nhau không
var p1 = document.querySelector('.pas1'); 
var p2 = document.querySelector('.pas2');

var btn_dangky = document.querySelector('.registerBtn');
btn_dangky.onclick = function(e) {
    if(p1.value !== p2.value) {
        alert('Mặt khẩu không trùng khớp! :)');
    }
}
document.addEventListener('DOMContentLoaded', function() {
    var randomNumberElement1 = document.getElementById('random-number-1');

    // Tạo số ngẫu nhiên từ 0 đến 9
    var randomNumber = Math.floor(Math.random() * 100);

    // Hiển thị số ngẫu nhiên trong thẻ h1
    randomNumberElement1.textContent = randomNumber;

    var randomNumberElement2 = document.getElementById('random-number-2');

    // Tạo số ngẫu nhiên từ 0 đến 9
    var randomNumber = Math.floor(Math.random() * 100);

    // Hiển thị số ngẫu nhiên trong thẻ h1
    randomNumberElement2.textContent = randomNumber;
});


var correctCount = 0; // Số bài đúng
var wrongCount = 0; // Số bài sai

// Kiểm tra nếu đã có kết quả trước đó trong Local Storage
if (localStorage.getItem('correctCount')) {
    correctCount = parseInt(localStorage.getItem('correctCount'));
}

if (localStorage.getItem('wrongCount')) {
    wrongCount = parseInt(localStorage.getItem('wrongCount'));
}

// Dùng để phát âm thanh
function playCorrectSound() {
    var audio = document.querySelector('.sound_right');
    console.log([audio])
    audio.play();

    setTimeout(() => {

        location.reload()
    }, 3000)
}

// Dùng để phát âm thanh sai
function playCorrectSound2() {
    var audio = document.querySelector('.sound_hand');
    console.log([audio])
    audio.play();

    setTimeout(() => {

        location.reload()
    }, 3000)
}

// Dừng hành vi mặt định nút nộp bài
var a = document.querySelector('.btn_check');
a.addEventListener("click", (e) => {
    e.preventDefault()
})

var b = document.querySelector('.btn_dele');
b.addEventListener("click", (e) => {
    e.preventDefault()
})


function checkAnswer(event) {
    // Lấy giá trị của phép tính từ các thẻ h1
    var number1 = parseInt(document.getElementById('random-number-1').innerText);
    var number2 = parseInt(document.getElementById('random-number-2').innerText);
    var expectedSum = number1 - number2;

    // Lấy giá trị từ input
    var userInput = parseInt(document.getElementById('user-input').value);

     // Kiểm tra nếu giá trị nhập vào đúng với phép tính
     if (userInput === expectedSum) {
        // Cộng biến đếm số bài đúng
        correctCount++;
        playCorrectSound(); // Gọi hàm để phát âm thanh
    } else {
        // Cộng biến đếm số bài sai
        wrongCount++;
        playCorrectSound2(); // Gọi hàm để phát âm thanh
    }

     // Lưu kết quả vào Local Storage
    localStorage.setItem('correctCount', correctCount);
    localStorage.setItem('wrongCount', wrongCount);

    showResults();
}

function resetResults() {
    localStorage.removeItem('correctCount');
    localStorage.removeItem('wrongCount');
    correctCount = 0;
    wrongCount = 0;
    showResults();
}

function showResults() {
    var resultContainer = document.getElementById('result-container');
    resultContainer.innerHTML = 'Số bài đúng: ' + correctCount + '<br>Số bài sai: ' + wrongCount;
}

// Gọi hàm showResults() để hiển thị kết quả ban đầu
showResults();


// animation cho tag h1
window.addEventListener('DOMContentLoaded', function() {
    var number1Element = document.querySelector('.number-1');
    number1Element.classList.add('animate-left');

    var number2Element = document.querySelector('.number-2');
    number2Element.classList.add('animate-top');

    var userInputElement = document.getElementById('user-input');
    userInputElement.classList.add('animate-right');
});
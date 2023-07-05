<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="font/themify-icons/themify-icons.css">
    <title>Trang chủ</title>
</head>

<body>
    <header>
        <nav class="nav">
            <ul class="box_bt">
                <li class="li_exam">
                    Bài tập
                    <ul class="box_exam">
                        <li><a href="level.php">Phép +</a></li>
                        <li><a href="level2.php">Phép -</a></li>
                        <li><a href="level3.php">Phép x</a></li>
                        <li><a href="level4.php">Phép /</a></li>
                    </ul>
                </li>
                <li class="li-user">
                    <i class="ti-user"></i>
                    <ul class="box_user">
                        <li>
                            <a href="logout.php">
                                <button class="btn-dx" type="submit" name="dangxuat">Đăng xuất</button>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="admin.php" class="ti-home link__home"></a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="box__container">
            <div class="box__4-item">
                <h1 class="title__h1">Phép cộng</h1>
                <a href="https://www.youtube.com/@thanhnamedu">Học các phép toán</a>
                <p class="title__p">Phép cộng (tiếng Anh: Addition) thường được biểu thị bằng ký hiệu cộng "+" là một trong bốn phép toán cơ bản của số học cùng với phép trừ, nhân và chia. Kết quả của phép cộng hai số tự nhiên là giá trị tổng của hai số đó.</p>
                <div class="box__item-1">
                    <div class="item-1">
                        <video controls src="video/Thanh nấm - Toán lớp 1_ Dạy bé học phép toán cộng trong phạm vi 10.mp4"></video>
                    </div>
                    <div class="item-1">
                        <video controls src="video/Học làm phép toán cộng trừ với các ngón tay trong phạm vi 10 _ Dạy bé học tập đếm các ngón tay.mp4"></video>
                    </div>
                    <div class="item-1">
                        <video controls src="video/Bảng cộng 1 _ Phép toán cộng lớp 1 - Thanh nấm.mp4"></video>   
                    </div>
                    <div class="item-1">
                        <video controls src="video/Thanh nấm - Học đếm số bằng tiếng anh từ 0 đến 100 _ Count numbers in English from 1 to 100.mp4"></video>
                    </div>
                </div>

                <h1 class="title__h1">Phép trừ</h1>
                <a href="https://www.youtube.com/@thanhnamedu">Học các phép toán</a>
                <p class="title__p">Trong số học, phép trừ (tiếng Anh: Substraction) thường được biểu thị bằng ký hiệu trừ "-" là một trong bốn phép toán hai ngôi; nó là đảo ngược của phép cộng, nghĩa là nếu chúng ta bắt đầu với một số bất kỳ, thêm một số bất kỳ khác, và rồi bớt đi đúng số mà chúng ta thêm vào, chúng ta được con số chúng ta đã bắt đầu. Phép trừ được thể hiện bằng dấu trừ, đối lập với việc dùng dấu cộng cho phép cộng.</p>
                <div class="box__item-1">
                    <div class="item-1">
                        <video controls src="video/Bảng trừ 1, 2, 3 _ Phép toán trừ lớp 1 - Thanh nấm.mp4"></video>
                    </div>
                    <div class="item-1">
                        <video controls src="video/Toán trừ lớp 1 - Dạy bé học phép toán trừ trong phạm vi 10, Học làm toán trừ lớp 1 - Thanh nấm.mp4"></video>
                    </div>
                    <div class="item-1">
                        <video controls src="video/[Toán 1] Phép trừ trong phạm vi 4 _ Bé học Toán vui và dễ dàng với Bút Vàng.mp4"></video>   
                    </div>
                    <div class="item-1">
                        <video controls src="video/Phép trừ trong phạm vi 10 - Toán lớp 1 SGK mới [OLM.VN].mp4"></video>
                    </div>
                </div>

                <h1 class="title__h1">Phép nhân</h1>
                <a href="https://www.youtube.com/@thanhnamedu">Học các phép toán</a>
                <p class="title__p">Phép nhân (tiếng Anh: Multiplication) là phép tính toán học của một số bởi số khác. Nó là một trong 4 phép tính cơ bản của số học (3 phép tính còn lại là cộng, trừ, chia). Phép nhân tác động tới hai hay nhiều đối tượng toán học (thừa số, còn gọi là nhân tử) để tạo ra một đối tượng toán học mới. Ký hiệu của phép nhân là "×" (ngắn gọn hơn là "·", trong lập trình là dấu *).</p>
                <div class="box__item-1">
                    <div class="item-1">
                        <video controls src="video/Bảng trừ 1, 2, 3 _ Phép toán trừ lớp 1 - Thanh nấm.mp4"></video>
                    </div>
                    <div class="item-1">
                        <video controls src="video/Toán trừ lớp 1 - Dạy bé học phép toán trừ trong phạm vi 10, Học làm toán trừ lớp 1 - Thanh nấm.mp4"></video>
                    </div>
                    <div class="item-1">
                        <video controls src="video/[Toán 1] Phép trừ trong phạm vi 4 _ Bé học Toán vui và dễ dàng với Bút Vàng.mp4"></video>   
                    </div>
                    <div class="item-1">
                        <video controls src="video/Phép trừ trong phạm vi 10 - Toán lớp 1 SGK mới [OLM.VN].mp4"></video>
                    </div>
                </div>

                <h1 class="title__h1">Phép chia</h1>
                <a href="https://www.youtube.com/@thanhnamedu">Học các phép toán</a>
                <p class="title__p">Trong toán học, đặc biệt là trong số học sơ cấp, phép chia (tiếng Anh: Division) thường được biểu thị bằng dấu ":", "/" hoặc "÷" là một phép toán số học.</p>
                <div class="box__item-1">
                    <div class="item-1">
                        <video controls src="video/Thanh nấm - Toán lớp 1_ Dạy bé học phép toán cộng trong phạm vi 10.mp4"></video>
                    </div>
                    <div class="item-1">
                        <video controls src="video/Học làm phép toán cộng trừ với các ngón tay trong phạm vi 10 _ Dạy bé học tập đếm các ngón tay.mp4"></video>
                    </div>
                    <div class="item-1">
                        <video controls src="video/Bảng cộng 1 _ Phép toán cộng lớp 1 - Thanh nấm.mp4"></video>   
                    </div>
                    <div class="item-1">
                        <video controls src="video/Thanh nấm - Học đếm số bằng tiếng anh từ 0 đến 100 _ Count numbers in English from 1 to 100.mp4"></video>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>
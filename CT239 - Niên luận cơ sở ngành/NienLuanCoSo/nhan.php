<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cong.css">
    <link rel="stylesheet" href="font/themify-icons/themify-icons.css">
    <title>Phép cộng</title>
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
        <div class="box_container">
            <h1>Phép nhân 1 chữ số</h1>
            <form action="">
                <div class="box__flex">
                    <div class="number-1 animate-left">
                        <h1 id="random-number-1"></h1>
                    </div>
                    <h1>x</h1>
                    <div class="number-2 animate-top">
                        <h1 id="random-number-2"></h1>
                    </div>
                    <h1>=</h1>
                    <input id="user-input" type="number" class="animate-right">
                </div>
                <div id="result-container"></div>
                <button type="submit" class="btn_check" onclick="checkAnswer()">Nộp bài</button>
                <button class="btn_dele" onclick="resetResults()">Hủy kết quả</button>
                <audio class="sound_right" src="/NienLuanCoSo/music/Tieng-vo-tay-ngan-www_tiengdong_com.mp3"></audio>
                <audio class="sound_hand" src="/NienLuanCoSo/music/Am-thanh-tra-loi-sai-www_tiengdong_com.mp3"></audio>
            </form>
            <div class="arrow_right">
                <a href="nhan_2.php">Cấp 2</a>
            </div>  
        </div>
        
        <script src="js/nhan.js"></script>
    </main>
</body>
</html>
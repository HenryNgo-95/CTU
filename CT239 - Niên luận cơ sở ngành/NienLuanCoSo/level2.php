<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/level.css">
    <link rel="stylesheet" href="font/themify-icons/themify-icons.css">
    <title>Trang chủ</title>
</head>

<html>
    <header>
        <nav class="nav">
            <ul class="box_bt">
                <li class="li_exam">
                    Bài tập
                    <ul class="box_exam">
                        <li><a href="cong.php">Phép +</a></li>
                        <li><a href="tru.php">Phép -</a></li>
                        <li><a href="nhan.php">Phép x</a></li>
                        <li><a href="chia.php">Phép /</a></li>
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

    <body>
        <div class="box__content">
            <h2>Danh sách bài tập</h2>
            <div class="layout-1">
                <div class="level">
                    <a href="tru.php">
                        <p>cấp 1
                            <span class="hinh_vuong"></span>
                        </p>
                    </a>
                </div>
                <div class="level-2">
                    <p>Trình độ dễ</p>
                    <p>1 chữ số</p>
                </div>
            </div>

            <div class="layout-1">
                <div class="level">
                    <a href="tru_2.php">
                        <p>cấp 2
                            <span class="hinh_vuong"></span>
                        </p>
                    </a>
                </div>
                <div class="level-2">
                    <p>Trình độ trung bình</p>
                    <p>2 chữ số</p>
                </div>
            </div>

            <div class="layout-1">
                <div class="level">
                    <a href="">
                        <p>cấp 3
                            <span class="hinh_vuong"></span>
                        </p>
                    </a>
                </div>
                <div class="level-2">
                    <p>Trình độ khó</p>
                    <p>3 chữ số</p>
                </div>
            </div>
        </div>
        <audio class="nhac" src="/NienLuanCoSo/music/happy-today-155815.mp3"></audio>
        <script>
        // Bắt sự kiện khi trang được tải
        window.addEventListener('load', function() {
            // Lấy phần tử audio
            var audio = document.querySelector('.nhac');
            // Bật nhạc
            audio.play();
        });
        </script>
    </body>
</html>
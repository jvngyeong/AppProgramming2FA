<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header class="top1">
            <img src="images/main_icon.png" alt="" class="main_leftimage">
            <a style="padding:25px; float:right;">
                <?php
					session_start();
					echo $_SESSION['id']."님";
					?>
            </a>
        </header>
        
        <footer id="footer2" class="footer2">
            <div class="menu_btn">
                <a href="#" class="menu_btn1">       
                    <img src="images/menu_icon.png" style="width:50px; height:50px; margin-bottom:6px;">
                </a>
            </div>
            <button class="btn2"><img
                src="images/home_icon.png"
                onclick="location.href='main.php'"
                style="width:50px; height:50px; float: center;"></button>
            <button class="btn3"><img
                src="images/setting_icon.png"
                onclick="location.href='setting.php'"
                style="width:50px; height:50px; margin-bottom:6px;"></button>
        </footer>

        <div class="menu_bg"></div>
        <div class="sidebar_menu">
            <div class="close_btn">
                <a href="#" style= "margin:5px; width:35px; height:35px;">       
                <img style="margin:5px; style=width:35px; height:35px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjMuOTU0IDIxLjAzbC05LjE4NC05LjA5NSA5LjA5Mi05LjE3NC0yLjgzMi0yLjgwNy05LjA5IDkuMTc5LTkuMTc2LTkuMDg4LTIuODEgMi44MSA5LjE4NiA5LjEwNS05LjA5NSA5LjE4NCAyLjgxIDIuODEgOS4xMTItOS4xOTIgOS4xOCA5LjF6Ii8+PC9zdmc+">
                </a>
            </div>
            <br>
            <button type="button" class="btn btn--red" class="logout" onclick="location.href='logout.php'">
            <span class="btn__txt">로그아웃</span>
            <i class="btn__bg" aria-hidden="true"></i>
            <i class="btn__bg" aria-hidden="true"></i>
            <i class="btn__bg" aria-hidden="true"></i>
            <i class="btn__bg" aria-hidden="true"></i>
            </button>
            <ul class="menu_wrap">
            <li><a href="main.php" style="text-align:center">홈 화면</a></li>
            <li><a href="setting.php">환경 설정</a></li>
            <li><a href="montoons.php">월요웹툰</a></li>
            <li><a href="tuetoons.php">화요웹툰</a></li>
            <li><a href="wedtoons.php">수요웹툰</a></li>
            <li><a href="thutoons.php">목요웹툰</a></li>
            <li><a href="fritoons.php">금요웹툰</a></li>
            <li><a href="sattoons.php">토요웹툰</a></li>
            <li><a href="suntoons.php">일요웹툰</a></li>
            <li><a href="myzzim.php">찜 목록</a></li>
            </ul>
        </div>

        <div id="test" class="slide-in2" style="padding-top:100px;">
        <div class="col-md-6 col-lg-5">
						<div class="login-wrap p-4 p-md-5">
                    <img src="images/change_icon.png" alt="My Image" style="width: 80px; height: 80px; object-fit: cover;">
					<h2 class="text-center mb-4">변경하실 전화번호를<br>입력하세요.<br><br><br><br><br><br></h2>
                    <form action="phone_change_process.php" class="login-form" method="post">
						<div class="form-group">
                        <input style="margin:auto;" type="text" name="phone" id="phone" class="Input" placeholder="Phone" required>
                        </div>
                        <br>
					<div class="form-group">
						<button type="submit" class="btn btn--blue">변경</button>
					</div>
				</form>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="js/motion.js"></script>
    </body>

</html>
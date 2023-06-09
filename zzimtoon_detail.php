<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="css/reset.css">
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
                    $host = 'localhost';
                    $user = 'wnsrud1133';
                    $pw = '1234';
                    $dbName = 'SK';
                    $con = new mysqli($host, $user, $pw, $dbName);

                    $toonTitle = $_POST['toonTitle'];
                    $query = "select * from zzim where toonTitle = '$toonTitle'";
                    $result = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($result);
                    $img = $row['img'];
                    $toonName = $row['toonName'];
                    $description = $row['description'];
                    $writer = $row['writer'];
                    $platform = $row['platform'];
                    $link = $row['link'];
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
                <img style="margin:5px; width:35px; height:35px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjMuOTU0IDIxLjAzbC05LjE4NC05LjA5NSA5LjA5Mi05LjE3NC0yLjgzMi0yLjgwNy05LjA5IDkuMTc5LTkuMTc2LTkuMDg4LTIuODEgMi44MSA5LjE4NiA5LjEwNS05LjA5NSA5LjE4NCAyLjgxIDIuODEgOS4xMTItOS4xOTIgOS4xOCA5LjF6Ii8+PC9zdmc+">
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

        <div id="test" class="slide-in2">
            <ul class="monday" style="height:100%;">
                <li class="DailyListItem">
                    <div class="thumbnail">
                        <?php
                            echo "<img class='toonimg' src='$img'/>";
                        ?>
                    </div>
                    <div class="toontxt">
                        <?php
                        echo "$toonName";
                        ?>
                    <div>
                </li>
                <li class="DailyListItem">
                <?php
                echo "작가 = $writer<br><br>";
                echo "플랫폼 = $platform";
                ?>
                <li style="display:block;">
                <?php
                echo "$description";
                ?>
                </li>
                <div>
                <form action="zzim_remove.php" method="post">
                    <input type="hidden" name="toonTitle" id="toonTitle" value="<?php echo $row['toonTitle'];?>">
                    <input type="hidden" name="img" id="img" value="<?php echo $row['img'];?>">
                    <input type="hidden" name="toonName" id="toonName" value="<?php echo $row['toonName'];?>">
                    <input type="hidden" name="day" id="day" value="<?php echo $row['day'];?>">
                    <input type="hidden" name="description" id="description" value="<?php echo $row['description'];?>">
                    <input type="hidden" name="writer" id="writer" value="<?php echo $row['writer'];?>">
                    <input type="hidden" name="platform" id="platform" value="<?php echo $row['platform'];?>">
                    <input type="hidden" name="link" id="link" value="<?php echo $row['link'];?>">
                    <?php
                    echo "<button id = 'zzimbtn' class='btn btn--purple' type='submit'>찜 취소</button>";
                    ?>
                </form>

                <?php 
                    echo "<button id = 'detailbtn' class='btn btn--green' onclick=\"location.href='$link'\">보러 가기</button>"
                ?>
            <div>
            </ul>
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
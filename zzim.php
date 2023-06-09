<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php
		$host = 'localhost';
		$user = 'wnsrud1133';
		$pw = '1234';
		$dbName = 'SK';
		$mysqli = new mysqli($host, $user, $pw, $dbName);
        session_start();
        $user_id = $_SESSION['id'];
        $toonTitle = $_POST['toonTitle'];
        $img = $_POST['img'];
        $toonName = $_POST['toonName'];
        $day = $_POST['day'];
        $description = $_POST['description'];
        $writer = $_POST['writer'];
        $platform = $_POST['platform'];
        $link = $_POST['link'];

        $sql = "insert into zzim (
            user_id,
            toonTitle,
            img,
            toonName,
            day,
            description,
            writer,
            platform,
            link
        )";
        
        $sql = $sql. "values (
                '$user_id',
                '$toonTitle',
                '$img',
                '$toonName',
                '$day',
                '$description',
                '$writer',
                '$platform',
                '$link'
        )";
        
        if($mysqli->query($sql)){ 
			echo '<script>alert("찜 목록에 추가했습니다.")</script>';
            echo "<script>location.href='myzzim.php'</script>";
		}else{ 
           echo '<script>alert("이미 찜한 웹툰입니다.")</script>';
           echo "<script>location.href='main.php'</script>";
		}
		mysqli_close($mysqli);
	?>
</html>
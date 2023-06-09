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

        $sql = "DELETE FROM zzim WHERE toonTitle = '".$toonTitle."'";

        if($mysqli->query($sql)){ 
            echo "
            <script type=\"text/javascript\">
                alert(\"찜 목록에서 제거했습니다.\");
                location.href = \"main.php\";
            </script>";
        }else{
            echo '<script>alert("실패했습니다.")</script>';
            echo "<script>location.href='main.php'</script>";
        }
        mysqli_close($mysqli);

        ?>
</html>
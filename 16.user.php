<html>
    <head><title>使用者管理</title></head>
    <body>  
        <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {
            echo "請登入帳號";  //輸入登入帳號
            echo "<meta http-equiv=REFRESH content='3, url=login.html'>";  //連結資訊網址
        }
        else{
            echo "
            <h1>使用者管理</h1>              
            [a href=bulletin.php>回佈告欄列表</a>]<br>
            <table border =1>
            <tr><td></td><td>帳號</td><td>密碼</td></tr>
            "; //設立使用者管理，建立布告欄列表及輸入帳號密碼的格式
           

            $conn=mysqli_connect("localhost","root","","mydb");
            $result=mysqli_query($conn,"select * from user");  //select*form user
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>"; //建立輸入完帳號密碼時，輸入錯誤可以直接點選刪除
            }

            echo "</table>";
        }
        ?>
        </body>
</html>
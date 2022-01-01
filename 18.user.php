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
            echo "<h1>使用者管理</h1>  
            [<a href=user_add_form.php>新增使用者</a>][<a href=bulletin.php>回佈告欄列表</a>]<br>  
                <table border=1>  
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            //可建立使用者管理，當中可以新增使用者、回布告欄列表、設帳號、密碼方格
            
            $conn=mysqli_connect("localhost","root","","mydb");  
            $result=mysqli_query($conn, "select * from user");  //from user
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=user_edit_form.php?id={$row['id']}>修改</a>||<a href=user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            //設立echo變數 修改、刪除
            echo "</table>";
        }
    ?> 
    </body>
</html>
            
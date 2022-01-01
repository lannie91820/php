<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {//輸入帳號
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//連結資訊網址
    }
    else{  //設立title content type time
        $conn=mysqli_connect("localhost","root","", "mydb");
        $sql="insert into bulletin(title, content, type, time)      
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";  //顯示新增命令錯誤
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";  //或是顯示新增佈告成功 三秒後回到網頁
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";  //回到連結資訊網址
        }
    }
?>
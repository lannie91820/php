<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {  //輸入id
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";  //連結網址
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>登出</a>][<a href=user_add_form.php>新增使用者</a>][<a href=user.php>管理使用者</a>][<a href=bulletin_add_form.php>新增佈告</a>]</a><br>";
        //設立新增使用者、管理使用者、新增佈告,輸入id及登出設置
        $conn=mysqli_connect("localhost","root","", "mydb");
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";  //網頁會出現佈告編號、佈告類別、標題、佈告內容及發佈時間
        while ($row=mysqli_fetch_array($result)){  //以下是編排程式
            echo "<tr><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>
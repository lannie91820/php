   
<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>登出</a>][<a href=user.php>管理使用者</a>][<a href=bulletin_add_form.php>新增佈告</a>]<br>";  //會出現的按鍵設定
        $conn=mysqli_connect("localhost","root","", "mydb");
        $result=mysqli_query($conn, "select * from bulletin");  //select * from bulletin
        echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";//點選進入後 的方格內容設定
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td>"; //echo是變數 設立佈告編號、佈告類別、標題、佈告內容、發布時間的變數
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
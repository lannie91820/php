
<?php
    error_reporting(0);    //同上7.bulletin.php一樣 在xampp中建立一個資料夾 文字內容放在資料夾當中進行文字轉換為表格
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>logout</a>]<br>";
        $conn=mysqli_connect("localhost","root","", "mydb"); //建立資料庫連結 //資料庫要事先從網站做建立，本次使用老師提供的xampp所寫的資料
        $result=mysqli_query($conn, "select * from bulletin"); //從建立的資料庫檔案中 查詢資料夾bulletin
        echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){
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
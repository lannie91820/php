   
<?php
    error_reporting(0);
    $conn=mysqli_connect("localhost","root","", "mydb");       //bulletin是在xampp中建立的資料內容
    $result=mysqli_query($conn, "select * from bulletin");     //從select中 叫出一開始在xampp中建立的bulletin
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";              //將一連串資訊做成表格式 讓人一目瞭然
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
    echo "</table>"
?>
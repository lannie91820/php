<?php
    error_reporting(0);
    
    $conn = mysqli_connect("localhost","root","", "mydb");         //建立資料庫連結
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");                                      //key錯時顯示資料連結錯誤

    mysqli_set_charset($conn, "utf8");
    $result=mysqli_query($conn, "select * from user");             //from user-資料夾 要事先在xampp中做建立
    while ($row=mysqli_fetch_array($result)) {
        echo $row[id];                                             //要調資料時 輸入id 及 pwd 如果正確才可進入
        echo " ";
        echo $row[pwd];
        echo "<br>";                                               //同作法輸入id及pwd
    }
?>
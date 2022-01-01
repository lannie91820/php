<?php
   error_reporting(0);
   session_start();
    if (!$_SESSION["id"]){
        echo "請登入帳號";//輸入登入帳號
        echo "<meta http-equiv=REFRESH content='3,url=login.html'>";//連結資訊網址
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");
        $sql="delete from bulletin where bid ='($_GET[bid])'";  //delete from bulletin where bid
        #echo #sql;
        if (!mysqli_query($conn,$sql)){
            echo"佈告刪除錯誤";  //if顯示佈告刪除錯誤
        }else{
            echo "佈告刪除成功"; //或佈告刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3,url=bulletin.php'>";//連結資訊網址
        }
    ?>
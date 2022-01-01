<?php

error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號";  //輸入帳號
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//連結至資訊網址
}
else{   
    $conn=mysqli_connect("localhost","root","","mydb");
    if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){ //update user set pwd 
        echo "修改錯誤";   //延續19.user_etit_form修改使用者-修改錯誤
        echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
    }else{
        echo "修改成功，三秒鐘後回到網頁"; //延續19.user_etit_form修改使用者-修改成功 三秒連到網頁
        echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
    }
}

?>
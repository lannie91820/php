<?php
session_start();
unset($_SESSION["id"]);  //輸入id
echo "登出成功....";      //輸入正確 顯示登出成功
echo "<meta http-equiv=REFRESH content='3, ur1=login.html'>";
?>
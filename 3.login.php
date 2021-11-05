<?php 
    if (($_POST ["id"] == "Lannie" ) && ( $_POST["pwd"]=="Lannie1234")) //設定帳號密碼
        echo  "welcome" ;  //輸入正確:歡迎
    else
        echo  "Login failur" ; //輸入錯誤:登入錯誤
?>
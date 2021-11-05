<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {             //同前面的login意思一樣,本題使用if else 
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE) {  //輸入帳號密碼正確-welcome
    echo "welcome!!";
    echo "<meta http-equiv=REFRESH content='3, ur1=bubblen.php'>";
   }

  else{
    echo "id/pwd wrong!!";  //輸入密碼錯誤-wrong 重置回到原始頁面再次重新輸入
    echo "<meta http-equiv=REFRESH content='3, ur1=login.html'>";
  }
     
?>
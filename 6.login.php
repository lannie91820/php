<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");           //前面與4-1.4-2.5做法相同
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來               
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE)
     echo "welcome!!";                                           //輸入正確帳號密碼 welcome
  else 
     echo "id/pwd wrong!!";                                      //輸入錯誤帳號密碼 wrong
?>